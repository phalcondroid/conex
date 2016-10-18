<?php

use Phalcon\Forms\Form;
use Phalcon\Forms\Element\Text;
use Phalcon\Forms\Element\Hidden;
use Phalcon\Forms\Element\Select;
use Phalcon\Validation\Validator\PresenceOf;

class MenuItemForm extends Form
{
    public function initialize(Role $role, array $options)
    {
        if (isset($options["edit"])) {
            $this->add(
                new Hidden(
                    "id_menu_item"
                )
            );
        }

        $profile = new Text(
            "profile"
        );
        $profile->setLabel("Perfil");
        $profile->addValidator(
            new PresenceOf(array(
                "message" => "The name is required"
            ))
        );
        $this->add($profile);

        $defaultRedirect = new Text(
            "default_redirect"
        );
        $defaultRedirect->setLabel("Dirección por defecto");
        $defaultRedirect->addValidator(
            new PresenceOf(array(
                "message" => "The name is required"
            ))
        );
        $this->add($defaultRedirect);
    }
}
