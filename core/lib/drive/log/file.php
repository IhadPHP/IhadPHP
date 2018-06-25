<?php
namespace core\lib\drive\log;

use core\lib\config;

// 文件系统

class file
{
    public $path; #日志存储位置

    public function __construct()
    {
        $config = config::get('OPTION','log');
        $this->path = $config['PATH'];
    }

    /**
     * 确定文件存储位置是否存在
     * 新建目录
     * 写入日志
     */
    public function log($message,$file = 'log')
    {
        if(!is_dir($this->path.date('YmdH'))){
//            mkdir(iconv("UTF-8", "GBK", $this->path),0777,true);
            mkdir($this->path.date('YmdH'),0777,true);
        }
        $message = $message;
        return file_put_contents($this->path.date('YmdH').'/'.$file.'.php',date('Y-m-d H:i:s').json_encode($message).PHP_EOL,FILE_APPEND);
    }
}