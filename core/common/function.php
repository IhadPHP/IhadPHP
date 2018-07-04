<?php
/**
 * 自定义函数库
 */
function p($data)
{
    $str = '<pre style="display: block;padding: 9.5px;margin: 44px 0 0 0;font-size: 13px;line-height: 1.42857;color: #333;word-break: break-all;word-wrap: break-word;background-color: #F5F5F5;border: 1px solid #CCC;border-radius: 4px;">';
    if (is_bool($data)) {
        $show_data = $data ? 'true' : 'false';
    } elseif (is_null($data)) {
        $show_data = 'null';
    } else {
        $show_data = print_r($data, true);
    }
    $str .= $show_data;
    $str .= '</pre>';
    echo $str;
}

/**
 * @param $name 对应值
 * @param bool $default 默认值
 * @param bool $fitt 过滤方法 'int'
 * @return bool
 */
function post($name,$default=false,$fitt=false)
{
    if(isset($_POST[$name])){
        if($fitt){
            switch ($fitt){
                case 'int':
                    if(is_numeric($_POST[$name])){
                        return $_POST[$name];
                    }else{
                        return $default;
                    }
                    break;
                default:;
            }
        }else{
            return $_POST[$name];
        }
    }else{
        return $default;
    }
}

function get($name,$default=false,$fitt=false)
{
    if(isset($_GET[$name])){
        if($fitt){
            switch ($fitt){
                case 'int':
                    if(is_numeric($_GET[$name])){
                        return $_GET[$name];
                    }else{
                        return $default;
                    }
                    break;
                default:;
            }
        }else{
            return $_GET[$name];
        }
    }else{
        return $default;
    }
}

/**
 * @param $url 跳转地址
 */
function jump($url)
{
    header('Location:'.$url);
    exit();
}