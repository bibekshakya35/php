<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ClothingModel
 *
 * @author Bibek SHAKYA
 */
include 'Entities/ClothingEntities.php';
include 'Entities/OfferEntities.php';
class ClothingModel {
    //new product
    function GetRecentOffer(){
        $query="select * from offer where status='0'";
        $result=$this->GetQuery($query);
        $clothingarray=array();
         while ($row=  mysqli_fetch_array($result))
        {  
             $OID=$row[0];
             $offerpic=$row[1];
             $status=$row[2];
             $offerentities=new OfferEntities(-1, $offerpic, $status);
             array_push($clothingarray, $offerentities);
             
             
         }
         return $clothingarray;
    }
    function GetSecondRecentOffer(){
        $query="select * from offer where status='1'";
        $result=$this->GetQuery($query);
        $clothingarray=array();
         while ($row=  mysqli_fetch_array($result))
        {  
             $OID=$row[0];
             $offerpic=$row[1];
             $status=$row[2];
             $offerentities=new OfferEntities(-1, $offerpic, $status);
             array_push($clothingarray, $offerentities);
             
             
         }
         return $clothingarray;
    }
    function GetThirdRecentOffer(){
        $query="select * from offer where status='2'";
        $result=$this->GetQuery($query);
        $clothingarray=array();
         while ($row=  mysqli_fetch_array($result))
        {  
             $OID=$row[0];
             $offerpic=$row[1];
             $status=$row[2];
             $offerentities=new OfferEntities(-1, $offerpic, $status);
             array_push($clothingarray, $offerentities);
             
             
         }
         return $clothingarray;
    }
    function GetRecentCloth(){
        $query="select * from product where type='cloth' and arrival='0'";
        $result=$this->GetQuery($query);
        $clothingarray=array();
        while ($row=  mysqli_fetch_array($result))
        {  
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
            $arrival=$row[12];
            $clothing=new ClothingEntities(-1, $PCODE, $productname, $color, $size, $stock, $price, $image, $date, $review, $made, $type, $arrival);
            array_push($clothingarray, $clothing);
        }
        return $clothingarray;
    }
    function GetRecentEyewear(){
        $query="select * from product where type='eyewear' and arrival='0'";
        $result=$this->GetQuery($query);
        $clothingarray=array();
        while ($row=  mysqli_fetch_array($result))
        {  
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
            $arrival=$row[12];
            $clothing=new ClothingEntities(-1, $PCODE, $productname, $color, $size, $stock, $price, $image, $date, $review, $made, $type, $arrival);
            array_push($clothingarray, $clothing);
        }
        return $clothingarray;
    }
    function GetRecentWatch(){
        $query="select * from product where type='watch' and arrival='0'";
        $result=$this->GetQuery($query);
        $clothingarray=array();
        while ($row=  mysqli_fetch_array($result))
        {  
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
            $arrival=$row[12];
            $clothing=new ClothingEntities(-1, $PCODE, $productname, $color, $size, $stock, $price, $image, $date, $review, $made, $type, $arrival);
            array_push($clothingarray, $clothing);
        }
        return $clothingarray;
    }
    function GetRecentFootWear(){
        $query="select * from product where type='footwear' and arrival='0'";
        $result=$this->GetQuery($query);
        $clothingarray=array();
        while ($row=  mysqli_fetch_array($result))
        {  
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
            $arrival=$row[12];
            $clothing=new ClothingEntities(-1, $PCODE, $productname, $color, $size, $stock, $price, $image, $date, $review, $made, $type, $arrival);
            array_push($clothingarray, $clothing);
        }
        return $clothingarray;
    }
    function GetMostCloth(){
        $query="select * from product where type='cloth' and arrival='1'";
        $result=$this->GetQuery($query);
        $clothingarray=array();
        while ($row=  mysqli_fetch_array($result))
        {  
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
            $arrival=$row[12];
            $clothing=new ClothingEntities(-1, $PCODE, $productname, $color, $size, $stock, $price, $image, $date, $review, $made, $type, $arrival);
            array_push($clothingarray, $clothing);
        }
        return $clothingarray;
    }
    function GetMostEyewear(){
        $query="select * from product where type='eyewear' and arrival='1'";
        $result=$this->GetQuery($query);
        $clothingarray=array();
        while ($row=  mysqli_fetch_array($result))
        {  
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
            $arrival=$row[12];
            $clothing=new ClothingEntities(-1, $PCODE, $productname, $color, $size, $stock, $price, $image, $date, $review, $made, $type, $arrival);
            array_push($clothingarray, $clothing);
        }
        return $clothingarray;
    }
    function GetMostWatch(){
        $query="select * from product where type='watch' and arrival='1'";
        $result=$this->GetQuery($query);
        $clothingarray=array();
        while ($row=  mysqli_fetch_array($result))
        {  
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
            $arrival=$row[12];
            $clothing=new ClothingEntities(-1, $PCODE, $productname, $color, $size, $stock, $price, $image, $date, $review, $made, $type, $arrival);
            array_push($clothingarray, $clothing);
        }
        return $clothingarray;
    }
    function GetMostFootWear(){
        $query="select * from product where type='footwear' and arrival='1'";
        $result=$this->GetQuery($query);
        $clothingarray=array();
        while ($row=  mysqli_fetch_array($result))
        {  
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
            $arrival=$row[12];
            $clothing=new ClothingEntities(-1, $PCODE, $productname, $color, $size, $stock, $price, $image, $date, $review, $made, $type, $arrival);
            array_push($clothingarray, $clothing);
        }
        return $clothingarray;
    }
            
    
    function GetCloth(){
     
        $query="Select * from product where type='cloth'";
        $result=$this->GetQuery($query);
        $clothArray= array();
        while ($row=  mysqli_fetch_array($result))
        {  
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
            $arrival=$row[12];
            
            $clothing=new ClothingEntities(-1, $PCODE, $productname, $color, $size, $stock, $price, $image, $date, $review, $made, $type, $arrival);
            array_push($clothArray, $clothing);
        }
        return $clothArray;
    }
    
