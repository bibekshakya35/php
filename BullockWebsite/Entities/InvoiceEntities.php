<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of InvoiceEntities
 *
 * @author Bibek SHAKYA
 */
class InvoiceEntities {
    public $INO;
    public $username;
    public $PCODE;
    public $productname;
    public $price;
    public $date;
    public $place;
    public $contactnumber;
    function __construct($INO, $username, $PCODE, $productname, $price, $date, $place, $contactnumber) {
        $this->INO = $INO;
        $this->username = $username;
        $this->PCODE = $PCODE;
        $this->productname = $productname;
        $this->price = $price;
        $this->date = $date;
        $this->place = $place;
        $this->contactnumber = $contactnumber;
    }

}
