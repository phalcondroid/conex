<?php

use Phalcon\Mvc\Model\Criteria;
use Phalcon\Paginator\Adapter\Model as Paginator;


class LegalConstitutionController extends ControllerBase
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
     * Searches for legal_constitution
     */
    public function searchAction()
    {
        $this->persistent->parameters = null;
        $numberPage = 1;
        if ($this->request->isPost()) {
            $query = Criteria::fromInput($this->di, 'LegalConstitution', $_POST);
            $this->persistent->parameters = $query->getParams();
        } else {
            $numberPage = $this->request->getQuery("page", "int");
        }

        $parameters = $this->persistent->parameters;
        if (!is_array($parameters)) {
            $parameters = [];
        }
        $parameters["order"] = "id_legal_constitution";

        $legal_constitution = LegalConstitution::find($parameters);
        if (count($legal_constitution) == 0) {
            $this->flash->notice("The search did not find any legal_constitution");

            $this->dispatcher->forward([
                "controller" => "legalconstitution",
                "action" => "index"
            ]);

            return;
        }

        $paginator = new Paginator([
            'data' => $legal_constitution,
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
     * Edits a legal_constitution
     *
     * @param string $id_legal_constitution
     */
    public function editAction($id_legal_constitution)
    {
        if (!$this->request->isPost()) {

            $legal_constitution = LegalConstitution::findFirstByid_legal_constitution($id_legal_constitution);
            if (!$legal_constitution) {
                $this->flash->error("legal_constitution was not found");

                $this->dispatcher->forward([
                    "controller" => "legalconstitution",
                    'action' => 'search'
                ]);

                return;
            }

            $this->view->id_legal_constitution = $legal_constitution->id_legal_constitution;

            $this->tag->setDefault("id_legal_constitution", $legal_constitution->id_legal_constitution);
            $this->tag->setDefault("legal_constitution", $legal_constitution->legal_constitution);
            $this->tag->setDefault("status", $legal_constitution->status);
            $this->tag->setDefault("created_at", $legal_constitution->created_at);

        }
    }

    /**
     * Creates a new legal_constitution
     */
    public function createAction()
    {
        if (!$this->request->isPost()) {
            $this->dispatcher->forward([
                "controller" => "legalconstitution",
                'action' => 'search'
            ]);

            return;
        }

        $legal_constitution = new LegalConstitution();
        $legal_constitution->legal_constitution = $this->request->getPost("legal_constitution");
        $legal_constitution->status = 1;

        if (!$legal_constitution->save()) {
            foreach ($legal_constitution->getMessages() as $message) {
                $this->flash->error($message);
            }

            $this->dispatcher->forward([
                "controller" => "legalconstitution",
                'action' => 'new'
            ]);

            return;
        }

        $this->flash->success("legal_constitution was created successfully");

        $this->dispatcher->forward([
            "controller" => "legalconstitution",
            'action' => 'index'
        ]);
    }

    /**
     * Saves a legal_constitution edited
     *
     */
    public function saveAction()
    {

        if (!$this->request->isPost()) {
            $this->dispatcher->forward([
                "controller" => "legalconstitution",
                'action' => 'index'
            ]);

            return;
        }

        $id_legal_constitution = $this->request->getPost("id_legal_constitution");
        $legal_constitution = LegalConstitution::findFirstByid_legal_constitution($id_legal_constitution);

        if (!$legal_constitution) {
            $this->flash->error("legal_constitution does not exist " . $id_legal_constitution);

            $this->dispatcher->forward([
                "controller" => "legalconstitution",
                'action' => 'index'
            ]);

            return;
        }

        $legal_constitution->legal_constitution = $this->request->getPost("legal_constitution");

        if (!$legal_constitution->save()) {

            foreach ($legal_constitution->getMessages() as $message) {
                $this->flash->error($message);
            }

            $this->dispatcher->forward([
                "controller" => "legalconstitution",
                'action' => 'edit',
                'params' => [$legal_constitution->id_legal_constitution]
            ]);

            return;
        }

        $this->flash->success("legal_constitution was updated successfully");

        $this->dispatcher->forward([
            "controller" => "legalconstitution",
            'action' => 'search'
        ]);
    }

    /**
     * Deletes a legal_constitution
     *
     * @param string $id_legal_constitution
     */
    public function deleteAction($id_legal_constitution)
    {
        $legal_constitution = LegalConstitution::findFirstByid_legal_constitution($id_legal_constitution);
        if (!$legal_constitution) {
            $this->flash->error("legal_constitution was not found");

            $this->dispatcher->forward([
                "controller" => "legalconstitution",
                'action' => 'search'
            ]);

            return;
        }

        if (!$legal_constitution->delete()) {

            foreach ($legal_constitution->getMessages() as $message) {
                $this->flash->error($message);
            }

            $this->dispatcher->forward([
                "controller" => "legalconstitution",
                'action' => 'search'
            ]);

            return;
        }

        $this->flash->success("legal_constitution was deleted successfully");

        $this->dispatcher->forward([
            "controller" => "legalconstitution",
            'action' => "search"
        ]);
    }

}
