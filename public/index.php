<?php
/**
 * 入口文件
 * Created by PhpStorm.
 * User: ShenYan
 * Date: 2018/6/9
 * Time: 15:03
 */
//根目录
define('IHAD',realpath('./'));
//核心文件
define('CORE',IHAD.'/core');
//项目目录
define('APP',IHAD.'/app');
define('MODULE','app');
//调试
define('DEBUG',true);
//引入composer
include  "vendor/autoload.php";

if(DEBUG) {
    $whoops = new \Whoops\Run;
    $errorTitle = '你又在写Bug啦~~~';
    $option = new \Whoops\Handler\PrettyPageHandler;
    $option->setPageTitle($errorTitle);
    $whoops->pushHandler($option);
    $whoops->register();
    ini_set('display_error','On');
} else {
    ini_set('display_error','Off');
}

//函数库
include CORE.'/common/function.php';
include CORE.'/ihad.php';
//自动加载
spl_autoload_register('\core\ihad::load');

\core\ihad::run();