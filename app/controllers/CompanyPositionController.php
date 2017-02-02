<?php

use Phalcon\Mvc\Model\Criteria;
use Phalcon\Paginator\Adapter\Model as Paginator;


class CompanyPositionController extends ControllerBase
{
    public function initialize()
    {
        $this->view->setLayout("admin");
    }

    /**
     * Index action
     */
    public function indexAction()
    {
        $this->persistent->parameters = null;
    }

    /**
     * Searches for company_position
     */
    public function searchAction()
    {
        $this->persistent->parameters = null;
        $numberPage = 1;
        if ($this->request->isPost()) {
            $query = Criteria::fromInput($this->di, 'CompanyPosition', $_POST);
            $this->persistent->parameters = $query->getParams();
        } else {
            $numberPage = $this->request->getQuery("page", "int");
        }

        $parameters = $this->persistent->parameters;
        if (!is_array($parameters)) {
            $parameters = [];
        }
        $parameters["order"] = "id_company_position";

        $company_position = CompanyPosition::find($parameters);
        if (count($company_position) == 0) {
            $this->flash->notice("The search did not find any company_position");

            $this->dispatcher->forward([
                "controller" => "companyposition",
                "action" => "search"
            ]);

            return;
        }

        $paginator = new Paginator([
            'data' => $company_position,
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
     * Edits a company_position
     *
     * @param string $id_company_position
     */
    public function editAction($id_company_position)
    {
        if (!$this->request->isPost()) {

            $company_position = CompanyPosition::findFirstByid_company_position($id_company_position);
            if (!$company_position) {
                $this->flash->error("company_position was not found");

                $this->dispatcher->forward([
                    'controller' => "companyposition",
                    'action' => 'search'
                ]);

                return;
            }

            $this->view->id_company_position = $company_position->id_company_position;

            $this->tag->setDefault("id_company_position", $company_position->id_company_position);
            $this->tag->setDefault("position", $company_position->position);
            $this->tag->setDefault("description", $company_position->description);
            $this->tag->setDefault("status", $company_position->status);
            $this->tag->setDefault("created_at", $company_position->created_at);

        }
    }

    /**
     * Creates a new company_position
     */
    public function createAction()
    {
        if (!$this->request->isPost()) {
            $this->dispatcher->forward([
                'controller' => "companyposition",
                'action' => 'search'
            ]);

            return;
        }

        $company_position = new CompanyPosition();
        $company_position->position = $this->request->getPost("position");
        $company_position->description = $this->request->getPost("description");
        $company_position->status = 1;


        if (!$company_position->save()) {
            foreach ($company_position->getMessages() as $message) {
                $this->flash->error($message);
            }

            $this->dispatcher->forward([
                'controller' => "companyposition",
                'action' => 'new'
            ]);

            return;
        }

        $this->flash->success("company_position was created successfully");

        $this->dispatcher->forward([
            'controller' => "companyposition",
            'action' => 'search'
        ]);
    }

    /**
     * Saves a company_position edited
     *
     */
    public function saveAction()
    {

        if (!$this->request->isPost()) {
            $this->dispatcher->forward([
                'controller' => "companyposition",
                'action' => 'search'
            ]);

            return;
        }

        $id_company_position = $this->request->getPost("id_company_position");
        $company_position = CompanyPosition::findFirstByid_company_position($id_company_position);

        if (!$company_position) {
            $this->flash->error("company_position does not exist " . $id_company_position);

            $this->dispatcher->forward([
                'controller' => "companyposition",
                'action' => 'search'
            ]);

            return;
        }

        $company_position->position = $this->request->getPost("position");
        $company_position->description = $this->request->getPost("description");
        $company_position->status = 1;

        if (!$company_position->save()) {

            foreach ($company_position->getMessages() as $message) {
                $this->flash->error($message);
            }

            $this->dispatcher->forward([
                'controller' => "companyposition",
                'action' => 'edit',
                'params' => [$company_position->id_company_position]
            ]);

            return;
        }

        $this->flash->success("company_position was updated successfully");

        $this->dispatcher->forward([
            'controller' => "companyposition",
            'action' => 'search'
        ]);
    }

    /**
     * Deletes a company_position
     *
     * @param string $id_company_position
     */
    public function deleteAction($id_company_position)
    {
        $company_position = CompanyPosition::findFirstByid_company_position($id_company_position);
        if (!$company_position) {
            $this->flash->error("company_position was not found");

            $this->dispatcher->forward([
                'controller' => "companyposition",
                'action' => 'search'
            ]);

            return;
        }

        if (!$company_position->delete()) {

            foreach ($company_position->getMessages() as $message) {
                $this->flash->error($message);
            }

            $this->dispatcher->forward([
                'controller' => "companyposition",
                'action' => 'search'
            ]);

            return;
        }

        $this->flash->success("company_position was deleted successfully");

        $this->dispatcher->forward([
            'controller' => "companyposition",
            'action' => "search"
        ]);
    }

}
