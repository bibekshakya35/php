<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ClothingEntities
 *
 * @author Bibek SHAKYA
 */
        class ClothingEntities {
            public $PID;
            public $PCODE;
            public $productname;
            public $color;
            public $size;
            public $stock;
            public $price;
            public $image;
            public $date;
            public $review;
            public $made;
            public $type;
            public $arrival;


            function __construct($PID, $PCODE, $productname, $color, $size, $stock, $price, $image, $date, $review, $made, $type, $arrival) {
                $this->PID = $PID;
                $this->PCODE = $PCODE;
                $this->productname = $productname;
                $this->color = $color;
                $this->size = $size;
                $this->stock = $stock;
                $this->price = $price;
                $this->image = $image;
                $this->date = $date;
                $this->review = $review;
                $this->made = $made;
                $this->type = $type;
                $this->arrival = $arrival;
            }



    
}

?>