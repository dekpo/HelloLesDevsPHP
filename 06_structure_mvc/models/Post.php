<?php
require_once("./services/class/Database.php");

class Post
{
    // propriété $db pour stocker PDO
    private $db;

    public function __construct(){
        $this->db = new Database();
    }

    public function getAll($nb=null){
        $limit = !is_null($nb) ? "LIMIT ".$nb : "";
        $posts = [];
        $posts = $this->db->selectAll("SELECT * FROM post ORDER BY id DESC ".$limit);
        return $posts;
    }
}