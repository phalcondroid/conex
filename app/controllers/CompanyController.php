<?php

/**
 *
 */
class CompanyController extends ControllerBase
{

    private $status;

    /**
     * [initialize description]
     * @return [type] [description]
     */
    public function initialize()
    {
        $this->view->setLayout("main");
        $this->status = "status = 1";
    }

    /**
     *
     * @return [type] [description]
     */
    public function indexAction()
    {
        $companies = Company::find(array(
            "conditions" => "id_users = ?0 and status = 1",
            "bind" => array(
                0 => $this->session->get("user")->id_users
            )
        ));
        $this->view->companies = $companies;
    }

    /**
     *
     */
    public function newAction()
    {
        $ciiu              = CiiuType::find($this->status);
        $companyAssets     = CompanyAssets::find($this->status);
        $employeeNumber    = EmployeeNumber::find($this->status);
        $companySector     = CompanySector::find($this->status);
        $companyPosition   = CompanyPosition::find($this->status);
        $sizeCompany       = SizeCompany::find($this->status);
        $legalConstitution = LegalConstitution::find($this->status);
        $coverage          = Coverage::find($this->status);

        $this->view->ciiuType          = $ciiu;
        $this->view->coverage          = $coverage;
        $this->view->companyAssets     = $companyAssets;
        $this->view->employeeNumber    = $employeeNumber;
        $this->view->companySector     = $companySector;
        $this->view->sizeCompany       = $sizeCompany;
        $this->view->companyPosition   = $companyPosition;
        $this->view->legalConstitution = $legalConstitution;
    }

    /**
     *
     */
    public function saveAction()
    {
        if ($this->request->isPost()) {

            $this->uploader->setRequest($this->request);
            $fileResult = $this->uploader->upload("/public/conex/company/");

            if ($fileResult == FileUpload::SIZE_ERROR) {
                $this->flash->error("Logo muy grande, debe pesar menos o igual a 2mb");
                $this->response->redirect("company/index");
            } elseif ($fileResult == FileUpload::FILE_UPLOAD_ERROR) {
                $this->flash->error("Error al subir archivo");
                $this->response->redirect("company/index");
            } elseif (is_string($fileResult)) {

                $user    = $this->session->get("user");

                $company = new Company();
                $company->setIdUsers($user->id_users);
                $company->setLogo($fileResult);
                $company->setIdCompanyAssets($this->request->getPost("companyAssets", array(
                    "int",
                    "striptags"
                )));
                $company->setIdEmployeeNumber($this->request->getPost("employeeNumber", array(
                    "int",
                    "striptags"
                )));
                $company->setIdCompanySector($this->request->getPost("companySector", array(
                    "int",
                    "striptags"
                )));
                $company->setIdSizeCompany($this->request->getPost("sizeCompany", array(
                    "int",
                    "striptags"
                )));
                $company->setIdCompanyPosition($this->request->getPost("companyPosition", array(
                    "int",
                    "striptags"
                )));
                $company->setIdLegalConstitution($this->request->getPost("legalConstitution", array(
                    "int",
                    "striptags"
                )));
                $company->setIdCoverage($this->request->getPost("coverage", array(
                    "int",
                    "striptags"
                )));
                $company->setIdCiiu($this->request->getPost("ciiu", array(
                    "int",
                    "striptags"
                )));
                $company->setName($this->request->getPost("name", array(
                    "string",
                    "striptags"
                )));
                $company->setDescription($this->request->getPost("description"));
                $company->setComerceCameraYear($this->request->getPost("register_year", array(
                    "string",
                    "striptags"
                )));
                $company->setAddress($this->request->getPost("address", array(
                    "string",
                    "striptags"
                )));
                $company->setWebpage($this->request->getPost("webPage", array(
                    "string",
                    "striptags"
                )));
                $company->setContactNumber($this->request->getPost("contactNumber", array(
                    "string",
                    "striptags"
                )));
                $company->setEmail($this->request->getPost("email", array(
                    "email",
                    "striptags"
                )));
                $company->setStatus(1);

                if ($company->save()) {
                    $this->flash->success("Nueva empresa registrada con satisfactoriamente");
                    $this->response->redirect("company/index");
                } else {
                    foreach ($company->getMessages() as $message) {
                        $this->flash->error($message);
                    }
                    $this->response->redirect("company/new");
                }
            }
        } else {
            $this->response->redirect("company/index");
        }
    }

