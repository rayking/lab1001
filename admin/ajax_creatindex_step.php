<?php
/*
收集目录下面页面中的标题和描述变量，组装成数组，然后按分页生成文章列表
*/

 require('_login.php');
chdir('../');	
$articlearrayfile = 'admin/data/article.array.php';
if (file_exists($articlearrayfile)){
$lastupdatelist = file_get_contents($articlearrayfile);
$lastupdatelistarr = unserialize($lastupdatelist);
$defaulttopkeys = array_keys($lastupdatelistarr);
$defaulttopkey = $defaulttopkeys['0'];
$defaultcatekey =  key(reset($lastupdatelistarr));

	$cur_topkey = $_GET['topkey']  ?  $_GET['topkey'] : $defaulttopkey;
	$cur_catekey = $_GET['catekey'] ? $_GET['catekey'] : $defaultcatekey;


/*安全检测*/
$alltopkey = array_keys($lastupdatelistarr);
if(!in_array($cur_topkey,$alltopkey)){
	exit('未找到'.$cur_topkey.'这一目录');
	}
$currsubcate = array_keys($lastupdatelistarr[$cur_topkey]);

if(!in_array($cur_catekey,$currsubcate)){
	exit('未找到'.$cur_topkey.'/'.$cur_catekey.'目录');
	}
	
$listinfo = array();
$intask = true;

foreach($lastupdatelistarr[$cur_topkey][$cur_catekey] as $k=>$v){
	include $cur_topkey.'/'.$cur_catekey.'/'.$v[0];
	$listinfo[$cur_topkey][$cur_catekey][$v[0]] = array($seotitle,$description,$thumbnail);
	}

/*生成文件*/
	/*引入header.inc里的栏目配置数组*/
require_once './inc/header.php';



function creatlistpage($dirstr,$listinfoarr,$path =0){
	global $SITEURL;
	/*检查是否存在*/
	/*修改此处时请谨慎，避免覆盖已有的文档*/
	$pathlevel = array('','../','../../');
	$itemlistcontent = '<ul>';
	foreach($listinfoarr as $k => $v){
		$itemlistcontent .='<article><h2><a href="'.$SITEURL.$dirstr.'/'.$cur_catekey.$k.'">'.$v[0].'</a></h2><p>'.$v[1].'</p></article>'; 	
		}
	$itemlistcontent .= '</ul>';
	$templatestr  = 
	'<?php'. "\n".
	'$description = \'页面描述\';'. "\n".
	'$seotitle = \'又一篇好文即将诞生\';'. "\n".
	'if($intask){'. "\n".
	'return;'. "\n".
	'}'. "\n".
	'chdir(\''.$pathlevel[$path].'\');'. "\n".
	'$extcss = \'\';'. "\n".
	'$extjs = \'\';'. "\n".
	'require_once \'./inc/header.php\';'. "\n".
	'?>'. "\n".
	  $itemlistcontent. "\n".
	 '<?php'. "\n".
	'require_once \'./inc/footer.php\';'. "\n".
	'?>'. "\n"
	; 
	$fp = fopen($dirstr."/index.php", "w");

	fwrite($fp, $templatestr);
	
	fclose($fp);
		
	
	}
	
	/*执行生成index页的函数*/
	$dirstr = $cur_topkey.'/'.$cur_catekey;
	
	$listinfoarr = $listinfo[$cur_topkey][$cur_catekey];
	print_r($listinfoarr);
	creatlistpage($dirstr,$listinfoarr,$path =2);
}//if (file_exists($articlearrayfile))end

 ?>



