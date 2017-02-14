<?php
namespace Home\Controller;
use Think\Controller;
class ShipController extends RootController
{
    public function index()
    {
        $list = M('ship')->select();
        $this->assign('list',$list);
        $this->display();
    }

    public function shipinfo(){
        $info = M('ship')->where('id='.I('get.id'))->find();
        $this->assign('info',$info);
        $this->display();
    }

    public function load_shipinfo(){
        $data = M('data')->order('creat_time DESC')->find();
        $sdata = explode(',',$data['data']);







        $this->assign('sdata',$sdata);
        $this->display();
    }
    //计算电流
    private function countI($a,$b){
        echo 88;
    }
}