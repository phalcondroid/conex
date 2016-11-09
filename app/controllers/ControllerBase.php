<?php

use Phalcon\Acl;
use Phalcon\Acl\Role as AclRole;
use Phalcon\Acl\Resource;
use Phalcon\Mvc\Controller;
use Phalcon\Acl\Adapter\Memory as AclList;

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

            $user = $this->session->get("user");

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
                    $this->response->redirect($user->Role->default_redirect);
                }
            } else {
                $this->response->redirect($user->Role->default_redirect);
            }

        } else {
            if ($controller != "index") {
                $this->response->redirect("index/index");
            }
        }
    }
}
