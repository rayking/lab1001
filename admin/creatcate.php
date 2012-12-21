<?php require('_login.php');
chdir('../');

$seotitle = '后台首页';
$extcss = 'admin/statics/admin.css';
require_once './inc/header.php';
 ?>


<strong>欢迎 <?php echo $login->username; ?>,</strong> 
你已经登录 

<a href="logout.php">注销</a><br />
<br />


<h4>当前的目录结构：</h4>
<span>修改请到inc/header.php更改对应键值</span>

    <ol class="tree">
     
<?php
function creatfolder($pathtofolder){
	if (!is_dir($pathtofolder)) {
    mkdir($pathtofolder);
	return $isnewfolder = true;
	}
	}
function creatdefaultpage($filename,$path =0){
	/*检查是否存在*/
	/*修改此处时请谨慎，避免覆盖已有的文档*/
	if (!file_exists($filename.'.php')){
		$pathlevel = array('','../','../../');
		$templatestr  = 
	'<?php'. "\n".
	'chdir(\''.$pathlevel[$path].'\');'. "\n".
	'$description = \'页面描述\';'. "\n".
	'$seotitle = \'又一篇好文即将诞生\';'. "\n".
	'$extcss = \'\';'. "\n".
	'$extjs = \'\';'. "\n".
	'require_once \'./inc/header.php\';'. "\n".
	'?>'. "\n".
	  又一篇好文即将诞生. "\n".
	
	 '<?php'. "\n".
	'require_once \'./inc/footer.php\';'. "\n".
	'?>'. "\n"
	; 

	
	
	$fp = fopen($filename.".php", "w");

	fwrite($fp, $templatestr);
	
	fclose($fp);
		}
	
	}

foreach($documentree as $topkey => $topvalue){
	
	/*检查文件夹是否存在，如果不存在则创建*/
	$isnewfolder = creatfolder($topkey);
	/*创建默认首页index.php*/
	creatdefaultpage($topkey.'/index',1);	
	echo '<li><label for="'.$topkey.'"><a href="'.$SITEURL.$topkey.'">'.$topvalue[0].'</a>'.($isnewfolder?'新建':'').'</label> <input type="checkbox" checked disabled id="'.$topkey.'" />';
	if($topvalue[1]){
	echo '<ol>';
	foreach($topvalue[1] as $catekey => $catevalue){
		
		$isnewfolder = creatfolder($topkey.'/'.$catekey);
		creatdefaultpage($topkey.'/'.$catekey.'/index',2);	
		echo '<li><label for="'.$catekey.'"><a href="'.$SITEURL.$topkey.'/'.$catekey.'/">'.$catevalue[0].'</a>'.($isnewfolder?'新建':'').'</label> <input type="checkbox" id="'.$catekey.'" />';
		if($catevalue[1]){
		echo '<ol>';
			foreach($catevalue[1] as $itemkey => $itemvalue){
				creatdefaultpage($topkey.'/'.$catekey.'/'.$itemkey,2);	
				echo '<li class="file"><a href="'.$SITEURL.$topkey.'/'.$catekey.'/'.$itemkey.'.php">'.$itemvalue.'</a></li>';
				}
		echo '</ol>';
		}
		}
		echo '</li></ol>';
	}
	echo '</li>';
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
</ol>
<script>
/*展开所有条目*/
 var cl = document.getElementsByTagName("input");//先获得所有的input
             var len = cl.length;
            
             for(i=0;i<len;i++)
             {
                 if(cl[i].type == "checkbox")//如果是checkbox，就让它选中
                 {
                     cl[i].checked = true;
                 }
             }
</script>
 <?php
require_once './inc/footer.php';
 ?>
