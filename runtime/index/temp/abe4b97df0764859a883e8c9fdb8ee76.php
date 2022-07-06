<?php /*a:1:{s:61:"/www/wwwroot/nitai4.xfwl.club/app/index/view/index/index.html";i:1655665056;}*/ ?>
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
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
    <meta name="viewport" content="initial-scale=1, width=device-width, user-scalable=0, maximum-scale=1">
    <title><?php echo htmlentities($system['sitename']); ?>-个人引导页</title>
    <meta name="keywords" content="<?php echo htmlentities($system['keywords']); ?>">
    <meta name="description" content="<?php echo htmlentities($system['description']); ?>">
    <meta name="author" content="小枫QQ1809185784">
    <link rel="shortcut icon" href="<?php echo htmlentities($system['site_logo']); ?>" type="image/x-icon">
    <link rel="stylesheet" href="/static/css/main.css">
    <link rel="stylesheet" href="/static/css/font.css">
    <link rel="stylesheet" href="/static/css/style.css">
    <!-- 如果这些插件库某天失效了，可以尝试把插件库存放到自己的cdn里（不建议存放本地） -->
    <script src="https://cdn.staticfile.org/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.staticfile.org/axios/0.19.2/axios.min.js"></script>
    <script src="https://cdn.staticfile.org/dayjs/1.8.21/dayjs.min.js"></script>
    <script src="https://npm.elemecdn.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://npm.elemecdn.com/dark-mode-switcheroo/dist/dark-mode.min.js"></script>
</head>

