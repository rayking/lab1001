<?php require('_login.php');
	
$articlearrayfile = 'admin/article.array.php';
if (file_exists($articlearrayfile)){
$lastupdatelist = file_get_contents($articlearrayfile);
$lastupdatelistarr = unserialize($lastupdatelist);
$cur_topkey = $_GET['topkey']  ?  $_GET['topkey'] : key(reset($lastupdatelistarr));
$cur_catekey = $_GET['catekey'];
//$next_topkey = 
foreach($lastupdatelistarr[$cur_topkey][$cur_catekey] as $k=>$v){
	echo $k;
	}
}

 ?>



