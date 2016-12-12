<?php

class ProductsController extends ControllerBase
{

	public fuction editAction($id)
	{
		$product = null;
		if (!empty($id)) {
			$product = Products::findFirstByIdProducts((int) $id);
			$this->view->product = $product;
		}

		if ($this->request->isPost()) {
			
			if ($product) {

				$resultFileUpload = $this->fileUpload(
					$this->request,
					"/public/conex/products/",
					"services/index"
				);

				if (is_string($resultFileUpload)) {

					$product->name = $this->request->getPost("name", array(
		                "string",
		                "striptags"
		            ));

		            $product->id_product_type = $this->request->getPost("productType", array(
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

		            $product->description = $this->request->getPost("description", array(
		                "string",
		                "striptags"
		            ));

		            $product->logo = $resultFileUpload;

		            if ($product->save()) {
		                $this->flash->success("Actualización completada");
		            } else {
		                foreach ($product->getMessages() as $message) {
		                    $this->flash->error(
		                        $message
		                    );
		                }
		            }
				}
			}
		}

		$this->response->redirect("services/index");
	}
}