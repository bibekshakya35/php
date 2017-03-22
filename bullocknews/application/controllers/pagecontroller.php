<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of page
 *
 * @author Bibek Shakya
 */
class pagecontroller extends My_Controller {
    function __construct() {
        
        parent::__construct();
         $this->load->helper("url");
        $this->load->model("page_model");
          $this->load->helper("url");
        $this->load->helper("form");
        $this->load->helper("form");
        $this->load->library("form_validation");
        $this->load->library("session");
        
        
    }
    public function index(){
      
        $this->data['pageData']=$this->page_model->getAll();
        $this->load->view('template/header');
        $this->load->view('page/page',$this->data);
        
    }
    public function edit($AID=NULL){
        if ($AID!=NULL){
            $this->data['pageData']=$this->page_model->get($AID);
            count($this->data['pageData'])||$this->data["error"][]="user could not found";
        }
        else{
            $this->data["pageData"]=$this->page_model->get_new();
        }
        
        $rules=$this->page_model->rules_page;
        $this->form_validation->set_rules($rules);
        if($this->form_validation->run() == TRUE){
            $data=$this->page_model->array_from_post(array('heading','type','keyword','author','shortstory','fullstory','subfullstoryone','subfullstorytwo','image','subimage','date','status'));
            $this->page_model->save($data,$AID);
            redirect("pagecontroller/index");
        }
        $this->load->view("template/header");
        $this->load->view("page/_edit",$this->data);
        
    }
    public function delete($AID){
        $this->page_model->delete($AID);
        redirect("pagecontroller/index");
    }
    //put your code here
}
?>