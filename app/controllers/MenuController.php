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

    /**
     *
     */
    public function newAction()
    {
        $menu = new Menu();
        $menuForm = new MenuForm(
            $menu,
            array()
        );

        if ($this->request->isPost()) {

            $menuForm->bind(
                $this->request->getPost(),
                $menu
            );

            if ($menuForm->isValid()) {
                $menu->status = 1;
                if ($menu->save()) {
                    $this->flash->success("New menu created");
                    $this->response->redirect("menu/index");
                } else {
                    foreach ($menu->getMessages() as $message) {
                        $this->flash->error($message);
                    }
                    $this->response->redirect("menu/index");
                }
            } else {
                foreach ($menuForm->getMessages() as $message) {
                    $this->flash->error($message);
                }
                $this->response->redirect("menu/index");
            }
        }

        $this->view->menuForm = $menuForm;
    }

    /**
     *
     */
    public function editAction($id = false)
    {
        if ($id) {

            $menu = Menu::findFirstByIdMenu((int) $id);
            $menuForm = new MenuForm(
                $menu,
                array()
            );

            if ($this->request->isPost()) {

                $menuForm->bind(
                    $this->request->getPost(),
                    $menu
                );

                if ($menuForm->isValid()) {

                    if ($menu->save()) {
                        $this->flash->success("Menu updated success");
                    } else {
                        foreach ($menu->getMessages() as $message) {
                            $this->flash->error($message);
                        }
                    }
                } else {
                    foreach ($menuForm->getMessages() as $message) {
                        $this->flash->error($message);
                    }
                }
                $this->response->redirect("menu/index");
            }
            $this->view->idMenu = $id;
            $this->view->menuForm = $menuForm;
        } else {
            $this->response->redirect("menu/index");
        }
    }

    /**
     *
     */
    public function deleteActiom($id = false)
    {
        if ($id) {
            $menu = Menu::findFirstByIdMenu((int) $id);
            if ($menu->delete()) {

            } else {

            }
        } else {
            $this->response->redirect("menu/index");
        }
    }

    /**
     *
     */
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
