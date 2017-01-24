<?php
 
use Phalcon\Mvc\Model\Criteria;
use Phalcon\Paginator\Adapter\Model as Paginator;


class CompanyAssetsController extends ControllerBase
{
    /**
     * Index action
     */
    public function indexAction()
    {
        $this->persistent->parameters = null;
    }

    /**
     * Searches for company_assets
     */
    public function searchAction()
    {
        $numberPage = 1;
        if ($this->request->isPost()) {
            $query = Criteria::fromInput($this->di, 'CompanyAssets', $_POST);
            $this->persistent->parameters = $query->getParams();
        } else {
            $numberPage = $this->request->getQuery("page", "int");
        }

        $parameters = $this->persistent->parameters;
        if (!is_array($parameters)) {
            $parameters = [];
        }
        $parameters["order"] = "id_company_assets";

        $company_assets = CompanyAssets::find($parameters);
        if (count($company_assets) == 0) {
            $this->flash->notice("The search did not find any company_assets");

            $this->dispatcher->forward([
                "controller" => "company_assets",
                "action" => "index"
            ]);

            return;
        }

        $paginator = new Paginator([
            'data' => $company_assets,
            'limit'=> 10,
            'page' => $numberPage
        ]);

        $this->view->page = $paginator->getPaginate();
    }

    /**
     * Displays the creation form
     */
    public function newAction()
    {

    }

    /**
     * Edits a company_asset
     *
     * @param string $id_company_assets
     */
    public function editAction($id_company_assets)
    {
        if (!$this->request->isPost()) {

            $company_asset = CompanyAssets::findFirstByid_company_assets($id_company_assets);
            if (!$company_asset) {
                $this->flash->error("company_asset was not found");

                $this->dispatcher->forward([
                    'controller' => "company_assets",
                    'action' => 'index'
                ]);

                return;
            }

            $this->view->id_company_assets = $company_asset->id_company_assets;

            $this->tag->setDefault("id_company_assets", $company_asset->id_company_assets);
            $this->tag->setDefault("company_assets", $company_asset->company_assets);
            $this->tag->setDefault("status", $company_asset->status);
            $this->tag->setDefault("created_at", $company_asset->created_at);
            
        }
    }

    /**
     * Creates a new company_asset
     */
    public function createAction()
    {
        if (!$this->request->isPost()) {
            $this->dispatcher->forward([
                'controller' => "company_assets",
                'action' => 'index'
            ]);

            return;
        }

        $company_asset = new CompanyAssets();
        $company_asset->company_assets = $this->request->getPost("company_assets");
        $company_asset->status = $this->request->getPost("status");
        $company_asset->created_at = $this->request->getPost("created_at");
        

        if (!$company_asset->save()) {
            foreach ($company_asset->getMessages() as $message) {
                $this->flash->error($message);
            }

            $this->dispatcher->forward([
                'controller' => "company_assets",
                'action' => 'new'
            ]);

            return;
        }

        $this->flash->success("company_asset was created successfully");

        $this->dispatcher->forward([
            'controller' => "company_assets",
            'action' => 'index'
        ]);
    }

    /**
     * Saves a company_asset edited
     *
     */
    public function saveAction()
    {

        if (!$this->request->isPost()) {
            $this->dispatcher->forward([
                'controller' => "company_assets",
                'action' => 'index'
            ]);

            return;
        }

        $id_company_assets = $this->request->getPost("id_company_assets");
        $company_asset = CompanyAssets::findFirstByid_company_assets($id_company_assets);

        if (!$company_asset) {
            $this->flash->error("company_asset does not exist " . $id_company_assets);

            $this->dispatcher->forward([
                'controller' => "company_assets",
                'action' => 'index'
            ]);

            return;
        }

        $company_asset->company_assets = $this->request->getPost("company_assets");
        $company_asset->status = $this->request->getPost("status");
        $company_asset->created_at = $this->request->getPost("created_at");
        

        if (!$company_asset->save()) {

            foreach ($company_asset->getMessages() as $message) {
                $this->flash->error($message);
            }

            $this->dispatcher->forward([
                'controller' => "company_assets",
                'action' => 'edit',
                'params' => [$company_asset->id_company_assets]
            ]);

            return;
        }

        $this->flash->success("company_asset was updated successfully");

        $this->dispatcher->forward([
            'controller' => "company_assets",
            'action' => 'index'
        ]);
    }

    /**
     * Deletes a company_asset
     *
     * @param string $id_company_assets
     */
    public function deleteAction($id_company_assets)
    {
        $company_asset = CompanyAssets::findFirstByid_company_assets($id_company_assets);
        if (!$company_asset) {
            $this->flash->error("company_asset was not found");

            $this->dispatcher->forward([
                'controller' => "company_assets",
                'action' => 'index'
            ]);

            return;
        }

        if (!$company_asset->delete()) {

            foreach ($company_asset->getMessages() as $message) {
                $this->flash->error($message);
            }

            $this->dispatcher->forward([
                'controller' => "company_assets",
                'action' => 'search'
            ]);

            return;
        }

        $this->flash->success("company_asset was deleted successfully");

        $this->dispatcher->forward([
            'controller' => "company_assets",
            'action' => "index"
        ]);
    }

}
