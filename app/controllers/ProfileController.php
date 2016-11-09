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
        $user = Users::findFirst(array(
            "id_users" => 1
        ));

        $userContent = array();
        if ($user) {
            $userContent = (object) array(
                "name"     => $user->name,
                "identify" => $user->identify,
                "phone"    => $user->mobile_phone,
                "address"  => $user->address,
                "birthday" => $user->birthday
            );
        } else {
            $userContent = (object) array(
                "name"     => "",
                "identify" => "",
                "phone"    => "",
                "address"  => "",
                "birthday"  => ""
            );
        }
        $this->view->user = $userContent;

        if ($this->request->isPost()) {

            $user = new Users();
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
            $user->avatar = "";
            $user->birthday = $this->request->getPost("birthday", array(
                "striptags",
                "string"
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

    /**
     *
     * @return [type] [description]
     */
    public function meAction()
    {

        //$data['message'] = 'Victory';
        //$this->pusher->trigger('test_channel', 'my_event', $data);
    }

    /**
     * [indexAction description]
     * @return [type] [description]
     */
    public function companyAction()
    {

    }
}
