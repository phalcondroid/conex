<?php

/**
 *
 */
class ServicesController extends ControllerBase
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
        $this->view->products = Products::find();
        $this->view->cProducts = count($this->view->products);

        $this->view->events   = Events::find();
        $this->view->cEvents = count($this->view->events);

        $this->view->advertisement = Advertisement::find();
        $this->view->cAdvertisement = count($this->view->advertisement);
        $this->view->advertisementCharacter = AdvertisementCharacteristics::find();

        $this->view->services = Service::find();
        $this->view->cServices = count($this->view->services);
    }

    /**
     * [indexAction description]
     * @return [type] [description]
     */
    public function createProductAction()
    {
        $this->view->productType     = productType::find();
        $this->view->productCapacity = ProductCapacity::find();

        if ($this->request->isPost()) {

            $product = new Products();
            $product->id_users = 1;
            $product->name = $this->request->getPost("name", array(
                "string",
                "striptags"
            ));
            $product->id_product_type = $this->request->getPost("productType", array(
                "int",
                "striptags"
            ));
            $product->id_product_capacity = $this->request->getPost("productCapacity", array(
                "int",
                "striptags"
            ));
            $product->slogan = $this->request->getPost("slogan", array(
                "string",
                "striptags"
            ));
            $product->description = $this->request->getPost("description", array(
                "string",
                "striptags"
            ));

            if ($product->save()) {
                $this->flash->success("Registro completado");
                $data['message'] = 'Victory';
                $this->pusher->trigger('test_channel', 'notice', $data);
            } else {
                foreach ($product->getMessages() as $message) {
                    $this->flash->error(
                        $message
                    );
                }
            }
        }
    }

    /**
     * [indexAction description]
     * @return [type] [description]
     */
    public function createEventAction()
    {
        $this->view->eventType = EventType::find();
        if ($this->request->isPost()) {

            $event = new Events();

            $event->id_users = 1;
            $event->id_event_type = $this->request->getPost("eventType", array(
                "int",
                "striptags"
            ));
            $event->name = $this->request->getPost("name", array(
                "string",
                "striptags"
            ));
            $event->address = $this->request->getPost("address", array(
                "string",
                "striptags"
            ));
            $event->description = $this->request->getPost("description", array(
                "string",
                "striptags"
            ));
            $event->slogan = $this->request->getPost("slogan", array(
                "string",
                "striptags"
            ));
            $startDate = $this->request->getPost("startDate", array(
                "string",
                "striptags"
            ));
            $event->start_date = date("Y-m-d", $startDate);

            $finishDate = $this->request->getPost("finishDate", array(
                "string",
                "striptags"
            ));
            $event->finish_date = date("Y-m-d", $finishDate);

            if ($event->save()) {
                $this->flash->success("Registro completado");
                $data['message'] = 'Victory';
                $this->pusher->trigger('test_channel', 'notice', $data);
            } else {
                foreach ($event->getMessages() as $message) {
                    $this->flash->error(
                        $message
                    );
                }
            }
        }
    }

    /**
     * [indexAction description]
     * @return [type] [description]
     */
    public function createAdvertisementAction()
    {
        if ($this->request->isPost()) {

            $advert = new Advertisement();

            $advert->id_users = 1;
            $advert->name = $this->request->getPost("name", array(
                "string",
                "striptags"
            ));
            $advert->address = $this->request->getPost("address", array(
                "string",
                "striptags"
            ));
            $advert->description = $this->request->getPost("description", array(
                "string",
                "striptags"
            ));
            $advert->publish_date = date("Y-m-d");
            $advert->value = $this->request->getPost("value", array(
                "string",
                "striptags"
            ));

            if ($advert->save()) {
                $this->flash->success("Registro completado");
                $data['message'] = 'Victory';
                $this->pusher->trigger('test_channel', 'notice', $data);
            } else {
                foreach ($advert->getMessages() as $message) {
                    $this->flash->error(
                        $message
                    );
                }
            }
        }
    }

    /**
     * [indexAction description]
     * @return [type] [description]
     */
    public function createServiceAction()
    {
        $this->view->serviceType = ServiceType::find();
        if ($this->request->isPost()) {

            $service = new Service();

            $service->id_users = 1;
            $service->id_service_type = $this->request->getPost("serviceType", array(
                "int",
                "striptags"
            ));
            $service->name = $this->request->getPost("name", array(
                "string",
                "striptags"
            ));
            $service->address = $this->request->getPost("address", array(
                "string",
                "striptags"
            ));
            $service->description = $this->request->getPost("description", array(
                "string",
                "striptags"
            ));
            $service->slogan = $this->request->getPost("slogan", array(
                "string",
                "striptags"
            ));

            if ($service->save()) {
                $this->flash->success("Registro completado");
                $data['message'] = 'Victory';
                $this->pusher->trigger('test_channel', 'notice', $data);
            } else {
                foreach ($service->getMessages() as $message) {
                    $this->flash->error(
                        $message
                    );
                }
            }
        }
    }
}
