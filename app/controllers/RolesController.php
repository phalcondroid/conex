<?php

class RolesController extends ControllerBase
{
    public function initialize()
    {
        $this->view->setLayout("main");
    }

    /**
     *
     */
    public function indexAction()
    {
        $this->view->roles = Role::find("status = 1");
    }

    public function newAction()
    {
        $role = new Role;
        $roleForm = new RoleForm(
            $role,
            array()
        );

        if ($this->request->isPost()) {

            $roleForm->bind(
                $this->request->getPost(),
                $role
            );
            $role->status = 1;

            if ($roleForm->isValid()) {
                if ($role->save()) {
                    $roleForm->clear();
                    $this->flash->success("Role saved");
                    $this->response->redirect("roles/index");
                } else {
                    foreach ($role->getMessages() as $message) {
                        $this->flash->error($message);
                    }
                }
            }

        }
        $this->view->roleForm = $roleForm;
    }

    /**
     *
     */
    public function editAction($id)
    {
        $role = Role::findFirstByIdRole($id);

        $roleForm = new RoleForm(
            $role,
            array(
                "edit" => true
            )
        );

        if ($this->request->isPost()) {

            $roleForm->bind(
                $this->request->getPost(),
                $role
            );

            if ($roleForm->isValid()) {
                if ($role->save()) {
                    $roleForm->clear();
                    $this->flash->success("Role updated");
                    $this->response->redirect("roles/index");
                } else {
                    foreach ($role->getMessages() as $message) {
                        $this->flash->error($message);
                    }
                    $this->response->redirect("roles/index");
                }
            }
        }

        $this->view->idRole   = $id;
        $this->view->roleForm = $roleForm;
    }

    /**
     *
     */
    public function deleteAction()
    {
        if ($this->request->isPost()) {
            $value = $this->request->getPost("value", array(
                "striptags",
                "int"
            ));
            $role = Role::findFirstByIdRole($value);
            if ($role->delete()) {
                $this->flash->success("Delete success");
                $this->response->redirect("roles/index");
            } else {
                foreach ($role->getMessages() as $message) {
                    $this->flash->error($message);
                }
            }
        }
    }
}
