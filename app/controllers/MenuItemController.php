<?php

class MenuItemController extends ControllerBase
{
    public function initialize()
    {
        $this->view->setLayout("main");
    }

    public function indexAction($id = false)
    {
        if ($this->request->isPost()) {
            $idMenu = $this->request->getPost("value", array(
                "striptags",
                "int"
            ));
            $this->view->menuitem = MenuItem::findByIdMenu($idMenu);
            $this->view->id_menu = $idMenu;
        } else {
            if ($id) {
                $this->view->menuitem = MenuItem::findByIdMenu((int) $id);
                $this->view->id_menu = $id;
            } else {
                $this->response->redirect("menu/index");
            }
        }
    }

    /**
     *
     */
    public function newAction()
    {
        if ($this->request->isPost()) {
            $idMenu = $this->request->getPost("id_menu", array(
                "striptags",
                "int"
            ));
            $this->view->menuitem = MenuItem::findByIdMenu($idMenu);
            $this->view->id_menu = $idMenu;
        } else {
            if ($id) {
                $this->view->menuitem = MenuItem::findByIdMenu((int) $id);
                $this->view->id_menu = $id;
            } else {
                $this->response->redirect("menu/index");
            }
        }
    }

    public function editAction()
    {

    }

    public function availableAction()
    {
        if ($this->request->isPost()) {

            $id = $this->request->getPost("id", array(
                "striptags",
                "int"
            ));
            $idMenu = $this->request->getPost("id_menu", array(
                "striptags",
                "int"
            ));
            $status = $this->request->getPost("value", array(
                "striptags",
                "int"
            ));

            $menuItem = MenuItem::findFirstByIdMenuItem($id);
            if ($menuItem) {

                $menuItem->status = $status;

                if ($menuItem->save()) {
                    if ($status == 1) {
                        $this->flash->success("Habilitado {$menuItem->menu_item}, reinicia la sesión para ver los cambios.");
                    } else {
                        $this->flash->success("Deshabilitado {$menuItem->menu_item}, reinicia la sesión para ver los cambios.");
                    }
                    $this->response->redirect("menuitem/index/" . $idMenu);
                } else {
                    foreach ($menuItem->getMessages() as $message) {
                        $this->flash->error($message);
                    }
                }

            } else {
                $this->flash->error("Menu item not found");
                $this->response->redirect("menu/index");
            }
        }
    }
}
