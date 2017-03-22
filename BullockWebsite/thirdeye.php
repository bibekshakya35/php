<?php

include 'Controller/ClothController.php';
$title="Third Eyes";
$clothcontroller=new ClothController();
$cms=$clothcontroller->OverViewTable();
if(isset($_GET['delete'])){
    echo "<script type='text/javascript'>"
    . "var c =confirm('Do you want to Delete This Item!!!!');"
            . "if(c){"
            . $clothcontroller->DeleteCloth($_GET['delete'])
            . "alert('Deleted!!!Item Is deleted');"
            . "}"
            . "else{"
            . "window.location='thirdeye.php';"
            . "}"
            . "</script>";
   
    
    
    
    
}
include 'cmstemplate.php';