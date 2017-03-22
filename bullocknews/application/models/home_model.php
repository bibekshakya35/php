<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of home_model
 *
 * @author Bibek Shakya
 */
class home_model extends MY_Model {
   
    protected $_table_name="admin";
    protected $_primary_key='id';
    protected $_primary_filter="intval";
   // protected $_order_by="id DESC";
    protected $_rules=array();
    protected $_timestamps=FALSE;
    
    
    public function __construct() {
        return parent::__construct();
        
    }
    public function getPic(){
        $query=$this->db->query("select * from article where status='2'");
        if($query->num_rows()>0){
            foreach ($query->result() as $data){
                $row[]=$data;
            }
            return $row;
        }
    }
    public function getSmallPic(){
       $query = $this->db->query("select * from article where status='3' order by AID DESC LIMIT 4");
       if($query->num_rows()>0){
           foreach ($query->result() as $rowData){
               $data[]=$rowData;
           }
           return $data;
       }
    }
    public function getRecentNews(){
        $query = $this->db->query("select * from article ORDER BY AID DESC LIMIT 6");
        if($query->num_rows()>0){
           foreach ($query->result() as $rowData){
               $data[]=$rowData;
           }
           return $data;
       }
    }
    public function getNewsType($type,$status){
         $query = $this->db->query("select * from article where type ='$type' && status='$status' ORDER BY AID DESC LIMIT 2");
        if($query->num_rows()>0){
           foreach ($query->result() as $rowData){
               $data[]=$rowData;
           }
           return $data;
       }
    }
     public function getNewsTypeOne($type){
         $query = $this->db->query("select * from article where type ='$type' ORDER BY AID DESC LIMIT 1");
        if($query->num_rows()>0){
           foreach ($query->result() as $rowData){
               $data[]=$rowData;
           }
           return $data;
       }
    }
    public function getArticle($AID){
        $query = $this->db->query("select * from article where AID='$AID'");
        if($query->num_rows()>0){
           foreach ($query->result() as $rowData){
               $data[]=$rowData;
           }
           return $data;
       }
    }
    public function getPicture(){
        $query = $this->db->query("select * from whatsnew");
        if($query->num_rows()>0){
           foreach ($query->result() as $rowData){
               $data[]=$rowData;
           }
           return $data;
       }
    }
    public function getSearch($search){
        $search_explode=  explode(" ",$search);
        $x=0;
        foreach ($search_explode as $search_each){
            $x++;
            $construct="";
            if($x==1)
                $construct="keyword LIKE '%$search_each%' " ."or heading LIKE '%$search_each%' ";
            else
                $construct="keyword LIKE '%$search_each%' or heading LIKE '%$search_each%'";
        }
        $query = $this->db->query("select * from article where $construct");
        if($query->num_rows()>0){
           foreach ($query->result() as $rowData){
               $data[]=$rowData;
           }
           return $data;
       }
    }
    public function getMotivationalPic()
    {
        $query=  $this->db->query("select * from whatsnew ORDER BY WID DESC LIMIT 1");
        if($query->num_rows()>0){
            foreach ($query->result() as $row){
                $data[]=$row;
            }
            return $data;
        }
    }
    public function motivationArticle(){
        $query=  $this->db->query("select * from whatsnew LIMIT 6");
        if($query->num_rows()>0){
            foreach ($query->result() as $row){
                $data[]=$row;
            }
            return $data;
        }
    }
    //put your code here
}
