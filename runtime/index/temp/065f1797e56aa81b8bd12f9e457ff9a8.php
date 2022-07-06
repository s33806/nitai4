<?php /*a:1:{s:62:"/www/wwwroot/nitai4.xfwl.club/app/index/view/friend/index.html";i:1655658450;}*/ ?>
<!--
拟态UI4.0个人主页设计采用GPL3.0开源协议
博客：www.xfwl.club
作者：小枫
QQ：1809185784
-->
<!DOCTYPE html>
<html lang="zh-CN">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>申请友链-<?php echo htmlentities($system['sitename']); ?></title>
    <meta name="keywords" content="<?php echo htmlentities($system['keywords']); ?>">
    <meta name="description" content="<?php echo htmlentities($system['description']); ?>">
    <meta name="author" content="小枫QQ1809185784">
    <link rel="shortcut icon" href="<?php echo htmlentities($system['site_logo']); ?>" type="image/x-icon">
    <link rel="stylesheet" href="/static/font/iconfont.css">
    <link rel="stylesheet" href="/static/css/friend.css">
    <link rel="stylesheet" href="/static/css/main.css">
    <link rel="stylesheet" href="/static/css/font.css">
    <!-- 如果这些插件库某天失效了，可以尝试把插件库存放到自己的cdn里（不建议存放本地） -->
    <script src="https://cdn.staticfile.org/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://npm.elemecdn.com/sweetalert/dist/sweetalert.min.js"></script>
</head>
<body>
    <div class="xf_load"></div>
    <div class="core">
        <main class="xf_main firend_mimic_outer">
            <div class="xf_biaoti">
                <h1>friend/申请友链</h1>
                <div class="underscore"><span></span></div>
            </div>
            <div class="xf_illustrate">
                <h3 class="firend_mimic_outer" style="margin-top: 10px;">友情链接规范：</h3>
                <ol>
                    <li>添加本站友链或网站已ICP备案优先收录</li>
                    <li>网站名称：<span><?php echo htmlentities($system['sitename']); ?></span></li>
                    <li>网站URL：<?php echo htmlentities($system['siteurl']); ?></li>
                    <li>网站ICO：<?php echo htmlentities($system['site_logo']); ?><small>( ico是用于展示网站个性的缩略logo标志 )</small></li>
                    <li>网站介绍：<?php echo htmlentities($system['description']); ?></li>
                </ol>
            </div>
            <div class="xf_biaodan">
                <form action="<?php echo url('index/Friend/forms'); ?>" method="post" class="xf_form_data">
                    <div class="shipei-1">
                        <input type="text" name="web-name" placeholder="填写网站名称" id="web_name" maxlength="15">
                        <input type="text" name="web-url" placeholder="填写网站URL" id="web_url" maxlength="70">
                        <input type="text" name="web-ico" placeholder="填写网站ICO" id="web_ico">
                        <input type="email" name="web-email" placeholder="填写你的QQ邮箱" id="friend_inpemail" maxlength="50">
                        <textarea name="web-introduce" rows="5" placeholder="填写网站介绍" id="web_introduce_30" onkeyup="value=value.replace(/[^\a-\z\A-\Z0-9\u4E00-\u9FA5\.\,\?\。\，\-\——\;\！\!\+\$]/g,'')" maxlength="60"></textarea>
                    </div>
                    <div class="shipei-2" style="text-align: right;">
                        <div class="controls">
                            <div>
                                <span class="useCount" id="useCount">0</span>
                                <span>/</span>
                                <span style="color: var(--red);">60</span>
                            </div>
                        </div>
                        <div><span class="xf_sryzm">输入验证码：</span>
                        <input class="xf_verify" name="verify" type="text" autocomplete="off" maxlength="6">
                        <img style="width: 100px; height: 30px;" src="<?php echo url('index/Friend/captcha'); ?>" onclick="javascript:this.src=this.src+'?time='+Math.random()"/>
                        <input class="xf_submit" type="submit" value="提 交"></div>
                    </div>
                </form>
            </div>
        </main>
        <!-- 底部版权 -->
        <footer class="firend_mimic_outer">
            <p><?php echo htmlentities(htmlspecialchars_decode($system['copyright'])); ?>  <a href="<?php echo htmlentities($system['siteurl']); ?>" target="_blank" rel="noopener noreferrer"><?php echo htmlentities($system['sitename']); ?></a>&nbsp;<span>本站已安全运行<b id="xf_time" style="display: none;">0</b><b id="xf_times">1</b>天</span></p>
            <p><img src="/static/images/filing.png" alt="备案ico"><a href="http://beian.miit.gov.cn/" target="_blank"
                    rel="noopener noreferrer"><?php echo htmlentities($system['recordno']); ?></a></p>
            <!-- 希望大家可以把他留下😊🧡 -->
            <!-- 开源地址：https://gitee.com/xfwlclub/nitai4 -->
            <p>开源地址：<a href="https://gitee.com/xfwlclub/nitai4" target="_blank" rel="noopener noreferrer">gitee</a></p>
        </footer>
    </div>
    <script src="/static/js/friend.js"></script>
    <script src="/static/js/fireworks.js"></script>
    <script>
            var s1 ="<?php echo htmlentities($system['station_establishment_time']); ?>";
            s1 = new Date(s1.replace(/-/g, "/"));
            s2 = new Date();
            var days = s2.getTime() - s1.getTime();
            var number_of_days = parseInt(days / (1000 * 60 * 60 * 24));
            document.getElementById('xf_times').innerHTML = number_of_days;
    </script>
</body>

</html>