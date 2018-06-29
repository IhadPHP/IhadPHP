<?php
namespace app\ctrl;

use app\model\cModel;
use core\lib\model;

class indexCtrl extends \core\ihad
{
    public function index()
    {
//        $model = new cModel();
//        $res = $model->lists();
//        p($res);
        $data = 'hello';
        $this->assign('data',$data);
        $this->display('index.html');
    }
}