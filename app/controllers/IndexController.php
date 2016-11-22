<?php

class IndexController extends ControllerBase
{

    /**
     *
     */
    public function indexAction()
    {
        $this->view->companies = Company::find(array(
            "limit" => 3
        ));

        if ($this->request->isPost()) {

            $username = $this->request->getPost("user", array(
                "striptags",
                "string"
            ));
            $pass = $this->request->getPost("pass", array(
                "striptags",
                "string"
            ));

            if (empty($username) or empty($pass)) {
                $this->flash->error("El usuario o la contraseña son erroneos");
            } else {

                $exist = Users::findFirst(array(
                    "conditions" => "user = ?0",
                    "bind"       => array(
                        0 => $username
                    )
                ));

                $password_verify = false;
                if ($exist) {

                    if (password_verify($pass, $exist->password)) {
                        $password_verify = true;
                    } else {
                        $password_verify = false;
                    }
                }

                if ($password_verify) {

                    $this->session->set(
                        "user",
                        $exist
                    );
                    $this->response->redirect($exist->Role->default_redirect);

                } else {

                    $response = $this->getContentLogin($username, $pass);

                    if ($response) {

                        if ($response->autenticoExito == "S") {

                            $programas = new \stdClass;
                            $programas->tipoUsuario = "ESTUDIANTE";
                            if (isset($response->programas[0])) {
                                $programas = $response->programas[0];
                            }
                            $usuario = (object) array(
                                "nombres"   => "",
                                "apellidos" => "",
                                "celular"   => "",
                                "ciudadResidencia"   => "",
                                "documentoIdentidad" => "",
                                "fechaNacimiento"    => "",
                                "nombres"   => "",
                                "telefono"  => "",
                                "status"    => 10
                            );

                            if (isset($response->usuario)) {
                                $usuario = $response->usuario;
                            }

                            $studentType = StudentType::findFirstByStudentType($programas->tipoUsuario);

                            $user = new Users();
                            $user->id_student_type = $studentType->id_student_type;
                            $user->id_role      = 1;
                            $user->user         = $username;
                            $user->password     = password_hash($pass, PASSWORD_DEFAULT);
                            $user->name         = $usuario->nombres . " " . $usuario->apellidos;
                            $user->identify     = $usuario->documentoIdentidad;
                            $user->mobile_phone = $usuario->telefono;
                            $user->city         = $usuario->ciudadResidencia;
                            $user->birthday     = date("Y-m-d", strtotime($usuario->fechaNacimiento));
                            $user->status       = 1;

                            if (isset($usuario->status)) {
                                $user->status = 10;
                            }

                            if ($user->save()) {
                                $userSession = Users::findFirstByIdUsers($user->id_users);
                                $this->session->set(
                                    "user",
                                    $userSession
                                );
                                $this->response->redirect($userSession->Role->default_redirect);
                            } else {
                                foreach ($user->getMessages() as $message) {
                                    $this->flash->error($message);
                                }
                            }

                        } else {
                            $this->flash->error("Usuario no encontrado, contacta a tu administrador");
                        }
                    } else {
                        $this->flash->error("Usuario no encontrado, contacta a tu administrador");
                    }
                }
            }
        }
    }

    /**
     *
     */
    private function getContentLogin($user, $pass)
    {
        try {

            $url = "http://172.16.0.89:9030/LoginService.svc/ObtenerInfoUsuarioj/$user/$pass";

            $response = $this->guzzle->get(
                $url
            );

            if (is_object($response)) {
                $body = $response->getBody();
                if (is_object($body)) {
                    $contents = $body->getContents();
                    if (is_string($contents)) {
                        $contents = json_decode($contents);
                        return $contents->ObtenerInfoUsuarioJResult;
                    }
                }
            }
        } catch (Exception $e) {
            return false;
        }

        return false;
    }
}
