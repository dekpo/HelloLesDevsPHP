<?php
namespace App\Models;

use App\Services\Database;

class Post
{
    // propriété $db pour stocker PDO
    private $db;

    public function __construct(){
        $this->db = new Database();
    }

    public function getAll($nb=null,$query="SELECT * FROM post ORDER BY id DESC"){
        $limit = !is_null($nb) ? " LIMIT ".$nb : "";
        $posts = [];
        $posts = $this->db->selectAll($query.$limit);
        return $posts;
    }
}