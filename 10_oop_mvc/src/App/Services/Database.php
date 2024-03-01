<?php
class Database{
    // propriétés de notre class
    private $db_host;
    private $db_name;
    private $db_port;
    private $db_user;
    private $db_pass;
    // propriété DSN 
    private $db_dsn;
    // PDO qu'on connait bien maintenant ;)
    private $pdo;

    public function __construct(
        $db_host = 'localhost',
        $db_name = 'mvc_php',
        $db_port = '3310',
        $db_user = 'root',
        $db_pass = 'motdepassrootquivabienmachin'
    ){
        $this->db_host = $db_host;
        $this->db_name = $db_name;
        $this->db_port = $db_port;
        $this->db_user = $db_user;
        $this->db_pass = $db_pass;
        $this->db_dsn = 'mysql:host='.$this->db_host.';port='.$this->db_port.';dbname='.$this->db_name.';charset=utf8';
    }

    private function getPDO()
    {
        // Si PDO n'est pas déjà connecté
        if ($this->pdo === null){
            try {
                $db = new PDO($this->db_dsn,$this->db_user,$this->db_pass);
                $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch (PDOException $error) {
                echo "Hum problème de connexion au serveur de base de données: " . iconv('ISO-8859-1','UTF-8',$error->getMessage());
                die();
            }
            $this->pdo = $db;
        }
        // TOUT EST BON POUR AVOIR NOTRE OBJET PDO LES ZAMI(E)S !!!
        // PDO n'est appelé qu'UNE SEULE FOIS !!!
        return $this->pdo;
    }

    public function selectAll($statement,$params=[]){
        $sql = $this->getPDO()->prepare($statement);
        $sql->execute($params); 
        $data = $sql->fetchAll(PDO::FETCH_ASSOC);
        return $data;
    }

    public function select($statement,$params=[]){
        $sql = $this->getPDO()->prepare($statement);
        $sql->execute($params); 
        $data = $sql->fetch(PDO::FETCH_ASSOC);
        return $data;
    }

    public function query($statement,$params=[]){
        $sql = $this->getPDO()->prepare($statement);
        $sql->execute($params); 
        return $this->getPDO();
    }
}