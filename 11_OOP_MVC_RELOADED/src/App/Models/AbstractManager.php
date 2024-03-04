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

    public function getOneById($id = null):array
    {
        $where = !is_null($id) ? "WHERE id=?" : "";
        $row = [];
        $row = self::$db->select("SELECT * FROM ".self::$tableName." ".$where." LIMIT 1",[$id]);
        return $row;
    }

}