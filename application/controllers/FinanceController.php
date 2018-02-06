<?php
/**
 * Created by PhpStorm.
 * User: Waqas Ahmad
 * Date: 2/6/2018
 * Time: 4:16 PM
 */

class FinanceController extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
    }

/*
* This method will show index file and questions on the page
* First checks if session have some value or not
*/

    public  function  index(){
        $this->load->library('session');
        $sess = $this->session->userdata('User_Logged_In');
        if(!empty($sess)) {
            $this->load->view('FinanceView');
        }
        else {
            $this->load->view('Login');
        }

    }
}
?>