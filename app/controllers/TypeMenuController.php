<?php

class TypeMenuController extends ControllerBase
{
    /**
     *
     */
    public function initialize()
    {
        $this->view->setLayout("main");
    }

    /**
     *
     */
    public function indexAction()
    {
        $typeMenu = TypeMenu::find();
        $this->view->typeMenu = $typeMenu;
    }

    public function newAction()
    {

    }

    public function editAction()
    {

    }

    public function deleteActiom()
    {

    }
}
