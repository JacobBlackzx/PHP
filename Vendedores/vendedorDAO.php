<?php

include 'conexao.php';
include 'vendedor.php';

class vendedorDAO extends conexao {
    public $connection = NULL;
    
    public function __construct() {
        $conexao = new Conexao();
        $this->connection = $conexao->conecta();
    }
    
    function inserir(vendedor $vendedor){
        try {
            
        } catch (Exception $ex) {

        }
    }
}
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

