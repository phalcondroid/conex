<?php

/**
 *
 */
class MenuitemController extends ControllerBase
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
    public function newAction($id = false)
    {
        $menuItem = new MenuItem;
        $menuItemForm = new MenuItemForm(
            $menuItem,
            array()
        );

        if ($this->request->isPost()) {

            $idMenu = $this->request->getPost("id_menu", array(
                "striptags",
                "int"
            ));

            $menuItemForm->bind(
                $this->request->getPost(),
                $menuItem
            );
            $menuItem->id_menu = $idMenu;
            $menuItem->status  = 1;

            if ($menuItemForm->isValid()) {
                if ($menuItem->save()) {
                    $menuItemForm->clear();
                    $this->flash->success("Menú item saved");
                    $this->response->redirect("menuitem/index/" . $idMenu);
                } else {
                    foreach ($menuItem->getMessages() as $message) {
                        $this->flash->error($message);
                    }
                    $this->response->redirect("menuitem/index/" . $idMenu);
                }
            } else {
                foreach ($menuItemForm->getMessages() as $message) {
                    $this->flash->error($message);
                }
                $this->response->redirect("menuitem/index/" . $idMenu);
            }

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
        $this->view->menuItemForm = $menuItemForm;
    }

    /**
     *
     */
    public function editAction($idMenu = false, $idMenuItem = false)
    {
        $menuItem = MenuItem::findFirstByIdMenuItem((int) $idMenuItem);
        $menuItemForm = new MenuItemForm(
            $menuItem,
            array()
        );

        if ($this->request->isPost()) {

            $menuItemForm->bind(
                $this->request->getPost(),
                $menuItem
            );
            $menuItem->status  = 1;

            if ($menuItemForm->isValid()) {
                if ($menuItem->save()) {
                    $menuItemForm->clear();
                    $this->flash->success("Menú item saved");
                    $this->response->redirect("menuitem/index/" . $idMenu);
                } else {
                    foreach ($menuItem->getMessages() as $message) {
                        $this->flash->error($message);
                    }
                    $this->response->redirect("menuitem/index/" . $idMenu);
                }
            } else {
                foreach ($menuItemForm->getMessages() as $message) {
                    $this->flash->error($message);
                }
                $this->response->redirect("menuitem/index/" . $idMenu);
            }

            $this->view->menuitem = MenuItem::findByIdMenu($idMenu);
            $this->view->idMenu = $idMenu;
        } else {
            if ($idMenu and $idMenuItem) {
                $this->view->menuitem = MenuItem::findByIdMenu((int) $idMenu);
                $this->view->idMenu = $idMenu;
            } else {
                $this->response->redirect("menu/index");
            }
        }

        $this->view->idMenu       = $idMenu;
        $this->view->idMenuItem   = $idMenuItem;
        $this->view->menuItemForm = $menuItemForm;
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

    /**
     *
     */
    public function deleteAction($idMenu, $idMenuItem)
    {
        $menuItem = MenuItem::findFirstByIdMenuItem((int) $idMenuItem);
        if ($menuItem) {
            if ($menuItem->delete()) {
                $this->flash->success("Deleted success");
                $this->response->redirect("menuitem/index/" . $idMenu);
            } else {
                foreach ($menuItem->getMessages() as $message) {
                    $this->flash->error($message);
                }
            }
        }
    }
}
