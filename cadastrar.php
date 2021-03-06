<?php

require __DIR__.'/vendor/autoload.php';

define('TITLE','Cadastrar pessoa');

use \App\Entity\Pessoa;
$obPessoa + new Pessoa;

if(isset($_POST['nome'],$_POST['cpf'],$_POST['email'],$_POST['descricao'])){
    
    $obPessoa->nome = $_POST['nome'];
    $obPessoa->cpf = $_POST['cpf'];
    $obPessoa->email = $_POST['email'];
    $obPessoa->descricao = $_POST['descricao'];
    $obPessoa->cadastrar();

    header('location: index.php?status=sucess');
    exit;
};

include __DIR__.'/includes/header.php';
include __DIR__.'/includes/formulario.php';
include __DIR__.'/includes/footer.php';