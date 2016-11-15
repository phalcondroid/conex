<?php

use Phalcon\Forms\Form;
use Phalcon\Forms\Element\Text;
use Phalcon\Forms\Element\Radio;
use Phalcon\Forms\Element\File;
use Phalcon\Forms\Element\Hidden;
use Phalcon\Forms\Element\Select;
use Phalcon\Validation\Validator\PresenceOf;

class CompanyForm extends Form
{
    public function initialize(Company $menuEntity, array $options)
    {
        if (isset($options["edit"])) {
            $this->add(
                new Hidden(
                    "id_company"
                )
            );
        }

        $name = new Text("name");
        $name->setLabel("Nombre");
        $name->setAttributes(array(
            "class" => "form-control"
        ));
        $name->setFilters(array(
            "striptags",
            "string"
        ));
        $this->add($name);

        $slogan = new Text("slogan");
        $slogan->setLabel("Slogan");
        $slogan->setAttributes(array(
            "class" => "form-control"
        ));
        $slogan->setFilters(array(
            "striptags",
            "string"
        ));
        $this->add($slogan);

        $legalConstitution = new Select(
            "id_legal_constitution",
            LegalConstitution::find(),
            array(
                "using" => array(
                    "id_legal_constitution",
                    "legal_constitution",
                )
            )
        );
        $legalConstitution->setAttributes(array(
            "class" => "form-control"
        ));
        $legalConstitution->setLabel("Constitución legal");
        $this->add($legalConstitution);

        $sizeCompany = new Select(
            "id_size_company",
            SizeCompany::find(),
            array(
                "using" => array(
                    "id_size_company",
                    "size_company",
                )
            )
        );
        $sizeCompany->setAttributes(array(
            "class" => "form-control"
        ));
        $sizeCompany->setLabel("Tamaño de la empresa");
        $this->add($sizeCompany);

        $companyAssets = new Select(
            "id_company_assets",
            CompanyAssets::find(),
            array(
                "using" => array(
                    "id_company_assets",
                    "company_assets",
                )
            )
        );
        $companyAssets->setAttributes(array(
            "class" => "form-control"
        ));
        $companyAssets->setLabel("Activos de la empresa");
        $this->add($companyAssets);

        $employeeNumber = new Select(
            "id_employee_number",
            EmployeeNumber::find(),
            array(
                "using" => array(
                    "id_employee_number",
                    "employee_number",
                )
            )
        );
        $employeeNumber->setAttributes(array(
            "class" => "form-control"
        ));
        $employeeNumber->setLabel("Número de empleados");
        $this->add($employeeNumber);

        $companySector = new Select(
            "id_company_sector",
            CompanySector::find(),
            array(
                "using" => array(
                    "id_company_sector",
                    "company_sector",
                )
            )
        );
        $companySector->setAttributes(array(
            "class" => "form-control"
        ));
        $companySector->setLabel("Sector al que pertenece");
        $this->add($companySector);

        $companySector = new Select(
            "id_company_sector",
            CompanySector::find(),
            array(
                "using" => array(
                    "id_company_sector",
                    "company_sector",
                )
            )
        );
        $companySector->setAttributes(array(
            "class" => "form-control"
        ));
        $companySector->setLabel("Sector al que pertenece");
        $this->add($companySector);

        $coverage = new Select(
            "id_coverage",
            Coverage::find(),
            array(
                "using" => array(
                    "id_coverage",
                    "coverage",
                )
            )
        );
        $coverage->setAttributes(array(
            "class" => "form-control"
        ));
        $coverage->setLabel("Covertura");
        $this->add($coverage);

        $commerceCameraTrue = new Radio("ceo");
        $commerceCameraTrue->setLabel("Estoy en cámara de comercio");
        $commerceCameraTrue->setAttributes(array(
            "value" => "1"
        ));
        $this->add($commerceCameraTrue);

        $commerceCameraFalse = new Radio("ceo");
        $commerceCameraFalse->setLabel("No estoy en cámara de comercio");
        $commerceCameraFalse->setAttributes(array(
            "value" => "0"
        ));
        $this->add($commerceCameraFalse);

        $address = new Text("address");
        $address->setLabel("Dirección");
        $address->setAttributes(array(
            "class" => "form-controll"
        ));
        $address->setFilters(array(
            "string",
            "striptags"
        ));
        $this->add($address);

        $webpage = new Text("webpage");
        $webpage->setLabel("Página web");
        $webpage->setAttributes(array(
            "class" => "form-controll"
        ));
        $webpage->setFilters(array(
            "string",
            "striptags"
        ));
        $this->add($webpage);

        $email = new Text("email");
        $email->setLabel("Correo electrónico");
        $email->setAttributes(array(
            "class" => "form-controll"
        ));
        $email->setFilters(array(
            "email",
            "striptags"
        ));
        $this->add($email);
    }
}
