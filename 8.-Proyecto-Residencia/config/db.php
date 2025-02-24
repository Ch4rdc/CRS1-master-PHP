<?php
class Database{
    public static function connect(){
        $db = new mysqli('localhost', 'root', '','proyecto');
        $db->query("SET NAMES'UTF-8'");
        return $db;
    }
}

