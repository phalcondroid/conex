<?php

class DealsController extends ControllerBase
{
    /**
     * [initialize description]
     * @return [type] [description]
     */
    public function initialize()
    {
        $this->view->setLayout('main');
    }

    /**
     * [indexAction description]
     * @return [type] [description]
     */
    public function indexAction()
    {
        $this->view->products = Products::find();

        $this->view->events   = Events::find();

        $this->view->advertisement = Advertisement::find();
        $this->view->advertisementCharacter = AdvertisementCharacteristics::find();

        $this->view->services = Service::find();
    }

    /**
     * [pusherAction description]
     * @return [type] [description]
     */
    public function pusherAction()
    {
        $data['message'] = 'Victory';
        $this->pusher->trigger('test_channel', 'agreement', $data);
    }

    /**
     * [pusherAction description]
     * @return [type] [description]
     */
    public function testAction()
    {
        $data['message'] = 'Victory';
        $this->pusher->trigger('test_channel', 'notice', $data);
    }
}