    /**
     *
     */
    public function editAction($id)
    {
        if (!empty($id)) {

            $ciiu            = CiiuType::find($this->status);
            $companyAssets   = CompanyAssets::find($this->status);
            $employeeNumber  = EmployeeNumber::find($this->status);
            $companySector   = CompanySector::find($this->status);
            $companyPosition = CompanyPosition::find($this->status);
            $sizeCompany     = SizeCompany::find($this->status);
            $legalConstitution = LegalConstitution::find($this->status);
            $coverage        = Coverage::find($this->status);

            $this->view->ciiuType        = $ciiu;
            $this->view->coverage        = $coverage;
            $this->view->companyAssets   = $companyAssets;
            $this->view->employeeNumber  = $employeeNumber;
            $this->view->companySector   = $companySector;
            $this->view->sizeCompany     = $sizeCompany;
            $this->view->companyPosition = $companyPosition;
            $this->view->legalConstitution = $legalConstitution;

            $this->view->idCompany = $id;
            $company = Company::findFirstByIdCompany((int) $id);
            $this->view->company = $company;

            if ($this->request->isPost()) {

                $this->uploader->setRequest($this->request);
                $fileResult = $this->uploader->upload("/public/conex/company/");

                if (is_string($fileResult)) {
                    $company->setLogo($fileResult);
                }

                $company->setIdCompanyAssets($this->request->getPost("companyAssets", array(
                    "int",
                    "striptags"
                )));
                $company->setIdEmployeeNumber($this->request->getPost("employeeNumber", array(
                    "int",
                    "striptags"
                )));
                $company->setIdCompanySector($this->request->getPost("companySector", array(
                    "int",
                    "striptags"
                )));
                $company->setIdSizeCompany($this->request->getPost("sizeCompany", array(
                    "int",
                    "striptags"
                )));
                $company->setIdCompanyPosition($this->request->getPost("companyPosition", array(
                    "int",
                    "striptags"
                )));
                $company->setIdLegalConstitution($this->request->getPost("legalConstitution", array(
                    "int",
                    "striptags"
                )));
                $company->setIdCoverage($this->request->getPost("coverage", array(
                    "int",
                    "striptags"
                )));
                $company->setIdCiiu($this->request->getPost("ciiu", array(
                    "int",
                    "striptags"
                )));
                $company->setName($this->request->getPost("name", array(
                    "string",
                    "striptags"
                )));
                $company->setDescription($this->request->getPost("description"));
                $company->setComerceCameraYear($this->request->getPost("register_year", array(
                    "string",
                    "striptags"
                )));
                $company->setAddress($this->request->getPost("address", array(
                    "string",
                    "striptags"
                )));
                $company->setWebpage($this->request->getPost("webPage", array(
                    "string",
                    "striptags"
                )));
                $company->setContactNumber($this->request->getPost("contactNumber", array(
                    "string",
                    "striptags"
                )));
                $company->setEmail($this->request->getPost("email", array(
                    "email",
                    "striptags"
                )));

                if ($company->save()) {
                    $this->flash->success("Edición exitosa");
                    $this->response->redirect("company/index");
                } else {
                    foreach ($company->getMessages() as $message) {
                        $this->flash->error($message);
                    }
                    $this->response->redirect("company/new");
                }
            }

        } else {
            $this->response->redirect("company/index");
        }
    }

    /**
     *
     */
    public function deleteAction($id)
    {
        if (!empty($id)) {
            $company = Company::findFirstByIdCompany((int) $id);
            if ($company->delete()) {
                $this->flash->success("Eliminación correcta");
                $this->response->redirect("company/index");
            } else {
                foreach ($company->getMessages() as $message) {
                    $this->flash->error($message);
                }
                $this->response->redirect("company/index");
            }
        } else {
            $this->response->redirect("company/index");
        }
    }
}
