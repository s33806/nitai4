<?php /*a:4:{s:65:"/www/wwwroot/cs.api-yun.top/app/admin/view/information/index.html";i:1655477312;s:58:"/www/wwwroot/cs.api-yun.top/app/admin/view/public/nav.html";i:1655450636;s:61:"/www/wwwroot/cs.api-yun.top/app/admin/view/public/header.html";i:1655479235;s:61:"/www/wwwroot/cs.api-yun.top/app/admin/view/public/footer.html";i:1655440532;}*/ ?>
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
    <title>我的信息 - <?php echo htmlentities($system['sitename']); ?>后台管理系统</title>
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
                    <!-- 主要信息 -->
                    <div class="col-md-5">
                        <div class="card xf_mimic_outer">
                            <div class="card-header">
                                <h4 style="color: var(--primary); font-size: 1.8em; font-weight: 700;">个人信息</h4>
                            </div>
                            <div class="card-body">
                                <form class="form-horizontal" action="<?php echo url('admin/information/info_forms'); ?>" method="post" enctype="multipart/form-data">
                                    <label class="title_font" for="web_site_avatar">首页头像</label>
                                    <div class="input-group">
                                        <input type="file" onchange="getFilePath()" style="filter:alpha(opacity=0);opacity:0; 0;height: 0;" name="image" id="file">
                                        <input type="text" value="<?php echo htmlentities($user['head_portrait']); ?>" class="form-control" name="head_portrait" id="web_site_avatar"/>
                                        <div class="input-group-btn">
                                            <button onclick="selectFile()" class="btn btn-purple" type="button" style="border-radius: 0 5px 5px 0;">上传图片</button>
                                            <div class="help-block"></div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-xs-12 title_font" for="example-zyname-input">主页名称</label>
                                        <div class="col-xs-12">
                                            <input class="form-control xf_mimic_internal" type="text"
                                                id="example-zyname-input" value="<?php echo htmlentities($user['home_page_name']); ?>" name="home_page_name" placeholder="填写首页名称">
                                            <div class="help-block">首页展示的名称</div>
                                        </div>
                                        <label class="col-xs-12 title_font" for="example-jieshao-input">关于介绍</label>
                                        <div class="col-xs-12">
                                            <textarea class="form-control xf_mimic_internal" id="example-textarea-input-jieshao"
                                                name="introduce" rows="5" placeholder="填写介绍自己的一段话"><?php echo htmlentities($user['introduce']); ?></textarea>
                                            <div class="help-block">写一段介绍自己的话</div>
                                        </div>
                                        <label class="col-xs-12 title_font" for="example-name-input">姓名</label>
                                        <div class="col-xs-12">
                                            <input class="form-control xf_mimic_internal" type="text"
                                                id="example-name-input" value="<?php echo htmlentities($user['name']); ?>" name="name"
                                                placeholder="填写你的姓名">
                                            <div class="help-block">请填写真实名字！</div>
                                        </div>
                                        <label class="col-xs-12 title_font" for="example-age-input">年龄</label>
                                        <div class="col-xs-12">
                                            <input class="form-control xf_mimic_internal" type="text" id="example-age-input"value="<?php echo htmlentities($user['age']); ?>" name="age" placeholder="填写你的年龄"/>
                                            <div class="help-block">请填写真实年龄！</div>
                                        </div>
                                        <label class="col-xs-12 title_font" for="example-coordinate-input">坐标</label>
                                        <div class="col-xs-12">
                                            <input class="form-control xf_mimic_internal" type="text" id="example-coordinate-input" value="<?php echo htmlentities($user['coordinate']); ?>" name="coordinate"placeholder="填写你所在的地区"/>
                                            <div class="help-block">请填写真实坐标！</div>
                                        </div>
                                        <label class="col-xs-12 title_font" for="example-Hobby-input">爱好</label>
                                        <div class="col-xs-12">
                                            <input class="form-control xf_mimic_internal" type="text" id="example-Hobby-input" value="<?php echo htmlentities($user['hobby']); ?>" name="hobby" placeholder="填写你的爱好"/>
                                            <div class="help-block">爱好什么呢</div>
                                        </div>
                                        <label class="col-xs-12 title_font" for="example-QQ-input">联系QQ</label>
                                        <div class="col-xs-12">
                                            <input class="form-control xf_mimic_internal" type="text"
                                                id="example-QQ-input" value="<?php echo htmlentities($user['qq']); ?>" name="qq" placeholder="填写你的QQ号"/>
                                            <div class="help-block" style="color: transparent; margin-top: -13px;">123
                                            </div>
                                        </div>
                                        <label class="col-xs-12 title_font" for="web_site_weixin">微信二维码</label>
                                        <div class="col-xs-12">
                                            <div class="input-group">
                                                <input type="file" onchange="getFilePaths()" style="filter:alpha(opacity=0);opacity:0; 0;height: 0;" name="images" id="files">
                                                <input type="text" class="form-control" name="wx" id="web_site_weixin" value="<?php echo htmlentities($user['wx']); ?>"/>
                                                <div class="input-group-btn">
                                                    <button onclick="selectFiles()" class="btn btn-purple" type="button" style="border-radius: 0 5px 5px 0;">上传图片</button>
                                                    <div class="help-block" style="color: transparent;">123</div>
                                                </div>
                                            </div>
                                        </div>
                                        <label class="col-xs-12 title_font" for="example-bilibili-input">bilibili</label>
                                        <div class="col-xs-12">
                                            <input class="form-control xf_mimic_internal" type="text" id="example-bilibili-input"
                                                value="<?php echo htmlentities($user['bilibili']); ?>" name="bilibili" placeholder="你的bilibili主页"/>
                                            <div class="help-block" style="color: transparent; margin-top: -18px;">123
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-xs-12">
                                            <button class="btn btn-warning" type="submit"><i class="mdi mdi-check"></i>保存</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                    <!-- 专业技能 -->
                    <div class="col-md-7">
                        <div class="card xf_mimic_outer">
                            <div class="card-header">
                                <h4 style="color: var(--primary); font-size: 1.8em; font-weight: 700;">专业技能</h4>
                            </div>
                            <div class="card-body">
                                <form action="<?php echo url('admin/information/elements_forms'); ?>" method="post">
                                    <div class="form-group">
                                        <label for="example-nf-Skill" style="font-size: 1.3em;">你会的技能</label>
                                        <input class="form-control" type="text" id="example-nf-Skill" name="name" placeholder="请输入你的专业技能"/>
                                        <small class="help-block">例如Photoshop</small>
                                    </div>
                                    <div class="form-group">
                                        <label for="example-nf-skilled" style="font-size: 1.3em;">技能的熟练度</label>
                                        <input class="form-control" type="text" id="example-nf-skilled" name="proficiency" placeholder="请输入你对技能的掌握程度" onkeyup="value=value.replace(/[^\%\%\0-9\$]/g,'')" maxlength="4"/>
                                        <small class="help-block">只能输入百分比并且不能超过4个字符</small>
                                    </div>
                                    <div class="form-group">
                                        <label for="example-nf-skilled" style="font-size: 1.3em;">对该技能的评价</label>
                                        <input class="form-control" type="text" id="example-nf-skilled" name="evaluate" placeholder="请输入你对对该技能的评价" />
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control" type="hidden" name="uid" value="<?php echo htmlentities($user['id']); ?>"/>
                                        <button class="btn btn-purple" type="submit">添 加</button>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>

                    <!-- 技能表格 -->
                    <div class="col-md-7">
                        <div class="card-body xf_mimic_outer">
                            <div class="card-toolbar clearfix" style="padding: 5px 0;">
                                <div class="toolbar-btn-action">
                                    <a class="btn btn-warning" href="#!" style="background-color: #faa64b;"><i class="mdi mdi-check"></i>保存</a>
                                </div>
                            </div>
                            <div class="table-responsive">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr class="title_font" style="color: var(--text-a-hover);">
                                            <th>编号</th>
                                            <th>技能名称</th>
                                            <th>熟练程度</th>
                                            <th>评价</th>
                                            <th>操作</th>
                                        </tr>
                                    </thead>
                                    <tbody style="font-size: 1.1em;">
                                        <?php if(is_array($data) || $data instanceof \think\Collection || $data instanceof \think\Paginator): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?>
                                            <tr>
                                                <td><?php echo htmlentities($v['id']); ?></td>
                                                <td><?php echo htmlentities($v['name']); ?></td>
                                                <td><?php echo htmlentities($v['proficiency']); ?></td>
                                                <td><?php echo htmlentities($v['evaluate']); ?></td>
                                                <td>
                                                    <div class="btn-group">
                                                        <a class="btn btn-xs btn-default" onclick="OpenDel('<?php echo htmlentities($v['id']); ?>')" href="javascript:;" title=""  data-toggle="tooltip" data-original-title="删除"><i class="mdi mdi-window-close"></i></a>
                                                    </div>
                                                </td>
                                            </tr>
                                        <?php endforeach; endif; else: echo "" ;endif; ?>
                                    </tbody>
                                </table>
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
    <script src="/assets/js/fireworks.js"></script>
    <script type="text/javascript" src="/admin/assets/js/script.js"></script>
    <script type="text/javascript" src="/admin/js/jquery.min.js_3.1.5.js"></script>r
    <script type="text/javascript" src="/admin/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="/admin/js/perfect-scrollbar.min.js"></script>
    <script type="text/javascript" src="/admin/js/main.min.js"></script>
    <script type="text/javascript">
        function OpenDel(id){
            if (confirm("确定要删除吗？")) {
                $.post("<?php echo url('admin/information/del'); ?>",{id : id},function(ret){
                    if(ret.status == 200){
                        alert(ret.msg);
                        window.location.reload();
                    }else{
                        alert(ret.msg)
                    }
                },'json');
            }
        }
        function selectFile(){  
            $("#file").trigger("click");  
        }  
        function getFilePath(){  
           var site_logo = $("#file").val();  
           $("#web_site_avatar").val(site_logo);
        }  
        function selectFiles(){  
            $("#files").trigger("click");  
        }  
        function getFilePaths(){  
           var web_site_weixin = $("#files").val();  
           $("#web_site_weixin").val(web_site_weixin);
        }  
    </script>
</body>

</html>