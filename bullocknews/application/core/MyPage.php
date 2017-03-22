<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of My_Page_Model
 *
 * @author Bibek Shakya
 */
class MyPage extends CI_Model {
    function __construct() {
        parent::__construct();
        
    }
    protected $_table_name="";
    protected $_primary_key="AID";
    protected $_primary_filter="intval";
    protected $_order_by="";
    public $rules=array();
    protected $_timestamps=FALSE;

   public function get($id=NULL,$single=FALSE){
       if($id!=NULL){
           $filter=  $this->_primary_filter;
           $AID=$filter($AID);
           $this->db->where($this->_primary_key,$AID);
           $method="row";
       }
       else if($single==TRUE){
           $method="row";
           
       }
       else{
           $method="result";
       }
       return $this->db->get($this->_table_name)->$method();
   }
   public function get_by($where,$single=FALSE){
       $this->db->where($where);
       return $this->get(NULL,$single);
   }
   public function save($data,$AID=NULL) {
       //data is array of all databae value
       if ($this->_timestamps==true){
           $now=  date("y-m-d");
           $AID||$data["created"]=$now;
           $data["modified"]=$now;
       }
       if($AID==NULL){
           //unset primary key and if pk is given then null so if dont then
           !isset($this->_primary_key)||$data[$this->_primary_key]==NULL;
           $this->db->set($data);
           $this->db->insert($this->_table_name);
           $AID=$this->db->insert_id();
           //IF THIS ISINSERT FETCH THE ID
           
       }
       else{
           $filter =$this->_primary_filter;
           $AID=$filter($AID);
           $this->db->set($data);
           $this->db->where($this->_primary_key,$AID);
           $this->db->update($this->_table_name);
           
       }
       return $AID;
       
   }
   public function delete($AID){
       $filter=$this->_primary_filter;
       $AID=$filter($this->$AID);
       if(!$AID){
           return FALSE;
       }
       else {
           $this->db->where($this->_primary_key,$AID);
           $this->db->limit(1);
           $this->db->delete($this->_table_name);
       }
   }
    //put your code here
}
