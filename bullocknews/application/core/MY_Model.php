<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of MY_Model
 *
 * @author Bibek Shakya
 */
class MY_Model extends CI_Model {
    protected $_table_name="";
    protected $_primary_key='id';
    protected $_primary_filter="intval";
    //protected $_order_by="";
    protected $_rules=array();
    protected $_timestamps=FALSE;
    function __construct() {
        parent::__construct();       
    }//each time model is loaded this model load as well
    public function  array_from_post($field){
        $data=array();
        foreach ($field as $fields){
            $data[$fields]=  $this->input->post($fields);
                    
        }
        return $data;
        
    }
    

    public function get($id=NULL,$single=FALSE){//default lead to all record
        if($id!=NULL){
            $filter=  $this->_primary_filter;
            //if we habve id to filter
            $id=$filter($id);
            $this->db->where($this->_primary_key,$id);
            //pk will be replace by filter id
            
            $method='row';
        }
        else if($single==TRUE){
            $method="row";
        }
        else {
           $method='result';
        }
     
     //if(!count($this->db->qb_orderby)){
     //  $this->db->order_by($this->_order_by);
      //   //if somebody already set the order then this will not go if yes then this will
         
     ///}
        return $this->db->get($this->_table_name)->$method();
        
    }
    public function get_by($where,$single=NULL) {
        $this->db->where($where);//set that where statement and pass to get
        // if we want single data we will get single parameter
        return $this->get(NULL,$single);
        
    }
    public function save($data,$id=NULL){
        //data is an array if u have id then update if not insert
        //insert
        if($this->_timestamps==TRUE){
            $now=date('y-m-d H:i:s');
            $id||$data['created']=$now;//if u have id then ok dont then created dat 
            $data['modified']=$now;// we need modified date
        }
        if($id==NULL){
            
           
            //unset primary key
            !isset($this->_primary_key)||$data[$this->_primary_key]=NULL;//if not iiset if it iset than nbull
            $this->db->set($data);
            $this->db->insert($this->_table_name);
             $id=$this->db->insert_id();
        }
        else {
          //filter pk 
            //set data
            //set where
            //add update in table
            $filter=  $this->_primary_filter;
            $id=$filter($id);
            $this->db->set($data);
            $this->db->where($this->_primary_key,$id);
            $this->db->update($this->_table_name);
           
         }
         return $id;//return the id that we save
    }
    public function delete($id) {
        $filter=$this->_primary_filter;
        $id=$filter($id);
        if(!$id){
            return FALSE;
        }
        $this->db->where($this->_primary_key,$id);
        $this->db->limit(1);
        $this->db->delete($this->_table_name);
        
    }
}
