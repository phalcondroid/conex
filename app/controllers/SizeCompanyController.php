<?php
 
use Phalcon\Mvc\Model\Criteria;
use Phalcon\Paginator\Adapter\Model as Paginator;


class SizeCompanyController extends ControllerBase
{
    /**
     * Index action
     */
    public function indexAction()
    {
        $this->persistent->parameters = null;
    }

    /**
     * Searches for size_company
     */
    public function searchAction()
    {
        $numberPage = 1;
        if ($this->request->isPost()) {
            $query = Criteria::fromInput($this->di, 'SizeCompany', $_POST);
            $this->persistent->parameters = $query->getParams();
        } else {
            $numberPage = $this->request->getQuery("page", "int");
        }

        $parameters = $this->persistent->parameters;
        if (!is_array($parameters)) {
            $parameters = [];
        }
        $parameters["order"] = "id_size_company";

        $size_company = SizeCompany::find($parameters);
        if (count($size_company) == 0) {
            $this->flash->notice("The search did not find any size_company");

            $this->dispatcher->forward([
                "controller" => "size_company",
                "action" => "index"
            ]);

            return;
        }

        $paginator = new Paginator([
            'data' => $size_company,
            'limit'=> 10,
            'page' => $numberPage
        ]);

        $this->view->page = $paginator->getPaginate();
    }

    /**
     * Displays the creation form
     */
    public function newAction()
    {

    }

    /**
     * Edits a size_company
     *
     * @param string $id_size_company
     */
    public function editAction($id_size_company)
    {
        if (!$this->request->isPost()) {

            $size_company = SizeCompany::findFirstByid_size_company($id_size_company);
            if (!$size_company) {
                $this->flash->error("size_company was not found");

                $this->dispatcher->forward([
                    'controller' => "size_company",
                    'action' => 'index'
                ]);

                return;
            }

            $this->view->id_size_company = $size_company->id_size_company;

            $this->tag->setDefault("id_size_company", $size_company->id_size_company);
            $this->tag->setDefault("size_company", $size_company->size_company);
            $this->tag->setDefault("status", $size_company->status);
            $this->tag->setDefault("created_at", $size_company->created_at);
            
        }
    }

    /**
     * Creates a new size_company
     */
    public function createAction()
    {
        if (!$this->request->isPost()) {
            $this->dispatcher->forward([
                'controller' => "size_company",
                'action' => 'index'
            ]);

            return;
        }

        $size_company = new SizeCompany();
        $size_company->size_company = $this->request->getPost("size_company");
        $size_company->status = $this->request->getPost("status");
        $size_company->created_at = $this->request->getPost("created_at");
        

        if (!$size_company->save()) {
            foreach ($size_company->getMessages() as $message) {
                $this->flash->error($message);
            }

            $this->dispatcher->forward([
                'controller' => "size_company",
                'action' => 'new'
            ]);

            return;
        }

        $this->flash->success("size_company was created successfully");

        $this->dispatcher->forward([
            'controller' => "size_company",
            'action' => 'index'
        ]);
    }

    /**
     * Saves a size_company edited
     *
     */
    public function saveAction()
    {

        if (!$this->request->isPost()) {
            $this->dispatcher->forward([
                'controller' => "size_company",
                'action' => 'index'
            ]);

            return;
        }

        $id_size_company = $this->request->getPost("id_size_company");
        $size_company = SizeCompany::findFirstByid_size_company($id_size_company);

        if (!$size_company) {
            $this->flash->error("size_company does not exist " . $id_size_company);

            $this->dispatcher->forward([
                'controller' => "size_company",
                'action' => 'index'
            ]);

            return;
        }

        $size_company->size_company = $this->request->getPost("size_company");
        $size_company->status = $this->request->getPost("status");
        $size_company->created_at = $this->request->getPost("created_at");
        

        if (!$size_company->save()) {

            foreach ($size_company->getMessages() as $message) {
                $this->flash->error($message);
            }

            $this->dispatcher->forward([
                'controller' => "size_company",
                'action' => 'edit',
                'params' => [$size_company->id_size_company]
            ]);

            return;
        }

        $this->flash->success("size_company was updated successfully");

        $this->dispatcher->forward([
            'controller' => "size_company",
            'action' => 'index'
        ]);
    }

    /**
     * Deletes a size_company
     *
     * @param string $id_size_company
     */
    public function deleteAction($id_size_company)
    {
        $size_company = SizeCompany::findFirstByid_size_company($id_size_company);
        if (!$size_company) {
            $this->flash->error("size_company was not found");

            $this->dispatcher->forward([
                'controller' => "size_company",
                'action' => 'index'
            ]);

            return;
        }

        if (!$size_company->delete()) {

            foreach ($size_company->getMessages() as $message) {
                $this->flash->error($message);
            }

            $this->dispatcher->forward([
                'controller' => "size_company",
                'action' => 'search'
            ]);

            return;
        }

        $this->flash->success("size_company was deleted successfully");

        $this->dispatcher->forward([
            'controller' => "size_company",
            'action' => "index"
        ]);
    }

}
