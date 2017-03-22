<?php
    require 'Controller/ClothController.php';
    $title='New Arrival Cloth';
    $clothcontroller=new ClothController();
    
    $recentclothbox=$clothcontroller->GetRecentClothTable();
    $recenteyewear=$clothcontroller->GetRecentEyeWearTable();
    $recentfootwear=$clothcontroller->GetRecentFootwearTable();
    $recentwatch=$clothcontroller->GetRecentWatchTable();
    $topproduct=$clothcontroller->GetSecondRecentOffer();
    $topclothbox=$clothcontroller->GetMostClothTable();
    $topeyewear=$clothcontroller->GetMostEyeWearTable();
    $topfootwear=$clothcontroller->GetMostFootwearTable();
    $topwatch=$clothcontroller->GetMostWatchTable();
    $topproduct2=$clothcontroller->GetThirdRecentOffer();
    include './newproducttem.php';
?>
