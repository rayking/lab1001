<?php require('_login.php');
chdir('../');

$seotitle = '后台首页';

require_once './inc/header.php';
 ?>


<strong>欢迎 <?php echo $login->username; ?>,</strong> 
你已经登录 

<a href="logout.php">注销</a><br />
<br />


<h4>当前的目录结构：</h4>
<span>修改请到inc/header.php更改对应键值</span>

<?php
foreach($documentree as $topkey => $topvalue){
	echo '<h2><a href="'.$SITEURL.$topkey.'">'.$topvalue[0].'</a></h2>';
	
	}
/*foreach($documentree[$cate_name][1] as $key =>$value){
			echo '<h4><a href="'.$SITEURL.$cate_name.'/'.$key.'/">'.$value[0].'</a></h4>'. "\n";
			if($value[1]){
				echo '<ul id="'.$key.'-menu" class="menu">'. "\n";
				foreach($value[1] as $subkey => $subvalue){
					echo '<li'.$item_actives[$subkey.'.php'].'><a href="'.$SITEURL.$cate_name.'/'.$key.'/'.$subkey.'.php">'.$subvalue.'</a></li>'. "\n";
					}
				echo '</ul>'. "\n";
				}
}*/
?>

 <?php
require_once './inc/footer.php';
 ?>
