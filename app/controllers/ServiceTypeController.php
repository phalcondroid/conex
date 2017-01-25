<?php

use Phalcon\Mvc\Model\Criteria;
use Phalcon\Paginator\Adapter\Model as Paginator;


class ServiceTypeController extends ControllerBase
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
     * Searches for service_type
     */
    public function searchAction()
    {
        $this->persistent->parameters = null;
        $numberPage = 1;
        if ($this->request->isPost()) {
            $query = Criteria::fromInput($this->di, 'ServiceType', $_POST);
            $this->persistent->parameters = $query->getParams();
        } else {
            $numberPage = $this->request->getQuery("page", "int");
        }

        $parameters = $this->persistent->parameters;
        if (!is_array($parameters)) {
            $parameters = [];
        }
        $parameters["order"] = "id_service_type";

        $service_type = ServiceType::find($parameters);
        if (count($service_type) == 0) {
            $this->flash->notice("The search did not find any service_type");

            $this->dispatcher->forward([
                "controller" => "service_type",
                "action" => "index"
            ]);

            return;
        }

        $paginator = new Paginator([
            'data' => $service_type,
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
     * Edits a service_type
     *
     * @param string $id_service_type
     */
    public function editAction($id_service_type)
    {
        if (!$this->request->isPost()) {

            $service_type = ServiceType::findFirstByid_service_type($id_service_type);
            if (!$service_type) {
                $this->flash->error("service_type was not found");

                $this->dispatcher->forward([
                    'controller' => "service_type",
                    'action' => 'index'
                ]);

                return;
            }

            $this->view->id_service_type = $service_type->id_service_type;

            $this->tag->setDefault("id_service_type", $service_type->id_service_type);
            $this->tag->setDefault("service_type", $service_type->service_type);
            $this->tag->setDefault("status", $service_type->status);
            $this->tag->setDefault("created_at", $service_type->created_at);

        }
    }

    /**
     * Creates a new service_type
     */
    public function createAction()
    {
        if (!$this->request->isPost()) {
            $this->dispatcher->forward([
                'controller' => "service_type",
                'action' => 'index'
            ]);

            return;
        }

        $service_type = new ServiceType();
        $service_type->service_type = $this->request->getPost("service_type");
        $service_type->status = $this->request->getPost("status");
        $service_type->created_at = $this->request->getPost("created_at");


        if (!$service_type->save()) {
            foreach ($service_type->getMessages() as $message) {
                $this->flash->error($message);
            }

            $this->dispatcher->forward([
                'controller' => "service_type",
                'action' => 'new'
            ]);

            return;
        }

        $this->flash->success("service_type was created successfully");

        $this->dispatcher->forward([
            'controller' => "service_type",
            'action' => 'index'
        ]);
    }

    /**
     * Saves a service_type edited
     *
     */
    public function saveAction()
    {

        if (!$this->request->isPost()) {
            $this->dispatcher->forward([
                'controller' => "service_type",
                'action' => 'index'
            ]);

            return;
        }

        $id_service_type = $this->request->getPost("id_service_type");
        $service_type = ServiceType::findFirstByid_service_type($id_service_type);

        if (!$service_type) {
            $this->flash->error("service_type does not exist " . $id_service_type);

            $this->dispatcher->forward([
                'controller' => "service_type",
                'action' => 'index'
            ]);

            return;
        }

        $service_type->service_type = $this->request->getPost("service_type");
        $service_type->status = $this->request->getPost("status");
        $service_type->created_at = $this->request->getPost("created_at");


        if (!$service_type->save()) {

            foreach ($service_type->getMessages() as $message) {
                $this->flash->error($message);
            }

            $this->dispatcher->forward([
                'controller' => "service_type",
                'action' => 'edit',
                'params' => [$service_type->id_service_type]
            ]);

            return;
        }

        $this->flash->success("service_type was updated successfully");

        $this->dispatcher->forward([
            'controller' => "service_type",
            'action' => 'index'
        ]);
    }

    /**
     * Deletes a service_type
     *
     * @param string $id_service_type
     */
    public function deleteAction($id_service_type)
    {
        $service_type = ServiceType::findFirstByid_service_type($id_service_type);
        if (!$service_type) {
            $this->flash->error("service_type was not found");

            $this->dispatcher->forward([
                'controller' => "service_type",
                'action' => 'index'
            ]);

            return;
        }

        if (!$service_type->delete()) {

            foreach ($service_type->getMessages() as $message) {
                $this->flash->error($message);
            }

            $this->dispatcher->forward([
                'controller' => "service_type",
                'action' => 'search'
            ]);

            return;
        }

        $this->flash->success("service_type was deleted successfully");

        $this->dispatcher->forward([
            'controller' => "service_type",
            'action' => "index"
        ]);
    }

}
