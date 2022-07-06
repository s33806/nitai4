<?php
namespace app\admin\controller;

use app\BaseController;
use think\facade\View;
use think\facade\Db;
use think\facade\Session;
session_start();
class Website extends BaseController
{
    public $uid = '';
    protected function initialize(){	
        if(!isset($_SESSION['users'])){
            header('location:/admin/login/index');exit;
        }
        $session = $_SESSION['users'];
        if(empty($session)){
			header('location:/admin/index/index');
		}
		$this->uid = $session;
    }
    public function index()
    {
        $system = Db::name('system')->where(['id'=>1])->find();
        View::assign([
            'system'  => $system
        ]);
        $moduleName = $this->request->controller();
        View::assign([
            'moduleName'  => $moduleName
        ]);
        $data = Db::name('website')->order('id desc')->select();
        View::assign([
            'data'  => $data
        ]);
        $user = Db::name('user')->where(['id'=>$this->uid])->find();
        View::assign([
            'user'  => $user
        ]);
        return View::fetch('index');
    }
    public function del($id = 0)
    {
        if(Db::name('website')->where(['id'=>$id])->delete()){
            return ['status'=>200,'msg'=>'删除成功！'];
        }else{
            return ['status'=>200,'msg'=>'删除失败！'];
        }
    }
    public function forms()
    {
        $post = $_POST;
        $data['name'] = $post['name'];
        $data['url'] = $post['url'];
        if(Db::name('website')->insert($data)){
            header('location:'.getenv("HTTP_REFERER"));
        }else{
            echo "<script>alert('提交失败！');window.location.href=history.go(-1)</script>";
        }
    }
}
