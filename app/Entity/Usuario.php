<?php

namespace App\Entity;

use \App\DB\Database;
use \PDO;

class Usuario{
    public $user_id;

    public $username;

    public $password;

    public $name;

    public $email;

    /**
     * Metodo responsavel por cadastrar novo usuario no banco
     * @return bool
     */
    public function cadastrar(){
        $obDatabase = new Database('users');
        //echo "<pre>";print_r($obDatabase);echo "</pre>";exit;
        $this->user_id = $obDatabase->insert([
            'username'=> $this->username,
            'password'=> $this->password,
            'name'=> $this->name,
            'email'=> $this->email


        ]);
        //echo "<pre>";print_r($this);echo "</pre>";exit;
       return true;
    
    }

 /**
   * Método responsável por atualizar a vaga no banco
   * @return boolean
   */
  public function atualizar(){
    return (new Database('users'))->update('id = '.$this->user_id,[
                                                                'usuario'=> $this->username,
                                                                'senha' => $this->password,
                                                                'nome' => $this->name,
                                                                'email' => $this->email
                                                              ]);
  }

  /**
   * Método responsável por excluir a vaga do banco
   * @return boolean
   */
  public function excluir(){
    return (new Database('users'))->delete('id = '.$this->user_id);
  }

  /**
   * Método responsável por obter as vagas do banco de dados
   * @param  string $where
   * @param  string $order
   * @param  string $limit
   * @return array
   */
  public static function getUsuarios($where = null, $order = null, $limit = null){
    return (new Database('users'))->select($where,$order,$limit)->fetchAll(PDO::FETCH_CLASS,self::class);
  }

}

