<?php
namespace  app\model;

use core\lib\model;

class cModel extends model
{
    public $table = 'c';
    public function lists()
    {
        $res = $this->select($this->table,'*');
        return $res;
    }
}