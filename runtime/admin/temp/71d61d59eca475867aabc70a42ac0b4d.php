<?php /*a:4:{s:61:"/www/wwwroot/cs.api-yun.top/app/admin/view/message/index.html";i:1655539097;s:58:"/www/wwwroot/cs.api-yun.top/app/admin/view/public/nav.html";i:1655450636;s:61:"/www/wwwroot/cs.api-yun.top/app/admin/view/public/header.html";i:1655479235;s:61:"/www/wwwroot/cs.api-yun.top/app/admin/view/public/footer.html";i:1655440532;}*/ ?>
<!--
拟态UI4.0个人主页设计
博客：www.xfwl.club
作者：小枫
QQ：180918574
-->
<!DOCTYPE html>
<html lang="zh-CN">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />
    <title>留言列表 - <?php echo htmlentities($system['sitename']); ?>后台管理系统</title>
    <link rel="shortcut icon" href="https://www.xfwl.club/favicon.ico" type="image/ico">
    <link href="/admin/css/bootstrap.min.css" rel="stylesheet">
    <link href="/admin/css/materialdesignicons.min.css" rel="stylesheet">
    <link href="/admin/css/style.min.css" rel="stylesheet">
    <link href="/admin/assets/font/iconfont.css" rel="stylesheet">
    <link href="/admin/assets/css/main.css" rel="stylesheet">
    <link href="/admin/assets/css/style.css" rel="stylesheet">
    <style>
        .nav-tabs>li.active>a,
        .nav-tabs>li.active>a:focus,
        .nav-tabs>li.active>a:hover {
            color: var(--primary);
            font-weight: 700;
            border-bottom: none;
        }

        .title_font {
            font-size: 1.3em;
        }

        .table>tbody>tr>td,
        .table>tbody>tr>th,
        .table>tfoot>tr>td,
        .table>tfoot>tr>th,
        .table>thead>tr>td,
        .table>thead>tr>th {
            border: none;
        }

        .table-bordered>tbody>tr>td,
        .table-bordered>tbody>tr>th,
        .table-bordered>tfoot>tr>td,
        .table-bordered>tfoot>tr>th,
        .table-bordered>thead>tr>td,
        .table-bordered>thead>tr>th {
            border-bottom: 1px solid var(--greyLight-2);
        }

        .lyear-checkbox span::before,
        .lyear-radio span::before {
            border: 2px solid var(--greyLight-2) !important;
        }

        .checkbox-primary input:checked~span::before {
            background-color: var(--primary);
        }

        .card-toolbar {
            padding: 10px 0;
        }

        .btn-danger {
            background-color: #f96868 !important;
        }
    </style>
</head>

<body>
    <div class="lyear-layout-web">
        <div class="lyear-layout-container">
            <!--左侧导航-->
            <aside class="lyear-layout-sidebar">
    <!-- logo -->
    <div id="logo" class="sidebar-header">
        <a href="/">
            <img src="/admin/assets/images/xf_logo.png" alt="<?php echo htmlentities($system['sitename']); ?>" />
        </a>
    </div>
    <div class="lyear-layout-sidebar-scroll">

        <nav class="sidebar-main">
            <ul class="nav nav-drawer">
                <li class="nav-item <?php if($moduleName == 'Index'): ?>active<?php endif; ?>"> <a href="<?php echo url('admin/index/index'); ?>"><i class="mdi mdi-home"></i>后台首页</a></li>
                <li class="nav-item <?php if($moduleName == 'Basic'): ?>active<?php endif; ?>">
                    <a href="<?php echo url('admin/basic/index'); ?>"><i class="iconfont icon-jichushezhi"></i>基础设置</a>
                </li>
                <li class="nav-item <?php if($moduleName == 'Information'): ?>active<?php endif; ?>">
                    <a href="<?php echo url('admin/information/index'); ?>"><i class="iconfont icon-gerenxinxi"></i>我的信息</a>
                </li>
                <li class="nav-item <?php if($moduleName == 'Website'): ?>active<?php endif; ?>">
                    <a href="<?php echo url('admin/website/index'); ?>"><i class="iconfont icon-zhandianditu"></i>旗下站点</a>
                </li>
                <li class="nav-item <?php if($moduleName == 'Message'): ?>active<?php endif; ?>">
                    <a href="<?php echo url('admin/message/index'); ?>"><i class="iconfont icon-liuyan"></i>留言列表</a>
                </li>
                <li class="nav-item <?php if($moduleName == 'Friendship'): ?>active<?php endif; ?>">
                    <a href="<?php echo url('admin/friendship/index'); ?>"><i class="iconfont icon-youqinglianjie"></i>友情链接</a>
                </li>
            </ul>
        </nav>
        <img src="/admin/assets/images/paper_airplane.png" alt="纸飞机">
    </div>
