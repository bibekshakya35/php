<?php
    include 'Controller/ClothController.php';
    
    $clothcontroller =new ClothController();
    $filename=  basename($_SERVER['QUERY_STRING']);
    $part=  explode("=",$filename);
    $title=$part[0];
    $cloth=$clothcontroller->getClothByPCODE($_GET['PCODE']);
    
    $orderdetail=
            "<form action='' method='post'>"
                    ."<div class='row'>"
                    . "<div class='col-md-6'>"
                    . "<table id='ordertable' class='table table-hovered'>"
                    . "<tr>" 
                  
                    . "<td><a href='order.php?PCODE=$cloth->PCODE'><center><img src='$cloth->image' runat='server' id='orderimage' class='img-responsive'/></center></a></td>"
                    . "</tr>"
                    ."</div>"
                    . "<div class='col-md-3'>"
                   
                    . "<tr>" 
                  
                    
                    . "<td><br><td>"
                    . "</tr>"
                    . "<tr>"
                    . "<td><h1><center>$cloth->productname</center></h1></td>"
                    . "</tr>"
                    . "<tr>"
                    . "<td><h1><center><input type='hidden'  name='PCODE' value=$cloth->PCODE></center></h1></td>"
                    . "</tr>"
                    
                    . "<tr>"
                    . "<td><center>Color: $cloth->color</center></td>"
                    . "</tr>"
                    
                    . "<tr>"
                    ."<td><center>Size: $cloth->size </center></td>"
                    . "</tr>"
                    . "<tr>"
                    ."<td><center> Price: Rs. $cloth->price</center</td>"
                    . "</tr>"
                    ."<tr>"
                    . "<td class='vert-align'>QTY: <input type='number' name='qty' min='1' max='10' step='1' value='1' id='inputext'></td>"
                    . "</tr>"
                    
                    . "<tr>"
                    
                    . "<td>$cloth->made</td>"
                    . "</tr>"
                    . "<td><br><td>"
                    . "</tr>"
                    . "<td>$cloth->review<br><br><br><br></td>"
                    . "</tr>"
                    
                    . "</table>"
                    . "</div>"
                    . "<div class='col-md-3'>"
                    . "<fieldset>"
                    . "<legend>Give Your Name And Phone Number</legend>"
                    . "<label>Name</label>"
                    . "<input type='text' class='form-control' name='Oname'>"
                    . "<label>Mobile Number:</label>"
                    . "<input type='text' class='form-control' name='Omobile'>"
            . "<label>Date</label>"
                    . "<input type='text' class='form-control' name='date' value='".date('d-m-Y')."'"
                    
            . "<label>Place"
            . "</label>"
            . "<input type='text' class='form-control' name='place'>"
            . "<input type='hidden' name='Oimage' value='$cloth->image'>"
                    ."<input type='hidden' name='Oproductname' value='$cloth->productname'>" 
                    . "<input type='hidden' name='Ocolor' value='$cloth->color'>"
                    . "<input type='hidden' name='Osize' value='$cloth->size'>"
                     . "<input type='hidden' name='Oprice' value='$cloth->price'>"
                    . "<br>"
                    ."<button type='submit' name='addtowishlist' class='btn btn-primary btn-block btn-lg'/><span class='glyphicon glyphicon-paste'></span> Add To WishList</button>"    
                                   
                    . "</fieldset>"
                   
                    . "</div>"
                    . "</div>"
                    
                    . "</form>";
    if(isset($_POST['Omobile'])){
        
        
        $clothcontroller->InsertOrderPlacement();
        echo '<script type="text/javascript">'
            . 'alert("Data Has Been Inserted");'
                    . '</script>';
        header("Location:BillingSystem.php?Oname=".$_POST['Oname']."&Omobile=".$_POST['Omobile']);
        
    }
    include 'ordertemplate.php';
    



?>


