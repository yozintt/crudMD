<?php

require __DIR__.'/vendor/autoload.php';

define('NOME','Editar pessoa');

use \App\entity\Pessoa;


if(!isset($_GET['id']) or !is_numeric($_GET['id'])){
  header('location: index.php?status=error');
  exit;
}


$obPessoa = Pessoa::getPessoa($_GET['id']);


if(!$obPessoa instanceof Pessoa){
  header('location: index.php?status=error');
  exit;
}

if(isset($_POST['nome'],$_POST['cpf'],$_POST['email'],$_POST['descricao'])){

  $obPessoa->nome = $_POST['nome'];
  $obPessoa->cpf = $_POST['cpf'];
  $obPessoa->email = $_POST['email'];
  $pessoa->descricao = $_POST['descricao'];
  $obPessoa->atualizar();

  header('location: index.php?status=success');
  exit;
}

include __DIR__.'/includes/header.php';
include __DIR__.'/includes/formulario.php';
include __DIR__.'/includes/footer.php';