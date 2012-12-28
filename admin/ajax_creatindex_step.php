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
//$defaultcatekey = key(reset($lastupdatelistarr[$lastupdatelistarr]));
$cur_topkey = $_GET['topkey']  ?  $_GET['topkey'] : $defaulttopkey;
$cur_catekey = $_GET['catekey'] ? $_GET['catekey'] : $defaultcatekey;
$listinfo = array();
$intask = true;

foreach($lastupdatelistarr[$cur_topkey][$cur_catekey] as $k=>$v){
	include $cur_topkey.'/'.$cur_catekey.'/'.$v[0];
	$listinfo[$cur_topkey][$cur_catekey][$v[0]] = array($seotitle,$description,$thumbnail);
	}

/*生成文件*/
print_r($listinfo);
function creatlistpage($filename,$path =0){
	/*检查是否存在*/
	/*修改此处时请谨慎，避免覆盖已有的文档*/

		$pathlevel = array('','../','../../');
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
	  又一篇好文即将诞生. "\n".
	
	 '<?php'. "\n".
	'require_once \'./inc/footer.php\';'. "\n".
	'?>'. "\n"
	; 

	
	
	$fp = fopen($filename.".php", "w");

	fwrite($fp, $templatestr);
	
	fclose($fp);
		
	
	}
	
}//if (file_exists($articlearrayfile))end

 ?>



