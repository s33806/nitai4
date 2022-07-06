<?php /*a:4:{s:61:"/www/wwwroot/nitai4.xfwl.club/app/admin/view/basic/index.html";i:1655666296;s:60:"/www/wwwroot/nitai4.xfwl.club/app/admin/view/public/nav.html";i:1655573114;s:63:"/www/wwwroot/nitai4.xfwl.club/app/admin/view/public/header.html";i:1655573114;s:63:"/www/wwwroot/nitai4.xfwl.club/app/admin/view/public/footer.html";i:1655573114;}*/ ?>
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
    <title>基础设置 - <?php echo htmlentities($system['sitename']); ?>后台管理系统</title>
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

                    <div class="col-lg-12">
                        <div class="card xf_mimic_outer">
                            <ul class="nav nav-tabs page-tabs">
                                <li class="active"> <a href="#!" style="font-size: 1.3em;">基础设置</a></li>
                                <li style="margin-top: -18px;">
                                    <div class="underscore" style="margin: 15px; width: 10%;"><span></span></div>
                                </li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane active">
                                    <form action="<?php echo url('admin/basic/forms'); ?>" enctype="multipart/form-data" method="post" class="edit-form">
                                        <div class="form-group">
                                            <label for="web_site_title" class="title_font">网站名称</label>
                                            <input class="form-control" type="text" id="web_site_title" name="sitename" value="<?php echo htmlentities($system['sitename']); ?>" placeholder="请输入站点标题">
                                            <small class="help-block">网站主标题</small>
                                        </div>
                                        <div class="form-group">
                                            <label for="web_site_keywords" class="title_font">站点关键词</label>
                                            <input class="form-control" type="text" id="web_site_keywords" name="keywords" value="<?php echo htmlentities($system['keywords']); ?>"
                                                placeholder="请输入站点关键词">
                                            <small class="help-block">网站搜索引擎关键字（用英文的","隔开）</small>
                                        </div>
                                        <div class="form-group">
                                            <label for="web_site_description" class="title_font">站点描述</label>
                                            <textarea class="form-control" id="web_site_description" rows="5" name="description" placeholder="请输入站点描述"><?php echo htmlentities($system['description']); ?></textarea>
                                            <small class="help-block">网站描述，有利于搜索引擎抓取相关信息</small>
                                        </div>
                                        <div class="form-group">
                                            <label for="web_site_logo" class="title_font">网站ico图标</label>
                                            <div class="input-group">
                                                <input type="file" onchange="getFilePath()" style="filter:alpha(opacity=0);opacity:0; 0;height: 0;" name="image" id="file">
                                                <input class="form-control" type="text" id="site_logo" name="site_logo" value="<?php echo htmlentities($system['site_logo']); ?>" placeholder="请选择网站ico图标">
                                                <div class="input-group-btn">
                                                    <button class="btn btn-purple" onclick="selectFile()" type="button">上传图片</button>
                                                </div>
                                            </div>
                                            <small class="help-block">用于展示网站个性的缩略logo标志</small>
                                        </div>
                                        <div class="form-group">
                                            <label for="web_site_time" class="title_font">建站时间</label>
                                            <input class="form-control js-datepicker m-b-10" type="text" id="example-datepicker" name="station_establishment_time" placeholder="yyyy-mm-dd" value="<?php echo htmlentities($system['station_establishment_time']); ?>" data-date-format="yyyy-mm-dd">
                                            <small class="help-block">时间格式：2022-06-18</small>
                                        </div>
                                        <div class="form-group">
                                            <label for="web_site_icp" class="title_font">备案信息</label>
                                            <input class="form-control" type="text" id="web_site_icp" name="recordno" value="<?php echo htmlentities($system['recordno']); ?>" placeholder="请输入网站备案号">
                                            <small class="help-block">没有备案可不用输入</small>
                                        </div>
                                        <div class="form-group">
                                            <label for="web_site_title_2" class="title_font">首页展示标题</label>
                                            <input class="form-control" type="text" id="web_site_title" name="site_title" value="<?php echo htmlentities($system['site_title']); ?>" placeholder="请输入站点副标题">
                                            <small class="help-block">只能输入英文,数字,符号并且不能超过10个字符</small>
                                        </div>
                                        <div class="form-group">
                                            <label for="web_site_music" class="title_font">获取播放器KEY</label>
                                            <input class="form-control" type="text" id="web_site_music" name="site_music" value="<?php echo htmlentities($system['site_music']); ?>" placeholder="请填写播放器KEY">
                                            <small class="help-block">音乐播放器：<a href="https://music.xfyun.club"
                                                    target="_blank"
                                                    rel="noopener noreferrer">https://music.xfyun.club</a></small>
                                        </div>
                                        <div class="form-group">
                                            <label for="web_siteurl" class="title_font">网站链接</label>
                                            <input class="form-control" type="text" id="web_siteurl" name="siteurl" value="<?php echo htmlentities($system['siteurl']); ?>" placeholder="QQ群">
                                            <small class="help-block">本站域名<b>记得加http://</b></small>
                                        </div>
                                        <div class="form-group">
                                            <label for="web_copyright" class="title_font">版权</label>
                                            <input class="form-control" type="text" id="web_copyright" name="copyright" value="<?php echo htmlentities($system['copyright']); ?>" placeholder="QQ群">
                                        </div>
                                        <div class="form-group">
                                            <label class="btn-block title_font" for="web_site_status">站点开关</label>
                                            <label class="lyear-switch switch-solid switch-purple">
                                                <input type="checkbox" name="site_status" value="1" <?php if($system['site_status'] == '1'): ?> checked="checked"<?php endif; ?>>
                                                <span></span>
                                            </label>
                                            <small class="help-block">站点关闭后将不能访问，后台可正常登录</small>
                                        </div>
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-purple m-r-5">提 交</button>
                                        </div>
                                    </form>
                                </div>
                            </div>

                        </div>
                    </div>
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

    <script src="/assets/js/fireworks.js"></script>
    <script type="text/javascript" src="/admin/js/jquery.min.js"></script>
    <script type="text/javascript" src="/admin/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="/admin/js/perfect-scrollbar.min.js"></script>
    <!--时间选择插件-->
    <script src="/admin/js/bootstrap-datetimepicker/moment.min.js"></script>
    <script src="/admin/js/bootstrap-datetimepicker/bootstrap-datetimepicker.min.js"></script>
    <script src="/admin/js/bootstrap-datetimepicker/locale/zh-cn.js"></script>
    <!--日期选择插件-->
    <script src="/admin/js/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
    <script src="/admin/js/bootstrap-datepicker/locales/bootstrap-datepicker.zh-CN.min.js"></script>
    <script type="text/javascript" src="/admin/js/main.min.js"></script>
    <script type="text/javascript">
        // 单独选择年份
        jQuery('#example-datepicker-year').each(function () {
            var $input = jQuery(this);
            $input.datepicker({
                startView: 'decade',
                endView: 'decade',
                maxViewMode: 'decade',
                minViewMode: 'decade',
                weekStart: 1,
                autoclose: true,
                todayHighlight: true,
                language: 'zh-CN',
            });
        });
        // 单独选择月份
        jQuery('#example-datepicker-month').each(function () {
            var $input = jQuery(this);
            $input.datepicker({
                startView: 'month',
                endView: 'month',
                maxViewMode: 'year',
                minViewMode: 'year',
                weekStart: 1,
                autoclose: true,
                todayHighlight: true,
                language: 'zh-CN',
            });
        });
        function selectFile(){  
            $("#file").trigger("click");  
        }  
        function getFilePath(){  
           var site_logo = $("#file").val();  
           $("#site_logo").val(site_logo);
        }  
    </script>
</body>

</html>