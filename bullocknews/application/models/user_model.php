<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of user_model
 *
 * @author Bibek Shakya
 */
class user_model extends MY_Model{
    protected $_table_name="admin";
   
    protected $_primary_filter="intval";
    //protected $_order_by="";
    public $rules=array(
        'email'=>array(
            'field'=>'email',
            'label'=>'Email',
            'rules'=>'trim|required|valid_email'
        ),
        'password'=>array(
            'field'=>'password',
            'label'=>'Password',
            'rules'=>'trim|required'
        )
        
    );
    public $rules_admin=array(
         'name'=>array(
            'field'=>'name',
            'label'=>'Name',
            'rules'=>'trim|required'
        ),
        'email'=>array(
            'field'=>'email',
            'label'=>'Email',
            'rules'=>'trim|required|valid_email|callback__unique_email'
        ),
        'password'=>array(
            'field'=>'password',
            'label'=>'Password',
            'rules'=>'trim|matches[password_confirm]'
        ),
         'password_confirm'=>array(
            'field'=>'password_confirm',
            'label'=>'Confirm Password',
            'rules'=>'trim|matches[password]'
        ),
        
    );
    protected $_timestamps=FALSE;
    function __construct() {
        parent::__construct();
        
    }
    public function login(){
        $user= $this->get_by(array(
            'email'=>$this->input->post('email'),
            'password'=>md5($this->input->post('password')),
        ),TRUE);
        if($user){
            $data=array(
                'name'=>$user->name,
                'email'=>$user->email,
                'id'=>$user->id,
                'loggedin'=>TRUE
            );
            $this->session->set_userdata($data);
        }
        
    }
    public function logout(){
        return $this->session->sess_destroy();
    }

    public function loggedin(){
        return (boolean)$this->session->userdata('loggedin');
    }
    public function get_new()
    {
        $user=new stdClass();
        $user->name="";
        $user->email="";
        $user->password="";
        return $user;
        
        
    }

    //put your code here
}