</aside>
            <!--End 左侧导航-->
            <!--头部信息-->
            <header class="lyear-layout-header">
    <nav class="navbar navbar-default">
        <div class="topbar">
            <div class="topbar-left">
                <div class="lyear-aside-toggler">
                    <span class="lyear-toggler-bar"></span>
                    <span class="lyear-toggler-bar"></span>
                    <span class="lyear-toggler-bar"></span>
                </div>
                <span class="navbar-page-title">
                    <!-- 搜索栏 -->
                    <div class="xf_baidu">
                        <form action="http://www.baidu.com/baidu" target="_blank">
                            <input type="text" name="word" size="30" autocomplete="off" placeholder="百度一下 小枫网络">
                            <i class="iconfont .icon-sousuo"></i>
                            <input type="submit">
                        </form>
                    </div>
                </span>
            </div>
            <div class="topbar-right">
                <li class="dropdown dropdown-profile">
                    <a href="javascript:void(0)" data-toggle="dropdown">
                        <img class="img-avatar img-avatar-48 m-r-10 img-avatar-xf" src="<?php echo htmlentities($user['head_portrait']); ?>" alt="<?php echo htmlentities($user['name']); ?>" />
                        <span style="font-size: 1.5em; color: #6d85c1;"> <?php echo htmlentities($user['name']); ?> <span
                                class="caret"></span></span>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-right">
                        <li> <a href="<?php echo url('admin/information/index'); ?>"><i class="mdi mdi-account"></i> 个人信息</a></li>
                        <li> <a href="<?php echo url('admin/password/index'); ?>"><i class="mdi mdi-lock-outline"></i> 修改密码</a> </li>
                        <li> <a href="javascript:void(0)"><i class="mdi mdi-delete"></i> 清空缓存</a></li>
                        <li class="divider"></li>
                        <li> <a href="<?php echo url('admin/tuichu/index'); ?>"><i class="mdi mdi-logout-variant"></i>退出登录</a> </li>
                    </ul>
                </li>
                <!-- 联系QQ -->
                <a class="lianxiqq" href="http://wpa.qq.com/msgrd?v=3&uin=<?php echo htmlentities($user['qq']); ?>&site=qq&menu=yes"
                    target="_blank">
                    <img src="/admin/assets/images/QQ-xf.png" alt="联系QQ">
                </a>
            </div>
        </div>
    </nav>
