<?php

class UserController extends ControllerBase
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
        $user = Users::find("status = 1");
        $this->view->users = $user;
    }

    /**
     *
     */
    public function newAction()
    {
        $user     = new Users();
        $userForm = new UserForm(
            $user,
            array()
        );

        if ($this->request->isPost()) {

            $_POST["password"] = password_hash($_POST["password"], PASSWORD_DEFAULT);

            $userForm->bind(
                $this->request->getPost(),
                $user
            );

            if ($userForm->isValid()) {

                $user->status = 1;
                if ($user->save()) {
                    $this->flash->success("User registered success");
                    $this->response->redirect("user/index");
                } else {
                    foreach ($user->getMessages() as $message) {
                        $this->flash->error($message);
                    }
                    $this->response->redirect("user/index");
                }

            } else {
                foreach ($userForm->getMessages() as $message) {
                    $this->flash->error($message);
                }
                $this->response->redirect("user/index");
            }
        }

        $this->view->userForm = $userForm;
    }

    public function editAction($id = false)
    {
        if ($id) {

            $user = Users::findFirstByIdUsers((int) $id);
            $userForm = new UserForm(
                $user,
                array(
                    "edit" => true
                )
            );

            if ($this->request->isPost()) {

                $_POST["password"] = password_hash($_POST["password"], PASSWORD_DEFAULT);

                $userForm->bind(
                    $this->request->getPost(),
                    $user
                );

                if ($userForm->isValid()) {

                    if ($user->save()) {
                        $this->flash->success("User updated success");
                        $this->response->redirect("user/index");
                    } else {
                        foreach ($user->getMessages() as $message) {
                            $this->flash->error($message);
                        }
                        $this->response->redirect("user/index");
                    }

                } else {
                    foreach ($userForm->getMessages() as $message) {
                        $this->flash->error($message);
                    }
                    $this->response->redirect("user/index");
                }
            }

            $this->view->userForm = $userForm;
            $this->view->idUsers = $id;

        } else {
            $this->response->redirect("user/index");
        }
    }

    public function deleteAction($id = false)
    {
        if ($id) {
            $user = Users::findFirstByIdUsers((int) $id);
            if ($user->delete()) {
                $this->flash->success("Delete success");
                $this->response->redirect("user/index");
            } else {
                foreach ($user->getMessages() as $message) {
                    $this->flash->error($message);
                }
                $this->response->redirect("user/index");
            }
        } else {
            $this->response->redirect("user/index");
        }
    }
}
