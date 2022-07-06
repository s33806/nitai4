<?php
namespace app\admin\controller;

use app\BaseController;
use think\facade\View;
use think\facade\Db;
use think\facade\Session;
session_start();
class Tuichu extends BaseController
{
    public function index()
    {
        $_SESSION['users'] = null;
        $user = Session::get('user');
        Session::delete('user');
        Session::clear();
        header('location:/admin/login/index');
    }
}
