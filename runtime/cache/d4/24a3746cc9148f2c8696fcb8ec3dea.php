<?php
//000000000000
 exit();?>
a:3:{i:0;a:16:{s:2:"id";i:14;s:11:"category_id";i:2;s:4:"flag";s:9:"recommend";s:5:"title";s:33:"thinkphp api自定义异常处理";s:7:"summary";s:44:"<p>thinkphp api自定义异常处理<br></p>";s:7:"content";s:1032:"<p>1.新建一个异常处理类</p><p><img alt="1583853385(1).jpg" src="/uploads/20200310/be900dc4898c2a6a31f1e3079d17b8f3.jpg" width="401" height="227"><br></p><p>2.重写think\exception\Handle的render方法</p><p><img alt="1583855432(1).jpg" src="/uploads/20200310/ba5f14f69e3d053e5de47efa6e66e307.jpg" width="1069" height="811"><br></p><p>3.修改配置文件</p><p><img alt="1583853569(1).jpg" src="/uploads/20200310/dd7c124af8eea06c01c0484c32e5f867.jpg" width="1071" height="425"><br></p><p>4.新建代码错误异常类</p><p><img alt="1583854763(1).jpg" src="/uploads/20200310/b5bc83c989c3eec7808fc5d4fd1f0da5.jpg" width="450" height="261"><br></p><p>5.修改代码错误异常类的http状态码</p><p><img alt="1583854859(1).jpg" src="/uploads/20200310/725576a103fa400a357de302f48ccc03.jpg" width="988" height="262"><br></p><p>6.如果开启调试模式，应该报出tp框架自带的异常</p><p><img alt="1583854996(1).jpg" src="/uploads/20200310/8893d77b6b32bdc0ee157e9452eb407f.jpg" width="966" height="370"><br></p>";s:5:"thumb";s:54:"/uploads/20200316/2ddc7ac877e7eb149f1424a1f40d5a47.png";s:5:"image";s:54:"/uploads/20200316/2ddc7ac877e7eb149f1424a1f40d5a47.png";s:8:"keywords";s:0:"";s:11:"description";s:0:"";s:5:"views";i:11;s:8:"comments";i:0;s:10:"createtime";i:1583853589;s:10:"updatetime";i:1584359874;s:5:"weigh";i:14;s:6:"status";s:6:"normal";}i:1;a:16:{s:2:"id";i:11;s:11:"category_id";i:4;s:4:"flag";s:9:"recommend";s:5:"title";s:25:"lamp下配置多个项目";s:7:"summary";s:36:"<p>lamp下配置多个项目<br></p>";s:7:"content";s:838:"<p>1.在sites-available中创建两个站点的配置文件aa和bb</p><pre><code>cd /etc/apache2/sites-available

sudo cp  000-default.conf aa.conf
sudo cp  000-default.conf bb.conf<br></code></pre><p>2.修改</p><pre><code>ServerName www.aa.com

ServerAdmin webmaster@localhost
DocumentRoot /var/www/aa<br></code></pre><p style="margin-left: 40px;">bb项目同上</p><p>3.<span style="color: rgb(0, 0, 0); font-size: 16px;">在sites-enabled下建立链接</span></p><pre><code>sudo ln -s /etc/apache2/sites-available/aa.conf /etc/apache2/sites-enabled/aa.conf
sudo ln -s /etc/apache2/sites-available/bb.conf /etc/apache2/sites-enabled/bb.conf<br></code></pre><p>4.重启服务器</p><pre><code>sudo /etc/init.d/apache2 restart<br></code></pre><p>5.在浏览器中访问<a href="http://www.aa.com" rel="nofollow">www.aa.com</a></p>";s:5:"thumb";s:54:"/uploads/20200316/db74b8da42ba4596daf97bf9519a7e7e.jpg";s:5:"image";s:54:"/uploads/20200316/db74b8da42ba4596daf97bf9519a7e7e.jpg";s:8:"keywords";s:0:"";s:11:"description";s:0:"";s:5:"views";i:11;s:8:"comments";i:0;s:10:"createtime";i:1583739482;s:10:"updatetime";i:1584359341;s:5:"weigh";i:11;s:6:"status";s:6:"normal";}i:2;a:16:{s:2:"id";i:10;s:11:"category_id";i:4;s:4:"flag";s:9:"recommend";s:5:"title";s:23:"ubuntu 搭建lamp环境";s:7:"summary";s:30:"<p>ubuntu 搭建lamp环境</p>";s:7:"content";s:2208:"<p>1.安装apche</p><pre><code>sudo apt-get install apache2

&nbsp;&nbsp;在浏览器中输入localhost显示 it works
</code></pre><p>2.安装php7.0</p><pre><code>sudo apt-get install php7.0

&nbsp;&nbsp;php -v 可以查看php版本
</code></pre><p>3.PHP和Apache都安装好后就需要让Apache能够识别解析PHP文件，我们先搜一下有没有适合PHP7的插件，输入命令：</p><pre><code>apt-cache search libapache2-mod-php

sudo apt-get install libapache2-mod-php7.0</code></pre><p>4.切换 cd /var/www/html 授权后 新建test.php,&nbsp;</p><pre><code>chmod -R 777 /var/www/html

vim test.php
&nbsp;&nbsp;编辑：
&nbsp;&nbsp;&nbsp;&nbsp;<!--?php
      phpinfo();</code--></code></pre><p><code>&nbsp; &nbsp; 保存退出，在浏览器中访问 /localhost/test.php</code></p><p><code>5.安装mysql</code></p><pre><code><code>sudo apt-get install mysql-server mysql-client</code></code></pre><p><code>　安装过程中会提示设置root账号的登录密码，输入后选择OK继续安装，查看mysql的版本&nbsp;</code></p><pre><code><code>mysql -v<br></code></code></pre><p><code>6.安装php的MySQL插件</code></p><pre><code><code>sudo apt-get install php7.0-mysql<br></code></code></pre><p><code>7.安装PHP的扩展</code></p><pre><code><code>sudo apt-get install php7.0-gd php7.0-mbstring php7.0-xml<br></code></code></pre><p><code>8.安装composer</code></p><pre><code><code>sudo apt-get install composer<br></code></code></pre><p><code>9.<span style="color: rgb(0, 0, 0); font-size: 18px;">curl 未开启,请先开启mbstring扩展</span></code></p><pre><code><code>sudo apt-get install curl  libcurl4-openssl-dev php7.0-curl<br></code></code></pre><p><code>10。开启权限</code></p><pre><code><code>sudo vim /etc/php/7.0/apache2/php.ini
php.ini当中的
;extension=php_mbstring.dll    （去掉注释）
改成
extension=php_mbstring.dll

;extension=php_curl.dll    （去掉注释）
改成
extension=php_curl.dll<br></code></code></pre><p><code>11.重启服务器</code></p><pre><code><code>sudo /etc/init.d/apache2 restart<br></code></code></pre><p><code>在浏览器中访问localhost/test.php,可以看到curl扩展已安装</code></p>";s:5:"thumb";s:54:"/uploads/20200316/db74b8da42ba4596daf97bf9519a7e7e.jpg";s:5:"image";s:54:"/uploads/20200316/db74b8da42ba4596daf97bf9519a7e7e.jpg";s:8:"keywords";s:0:"";s:11:"description";s:0:"";s:5:"views";i:25;s:8:"comments";i:0;s:10:"createtime";i:1583738036;s:10:"updatetime";i:1584769146;s:5:"weigh";i:10;s:6:"status";s:6:"normal";}}