<?php

/**
 *
 */
class ProfileController extends ControllerBase
{

    /**
     * [initialize description]
     * @return [type] [description]
     */
    public function initialize()
    {
        $this->view->setLayout("main");
    }

    /**
     *
     * @return [type] [description]
     */
    public function indexAction()
    {
        $user = Users::findFirstByIdUsers(
            $this->session->get("user")->id_users
        );
        $this->view->user = $user;

        if ($this->request->isPost()) {

            $this->uploader->setRequest($this->request);
            $fileResult = $this->uploader->upload("/public/conex/profile/");

            if (is_string($fileResult)) {
                $user->avatar = $fileResult;
            }

            $user->id_student_type = 1;
            $user->name = $this->request->getPost("name", array(
                "striptags",
                "string"
            ));
            $user->identify = $this->request->getPost("identify", array(
                "striptags",
                "string"
            ));
            $user->mobile_phone = $this->request->getPost("phone", array(
                "int",
                "striptags"
            ));
            $user->address = $this->request->getPost("address", array(
                "striptags",
                "string"
            ));
            $user->birthday = $this->request->getPost("birthday", array(
                "striptags",
                "string"
            ));
            $user->email = $this->request->getPost("email", array(
                "striptags",
                "email"
            ));
            $user->other_email = $this->request->getPost("other_email", array(
                "striptags",
                "email"
            ));

            if ($user->save()) {
                $this->flash->success("Registro completado");
            } else {
                foreach ($user->getMessages() as $message) {
                    $this->flash->error($message);
                }
            }
        }
    }
}
