<?php

use Phalcon\Mvc\Model\Criteria;
use Phalcon\Paginator\Adapter\Model as Paginator;


class EmployeeNumberController extends ControllerBase
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
     * Searches for employee_number
     */
    public function searchAction()
    {
        $this->persistent->parameters = null;
        $numberPage = 1;
        if ($this->request->isPost()) {
            $query = Criteria::fromInput($this->di, 'EmployeeNumber', $_POST);
            $this->persistent->parameters = $query->getParams();
        } else {
            $numberPage = $this->request->getQuery("page", "int");
        }

        $parameters = $this->persistent->parameters;
        if (!is_array($parameters)) {
            $parameters = [];
        }
        $parameters["order"] = "id_employee_number";

        $employee_number = EmployeeNumber::find($parameters);
        if (count($employee_number) == 0) {
            $this->flash->notice("The search did not find any employee_number");

            $this->dispatcher->forward([
                "controller" => "employeenumber",
                "action" => "search"
            ]);

            return;
        }

        $paginator = new Paginator([
            'data' => $employee_number,
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
     * Edits a employee_number
     *
     * @param string $id_employee_number
     */
    public function editAction($id_employee_number)
    {
        if (!$this->request->isPost()) {

            $employee_number = EmployeeNumber::findFirstByid_employee_number($id_employee_number);
            if (!$employee_number) {
                $this->flash->error("employee_number was not found");

                $this->dispatcher->forward([
                    'controller' => "employeenumber",
                    'action' => 'search'
                ]);

                return;
            }

            $this->view->id_employee_number = $employee_number->id_employee_number;

            $this->tag->setDefault("id_employee_number", $employee_number->id_employee_number);
            $this->tag->setDefault("employee_number", $employee_number->employee_number);
            $this->tag->setDefault("status", $employee_number->status);
            $this->tag->setDefault("created_at", $employee_number->created_at);

        }
    }

    /**
     * Creates a new employee_number
     */
    public function createAction()
    {
        if (!$this->request->isPost()) {
            $this->dispatcher->forward([
                'controller' => "employeenumber",
                'action' => 'search'
            ]);

            return;
        }

        $employee_number = new EmployeeNumber();
        $employee_number->employee_number = $this->request->getPost("employee_number");
        $employee_number->status = 1;

        if (!$employee_number->save()) {
            foreach ($employee_number->getMessages() as $message) {
                $this->flash->error($message);
            }

            $this->dispatcher->forward([
                'controller' => "employeenumber",
                'action' => 'new'
            ]);

            return;
        }

        $this->flash->success("employee_number was created successfully");

        $this->dispatcher->forward([
            'controller' => "employeenumber",
            'action' => 'search'
        ]);
    }

    /**
     * Saves a employee_number edited
     *
     */
    public function saveAction()
    {

        if (!$this->request->isPost()) {
            $this->dispatcher->forward([
                'controller' => "employeenumber",
                'action' => 'search'
            ]);

            return;
        }

        $id_employee_number = $this->request->getPost("id_employee_number");
        $employee_number = EmployeeNumber::findFirstByid_employee_number($id_employee_number);

        if (!$employee_number) {
            $this->flash->error("employee_number does not exist " . $id_employee_number);

            $this->dispatcher->forward([
                'controller' => "employeenumber",
                'action' => 'search'
            ]);

            return;
        }

        $employee_number->employee_number = $this->request->getPost("employee_number");

        if (!$employee_number->save()) {

            foreach ($employee_number->getMessages() as $message) {
                $this->flash->error($message);
            }

            $this->dispatcher->forward([
                'controller' => "employeenumber",
                'action' => 'edit',
                'params' => [$employee_number->id_employee_number]
            ]);

            return;
        }

        $this->flash->success("employee_number was updated successfully");

        $this->dispatcher->forward([
            'controller' => "employeenumber",
            'action' => 'search'
        ]);
    }

    /**
     * Deletes a employee_number
     *
     * @param string $id_employee_number
     */
    public function deleteAction($id_employee_number)
    {
        $employee_number = EmployeeNumber::findFirstByid_employee_number($id_employee_number);
        if (!$employee_number) {
            $this->flash->error("employee_number was not found");

            $this->dispatcher->forward([
                'controller' => "employeenumber",
                'action' => 'search'
            ]);

            return;
        }

        if (!$employee_number->delete()) {

            foreach ($employee_number->getMessages() as $message) {
                $this->flash->error($message);
            }

            $this->dispatcher->forward([
                'controller' => "employeenumber",
                'action' => 'search'
            ]);

            return;
        }

        $this->flash->success("employee_number was deleted successfully");

        $this->dispatcher->forward([
            'controller' => "employeenumber",
            'action' => "search"
        ]);
    }

}
