<?php

include 'conexao.php';
include 'vendedor.php';

class vendedorDAO extends conexao {

    public $connection = NULL;

    public function __construct() {
        $conexao = new Conexao();
        $this->connection = $conexao->conecta();
    }

    function inserir(vendedor $vendedor) {
        try {
            $connection = Conexao::conecta();
            $stmt = $connection->prepare('insert into vendedor (ID,Nome,Vend_1,Vend_2,Cod) '. values (:ID, :Nome, :Vend_1, :Vend_2, :Cod));

            $stmt->execute(array(
                'ID' => '',
                'Nome' => $vendedor->getNome(),
                'Vend_1' => $vendedor->getVend_1(),
                'Vend_2' => $vendedor->getVend_2(),
                'Cod' => $vendedor->getCod(),
            ));

            if ($stmt->lasIsertID() > 0) {
                echo json_encode(0);
            }
        } catch (PDOException $e) {
            echo 'Error: ' . $e->getMessage();
        }
    }

    function pesquisar() {
        try {
            $sql = 'select * from vendedor';

            $stmte = $this->connection->query($sql);
            $stmte->execute();

            return json_encode($stmte->fetchAll(PDO::FETCH_OBJ));
        } catch (PDOException $e) {
            echo 'Error: ' . $e->getMessage();
        }
    }

}

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

