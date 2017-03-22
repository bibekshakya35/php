<script>
//display confirmation box
    function showconfirm(AID){
        var c= confirm("Are you sure you want to delete this item");
        if(c){
            window.location="thirdeye.php?delete="+AID;
        }
    }

</script>

<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ClothController
 *
 * @author Bibek SHAKYA
 */
require 'Model/ClothingModel.php';
require 'Model/OrderPlacementModel.php';
class ClothController {
    function GetRecentClothTable(){
        $result="";
        $clothingmodel =new ClothingModel();
        $clothingarray=$clothingmodel->GetRecentCloth();
        foreach ($clothingarray as $key=>$cloth){
            $result=$result.
                     "<table class='clothTable'>"
                    . "<tr>"
                    . "<td><a href='order.php?PCODE=$cloth->PCODE' class='popup'><span id='imgspan'><img src='image/quckshop.png'></span> <img runat='server' src='$cloth->image' id='imagetype' title='Quick Shop'/></a></td>"
                    . "</tr>"
                    . "<tr>"
                    . "<td><br></td>"
                    . "</tr>"
                    . "<tr>"
                    . "<td id='h2'>$cloth->productname</td>"
                    . "</tr>"
                    . "<td><br></td>"
                    . "<tr>"
                    . "<td><center>$cloth->made</center></td>"
                    . "</tr>"
                    . "<tr>"
                    . "<td><center>Rs: $cloth->price</center></td>"
                    . "</tr>"
                    . "</table><br><br>";
        }
        return $result;
        
    }
    function GetRecentFootwearTable(){
        $result="";
        $clothingmodel =new ClothingModel();
        $clothingarray=$clothingmodel->GetRecentFootWear();
        foreach ($clothingarray as $key=>$cloth){
            $result=$result.
                     "<table class='clothTable'>"
                    . "<tr>"
                    . "<td><a href='order.php?PCODE=$cloth->PCODE' class='popup'><span id='imgspan'><img src='image/quckshop.png'></span> <img runat='server' src='$cloth->image' id='imagetype' title='Quick Shop'/></a></td>"
                    . "</tr>"
                    . "<tr>"
                    . "<td><br></td>"
                    . "</tr>"
                    . "<tr>"
                    . "<td id='h2'>$cloth->productname</td>"
                    . "</tr>"
                    . "<td><br></td>"
                    . "<tr>"
                    . "<td><center>$cloth->made</center></td>"
                    . "</tr>"
                    . "<tr>"
                    . "<td><center>Rs: $cloth->price</center></td>"
                    . "</tr>"
                    . "</table><br><br>";
        }
        return $result;
        
    }
    function GetRecentWatchTable(){
        $result="";
        $clothingmodel =new ClothingModel();
        $clothingarray=$clothingmodel->GetRecentWatch();
        foreach ($clothingarray as $key=>$cloth){
            $result=$result.
                     "<table class='clothTable'>"
                    . "<tr>"
                    . "<td><a href='order.php?PCODE=$cloth->PCODE' class='popup'><span id='imgspan'><img src='image/quckshop.png'></span> <img runat='server' src='$cloth->image' id='imagetype' title='Quick Shop'/></a></td>"
                    . "</tr>"
                    . "<tr>"
                    . "<td><br></td>"
                    . "</tr>"
                    . "<tr>"
                    . "<td id='h2'>$cloth->productname</td>"
                    . "</tr>"
                    . "<td><br></td>"
                    . "<tr>"
                    . "<td><center>$cloth->made</center></td>"
                    . "</tr>"
                    . "<tr>"
                    . "<td><center>Rs: $cloth->price</center></td>"
                    . "</tr>"
                    . "</table><br><br>";
        }
        return $result;
        
    }
    function GetRecentEyeWearTable(){
        $result="";
        $clothingmodel =new ClothingModel();
        $clothingarray=$clothingmodel->GetRecentEyewear();
        foreach ($clothingarray as $key=>$cloth){
            $result=$result.
                     "<table class='clothTable'>"
                    . "<tr>"
                    . "<td><a href='order.php?PCODE=$cloth->PCODE' class='popup'><span id='imgspan'><img src='image/quckshop.png'></span> <img runat='server' src='$cloth->image' id='imagetype' title='Quick Shop'/></a></td>"
                    . "</tr>"
                    . "<tr>"
                    . "<td><br></td>"
                    . "</tr>"
                    . "<tr>"
                    . "<td id='h2'>$cloth->productname</td>"
                    . "</tr>"
                    . "<td><br></td>"
                    . "<tr>"
                    . "<td><center>$cloth->made</center></td>"
                    . "</tr>"
                    . "<tr>"
                    . "<td><center>Rs: $cloth->price</center></td>"
                    . "</tr>"
                    . "</table><br><br>";
        }
        return $result;
        
    }
    function GetMostClothTable(){
        $result="";
        $clothingmodel =new ClothingModel();
        $clothingarray=$clothingmodel->GetMostCloth();
        foreach ($clothingarray as $key=>$cloth){
            $result=$result.
                     "<table class='clothTable'>"
                    . "<tr>"
                    . "<td><a href='order.php?PCODE=$cloth->PCODE' class='popup'><span id='imgspan'><img src='image/quckshop.png'></span> <img runat='server' src='$cloth->image' id='imagetype' title='Quick Shop'/></a></td>"
                    . "</tr>"
                    . "<tr>"
                    . "<td><br></td>"
                    . "</tr>"
                    . "<tr>"
                    . "<td id='h2'>$cloth->productname</td>"
                    . "</tr>"
                    . "<td><br></td>"
                    . "<tr>"
                    . "<td><center>$cloth->made</center></td>"
                    . "</tr>"
                    . "<tr>"
                    . "<td><center>Rs: $cloth->price</center></td>"
                    . "</tr>"
                    . "</table><br><br>";
        }
        return $result;
        
    }
    function GetMostFootwearTable(){
        $result="";
        $clothingmodel =new ClothingModel();
        $clothingarray=$clothingmodel->GetMostFootWear();
        foreach ($clothingarray as $key=>$cloth){
            $result=$result.
                     "<table class='clothTable'>"
                    . "<tr>"
                    . "<td><a href='order.php?PCODE=$cloth->PCODE' class='popup'><span id='imgspan'><img src='image/quckshop.png'></span> <img runat='server' src='$cloth->image' id='imagetype' title='Quick Shop'/></a></td>"
                    . "</tr>"
                    . "<tr>"
                    . "<td><br></td>"
                    . "</tr>"
                    . "<tr>"
                    . "<td id='h2'>$cloth->productname</td>"
                    . "</tr>"
                    . "<td><br></td>"
                    . "<tr>"
                    . "<td><center>$cloth->made</center></td>"
                    . "</tr>"
                    . "<tr>"
                    . "<td><center>Rs: $cloth->price</center></td>"
                    . "</tr>"
                    . "</table><br><br>";
        }
        return $result;
        
    }
    function GetMostWatchTable(){
        $result="";
        $clothingmodel =new ClothingModel();
        $clothingarray=$clothingmodel->GetMostWatch();
        foreach ($clothingarray as $key=>$cloth){
            $result=$result.
                     "<table class='clothTable'>"
                    . "<tr>"
                   . "<td><a href='order.php?PCODE=$cloth->PCODE' class='popup'><span id='imgspan'><img src='image/quckshop.png'></span> <img runat='server' src='$cloth->image' id='imagetype' title='Quick Shop'/></a></td>"
                    . "</tr>"
                    . "<tr>"
                    . "<td><br></td>"
                    . "</tr>"
                    . "<tr>"
                    . "<td id='h2'>$cloth->productname</td>"
                    . "</tr>"
                    . "<td><br></td>"
                    . "<tr>"
                    . "<td><center>$cloth->made</center></td>"
                    . "</tr>"
                    . "<tr>"
                    . "<td><center>Rs: $cloth->price</center></td>"
                    . "</tr>"
                    . "</table><br><br>";
        }
        return $result;
        
    }
    function GetMostEyeWearTable(){
        $result="";
        $clothingmodel =new ClothingModel();
        $clothingarray=$clothingmodel->GetMostEyewear();
        foreach ($clothingarray as $key=>$cloth){
            $result=$result.
                     "<table class='clothTable'>"
                    . "<tr>"
                    . "<td><a href='order.php?PCODE=$cloth->PCODE' class='popup'><span id='imgspan'><img src='image/quckshop.png'></span> <img runat='server' src='$cloth->image' id='imagetype' title='Quick Shop'/></a></td>"
                    . "</tr>"
                    . "<tr>"
                    . "<td><br></td>"
                    . "</tr>"
                    . "<tr>"
                    . "<td id='h2'>$cloth->productname</td>"
                    . "</tr>"
                    . "<td><br></td>"
                    . "<tr>"
                    . "<td><center>$cloth->made</center></td>"
                    . "</tr>"
                    . "<tr>"
                    . "<td><center>Rs: $cloth->price</center></td>"
                    . "</tr>"
                    . "</table><br><br>";
        }
        return $result;
        
    }
    
