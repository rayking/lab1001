<?php

/*站点*/
$starttime = microtime();
	
$isDev = $_SERVER['HTTP_HOST'] == 'localhost';
$SITEURL = $isDev ? 'http://localhost/lab1001/' :'http://lab.baobao1001.com/'; //站点url
$sitename = "8天UI";//站点名字
$sitedes = '八天UI是一个基于html5/css3/jQuery的响应式网页设计（responsive web design，RWD）方案以及使用less/minify进行项目管理及性能优化的框架';
/*站点文档结构 channels -> categories ->items*/
$documentree = array(
					
					'docs' =>array('文档',array(
												'environment' => array('开发环境' , array(
													'textual-convention' =>'文本约定',
													'shtml' =>'SHTML环境',
													'less' => 'less动态样式环境'
													
													
												)),
												'HTMLtemplate' => array('HTML模版', array(
													'html' =>'html规范',
													'typography' => '正文格式及语义化',
													'grid' =>'网格体系',
													'RWD' =>'响应式布局(RWD)'
												)),
												'UIwidgets' => array('UI组件', array(
													
												))
					)),
					'discuz' =>array('lab1001 for discuzX2.5',array(
					)),
					'blog' => array('博客',array(
												'css3' => array('CSS3', array()),
												'html5' => array('HTML5', array()),
												'javascript' => array('Javascript', array()),
												'php' => array('PHP', array(
													'creating-a-simple-php-login-without-a-database' =>'无数据库登录',
													'less' => 'less编译环境'
												))
					)),
					'test2' =>array('test2',array(
												'test3' =>array('test3',array())
					
					
					))

);
$pathinfo = explode("/",$_SERVER['REQUEST_URI']);

if($isDev){
	unset($pathinfo[0]);
	unset($pathinfo[1]);
	$pathinfo = array_values($pathinfo);
	}
	
$filename =  $pathinfo[sizeof($pathinfo)-1];
$foldername = $pathinfo[sizeof($pathinfo)-2];
$parentfoldername = $pathinfo[sizeof($pathinfo)-3];
/*echo 'filename is:'.$filename .'foldername is:'.$foldername;
*/
$cate_name = $parentfoldername ? $parentfoldername :$foldername;
$cate_name = $cate_name ? $cate_name:'landpage';
$cate_actives = array($cate_name =>' class="active"');
$sub_actives = array($parentfoldername =>' class="active"');
$item_actives = array($filename =>' class="active"');
$nocommont = $filename == ('index.php' || '');

?>
<!doctype html>
<html class="">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php
if($seotitle){
	echo $seotitle.' - ';}
if($foldername && !$parentfoldername){
	echo $documentree[$foldername][0].' - ';
	}else if($foldername && $parentfoldername){
		echo $documentree[$parentfoldername][1][$foldername][0].' - ';
		}
if($parentfoldername){
	echo $documentree[$parentfoldername][0].' - ';
	}
echo $sitename;

?></title>
<meta name="description" content="<?php echo $description?>">
<meta name="author" content="rAy">
<!--[if lt IE 9]>
    <script>
        // html5shiv MIT @rem remysharp.com/html5-enabling-script
        // iepp v1.6.2 MIT @jon_neal iecss.com/print-protector
        /*@cc_on(function(m,c){var z="abbr|article|aside|audio|canvas|details|figcaption|figure|footer|header|hgroup|mark|meter|nav|output|progress|section|summary|time|video";function n(d){for(var a=-1;++a<o;)d.createElement(i[a])}function p(d,a){for(var e=-1,b=d.length,j,q=[];++e<b;){j=d[e];if((a=j.media||a)!="screen")q.push(p(j.imports,a),j.cssText)}return q.join("")}var g=c.createElement("div");g.innerHTML="<z>i</z>";if(g.childNodes.length!==1){var i=z.split("|"),o=i.length,s=RegExp("(^|\\s)("+z+")",
        "gi"),t=RegExp("<(/*)("+z+")","gi"),u=RegExp("(^|[^\\n]*?\\s)("+z+")([^\\n]*)({[\\n\\w\\W]*?})","gi"),r=c.createDocumentFragment(),k=c.documentElement;g=k.firstChild;var h=c.createElement("body"),l=c.createElement("style"),f;n(c);n(r);g.insertBefore(l,
        g.firstChild);l.media="print";m.attachEvent("onbeforeprint",function(){var d=-1,a=p(c.styleSheets,"all"),e=[],b;for(f=f||c.body;(b=u.exec(a))!=null;)e.push((b[1]+b[2]+b[3]).replace(s,"$1.iepp_$2")+b[4]);for(l.styleSheet.cssText=e.join("\n");++d<o;){a=c.getElementsByTagName(i[d]);e=a.length;for(b=-1;++b<e;)if(a[b].className.indexOf("iepp_")<0)a[b].className+=" iepp_"+i[d]}r.appendChild(f);k.appendChild(h);h.className=f.className;h.innerHTML=f.innerHTML.replace(t,"<$1font")});m.attachEvent("onafterprint",
        function(){h.innerHTML="";k.removeChild(h);k.appendChild(f);l.styleSheet.cssText=""})}})(this,document);@*/
       var KillIE =(function(){
        
          var leave = confirm("消灭低版本IE从我做起，请用现代浏览器浏览本站内容");
       })();
    </script>
    
    <![endif]-->
<link href="<?php echo $SITEURL?>asset/css/reset.css" rel="stylesheet" type="text/css">
<link href="<?php echo $SITEURL?>asset/css/common.css" rel="stylesheet" type="text/css">
<?php 
if($extcss){
echo '<link href="'.$SITEURL.$extcss.'" rel="stylesheet" type="text/css">';
	}
?>
</head>
<body>
<header id="header" role="banner">
  <div class="container clearfix">
    <div class="header-inner">
      <hgroup>
        <h1><a href="<?php echo $SITEURL?>"><?php echo $sitename?></a></h1>
        <h2><?php echo $sitedes?></h2>
      </hgroup>
    </div>
    <nav role="mainnav">
      <ul class="mainnav clearfix">
        <li<?php echo $cate_actives['landpage']?>><a href="<?php echo $SITEURL?>">首页</a></li>
<?php
	  foreach($documentree as $key => $value){
		  echo '        <li'.$cate_actives[$key].'><a href="'.$SITEURL.$key.'/">'.$value[0].'</a></li>'. "\n";
		  
		  }
	  ?>
      </ul>
    </nav>
  </div>
</header>
<div class="container clearfix">

  <aside id="sidebar">
   
    <?php
	if($documentree[$cate_name]){
		echo ' <nav role="categories" class="sidenav">';
		foreach($documentree[$cate_name][1] as $key =>$value){
			echo '<h4><a href="'.$SITEURL.$cate_name.'/'.$key.'/">'.$value[0].'</a></h4>'. "\n";
			if($value[1]){
				echo '<ul id="'.$key.'-menu" class="menu">'. "\n";
				foreach($value[1] as $subkey => $subvalue){
					echo '<li'.$item_actives[$subkey.'.php'].'><a href="'.$SITEURL.$cate_name.'/'.$key.'/'.$subkey.'.php">'.$subvalue.'</a></li>'. "\n";
					}
				echo '</ul>'. "\n";
				}
		}
		echo '</nav>'. "\n";
	}else{
		echo $navdata;
		}
	
	?>
      
  </aside>
  <article id="maincontent">