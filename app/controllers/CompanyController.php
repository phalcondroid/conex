<?php

/**
 *
 */
class CompanyController extends ControllerBase
{

    /**
     * [initialize description]
     * @return [type] [description]
     */
    public function initialize()
    {
        $this->view->setLayout("main");
    }

    /**
     *
     * @return [type] [description]
     */
    public function indexAction()
    {
        $companies = Company::findByIdUsers($this->session->get("user")->id_users);
        $this->view->companies = $companies;
    }

    /**
     *
     */
    public function newAction()
    {
        $companyAssets  = CompanyAssets::find();
        $employeeNumber = EmployeeNumber::find();
        $companySector  = CompanySector::find();
        $sizeCompany    = SizeCompany::find();
        $legalConstitution = LegalConstitution::find();

        $this->view->companyAssets  = $companyAssets;
        $this->view->employeeNumber = $employeeNumber;
        $this->view->companySector  = $companySector;
        $this->view->sizeCompany    = $sizeCompany;
        $this->view->legalConstitution = $legalConstitution;
    }

    /**
     *
     */
    public function saveAction()
    {
        if ($this->request->isPost()) {
            $user    = $this->session->get("user");
            $company = new Company();
            $company->id_users = $user->id_users;
            $company->id_company_assets  = $this->request->getPost("companyAssets", array(
                "int",
                "striptags"
            ));
            $company->id_employee_number = $this->request->getPost("employeeNumber", array(
                "int",
                "striptags"
            ));
            $company->id_company_sector = $this->request->getPost("companySector", array(
                "int",
                "striptags"
            ));
            $company->id_size_company = $this->request->getPost("sizeCompany", array(
                "int",
                "striptags"
            ));
            $company->id_legal_constitution = $this->request->getPost("legalConstitution", array(
                "int",
                "striptags"
            ));
            $company->id_coverage = $this->request->getPost("coverage", array(
                "int",
                "striptags"
            ));
            $company->name = $this->request->getPost("name", array(
                "string",
                "striptags"
            ));
            $company->ceo = $this->request->getPost("camera", array(
                "string",
                "striptags"
            ));
            $company->address = $this->request->getPost("address", array(
                "string",
                "striptags"
            ));
        }
    }

    /**
     *
     * @return String $path
     */
    private function fileUpload()
    {
        if ($this->request->hasFiles() == true) {
            foreach ($this->request->getUploadedFiles() as $file) {
                echo $file->getName(), " ", $file->getSize(), "\n";
            }
        }
    }

    /**
     *
     */
    public function editAction($id)
    {
        if (!empty($id)) {
            if ($this->request->isPost()) {
                $company = Users::findFirstByIdCompany((int) $id);
            }
        }
    }
}
