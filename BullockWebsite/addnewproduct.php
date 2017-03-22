<?php
    require 'Controller/ClothController.php';
    $clothcontroller = new ClothController();
    $title="New Product";
    if(isset($_GET['update'])){
       
        $cloth=$clothcontroller->getClothByPCODE($_GET['update']);
       
        
        
        $cms="<form action='' method='post'>"
            . "<fieldset>"
            ."<legend>"
            . "Update Product"
            . "</legend>"
            . "<label>Product ID</label>"
            . "<input type='text' name='txtPID' id='inputfield' class='form-control' value='$cloth->PID'/>"
            . "<label>Product Code</label>"
            . "<input type='text' name='txtPCODE' id='inputfield' class='form-control' value='$cloth->PCODE'/>"
            . "<label>Product Name</label>"
            . "<input type='text' name='txtproductname' id='inputfield' class='form-control' value='$cloth->productname'/>"
            . "<label>Color</label>"
            . "<input type='text' name='txtcolor' class='form-control' id='inputfield' value='$cloth->color'/>"
            . "<label>"
            . "Size"
            . "</label>"
            . "<input type='text' name='txtsize' class='form-control' id='inputfield' value='$cloth->size'/>"
            . "<label>Stock</label>"
            . "<input type='text' name='txtstock'  value='$cloth->stock' id='inputfield' class='form-control'/>"
            . "<label>"
            . "Price"
            . "</label>"
            . "<input type='text' class='form-control' id='inputfield' value='$cloth->price' name='txtprice'/>"
            . "<label>Image</label>"
            ."<input type='text'  id='inputfield' class='form-control' name='txtimage' value='$cloth->image'>"
            . "<label>Date</label>"
            . "<input type='text' id='inputfield' class='form-control' value='$cloth->date' name='txtdate'/>"
            . "<label>Review</label>"
            . "<textarea cols='20' row='20' id='inputfield' class='form-control' name='txtreview'>$cloth->review</textarea>"
            . "<label>Made In</label>"
            . "<input type='text' class='form-control' id='inputfield' name='txtmade' value='$cloth->made'>"
            . "<label>type</label>"
            . "<input type='text' class='form-control' id='inputfield' name='txttype' value='$cloth->type'>"
                . "<label>Arrival</label><br>"
            ."<b>Recent</b>  <input type ='checkbox' name='arrival' value='0'><br>"
                . "<b>Most</b>  <input type='checkbox'  name='arrival' value='1'>"
            ."<button type='submut' value='submit' class='btn btn-primary btn-block' style='size:auto 300px;'><i class='glyphicon glyphicon-save'>Submit</i></button><br></br></br>"
            . "</fieldset>"
            . "</form>";
    }
    else{
                    $cms="<form action='' method='post'>"
                        . "<fieldset>"
                        ."<legend>"
                        . "Add New Product"
                        . "</legend>"
                        . "<label>Product Code</label>"
                        . "<input type='text' name='txtPCODE' id='inputfield' class='form-control'/>"
                        . "<label>Product Name</label>"
                        . "<input type='text' name='txtproductname' id='inputfield' class='form-control'/>"
                        . "<label>Color</label>"
                        . "<input type='text' name='txtcolor' class='form-control' id='inputfield'/>"
                        . "<label>"
                        . "Size"
                        . "</label>"
                        . "<input type='text' name='txtsize' class='form-control' id='inputfield'/>"
                        . "<label>Stock</label>"
                        . "<input type='number' name='txtstock' min='1' max='100' id='inputfield' class='form-control'/>"
                        . "<label>"
                        . "Price"
                        . "</label>"
                        . "<input type='text' name='txtprice' class='form-control' id='inputfield' />"
                        . "<label>Image</label>"
                        ."<select id='inputfield'  name='txtimage' class='form-control'>".$clothcontroller->getImage()."</select>"
                        . "<label>Date</label>"
                        . "<input type='text' name='txtdate' value='".date('Y-m-d')."' id='inputfield' class='form-control' />"
                        . "<label>Review</label>"
                        . "<textarea cols='20' row='10' name='txtreview' id='txtreview' class='form-control' ></textarea>"
                        . "<label>Made In</label>"
                        . "<input type='text' name='txtmade' class='form-control' id='inputfield'  >"
                        . "<label>Type</label>"
                        ."<input type='text'  name='txttype' class='form-control' id='inputfield'>"
                        . "<label>Arrival</label><br>"
                        ."<b>Recent</b>  <input type ='checkbox' name='arrival' value='0'><br>"
                . "<b>Most</b>  <input type='checkbox'  name='arrival' value='1'>"
                        ."<button type='submut' value='submit' class='btn btn-primary btn-block' style='size:auto 300px;'><i class='glyphicon glyphicon-save'>Submit</i></button><br></br></br>"
                        
                            . "</fieldset>"
                        . "</form>";
                        
    }
    if(isset($_GET['update'])){
        if(isset($_POST['txtproductname'])){
             echo '<script type="text/javascript">'
            . 'alert("Data Has Been UPdate");'
                    . '</script>';
            $clothcontroller->UpdateCloth($_GET['update']);
            
            
            
            header("Location:".$_SERVER['PHP_SELF']."?update=".$_GET['update']);       
               
            
        }
           
        
    }
    
    else{
         if(isset($_POST['txtproductname'])){
            $clothcontroller->InsertCloth();
            echo '<script type="text/javascript">'
            . 'alert("Data Has Been Inserted");'
                    . '</script>';
                    

        }
        
    }
    
    
    include 'cmstemplate.php';
    ?>
    
