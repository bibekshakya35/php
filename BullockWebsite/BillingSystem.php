<?php
include 'Controller/OrderAndBillController.php';

$Oname=$_GET['Oname'];
$Omobile=$_GET['Omobile'];



$title="Billing";
$orderBillController = new OrderAndBillController();
 

$orderBill=$orderBillController->PrepareBill($Oname,$Omobile);
$orderBillRecord=$orderBillController->prepareRecord($Oname, $Omobile);
$orderTotal=$orderBillController->fortotal($Oname, $Omobile);
require 'billingtemplate.php';


?>