<body>
    <div class="xf_load"></div>
    <svg class="xf_triangle" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="420px"
        height="403px" style="position: absolute; top: -135px; left: -120px;">
        <defs>
            <filter filterUnits="userSpaceOnUse" id="Filter_0" x="0px" y="0px" width="420px" height="403px">
                <feOffset in="SourceAlpha" dx="6.691" dy="7.431" />
                <feGaussianBlur result="blurOut" stdDeviation="3.606" />
                <feFlood flood-color="rgb(220, 220, 220)" result="floodOut" />
                <feComposite operator="atop" in="floodOut" in2="blurOut" />
                <feComponentTransfer>
                    <feFuncA type="linear" slope="1" />
                </feComponentTransfer>
                <feMerge>
                    <feMergeNode />
                    <feMergeNode in="SourceGraphic" />
                </feMerge>
            </filter>
        </defs>
        <g filter="url(#Filter_0)">
            <path fill-rule="evenodd" fill="rgb(235, 236, 240)"
                d="M399.535,130.239 L113.067,382.877 L19.129,19.632 L399.535,130.239 Z" style="transition: all .2s;" />
        </g>
    </svg>
    <main class="core tow_core three_core">
        <header class="xf_hd">
            <!-- 隐藏H1标题利于网站seo优化 -->
            <h1 style="display: none;"><?php echo htmlentities($system['sitename']); ?></h1>
            <h2><?php echo htmlentities($system['site_title']); ?></h2>
        </header>
        <section class="xf_content">
            <nav class="xf_nav xf_mimic_outer">
                <div class="xf_center_box">
                    <div class="Certification"></div>
                    <div class="xf_tx" data-tip="流氓，不要碰我啊！！！">
                        <!-- 质感效果（图片已压缩勿动） -->
                        <img src="https://vkceyugu.cdn.bspapp.com/VKCEYUGU-dec470b0-fed6-46e5-be53-ec85fadc01be/5b4bf217-52e8-4f39-9df5-e3ceb0b2282a.png">
                        <!-- 如果图片失效请切换本地路径 -->
                        <!-- <img src="static/images/texture.png"> -->
                        <!-- 这里替换头像 -->
                        <img class="xf_mimic_outer" src="<?php echo htmlentities($user['head_portrait']); ?>" alt="头像">
                    </div>
                    <ul class="xf_name">
                        <li class="xf_mimic_outer hello">Good morning</li>
                        <li class="xf_mimic_outer"><?php echo htmlentities($user['home_page_name']); ?></li>
                        <li class="xf_mimic_outer address">吉安市 高温 99℃ 低温 -99℃</li>
                    </ul>
                    <div class="clock xf_mimic_outer">
                        <div class="hand hours"></div>
                        <div class="hand minutes"></div>
                        <div class="hand seconds"></div>
                        <div class="point"></div>
                        <div class="marker">
                            <span class="marker__1"></span>
                            <span class="marker__2"></span>
                            <span class="marker__3"></span>
                            <span class="marker__4"></span>
                        </div>
                    </div>
                </div>
            </nav>
            <div class="xf_big_box">
                <div class="xf_box_left">
                    <div class="segmented-control xf_mimic_outer">
                        <input type="radio" name="radio2" value="3" id="tab-1" checked="">
                        <label for="tab-1" class="segmented-control__1 info">
                            <p>关于</p>
                        </label>
                        <input type="radio" name="radio2" value="4" id="tab-2">
                        <label for="tab-2" class="segmented-control__2 info">
                            <p>信息</p>
                        </label>
                        <input type="radio" name="radio2" value="5" id="tab-3">
                        <label for="tab-3" class="segmented-control__3 info">
                            <p>留言</p>
                        </label>
                        <div class="segmented-control__color"></div>
                    </div>
                    <div class="xf_Show_box">
                        <div class="menu_1 menu_2 xf_text xf_mimic_internal">
                            <p id="xf_typewriters"></p>
                        </div>
                        <div class="menu_1 xf_information">
                            <div class="xf_name_age">
                                <h3 class="xf_mimic_outer">
                                    <span><i class="iconfont">&#xe605;</i><strong>姓名：</strong><?php echo htmlentities($user['name']); ?></span>
                                </h3>
                                <h3 class="xf_mimic_outer">
                                    <span><i class="iconfont">&#xe6d8;</i><strong>年龄：</strong><?php echo htmlentities($user['age']); ?>岁</span>
                                </h3>
                            </div>
                            <div class="xf_area_like">
                                <h3 class="xf_mimic_outer">
                                    <span><i
                                            class="iconfont">&#xe64b;</i><strong>坐标：</strong><?php echo htmlentities($user['coordinate']); ?></span>
                                </h3>
                                <h3 class="xf_mimic_outer">
                                    <span><i class="iconfont">&#xe8c6;</i><strong>爱好：</strong><?php echo htmlentities($user['hobby']); ?></span>
                                </h3>
                            </div>
                        </div>
                        <form action="<?php echo url('index/index/forms'); ?>" method="post"
                            class="menu_1 xf_message xf_mimic_outer">
                            <div class="xf_nama_QQ">
                                <input type="text" id="xf_inpname" name="name" tabindex="1" placeholder="你的昵称"
                                    autocomplete="off">
                                <input type="email" id="xf_inpemail" name="email" tabindex="2" placeholder="QQ邮箱"
                                    autocomplete="off">
                            </div>
                            <textarea class="xf_inpmessage" name="msg" rows="4" cols="50" placeholder="来了就不要留下遗憾！"
                                autocomplete="off" maxlength="20"
                                onkeyup="value=value.replace(/[^\a-\z\A-\Z0-9\u4E00-\u9FA5\.\,\?\。\，\-\——\;\！\!\+\$]/g,'')"></textarea>
                            <div class="controls">
                                <div>
                                    <span class="useCount" id="useCount">0</span>
                                    <span>/</span>
                                    <span>20</span>
                                </div>
                            </div>
                            <span class="xf_sryzm">输入验证码：</span>
                            <input class="xf_verify xf_mimic_internal" name="verify" type="text" autocomplete="off"
                                maxlength="6" onkeyup="value=value.replace(/[/W]/g,'')"
                                onbeforepaste="clipboardData.setData('text',clipboardData.getData('text').replace(/[^/d]/g,''))">
                            <img class="img-yanzheng" style="margin-left: 10px; width: 100px; height: 30px;"
                                src="<?php echo url('index/Friend/captcha'); ?>"
                                onclick="javascript:this.src=this.src+'?time='+Math.random()" />
                            <input class="xf_submit" type="submit" value="提 交">
                        </form>
                    </div>
                </div>
                <div class="xf_box_right xf_mimic_outer">
                    <div class="xf_mes_list">
                        <h3 class="xf_mimic_outer">留言列表</h3>
                        <ul class="leaves">
                            <?php if(is_array($msg) || $msg instanceof \think\Collection || $msg instanceof \think\Paginator): $i = 0; $__LIST__ = $msg;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?>
                            <li>
                                <div class="xf_sm_box xf_mimic_internal">
                                    <img src="https://q2.qlogo.cn/headimg_dl?dst_uin=<?php echo htmlentities($v['qq']); ?>&spec=100" alt="头像"
                                        id="ha">
                                    <span><?php echo htmlentities($v['name']); ?></span>
                                    <span><?php echo htmlentities(date('Y-m-d',!is_numeric($v['addtime'])? strtotime($v['addtime']) : $v['addtime'])); ?></span>
                                    <p><?php echo htmlentities($v['msg']); ?></p>
                                </div>
                            </li>
                            <?php endforeach; endif; else: echo "" ;endif; ?>
                        </ul>
                    </div>
                    <div class="xf_music_box">
                        <div class="xf_QQ_wx">
                            <a data-tip="快来加我的QQ吧！" href="http://wpa.qq.com/msgrd?v=3&uin=1809185784&site=qq&menu=yes"
                                target="_blank" rel="noopener noreferrer" alt="QQ" target="_blank">
                                <span class="xf_mimic_outer">
                                    <img src="assets/images/QQ-pic.png">
                                </span>
                            </a>
                            <a class="my-wx" data-tip="微信也是可以的噢~" href="javascript:;" rel="noopener noreferrer">
                                <span class="xf_mimic_outer" alt="微信">
                                    <img src="assets/images/WX-pic.png">
                                </span>
                            </a>
                            <a data-tip="bilibili~" href="https://space.bilibili.com/349762020?spm_id_from=333.1007.0.0"
                                rel="noopener noreferrer" target="_blank">
                                <span class="xf_mimic_outer" alt="bilibili">
                                    <img src="assets/images/bilibili.png">
                                </span>
                            </a>
                        </div>
                        <!-- 音乐播放器 https://music.xfyun.club -->
                        <div class="xf_mimic_outer" id="music" key="<?php echo htmlentities($system['site_music']); ?>"
                            api="https://music.xfyun.club">
                        </div>
                    </div>
                </div>
            </div>
            <div class="xf_Skill xf_mimic_outer technology">
                <div class="xf_outs">
                    <h2>Skill/专业技能</h2>
                    <div class="underscore"><span></span></div>
                    <ul class="xf_technology xf_mimic_internal">
                        <?php if(is_array($elements) || $elements instanceof \think\Collection || $elements instanceof \think\Paginator): $i = 0; $__LIST__ = $elements;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?>
                        <li>
                            <p class="xf_mimic_outer"><?php echo htmlentities($v['name']); ?></p>
                            <div data-tip="<?php echo htmlentities($v['evaluate']); ?>" class="xf_progress xf_mimic_outer">
                                <div class="xf_mimic_outer" style="width: <?php echo htmlentities($v['proficiency']); ?>;"></div>
                            </div>
                        </li>
                        <?php endforeach; endif; else: echo "" ;endif; ?>
                    </ul>
                </div>
            </div>
            <div class="xf_site xf_mimic_outer site">
                <div class="xf_outs">
                    <h2>site/旗下站点</h2>
                    <div class="underscore"><span></span></div>
                    <div class="xf_site_bigbox">
                        <?php if(is_array($website) || $website instanceof \think\Collection || $website instanceof \think\Paginator): $i = 0; $__LIST__ = $website;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?>
                        <a href="<?php echo htmlentities($v['url']); ?>" target="_blank" rel="noopener noreferrer"><?php echo htmlentities($v['name']); ?></a>
                        <?php endforeach; endif; else: echo "" ;endif; ?>
                    </div>
                </div>
            </div>
            <div class="xf_server_inf">
                <div class="xf_cpu xf_mimic_outer">
                    <h3>CPU / 处理器使用率</h3>
                    <div class="underscore" style="margin: 15px"><span></span></div>
                    <div class="xf_usage xf_mimic_outer">
                        <span><?php echo htmlentities($cpufree['us']); ?>%</span>
                        <div class="hw_progress xf_mimic_internal">
                            <div class="xf_mimic_internal" style="width: <?php echo htmlentities($cpufree['us']); ?>%;"></div>
                        </div>
                    </div>
                </div>
                <div class="xf_mem xf_mimic_outer">
                    <h3>MEM / 内存使用率</h3>
                    <div class="underscore" style="margin: 15px"><span></span></div>
                    <div class="xf_usage xf_mimic_outer">
                        <span><?php echo htmlentities($cpufree['sy']); ?>%</span>
                        <div class="hw_progress xf_mimic_internal">
                            <div class="xf_mimic_internal" style="width: <?php echo htmlentities($cpufree['sy']); ?>%;"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="xf_friend xf_mimic_outer">
                <div class="xf_outs">
                    <h3>友情链接：</h3>
                    <?php if(is_array($hezuo) || $hezuo instanceof \think\Collection || $hezuo instanceof \think\Paginator): $i = 0; $__LIST__ = $hezuo;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?>
                    <span>
                        <a href="<?php echo htmlentities($v['web_url']); ?>" target="_blank" data-tip="<?php echo htmlentities($v['web_introduce']); ?>"
                            rel="noopener noreferrer">
                            <img src="https://www.xfwl.club/favicon.ico" alt="<?php echo htmlentities($v['web_name']); ?>"><?php echo htmlentities($v['web_name']); ?></a>
                    </span>
                    <?php endforeach; endif; else: echo "" ;endif; ?>
                </div>
            </div>
        </section>
        <footer class="xf_mimic_outer">
            <p><?php echo htmlentities(htmlspecialchars_decode($system['copyright'])); ?> <a href="<?php echo htmlentities($system['siteurl']); ?>" target="_blank"
                    rel="noopener noreferrer"><?php echo htmlentities($system['sitename']); ?></a>&nbsp;<span>本站已安全运行<b id="xf_time"
                        style="display:none;">0</b><b id="xf_times">1</b>天</span></p>
            <p><img src="/assets/images/filing.png" alt="备案ico"><a href="http://beian.miit.gov.cn/" target="_blank"
                    rel="noopener noreferrer"><?php echo htmlentities($system['recordno']); ?></a></p>
            <!-- 希望大家可以把他留下😊🧡 -->
            <!-- 开源地址：https://gitee.com/xfwlclub/nitai4 -->
            <p>开源地址：<a href="https://gitee.com/xfwlclub/nitai4" target="_blank" rel="noopener noreferrer">gitee</a></p>
        </footer>
    </main>
    <div class="wx_picture">
        <img src="<?php echo htmlentities($user['wx']); ?>" alt="我的微信">
    </div>
    <div id="xf_at_night" class="toggle xf_mimic_outer iconfont dark-mode-toggle btn btn-dark p-1" data-tip="切换主题">
        <span><i id="daytime"></i></span>
        <span><i id="night"></i></span>
    </div>
    <div id="xf_friend_link" class="xf_mimic_outer iconfont" data-tip="添加友链" onclick="my_friends()">
        <span>&#xe726;</span>
    </div>
    <div id="xf_GoTop" class="mytooltip xf_mimic_outer iconfont" data-tip="返回顶部"><span>&#xe62c;</span></div>
    <script id="xplayer" src="/assets/js/player.js"></script>
    <script src="/static/js/index.js"></script>
    <script src="/static/js/script.js"></script>
    <script src="/static/js/fireworks.js"></script>
    <script type="text/javascript">
        function openwx() {
            if ($(".wx_picture").is(":hidden")) {
                $(".wx_picture").show();
            } else {
                $(".wx_picture").hide();
            }

        }
        (function () {
            var s1 = "<?php echo htmlentities($system['station_establishment_time']); ?>";
            s1 = new Date(s1.replace(/-/g, "/"));
            s2 = new Date();
            var days = s2.getTime() - s1.getTime();
            var number_of_days = parseInt(days / (1000 * 60 * 60 * 24));
            document.getElementById('xf_times').innerHTML = number_of_days;
            const container = document.getElementById('xf_typewriters')
            const data = "<?php echo htmlentities($user['introduce']); ?>".split('')
            let index = 0
            function writing() {
                if (index < data.length) {
                    container.innerHTML += data[index++]
                    let timer = setTimeout(writing, 120)
                    console.log(timer)
                }
            }
            writing()
        })();
        $(window).scroll(function () {
            var sc = $(window).scrollTop();
            var rwidth = $(window).width()
            if (sc > 0) {
                $("#xf_GoTop").css("display", "block");
            } else {
                $("#xf_GoTop").css("display", "none");
            }
        })
        $("#xf_GoTop").click(function () {
            var sc = $(window).scrollTop();
            $('body,html').animate({
                scrollTop: 0
            }, 500);
        })
        var dark_mode = function () {
            window.darkMode.init({
                toggle: document.querySelector(".dark-mode-toggle"),
                classes: {
                    light: "light",
                    dark: "dark",
                },
                default: "light",
                storageKey: "example_dark_mode_pref",
                onInit: function (e) {
                    e.style.visibility = "visible";
                },
                onChange: function (t) {
                    console.log("启动昼夜模式：" + t);
                }
            });
        }
        dark_mode();
        $(function () {
            $(".my-wx").eq(0).click(function () {
                if ($('.wx_picture').is(':hidden')) {
                    $(".wx_picture").fadeIn(1000).show();
                } else {
                    $(".wx_picture").hide(0);
                }
            });
            $(document).click(function (event) {
                var _con = $('.my-wx');
                if (!_con.is(event.target) && _con.has(event.target).length === 0) {
                    $('.wx_picture').hide(0);
                }
            });
        })
        function my_friends() {
            window.open("<?php echo url('index/Friend/index'); ?>");
        }
    </script>
</body>

</html>