     function GetFootwear(){
     
        $query="Select * from product where type='footwear'";
        $result=$this->GetQuery($query);
        $clothArray= array();
        while ($row=  mysqli_fetch_array($result))
        {
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
            $arrival=$row[12];
            
            
            $clothing=new ClothingEntities(-1, $PCODE, $productname, $color, $size, $stock, $price, $image, $date, $review, $made, $type, $arrival);
            array_push($clothArray, $clothing);
        }
        return $clothArray;
    }

    function GetWatch(){
     
        $query="Select * from product where type='watch'";
        $result=$this->GetQuery($query);
        $clothArray= array();
        while ($row=  mysqli_fetch_array($result))
        {
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
            $arrival=$row[12];
            
            $clothing=new ClothingEntities(-1, $PCODE, $productname, $color, $size, $stock, $price, $image, $date, $review, $made, $type, $arrival);
            array_push($clothArray, $clothing);
        }
        return $clothArray;
    }
    
    function GetEyewear(){
     
        $query="Select * from product where type='eyewear'";
        $result=$this->GetQuery($query);
        $clothArray= array();
        while ($row=  mysqli_fetch_array($result))
        {
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
            $arrival=$row[12];
            
            $clothing=new ClothingEntities(-1, $PCODE, $productname, $color, $size, $stock, $price, $image, $date, $review, $made, $type, $arrival);
            array_push($clothArray, $clothing);
        }
        return $clothArray;
    }
    function ClothByType($type){
     
        $query="Select * from product where type LIKE '$type'";
        $result=$this->GetQuery($query);
        $clothArray= array();
        while ($row=  mysqli_fetch_array($result))
        {
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
            $arrival=$row[12];
            
            $clothing=new ClothingEntities(-1, $PCODE, $productname, $color, $size, $stock, $price, $image, $date, $review, $made, $type, $arrival);
            array_push($clothArray, $clothing);
        }
        return $clothArray;
    }


