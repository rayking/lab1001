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

   
     
<?php
function listdir_by_date($path){
	/*先扫描目录中的文件，（必须是最终目录，并且不能为index.php）再遍历读取文件内容*/
	$dir = opendir($path);
    $list = array();
    while($file = readdir($dir)){
        if ($file != '.' and $file != '..' and $file !='index.php' and !is_dir($file)){
            // add the filename, to be sure not to
            // overwrite a array key
            $ctime = filectime($path . $file) . ',' . $file;
            $list[$ctime] = $file;
        }
    }
    closedir($dir);
    krsort($list);
    return $list;
	
	}
	
	
	
/*遍历目录结构 读取文件信息*/
$articlearr = array();
foreach($documentree as $topkey => $topvalue){

	if($topvalue[1]){
	
	foreach($topvalue[1] as $catekey => $catevalue){
		$articlearr[$topkey][$catekey] = listdir_by_date($topkey.'/'.$catekey.'/');
			
		
		}
		
	}
	
	}
print_r($articlearr);
?>

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
