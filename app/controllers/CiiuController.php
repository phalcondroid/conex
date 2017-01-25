<?php

use Phalcon\Mvc\Model\Criteria;
use Phalcon\Paginator\Adapter\Model as Paginator;


class CiiuController extends ControllerBase
{
    /**
     *
     */
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
     * Searches for ciiu
     */
    public function searchAction()
    {
        $this->persistent->parameters = null;
        $numberPage = 1;
        if ($this->request->isPost()) {
            $query = Criteria::fromInput($this->di, 'Ciiu', $_POST);
            $this->persistent->parameters = $query->getParams();
        } else {
            $numberPage = $this->request->getQuery("page", "int");
        }

        $parameters = $this->persistent->parameters;
        if (!is_array($parameters)) {
            $parameters = [];
        }
        $parameters["order"] = "id_ciiu";
        $ciiu = Ciiu::find($parameters);

        if (count($ciiu) == 0) {
            $this->flash->notice("The search did not find any ciiu");

            $this->dispatcher->forward([
                "controller" => "ciiu",
                "action" => "search"
            ]);

            return;
        }

        $paginator = new Paginator([
            'data' => $ciiu,
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
     * Edits a ciiu
     *
     * @param string $id_ciiu
     */
    public function editAction($id_ciiu)
    {
        $this->view->ciiuType = CiiuType::find("status = 1");

        if (!$this->request->isPost()) {

            $ciiu = Ciiu::findFirstByid_ciiu($id_ciiu);
            if (!$ciiu) {
                $this->flash->error("ciiu was not found");

                $this->dispatcher->forward([
                    'controller' => "ciiu",
                    'action' => 'index'
                ]);

                return;
            }

            $this->view->id_ciiu = $ciiu->id_ciiu;
            $this->tag->setDefault("id_ciiu", $ciiu->id_ciiu);
            $this->tag->setDefault("id_ciiu_type", $ciiu->id_ciiu_type);
            $this->tag->setDefault("ciiu", $ciiu->ciiu);

        }
    }

    /**
     * Creates a new ciiu
     */
    public function createAction()
    {
        if (!$this->request->isPost()) {
            $this->dispatcher->forward([
                'controller' => "ciiu",
                'action' => 'search'
            ]);

            return;
        }

        $ciiu = new Ciiu();
        $ciiu->id_ciiu_type = $this->request->getPost("id_ciiu_type");
        $ciiu->ciiu = $this->request->getPost("ciiu");

        if (!$ciiu->save()) {
            foreach ($ciiu->getMessages() as $message) {
                $this->flash->error($message);
            }

            $this->dispatcher->forward([
                'controller' => "ciiu",
                'action' => 'new'
            ]);

            return;
        }

        $this->flash->success("ciiu was created successfully");

        $this->dispatcher->forward([
            'controller' => "ciiu",
            'action' => 'search'
        ]);
    }

    /**
     * Saves a ciiu edited
     *
     */
    public function saveAction()
    {

        if (!$this->request->isPost()) {
            $this->dispatcher->forward([
                'controller' => "ciiu",
                'action' => 'search'
            ]);

            return;
        }

        $id_ciiu = $this->request->getPost("id_ciiu");
        $ciiu = Ciiu::findFirstByid_ciiu($id_ciiu);

        if (!$ciiu) {
            $this->flash->error("ciiu does not exist " . $id_ciiu);

            $this->dispatcher->forward([
                'controller' => "ciiu",
                'action' => 'search'
            ]);

            return;
        }

        $ciiu->id_ciiu_type = $this->request->getPost("id_ciiu_type");
        $ciiu->ciiu = $this->request->getPost("ciiu");

        if (!$ciiu->save()) {

            foreach ($ciiu->getMessages() as $message) {
                $this->flash->error($message);
            }

            $this->dispatcher->forward([
                'controller' => "ciiu",
                'action' => 'edit',
                'params' => [$ciiu->id_ciiu]
            ]);

            return;
        }

        $this->flash->success("ciiu was updated successfully");

        $this->dispatcher->forward([
            'controller' => "ciiu",
            'action' => 'search'
        ]);
    }

    /**
     * Deletes a ciiu
     *
     * @param string $id_ciiu
     */
    public function deleteAction($id_ciiu)
    {
        $ciiu = Ciiu::findFirstByid_ciiu($id_ciiu);
        if (!$ciiu) {
            $this->flash->error("ciiu was not found");

            $this->dispatcher->forward([
                'controller' => "ciiu",
                'action' => 'search'
            ]);

            return;
        }

        if (!$ciiu->delete()) {

            foreach ($ciiu->getMessages() as $message) {
                $this->flash->error($message);
            }

            $this->dispatcher->forward([
                'controller' => "ciiu",
                'action' => 'search'
            ]);

            return;
        }

        $this->flash->success("ciiu was deleted successfully");

        $this->dispatcher->forward([
            'controller' => "ciiu",
            'action' => "search"
        ]);
    }

}
