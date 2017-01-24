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

        $parameters = array(
            "conditions" => "status = ?0",
            "bind" => array(
                0 => 1
            ),
            "limit" => 10
        );

        if ($this->request->isPost()) {

            $search = $this->request->getPost("searchProduct", array(
                "string",
                "striptags"
            ));

            $parameters = array(
                "conditions" => "id_users <> ?0 and name LIKE '%$search%'",
                "bind" => array(
                    0 => $this->session->get("user")->id_users
                )
            );
        }

        $this->view->aggrements = Deal::find(array(
            "order" => "id_deal desc",
            "limit" => 10
        ));

        $this->view->products      = Products::find($parameters);
        $this->view->events        = Events::find($parameters);
        $this->view->advertisement = Advertisement::find($parameters);
        $this->view->services      = Service::find($parameters);

    }

    /**
     *
     */
    public function getJsonDealsAction()
    {
        $this->view->disable();

        $result = array();

        if ($this->request->isPost()) {
            $deals = Deal::find(array(
                "order" => "id_deal desc",
                "limit" => 10
            ));
            foreach ($deals as $item) {
                $result[] = array(
                    "user" => $item->Users->name,
                    "date" => $item->created_at,
                    "message" => $item->message
                );
            }
            echo json_encode($result);
        }

        $this->response->setContent($result);
        return $this->response;
    }

    public function aggrementAction()
    {
        $this->view->disable();
        if ($this->request->isPost()) {

            $id = (int) $this->request->getPost("id");
            $message = $this->request->getPost("message");
            $type = $this->request->getPost("type");

            switch ($type) {
                case "prod":
                        $result = Products::findFirstByIdProducts($id);
                    break;
                case "adv":
                        $result = Advertisement::findFirstByIdAdvertisement($id);
                    break;
                case "event":
                        $result = Events::findFirstByIdEvents($id);
                    break;
                case "service":
                        $result = Service::findFirstByIdService($id);
                    break;
            }

            $deal = new Deal();
            $deal->id_users = $result->id_users;
            $deal->id = $id;
            $deal->message = $message;
            $deal->type = $type;

            $deal->save();

            $data['message'] = 'Victory';
            $this->pusher->trigger('test_channel', 'message', $data);
            $this->pusher->trigger('test_channel', 'notice', $data);
        }
    }

    public function messagesAction()
    {
        $this->view->messages = Deal::findByIdUsers(
            $this->session->get("user")->id_users
        );
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
}
