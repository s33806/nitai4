<?php /*a:4:{s:59:"/www/wwwroot/cs.api-yun.top/app/admin/view/index/index.html";i:1655491784;s:58:"/www/wwwroot/cs.api-yun.top/app/admin/view/public/nav.html";i:1655450636;s:61:"/www/wwwroot/cs.api-yun.top/app/admin/view/public/header.html";i:1655479235;s:61:"/www/wwwroot/cs.api-yun.top/app/admin/view/public/footer.html";i:1655440532;}*/ ?>
<!DOCTYPE html>
<html lang="zh-CN">

<head>
    <meta charset="UTF-8">
    <title><?php echo htmlentities($system['sitename']); ?>后台管理系统</title>
    <meta name="keywords" content="<?php echo htmlentities($system['keywords']); ?>">
    <meta name="description" content="<?php echo htmlentities($system['description']); ?>">
    <meta name="author" content="<?php echo htmlentities($system['author']); ?>">
    <link rel="shortcut icon" href="https://www.xfwl.club/favicon.ico" type="image/ico">
    <link href="/admin/css/bootstrap.min.css" rel="stylesheet">
    <link href="/admin/css/materialdesignicons.min.css" rel="stylesheet">
    <link href="/admin/css/style.min.css" rel="stylesheet">
    <link href="/admin/assets/font/iconfont.css" rel="stylesheet">
    <link href="/admin/assets/css/main.css" rel="stylesheet">
    <link href="/admin/assets/css/style.css" rel="stylesheet">
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

                    <!-- 标题 -->
                    <div class="col-md-12">
                        <div class="alert xf_mimic_outer xf_small_shipei" role="alert"
                            style="position: relative; font-size: 1.8em; color: var(--primary);">
                            <p style="display: inline-block;">你好，<?php echo htmlentities($user['name']); ?>！欢迎使用<?php echo htmlentities($system['sitename']); ?>后台管理系统！</p>
                            <i class="iconfont icon-_weixiao" style="font-size: 1.2em;"></i><small
                                style="position: absolute; right: 30px; bottom: 8px; font-size: 10px; color: #6d85c1;">我所热爱你所热爱的一切!
                                ———— <?php echo htmlentities($user['name']); ?></small>
                        </div>
                    </div>
                    <!-- 合作站点 -->
                    <div class="col-md-5">
                        <div class="card xf_mimic_outer">
                            <div class="card-header" style="position: relative;">
                                <i class="iconfont icon-tuijian" style="position: absolute; color: var(--primary); font-size: 5em; top: -15px; left: 0;"></i>
                                <h4 style="color: var(--primary); font-size: 1.8em; margin-left: 25px; font-weight: 700;">合作站点</h4>
                            </div>
                            <div class="card-body">
                                <?php if(is_array($data) || $data instanceof \think\Collection || $data instanceof \think\Paginator): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?>
                                    <div class="alert xf_mimic_outer" role="alert" style="text-align: center;">
                                        <a href="<?php echo htmlentities($v['url']); ?>" class="alert-link" style="color: <?php echo htmlentities($v['color']); ?>; font-size: 1.2em;" target="_blank"><?php echo htmlentities($v['name']); ?></a>
                                    </div>
                                <?php endforeach; endif; else: echo "" ;endif; ?>
                            </div>
                        </div>
                    </div>
                    <!-- 服务器信息 -->
                    <div class="col-md-7">
                        <div class="card xf_mimic_outer">
                            <div class="card-header" style="position: relative;">
                                <i class="iconfont icon-fuwuqi" style="position: absolute; color: var(--primary); font-size: 2em; top: 13px; left: 15px;"></i>
                                <h4 style="color: var(--primary); font-size: 1.8em; margin-left: 25px; font-weight: 700;">服务器信息</h4>
                            </div>
                            <div class="card-body">
                                <p style="font-size: 1.4em; color: #748bc3;">运行环境：
                                    <span style="margin-left: 50px;"><?php echo htmlentities($info['SERVER_SOFTWARE']); ?></span>
                                </p>
                                <p style="font-size: 1.4em; color: #748bc3;">服务器类型：
                                    <span style="margin-left: 35px;"><?php echo htmlentities($info['PHP_OS']); ?></span>
                                </p>
                                <p style="font-size: 1.4em; color: #748bc3;">PHP版本：
                                    <span style="margin-left: 50px;"><?php echo htmlentities($info['banben']); ?></span>
                                </p>
                                <p style="font-size: 1.4em; color: #748bc3;">当前路径：
                                    <span style="margin-left: 50px;">/admin</span>
                                </p>
                                <p style="font-size: 1.4em; color: var(--primary);">作者：
                                    <a href="http://wpa.qq.com/msgrd?v=3&uin=<?php echo htmlentities($system['qq_group']); ?>&site=qq&menu=yes"
                                        target="_blank" rel="noopener noreferrer">
                                        <span style="margin-left: 80px; color: var(--primary);"><?php echo htmlentities($system['sitename']); ?></span>
                                    </a>
                                </p>
                                <p style="font-size: 1.4em; color: var(--primary);">QQ群:
                                    <a href="https://jq.qq.com/?_wv=1027&k=qUOoYhUD" target="_blank"
                                        rel="noopener noreferrer">
                                        <span style="margin-left: 80px; color: var(--primary);"><?php echo htmlentities($system['qq_group']); ?></span>
                                    </a>
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- 使用率 -->
                    <div class="col-md-7">
                        <div class="card" style="background-color: transparent; box-shadow: none;">
                            <!-- CPU -->
                            <div class="col-md-6 usg_shipei" style="padding-left: 0;">
                                <div class="card xf_mimic_outer admin_usage">
                                    <!-- 标题 -->
                                    <h3>CPU / 处理器使用率</h3>
                                    <!-- 下划线 -->
                                    <div class="underscore" style="margin: 15px 0"><span></span></div>
                                    <!-- 使用率 -->
                                    <div class="xf_usage xf_mimic_outer">
                                        <span><?php echo htmlentities($cpufree['us']); ?>%</span>
                                        <div class="hw_progress xf_mimic_internal">
                                            <div class="xf_mimic_internal" style="width: <?php echo htmlentities($cpufree['us']); ?>%;"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- 内存 -->
                            <div class="col-md-6 usg_shipei">
                                <div class="card xf_mimic_outer admin_usage">
                                    <!-- 标题 -->
                                    <h3>MEM / 内存使用率</h3>
                                    <!-- 下划线 -->
                                    <div class="underscore" style="margin: 15px 0"><span></span></div>
                                    <!-- 使用率 -->
                                    <div class="xf_usage xf_mimic_outer">
                                        <span><?php echo htmlentities($cpufree['sy']); ?>%</span>
                                        <div class="hw_progress xf_mimic_internal">
                                            <div class="xf_mimic_internal" style="width: <?php echo htmlentities($cpufree['sy']); ?>%;"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-7">
                        <div class="card xf_mimic_outer">
                            <div class="alert" role="alert">
                                <p style="color: var( --red); font-weight: 700;">本源码采用GPL3.0开源协议，请勿商用！</p>
                            </div>
                        </div>
                    </div>
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

    <script type="text/javascript" src="/admin/assets/js/script.js"></script>
    <script type="text/javascript" src="/admin/js/jquery.min.js_3.1.5.js"></script>r
    <script type="text/javascript" src="/admin/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="/admin/js/perfect-scrollbar.min.js"></script>
    <script type="text/javascript" src="/admin/js/main.min.js"></script>
    <script src="/static/js/fireworks.js"></script>
</body>

</html>