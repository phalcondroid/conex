<?php

use Phalcon\Mvc\Model\Criteria;
use Phalcon\Paginator\Adapter\Model as Paginator;


class EventTypeController extends ControllerBase
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
     * Searches for event_type
     */
    public function searchAction()
    {
        $this->persistent->parameters = null;
        $numberPage = 1;
        if ($this->request->isPost()) {
            $query = Criteria::fromInput($this->di, 'EventType', $_POST);
            $this->persistent->parameters = $query->getParams();
        } else {
            $numberPage = $this->request->getQuery("page", "int");
        }

        $parameters = $this->persistent->parameters;
        if (!is_array($parameters)) {
            $parameters = [];
        }
        $parameters["order"] = "id_event_type";

        $event_type = EventType::find($parameters);
        if (count($event_type) == 0) {
            $this->flash->notice("The search did not find any event_type");

            $this->dispatcher->forward([
                "controller" => "event_type",
                "action" => "index"
            ]);

            return;
        }

        $paginator = new Paginator([
            'data' => $event_type,
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
     * Edits a event_type
     *
     * @param string $id_event_type
     */
    public function editAction($id_event_type)
    {
        if (!$this->request->isPost()) {

            $event_type = EventType::findFirstByid_event_type($id_event_type);
            if (!$event_type) {
                $this->flash->error("event_type was not found");

                $this->dispatcher->forward([
                    'controller' => "event_type",
                    'action' => 'index'
                ]);

                return;
            }

            $this->view->id_event_type = $event_type->id_event_type;

            $this->tag->setDefault("id_event_type", $event_type->id_event_type);
            $this->tag->setDefault("event_type", $event_type->event_type);
            $this->tag->setDefault("status", $event_type->status);
            $this->tag->setDefault("created_at", $event_type->created_at);

        }
    }

    /**
     * Creates a new event_type
     */
    public function createAction()
    {
        if (!$this->request->isPost()) {
            $this->dispatcher->forward([
                'controller' => "event_type",
                'action' => 'index'
            ]);

            return;
        }

        $event_type = new EventType();
        $event_type->event_type = $this->request->getPost("event_type");
        $event_type->status = $this->request->getPost("status");
        $event_type->created_at = $this->request->getPost("created_at");


        if (!$event_type->save()) {
            foreach ($event_type->getMessages() as $message) {
                $this->flash->error($message);
            }

            $this->dispatcher->forward([
                'controller' => "event_type",
                'action' => 'new'
            ]);

            return;
        }

        $this->flash->success("event_type was created successfully");

        $this->dispatcher->forward([
            'controller' => "event_type",
            'action' => 'index'
        ]);
    }

    /**
     * Saves a event_type edited
     *
     */
    public function saveAction()
    {

        if (!$this->request->isPost()) {
            $this->dispatcher->forward([
                'controller' => "event_type",
                'action' => 'index'
            ]);

            return;
        }

        $id_event_type = $this->request->getPost("id_event_type");
        $event_type = EventType::findFirstByid_event_type($id_event_type);

        if (!$event_type) {
            $this->flash->error("event_type does not exist " . $id_event_type);

            $this->dispatcher->forward([
                'controller' => "event_type",
                'action' => 'index'
            ]);

            return;
        }

        $event_type->event_type = $this->request->getPost("event_type");
        $event_type->status = $this->request->getPost("status");
        $event_type->created_at = $this->request->getPost("created_at");


        if (!$event_type->save()) {

            foreach ($event_type->getMessages() as $message) {
                $this->flash->error($message);
            }

            $this->dispatcher->forward([
                'controller' => "event_type",
                'action' => 'edit',
                'params' => [$event_type->id_event_type]
            ]);

            return;
        }

        $this->flash->success("event_type was updated successfully");

        $this->dispatcher->forward([
            'controller' => "event_type",
            'action' => 'index'
        ]);
    }

    /**
     * Deletes a event_type
     *
     * @param string $id_event_type
     */
    public function deleteAction($id_event_type)
    {
        $event_type = EventType::findFirstByid_event_type($id_event_type);
        if (!$event_type) {
            $this->flash->error("event_type was not found");

            $this->dispatcher->forward([
                'controller' => "event_type",
                'action' => 'index'
            ]);

            return;
        }

        if (!$event_type->delete()) {

            foreach ($event_type->getMessages() as $message) {
                $this->flash->error($message);
            }

            $this->dispatcher->forward([
                'controller' => "event_type",
                'action' => 'search'
            ]);

            return;
        }

        $this->flash->success("event_type was deleted successfully");

        $this->dispatcher->forward([
            'controller' => "event_type",
            'action' => "index"
        ]);
    }

}
