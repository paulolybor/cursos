<?php

class PessoaController
{
    public static function index(){
        include 'model/pessoaModel.php';

        $model = new PessoaModel();
        $model->getAllRows();

        include 'view/modules/pessoa/listaPessoa.php';
    }

    public static function form(){
        include 'view/modules/pessoa/formPessoa.php';
    }

    public static function save(){
        include 'model/pessoaModel.php';

        $model = new PessoaModel();
        
        $model->nome = $_POST['nome'];
        $model->cpf = $_POST['cpf'];
        $model->data_nascimento = $_POST['data_nascimento'];
        
        $model->save();

        header("Location: /pessoa");
    }

}