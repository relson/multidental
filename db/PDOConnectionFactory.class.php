<?php

require_once './config/Configs.php';

//Fabrica de conexões MultiDental
class PDOConnectionFactory extends Configs {
    
    private $con = null;
    
    //Tipo de banco
    private $dbtype = "mysql";
    
    //Parametros de conexão
    private $host = 'localhost';
    private $user = 'root';
    private $pass = 'lula@r00t';
    private $dbname = 'multidental';
    
    //seta a persistencia da conexão
    private $persistent = false;
    
    public function PDOConnectionFactory($persistent = false) {
        //Verifica a persistencia da conexão
        if ($persistent != false) {
            $this->persistent = true;
        }
    }
    
    public function getConnection() {
        try {
            //realiza a conexão MySQL
            $this->con = new PDO($this->dbtype.":host=".$this->host.";dbname=".$this->dbname, $this->user, $this->pass);
            
            $this->con->query('SET NAMES utf8');
            return $this->con;
        } catch (PDOException $e) {
            echo 'Erro: '.$e->getMessage();
        }
    }
    
    public function close() {
        if ($this->con != null) {
            $this->con = null;
        }
    }
}
?>
