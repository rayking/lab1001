<?php require('_login.php');
chdir('../');

$seotitle = '后台首页';
$extcss = 'admin/statics/admin.css';
$extjs = 'admin/statics/admin.js';
require_once './inc/header.php';
 ?>


<strong>欢迎 <?php echo $login->username; ?>,</strong> 
你已经登录 

<a href="logout.php">注销</a><br />
<br />

<h4>生成索引索引页</h4>
<div id="creatindexpage"><a  class="bigbtn" id="dotask">立即执行</a></div>
<h4>扫描文章：</h4>

 <ol class="tree">   
     
<?php
function time_elapsed_string($ptime) {
    $etime = time() - $ptime;
    
    if ($etime < 1) {
        return '0 seconds';
    }
    
    $a = array( 12 * 30 * 24 * 60 * 60  =>  '年',
                30 * 24 * 60 * 60       =>  '月',
                24 * 60 * 60            =>  '天',
                60 * 60                 =>  '小时',
                60                      =>  '分钟',
                1                       =>  '秒'
                );
    
    foreach ($a as $secs => $str) {
        $d = $etime / $secs;
        if ($d >= 1) {
            $r = round($d);
            return $r . ' ' . $str . '前';
        }
    }
}
function listdir_by_date($path){
	/*先扫描目录中的文件，（必须是最终目录，并且不能为index.php）再遍历读取文件内容*/
	$dir = opendir($path);
    $list = array();
    while($file = readdir($dir)){
        if ($file != '.' and $file != '..' and  end( explode( ".", $file ) ) == 'php' and !is_dir($file)){
            // 时间戳与文件名组合，防止时间戳相同的文件同键
            
            $ctime = fileatime($path . $file);
 			$ctimekey = $ctime . ',' . $file;
           $list[$ctimekey] = array($file,$ctime);
        }
    }
    closedir($dir);
    krsort($list);
    return $list;
	
	}
	
	
$articlearrayfile = 'admin/article.array.php';	

/*读取文件 用于比较是否更新*/
if (file_exists($articlearrayfile)){
	
$lastupdatelist = file_get_contents($articlearrayfile);
$lastupdatelistarr = unserialize($lastupdatelist);

	}


/*遍历目录结构 读取文件信息*/
$articlearr = array();
$tasklist = array();
/*foreach($documentree as $topkey => $topvalue){

	if($topvalue[1]){
	
	foreach($topvalue[1] as $catekey => $catevalue){
		$articlearr[$topkey][$catekey] = listdir_by_date($topkey.'/'.$catekey.'/');
			
		
		}
		
	}
	
	}*/
	
	
	foreach($documentree as $topkey => $topvalue){
	

	echo '<li><label for="'.$topkey.'"><a href="'.$SITEURL.$topkey.'">'.$topvalue[0].'</a>'.($isnewfolder?'<i>新建</i>':'').'</label> <input type="checkbox" checked disabled id="'.$topkey.'" />';
	if($topvalue[1]){
	echo '<ol>';
	foreach($topvalue[1] as $catekey => $catevalue){
		
		echo '<li><label for="'.$catekey.'"><a href="'.$SITEURL.$topkey.'/'.$catekey.'/">'.$catevalue[0].'</a>'.($isnewfolder?'<i>新建</i>':'').'</label> <input type="checkbox" id="'.$catekey.'" />';
		
		echo '<ol>';
		$articlearr[$topkey][$catekey] = listdir_by_date($topkey.'/'.$catekey.'/');
			foreach(listdir_by_date($topkey.'/'.$catekey.'/') as $itemkey => $itemvalue){
			$deltatime = $itemvalue[1]-$lastupdatelistarr[$topkey][$catekey][$itemkey][1];
			if($deltatime){
				$tasklist[$topkey][$catekey][] = $itemvalue[0];
				}
				echo '<li class="file"><a href="'.$SITEURL.$topkey.'/'.$catekey.'/'.$itemvalue[0].'">'.$itemvalue[0].'</a><em>'.time_elapsed_string($itemvalue[1]).'</em> <em class="red">'.($deltatime? '[变动]':'').'</em></li>';
			}
		echo '</ol>';
		
		}
		echo '</li></ol>';
	}
	echo '</li>';
	}
	
	
/*将扫描得出的数组序列化后转为文件*/
$articlearrstr = serialize($articlearr);


/*如果完成任务，再写入数据*/

/*预留接口*/
$taskdone = true;
if($taskdone){
	file_put_contents($articlearrayfile, $articlearrstr);/*file_get_contents($articlearrayfile);*/

	}


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
