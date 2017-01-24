<?php
 
use Phalcon\Mvc\Model\Criteria;
use Phalcon\Paginator\Adapter\Model as Paginator;


class CompanySectorController extends ControllerBase
{
    /**
     * Index action
     */
    public function indexAction()
    {
        $this->persistent->parameters = null;
    }

    /**
     * Searches for company_sector
     */
    public function searchAction()
    {
        $numberPage = 1;
        if ($this->request->isPost()) {
            $query = Criteria::fromInput($this->di, 'CompanySector', $_POST);
            $this->persistent->parameters = $query->getParams();
        } else {
            $numberPage = $this->request->getQuery("page", "int");
        }

        $parameters = $this->persistent->parameters;
        if (!is_array($parameters)) {
            $parameters = [];
        }
        $parameters["order"] = "id_company_sector";

        $company_sector = CompanySector::find($parameters);
        if (count($company_sector) == 0) {
            $this->flash->notice("The search did not find any company_sector");

            $this->dispatcher->forward([
                "controller" => "company_sector",
                "action" => "index"
            ]);

            return;
        }

        $paginator = new Paginator([
            'data' => $company_sector,
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
     * Edits a company_sector
     *
     * @param string $id_company_sector
     */
    public function editAction($id_company_sector)
    {
        if (!$this->request->isPost()) {

            $company_sector = CompanySector::findFirstByid_company_sector($id_company_sector);
            if (!$company_sector) {
                $this->flash->error("company_sector was not found");

                $this->dispatcher->forward([
                    'controller' => "company_sector",
                    'action' => 'index'
                ]);

                return;
            }

            $this->view->id_company_sector = $company_sector->id_company_sector;

            $this->tag->setDefault("id_company_sector", $company_sector->id_company_sector);
            $this->tag->setDefault("company_sector", $company_sector->company_sector);
            $this->tag->setDefault("created_at", $company_sector->created_at);
            $this->tag->setDefault("status", $company_sector->status);
            
        }
    }

    /**
     * Creates a new company_sector
     */
    public function createAction()
    {
        if (!$this->request->isPost()) {
            $this->dispatcher->forward([
                'controller' => "company_sector",
                'action' => 'index'
            ]);

            return;
        }

        $company_sector = new CompanySector();
        $company_sector->company_sector = $this->request->getPost("company_sector");
        $company_sector->created_at = $this->request->getPost("created_at");
        $company_sector->status = $this->request->getPost("status");
        

        if (!$company_sector->save()) {
            foreach ($company_sector->getMessages() as $message) {
                $this->flash->error($message);
            }

            $this->dispatcher->forward([
                'controller' => "company_sector",
                'action' => 'new'
            ]);

            return;
        }

        $this->flash->success("company_sector was created successfully");

        $this->dispatcher->forward([
            'controller' => "company_sector",
            'action' => 'index'
        ]);
    }

    /**
     * Saves a company_sector edited
     *
     */
    public function saveAction()
    {

        if (!$this->request->isPost()) {
            $this->dispatcher->forward([
                'controller' => "company_sector",
                'action' => 'index'
            ]);

            return;
        }

        $id_company_sector = $this->request->getPost("id_company_sector");
        $company_sector = CompanySector::findFirstByid_company_sector($id_company_sector);

        if (!$company_sector) {
            $this->flash->error("company_sector does not exist " . $id_company_sector);

            $this->dispatcher->forward([
                'controller' => "company_sector",
                'action' => 'index'
            ]);

            return;
        }

        $company_sector->company_sector = $this->request->getPost("company_sector");
        $company_sector->created_at = $this->request->getPost("created_at");
        $company_sector->status = $this->request->getPost("status");
        

        if (!$company_sector->save()) {

            foreach ($company_sector->getMessages() as $message) {
                $this->flash->error($message);
            }

            $this->dispatcher->forward([
                'controller' => "company_sector",
                'action' => 'edit',
                'params' => [$company_sector->id_company_sector]
            ]);

            return;
        }

        $this->flash->success("company_sector was updated successfully");

        $this->dispatcher->forward([
            'controller' => "company_sector",
            'action' => 'index'
        ]);
    }

    /**
     * Deletes a company_sector
     *
     * @param string $id_company_sector
     */
    public function deleteAction($id_company_sector)
    {
        $company_sector = CompanySector::findFirstByid_company_sector($id_company_sector);
        if (!$company_sector) {
            $this->flash->error("company_sector was not found");

            $this->dispatcher->forward([
                'controller' => "company_sector",
                'action' => 'index'
            ]);

            return;
        }

        if (!$company_sector->delete()) {

            foreach ($company_sector->getMessages() as $message) {
                $this->flash->error($message);
            }

            $this->dispatcher->forward([
                'controller' => "company_sector",
                'action' => 'search'
            ]);

            return;
        }

        $this->flash->success("company_sector was deleted successfully");

        $this->dispatcher->forward([
            'controller' => "company_sector",
            'action' => "index"
        ]);
    }

}
