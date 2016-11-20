<?php

use Phalcon\Mvc\Model\Transaction\Failed as TransactionFailed;
use Phalcon\Mvc\Model\Transaction\Manager as TransactionManager;

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

        $parameters = array(
            "conditions" => "id_users = ?0",
            "bind" => array(
                0 => $this->session->get("user")->id_users
            )
        );

        $this->view->products = Products::find($parameters);
        $this->view->cProducts = count($this->view->products);

        $this->view->events   = Events::find($parameters);
        $this->view->cEvents = count($this->view->events);

        $this->view->advertisement = Advertisement::find($parameters);
        $this->view->cAdvertisement = count($this->view->advertisement);
        $this->view->advertisementCharacter = AdvertisementCharacteristics::find();

        $this->view->services = Service::find($parameters);
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
            $product->id_users = $this->session->get("user")->id_users;
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
     *
     */
    public function deleteProductAction($id)
    {
        if (!empty($id)) {
            $product = Products::findFirstByIdProducts((int) $id);

            if ($product->delete()) {
                $this->flash->success("Producto eliminado correctamente");
                $this->response->redirect("services/index");
            } else {
                foreach ($product->getMessages() as $message) {
                    $this->flash->error($message);
                }
            }
            $this->response->redirect("services/index");

        } else {
            $this->response->redirect("services/index");
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

            $event->id_users = $this->session->get("user")->id_users;
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

            $event->description = $this->request->getPost("description");

            $event->slogan = $this->request->getPost("slogan", array(
                "string",
                "striptags"
            ));

            $event->lat = $this->request->getPost("lat", array(
                "string",
                "striptags"
            ));
            $event->lng = $this->request->getPost("lng", array(
                "string",
                "striptags"
            ));

            $event->start_date = $this->request->getPost("startDate", array(
                "string",
                "striptags"
            ));

            $event->finish_date = $this->request->getPost("finishDate", array(
                "string",
                "striptags"
            ));

            if ($event->save()) {

                $data['message'] = 'Victory';
                $this->pusher->trigger('test_channel', 'notice', $data);

                $this->flash->success("Evento registrado correctamente");

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
     *
     */
    public function deleteEventAction($id)
    {
        if (!empty($id)) {

            $eventGallery = EventGallery::find(array(
                "conditions" => "id_events = ?0",
                "bind" => array(
                    0 => (int) $id
                )
            ));

            foreach ($eventGallery as $item) {
                $item->delete();
            }

            $event = Events::findFirstByIdEvents((int) $id);

            if ($event) {
                if ($event->delete()) {
                    $this->flash->success("Evento eliminado correctamente");
                    $this->response->redirect("services/index");
                } else {
                    foreach ($event->getMessages() as $message) {
                        $this->flash->error($message);
                    }
                }
            }
            $this->response->redirect("services/index");

        } else {
            $this->response->redirect("services/index");
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

            $advert->id_users = $this->session->get("user")->id_users;
            $advert->name = $this->request->getPost("name", array(
                "string",
                "striptags"
            ));
            $advert->address = $this->request->getPost("address", array(
                "string",
                "striptags"
            ));
            $advert->description = $this->request->getPost("description");

            $advert->lat = $this->request->getPost("lat", array("string", "striptags"));
            $advert->lng = $this->request->getPost("lng", array("string", "striptags"));

            $advert->publish_date = $this->request->getPost("publishDate", array(
                "string",
                "striptags"
            ));
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

    public function deleteAdvertisementAction($id)
    {
        if (!empty($id)) {
            $advertisement = Advertisement::findFirstByIdAdvertisement((int) $id);

            if ($advertisement->delete()) {
                $this->flash->success("Anuncio eliminado correctamente");
                $this->response->redirect("services/index");
            } else {
                foreach ($advertisement->getMessages() as $message) {
                    $this->flash->error($message);
                }
            }
            $this->response->redirect("services/index");

        } else {
            $this->response->redirect("services/index");
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

            $service->id_users = $this->session->get("user")->id_users;
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
            $service->description = $this->request->getPost("description");
            $service->slogan = $this->request->getPost("slogan", array(
                "string",
                "striptags"
            ));

            $service->start_date = $this->request->getPost("startDate", array(
                "string",
                "striptags"
            ));

            $service->finish_date = $this->request->getPost("finishDate", array(
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

    public function deleteServiceAction($id)
    {
        if (!empty($id)) {
            $service = Service::findFirstByIdService((int) $id);

            if ($service->delete()) {
                $this->flash->success("Service eliminado correctamente");
                $this->response->redirect("services/index");
            } else {
                foreach ($service->getMessages() as $message) {
                    $this->flash->error($message);
                }
            }
            $this->response->redirect("services/index");

        } else {
            $this->response->redirect("services/index");
        }
    }
}
