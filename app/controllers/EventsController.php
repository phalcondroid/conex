<?php

class EventsController extends ControllerBase
{
	public function initialize()
	{
		$this->view->setLayout("main");
	}

	public function indexAction()
	{

	}

	public function editAction($id)
	{
		if (!empty($id)) {
			$event = Events::findFirst(array(
				"conditions" => "id_events = ?0",
				"bind" => array(
					0 => (int) $id
				)
			));
            $this->view->companies = Company::find(array(
                "conditions" => "id_users = ?0",
                "bind" => array(
                    0 => $this->session->get("user")->id_users
                )
            ));
			$this->view->idEvents  = $id;
			$this->view->event     = $event; 
			$this->view->eventType = EventType::find();
		} else {
			$this->response->redirect("services/index");
		}

		if ($this->request->isPost()) {

            $event->id_users = $this->session->get("user")->id_users;
            $event->id_event_type = $this->request->getPost("eventType", array(
                "int",
                "striptags"
            ));
            $event->id_company = $this->request->getPost("company", array(
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

                $this->flash->success("Evento actualizado correctamente");

            } else {
                foreach ($event->getMessages() as $message) {
                    $this->flash->error(
                        $message
                    );
                }
            }
            $this->response->redirect("services/index");
		}
	}
}