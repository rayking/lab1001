<?php
$seotitle = 'less动态样式环境';
$description = 'test';
if($intask){
	return;
	}
chdir('../../');


require_once './inc/header.php';
 ?>
<h1>让apache支持shtml</h1>

<h3>什么是SSI？ </h3>
<p>SSI是英文Server Side Includes的缩写，翻译成中文就是服务器端包含的意思。从技术角度上说，SSI就是在HTML文件中，可以通过注释行调用的命令或指针。SSI具有强大的功能，只要使用一条简单的SSI命令就可以实现整个网站的内容更新，时间和日期的动态显示，以及执行shell和CGI脚本程序等复杂的功能。</p>
<h3>如何使你的Apache服务器支持SSI？</h3>
<p>
Apache默认是不支持SSI的，需要我们更改httpd.conf来进行配置。我这里以windows平台的Apache 2.0.x为例，打开conf目录下的httpd.conf文件，搜索&ldquo;AddType text/html .shtml&rdquo;，搜索结果：</p>
<p>
# AddType text/html .shtml<br />
# AddOutputFilter INCLUDES .shtml
把这两行前面的#去掉。<br />
<br />

然后搜索&ldquo;Options Indexes FollowSymLinks&rdquo;<br />
在搜索到的那一行后面添加&ldquo; Includes&rdquo;<br />
即将该行改变为 Options Indexes FollowSymLinks Includes<br />
<br />
<br />
保存httpd.conf，重起apache即可。<br />
</p>
<p>到此我们就完成了对Apache SSI的设置。</p>
<?php
require_once './inc/footer.php';
 ?>