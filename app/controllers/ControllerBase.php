<?php

use Phalcon\Acl;
use Phalcon\Acl\Role as AclRole;
use Phalcon\Acl\Resource;
use Phalcon\Mvc\Controller;
use Phalcon\Acl\Adapter\Memory as AclList;

/**
 *
 */
class ControllerBase extends Controller
{

    /**
     *
     * @param [type] $dispatcher [description]
     *
     * @return [type] [description]
     */
    public function beforeExecuteRoute($dispatcher)
    {

        $controller = $dispatcher->getControllerName();
        $action     = $dispatcher->getActionName();

        if ($this->session->get("user")) {

            $this->view->countMessages = Deal::count(array(
                "conditions" => "id_users = ?0",
                "bind" => array(
                    0 => (int) $this->session->get("user")->id_users
                )
            ));
            $this->view->messages      = Deal::find(array(
                "conditions" => "id_users = ?0",
                "bind" => array(
                    0 => (int) $this->session->get("user")->id_users
                ),
                "limit" => 10,
                "order" => "id_deal desc"
            ));

            $this->view->lastDeals = Deal::find(array(
                "limit" => 10,
                "order" => "id_deal desc"
            ));

            $user = $this->session->get("user");

            try {
                $acl = new AclList();

                $acl->setDefaultAction(
                    Acl::DENY
                );

                $acl->addRole(new AclRole($user->Role->profile));

                $acl->addResource(
                    new Resource("index"),
                    "index"
                );
                $acl->allow($user->Role->profile, "index",  "index");

                $menus = Menu::findByIdRole($user->Role->id_role);

                foreach ($menus as $menu) {
                    $resource = new Resource($menu->name);
                    $items = MenuItem::find(array(
                        "conditions" => "id_menu = ?1 and status = 1",
                        "bind" => array(
                            1 => $menu->id_menu
                        )
                    ));
                    $actions = array();

                    foreach ($items as $item) {
                        $actions[] = $item->menu_item;
                    }

                    $acl->addResource(
                        $resource,
                        $actions
                    );

                    foreach ($actions as $actionItem) {
                        $acl->allow($user->Role->profile, $menu->name,  $actionItem);
                    }
                }

                $this->view->mainMenu = Menu::find(array(
                    "conditions" => "id_type_menu = ?0 and id_role = ?1",
                    "bind"      => array(
                        0 => 1,
                        1 => $user->Role->id_role
                    )
                ));

                if ($acl->isAllowed($user->Role->profile, $controller, $action)) {
                    if ($controller == "index" and $action == "index") {
                        $this->dispatchRoute($dispatcher, $user->Role->default_redirect);
                    }
                } else {
                    $acl->deny($user->Role->profile, $controller,  $action);
                }

            } catch (Exception $e) {
                $this->dispatchRoute($dispatcher, $user->Role->default_redirect);
            }

        } else {
            if ($controller != "index") {
                $this->response->redirect("index/index");
            }
        }
    }

    private function dispatchRoute($dispatcher, $url)
    {
        $this->flash->warning("Access deny");
        $result = explode("/", $url);
        $dispatcher->forward(array(
            "controller" => $result[0],
            "action" => $result[1]
        ));
    }
}
