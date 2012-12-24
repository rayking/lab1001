<?php require('_login.php');
chdir('../');

$seotitle = '后台首页';

require_once './inc/header.php';
 ?>


<strong>欢迎 <?php echo $login->username; ?>,</strong> 
你已经登录 

<a href="logout.php">注销</a><br>
<br>

<ul>
<li><a href="creatcate_catepage.php">生成目录</a><span>根据inc/header.php中的分配配置数组，生成对应的目录和文件</span></li>
</ul>
 <?php
require_once './inc/footer.php';
 ?>
