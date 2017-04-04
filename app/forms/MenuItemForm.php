<?php

use Phalcon\Forms\Form;
use Phalcon\Forms\Element\Text;
use Phalcon\Forms\Element\Hidden;
use Phalcon\Forms\Element\Select;
use Phalcon\Validation\Validator\PresenceOf;

class MenuItemForm extends Form
{
    public function initialize(MenuItem $menuItemEntity, array $options)
    {
        if (isset($options["edit"])) {
            $this->add(
                new Hidden(
                    "id_menu_item"
                )
            );
        }

        $menuItem = new Text(
            "menu_item"
        );
        $menuItem->setLabel("Action");
        $menuItem->addValidator(
            new PresenceOf(array(
                "message" => "The action is required"
            ))
        );
        $this->add($menuItem);

        $label = new Text(
            "label"
        );
        $label->setLabel("Name menu");
        $label->addValidator(
            new PresenceOf(array(
                "message" => "The name is required"
            ))
        );
        $this->add($label);

        $logo = new Text(
            "logo"
        );
        $logo->setLabel("Logo");
        $this->add($logo);
    }
}
