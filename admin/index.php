<?php require('_login.php');
chdir('../');

$seotitle = '后台首页';
$navdata = 'test';

require_once './inc/header.php';
 ?>


<strong>欢迎 <?php echo $login->username; ?>,</strong> 
你已经登录 

<a href="logout.php">注销</a><br>
<br>

<ul>
<li><a href="creatcate_catepage.php">生成目录</a><span>根据inc/header.php中的分配配置数组，生成对应的目录和文件</span></li>
<li><a href="creatcate_list.php">生成目录首页文章列表</a><span>根据admin/_login_users.php中的的设置，生成栏目文章列表。</span></li>
<li><a href="creatcate_sitemap.php">生成google/baidu的sitemap文件</a><span>在admin/_login_users.php中配置sitemap参数</span></li>
</ul>
 <?php
require_once './inc/footer.php';
 ?>
