<?php

class SystemController extends ControllerBase
{

    public function destroysessionAction()
    {
        $this->session->set("user", false);
        $this->session->set("acl", false);
        $this->session->destroy();
        $this->response->redirect("index/index");
    }
}
