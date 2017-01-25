<?php

use Phalcon\Mvc\Model\Criteria;
use Phalcon\Paginator\Adapter\Model as Paginator;


class CoverageController extends ControllerBase
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
     * Searches for coverage
     */
    public function searchAction()
    {
        $this->persistent->parameters = null;
        $numberPage = 1;
        if ($this->request->isPost()) {
            $query = Criteria::fromInput($this->di, 'Coverage', $_POST);
            $this->persistent->parameters = $query->getParams();
        } else {
            $numberPage = $this->request->getQuery("page", "int");
        }

        $parameters = $this->persistent->parameters;
        if (!is_array($parameters)) {
            $parameters = [];
        }
        $parameters["order"] = "id_coverage";

        $coverage = Coverage::find($parameters);
        if (count($coverage) == 0) {
            $this->flash->notice("The search did not find any coverage");

            $this->dispatcher->forward([
                "controller" => "coverage",
                "action" => "index"
            ]);

            return;
        }

        $paginator = new Paginator([
            'data' => $coverage,
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
     * Edits a coverage
     *
     * @param string $id_coverage
     */
    public function editAction($id_coverage)
    {
        if (!$this->request->isPost()) {

            $coverage = Coverage::findFirstByid_coverage($id_coverage);
            if (!$coverage) {
                $this->flash->error("coverage was not found");

                $this->dispatcher->forward([
                    'controller' => "coverage",
                    'action' => 'index'
                ]);

                return;
            }

            $this->view->id_coverage = $coverage->id_coverage;

            $this->tag->setDefault("id_coverage", $coverage->id_coverage);
            $this->tag->setDefault("coverage", $coverage->coverage);
            $this->tag->setDefault("status", $coverage->status);
            $this->tag->setDefault("created_at", $coverage->created_at);

        }
    }

    /**
     * Creates a new coverage
     */
    public function createAction()
    {
        if (!$this->request->isPost()) {
            $this->dispatcher->forward([
                'controller' => "coverage",
                'action' => 'index'
            ]);

            return;
        }

        $coverage = new Coverage();
        $coverage->coverage = $this->request->getPost("coverage");
        $coverage->status = $this->request->getPost("status");
        $coverage->created_at = $this->request->getPost("created_at");


        if (!$coverage->save()) {
            foreach ($coverage->getMessages() as $message) {
                $this->flash->error($message);
            }

            $this->dispatcher->forward([
                'controller' => "coverage",
                'action' => 'new'
            ]);

            return;
        }

        $this->flash->success("coverage was created successfully");

        $this->dispatcher->forward([
            'controller' => "coverage",
            'action' => 'index'
        ]);
    }

    /**
     * Saves a coverage edited
     *
     */
    public function saveAction()
    {

        if (!$this->request->isPost()) {
            $this->dispatcher->forward([
                'controller' => "coverage",
                'action' => 'index'
            ]);

            return;
        }

        $id_coverage = $this->request->getPost("id_coverage");
        $coverage = Coverage::findFirstByid_coverage($id_coverage);

        if (!$coverage) {
            $this->flash->error("coverage does not exist " . $id_coverage);

            $this->dispatcher->forward([
                'controller' => "coverage",
                'action' => 'index'
            ]);

            return;
        }

        $coverage->coverage = $this->request->getPost("coverage");
        $coverage->status = $this->request->getPost("status");
        $coverage->created_at = $this->request->getPost("created_at");


        if (!$coverage->save()) {

            foreach ($coverage->getMessages() as $message) {
                $this->flash->error($message);
            }

            $this->dispatcher->forward([
                'controller' => "coverage",
                'action' => 'edit',
                'params' => [$coverage->id_coverage]
            ]);

            return;
        }

        $this->flash->success("coverage was updated successfully");

        $this->dispatcher->forward([
            'controller' => "coverage",
            'action' => 'index'
        ]);
    }

    /**
     * Deletes a coverage
     *
     * @param string $id_coverage
     */
    public function deleteAction($id_coverage)
    {
        $coverage = Coverage::findFirstByid_coverage($id_coverage);
        if (!$coverage) {
            $this->flash->error("coverage was not found");

            $this->dispatcher->forward([
                'controller' => "coverage",
                'action' => 'index'
            ]);

            return;
        }

        if (!$coverage->delete()) {

            foreach ($coverage->getMessages() as $message) {
                $this->flash->error($message);
            }

            $this->dispatcher->forward([
                'controller' => "coverage",
                'action' => 'search'
            ]);

            return;
        }

        $this->flash->success("coverage was deleted successfully");

        $this->dispatcher->forward([
            'controller' => "coverage",
            'action' => "index"
        ]);
    }

}
