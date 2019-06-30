<?php

class conexao {

    public $servidor = 'localhost';
    public $usuario = 'root';
    public $senha = '';
    public $banco = 'nomedobanco';

    public function conecta() {
        $conexao = new PDO("mysql:host=" . $this->servidor . ";dbname=" . $this->nomedobanco . ";", "" . $this->usuario . "", "" . $this->senha . "", array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8", PDO::ATTR_PERSISTENT => true));
        $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $conexao;
    }

}

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

