<?php
namespace Home\Controller;
use Think\Controller;
class RootController extends Controller
{
    public function _initialize()
    {
        $uid = session('uid');
        if (empty($uid)) {
            $this->redirect('index/index');
        }
    }
}