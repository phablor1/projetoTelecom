<?php
namespace App\DB;

use \PDO;
use \PDOException;

 /**
  * Summary of Database
  */

class Database {
    const DBHOST = 'localhost';
     const DBNAME = 'asterisk';
     const DBUSER = 'root';
     const DBPASS = 'p123456';
        
    /**
     * Instancia de conexão com o banco de dados
     * @var PDO
     */
    private $conn;
    
    /**
     * Nome da tabela manipulada
     * @var mixed
     */
    private $table;
       
      /**
     * Define a tabela e instancia de conexao
     * @param mixed $table
     */
    public function __construct($table = null){
        $this->table = $table; 
        $this->setConnection();
        
    }
    /**
     * Metodo responsavel criar conexão com o banco
     */
    private function setConnection(){
        try{
            $this->conn = new PDO('mysql:host='.self::DBHOST.';dbname='.self::DBNAME,self::DBUSER,self::DBPASS);
            //$this->conn = new PDO($this->dsn, self::DBUSER, self::DBPASS);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        }catch(PDOException $e){
            die('ERROR' .$e->getMessage());
        }
    
    }
             /**
     * Metodo responsavel executar querys no banco 
     * @param string $query
     * @param array  $params
     * @return \PDOStatement
     */
    public function execute($query,$params = []){
        try{

            $stm = $this->conn->prepare($query);
            $stm->execute($params);
            return $stm;
        }catch(PDOException $e){
            die('ERROR' . $e->getMessage());
        }

    }
    /**
     * Metodo responsavel por inserir dados no banco
     * @param array @values 
     * @return integer
     */
    public function insert($values){
        //Dados da query
        $fields = array_keys($values);
        $binds =  array_pad([],count($fields),'?');
        //Monta query
        $query = "INSERT INTO ".$this->table." (".implode(",",$fields).") VALUES (".implode(",",$binds).")";
        

        //echo $query;
        //exit;
        $this->execute($query,array_values($values));

        //Retornar o id inserido
        return $this->conn->lastInsertId();
    }
    
    /**
* Método responsável por executar uma consulta no banco
* @param string $where
* @param string $order
* @param string $limit
* @param string $fields
* @return \PDOStatement
*/
public function select($where = null, $order = null, $limit = null, $fields = '*'){
    //DADOS DA QUERY
    $where = strlen($where) ? 'WHERE '.$where : '';
    $order = strlen($order) ? 'ORDER BY '.$order : '';
    $limit = strlen($limit) ? 'LIMIT '.$limit : '';
    //MONTA A QUERY
    $query = "SELECT ".$fields." FROM ".$this->table." ".$where." ".$order." ".$limit;
    //EXECUTA A QUERY
    return $this->execute($query);
    }

     /**
   * Método responsável por executar atualizações no banco de dados
   * @param  string $where
   * @param  array $values [ field => value ]
   * @return boolean
   */
  public function update($where,$values){
    //DADOS DA QUERY
    $fields = array_keys($values);

    //MONTA A QUERY
    $query = 'UPDATE '.$this->table.' SET '.implode('=?,',$fields).'=? WHERE '.$where;

    //EXECUTAR A QUERY
    $this->execute($query,array_values($values));

    //RETORNA SUCESSO
    return true;
  }

  /**
   * Método responsável por excluir dados do banco
   * @param  string $where
   * @return boolean
   */
  public function delete($where){
    //MONTA A QUERY
    $query = 'DELETE FROM '.$this->table.' WHERE '.$where;

    //EXECUTA A QUERY
    $this->execute($query);

    //RETORNA SUCESSO
    return true;
  }
    
}
?>