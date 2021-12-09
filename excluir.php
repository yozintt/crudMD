<?php

require __DIR__.'/vendor/autoload.php';

define('TITLE','Editar pessoa');

use \App\Entity\Pessoa;


if(!isset($_GET['id']) or !is_numeric($_GET['id'])){
  header('location: index.php?status=error');
  exit;
}


$obPessoa = Pessoa::getPessoa($_GET['id']);


if(!$obPessoa instanceof Pessoa){
  header('location: index.php?status=error');
  exit;
}

if(isset($_POST['excluir'])){

    $obVaga->excluir();
  

  header('location: index.php?status=success');
  exit;
}

include __DIR__.'/includes/header.php';
include __DIR__.'/includes/confirmar-exclusao.php';
include __DIR__.'/includes/footer.php';