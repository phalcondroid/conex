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
     * [indexAction description]
     * @return [type] [description]
     */
    public function indexAction()
    {
    }

    public function meAction()
    {
        $data['message'] = 'Victory';
        $this->pusher->trigger('test_channel', 'my_event', $data);
    }

    /**
     * [indexAction description]
     * @return [type] [description]
     */
    public function companyAction()
    {

    }
}
