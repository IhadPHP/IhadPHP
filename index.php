<?php
/**
 * 入口文件
 * Created by PhpStorm.
 * User: ShenYan
 * Date: 2018/6/9
 * Time: 15:03
 */

//根目录
define('IHAD',realpath('/'));
//核心文件
define('CORE',IHAD.'/core');
//项目目录
define('APP',IHAD.'/app');
//调试
define('DEBUG',true);

if(DEBUG) {
    ini_set('display_error','On');
} else {
    ini_set('display_error','Off');
}
