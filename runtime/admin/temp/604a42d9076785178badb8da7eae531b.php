<?php /*a:1:{s:61:"/www/wwwroot/nitai4.xfwl.club/app/admin/view/login/index.html";i:1655573744;}*/ ?>
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
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>登陆-<?php echo htmlentities($system['sitename']); ?>后台管理系统</title>
    <link rel="stylesheet" href="/admin/assets/css/main.css">
    <link rel="stylesheet" href="/admin/assets/css/style.css">
    <link rel="shortcut icon" href="https://www.xfwl.club/favicon.ico" type="image/x-icon">
    <script src="https://cdn.staticfile.org/jquery/3.5.1/jquery.min.js"></script>
</head>

<body>
    <!-- 加载动画  -->
    <div class="xf_load"></div>
    <!-- 版心 -->
    <div class="login_core">
        <!-- 主体 -->
        <form action="<?php echo url('admin/login/forms'); ?>" method="post" class="xf_mimic_outer">
            <div class="xf_mimic_outer" data-tip="戳我干嘛~">
                <img src="<?php echo htmlentities($user['head_portrait']); ?>" style="height: 120px;">
            </div>
            <h2><?php echo htmlentities($system['sitename']); ?>-Login</h2>
            <input class="xf_mimic_internal" type="text" name="username" value="" maxlength="6" placeholder="用户名"
                autocomplete="off">
            <input class="xf_mimic_internal" type="password" name="password" value="" placeholder="密码"
                autocomplete="off">
            <!-- <br> -->
            <button class="xf_mimic_outer" type="submit" value="">登 陆</button>
            <p><a href="<?php echo htmlentities($system['siteurl']); ?>">返回首页</a> · <?php echo htmlentities($system['sitename']); ?></p>
        </form>
    </div>
    <script src="https://admin.xfwl.club/fireworks.js"></script>
    <script>
        document.oncontextmenu = new Function("event.returnValue=false;");
        $(window).on('load', function handlePreloader() {
            if ($('.xf_load').length) {
                $('.xf_load').delay(200).fadeOut(500);
            }
        });
    </script>
</body>

</html>