<?php

use Phalcon\Forms\Form;
use Phalcon\Forms\Element\Text;
use Phalcon\Forms\Element\Hidden;
use Phalcon\Forms\Element\Select;
use Phalcon\Validation\Validator\PresenceOf;

class MenuForm extends Form
{
    public function initialize(Menu $menuEntity, array $options)
    {
        if (isset($options["edit"])) {
            $this->add(
                new Hidden(
                    "id_menu"
                )
            );
        }

        $typeMenu = new Select(
            "id_type_menu",
            TypeMenu::find()
        );
        $typeMenu->setLabel("Type menu");
        $this->add($typeMenu);

        $role = new Select(
            "id_role",
            Role::find()
        );
        $role->setLabel("Role");
        $this->add($role);

        $name = new Text("name");
        $name->addValidator(
            new PresenceOf(array(
                "message" => "The name is required"
            ))
        );
        $name->setLabel("Label");
        $this->add($name);

        $label = new Text(
            "label"
        );
        $label->setLabel("Name menu");
        $label->addValidator(
            new PresenceOf(array(
                "message" => "The label is required"
            ))
        );
        $this->add($label);

        $logo = new Text(
            "logo"
        );
        $logo->setLabel("Logo");
        $logo->addValidator(
            new PresenceOf(array(
                "message" => "Logo"
            ))
        );
        $this->add($logo);

        $default = new Text(
            "default"
        );
        $default->setLabel("Action default");
        $default->addValidator(
            new PresenceOf(array(
                "message" => "action default"
            ))
        );
        $this->add($default);
    }
}
