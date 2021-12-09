<?php

namespace App\entity;

use \App\Db\Database;
use \PDO;

class Pessoa {

 
  public $id;

    public $nome;

    public $cpf;

    public $email;

    public $descricao;

    public $data;

  
  public function cadastrar(){
   
    $this->data = date('Y-m-d H:i:s');

    
    $obDatabase = new Database('pessoas');
    $this->id = $obDatabase->insert([
      'nome' => $this->nome,
      'cpf' => $this->cpf,
      'email' => $this->email,
      'descricao' => $this->descricao,
      'data' => $this->data
                                    ]);

   
    return true;
  }

 
  public function atualizar(){
    return (new Database('pessoas'))->update('id = '.$this->id,[
      'nome' => $this->nome,
      'cpf' => $this->cpf,
      'email' => $this->email,
      'descricao' => $this->descricao,
      'data' => $this->data
                                                              ]);
  }

 
  public function excluir(){
    return (new Database('pessoas'))->delete('id = '.$this->id);
  }

  
  public static function getPessoas($where = null, $order = null, $limit = null){
    return (new Database('pessoas'))->select($where,$order,$limit)
                                  ->fetchAll(PDO::FETCH_CLASS,self::class);
  }

  
  public static function getPessoa($id){
    return (new Database('pessoas'))->select('id = '.$id)
                                  ->fetchObject(self::class);
  }

}