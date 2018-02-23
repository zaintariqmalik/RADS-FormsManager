<?php
/**
 * Created by PhpStorm.
 * User: Waqas Ahamd
 * Date: 2/7/2018
 * Time: 12:18 PM
 */


class AdminController extends CI_Controller{

    /*
     * This method will show Admin forms on the page
     * First checks if session have some value or not..
     * If user is logged in calls to Display forms
     * else load login view.
     *
     *
    */

    public function index(){
        $this->load->library('session');
        $sess = $this->session->userdata('User_Logged_In');
        if(!empty($sess)) {
            $this->load->view('AdminView');
        }
        else {
            $this->load->view('login');
        }

    }
}
?>