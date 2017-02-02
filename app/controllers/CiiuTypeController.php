<?php

use Phalcon\Mvc\Model\Criteria;
use Phalcon\Paginator\Adapter\Model as Paginator;


class CiiuTypeController extends ControllerBase
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
     * Searches for ciiu_type
     */
    public function searchAction()
    {
        $this->persistent->parameters = null;
        $numberPage = 1;
        if ($this->request->isPost()) {
            $query = Criteria::fromInput($this->di, 'CiiuType', $_POST);
            $this->persistent->parameters = $query->getParams();
        } else {
            $numberPage = $this->request->getQuery("page", "int");
        }

        $parameters = $this->persistent->parameters;
        if (!is_array($parameters)) {
            $parameters = [];
        }
        $parameters["order"] = "id_ciiu";

        $ciiu_type = CiiuType::find($parameters);

        if (count($ciiu_type) == 0) {
            $this->flash->notice("The search did not find any ciiu_type");

            $this->dispatcher->forward([
                "controller" => "ciiutype",
                "action" => "search"
            ]);

            return;
        }

        $paginator = new Paginator([
            'data' => $ciiu_type,
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
     * Edits a ciiu_type
     *
     * @param string $id_ciiu
     */
    public function editAction($id_ciiu)
    {
        if (!$this->request->isPost()) {

            $ciiu_type = CiiuType::findFirstByid_ciiu($id_ciiu);
            if (!$ciiu_type) {
                $this->flash->error("ciiu_type was not found");

                $this->dispatcher->forward([
                    'controller' => "ciiutype",
                    'action' => 'search'
                ]);

                return;
            }

            $this->view->id_ciiu = $ciiu_type->id_ciiu;

            $this->tag->setDefault("id_ciiu", $ciiu_type->id_ciiu);
            $this->tag->setDefault("ciiu_type", $ciiu_type->ciiu_type);
            $this->tag->setDefault("section", $ciiu_type->section);
            $this->tag->setDefault("status", $ciiu_type->status);
            $this->tag->setDefault("created_at", $ciiu_type->created_at);

        }
    }

    /**
     * Creates a new ciiu_type
     */
    public function createAction()
    {
        if (!$this->request->isPost()) {
            $this->dispatcher->forward([
                'controller' => "ciiutype",
                'action' => 'search'
            ]);
            return;
        }

        $ciiu_type = new CiiuType();
        $ciiu_type->ciiu_type = $this->request->getPost("ciiu_type");
        $ciiu_type->section   = $this->request->getPost("section");
        $ciiu_type->status    = 1;

        if (!$ciiu_type->save()) {
            
            foreach ($ciiu_type->getMessages() as $message) {
                $this->flash->error($message);
            }

            $this->dispatcher->forward([
                'controller' => "ciiutype",
                'action' => 'new'
            ]);

            return;
        }

        $this->flash->success("ciiu_type was created successfully");

        $this->dispatcher->forward([
            'controller' => "ciiutype",
            'action' => 'search'
        ]);
    }

    /**
     * Saves a ciiu_type edited
     *
     */
    public function saveAction()
    {

        if (!$this->request->isPost()) {
            $this->dispatcher->forward([
                'controller' => "ciiutype",
                'action' => 'search'
            ]);

            return;
        }

        $id_ciiu = $this->request->getPost("id_ciiu");
        $ciiu_type = CiiuType::findFirstByid_ciiu($id_ciiu);

        if (!$ciiu_type) {
            $this->flash->error("ciiu_type does not exist " . $id_ciiu);

            $this->dispatcher->forward([
                'controller' => "ciiutype",
                'action' => 'search'
            ]);

            return;
        }

        $ciiu_type->ciiu_type  = $this->request->getPost("ciiu_type");
        $ciiu_type->section    = $this->request->getPost("section");
        $ciiu_type->status     = 1;

        if (!$ciiu_type->save()) {

            foreach ($ciiu_type->getMessages() as $message) {
                $this->flash->error($message);
            }

            $this->dispatcher->forward([
                'controller' => "ciiutype",
                'action' => 'edit',
                'params' => [$ciiu_type->id_ciiu]
            ]);

            return;
        }

        $this->flash->success("ciiu_type was updated successfully");

        $this->dispatcher->forward([
            'controller' => "ciiutype",
            'action' => 'search'
        ]);
    }

    /**
     * Deletes a ciiu_type
     *
     * @param string $id_ciiu
     */
    public function deleteAction($id_ciiu)
    {
        $ciiu_type = CiiuType::findFirstByid_ciiu($id_ciiu);
        if (!$ciiu_type) {
            $this->flash->error("ciiu_type was not found");

            $this->dispatcher->forward([
                'controller' => "ciiutype",
                'action' => 'search'
            ]);

            return;
        }

        if (!$ciiu_type->delete()) {

            foreach ($ciiu_type->getMessages() as $message) {
                $this->flash->error($message);
            }

            $this->dispatcher->forward([
                'controller' => "ciiutype",
                'action' => 'search'
            ]);

            return;
        }

        $this->flash->success("ciiu_type was deleted successfully");

        $this->dispatcher->forward([
            'controller' => "ciiutype",
            'action' => "search"
        ]);
    }

}
