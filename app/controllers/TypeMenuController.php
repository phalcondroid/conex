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

    /**
     *
     */
    public function newAction()
    {
        $typeMenu     = new TypeMenu();
        $typeMenuForm = new TypeMenuForm(
            $typeMenu,
            array()
        );

        if ($this->request->isPost()) {

            $typeMenuForm->bind(
                $this->request->getPost(),
                $typeMenu
            );

            if ($typeMenuForm->isValid()) {

                $typeMenu->status = 1;
                if ($typeMenu->save()) {
                    $this->flash->success("Type menu registered success");
                    $this->response->redirect("typemenu/index");
                } else {
                    foreach ($typeMenu->getMessages() as $message) {
                        $this->flash->error($message);
                    }
                    $this->response->redirect("typemenu/index");
                }

            } else {
                foreach ($typeMenuForm->getMessages() as $message) {
                    $this->flash->error($message);
                }
                $this->response->redirect("typemenu/index");
            }
        }

        $this->view->typeMenuForm = $typeMenuForm;
    }

    public function editAction($id = false)
    {
        if ($id) {

            if ($this->request->isPost()) {

                $typeMenu = TypeMenu::findFirstByIdTypeMenu((int) $id);
                $typeMenuForm = new TypeMenuForm(
                    $typeMenu,
                    array(
                        "edit" => true
                    )
                );

                $typeMenuForm->bind(
                    $this->request->getPost(),
                    $typeMenu
                );

                if ($typeMenuForm->isValid()) {

                    if ($typeMenu->save()) {
                        $this->flash->success("Type menu updated success");
                        $this->response->redirect("typemenu/index");
                    } else {
                        foreach ($typeMenu->getMessages() as $message) {
                            $this->flash->error($message);
                        }
                        $this->response->redirect("typemenu/index");
                    }

                } else {
                    foreach ($typeMenuForm->getMessages() as $message) {
                        $this->flash->error($message);
                    }
                    $this->response->redirect("typemenu/index");
                }

                $this->view->typeMenuForm = $typeMenuForm;
                $this->view->idTypeMenu = $id;

            }
        } else {
            $this->response->redirect("typemenu/index");
        }
    }

    public function deleteAction($id = false)
    {
        if ($id) {
            $typeMenu = TypeMenu::findFirstByIdTypeMenu((int) $id);
            if ($typeMenu->delete()) {
                $this->flash->success("Delete success");
                $this->response->redirect("typemenu/index");
            } else {
                foreach ($typeMenu->getMessages() as $message) {
                    $this->flash->error($message);
                }
                $this->response->redirect("typemenu/index");
            }
        } else {
            $this->response->redirect("typemenu/index");
        }
    }
}
