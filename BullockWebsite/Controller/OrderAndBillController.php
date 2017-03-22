<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of OrderAndBillController
 *
 * @author Bibek Shakya
 */
require 'Model/OrderModel.php';
require 'Model/InvoiceModel.php';
require 'Model/OrderPlacementModel.php';
class OrderAndBillController {
    
   

   



    function prepareRecord($Oname,$Omobile){
                    
                        
       
                    
                    if((isset($_POST['username']))&&(isset($_POST['contactnumber']))){
                         header("Location:BillingSystem.php?Oname=".$_POST['Oname']."&Omobile=".$_POST['Omobile']);
                    }    
                    $orderplaceModel =new OrderPlacementModel();
                    
                    
                    $orderArray=$orderplaceModel->IfUserContactSame($Oname,$Omobile);
                    

                   
                    
                             
                             

                        
                        

                    foreach ($orderArray as $orderPrice){
                        $result="<form method='post' action=''>"
                                . "<fieldset>"
                                . "<legend>Give Your Information</legend>"
                                . "<Label>Name</label>"
                                . "<input type='text' name='username' value='$Oname' class='form-control'><br><br><br>"

                                . "<input type='hidden' name='PCODE' value='$orderPrice->PCODE'>"
                                . "<input type='hidden' name='productname' value='$orderPrice->productname'>"
                                . "<input type='hidden' name='price' value='$orderPrice->price'>"
                                . "<Label>Date</label>"
                                . "<input type='text' name='date' class='form-control'><br><br><br>"
                                . "<Label>Place</label>"
                                . "<input type='text' name='place' class='form-control'><br><br><br>"
                                . "<label>Contact Number</label>"
                                . "<input type='text' name='contactnumber' class='form-control' value='$Omobile'><br><br><br>"
                                . "<button type='submit'  name='checkout' class='btn btn-success btn-block' style='height:40px'><i class='glyphicon glyphicon-save'>CheckOut</i></button>"
                                ."</fieldset>"
                                . "</form>";
                        
                              if(isset($_POST['checkout'])){
                       
                                    $this->InsertInvoice();
                                   
                                    echo "<script type='text/javascript'>"
                                    . "alert('$orderPrice->productname is been added to our delivery list!! We will deliver within a day!! Happy Shoping');"
                                            . "</script>";
                        }
                                
                    }
                    return $result;
                    
        
    }
            function PrepareBill($Oname,$Omobile){
                        
                        
                   
                        
                    $orderplaceModel =new OrderPlacementModel();
                    $orderArray=$orderplaceModel->IfUserContactSame($Oname,$Omobile);

                   
                    
                             
                             

                        
                        $result="";

                    foreach ($orderArray as $orderPrice){
                      
                       
                        
                        
                        
                        $result=$result.
                            
                                
                                "<table class='table table-hover' id='tablebill'>"
                                ."<tr>"
                                . "<th colspan='3'>Item Pic</th>"
                                . "<th>Item</th>"
                                . "<th>Color</th>"
                                . "<th>Size</th>"
                                . "<th>Qty</th>"
                                . "<th>Price</th>"
                                ."</tr>"
                                . "<tr>"
                                . "<td colspan='3'><img src='$orderPrice->image' runat='server' id='imagetype'></td>"
                                . "<td>$orderPrice->productname</td>"
                                . "<td> $orderPrice->color</td>"
                                . "<td>$orderPrice->size</td>"
                                . "<td><center>$orderPrice->QTY</td>"
                                . "<td class='text-right'>$orderPrice->price</td>"
                                . "</tr>"
                                
                                ."</table>";
                                
                                
                                
                                
                                
                        


                    }
                    return $result;
       
    }
    function fortotal($oname,$omobile){
        $order=new OrderPlacementModel();
       return $order->fortotal($oname, $omobile);
    }
            function InsertInvoice(){
        $username=$_POST['username'];
        $PCODE=$_POST['PCODE'];
        $productname=$_POST['productname'];
        $price=$_POST['price'];
        $date=$_POST['date'];
        $place=$_POST['place'];
        $contactnumber=$_POST['contactnumber'];
        
        $billentities= new InvoiceEntities("", $username, $PCODE, $productname, $price, $date, $place, $contactnumber);
        $billmodel = new InvoiceModel();
        $billmodel->InsertInvoice($billentities);
        
    }
}
   
