<?php

/**
 *
 */
class ReportsController extends ControllerBase
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
     */
    public function indexAction()
    {

    }

    /**
     * [indexAction description]
     * @return [type] [description]
     */
    public function rankAction()
    {

    }

    /**
     * [indexAction description]
     * @return [type] [description]
     */
    public function salesAction()
    {
        $this->view->deals = Deal::find("status = 1");
    }

    public function getExcelSalesAction()
    {
        $this->view->disabled();
        header("Content-Type:   application/vnd.ms-excel; charset=utf-8");
        header("Content-Disposition: attachment; filename=abc.xls");  //File name extension was wrong
        header("Expires: 0");
        header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
        header("Cache-Control: private",false);
        echo "Some Text"; //no ending ; here
    }
}
