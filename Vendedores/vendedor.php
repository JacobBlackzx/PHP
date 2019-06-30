<?php

class vendedor {
    private $ID;
    private $Nome;
    private  $Vend_1;
    private  $Vend_2;
    private  $Cod;
    
    function getID() {
        return $this->ID;
    }
    
    function getNome() {
        return $this->Nome;
    }
    
    function  getVend_1() {
        return $this->Vend_1;
    }
    
    function  getVend_2() {
        return $this->Vend_2;
    }
    
    function  getCod() {
        return $this->Cod;
    }
    
    function  setID($ID) {
        $this->ID = $ID;
    }
    
    function  setNome($Nome) {
        $this->Nome = $Nome;
    }
    
    function setVend_1($Vend_1) {
        $this->Vend_1 = $Vend_1;
    }
    
    function  setVend_2($Vend_2) {
        $this->Vend_2 = $Vend_2;
    }
    
    function  setCod($Cod) {
        $this->Cod = $Cod;
    }
}
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

