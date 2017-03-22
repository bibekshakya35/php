<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of OrderPlacementEntites
 *
 * @author Bibek SHAKYA
 */
class OrderPlacementEntites {
    public $ONO;
    public $PCODE;
    public $QTY;
    public $username;
    public $contactnumber;
    public $image;
    public $productname;
    public $color;
    public $size;
    public $price;
    public $date;
    public $place;
            
    function __construct($ONO, $PCODE, $QTY, $username, $contactnumber, $image, $productname, $color, $size, $price, $date, $place) {
        $this->ONO = $ONO;
        $this->PCODE = $PCODE;
        $this->QTY = $QTY;
        $this->username = $username;
        $this->contactnumber = $contactnumber;
        $this->image = $image;
        $this->productname = $productname;
        $this->color = $color;
        $this->size = $size;
        $this->price = $price;
        $this->date = $date;
        $this->place = $place;
    }





}