      function GetQuery($query){
        require 'connection.php';
        $link= mysqli_connect($host, $user, $pass);
        $link2=  mysqli_select_db($link,$db);
        $result=  mysqli_query($link, $query);
        mysqli_close($link);
        return $result;
    }
    function getClothByPCODE($PCODE){
       require 'connection.php';
        $link= mysqli_connect($host, $user, $pass);
        $link2=  mysqli_select_db($link,$db);
        $query="SELECT * FROM product where PCODE='$PCODE'";
        $result =  mysqli_query($link, $query);
        while ($row=  mysqli_fetch_array($result)){
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
            $arrival=$row[12];
            
            $clothing=new ClothingEntities($PID, $PCODE, $productname, $color, $size, $stock, $price, $image, $date, $review, $made, $type, $arrival);
        }
        return $clothing;
    }
    function InsertCloth(ClothingEntities $cloth){
        require 'connection.php';
       $link=mysqli_connect($host, $user, $pass, $db);
       $link1=mysqli_select_db($link, $db);
       $query=  sprintf("INSERT INTO product
               (PCODE,productname,color,size,stock,price,image,date,review,made,type,arrival)
               VALUES
               ('%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s')",
                mysqli_real_escape_string($link,$cloth->PCODE),
                mysqli_real_escape_string($link,$cloth->productname),
                mysqli_real_escape_string($link,$cloth->color),
                mysqli_real_escape_string($link,$cloth->size),
                mysqli_real_escape_string($link,$cloth->stock),
                mysqli_real_escape_string($link,$cloth->price),
                mysqli_real_escape_string($link,"image/".$cloth->image),
                mysqli_real_escape_string($link,$cloth->date),
                mysqli_real_escape_string($link,$cloth->review),
                mysqli_real_escape_string($link,$cloth->made),
                mysqli_real_escape_string($link,$cloth->type),
 mysqli_real_escape_string($link,$cloth->arrival));
       $result=  mysqli_query($link, $query);
       mysqli_close($link);
       return $result;
    }
            function UpdateCloth($PCODE,ClothingEntities $cloth){
              require 'connection.php';
               $link=mysqli_connect($host, $user, $pass, $db);
               $link1=mysqli_select_db($link, $db);
               $query=  sprintf("UPDATE product "
                       . " SET productname='%s',color='%s',size='%s',stock='%s',price='%s',image='%s',date='%s',review='%s',made='%s',type='%s',arrival='%s'"
                       . " WHERE PCODE='$PCODE'",
                        mysqli_real_escape_string($link,$cloth->productname),
                        mysqli_real_escape_string($link,$cloth->color),
                        mysqli_real_escape_string($link,$cloth->size),
                        mysqli_real_escape_string($link,$cloth->stock),
                        mysqli_real_escape_string($link,$cloth->price),
                        mysqli_real_escape_string($link,$cloth->image),
                        mysqli_real_escape_string($link,$cloth->date),
                        mysqli_real_escape_string($link,$cloth->review),
                        mysqli_real_escape_string($link,$cloth->made),
                        mysqli_real_escape_string($link,$cloth->type),
 mysqli_real_escape_string($link,$cloth->arrival));
                $result=  mysqli_query($link, $query)or die(mysql_error());
               mysqli_close($link);
               
               return $result;
               
            }
    function DeleteArticle($PCODE){
        include 'connection.php';
		$link= mysqli_connect($host,$user,$pass);
                $link2=mysqli_select_db($link,$db);
        $query="DELETE FROM product where PCODE='$PCODE'";
        $result=  mysqli_query($link, $query)or die(mysql_error());
               mysqli_close($link);
               return $result;
    }
}
