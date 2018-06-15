<?php
namespace core\lib;
use core\lib\config;
class route
{
    public $ctrl;
    public $action;
    public function __construct()
    {
        /**
         * 1、隐藏入口文件 index.php
         * 2、获取URL参数
         * 3、返回对应的控制器和方法
         */
        if(isset($_SERVER['REQUEST_URI']) && $_SERVER['REQUEST_URI'] != '/'){
            // index/index
            $path = $_SERVER['REQUEST_URI'];
            $patharr = explode('/',trim($path,'/'));
            if(isset($patharr[0])){
                $this->ctrl = $patharr[0];
            }
            unset($patharr[0]);
            if(isset($patharr[1])){
                $this->action = $patharr[1];
                unset($patharr[1]);
            }else{
                $this->action = config::get('ACTION','route');
            }
            // url多余部分为get参数
            // id/1/str/2/test/3
            $count = count($patharr) + 2;
            $i = 2;
            while($i < $count){
                if(isset($patharr[$i + 1])){
                    $_GETS[$patharr[$i]] = $patharr[$i + 1];
                }
                $i = $i + 2;
            }
        }else{
            $this->ctrl = config::get('CTRL','route');
            $this->action = config::get('ACTION','route');
        }
    }
}