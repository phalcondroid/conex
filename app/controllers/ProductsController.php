<?php

class ProductsController extends ControllerBase
{

	public function initialize()
	{
		$this->view->setLayout("main");
	}

	/**
	 *
	 */
	public function indexAction()
	{

	}

	public function editAction($id)
	{
		$this->view->productType     = ProductType::find("status = 1");
        $this->view->productCapacity = ProductCapacity::find("status = 1");

		if (!empty($id)) {
			$product = Products::findFirstByIdProducts((int) $id);
			$this->view->companies = Company::find(array(
	            "conditions" => "id_users = ?0 and status = 1",
	            "bind" => array(
	                0 => $this->session->get("user")->id_users
	            )
	        ));
			$this->view->product   = $product;
			$this->view->idProduct = $id;
		}

		if ($this->request->isPost()) {

			if ($product) {

				$this->uploader->setRequest($this->request);
           		$fileResult = $this->uploader->upload("/public/conex/products/");

				$product->name = $this->request->getPost("name", array(
	                "string",
	                "striptags"
	            ));

	            $product->id_product_type = $this->request->getPost("productType", array(
	                "int",
	                "striptags"
	            ));

	            $product->id_company = $this->request->getPost("company", array(
	                "int",
	                "striptags"
	            ));

	            $product->id_product_capacity = $this->request->getPost("productCapacity", array(
	                "int",
	                "striptags"
	            ));

	            $product->slogan = $this->request->getPost("slogan", array(
	                "string",
	                "striptags"
	            ));

	            $product->description = $this->request->getPost("description");

	            if (is_string($fileResult)) {
	            	$product->logo = $fileResult;
	            }

	            if ($product->save()) {
	                $this->flash->success("Actualización completada");
	            } else {
	                foreach ($product->getMessages() as $message) {
	                    $this->flash->error(
	                        $message
	                    );
	                }
	            }
				$this->response->redirect("services/index");
			} else {
				$this->response->redirect("services/index");
			}
		}
	}
}
