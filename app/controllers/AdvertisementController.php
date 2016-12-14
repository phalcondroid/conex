<?php

class AdvertisementController extends ControllerBase
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
     */
    public function editAction($id)
    {
        if (!empty($id)) {
            $advert = Advertisement::findFirst(array(
                "conditions" => "id_advertisement = ?0",
                "bind"       => array(
                    0 => (int) $id
                )
            ));
            $this->view->companies = Company::find(array(
                "conditions" => "id_users = ?0",
                "bind" => array(
                    0 => $this->session->get("user")->id_users
                )
            ));
            $this->view->idAdvertisement = $id;
            $this->view->advertisement = $advert;
        } else {
            $this->response->redirect("services/index");
        }

        if ($this->request->isPost()) {
            $advert->id_company = $this->request->getPost("company", array(
                "int",
                "striptags"
            ));
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
                $this->flash->success("Edición completada");
            } else {
                foreach ($advert->getMessages() as $message) {
                    $this->flash->error(
                        $message
                    );
                }
            }
            $this->response->redirect("services/index");
        }
    }
}