    function GetSecondRecentOffer(){
        $result="";
       $clothingmodel =new ClothingModel();
       $clothingmodelarray=$clothingmodel->GetSecondRecentOffer();
       foreach($clothingmodelarray as $offerdata){
           $result="<img src='$offerdata->offerpic' runat='server' class='img-responsive'>";
       }
       return $result;
    }
    function GetThirdRecentOffer(){
        $result="";
       $clothingmodel =new ClothingModel();
       $clothingmodelarray=$clothingmodel->GetThirdRecentOffer();
       foreach($clothingmodelarray as $offerdata){
           $result="<img src='$offerdata->offerpic' runat='server' class='img-responsive'><br><br><br><br>";
       }
       return $result;
    }
    
            function InsertOrderPlacement(){
     
        $PCODE=$_POST['PCODE'];
        $QTY=$_POST['qty'];
        $username=$_POST['Oname'];
        $contactnumber=$_POST['Omobile'];
        $image=$_POST['Oimage'];
        $productname=$_POST['Oproductname'];
        $color=$_POST['Ocolor'];
        $size=$_POST['Osize'];
        $price=$_POST['Oprice'];
        $date=$_POST['date'];
        $place=$_POST['place'];
        $orderPlacementEntities = new OrderPlacementEntites("", $PCODE, $QTY, $username, $contactnumber, $image, $productname, $color, $size, $price,$date,$place);
        $orderPlaceMentModel = new OrderPlacementModel();
        $orderPlaceMentModel->InsertOrderPlacement($orderPlacementEntities);
        
    }
   
