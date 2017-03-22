<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of OfferEntities
 *
 * @author Bibek Shakya
 */
class OfferEntities {
   public $OID;
   public $offerpic;
   public $status;
   function __construct($OID, $offerpic, $status) {
       $this->OID = $OID;
       $this->offerpic = $offerpic;
       $this->status = $status;
   }

}
