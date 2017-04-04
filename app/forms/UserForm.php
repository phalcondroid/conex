<?php

use Phalcon\Forms\Form;
use Phalcon\Forms\Element\Text;
use Phalcon\Forms\Element\Hidden;
use Phalcon\Forms\Element\Select;
use Phalcon\Forms\Element\Password;
use Phalcon\Validation\Validator\PresenceOf;

class UserForm extends Form
{
    public function initialize(Users $typeMenuEntity, array $options)
    {
        if (isset($options["edit"])) {
            $this->add(
                new Hidden(
                    "id_users"
                )
            );
        }

        $role = new Select(
            "id_role",
            Role::find(),
            array(
                "using" => array(
                    "id_role",
                    "profile",
                )
            )
        );
        $role->setLabel("Role");
        $this->add($role);

        $user = new Text(
            "user"
        );
        $user->setLabel("User");
        $user->setAttributes(array(
            "class" => "form-control"
        ));
        $user->addValidator(
            new PresenceOf(array(
                "message" => "User is required"
            ))
        );
        $this->add($user);

        $pass = new Password(
            "password"
        );
        $pass->setAttributes(array(
            "class" => "form-control"
        ));
        $pass->setLabel("Password");
        $pass->addValidator(
            new PresenceOf(array(
                "message" => "Password is required"
            ))
        );
        $this->add($pass);

        $name = new Text(
            "name"
        );
        $name->setLabel("Name");
        $name->setAttributes(array(
            "class" => "form-control"
        ));
        $name->addValidator(
            new PresenceOf(array(
                "message" => "Name is required"
            ))
        );
        $this->add($name);

        $identify = new Text(
            "identify"
        );
        $identify->setLabel("Identify");
        $identify->setAttributes(array(
            "class" => "form-control"
        ));
        $identify->addValidator(
            new PresenceOf(array(
                "message" => "Identify is required"
            ))
        );
        $this->add($identify);

        $mobile = new Text(
            "mobile_phone"
        );
        $mobile->setAttributes(array(
            "class" => "form-control"
        ));
        $mobile->setLabel("Mobile phone");
        $this->add($mobile);

        $address = new Text(
            "address"
        );
        $address->setAttributes(array(
            "class" => "form-control"
        ));
        $address->setLabel("Address");
        $this->add($address);


        $country = new Text(
            "country"
        );
        $country->setAttributes(array(
            "class" => "form-control"
        ));
        $country->setLabel("Country");
        $this->add($country);


        $city = new Text(
            "city"
        );
        $city->setAttributes(array(
            "class" => "form-control"
        ));
        $city->setLabel("City");
        $this->add($city);


        $birthday = new Text(
            "birthday"
        );
        $birthday->setAttributes(array(
            "class" => "form-control"
        ));
        $birthday->setLabel("Birthday");
        $this->add($birthday);
    }
}
