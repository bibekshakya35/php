<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of page_model
 *
 * @author Bibek Shakya
 */
class page_model extends MY_Model{
    
    function __construct() {
        parent::__construct();
    }
    protected $_table_name="article";
    protected $_primary_key="AID";
    protected $_primary_filter="intval";
    protected $_order_by="DESC";
    public $rules_page=array(
        'heading'=>array(
          "field"=>'heading',
          "label"=>"Heading",
          "rules"=>'trim|required|max_length[100]'
        ),
       
        'type'=>array(
          "field"=>'type',
          "label"=>"Type",
          "rules"=>'trim|required'
        ),
         'keyword'=>array(
          "field"=>'keyword',
          "label"=>"Keyword",
          "rules"=>'trim|required'
        ),
         'author'=>array(
          "field"=>'author',
          "label"=>"Author",
          "rules"=>'trim|required'
        ),
        'shortstory'=>array(
          "field"=>'shortstory',
          "label"=>"Short story",
          "rules"=>'trim|required'
        ),
        'fullstory'=>array(
          "field"=>'fullstory',
          "label"=>"Full Story",
          "rules"=>'trim|required'
        ),
        'subfullstoryone'=>array(
          "field"=>'subfullstoryone',
          "label"=>"Sub Full Story One",
          "rules"=>'trim'
        ),
        'subfullstorytwo'=>array(
          "field"=>'subfullstorytwo',
          "label"=>"Sub Full Story Two",
          "rules"=>'trim'
        ),
        'image'=>array(
          "field"=>'image',
          "label"=>"Image",
          "rules"=>'required'
        ),
        'subimage'=>array(
          "field"=>'subImage',
          "label"=>"SubImage",
          
        ),
        'date'=>array(
          "field"=>'date',
          "label"=>"Date",
          "rules"=>'required'
        ),
        'status'=>array(
          "field"=>'staus',
          "label"=>"Status",
   
        )
        
        
    );
    protected $_timestamps=FALSE;
    public function get_new(){
        $pageData=new stdClass();
        $pageData->heading="";
        $pageData->keyword="";
        $pageData->type="";
        $pageData->shortstory="";
        $pageData->fullstory="";
        $pageData->subfullstoryone="";
        $pageData->author="";
        $pageData->subfullstorytwo="";
        $pageData->image="";
        $pageData->subimage="";
        $now=  date("y-m-d");
        $pageData->date=$now;
        $pageData->status=0;
        return $pageData;
        
    }
    public function getAll(){
        $result= $this->db->query("SELECT * from $this->_table_name ORDER BY $this->_primary_key DESC");
        if ($result->num_rows()>0){
            foreach ($result->result() as $data){
                $rowdata[]=$data;
            }
            return $rowdata;
        }
        
    }
    

    //put your code here
}
