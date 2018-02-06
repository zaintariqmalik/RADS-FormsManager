<?php
/**
 * Created by PhpStorm.
 * User: waqas
 * Date: 1/23/2018
 * Time: 11:55 AM
 */

class HRController extends CI_Controller{

    /*
     * This method will show index file and HR forms on the page
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
            $this->load->view('index');
        }
        else {
            $this->load->view('login');
        }

    }
}
?>