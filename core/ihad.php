<?php
namespace core;

class ihad
{
    public static $classMap = array();
    public $assign;

    static public function run()
    {
        \core\lib\log::init();
        $route =  new \core\lib\route();
        $ctrlClass = $route->controller;
        $action = $route->action;
        $ctrlfile = APP . '/controller/'.$ctrlClass.'Controller.php';
        $cltrlClass = '\\'.MODULE.'\controller\\'.$ctrlClass.'Controller';
        if(is_file($ctrlfile)){
            include $ctrlfile;
            $ctrl = new $cltrlClass();
            if(!method_exists($ctrl,$action)){
                throw new \Exception('未定义方法'.$action);
            }
            $ctrl->$action();
            \core\lib\log::log('controller:'.$ctrlClass.'     '.'action:'.$action);
        }else{
            throw new \Exception('找不到控制器'.$ctrlClass);
        }
    }

    static public function load($class)
    {
        //自动加载类库
        if(isset($classMap[$class])){
            return true; //避免重复加载
        }else{
            str_replace('\\','/',$class);
            $file = IHAD.'/'.$class.'.php';
            if(is_file($file)){
                include $file;
                self::$classMap[$class] = $class;
            }else{
                return false;
            }
        }
    }

    public function assign($name,$value)
    {
        $this->assign[$name] = $value;
    }

    public function display($file)
    {
        $file = APP.'/view/'.$file;
        if(is_file($file)){
            extract($this->assign);

            $loader = new \Twig_Loader_Filesystem(APP.'/view');
            $twig = new \Twig_Environment($loader, array(
                'cache' => IHAD.'/log/twig',
                'debug' => DEBUG
            ));
            $template = $twig->loadTemplate('index.html');
            $template->display($this->assign?$this->assign:array());
        }
    }
}