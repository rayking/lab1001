<?php
/*通用方法*/

	
$isDev = $_SERVER['HTTP_HOST'] == 'localhost';
$SITEURL = $isDev ? 'http://localhost/lab1001/' :'http://lab.baobao1001.com/';

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
$cate_actives = array($cate_name =>' class="active"');
$nocommont = $filename == ('index.php' || '');
/*print_r($pathinfo);
*/
?>
<!doctype html>

<html class="">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>八天UI</title>
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
</head>
<body>
<header id="header" role="banner">
  <div class="container clearfix">
    <div class="header-inner">
      <hgroup>
        <h1><a href="<?php echo $SITEURL?>">八天UI</a></h1>
        <h2>八天UI是一个基于html5/css3/jQuery的响应式网页设计（responsive web design，RWD）方案以及使用less/minify进行项目管理及性能优化的框架</h2>
      </hgroup>
    </div>
    <nav role="mainnav">
      <ul class="mainnav clearfix">
        <li <?php echo $cate_actives['docs']?>><a href="<?php echo $SITEURL?>docs/">文档</a></li>
        <li <?php echo $cate_actives['discuz']?>><a href="<?php echo $SITEURL?>discuz/">lab1001 for discuzX2.5</a></li>
        <li <?php echo $cate_actives['blog']?>><a href="<?php echo $SITEURL?>blog/">博客</a></li>
      </ul>
    </nav>
  </div>
</header>
<div class="container clearfix">
  <aside id="sidebar">
    <nav role="categories" class="sidenav">
      <h4>运行环境</h4>
      <ul id="environment-menu" class="menu">
        <li><a href="#">shtml环2境</a></li>
        <li><a href="#">less编译环境</a></li>
        <li><a href="#">less编译环境</a></li>
      </ul>
      <h4>html模版</h4>
      <ul id="html-template-menu" class="menu">
        <li><a href="http://asd.com">html规范</a></li>
        <li><a href="#">网格系统</a></li>
        <li><a href="#">响应式布局（RWD）</a></li>
        <li><a href="#">数据列表</a></li>
      </ul>
      <h4>静态UI组件</h4>
      <ul id="ui-menu" class="menu">
        <li><a href="#">内容区域规范</a></li>
        <li><a href="#">表格</a></li>
        <li><a href="#">表单</a></li>
        <li><a href="#">按钮</a></li>
        <li><a href="#">图片</a></li>
        <li><a href="#">图标</a></li>
      </ul>
      <h4>交互UI组件</h4>
      <ul id="ui-menu" class="menu">
        <li><a href="#">jQuery 插件编写规范</a></li>
        <li><a href="#">下拉菜单</a></li>
        <li><a href="#">导航条</a></li>
        <li><a href="#">选项卡</a></li>
        <li><a href="#">面包屑</a></li>
        <li><a href="#">分页</a></li>
        <li><a href="#">提示框</a></li>
        <li><a href="#">进度条</a></li>
        <li><a href="#">多媒体</a></li>
        <li><a href="#">杂项</a></li>
      </ul>
    </nav>
  </aside>
  <article id="maincontent">