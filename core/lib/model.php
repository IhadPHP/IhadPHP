<?php
namespace  core\lib;
use core\lib\config;

class model extends \Medoo\Medoo
{
    public function __construct()
    {
        $options = config::all('database');
        parent::__construct($options);
    }
}