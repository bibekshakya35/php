<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of OrderPlacementModel
 *
 * @author Bibek SHAKYA
 */
require 'Entities/OrderPlacementEntites.php';

class OrderPlacementModel {
    function InsertOrderPlacement(OrderPlacementEntites $OPR){
      require 'connection.php';
       $link=mysqli_connect($host, $user, $pass, $db);
       $link1=mysqli_select_db($link, $db);
       $query=  sprintf("INSERT INTO orderplacement"
               ."(ONO,PCODE,QTY,username,contactnumber,image,productname,color,size,price,date,place)"
               . "VALUES"
               . "('%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s')",
               mysqli_real_escape_string($link, $OPR->ONO),
              mysqli_real_escape_string($link, $OPR->PCODE),
               mysqli_real_escape_string($link, $OPR->QTY),
               mysqli_real_escape_string($link, $OPR->username),
               mysqli_real_escape_string($link, $OPR->contactnumber),
                mysqli_real_escape_string($link, $OPR->image),
               mysqli_real_escape_string($link, $OPR->productname),
                mysqli_real_escape_string($link, $OPR->color),
                mysqli_real_escape_string($link, $OPR->size),
                mysqli_real_escape_string($link, $OPR->price),
                mysqli_real_escape_string($link,$OPR->date),
               mysqli_real_escape_string($link,$OPR->place));
        $result=mysqli_query($link, $query);
        
        mysqli_close($link);
        return $result;
        
    }
    function IfUserContactSame($username,$contactnumber){
        require 'connection.php';
        $link=  mysqli_connect($host, $user, $pass,$db);
         $link1=mysqli_select_db($link, $db);
         $query="select * from orderplacement where username='$username' AND contactnumber='$contactnumber'";
         $result=  mysqli_query($link, $query);
         $orderplacementArray=array();
         while ($row=  mysqli_fetch_array($result)){
             $ONO=$row[0];
             $PCODE=$row[1];
             $QTY=$row[2];
             $username=$row[3];
             $contactnumber=$row[4];
             $image=$row[5];
             $productname=$row[6];
             $color=$row[7];
             $size=$row[8];
             $price=$row[9];
             $date=$row[10];
             $place=$row[11];
             $OPE=new OrderPlacementEntites(-1, $PCODE, $QTY, $username, $contactnumber, $image, $productname, $color, $size, $price, $date, $place);
             array_push($orderplacementArray,$OPE);
             
             
         }
         return $orderplacementArray;
    }
    function fortotal($username,$contactnumber){
    require 'connection.php';
        $link=  mysqli_connect($host, $user, $pass,$db);
         $link1=mysqli_select_db($link, $db);
         $query="select * from orderplacement where username='$username' AND contactnumber='$contactnumber'";
         $result=  mysqli_query($link, $query);
         $total=0;
         while ($row=  mysqli_fetch_array($result)){
             $QTY=$row[2];
             $price=$row[9];
             $priceqty=$QTY*$price;
             $total=$total+$priceqty;
             
         }
         return $total;
}
    
}