</header>
            <!--End 头部信息-->
            <!--页面主要内容-->
            <main class="lyear-layout-content">
                <div class="container-fluid">
                    <!-- 留言列表 -->
                    <form action="<?php echo url('admin/message/deletes'); ?>" method="post" class="edit-form" id="forms">
                    <div class="col-md-12">
                        <div class="card-body xf_mimic_outer">
                            <div class="card-toolbar clearfix">
                                <div class="toolbar-btn-action">
                                    <a class="btn btn-warning" id='cekall' href="javascript:;" style="background-color: #faa64b;"><i class="mdi mdi-check"></i>保存</a>
                                    <a class="btn btn-danger" onclick="gtdie()" href="javascript:;"><i class="mdi mdi-window-close"></i>删除</a>
                                </div>
                            </div>
                            <div class="table-responsive">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr class="title_font" style="color: var(--text-a-hover);">
                                            <th>
                                                <label class="lyear-checkbox checkbox-primary">
                                                    <input type="checkbox" id="check-all"><span></span>
                                                </label>
                                            </th>
                                            <th>编号</th>
                                            <th>名称</th>
                                            <th>QQ邮箱</th>
                                            <th>留言</th>
                                            <th>留言日期</th>
                                            <th>操作</th>
                                        </tr>
                                    </thead>
                                    <tbody style="font-size: 1.1em;">
                                        <?php if(is_array($msg) || $msg instanceof \think\Collection || $msg instanceof \think\Paginator): $i = 0; $__LIST__ = $msg;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?>
                                            <tr>
                                                <td>
                                                    <label class="lyear-checkbox checkbox-primary">
                                                        <input type="checkbox" name="ids[]" value="<?php echo htmlentities($v['id']); ?>"><span></span>
                                                    </label>
                                                </td>
                                                <td><?php echo htmlentities($v['id']); ?></td>
                                                <td><?php echo htmlentities($v['name']); ?></td>
                                                <td><?php echo htmlentities($v['email']); ?></td>
                                                <td><?php echo htmlentities($v['msg']); ?></td>
                                                <td><?php echo htmlentities(date('Y-m-d H:i:s',!is_numeric($v['addtime'])? strtotime($v['addtime']) : $v['addtime'])); ?></td>
                                                <td>
                                                    <div class="btn-group">
                                                        <a class="btn btn-xs btn-default" onclick="OpenDel('<?php echo htmlentities($v['id']); ?>')" href="javascript:;" title=""
                                                            data-toggle="tooltip" data-original-title="删除"><i class="mdi mdi-window-close"></i></a>
                                                    </div>
                                                </td>
                                            </tr>
                                        <?php endforeach; endif; else: echo "" ;endif; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    </form>
                    <!-- 底部版权 -->
                    <div class="col-md-12">
    <p class="admin_footer"><?php echo htmlentities(htmlspecialchars_decode($system['copyright'])); ?> <a href="<?php echo htmlentities($system['siteurl']); ?>" target="_blank" rel="noopener noreferrer"><?php echo htmlentities($system['sitename']); ?></a> All rights reserved.</p>
    <p class="admin_footer">开源地址：<a href="https://gitee.com/xfwlclub/nitai4" target="_blank" rel="noopener noreferrer">gitee</a></p>
</div>
                </div>
            </main>
            <!--End 页面主要内容-->
        </div>
    </div>
    <script type="text/javascript" src="/assets/js/script.js"></script>
    <script type="text/javascript" src="/admin/js/jquery.min.js_3.1.5.js"></script>r
    <script type="text/javascript" src="/admin/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="/admin/js/perfect-scrollbar.min.js"></script>
    <script type="text/javascript" src="/admin/js/main.min.js"></script>
    <script src="/assets/js/fireworks.js"></script>
    <script type="text/javascript">
        // 1、全选和取消全选做法：让下面所有复选框的 checked属性（选中状态）跟随全选按钮即可
        // 获取元素，获取全选按钮和下面小的复选框
        var cekall = document.getElementById('cekall');
        var inp = document.querySelector('tbody').getElementsByTagName('input');
        // 注册事件
        cekall.onclick = function(){
            console.log(this.checked);
            for(var i=0; i< inp.length; i++){
                inp[i].checked = true;
            }
        }
        for(var i = 0; i<inp.length; i++){
            inp[i].onclick = function(){
                var flag = true;
                for(var i =0; i<inp.length; i++){
                    if(!inp[i].checked){
                        flag = false;
                        }
                    }
                cekall.checked = flag;
            }
        }
        function OpenDel(id){
            if (confirm("确定要删除吗？")) {
                $.post("<?php echo url('admin/message/del'); ?>",{id : id},function(ret){
                    if(ret.status == 200){
                        alert(ret.msg);
                        window.location.reload();
                    }else{
                        alert(ret.msg)
                    }
                },'json');
            }
        }
        function gtdie(){
            $("#forms").submit();
        } 
    </script>
</body>

</html>