            function OverViewTable(){
        $result="<table class='table table-hover table-bordered'>"
                . "<tr>"
                . "<th colspan='7'><center>OverView of Website</center></th>"
                . "</tr>"
                ."<tr>"
                . "<td colspan='3'><b>PCODE</b></td>"
                . "<td><b>productname</b></td>"
                . "<td><b>stock</b></td>"
                . "<td><b>price</b></td>"
                . "<td><b>review</b></td>"
                . "</tr>";
        $clotharray=  $this->ClothByType("%");
        foreach ($clotharray as $key=>$cloth){
            $result=$result."<tr>"
                    . "<td><a href='addnewproduct.php?update=$cloth->PCODE'>Update</a></td>"
                    . "<td><a href='thirdeye.php?delete=$cloth->PCODE'>Delete</a></td>"
                    . "<td>$cloth->PCODE</td>"
                    . "<td>$cloth->productname</td>"
                    . "<td>$cloth->stock</td>"
                    . "<td>$cloth->price</td>"
                    . "<td>$cloth->review</td>"
                    . "</tr>";
        }
        $result=$result."</table><br><br><br>";
        return $result;
                
                
    }
    function ClothByType($type){
        $clothModel = new ClothingModel();
        return $clothModel->ClothByType($type);
    }
    function InsertCloth(){
        $PCODE=$_POST['txtPCODE'];
        $productname=$_POST['txtproductname'];
        $color=$_POST['txtcolor'];
        $size=$_POST['txtsize'];
        $stock=$_POST['txtstock'];
        $price=$_POST['txtprice'];
        $image=$_POST['txtimage'];
        $date=$_POST['txtdate'];
        $review=$_POST['txtreview'];
        $made=$_POST['txtmade'];
        $type=$_POST['txttype'];
        $arrival=$_POST['arrival'];
        
        $clothEntities=new ClothingEntities(-1, $PCODE, $productname, $color, $size, $stock, $price, $image, $date, $review, $made, $type,$arrival);
        $clothModel = new ClothingModel();
        $clothModel->InsertCloth($clothEntities);
       
    }
    function UpdateCloth($PCODE){
        $PID=$_POST['txtPID'];
        $PCODE=$_POST['txtPCODE'];
        $productname=$_POST['txtproductname'];
        $color=$_POST['txtcolor'];
        $size=$_POST['txtsize'];
        $stock=$_POST['txtstock'];
        $price=$_POST['txtprice'];
        $image=$_POST['txtimage'];
        $date=$_POST['txtdate'];
        $review=$_POST['txtreview'];
        $made=$_POST['txtmade'];
        $type=$_POST['txttype'];        
        $arrival=$_POST['arrival'];
        
        $clothEntities=new ClothingEntities($PID, $PCODE, $productname, $color, $size, $stock, $price, $image, $date, $review, $made, $type,$arrival);
        $clothModel = new ClothingModel();
        $clothModel->UpdateCloth($PCODE,$clothEntities);
        
    }
    function DeleteCloth($PCODE){
        $clothModel=new ClothingModel();
        $clothModel->DeleteArticle($PCODE);
        
    }
   function getClothByPCODE($PCODE){
        $clothModel =new ClothingModel();
        return $clothModel->getClothByPCODE($PCODE);
    }
    function getImage(){
        //handle the folder image
        $handle=  opendir("image/");
        //read all the image from folder;
        while($image=readdir($handle)){
            $images[]=$image;    
        }
        //exclude all the file which isless than 3 stringlength
        $imagearray=array();
        closedir($handle);
        
        foreach ($images as $image){
            if(strlen($image)>2){
                array_push($imagearray, $image);
            }
            
        }
        $result= $this->createOptionValues($imagearray);
        return $result;
        
    }
    function createOptionValues(array $arrayvalue)
    {
        $result='';
        foreach ($arrayvalue as $value){
            $result=$result."<option value='$value'>$value</option>";
        }
        return $result;
    }
    function CreateClothTable(){
        $clothModel=new ClothingModel();
        $clothArray=$clothModel->GetCloth();
        $result="";
        foreach ($clothArray as $cloth){
            $PCODE=$cloth->PCODE;
            
            $result=$result.
                    
                   
                    "<table class='clothTable'>"
                    . "<tr>"
                    . "<td><a href='order.php?PCODE=$cloth->PCODE' class='popup'><span id='imgspan'><img src='image/quckshop.png'></span> <img runat='server' src='$cloth->image' id='imagetype' title='Quick Shop'/></a></td>"
                    . "</tr>"
                    . "<tr>"
                    . "<td><br></td>"
                    . "</tr>"
                    . "<tr>"
                    . "<td id='h2'>$cloth->productname</td>"
                    . "</tr>"
                    . "<td><br></td>"
                    . "<tr>"
                    . "<td><center>$cloth->made</center></td>"
                    . "</tr>"
                    . "<tr>"
                    . "<td><center>Rs: $cloth->price</center></td>"
                   
                    . "</tr>"
                    
                    . "</tr>"
                    . "</table><br><br>";
            
                    
        }

        return $result;
        
    }
       function CreateFootwearTable(){
        $clothModel=new ClothingModel();
        $clothArray=$clothModel->GetFootwear();
        $result="";
        foreach ($clothArray as $cloth){
            $result=$result.
                      "<table class='footTable'>"
                    . "<tr>"
                    . "<td><a href='order.php?PCODE=$cloth->PCODE' class='popup'><span id='imgspan'><img src='image/quckshop.png'></span> <img runat='server' src='$cloth->image' id='imagetype' title='Quick Shop'/></a></td>"
                    . "</tr>"
                    . "<tr>"
                    . "<td><br></td>"
                    . "</tr>"
                    . "<tr>"
                    . "<td id='h2'>$cloth->productname</td>"
                    . "</tr>"
                    . "<td><br></td>"
                    . "<tr>"
                    . "<td><center>$cloth->made</center></td>"
                    . "</tr>"
                    . "<tr>"
                    . "<td><center>Rs: $cloth->price</center></td>"
                    . "</tr>"
                    . "</table><br><br>";
            
            
                    
        }

        return $result;
        
    }
       function CreateEyeWearTable(){
        $clothModel=new ClothingModel();
        $clothArray=$clothModel->GetEyewear();
        $result="";
        foreach ($clothArray as $cloth){
            $result=$result.
                     "<table class='eyeTable'>"
                    . "<tr>"
                    . "<td><a href='order.php?PCODE=$cloth->PCODE' class='popup'><span id='imgspan'><img src='image/quckshop.png'></span> <img runat='server' src='$cloth->image' id='imagetype' title='Quick Shop'/></a></td>"
                    . "</tr>"
                    . "<tr>"
                    . "<td><br></td>"
                    . "</tr>"
                    . "<tr>"
                    . "<td id='h2'>$cloth->productname</td>"
                    . "</tr>"
                    . "<td><br></td>"
                    . "<tr>"
                    . "<td><center>$cloth->made</center></td>"
                    . "</tr>"
                    . "<tr>"
                    . "<td><center>Rs: $cloth->price</center></td>"
                    . "</tr>"
                    . "</table><br><br>";
            
                    
        }

        return $result;
        
    }
    
     function CreateWatchTable(){
        $clothModel=new ClothingModel();
        $clothArray=$clothModel->GetWatch();
        $result="";
        foreach ($clothArray as $cloth){
            $result=$result.
                     "<table class='watchTable'>"
                    . "<tr>"
                    . "<td><a href='order.php?PCODE=$cloth->PCODE' class='popup'><span id='imgspan'><img src='image/quckshop.png'></span> <img runat='server' src='$cloth->image' id='imagetype' title='Quick Shop'/></a></td>"
                    . "</tr>"
                    . "<tr>"
                    . "<td><br></td>"
                    . "</tr>"
                    . "<tr>"
                    . "<td id='h2'>$cloth->productname</td>"
                    . "</tr>"
                    . "<td><br></td>"
                    . "<tr>"
                    . "<td><center>$cloth->made</center></td>"
                    . "</tr>"
                    . "<tr>"
                    . "<td><center>Rs: $cloth->price</center></td>"
                    . "</tr>"
                    . "</table><br><br>";
            
            
                    
        }

        return $result;
        
    }
    
   
        
    
    
    
    
}
?>
