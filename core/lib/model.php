<?php
namespace  core\lib;
use core\lib\config;
class model extends \PDO
{
    public function __construct()
    {
        $database = config::all('database');
        try{
            parent::__construct($database['DSN'], $database['USERNAME'], $database['PASSWD']);
        } catch (\PDOException $e){
            p($e->getMessage());
        }
    }
}