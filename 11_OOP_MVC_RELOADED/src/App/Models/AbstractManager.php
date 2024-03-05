<?php
namespace App\Models;

abstract class AbstractManager
{

    protected static $db;
    protected static $tableName;
    protected static $obj;

    public function getAll($nb=null,$query=null){
        $limit = !is_null($nb) ? " LIMIT ".$nb : "";
        $results = [];
        $default_query = "SELECT * FROM ".self::$tableName." ORDER BY id DESC";
        $sql_query = $query===null ? $default_query  : $query;
        $results = self::$db->selectAll($sql_query.$limit);
        return $results;
    }

    public function getOne($query=null,$params=[]){
        $default_query = "SELECT * FROM ".self::$tableName." LIMIT 1";
        $sql_query = $query===null ? $default_query : $query;
        $row = [];
        $row = self::$db->select($sql_query,$params);
        return $row;
    }

    public function getOneById($id = null):array
    {
        $where = !is_null($id) ? "WHERE id=?" : "";
        $row = [];
        $row = self::$db->select("SELECT * FROM ".self::$tableName." ".$where." LIMIT 1",[$id]);
        return $row;
    }

    public function insert($data = []){
        $fields = self::$obj->getAttributes();
        foreach($fields as $v){ // ["?","?","?"]
            $values[] = "?";
        }
        $str_fields = implode(",",$fields); // email,password,roles
        $str_values = implode(",",$values); // ?,?,?
        // On veut obtenir une requête du type:
        // INSERT INTO user (email,password,roles) VALUES (?,?,?) => exemple table user
        // INSERT INTO post (user_id,title,description,image,updated_at) VALUES (?,?,?,?,?) => exemple table post
        $insert = self::$db->query("INSERT INTO ".self::$tableName." (".$str_fields.") VALUES (".$str_values.")",$data);
        return $insert;
    }

}