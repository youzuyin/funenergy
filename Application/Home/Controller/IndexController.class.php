<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
        if(session('uid')){
            $this->redirect('ship/index');
        }
        $this->display();
    }


    // AJAX ------------------------------------

    public function dologin(){
        $name = I('get.name');
        $sql['name'] = $name;
        $info = M('user')->where($sql)->find();
        if(empty($info)){
            $res['res'] = 0;
            $res['word'] = '账号错误';
            echo json_encode($res);
            exit;
        }
        if($info['password'] != md5(I('get.pwd'))){
            $res['res'] = 0;
            $res['word'] = '密码错误';
            echo json_encode($res);
            exit;
        }
        session('uid',$info['id']);
        $res['res'] = 1;
        echo json_encode($res);
    }

    public function register(){
        
    }
}