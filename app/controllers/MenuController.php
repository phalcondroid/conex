<?php

class MenuController extends ControllerBase
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
        $menus = Menu::find();
        $this->view->menus = $menus;
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

    public function itemsAction()
    {
        if ($this->request->isPost()) {
            $idMenu = $this->request->getPost("value", array(
                "striptags",
                "int"
            ));
            $menuItem = MenuItem::findByIdMenu($idMenu);
            $this->view->menuItem = $menuItem;
        }
    }
}
