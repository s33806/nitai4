<?php
namespace app\admin\controller;

use app\BaseController;
use think\facade\View;
use think\facade\Db;
use think\Request;
use think\facade\Session;
session_start();
class Index extends BaseController
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
    public function index(Request $request)
    {
        $system = Db::name('system')->where(['id'=>1])->find();
        View::assign([
            'system'  => $system
        ]);
        $info = array(
    		 'PHP_OS'=>PHP_OS,
    		 'SERVER_SOFTWARE'=>$_SERVER["SERVER_SOFTWARE"],
    		 'PHP运行方式'=>php_sapi_name(),
    		 'banben'=>PHP_VERSION,
    		 //'cpu'=> (processcpu2-processcpu1)/(totalcpu2-totalcpu1)*cpunum*100%,
    		 '执行时间限制'=>ini_get('max_execution_time').'秒',
    		 '服务器时间'=>date("Y年n月j日 H:i:s"),
    		 '北京时间'=>gmdate("Y年n月j日 H:i:s",time()+8*3600),
    		 '服务器域名/IP'=>$_SERVER['SERVER_NAME'].' [ '.gethostbyname($_SERVER['SERVER_NAME']).' ]',
    		 '剩余空间'=>round((disk_free_space(".")/(1024*1024)),2).'M',
    		 'register_globals'=>get_cfg_var("register_globals")=="1" ? "ON" : "OFF",
    		 'magic_quotes_gpc'=>(1===get_magic_quotes_gpc())?'YES':'NO',
    		 'magic_quotes_runtime'=>(1===get_magic_quotes_runtime())?'YES':'NO',
		 );
		 View::assign([
            'info'  => $info
        ]);
        $moduleName = $this->request->controller();
        View::assign([
            'moduleName'  => $moduleName
        ]);
        $data = Db::name('hezuo')->order('id desc')->select();
        View::assign([
            'data'  => $data
        ]);
        $user = Db::name('user')->where(['id'=>$this->uid])->find();
        View::assign([
            'user'  => $user
        ]);
         View::assign([
            'cpufree'  => get_cpufree()
        ]);
        return View::fetch('index');
    }
}
