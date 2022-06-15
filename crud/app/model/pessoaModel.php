<?php

class PessoaModel {
    public $id, $nome, $cpf, $data_nascimento;

    public $rows;

    public function save(){
        include 'DAO/pessoaDAO.php';

        $dao = new PessoaDAO();

        $dao->insert($this);
    }

    public function getAllRows(){
        
        include 'DAO/pessoaDAO.php';

        $dao = new PessoaDAO();

        $this->rows = $dao->select();

    }
}