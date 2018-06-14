<?php
namespace app\ctrl;
class indexCtrl extends \core\ihad
{
    public function index()
    {
        $temp = new \core\lib\model();
//        p('it is index');
//        $model = new \core\lib\model();
//        $sql = 'select * from c';
//        $ret = $model->query($sql);
//        p($ret->fetchAll());
        $data = 'hello,world';
        $this->assign('data',$data);
        $this->display('index.html');
    }
}