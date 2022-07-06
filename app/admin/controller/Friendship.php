<?php
namespace app\admin\controller;

use app\BaseController;
use think\facade\View;
use think\facade\Db;
use think\facade\Session;
session_start();
class Friendship extends BaseController
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
        $friend = Db::name('friend')->where(['userid'=>$this->uid,'status'=>0])->order('id desc')->select();
        View::assign([
            'friend'  => $friend
        ]);
        $friends = Db::name('friend')->where(['userid'=>$this->uid,'status'=>1])->order('id desc')->select();
        View::assign([
            'friends'  => $friends
        ]);
        $user = Db::name('user')->where(['id'=>$this->uid])->find();
        View::assign([
            'user'  => $user
        ]);
        return View::fetch('index');
    }
    public function del($id = 0)
    {
        if(Db::name('friend')->where(['userid'=>$this->uid,'id'=>$id])->delete()){
            return ['status'=>200,'msg'=>'删除成功！'];
        }else{
            return ['status'=>200,'msg'=>'删除失败！'];
        }
    }
    public function status($id = 0)
    {
        if(Db::name('friend')->where(['userid'=>$this->uid,'id'=>$id,'status'=>1])->update(['status'=>0])){
            return ['status'=>200,'msg'=>'设置成功！'];
        }else{
            return ['status'=>200,'msg'=>'设置失败！'];
        }
    }
    public function deletes($ids = array())
    {
        if(empty($ids)){
            header('location:'.getenv("HTTP_REFERER"));exit;
        }
        if(is_array($ids)){
            foreach ($ids as $k=>$v){
                 Db::name('friend')->where(['id'=>$v])->delete();
            }
            header('location:'.getenv("HTTP_REFERER"));
        }else{
            echo "<script>alert('删除失败！');window.location.href=history.go(-1)</script>";
        }
    }
    public function forms()
    {
        $post = $_POST;
        $data['userid'] = $this->uid;
        $data['web_name'] = $post['web-name'];
        $data['web_url'] = $post['web-url'];
        $data['web_ico'] = $post['web-ico'];
        $data['web_email'] = $post['web-email'];
        $data['web_introduce'] = $post['web-introduce'];
        $data['web_time'] = date('Y-m-d H:i:s',time());
        if(Db::name('friend')->insert($data)){
            header('location:'.getenv("HTTP_REFERER"));
        }else{
            echo "<script>alert('提交失败！');window.location.href=history.go(-1)</script>";
        }
    }
}
