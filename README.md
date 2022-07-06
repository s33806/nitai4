![主图](https://images.gitee.com/uploads/images/2022/0620/142727_a74322db_8353399.png "Mimic UI4.0主图.png")
####  _欢迎使用小枫拟态UI4.0个人引导页【一款完全开源的个人引导页】_ 

作者：小枫

QQ：1809185784

官网：[www.xfwl.club](http://www.xfwl.club)

#### 技术栈
UI：Photoshop

前端：HTML5、CSS3、JavaScript，后台用的光年框架，前台主要用的Maria M. Muñoz的拟态组件，还有部分插件都在下面

后端：PHP，thinkphp6

#### 安装教程

1：PHP版本>7.1即可

2：设置public文件夹为运行目录

3：设置伪静态
```
location / {
	if (!-e $request_filename){
		rewrite  ^(.*)$  /index.php?s=$1  last;   break;
	}
}
```
4：开启exec函数 (默认是禁用的) ，用来获取CPU和内存状态【稳定云用户可忽略】

5：在路径\config\database.php的文件 填写数据库名、数据库用户名、数据库密码

6：导入数据库文件 xiaofeng.sql

后台路径：http://域名/admin/login

账号：admin

密码：123456

音乐播放器地址：https://music.xfyun.club


视频教程：https://www.bilibili.com/video/BV11Y4y1g7pT/

开源地址：https://gitee.com/xfwlclub/nitai4

演示站：https://nitai4.xfwl.club

#### 关于插件

如果哪天某个插件失效了，咱们可以尝试把插件库存放到自己的云储存/服务器里面（不建议存放本地）

jQuery中文官网：https://www.jquery123.com

axios中文官网：http://www.axios-js.com

dayjs中文官网：https://dayjs.fenxianglu.cn

sweetalert官网：https://sweetalert.js.org

dark-mode GitHub：https://github.com/jakejarvis/dark-mode（这个插件需要部署nodejs）

天气API用的是https://api.vvhan.com/api/weather

Maria M. Muñoz的拟态组件：https://codepen.io/myacode/pen/PoqQQNM

#### 技术指导

眼中明月是你吖           QQ3025202721

#### 参与贡献

感谢你们为拟态UI4.0提供赞助支持！

顾陌	   		QQ2102919229

AZHEN        		QQ674992326

阿苏鸭         		QQ791301268

a'ゞ大负豪   		QQ3257085208

顾冷.	   		QQ2254992682

余温	   		QQ1915796466

哲	  		QQ674992326

厘木白	   		QQ3221491481

无名氏		        QQ536915013

Network Security        QQ3149711093

a'ゞ颜辰			QQ2718401418

憨批没心情		QQ3455717167

盛夏			QQ88302714

#### 声明 

1：本源码仅提供于大家学习使用已采用GPL2.0开源协议请勿商用！

2：稳定云服务【www.wdhost.cn】与小枫是合作关系，如机器或者有其他问题请联系稳定云提供商QQ:3578245720。

3：UI图以及前端代码是小枫本人制作，后端部分是找别人制作的（也就是PHP部分）。

4：拟态系列已完结，不再更新！


#### 图片展示
![输入图片说明](https://images.gitee.com/uploads/images/2022/0620/143342_90e910cc_8353399.jpeg "拟态4首页展示1.jpg")
![输入图片说明](https://images.gitee.com/uploads/images/2022/0620/143359_1878a8cc_8353399.jpeg "拟态4首页展示2.jpg")
![输入图片说明](https://images.gitee.com/uploads/images/2022/0620/143412_bf3ec65a_8353399.jpeg "拟态4首页展示3.jpg")
![输入图片说明](https://images.gitee.com/uploads/images/2022/0620/143432_a4eeea03_8353399.jpeg "拟态4首页展示4.jpg")
![输入图片说明](https://images.gitee.com/uploads/images/2022/0620/143443_4817c473_8353399.jpeg "拟态4友链展示.jpg")
![输入图片说明](https://images.gitee.com/uploads/images/2022/0620/143505_d28ed612_8353399.jpeg "登陆.jpg")
![输入图片说明](https://images.gitee.com/uploads/images/2022/0620/143259_fb90ccc1_8353399.jpeg "拟态4后台展示1.jpg")
![输入图片说明](https://images.gitee.com/uploads/images/2022/0620/143456_fb8ddfa3_8353399.jpeg "拟态4后台展示2.jpg")

#### 特技

1.  使用 Readme\_XXX.md 来支持不同的语言，例如 Readme\_en.md, Readme\_zh.md
2.  Gitee 官方博客 [blog.gitee.com](https://blog.gitee.com)
3.  你可以 [https://gitee.com/explore](https://gitee.com/explore) 这个地址来了解 Gitee 上的优秀开源项目
4.  [GVP](https://gitee.com/gvp) 全称是 Gitee 最有价值开源项目，是综合评定出的优秀开源项目
5.  Gitee 官方提供的使用手册 [https://gitee.com/help](https://gitee.com/help)
6.  Gitee 封面人物是一档用来展示 Gitee 会员风采的栏目 [https://gitee.com/gitee-stars/](https://gitee.com/gitee-stars/)
