<?php

use Phalcon\Forms\Form;
use Phalcon\Forms\Element\Text;
use Phalcon\Forms\Element\Hidden;
use Phalcon\Forms\Element\Select;
use Phalcon\Validation\Validator\PresenceOf;

class TypeMenuForm extends Form
{
    public function initialize(TypeMenu $typeMenuEntity, array $options)
    {
        if (isset($options["edit"])) {
            $this->add(
                new Hidden(
                    "id_type_menu"
                )
            );
        }

        $default = new Text(
            "type_menu"
        );
        $default->setLabel("Type menu");
        $default->addValidator(
            new PresenceOf(array(
                "message" => "Type menu is required"
            ))
        );
        $this->add($default);
    }
}
