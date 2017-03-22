<?php
require 'Controller/ClothController.php';
$clothcontroller=new ClothController();
$title="Home";
$clothbox=$clothcontroller->CreateClothTable();
$eyewear=$clothcontroller->CreateEyeWearTable();
$footwear=$clothcontroller->CreateFootwearTable();
$watch=$clothcontroller->CreateWatchTable();
include 'fonttemplate.php';
?>