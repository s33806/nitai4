<?php /*a:4:{s:64:"/www/wwwroot/nitai4.xfwl.club/app/admin/view/password/index.html";i:1655573114;s:60:"/www/wwwroot/nitai4.xfwl.club/app/admin/view/public/nav.html";i:1655573114;s:63:"/www/wwwroot/nitai4.xfwl.club/app/admin/view/public/header.html";i:1655573114;s:63:"/www/wwwroot/nitai4.xfwl.club/app/admin/view/public/footer.html";i:1655573114;}*/ ?>
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
    <title>修改密码 - <?php echo htmlentities($system['sitename']); ?>后台管理系统</title>
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
    </style>
</head>

<body>
    <div class="lyear-layout-web">
        <div class="lyear-layout-container">
            <!--左侧导航-->
            <aside class="lyear-layout-sidebar">
    <!-- logo -->
    <div id="logo" class="sidebar-header">
        <a href="https://www.xfwl.club">
            <img src="/admin/assets/images/xf_logo.png" alt="小枫拟态UI4.0" />
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
                <a class="lianxiqq" href="http://wpa.qq.com/msgrd?v=3&uin=1809185784&site=qq&menu=yes"
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
                    <form action="<?php echo url('admin/password/forms'); ?>" enctype="multipart/form-data" method="post" class="edit-form">
                        <!-- 主体 -->
                        <div class="col-lg-12">
                            <!-- 修改头像 -->
                            <div class="card xf_mimic_outer">
                                <div class="card-body">
                                    <div class="edit-avatar">
                                        <input type="file" onchange="getFilePath()" style="filter:alpha(opacity=0);opacity:0; 0;width:0;height: 0;" name="image" id="file">
                                        <img src="<?php echo htmlentities($user['head_portrait']); ?>" id="avatar" alt="admin" class="img-avatar">
                                        <div class="avatar-divider"></div>
                                        <div class="edit-avatar-content">
                                            <button class="btn btn-purple" onclick="selectFile()">修改头像</button>
                                            <p class="m-0">选择一张你喜欢的图片，裁剪后会自动生成264x264大小，上传图片大小不能超过2M。</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- 修改密码 -->
                            <div class="card xf_mimic_outer">
                                <div class="card-body">
                                        <div class="form-group">
                                            <label for="old-password" class="title_font">旧密码</label>
                                            <input type="password" class="form-control xf_mimic_internal" name="oldpwd"
                                                id="old-password" placeholder="输入账号的原登录密码">
                                        </div>
                                        <div class="form-group">
                                            <label for="new-password" class="title_font">新密码</label>
                                            <input type="password" class="form-control xf_mimic_internal" id="new-password" placeholder="输入新的密码">
                                        </div>
                                        <div class="form-group">
                                            <label for="confirm-password" class="title_font">确认新密码</label>
                                            <input type="password" class="form-control xf_mimic_internal" name="password" id="confirm-password" placeholder="请输入确认新密码">
                                        </div>
                                        <button type="submit" class="btn btn-warning">提 交</button>
                                </div>
                            </div>
                        </div>
                    </form>
                    <!-- 底部版权 -->
                    <div class="col-md-12">
    <p class="admin_footer">Copyright © 2022 <a href="https://www.xfwl.club" target="_blank" rel="noopener noreferrer">小枫网络</a> All rights reserved.</p>
    <p class="admin_footer">开源地址：<a href="https://gitee.com/xfwlclub/nitai4" target="_blank" rel="noopener noreferrer">gitee</a></p>
</div>
                </div>
            </main>
            <!--End 页面主要内容-->
        </div>
    </div>
    <script type="text/javascript" src="/admin/assets/js/script.js"></script>
    <script type="text/javascript" src="/admin/js/jquery.min.js_3.1.5.js"></script>r
    <script type="text/javascript" src="/admin/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="/admin/js/perfect-scrollbar.min.js"></script>
    <script type="text/javascript" src="/admin/js/main.min.js"></script>
    <script src="/assets/js/fireworks.js"></script>
    <script type="text/javascript">
        function selectFile(){  
            $("#file").trigger("click");  
        }  
        function getFilePath(){  
           var site_logo = $("#file").val();  
           $("#avatar").attr('src',site_logo);
        }  
    </script>
</body>

</html>