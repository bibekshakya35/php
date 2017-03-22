<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of OrderModel
 *
 * @author Bibek SHAKYA
 */
include 'Entities/ClothingEntities.php';

class OrderModel {
       function GetOrder($PCODE){
        $query="Select * from product where PCODE='$PCODE'";
        $result=$this->GetQuery($query);
        $clothingArray=array();
        while ($row=mysqli_fetch_array($result))
        {
            $PID=$row[0];
             $PCODE=$row[1];
            $productname=$row[2];
            $color=$row[3];
            $size=$row[4];
            $stock=$row[5];
            $price=$row[6];
            $image=$row[7];
            $date=$row[8];
            $review=$row[9];
            $made=$row[10];
            $type=$row[11];
            
            $clothing=new ClothingEntities($PID, $PCODE, $productname, $color, $size, $stock, $price, $image, $date, $review, $made, $type);
            array_push($clothingArray, $clothing);
        }
        return $clothingArray;
       
    }
       function GetQuery($query){
        require 'connection.php';
        $link= mysqli_connect($host, $user, $pass);
        $link2=  mysqli_select_db($link,$db);
        $result=  mysqli_query($link, $query);
        mysqli_close($link);
        return $result;
    }
    
    
    
}
