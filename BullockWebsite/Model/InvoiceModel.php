<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of InvoiceModel
 *
 * @author Bibek SHAKYA
 */
include 'Entities/InvoiceEntities.php';
class InvoiceModel {

   function InsertInvoice(InvoiceEntities $invoice){
         require 'connection.php';
       $link=mysqli_connect($host, $user, $pass, $db);
       $link1=mysqli_select_db($link, $db);
       $query=sprintf("INSERT INTO invoice (INO,username,PCODE,productname,price,date,place,contactnumber)"
               . "VALUES"
               . "('%s','%s','%s','%s','%s','%s','%s','%s')",
 mysqli_escape_string($link, $invoice->INO),
 mysqli_escape_string($link, $invoice->username),
 mysqli_escape_string($link, $invoice->PCODE),
 mysqli_escape_string($link, $invoice->productname),
 mysqli_escape_string($link, $invoice->price),
 mysqli_escape_string($link, $invoice->date),
 mysqli_escape_string($link, $invoice->place),
 mysqli_escape_string($link, $invoice->contactnumber));
       $result=  mysqli_query($link, $query);
       mysqli_close($link);
       return $result;
       
   }
}
