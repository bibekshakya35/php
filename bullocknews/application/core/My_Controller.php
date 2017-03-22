<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of My_Controller
 *
 * @author Bibek Shakya
 */
class My_Controller extends CI_Controller {
    public $data=array();
    function __construct() {
        parent::__construct();
       $this->load->helper("url");
        $this->load->helper("form");
        $this->load->library("form_validation");
        $this->load->library("session");
        $this->load->model("user_model");
        $exception_urls =array(
            "bullocknews/cms",
            "pagecontroller/index"
        );
        if(!in_array(uri_string(),$exception_urls)==FALSE){
        if($this->user_model->loggedin()== FALSE){
            redirect("bullocknews/login");
        }
        }
    }

    //put your code here
}
