<?php
$seotitle = 'backbone.js中文文档';
$description = 'Backbone 是一个前端 JS 代码 MVC 框架';
if($intask){
	return;
	}
$navdata = '<div id="sidebar" class="interface"> <a class="toc_title" href="#container"> Backbone.js <span class="version">(0.5.3)</span> </a> <a class="toc_title" href="#Introduction"> 简介 </a> <a class="toc_title" href="#Events"> 事件 </a>
      <ul class="toc_section">
        <li>– <a href="#Events-bind">bind</a></li>
        <li>– <a href="#Events-unbind">unbind</a></li>
        <li>– <a href="#Events-trigger">trigger</a></li>
      </ul>
      <a class="toc_title" href="#Model"> 模型 </a>
      <ul class="toc_section">
        <li>– <a href="#Model-extend">extend</a></li>
        <li>– <a href="#Model-constructor">constructor / initialize</a></li>
        <li>– <a href="#Model-get">get</a></li>
        <li>– <a href="#Model-set">set</a></li>
        <li>– <a href="#Model-escape">escape</a></li>
        <li>– <a href="#Model-has">has</a></li>
        <li>– <a href="#Model-unset">unset</a></li>
        <li>– <a href="#Model-clear">clear</a></li>
        <li>– <a href="#Model-id">id</a></li>
        <li>– <a href="#Model-cid">cid</a></li>
        <li>– <a href="#Model-attributes">attributes</a></li>
        <li>– <a href="#Model-defaults">defaults</a></li>
        <li>- <a href="#Model-toJSON">toJSON</a></li>
        <li>– <a href="#Model-fetch">fetch</a></li>
        <li>– <a href="#Model-save">save</a></li>
        <li>– <a href="#Model-destroy">destroy</a></li>
        <li>– <a href="#Model-validate">validate</a></li>
        <li>– <a href="#Model-url">url</a></li>
        <li>– <a href="#Model-urlRoot">urlRoot</a></li>
        <li>– <a href="#Model-parse">parse</a></li>
        <li>– <a href="#Model-clone">clone</a></li>
        <li>– <a href="#Model-isNew">isNew</a></li>
        <li>– <a href="#Model-change">change</a></li>
        <li>– <a href="#Model-hasChanged">hasChanged</a></li>
        <li>– <a href="#Model-changedAttributes">changedAttributes</a></li>
        <li>– <a href="#Model-previous">previous</a></li>
        <li>– <a href="#Model-previousAttributes">previousAttributes</a></li>
      </ul>
      <a class="toc_title" href="#Collection"> 集合 </a>
      <ul class="toc_section">
        <li>– <a href="#Collection-extend">extend</a></li>
        <li>– <a href="#Collection-model">model</a></li>
        <li>– <a href="#Collection-constructor">constructor / initialize</a></li>
        <li>– <a href="#Collection-models">models</a></li>
        <li>– <a href="#Collection-toJSON">toJSON</a></li>
        <li>– <a href="#Collection-Underscore-Methods"><b>Underscore 方法 (26)</b></a></li>
        <li>– <a href="#Collection-add">add</a></li>
        <li>– <a href="#Collection-remove">remove</a></li>
        <li>– <a href="#Collection-get">get</a></li>
        <li>– <a href="#Collection-getByCid">getByCid</a></li>
        <li>– <a href="#Collection-at">at</a></li>
        <li>– <a href="#Collection-length">length</a></li>
        <li>– <a href="#Collection-comparator">comparator</a></li>
        <li>– <a href="#Collection-sort">sort</a></li>
        <li>– <a href="#Collection-pluck">pluck</a></li>
        <li>– <a href="#Collection-url">url</a></li>
        <li>– <a href="#Collection-parse">parse</a></li>
        <li>– <a href="#Collection-fetch">fetch</a></li>
        <li>– <a href="#Collection-reset">reset</a></li>
        <li>– <a href="#Collection-create">create</a></li>
      </ul>
      <a class="toc_title" href="#Router"> 路由 </a>
      <ul class="toc_section">
        <li>– <a href="#Router-extend">extend</a></li>
        <li>– <a href="#Router-routes">routes</a></li>
        <li>– <a href="#Router-constructor">constructor / initialize</a></li>
        <li>– <a href="#Router-route">route</a></li>
        <li>– <a href="#Router-navigate">navigate</a></li>
      </ul>
      <a class="toc_title" href="#History"> 历史 </a>
      <ul class="toc_section">
        <li>– <a href="#History-start">start</a></li>
      </ul>
      <a class="toc_title" href="#Sync"> 同步 </a>
      <ul class="toc_section">
        <li>– <a href="#Sync">Backbone.sync</a></li>
        <li>– <a href="#Sync-emulateHTTP">Backbone.emulateHTTP</a></li>
        <li>– <a href="#Sync-emulateJSON">Backbone.emulateJSON</a></li>
      </ul>
      <a class="toc_title" href="#View"> 视图 </a>
      <ul class="toc_section">
        <li>– <a href="#View-extend">extend</a></li>
        <li>– <a href="#View-constructor">constructor / initialize</a></li>
        <li>– <a href="#View-el">el</a></li>
        <li>– <a href="#View-dollar">$ (jQuery 或 Zepto)</a></li>
        <li>– <a href="#View-render">render</a></li>
        <li>– <a href="#View-remove">remove</a></li>
        <li>– <a href="#View-make">make</a></li>
        <li>– <a href="#View-delegateEvents">delegateEvents</a></li>
      </ul>
      <a class="toc_title" href="#Utility"> 工具 </a>
      <ul class="toc_section">
        <li>– <a href="#Utility-noConflict">noConflict</a></li>
      </ul>
    </div>';
#$extcss = 'asset/js/prettify.css';
#$extjs = 'asset/js/prettify.js';
chdir('../../');


require_once './inc/header.php';
 ?>
<div class="board-show">
  <style>
  /*!
 * Bootstrap v2.0.2
 *
 * Copyright 2012 Twitter, Inc
 * Licensed under the Apache License v2.0
 * http://www.apache.org/licenses/LICENSE-2.0
 * 
 * Designed and built with all the love in the world @twitter by @mdo and @fat.
 */article,aside,details,figcaption,figure,footer,header,hgroup,nav,section{display:block}audio,canvas,video{display:inline-block;*display:inline;*zoom:1}audio:not([controls]){display:none}html{font-size:100%;-webkit-text-size-adjust:100%;-ms-text-size-adjust:100%}a:focus{outline:thin dotted #333;outline:5px auto -webkit-focus-ring-color;outline-offset:-2px}a:hover,a:active{outline:0}sub,sup{position:relative;font-size:75%;line-height:0;vertical-align:baseline}sup{top:-0.5em}sub{bottom:-0.25em}img{height:auto;border:0;-ms-interpolation-mode:bicubic;vertical-align:middle}button,input,select,textarea{margin:0;font-size:100%;vertical-align:middle}button,input{*overflow:visible;line-height:normal}button::-moz-focus-inner,input::-moz-focus-inner{padding:0;border:0}button,input[type="button"],input[type="reset"],input[type="submit"]{cursor:pointer;-webkit-appearance:button}input[type="search"]{-webkit-appearance:textfield;-webkit-box-sizing:content-box;-moz-box-sizing:content-box;box-sizing:content-box}input[type="search"]::-webkit-search-decoration,input[type="search"]::-webkit-search-cancel-button{-webkit-appearance:none}textarea{overflow:auto;vertical-align:top}.clearfix{*zoom:1}.clearfix:before,.clearfix:after{display:table;content:""}.clearfix:after{clear:both}.hide-text{overflow:hidden;text-indent:100%;white-space:nowrap}.input-block-level{display:block;width:100%;min-height:28px;-webkit-box-sizing:border-box;-moz-box-sizing:border-box;-ms-box-sizing:border-box;box-sizing:border-box}body{margin:0;font-family:tahoma,sans-serif;font-size:13px;line-height:18px;color:#333;background-color:#fff}a{color:#08c;text-decoration:none}a:hover{color:#005580;text-decoration:underline}.row{margin-left:-20px;*zoom:1}.row:before,.row:after{display:table;content:""}.row:after{clear:both}[class*="span"]{float:left;margin-left:20px}.container,.navbar-fixed-top .container,.navbar-fixed-bottom .container{width:940px}.span12{width:940px}.span11{width:860px}.span10{width:780px}.span9{width:700px}.span8{width:620px}.span7{width:540px}.span6{width:460px}.span5{width:380px}.span4{width:300px}.span3{width:220px}.span2{width:140px}.span1{width:60px}.offset12{margin-left:980px}.offset11{margin-left:900px}.offset10{margin-left:820px}.offset9{margin-left:740px}.offset8{margin-left:660px}.offset7{margin-left:580px}.offset6{margin-left:500px}.offset5{margin-left:420px}.offset4{margin-left:340px}.offset3{margin-left:260px}.offset2{margin-left:180px}.offset1{margin-left:100px}.row-fluid{width:100%;*zoom:1}.row-fluid:before,.row-fluid:after{display:table;content:""}.row-fluid:after{clear:both}.row-fluid>[class*="span"]{float:left;margin-left:2.127659574%}.row-fluid>[class*="span"]:first-child{margin-left:0}.row-fluid>.span12{width:99.99999998999999%}.row-fluid>.span11{width:91.489361693%}.row-fluid>.span10{width:82.97872339599999%}.row-fluid>.span9{width:74.468085099%}.row-fluid>.span8{width:65.95744680199999%}.row-fluid>.span7{width:57.446808505%}.row-fluid>.span6{width:48.93617020799999%}.row-fluid>.span5{width:40.425531911%}.row-fluid>.span4{width:31.914893614%}.row-fluid>.span3{width:23.404255317%}.row-fluid>.span2{width:14.89361702%}.row-fluid>.span1{width:6.382978723%}.container{margin-left:auto;margin-right:auto;*zoom:1}.container:before,.container:after{display:table;content:""}.container:after{clear:both}.container-fluid{padding-left:20px;padding-right:20px;*zoom:1}.container-fluid:before,.container-fluid:after{display:table;content:""}.container-fluid:after{clear:both}p{margin:0 0 9px;font-family:tahoma,sans-serif;font-size:13px;line-height:18px}p small{font-size:11px;color:#999}.lead{margin-bottom:18px;font-size:20px;font-weight:200;line-height:27px}h1,h2,h3,h4,h5,h6{margin:0;font-family:inherit;font-weight:bold;color:inherit;text-rendering:optimizelegibility}h1 small,h2 small,h3 small,h4 small,h5 small,h6 small{font-weight:normal;color:#999}h1{font-size:30px;line-height:36px}h3{line-height:27px;font-size:18px}h3 small{font-size:14px}h4,h5,h6{line-height:18px}h4{font-size:14px}h4 small{font-size:12px}h5{font-size:12px}h6{font-size:11px;color:#999;text-transform:uppercase}.page-header{padding-bottom:17px;margin:18px 0;border-bottom:1px solid #eee}.page-header h1{line-height:1}ul ul,ul ol,ol ol,ol ul{margin-bottom:0}ul{list-style:disc}ol{list-style:decimal}li{line-height:18px}ul.unstyled,ol.unstyled{margin-left:0;list-style:none}dl{margin-bottom:18px}dt,dd{line-height:18px}dt{font-weight:bold;line-height:17px}dd{margin-left:9px}.dl-horizontal dt{float:left;clear:left;width:120px;text-align:right}.dl-horizontal dd{margin-left:130px}hr{margin:18px 0;border:0;border-top:1px solid #eee;border-bottom:1px solid #fff}strong{font-weight:bold}em{font-style:italic}.muted{color:#999}abbr[title]{border-bottom:1px dotted #ddd;cursor:help}abbr.initialism{font-size:90%;text-transform:uppercase}blockquote{padding:0 0 0 15px;margin:0 0 18px;border-left:5px solid #eee}blockquote p{margin-bottom:0;font-size:16px;font-weight:300;line-height:22.5px}blockquote small{display:block;line-height:18px;color:#999}blockquote small:before{content:'\2014 \00A0'}blockquote.pull-right{float:right;padding-left:0;padding-right:15px;border-left:0;border-right:5px solid #eee}blockquote.pull-right p,blockquote.pull-right small{text-align:right}q:before,q:after,blockquote:before,blockquote:after{content:""}address{display:block;margin-bottom:18px;line-height:18px;font-style:normal}small{font-size:100%}cite{font-style:normal}code,pre{font-family:Menlo,Monaco,"Courier New",monospace;font-size:12px;color:#333;-webkit-border-radius:3px;-moz-border-radius:3px;border-radius:3px}code{padding:2px 4px;color:#d14;background-color:#f7f7f9;border:1px solid #e1e1e8}pre{display:block;padding:8.5px;margin:0 0 9px;font-size:12.025px;line-height:18px;background-color:#f5f5f5;border:1px solid #ccc;border:1px solid rgba(0,0,0,0.15);-webkit-border-radius:4px;-moz-border-radius:4px;border-radius:4px;white-space:pre;white-space:pre-wrap;word-break:break-all;word-wrap:break-word}pre.prettyprint{margin-bottom:18px}pre code{padding:0;color:inherit;background-color:transparent;border:0}.pre-scrollable{max-height:340px;overflow-y:scroll}form{margin:0 0 18px}fieldset{padding:0;margin:0;border:0}legend{display:block;width:100%;padding:0;margin-bottom:27px;font-size:19.5px;line-height:36px;color:#333;border:0;border-bottom:1px solid #eee}legend small{font-size:13.5px;color:#999}label,input,button,select,textarea{font-size:13px;font-weight:normal;line-height:18px}input,button,select,textarea{font-family:tahoma,sans-serif}label{display:block;margin-bottom:5px;color:#333}input,textarea,select,.uneditable-input{display:inline-block;width:210px;height:18px;padding:4px;margin-bottom:9px;font-size:13px;line-height:18px;color:#555;border:1px solid #ccc;-webkit-border-radius:3px;-moz-border-radius:3px;border-radius:3px}.uneditable-textarea{width:auto;height:auto}label input,label textarea,label select{display:block}input[type="image"],input[type="checkbox"],input[type="radio"]{width:auto;height:auto;padding:0;margin:3px 0;*margin-top:0;line-height:normal;cursor:pointer;-webkit-border-radius:0;-moz-border-radius:0;border-radius:0;border:0 \9}input[type="image"]{border:0}input[type="file"]{width:auto;padding:initial;line-height:initial;border:initial;background-color:#fff;background-color:initial;-webkit-box-shadow:none;-moz-box-shadow:none;box-shadow:none}input[type="button"],input[type="reset"],input[type="submit"]{width:auto;height:auto}select,input[type="file"]{height:28px;*margin-top:4px;line-height:28px}input[type="file"]{line-height:18px \9}select{width:220px;background-color:#fff}select[multiple],select[size]{height:auto}input[type="image"]{-webkit-box-shadow:none;-moz-box-shadow:none;box-shadow:none}textarea{height:auto}input[type="hidden"]{display:none}.radio,.checkbox{padding-left:18px}.radio input[type="radio"],.checkbox input[type="checkbox"]{float:left;margin-left:-18px}.controls>.radio:first-child,.controls>.checkbox:first-child{padding-top:5px}.radio.inline,.checkbox.inline{display:inline-block;padding-top:5px;margin-bottom:0;vertical-align:middle}.radio.inline+.radio.inline,.checkbox.inline+.checkbox.inline{margin-left:10px}input,textarea{-webkit-box-shadow:inset 0 1px 1px rgba(0,0,0,0.075);-moz-box-shadow:inset 0 1px 1px rgba(0,0,0,0.075);box-shadow:inset 0 1px 1px rgba(0,0,0,0.075);-webkit-transition:border linear .2s,box-shadow linear .2s;-moz-transition:border linear .2s,box-shadow linear .2s;-ms-transition:border linear .2s,box-shadow linear .2s;-o-transition:border linear .2s,box-shadow linear .2s;transition:border linear .2s,box-shadow linear .2s}input:focus,textarea:focus{border-color:rgba(82,168,236,0.8);-webkit-box-shadow:inset 0 1px 1px rgba(0,0,0,0.075),0 0 8px rgba(82,168,236,0.6);-moz-box-shadow:inset 0 1px 1px rgba(0,0,0,0.075),0 0 8px rgba(82,168,236,0.6);box-shadow:inset 0 1px 1px rgba(0,0,0,0.075),0 0 8px rgba(82,168,236,0.6);outline:0;outline:thin dotted \9}input[type="file"]:focus,input[type="radio"]:focus,input[type="checkbox"]:focus,select:focus{-webkit-box-shadow:none;-moz-box-shadow:none;box-shadow:none;outline:thin dotted #333;outline:5px auto -webkit-focus-ring-color;outline-offset:-2px}.input-mini{width:60px}.input-small{width:90px}.input-medium{width:150px}.input-large{width:210px}.input-xlarge{width:270px}.input-xxlarge{width:530px}input[class*="span"],select[class*="span"],textarea[class*="span"],.uneditable-input{float:none;margin-left:0}input,textarea,.uneditable-input{margin-left:0}input.span12,textarea.span12,.uneditable-input.span12{width:930px}input.span11,textarea.span11,.uneditable-input.span11{width:850px}input.span10,textarea.span10,.uneditable-input.span10{width:770px}input.span9,textarea.span9,.uneditable-input.span9{width:690px}input.span8,textarea.span8,.uneditable-input.span8{width:610px}input.span7,textarea.span7,.uneditable-input.span7{width:530px}input.span6,textarea.span6,.uneditable-input.span6{width:450px}input.span5,textarea.span5,.uneditable-input.span5{width:370px}input.span4,textarea.span4,.uneditable-input.span4{width:290px}input.span3,textarea.span3,.uneditable-input.span3{width:210px}input.span2,textarea.span2,.uneditable-input.span2{width:130px}input.span1,textarea.span1,.uneditable-input.span1{width:50px}input[disabled],select[disabled],textarea[disabled],input[readonly],select[readonly],textarea[readonly]{background-color:#eee;border-color:#ddd;cursor:not-allowed}.control-group.warning>label,.control-group.warning .help-block,.control-group.warning .help-inline{color:#c09853}.control-group.warning input,.control-group.warning select,.control-group.warning textarea{color:#c09853;border-color:#c09853}.control-group.warning input:focus,.control-group.warning select:focus,.control-group.warning textarea:focus{border-color:#a47e3c;-webkit-box-shadow:0 0 6px #dbc59e;-moz-box-shadow:0 0 6px #dbc59e;box-shadow:0 0 6px #dbc59e}.control-group.warning .input-prepend .add-on,.control-group.warning .input-append .add-on{color:#c09853;background-color:#fcf8e3;border-color:#c09853}.control-group.error>label,.control-group.error .help-block,.control-group.error .help-inline{color:#b94a48}.control-group.error input,.control-group.error select,.control-group.error textarea{color:#b94a48;border-color:#b94a48}.control-group.error input:focus,.control-group.error select:focus,.control-group.error textarea:focus{border-color:#953b39;-webkit-box-shadow:0 0 6px #d59392;-moz-box-shadow:0 0 6px #d59392;box-shadow:0 0 6px #d59392}.control-group.error .input-prepend .add-on,.control-group.error .input-append .add-on{color:#b94a48;background-color:#f2dede;border-color:#b94a48}.control-group.success>label,.control-group.success .help-block,.control-group.success .help-inline{color:#468847}.control-group.success input,.control-group.success select,.control-group.success textarea{color:#468847;border-color:#468847}.control-group.success input:focus,.control-group.success select:focus,.control-group.success textarea:focus{border-color:#356635;-webkit-box-shadow:0 0 6px #7aba7b;-moz-box-shadow:0 0 6px #7aba7b;box-shadow:0 0 6px #7aba7b}.control-group.success .input-prepend .add-on,.control-group.success .input-append .add-on{color:#468847;background-color:#dff0d8;border-color:#468847}input:focus:required:invalid,textarea:focus:required:invalid,select:focus:required:invalid{color:#b94a48;border-color:#ee5f5b}input:focus:required:invalid:focus,textarea:focus:required:invalid:focus,select:focus:required:invalid:focus{border-color:#e9322d;-webkit-box-shadow:0 0 6px #f8b9b7;-moz-box-shadow:0 0 6px #f8b9b7;box-shadow:0 0 6px #f8b9b7}.form-actions{padding:17px 20px 18px;margin-top:18px;margin-bottom:18px;background-color:#eee;border-top:1px solid #ddd;*zoom:1}.form-actions:before,.form-actions:after{display:table;content:""}.form-actions:after{clear:both}.uneditable-input{display:block;background-color:#fff;border-color:#eee;-webkit-box-shadow:inset 0 1px 2px rgba(0,0,0,0.025);-moz-box-shadow:inset 0 1px 2px rgba(0,0,0,0.025);box-shadow:inset 0 1px 2px rgba(0,0,0,0.025);cursor:not-allowed}:-moz-placeholder{color:#999}::-webkit-input-placeholder{color:#999}.help-block,.help-inline{color:#555}.help-block{display:block;margin-bottom:9px}.help-inline{display:inline-block;*display:inline;*zoom:1;vertical-align:middle;padding-left:5px}.input-prepend,.input-append{margin-bottom:5px}.input-prepend input,.input-append input,.input-prepend select,.input-append select,.input-prepend .uneditable-input,.input-append .uneditable-input{*margin-left:0;-webkit-border-radius:0 3px 3px 0;-moz-border-radius:0 3px 3px 0;border-radius:0 3px 3px 0}.input-prepend input:focus,.input-append input:focus,.input-prepend select:focus,.input-append select:focus,.input-prepend .uneditable-input:focus,.input-append .uneditable-input:focus{position:relative;z-index:2}.input-prepend .uneditable-input,.input-append .uneditable-input{border-left-color:#ccc}.input-prepend .add-on,.input-append .add-on{display:inline-block;width:auto;min-width:16px;height:18px;padding:4px 5px;font-weight:normal;line-height:18px;text-align:center;text-shadow:0 1px 0 #fff;vertical-align:middle;background-color:#eee;border:1px solid #ccc}.input-prepend .add-on,.input-append .add-on,.input-prepend .btn,.input-append .btn{-webkit-border-radius:3px 0 0 3px;-moz-border-radius:3px 0 0 3px;border-radius:3px 0 0 3px}.input-prepend .active,.input-append .active{background-color:#a9dba9;border-color:#46a546}.input-prepend .add-on,.input-prepend .btn{margin-right:-1px}.input-append input,.input-append select .uneditable-input{-webkit-border-radius:3px 0 0 3px;-moz-border-radius:3px 0 0 3px;border-radius:3px 0 0 3px}.input-append .uneditable-input{border-left-color:#eee;border-right-color:#ccc}.input-append .add-on,.input-append .btn{margin-left:-1px;-webkit-border-radius:0 3px 3px 0;-moz-border-radius:0 3px 3px 0;border-radius:0 3px 3px 0}.input-prepend.input-append input,.input-prepend.input-append select,.input-prepend.input-append .uneditable-input{-webkit-border-radius:0;-moz-border-radius:0;border-radius:0}.input-prepend.input-append .add-on:first-child,.input-prepend.input-append .btn:first-child{margin-right:-1px;-webkit-border-radius:3px 0 0 3px;-moz-border-radius:3px 0 0 3px;border-radius:3px 0 0 3px}.input-prepend.input-append .add-on:last-child,.input-prepend.input-append .btn:last-child{margin-left:-1px;-webkit-border-radius:0 3px 3px 0;-moz-border-radius:0 3px 3px 0;border-radius:0 3px 3px 0}.search-query{padding-left:14px;padding-right:14px;margin-bottom:0;-webkit-border-radius:14px;-moz-border-radius:14px;border-radius:14px}.form-search input,.form-inline input,.form-horizontal input,.form-search textarea,.form-inline textarea,.form-horizontal textarea,.form-search select,.form-inline select,.form-horizontal select,.form-search .help-inline,.form-inline .help-inline,.form-horizontal .help-inline,.form-search .uneditable-input,.form-inline .uneditable-input,.form-horizontal .uneditable-input,.form-search .input-prepend,.form-inline .input-prepend,.form-horizontal .input-prepend,.form-search .input-append,.form-inline .input-append,.form-horizontal .input-append{display:inline-block;margin-bottom:0}.form-search .hide,.form-inline .hide,.form-horizontal .hide{display:none}.form-search label,.form-inline label{display:inline-block}.form-search .input-append,.form-inline .input-append,.form-search .input-prepend,.form-inline .input-prepend{margin-bottom:0}.form-search .radio,.form-search .checkbox,.form-inline .radio,.form-inline .checkbox{padding-left:0;margin-bottom:0;vertical-align:middle}.form-search .radio input[type="radio"],.form-search .checkbox input[type="checkbox"],.form-inline .radio input[type="radio"],.form-inline .checkbox input[type="checkbox"]{float:left;margin-left:0;margin-right:3px}.control-group{margin-bottom:9px}legend+.control-group{margin-top:18px;-webkit-margin-top-collapse:separate}.form-horizontal .control-group{margin-bottom:18px;*zoom:1}.form-horizontal .control-group:before,.form-horizontal .control-group:after{display:table;content:""}.form-horizontal .control-group:after{clear:both}.form-horizontal .control-label{float:left;width:140px;padding-top:5px;text-align:right}.form-horizontal .controls{margin-left:160px;*display:inline-block;*margin-left:0;*padding-left:20px}.form-horizontal .help-block{margin-top:9px;margin-bottom:0}.form-horizontal .form-actions{padding-left:160px}table{max-width:100%;border-collapse:collapse;border-spacing:0;background-color:transparent}.table{width:100%;margin-bottom:18px}.table th,.table td{padding:8px;line-height:18px;text-align:left;vertical-align:top;border-top:1px solid #ddd}.table th{font-weight:bold}.table thead th{vertical-align:bottom}.table colgroup+thead tr:first-child th,.table colgroup+thead tr:first-child td,.table thead:first-child tr:first-child th,.table thead:first-child tr:first-child td{border-top:0}.table tbody+tbody{border-top:2px solid #ddd}.table-condensed th,.table-condensed td{padding:4px 5px}.table-bordered{border:1px solid #ddd;border-left:0;border-collapse:separate;*border-collapse:collapsed;-webkit-border-radius:4px;-moz-border-radius:4px;border-radius:4px}.table-bordered th,.table-bordered td{border-left:1px solid #ddd}.table-bordered thead:first-child tr:first-child th,.table-bordered tbody:first-child tr:first-child th,.table-bordered tbody:first-child tr:first-child td{border-top:0}.table-bordered thead:first-child tr:first-child th:first-child,.table-bordered tbody:first-child tr:first-child td:first-child{-webkit-border-radius:4px 0 0 0;-moz-border-radius:4px 0 0 0;border-radius:4px 0 0 0}.table-bordered thead:first-child tr:first-child th:last-child,.table-bordered tbody:first-child tr:first-child td:last-child{-webkit-border-radius:0 4px 0 0;-moz-border-radius:0 4px 0 0;border-radius:0 4px 0 0}.table-bordered thead:last-child tr:last-child th:first-child,.table-bordered tbody:last-child tr:last-child td:first-child{-webkit-border-radius:0 0 0 4px;-moz-border-radius:0 0 0 4px;border-radius:0 0 0 4px}.table-bordered thead:last-child tr:last-child th:last-child,.table-bordered tbody:last-child tr:last-child td:last-child{-webkit-border-radius:0 0 4px 0;-moz-border-radius:0 0 4px 0;border-radius:0 0 4px 0}.table-striped tbody tr:nth-child(odd) td,.table-striped tbody tr:nth-child(odd) th{background-color:#f9f9f9}.table tbody tr:hover td,.table tbody tr:hover th{background-color:#f5f5f5}table .span1{float:none;width:44px;margin-left:0}table .span2{float:none;width:124px;margin-left:0}table .span3{float:none;width:204px;margin-left:0}table .span4{float:none;width:284px;margin-left:0}table .span5{float:none;width:364px;margin-left:0}table .span6{float:none;width:444px;margin-left:0}table .span7{float:none;width:524px;margin-left:0}table .span8{float:none;width:604px;margin-left:0}table .span9{float:none;width:684px;margin-left:0}table .span10{float:none;width:764px;margin-left:0}table .span11{float:none;width:844px;margin-left:0}table .span12{float:none;width:924px;margin-left:0}table .span13{float:none;width:1004px;margin-left:0}table .span14{float:none;width:1084px;margin-left:0}table .span15{float:none;width:1164px;margin-left:0}table .span16{float:none;width:1244px;margin-left:0}table .span17{float:none;width:1324px;margin-left:0}table .span18{float:none;width:1404px;margin-left:0}table .span19{float:none;width:1484px;margin-left:0}table .span20{float:none;width:1564px;margin-left:0}table .span21{float:none;width:1644px;margin-left:0}table .span22{float:none;width:1724px;margin-left:0}table .span23{float:none;width:1804px;margin-left:0}table .span24{float:none;width:1884px;margin-left:0}[class^="icon-"],[class*=" icon-"]{display:inline-block;width:14px;height:14px;line-height:14px;vertical-align:text-top;background-image:url("img/glyphicons-halflings.png");background-position:14px 14px;background-repeat:no-repeat;*margin-right:.3em}[class^="icon-"]:last-child,[class*=" icon-"]:last-child{*margin-left:0}.icon-white{background-image:url("img/glyphicons-halflings-white.png")}.icon-glass{background-position:0 0}.icon-music{background-position:-24px 0}.icon-search{background-position:-48px 0}.icon-envelope{background-position:-72px 0}.icon-heart{background-position:-96px 0}.icon-star{background-position:-120px 0}.icon-star-empty{background-position:-144px 0}.icon-user{background-position:-168px 0}.icon-film{background-position:-192px 0}.icon-th-large{background-position:-216px 0}.icon-th{background-position:-240px 0}.icon-th-list{background-position:-264px 0}.icon-ok{background-position:-288px 0}.icon-remove{background-position:-312px 0}.icon-zoom-in{background-position:-336px 0}.icon-zoom-out{background-position:-360px 0}.icon-off{background-position:-384px 0}.icon-signal{background-position:-408px 0}.icon-cog{background-position:-432px 0}.icon-trash{background-position:-456px 0}.icon-home{background-position:0 -24px}.icon-file{background-position:-24px -24px}.icon-time{background-position:-48px -24px}.icon-road{background-position:-72px -24px}.icon-download-alt{background-position:-96px -24px}.icon-download{background-position:-120px -24px}.icon-upload{background-position:-144px -24px}.icon-inbox{background-position:-168px -24px}.icon-play-circle{background-position:-192px -24px}.icon-repeat{background-position:-216px -24px}.icon-refresh{background-position:-240px -24px}.icon-list-alt{background-position:-264px -24px}.icon-lock{background-position:-287px -24px}.icon-flag{background-position:-312px -24px}.icon-headphones{background-position:-336px -24px}.icon-volume-off{background-position:-360px -24px}.icon-volume-down{background-position:-384px -24px}.icon-volume-up{background-position:-408px -24px}.icon-qrcode{background-position:-432px -24px}.icon-barcode{background-position:-456px -24px}.icon-tag{background-position:0 -48px}.icon-tags{background-position:-25px -48px}.icon-book{background-position:-48px -48px}.icon-bookmark{background-position:-72px -48px}.icon-print{background-position:-96px -48px}.icon-camera{background-position:-120px -48px}.icon-font{background-position:-144px -48px}.icon-bold{background-position:-167px -48px}.icon-italic{background-position:-192px -48px}.icon-text-height{background-position:-216px -48px}.icon-text-width{background-position:-240px -48px}.icon-align-left{background-position:-264px -48px}.icon-align-center{background-position:-288px -48px}.icon-align-right{background-position:-312px -48px}.icon-align-justify{background-position:-336px -48px}.icon-list{background-position:-360px -48px}.icon-indent-left{background-position:-384px -48px}.icon-indent-right{background-position:-408px -48px}.icon-facetime-video{background-position:-432px -48px}.icon-picture{background-position:-456px -48px}.icon-pencil{background-position:0 -72px}.icon-map-marker{background-position:-24px -72px}.icon-adjust{background-position:-48px -72px}.icon-tint{background-position:-72px -72px}.icon-edit{background-position:-96px -72px}.icon-share{background-position:-120px -72px}.icon-check{background-position:-144px -72px}.icon-move{background-position:-168px -72px}.icon-step-backward{background-position:-192px -72px}.icon-fast-backward{background-position:-216px -72px}.icon-backward{background-position:-240px -72px}.icon-play{background-position:-264px -72px}.icon-pause{background-position:-288px -72px}.icon-stop{background-position:-312px -72px}.icon-forward{background-position:-336px -72px}.icon-fast-forward{background-position:-360px -72px}.icon-step-forward{background-position:-384px -72px}.icon-eject{background-position:-408px -72px}.icon-chevron-left{background-position:-432px -72px}.icon-chevron-right{background-position:-456px -72px}.icon-plus-sign{background-position:0 -96px}.icon-minus-sign{background-position:-24px -96px}.icon-remove-sign{background-position:-48px -96px}.icon-ok-sign{background-position:-72px -96px}.icon-question-sign{background-position:-96px -96px}.icon-info-sign{background-position:-120px -96px}.icon-screenshot{background-position:-144px -96px}.icon-remove-circle{background-position:-168px -96px}.icon-ok-circle{background-position:-192px -96px}.icon-ban-circle{background-position:-216px -96px}.icon-arrow-left{background-position:-240px -96px}.icon-arrow-right{background-position:-264px -96px}.icon-arrow-up{background-position:-289px -96px}.icon-arrow-down{background-position:-312px -96px}.icon-share-alt{background-position:-336px -96px}.icon-resize-full{background-position:-360px -96px}.icon-resize-small{background-position:-384px -96px}.icon-plus{background-position:-408px -96px}.icon-minus{background-position:-433px -96px}.icon-asterisk{background-position:-456px -96px}.icon-exclamation-sign{background-position:0 -120px}.icon-gift{background-position:-24px -120px}.icon-leaf{background-position:-48px -120px}.icon-fire{background-position:-72px -120px}.icon-eye-open{background-position:-96px -120px}.icon-eye-close{background-position:-120px -120px}.icon-warning-sign{background-position:-144px -120px}.icon-plane{background-position:-168px -120px}.icon-calendar{background-position:-192px -120px}.icon-random{background-position:-216px -120px}.icon-comment{background-position:-240px -120px}.icon-magnet{background-position:-264px -120px}.icon-chevron-up{background-position:-288px -120px}.icon-chevron-down{background-position:-313px -119px}.icon-retweet{background-position:-336px -120px}.icon-shopping-cart{background-position:-360px -120px}.icon-folder-close{background-position:-384px -120px}.icon-folder-open{background-position:-408px -120px}.icon-resize-vertical{background-position:-432px -119px}.icon-resize-horizontal{background-position:-456px -118px}.dropdown{position:relative}.dropdown-toggle{*margin-bottom:-3px}.dropdown-toggle:active,.open .dropdown-toggle{outline:0}.caret{display:inline-block;width:0;height:0;vertical-align:top;border-left:4px solid transparent;border-right:4px solid transparent;border-top:4px solid #000;opacity:.3;filter:alpha(opacity=30);content:""}.dropdown .caret{margin-top:8px;margin-left:2px}.dropdown:hover .caret,.open.dropdown .caret{opacity:1;filter:alpha(opacity=100)}.dropdown-menu{position:absolute;top:100%;left:0;z-index:1000;float:left;display:none;min-width:160px;padding:4px 0;margin:0;list-style:none;background-color:#fff;border-color:#ccc;border-color:rgba(0,0,0,0.2);border-style:solid;border-width:1px;-webkit-border-radius:0 0 5px 5px;-moz-border-radius:0 0 5px 5px;border-radius:0 0 5px 5px;-webkit-box-shadow:0 5px 10px rgba(0,0,0,0.2);-moz-box-shadow:0 5px 10px rgba(0,0,0,0.2);box-shadow:0 5px 10px rgba(0,0,0,0.2);-webkit-background-clip:padding-box;-moz-background-clip:padding;background-clip:padding-box;*border-right-width:2px;*border-bottom-width:2px}.dropdown-menu.pull-right{right:0;left:auto}.dropdown-menu .divider{height:1px;margin:8px 1px;overflow:hidden;background-color:#e5e5e5;border-bottom:1px solid #fff;*width:100%;*margin:-5px 0 5px}.dropdown-menu a{display:block;padding:3px 15px;clear:both;font-weight:normal;line-height:18px;color:#333;white-space:nowrap}.dropdown-menu li>a:hover,.dropdown-menu .active>a,.dropdown-menu .active>a:hover{color:#fff;text-decoration:none;background-color:#08c}.dropdown.open{*z-index:1000}.dropdown.open .dropdown-toggle{color:#fff;background:#ccc;background:rgba(0,0,0,0.3)}.dropdown.open .dropdown-menu{display:block}.pull-right .dropdown-menu{left:auto;right:0}.dropup .caret,.navbar-fixed-bottom .dropdown .caret{border-top:0;border-bottom:4px solid #000;content:"\2191"}.dropup .dropdown-menu,.navbar-fixed-bottom .dropdown .dropdown-menu{top:auto;bottom:100%;margin-bottom:1px}.typeahead{margin-top:2px;-webkit-border-radius:4px;-moz-border-radius:4px;border-radius:4px}.well{min-height:20px;padding:19px;margin-bottom:20px;background-color:#f5f5f5;border:1px solid #eee;border:1px solid rgba(0,0,0,0.05);-webkit-border-radius:4px;-moz-border-radius:4px;border-radius:4px;-webkit-box-shadow:inset 0 1px 1px rgba(0,0,0,0.05);-moz-box-shadow:inset 0 1px 1px rgba(0,0,0,0.05);box-shadow:inset 0 1px 1px rgba(0,0,0,0.05)}.well blockquote{border-color:#ddd;border-color:rgba(0,0,0,0.15)}.well-large{padding:24px;-webkit-border-radius:6px;-moz-border-radius:6px;border-radius:6px}.well-small{padding:9px;-webkit-border-radius:3px;-moz-border-radius:3px;border-radius:3px}.fade{-webkit-transition:opacity .15s linear;-moz-transition:opacity .15s linear;-ms-transition:opacity .15s linear;-o-transition:opacity .15s linear;transition:opacity .15s linear;opacity:0}.fade.in{opacity:1}.collapse{-webkit-transition:height .35s ease;-moz-transition:height .35s ease;-ms-transition:height .35s ease;-o-transition:height .35s ease;transition:height .35s ease;position:relative;overflow:hidden;height:0}.collapse.in{height:auto}.close{float:right;font-size:20px;font-weight:bold;line-height:18px;color:#000;text-shadow:0 1px 0 #fff;opacity:.2;filter:alpha(opacity=20)}.close:hover{color:#000;text-decoration:none;opacity:.4;filter:alpha(opacity=40);cursor:pointer}.btn{display:inline-block;*display:inline;*zoom:1;padding:4px 10px 4px;margin-bottom:0;font-size:13px;line-height:18px;color:#333;text-align:center;text-shadow:0 1px 1px rgba(255,255,255,0.75);vertical-align:middle;background-color:#f5f5f5;background-image:-moz-linear-gradient(top,#fff,#e6e6e6);background-image:-ms-linear-gradient(top,#fff,#e6e6e6);background-image:-webkit-gradient(linear,0 0,0 100%,from(#fff),to(#e6e6e6));background-image:-webkit-linear-gradient(top,#fff,#e6e6e6);background-image:-o-linear-gradient(top,#fff,#e6e6e6);background-image:linear-gradient(top,#fff,#e6e6e6);background-repeat:repeat-x;filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#ffffff',endColorstr='#e6e6e6',GradientType=0);border-color:#e6e6e6 #e6e6e6 #bfbfbf;border-color:rgba(0,0,0,0.1) rgba(0,0,0,0.1) rgba(0,0,0,0.25);filter:progid:dximagetransform.microsoft.gradient(enabled=false);border:1px solid #ccc;border-bottom-color:#b3b3b3;-webkit-border-radius:4px;-moz-border-radius:4px;border-radius:4px;-webkit-box-shadow:inset 0 1px 0 rgba(255,255,255,0.2),0 1px 2px rgba(0,0,0,0.05);-moz-box-shadow:inset 0 1px 0 rgba(255,255,255,0.2),0 1px 2px rgba(0,0,0,0.05);box-shadow:inset 0 1px 0 rgba(255,255,255,0.2),0 1px 2px rgba(0,0,0,0.05);cursor:pointer;*margin-left:.3em}.btn:hover,.btn:active,.btn.active,.btn.disabled,.btn[disabled]{background-color:#e6e6e6}.btn:active,.btn.active{background-color:#ccc \9}.btn:first-child{*margin-left:0}.btn:hover{color:#333;text-decoration:none;background-color:#e6e6e6;background-position:0 -15px;-webkit-transition:background-position .1s linear;-moz-transition:background-position .1s linear;-ms-transition:background-position .1s linear;-o-transition:background-position .1s linear;transition:background-position .1s linear}.btn:focus{outline:thin dotted #333;outline:5px auto -webkit-focus-ring-color;outline-offset:-2px}.btn.active,.btn:active{background-image:none;-webkit-box-shadow:inset 0 2px 4px rgba(0,0,0,0.15),0 1px 2px rgba(0,0,0,0.05);-moz-box-shadow:inset 0 2px 4px rgba(0,0,0,0.15),0 1px 2px rgba(0,0,0,0.05);box-shadow:inset 0 2px 4px rgba(0,0,0,0.15),0 1px 2px rgba(0,0,0,0.05);background-color:#e6e6e6;background-color:#d9d9d9 \9;outline:0}.btn.disabled,.btn[disabled]{cursor:default;background-image:none;background-color:#e6e6e6;opacity:.65;filter:alpha(opacity=65);-webkit-box-shadow:none;-moz-box-shadow:none;box-shadow:none}.btn-large{padding:9px 14px;font-size:15px;line-height:normal;-webkit-border-radius:5px;-moz-border-radius:5px;border-radius:5px}.btn-large [class^="icon-"]{margin-top:1px}.btn-small{padding:5px 9px;font-size:11px;line-height:16px}.btn-small [class^="icon-"]{margin-top:-1px}.btn-mini{padding:2px 6px;font-size:11px;line-height:14px}.btn-primary,.btn-primary:hover,.btn-warning,.btn-warning:hover,.btn-danger,.btn-danger:hover,.btn-success,.btn-success:hover,.btn-info,.btn-info:hover,.btn-inverse,.btn-inverse:hover{text-shadow:0 -1px 0 rgba(0,0,0,0.25);color:#fff}.btn-primary.active,.btn-warning.active,.btn-danger.active,.btn-success.active,.btn-info.active,.btn-inverse.active{color:rgba(255,255,255,0.75)}.btn-primary{background-color:#0074cc;background-image:-moz-linear-gradient(top,#08c,#05c);background-image:-ms-linear-gradient(top,#08c,#05c);background-image:-webkit-gradient(linear,0 0,0 100%,from(#08c),to(#05c));background-image:-webkit-linear-gradient(top,#08c,#05c);background-image:-o-linear-gradient(top,#08c,#05c);background-image:linear-gradient(top,#08c,#05c);background-repeat:repeat-x;filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#0088cc',endColorstr='#0055cc',GradientType=0);border-color:#05c #05c #003580;border-color:rgba(0,0,0,0.1) rgba(0,0,0,0.1) rgba(0,0,0,0.25);filter:progid:dximagetransform.microsoft.gradient(enabled=false)}.btn-primary:hover,.btn-primary:active,.btn-primary.active,.btn-primary.disabled,.btn-primary[disabled]{background-color:#05c}.btn-primary:active,.btn-primary.active{background-color:#004099 \9}.btn-warning{background-color:#faa732;background-image:-moz-linear-gradient(top,#fbb450,#f89406);background-image:-ms-linear-gradient(top,#fbb450,#f89406);background-image:-webkit-gradient(linear,0 0,0 100%,from(#fbb450),to(#f89406));background-image:-webkit-linear-gradient(top,#fbb450,#f89406);background-image:-o-linear-gradient(top,#fbb450,#f89406);background-image:linear-gradient(top,#fbb450,#f89406);background-repeat:repeat-x;filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#fbb450',endColorstr='#f89406',GradientType=0);border-color:#f89406 #f89406 #ad6704;border-color:rgba(0,0,0,0.1) rgba(0,0,0,0.1) rgba(0,0,0,0.25);filter:progid:dximagetransform.microsoft.gradient(enabled=false)}.btn-warning:hover,.btn-warning:active,.btn-warning.active,.btn-warning.disabled,.btn-warning[disabled]{background-color:#f89406}.btn-warning:active,.btn-warning.active{background-color:#c67605 \9}.btn-danger{background-color:#da4f49;background-image:-moz-linear-gradient(top,#ee5f5b,#bd362f);background-image:-ms-linear-gradient(top,#ee5f5b,#bd362f);background-image:-webkit-gradient(linear,0 0,0 100%,from(#ee5f5b),to(#bd362f));background-image:-webkit-linear-gradient(top,#ee5f5b,#bd362f);background-image:-o-linear-gradient(top,#ee5f5b,#bd362f);background-image:linear-gradient(top,#ee5f5b,#bd362f);background-repeat:repeat-x;filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#ee5f5b',endColorstr='#bd362f',GradientType=0);border-color:#bd362f #bd362f #802420;border-color:rgba(0,0,0,0.1) rgba(0,0,0,0.1) rgba(0,0,0,0.25);filter:progid:dximagetransform.microsoft.gradient(enabled=false)}.btn-danger:hover,.btn-danger:active,.btn-danger.active,.btn-danger.disabled,.btn-danger[disabled]{background-color:#bd362f}.btn-danger:active,.btn-danger.active{background-color:#942a25 \9}.btn-success{background-color:#5bb75b;background-image:-moz-linear-gradient(top,#62c462,#51a351);background-image:-ms-linear-gradient(top,#62c462,#51a351);background-image:-webkit-gradient(linear,0 0,0 100%,from(#62c462),to(#51a351));background-image:-webkit-linear-gradient(top,#62c462,#51a351);background-image:-o-linear-gradient(top,#62c462,#51a351);background-image:linear-gradient(top,#62c462,#51a351);background-repeat:repeat-x;filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#62c462',endColorstr='#51a351',GradientType=0);border-color:#51a351 #51a351 #387038;border-color:rgba(0,0,0,0.1) rgba(0,0,0,0.1) rgba(0,0,0,0.25);filter:progid:dximagetransform.microsoft.gradient(enabled=false)}.btn-success:hover,.btn-success:active,.btn-success.active,.btn-success.disabled,.btn-success[disabled]{background-color:#51a351}.btn-success:active,.btn-success.active{background-color:#408140 \9}.btn-info{background-color:#49afcd;background-image:-moz-linear-gradient(top,#5bc0de,#2f96b4);background-image:-ms-linear-gradient(top,#5bc0de,#2f96b4);background-image:-webkit-gradient(linear,0 0,0 100%,from(#5bc0de),to(#2f96b4));background-image:-webkit-linear-gradient(top,#5bc0de,#2f96b4);background-image:-o-linear-gradient(top,#5bc0de,#2f96b4);background-image:linear-gradient(top,#5bc0de,#2f96b4);background-repeat:repeat-x;filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#5bc0de',endColorstr='#2f96b4',GradientType=0);border-color:#2f96b4 #2f96b4 #1f6377;border-color:rgba(0,0,0,0.1) rgba(0,0,0,0.1) rgba(0,0,0,0.25);filter:progid:dximagetransform.microsoft.gradient(enabled=false)}.btn-info:hover,.btn-info:active,.btn-info.active,.btn-info.disabled,.btn-info[disabled]{background-color:#2f96b4}.btn-info:active,.btn-info.active{background-color:#24748c \9}.btn-inverse{background-color:#414141;background-image:-moz-linear-gradient(top,#555,#222);background-image:-ms-linear-gradient(top,#555,#222);background-image:-webkit-gradient(linear,0 0,0 100%,from(#555),to(#222));background-image:-webkit-linear-gradient(top,#555,#222);background-image:-o-linear-gradient(top,#555,#222);background-image:linear-gradient(top,#555,#222);background-repeat:repeat-x;filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#555555',endColorstr='#222222',GradientType=0);border-color:#222 #222 #000;border-color:rgba(0,0,0,0.1) rgba(0,0,0,0.1) rgba(0,0,0,0.25);filter:progid:dximagetransform.microsoft.gradient(enabled=false)}.btn-inverse:hover,.btn-inverse:active,.btn-inverse.active,.btn-inverse.disabled,.btn-inverse[disabled]{background-color:#222}.btn-inverse:active,.btn-inverse.active{background-color:#080808 \9}button.btn,input[type="submit"].btn{*padding-top:2px;*padding-bottom:2px}button.btn::-moz-focus-inner,input[type="submit"].btn::-moz-focus-inner{padding:0;border:0}button.btn.btn-large,input[type="submit"].btn.btn-large{*padding-top:7px;*padding-bottom:7px}button.btn.btn-small,input[type="submit"].btn.btn-small{*padding-top:3px;*padding-bottom:3px}button.btn.btn-mini,input[type="submit"].btn.btn-mini{*padding-top:1px;*padding-bottom:1px}.btn-group{position:relative;*zoom:1;*margin-left:.3em}.btn-group:before,.btn-group:after{display:table;content:""}.btn-group:after{clear:both}.btn-group:first-child{*margin-left:0}.btn-group+.btn-group{margin-left:5px}.btn-toolbar{margin-top:9px;margin-bottom:9px}.btn-toolbar .btn-group{display:inline-block;*display:inline;*zoom:1}.btn-group .btn{position:relative;float:left;margin-left:-1px;-webkit-border-radius:0;-moz-border-radius:0;border-radius:0}.btn-group .btn:first-child{margin-left:0;-webkit-border-top-left-radius:4px;-moz-border-radius-topleft:4px;border-top-left-radius:4px;-webkit-border-bottom-left-radius:4px;-moz-border-radius-bottomleft:4px;border-bottom-left-radius:4px}.btn-group .btn:last-child,.btn-group .dropdown-toggle{-webkit-border-top-right-radius:4px;-moz-border-radius-topright:4px;border-top-right-radius:4px;-webkit-border-bottom-right-radius:4px;-moz-border-radius-bottomright:4px;border-bottom-right-radius:4px}.btn-group .btn.large:first-child{margin-left:0;-webkit-border-top-left-radius:6px;-moz-border-radius-topleft:6px;border-top-left-radius:6px;-webkit-border-bottom-left-radius:6px;-moz-border-radius-bottomleft:6px;border-bottom-left-radius:6px}.btn-group .btn.large:last-child,.btn-group .large.dropdown-toggle{-webkit-border-top-right-radius:6px;-moz-border-radius-topright:6px;border-top-right-radius:6px;-webkit-border-bottom-right-radius:6px;-moz-border-radius-bottomright:6px;border-bottom-right-radius:6px}.btn-group .btn:hover,.btn-group .btn:focus,.btn-group .btn:active,.btn-group .btn.active{z-index:2}.btn-group .dropdown-toggle:active,.btn-group.open .dropdown-toggle{outline:0}.btn-group .dropdown-toggle{padding-left:8px;padding-right:8px;-webkit-box-shadow:inset 1px 0 0 rgba(255,255,255,0.125),inset 0 1px 0 rgba(255,255,255,0.2),0 1px 2px rgba(0,0,0,0.05);-moz-box-shadow:inset 1px 0 0 rgba(255,255,255,0.125),inset 0 1px 0 rgba(255,255,255,0.2),0 1px 2px rgba(0,0,0,0.05);box-shadow:inset 1px 0 0 rgba(255,255,255,0.125),inset 0 1px 0 rgba(255,255,255,0.2),0 1px 2px rgba(0,0,0,0.05);*padding-top:3px;*padding-bottom:3px}.btn-group .btn-mini.dropdown-toggle{padding-left:5px;padding-right:5px;*padding-top:1px;*padding-bottom:1px}.btn-group .btn-small.dropdown-toggle{*padding-top:4px;*padding-bottom:4px}.btn-group .btn-large.dropdown-toggle{padding-left:12px;padding-right:12px}.btn-group.open{*z-index:1000}.btn-group.open .dropdown-menu{display:block;margin-top:1px;-webkit-border-radius:5px;-moz-border-radius:5px;border-radius:5px}.btn-group.open .dropdown-toggle{background-image:none;-webkit-box-shadow:inset 0 1px 6px rgba(0,0,0,0.15),0 1px 2px rgba(0,0,0,0.05);-moz-box-shadow:inset 0 1px 6px rgba(0,0,0,0.15),0 1px 2px rgba(0,0,0,0.05);box-shadow:inset 0 1px 6px rgba(0,0,0,0.15),0 1px 2px rgba(0,0,0,0.05)}.btn .caret{margin-top:7px;margin-left:0}.btn:hover .caret,.open.btn-group .caret{opacity:1;filter:alpha(opacity=100)}.btn-mini .caret{margin-top:5px}.btn-small .caret{margin-top:6px}.btn-large .caret{margin-top:6px;border-left:5px solid transparent;border-right:5px solid transparent;border-top:5px solid #000}.btn-primary .caret,.btn-warning .caret,.btn-danger .caret,.btn-info .caret,.btn-success .caret,.btn-inverse .caret{border-top-color:#fff;border-bottom-color:#fff;opacity:.75;filter:alpha(opacity=75)}.alert{padding:8px 35px 8px 14px;margin-bottom:18px;text-shadow:0 1px 0 rgba(255,255,255,0.5);background-color:#fcf8e3;border:1px solid #fbeed5;-webkit-border-radius:4px;-moz-border-radius:4px;border-radius:4px;color:#c09853}.alert-heading{color:inherit}.alert .close{position:relative;top:-2px;right:-21px;line-height:18px}.alert-success{background-color:#dff0d8;border-color:#d6e9c6;color:#468847}.alert-danger,.alert-error{background-color:#f2dede;border-color:#eed3d7;color:#b94a48}.alert-info{background-color:#d9edf7;border-color:#bce8f1;color:#3a87ad}.alert-block{padding-top:14px;padding-bottom:14px}.alert-block>p,.alert-block>ul{margin-bottom:0}.alert-block p+p{margin-top:5px}.nav{margin-left:0;margin-bottom:18px;list-style:none}.nav>li>a{display:block}.nav>li>a:hover{text-decoration:none;background-color:#eee}.nav .nav-header{display:block;padding:3px 15px;font-size:11px;font-weight:bold;line-height:18px;color:#999;text-shadow:0 1px 0 rgba(255,255,255,0.5);text-transform:uppercase}.nav li+.nav-header{margin-top:9px}.nav-list{padding-left:15px;padding-right:15px;margin-bottom:0}.nav-list>li>a,.nav-list .nav-header{margin-left:-15px;margin-right:-15px;text-shadow:0 1px 0 rgba(255,255,255,0.5)}.nav-list>li>a{padding:3px 15px}.nav-list>.active>a,.nav-list>.active>a:hover{color:#fff;text-shadow:0 -1px 0 rgba(0,0,0,0.2);background-color:#08c}.nav-list [class^="icon-"]{margin-right:2px}.nav-list .divider{height:1px;margin:8px 1px;overflow:hidden;background-color:#e5e5e5;border-bottom:1px solid #fff;*width:100%;*margin:-5px 0 5px}.nav-tabs,.nav-pills{*zoom:1}.nav-tabs:before,.nav-pills:before,.nav-tabs:after,.nav-pills:after{display:table;content:""}.nav-tabs:after,.nav-pills:after{clear:both}.nav-tabs>li,.nav-pills>li{float:left}.nav-tabs>li>a,.nav-pills>li>a{padding-right:12px;padding-left:12px;margin-right:2px;line-height:14px}.nav-tabs{border-bottom:1px solid #ddd}.nav-tabs>li{margin-bottom:-1px}.nav-tabs>li>a{padding-top:8px;padding-bottom:8px;line-height:18px;border:1px solid transparent;-webkit-border-radius:4px 4px 0 0;-moz-border-radius:4px 4px 0 0;border-radius:4px 4px 0 0}.nav-tabs>li>a:hover{border-color:#eee #eee #ddd}.nav-tabs>.active>a,.nav-tabs>.active>a:hover{color:#555;background-color:#fff;border:1px solid #ddd;border-bottom-color:transparent;cursor:default}.nav-pills>li>a{padding-top:8px;padding-bottom:8px;margin-top:2px;margin-bottom:2px;-webkit-border-radius:5px;-moz-border-radius:5px;border-radius:5px}.nav-pills>.active>a,.nav-pills>.active>a:hover{color:#fff;background-color:#08c}.nav-stacked>li{float:none}.nav-stacked>li>a{margin-right:0}.nav-tabs.nav-stacked{border-bottom:0}.nav-tabs.nav-stacked>li>a{border:1px solid #ddd;-webkit-border-radius:0;-moz-border-radius:0;border-radius:0}.nav-tabs.nav-stacked>li:first-child>a{-webkit-border-radius:4px 4px 0 0;-moz-border-radius:4px 4px 0 0;border-radius:4px 4px 0 0}.nav-tabs.nav-stacked>li:last-child>a{-webkit-border-radius:0 0 4px 4px;-moz-border-radius:0 0 4px 4px;border-radius:0 0 4px 4px}.nav-tabs.nav-stacked>li>a:hover{border-color:#ddd;z-index:2}.nav-pills.nav-stacked>li>a{margin-bottom:3px}.nav-pills.nav-stacked>li:last-child>a{margin-bottom:1px}.nav-tabs .dropdown-menu,.nav-pills .dropdown-menu{margin-top:1px;border-width:1px}.nav-pills .dropdown-menu{-webkit-border-radius:4px;-moz-border-radius:4px;border-radius:4px}.nav-tabs .dropdown-toggle .caret,.nav-pills .dropdown-toggle .caret{border-top-color:#08c;border-bottom-color:#08c;margin-top:6px}.nav-tabs .dropdown-toggle:hover .caret,.nav-pills .dropdown-toggle:hover .caret{border-top-color:#005580;border-bottom-color:#005580}.nav-tabs .active .dropdown-toggle .caret,.nav-pills .active .dropdown-toggle .caret{border-top-color:#333;border-bottom-color:#333}.nav>.dropdown.active>a:hover{color:#000;cursor:pointer}.nav-tabs .open .dropdown-toggle,.nav-pills .open .dropdown-toggle,.nav>.open.active>a:hover{color:#fff;background-color:#999;border-color:#999}.nav .open .caret,.nav .open.active .caret,.nav .open a:hover .caret{border-top-color:#fff;border-bottom-color:#fff;opacity:1;filter:alpha(opacity=100)}.tabs-stacked .open>a:hover{border-color:#999}.tabbable{*zoom:1}.tabbable:before,.tabbable:after{display:table;content:""}.tabbable:after{clear:both}.tab-content{display:table;width:100%}.tabs-below .nav-tabs,.tabs-right .nav-tabs,.tabs-left .nav-tabs{border-bottom:0}.tab-content>.tab-pane,.pill-content>.pill-pane{display:none}.tab-content>.active,.pill-content>.active{display:block}.tabs-below .nav-tabs{border-top:1px solid #ddd}.tabs-below .nav-tabs>li{margin-top:-1px;margin-bottom:0}.tabs-below .nav-tabs>li>a{-webkit-border-radius:0 0 4px 4px;-moz-border-radius:0 0 4px 4px;border-radius:0 0 4px 4px}.tabs-below .nav-tabs>li>a:hover{border-bottom-color:transparent;border-top-color:#ddd}.tabs-below .nav-tabs .active>a,.tabs-below .nav-tabs .active>a:hover{border-color:transparent #ddd #ddd #ddd}.tabs-left .nav-tabs>li,.tabs-right .nav-tabs>li{float:none}.tabs-left .nav-tabs>li>a,.tabs-right .nav-tabs>li>a{min-width:74px;margin-right:0;margin-bottom:3px}.tabs-left .nav-tabs{float:left;margin-right:19px;border-right:1px solid #ddd}.tabs-left .nav-tabs>li>a{margin-right:-1px;-webkit-border-radius:4px 0 0 4px;-moz-border-radius:4px 0 0 4px;border-radius:4px 0 0 4px}.tabs-left .nav-tabs>li>a:hover{border-color:#eee #ddd #eee #eee}.tabs-left .nav-tabs .active>a,.tabs-left .nav-tabs .active>a:hover{border-color:#ddd transparent #ddd #ddd;*border-right-color:#fff}.tabs-right .nav-tabs{float:right;margin-left:19px;border-left:1px solid #ddd}.tabs-right .nav-tabs>li>a{margin-left:-1px;-webkit-border-radius:0 4px 4px 0;-moz-border-radius:0 4px 4px 0;border-radius:0 4px 4px 0}.tabs-right .nav-tabs>li>a:hover{border-color:#eee #eee #eee #ddd}.tabs-right .nav-tabs .active>a,.tabs-right .nav-tabs .active>a:hover{border-color:#ddd #ddd #ddd transparent;*border-left-color:#fff}.navbar{*position:relative;*z-index:2;overflow:visible;margin-bottom:18px}.navbar-inner{padding-left:20px;padding-right:20px;background-color:#1a94c9;background-image:-moz-linear-gradient(top,#049cdb,#3a87ad);background-image:-ms-linear-gradient(top,#049cdb,#3a87ad);background-image:-webkit-gradient(linear,0 0,0 100%,from(#049cdb),to(#3a87ad));background-image:-webkit-linear-gradient(top,#049cdb,#3a87ad);background-image:-o-linear-gradient(top,#049cdb,#3a87ad);background-image:linear-gradient(top,#049cdb,#3a87ad);background-repeat:repeat-x;filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#049cdb',endColorstr='#3a87ad',GradientType=0);-webkit-border-radius:4px;-moz-border-radius:4px;border-radius:4px;-webkit-box-shadow:0 1px 3px rgba(0,0,0,0.25),inset 0 -1px 0 rgba(0,0,0,0.1);-moz-box-shadow:0 1px 3px rgba(0,0,0,0.25),inset 0 -1px 0 rgba(0,0,0,0.1);box-shadow:0 1px 3px rgba(0,0,0,0.25),inset 0 -1px 0 rgba(0,0,0,0.1)}.navbar .container{width:auto}.btn-navbar{display:none;float:right;padding:7px 10px;margin-left:5px;margin-right:5px;background-color:#1a94c9;background-image:-moz-linear-gradient(top,#049cdb,#3a87ad);background-image:-ms-linear-gradient(top,#049cdb,#3a87ad);background-image:-webkit-gradient(linear,0 0,0 100%,from(#049cdb),to(#3a87ad));background-image:-webkit-linear-gradient(top,#049cdb,#3a87ad);background-image:-o-linear-gradient(top,#049cdb,#3a87ad);background-image:linear-gradient(top,#049cdb,#3a87ad);background-repeat:repeat-x;filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#049cdb',endColorstr='#3a87ad',GradientType=0);border-color:#3a87ad #3a87ad #275a74;border-color:rgba(0,0,0,0.1) rgba(0,0,0,0.1) rgba(0,0,0,0.25);filter:progid:dximagetransform.microsoft.gradient(enabled=false);-webkit-box-shadow:inset 0 1px 0 rgba(255,255,255,0.1),0 1px 0 rgba(255,255,255,0.075);-moz-box-shadow:inset 0 1px 0 rgba(255,255,255,0.1),0 1px 0 rgba(255,255,255,0.075);box-shadow:inset 0 1px 0 rgba(255,255,255,0.1),0 1px 0 rgba(255,255,255,0.075)}.btn-navbar:hover,.btn-navbar:active,.btn-navbar.active,.btn-navbar.disabled,.btn-navbar[disabled]{background-color:#3a87ad}.btn-navbar:active,.btn-navbar.active{background-color:#2d6987 \9}.btn-navbar .icon-bar{display:block;width:18px;height:2px;background-color:#f5f5f5;-webkit-border-radius:1px;-moz-border-radius:1px;border-radius:1px;-webkit-box-shadow:0 1px 0 rgba(0,0,0,0.25);-moz-box-shadow:0 1px 0 rgba(0,0,0,0.25);box-shadow:0 1px 0 rgba(0,0,0,0.25)}.btn-navbar .icon-bar+.icon-bar{margin-top:3px}.nav-collapse.collapse{height:auto}.navbar{color:#fff}.navbar .brand:hover{text-decoration:none}.navbar .brand{float:left;display:block;padding:8px 20px 12px;margin-left:-20px;font-size:20px;font-weight:200;line-height:1;color:#fff}.navbar .navbar-text{margin-bottom:0;line-height:40px}.navbar .btn,.navbar .btn-group{margin-top:5px}.navbar .btn-group .btn{margin-top:0}.navbar-form{margin-bottom:0;*zoom:1}.navbar-form:before,.navbar-form:after{display:table;content:""}.navbar-form:after{clear:both}.navbar-form input,.navbar-form select,.navbar-form .radio,.navbar-form .checkbox{margin-top:5px}.navbar-form input,.navbar-form select{display:inline-block;margin-bottom:0}.navbar-form input[type="image"],.navbar-form input[type="checkbox"],.navbar-form input[type="radio"]{margin-top:3px}.navbar-form .input-append,.navbar-form .input-prepend{margin-top:6px;white-space:nowrap}.navbar-form .input-append input,.navbar-form .input-prepend input{margin-top:0}.navbar-search{position:relative;float:left;margin-top:6px;margin-bottom:0}.navbar-search .search-query{padding:4px 9px;font-family:"Helvetica Neue",Helvetica,Arial,sans-serif;font-size:13px;font-weight:normal;line-height:1;color:#fff;background-color:#8ec0d9;border:1px solid #34789a;-webkit-box-shadow:inset 0 1px 2px rgba(0,0,0,0.1),0 1px 0 rgba(255,255,255,0.15);-moz-box-shadow:inset 0 1px 2px rgba(0,0,0,0.1),0 1px 0 rgba(255,255,255,0.15);box-shadow:inset 0 1px 2px rgba(0,0,0,0.1),0 1px 0 rgba(255,255,255,0.15);-webkit-transition:none;-moz-transition:none;-ms-transition:none;-o-transition:none;transition:none}.navbar-search .search-query:-moz-placeholder{color:#ccc}.navbar-search .search-query::-webkit-input-placeholder{color:#ccc}.navbar-search .search-query:focus,.navbar-search .search-query.focused{padding:5px 10px;color:#333;text-shadow:0 1px 0 #fff;background-color:#fff;border:0;-webkit-box-shadow:0 0 3px rgba(0,0,0,0.15);-moz-box-shadow:0 0 3px rgba(0,0,0,0.15);box-shadow:0 0 3px rgba(0,0,0,0.15);outline:0}.navbar-fixed-top,.navbar-fixed-bottom{position:fixed;right:0;left:0;z-index:1030;margin-bottom:0}.navbar-fixed-top .navbar-inner,.navbar-fixed-bottom .navbar-inner{padding-left:0;padding-right:0;-webkit-border-radius:0;-moz-border-radius:0;border-radius:0}.navbar-fixed-top .container,.navbar-fixed-bottom .container{width:940px}.navbar-fixed-top{top:0}.navbar-fixed-bottom{bottom:0}.navbar .nav{position:relative;left:0;display:block;float:left;margin:0 10px 0 0}.navbar .nav.pull-right{float:right}.navbar .nav>li{display:block;float:left}.navbar .nav>li>a{float:none;padding:10px 10px 11px;line-height:19px;color:#fff;text-decoration:none;text-shadow:0 -1px 0 rgba(0,0,0,0.25)}.navbar .nav>li>a:hover{background-color:transparent;color:#fff;text-decoration:none}.navbar .nav .active>a,.navbar .nav .active>a:hover{color:#fff;text-decoration:none;background-color:#3a87ad}.navbar .divider-vertical{height:40px;width:1px;margin:0 9px;overflow:hidden;background-color:#3a87ad;border-right:1px solid #049cdb}.navbar .nav.pull-right{margin-left:10px;margin-right:0}.navbar .dropdown-menu{margin-top:1px;-webkit-border-radius:4px;-moz-border-radius:4px;border-radius:4px}.navbar .dropdown-menu:before{content:'';display:inline-block;border-left:7px solid transparent;border-right:7px solid transparent;border-bottom:7px solid #ccc;border-bottom-color:rgba(0,0,0,0.2);position:absolute;top:-7px;left:9px}.navbar .dropdown-menu:after{content:'';display:inline-block;border-left:6px solid transparent;border-right:6px solid transparent;border-bottom:6px solid #fff;position:absolute;top:-6px;left:10px}.navbar-fixed-bottom .dropdown-menu:before{border-top:7px solid #ccc;border-top-color:rgba(0,0,0,0.2);border-bottom:0;bottom:-7px;top:auto}.navbar-fixed-bottom .dropdown-menu:after{border-top:6px solid #fff;border-bottom:0;bottom:-6px;top:auto}.navbar .nav .dropdown-toggle .caret,.navbar .nav .open.dropdown .caret{border-top-color:#fff;border-bottom-color:#fff}.navbar .nav .active .caret{opacity:1;filter:alpha(opacity=100)}.navbar .nav .open>.dropdown-toggle,.navbar .nav .active>.dropdown-toggle,.navbar .nav .open.active>.dropdown-toggle{background-color:transparent}.navbar .nav .active>.dropdown-toggle:hover{color:#fff}.navbar .nav.pull-right .dropdown-menu,.navbar .nav .dropdown-menu.pull-right{left:auto;right:0}.navbar .nav.pull-right .dropdown-menu:before,.navbar .nav .dropdown-menu.pull-right:before{left:auto;right:12px}.navbar .nav.pull-right .dropdown-menu:after,.navbar .nav .dropdown-menu.pull-right:after{left:auto;right:13px}.breadcrumb{padding:7px 14px;margin:0 0 18px;list-style:none;background-color:#fbfbfb;background-image:-moz-linear-gradient(top,#fff,#f5f5f5);background-image:-ms-linear-gradient(top,#fff,#f5f5f5);background-image:-webkit-gradient(linear,0 0,0 100%,from(#fff),to(#f5f5f5));background-image:-webkit-linear-gradient(top,#fff,#f5f5f5);background-image:-o-linear-gradient(top,#fff,#f5f5f5);background-image:linear-gradient(top,#fff,#f5f5f5);background-repeat:repeat-x;filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#ffffff',endColorstr='#f5f5f5',GradientType=0);border:1px solid #ddd;-webkit-border-radius:3px;-moz-border-radius:3px;border-radius:3px;-webkit-box-shadow:inset 0 1px 0 #fff;-moz-box-shadow:inset 0 1px 0 #fff;box-shadow:inset 0 1px 0 #fff}.breadcrumb li{display:inline-block;*display:inline;*zoom:1;text-shadow:0 1px 0 #fff}.breadcrumb .divider{padding:0 5px;color:#999}.breadcrumb .active a{color:#333}.pagination{height:36px;margin:18px 0}.pagination ul{display:inline-block;*display:inline;*zoom:1;margin-left:0;margin-bottom:0;-webkit-border-radius:3px;-moz-border-radius:3px;border-radius:3px;-webkit-box-shadow:0 1px 2px rgba(0,0,0,0.05);-moz-box-shadow:0 1px 2px rgba(0,0,0,0.05);box-shadow:0 1px 2px rgba(0,0,0,0.05)}.pagination li{display:inline}.pagination a{float:left;padding:0 14px;line-height:34px;text-decoration:none;border:1px solid #ddd;border-left-width:0}.pagination a:hover,.pagination .active a{background-color:#f5f5f5}.pagination .active a{color:#999;cursor:default}.pagination .disabled span,.pagination .disabled a,.pagination .disabled a:hover{color:#999;background-color:transparent;cursor:default}.pagination li:first-child a{border-left-width:1px;-webkit-border-radius:3px 0 0 3px;-moz-border-radius:3px 0 0 3px;border-radius:3px 0 0 3px}.pagination li:last-child a{-webkit-border-radius:0 3px 3px 0;-moz-border-radius:0 3px 3px 0;border-radius:0 3px 3px 0}.pagination-centered{text-align:center}.pagination-right{text-align:right}.pager{margin-left:0;margin-bottom:18px;list-style:none;text-align:center;*zoom:1}.pager:before,.pager:after{display:table;content:""}.pager:after{clear:both}.pager li{display:inline}.pager a{display:inline-block;padding:5px 14px;background-color:#fff;border:1px solid #ddd;-webkit-border-radius:15px;-moz-border-radius:15px;border-radius:15px}.pager a:hover{text-decoration:none;background-color:#f5f5f5}.pager .next a{float:right}.pager .previous a{float:left}.pager .disabled a,.pager .disabled a:hover{color:#999;background-color:#fff;cursor:default}.modal-open .dropdown-menu{z-index:2050}.modal-open .dropdown.open{*z-index:2050}.modal-open .popover{z-index:2060}.modal-open .tooltip{z-index:2070}.modal-backdrop{position:fixed;top:0;right:0;bottom:0;left:0;z-index:1040;background-color:#000}.modal-backdrop.fade{opacity:0}.modal-backdrop,.modal-backdrop.fade.in{opacity:.8;filter:alpha(opacity=80)}.modal{position:fixed;top:50%;left:50%;z-index:1050;overflow:auto;width:560px;margin:-250px 0 0 -280px;background-color:#fff;border:1px solid #999;border:1px solid rgba(0,0,0,0.3);*border:1px solid #999;-webkit-border-radius:6px;-moz-border-radius:6px;border-radius:6px;-webkit-box-shadow:0 3px 7px rgba(0,0,0,0.3);-moz-box-shadow:0 3px 7px rgba(0,0,0,0.3);box-shadow:0 3px 7px rgba(0,0,0,0.3);-webkit-background-clip:padding-box;-moz-background-clip:padding-box;background-clip:padding-box}.modal.fade{-webkit-transition:opacity .3s linear,top .3s ease-out;-moz-transition:opacity .3s linear,top .3s ease-out;-ms-transition:opacity .3s linear,top .3s ease-out;-o-transition:opacity .3s linear,top .3s ease-out;transition:opacity .3s linear,top .3s ease-out;top:-25%}.modal.fade.in{top:50%}.modal-header{padding:9px 15px;border-bottom:1px solid #eee}.modal-header .close{margin-top:2px}.modal-body{overflow-y:auto;max-height:400px;padding:15px}.modal-form{margin-bottom:0}.modal-footer{padding:14px 15px 15px;margin-bottom:0;text-align:right;background-color:#f5f5f5;border-top:1px solid #ddd;-webkit-border-radius:0 0 6px 6px;-moz-border-radius:0 0 6px 6px;border-radius:0 0 6px 6px;-webkit-box-shadow:inset 0 1px 0 #fff;-moz-box-shadow:inset 0 1px 0 #fff;box-shadow:inset 0 1px 0 #fff;*zoom:1}.modal-footer:before,.modal-footer:after{display:table;content:""}.modal-footer:after{clear:both}.modal-footer .btn+.btn{margin-left:5px;margin-bottom:0}.modal-footer .btn-group .btn+.btn{margin-left:-1px}.tooltip{position:absolute;z-index:1020;display:block;visibility:visible;padding:5px;font-size:11px;opacity:0;filter:alpha(opacity=0)}.tooltip.in{opacity:.8;filter:alpha(opacity=80)}.tooltip.top{margin-top:-2px}.tooltip.right{margin-left:2px}.tooltip.bottom{margin-top:2px}.tooltip.left{margin-left:-2px}.tooltip.top .tooltip-arrow{bottom:0;left:50%;margin-left:-5px;border-left:5px solid transparent;border-right:5px solid transparent;border-top:5px solid #000}.tooltip.left .tooltip-arrow{top:50%;right:0;margin-top:-5px;border-top:5px solid transparent;border-bottom:5px solid transparent;border-left:5px solid #000}.tooltip.bottom .tooltip-arrow{top:0;left:50%;margin-left:-5px;border-left:5px solid transparent;border-right:5px solid transparent;border-bottom:5px solid #000}.tooltip.right .tooltip-arrow{top:50%;left:0;margin-top:-5px;border-top:5px solid transparent;border-bottom:5px solid transparent;border-right:5px solid #000}.tooltip-inner{max-width:200px;padding:3px 8px;color:#fff;text-align:center;text-decoration:none;background-color:#000;-webkit-border-radius:4px;-moz-border-radius:4px;border-radius:4px}.tooltip-arrow{position:absolute;width:0;height:0}.popover{position:absolute;top:0;left:0;z-index:1010;display:none;padding:5px}.popover.top{margin-top:-5px}.popover.right{margin-left:5px}.popover.bottom{margin-top:5px}.popover.left{margin-left:-5px}.popover.top .arrow{bottom:0;left:50%;margin-left:-5px;border-left:5px solid transparent;border-right:5px solid transparent;border-top:5px solid #000}.popover.right .arrow{top:50%;left:0;margin-top:-5px;border-top:5px solid transparent;border-bottom:5px solid transparent;border-right:5px solid #000}.popover.bottom .arrow{top:0;left:50%;margin-left:-5px;border-left:5px solid transparent;border-right:5px solid transparent;border-bottom:5px solid #000}.popover.left .arrow{top:50%;right:0;margin-top:-5px;border-top:5px solid transparent;border-bottom:5px solid transparent;border-left:5px solid #000}.popover .arrow{position:absolute;width:0;height:0}.popover-inner{padding:3px;width:280px;overflow:hidden;background:#000;background:rgba(0,0,0,0.8);-webkit-border-radius:6px;-moz-border-radius:6px;border-radius:6px;-webkit-box-shadow:0 3px 7px rgba(0,0,0,0.3);-moz-box-shadow:0 3px 7px rgba(0,0,0,0.3);box-shadow:0 3px 7px rgba(0,0,0,0.3)}.popover-title{padding:9px 15px;line-height:1;background-color:#f5f5f5;border-bottom:1px solid #eee;-webkit-border-radius:3px 3px 0 0;-moz-border-radius:3px 3px 0 0;border-radius:3px 3px 0 0}.popover-content{padding:14px;background-color:#fff;-webkit-border-radius:0 0 3px 3px;-moz-border-radius:0 0 3px 3px;border-radius:0 0 3px 3px;-webkit-background-clip:padding-box;-moz-background-clip:padding-box;background-clip:padding-box}.popover-content p,.popover-content ul,.popover-content ol{margin-bottom:0}.thumbnails{margin-left:-20px;list-style:none;*zoom:1}.thumbnails:before,.thumbnails:after{display:table;content:""}.thumbnails:after{clear:both}.thumbnails>li{float:left;margin:0 0 18px 20px}.thumbnail{display:block;padding:4px;line-height:1;border:1px solid #ddd;-webkit-border-radius:4px;-moz-border-radius:4px;border-radius:4px;-webkit-box-shadow:0 1px 1px rgba(0,0,0,0.075);-moz-box-shadow:0 1px 1px rgba(0,0,0,0.075);box-shadow:0 1px 1px rgba(0,0,0,0.075)}a.thumbnail:hover{border-color:#08c;-webkit-box-shadow:0 1px 4px rgba(0,105,214,0.25);-moz-box-shadow:0 1px 4px rgba(0,105,214,0.25);box-shadow:0 1px 4px rgba(0,105,214,0.25)}.thumbnail>img{display:block;max-width:100%;margin-left:auto;margin-right:auto}.thumbnail .caption{padding:9px}.label{padding:1px 4px 2px;font-size:10.998px;font-weight:bold;line-height:13px;color:#fff;vertical-align:middle;white-space:nowrap;text-shadow:0 -1px 0 rgba(0,0,0,0.25);background-color:#999;-webkit-border-radius:3px;-moz-border-radius:3px;border-radius:3px}.label:hover{color:#fff;text-decoration:none}.label-important{background-color:#b94a48}.label-important:hover{background-color:#953b39}.label-warning{background-color:#f89406}.label-warning:hover{background-color:#c67605}.label-success{background-color:#468847}.label-success:hover{background-color:#356635}.label-info{background-color:#3a87ad}.label-info:hover{background-color:#2d6987}.label-inverse{background-color:#333}.label-inverse:hover{background-color:#1a1a1a}.badge{padding:1px 9px 2px;font-size:12.025px;font-weight:bold;white-space:nowrap;color:#fff;background-color:#999;-webkit-border-radius:9px;-moz-border-radius:9px;border-radius:9px}.badge:hover{color:#fff;text-decoration:none;cursor:pointer}.badge-error{background-color:#b94a48}.badge-error:hover{background-color:#953b39}.badge-warning{background-color:#f89406}.badge-warning:hover{background-color:#c67605}.badge-success{background-color:#468847}.badge-success:hover{background-color:#356635}.badge-info{background-color:#3a87ad}.badge-info:hover{background-color:#2d6987}.badge-inverse{background-color:#333}.badge-inverse:hover{background-color:#1a1a1a}@-webkit-keyframes progress-bar-stripes{from{background-position:0 0}to{background-position:40px 0}}@-moz-keyframes progress-bar-stripes{from{background-position:0 0}to{background-position:40px 0}}@-ms-keyframes progress-bar-stripes{from{background-position:0 0}to{background-position:40px 0}}@keyframes progress-bar-stripes{from{background-position:0 0}to{background-position:40px 0}}.progress{overflow:hidden;height:18px;margin-bottom:18px;background-color:#f7f7f7;background-image:-moz-linear-gradient(top,#f5f5f5,#f9f9f9);background-image:-ms-linear-gradient(top,#f5f5f5,#f9f9f9);background-image:-webkit-gradient(linear,0 0,0 100%,from(#f5f5f5),to(#f9f9f9));background-image:-webkit-linear-gradient(top,#f5f5f5,#f9f9f9);background-image:-o-linear-gradient(top,#f5f5f5,#f9f9f9);background-image:linear-gradient(top,#f5f5f5,#f9f9f9);background-repeat:repeat-x;filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#f5f5f5',endColorstr='#f9f9f9',GradientType=0);-webkit-box-shadow:inset 0 1px 2px rgba(0,0,0,0.1);-moz-box-shadow:inset 0 1px 2px rgba(0,0,0,0.1);box-shadow:inset 0 1px 2px rgba(0,0,0,0.1);-webkit-border-radius:4px;-moz-border-radius:4px;border-radius:4px}.progress .bar{width:0;height:18px;color:#fff;font-size:12px;text-align:center;text-shadow:0 -1px 0 rgba(0,0,0,0.25);background-color:#0e90d2;background-image:-moz-linear-gradient(top,#149bdf,#0480be);background-image:-ms-linear-gradient(top,#149bdf,#0480be);background-image:-webkit-gradient(linear,0 0,0 100%,from(#149bdf),to(#0480be));background-image:-webkit-linear-gradient(top,#149bdf,#0480be);background-image:-o-linear-gradient(top,#149bdf,#0480be);background-image:linear-gradient(top,#149bdf,#0480be);background-repeat:repeat-x;filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#149bdf',endColorstr='#0480be',GradientType=0);-webkit-box-shadow:inset 0 -1px 0 rgba(0,0,0,0.15);-moz-box-shadow:inset 0 -1px 0 rgba(0,0,0,0.15);box-shadow:inset 0 -1px 0 rgba(0,0,0,0.15);-webkit-box-sizing:border-box;-moz-box-sizing:border-box;-ms-box-sizing:border-box;box-sizing:border-box;-webkit-transition:width .6s ease;-moz-transition:width .6s ease;-ms-transition:width .6s ease;-o-transition:width .6s ease;transition:width .6s ease}.progress-striped .bar{background-color:#149bdf;background-image:-webkit-gradient(linear,0 100%,100% 0,color-stop(0.25,rgba(255,255,255,0.15)),color-stop(0.25,transparent),color-stop(0.5,transparent),color-stop(0.5,rgba(255,255,255,0.15)),color-stop(0.75,rgba(255,255,255,0.15)),color-stop(0.75,transparent),to(transparent));background-image:-webkit-linear-gradient(-45deg,rgba(255,255,255,0.15) 25%,transparent 25%,transparent 50%,rgba(255,255,255,0.15) 50%,rgba(255,255,255,0.15) 75%,transparent 75%,transparent);background-image:-moz-linear-gradient(-45deg,rgba(255,255,255,0.15) 25%,transparent 25%,transparent 50%,rgba(255,255,255,0.15) 50%,rgba(255,255,255,0.15) 75%,transparent 75%,transparent);background-image:-ms-linear-gradient(-45deg,rgba(255,255,255,0.15) 25%,transparent 25%,transparent 50%,rgba(255,255,255,0.15) 50%,rgba(255,255,255,0.15) 75%,transparent 75%,transparent);background-image:-o-linear-gradient(-45deg,rgba(255,255,255,0.15) 25%,transparent 25%,transparent 50%,rgba(255,255,255,0.15) 50%,rgba(255,255,255,0.15) 75%,transparent 75%,transparent);background-image:linear-gradient(-45deg,rgba(255,255,255,0.15) 25%,transparent 25%,transparent 50%,rgba(255,255,255,0.15) 50%,rgba(255,255,255,0.15) 75%,transparent 75%,transparent);-webkit-background-size:40px 40px;-moz-background-size:40px 40px;-o-background-size:40px 40px;background-size:40px 40px}.progress.active .bar{-webkit-animation:progress-bar-stripes 2s linear infinite;-moz-animation:progress-bar-stripes 2s linear infinite;animation:progress-bar-stripes 2s linear infinite}.progress-danger .bar{background-color:#dd514c;background-image:-moz-linear-gradient(top,#ee5f5b,#c43c35);background-image:-ms-linear-gradient(top,#ee5f5b,#c43c35);background-image:-webkit-gradient(linear,0 0,0 100%,from(#ee5f5b),to(#c43c35));background-image:-webkit-linear-gradient(top,#ee5f5b,#c43c35);background-image:-o-linear-gradient(top,#ee5f5b,#c43c35);background-image:linear-gradient(top,#ee5f5b,#c43c35);background-repeat:repeat-x;filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#ee5f5b',endColorstr='#c43c35',GradientType=0)}.progress-danger.progress-striped .bar{background-color:#ee5f5b;background-image:-webkit-gradient(linear,0 100%,100% 0,color-stop(0.25,rgba(255,255,255,0.15)),color-stop(0.25,transparent),color-stop(0.5,transparent),color-stop(0.5,rgba(255,255,255,0.15)),color-stop(0.75,rgba(255,255,255,0.15)),color-stop(0.75,transparent),to(transparent));background-image:-webkit-linear-gradient(-45deg,rgba(255,255,255,0.15) 25%,transparent 25%,transparent 50%,rgba(255,255,255,0.15) 50%,rgba(255,255,255,0.15) 75%,transparent 75%,transparent);background-image:-moz-linear-gradient(-45deg,rgba(255,255,255,0.15) 25%,transparent 25%,transparent 50%,rgba(255,255,255,0.15) 50%,rgba(255,255,255,0.15) 75%,transparent 75%,transparent);background-image:-ms-linear-gradient(-45deg,rgba(255,255,255,0.15) 25%,transparent 25%,transparent 50%,rgba(255,255,255,0.15) 50%,rgba(255,255,255,0.15) 75%,transparent 75%,transparent);background-image:-o-linear-gradient(-45deg,rgba(255,255,255,0.15) 25%,transparent 25%,transparent 50%,rgba(255,255,255,0.15) 50%,rgba(255,255,255,0.15) 75%,transparent 75%,transparent);background-image:linear-gradient(-45deg,rgba(255,255,255,0.15) 25%,transparent 25%,transparent 50%,rgba(255,255,255,0.15) 50%,rgba(255,255,255,0.15) 75%,transparent 75%,transparent)}.progress-success .bar{background-color:#5eb95e;background-image:-moz-linear-gradient(top,#62c462,#57a957);background-image:-ms-linear-gradient(top,#62c462,#57a957);background-image:-webkit-gradient(linear,0 0,0 100%,from(#62c462),to(#57a957));background-image:-webkit-linear-gradient(top,#62c462,#57a957);background-image:-o-linear-gradient(top,#62c462,#57a957);background-image:linear-gradient(top,#62c462,#57a957);background-repeat:repeat-x;filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#62c462',endColorstr='#57a957',GradientType=0)}.progress-success.progress-striped .bar{background-color:#62c462;background-image:-webkit-gradient(linear,0 100%,100% 0,color-stop(0.25,rgba(255,255,255,0.15)),color-stop(0.25,transparent),color-stop(0.5,transparent),color-stop(0.5,rgba(255,255,255,0.15)),color-stop(0.75,rgba(255,255,255,0.15)),color-stop(0.75,transparent),to(transparent));background-image:-webkit-linear-gradient(-45deg,rgba(255,255,255,0.15) 25%,transparent 25%,transparent 50%,rgba(255,255,255,0.15) 50%,rgba(255,255,255,0.15) 75%,transparent 75%,transparent);background-image:-moz-linear-gradient(-45deg,rgba(255,255,255,0.15) 25%,transparent 25%,transparent 50%,rgba(255,255,255,0.15) 50%,rgba(255,255,255,0.15) 75%,transparent 75%,transparent);background-image:-ms-linear-gradient(-45deg,rgba(255,255,255,0.15) 25%,transparent 25%,transparent 50%,rgba(255,255,255,0.15) 50%,rgba(255,255,255,0.15) 75%,transparent 75%,transparent);background-image:-o-linear-gradient(-45deg,rgba(255,255,255,0.15) 25%,transparent 25%,transparent 50%,rgba(255,255,255,0.15) 50%,rgba(255,255,255,0.15) 75%,transparent 75%,transparent);background-image:linear-gradient(-45deg,rgba(255,255,255,0.15) 25%,transparent 25%,transparent 50%,rgba(255,255,255,0.15) 50%,rgba(255,255,255,0.15) 75%,transparent 75%,transparent)}.progress-info .bar{background-color:#4bb1cf;background-image:-moz-linear-gradient(top,#5bc0de,#339bb9);background-image:-ms-linear-gradient(top,#5bc0de,#339bb9);background-image:-webkit-gradient(linear,0 0,0 100%,from(#5bc0de),to(#339bb9));background-image:-webkit-linear-gradient(top,#5bc0de,#339bb9);background-image:-o-linear-gradient(top,#5bc0de,#339bb9);background-image:linear-gradient(top,#5bc0de,#339bb9);background-repeat:repeat-x;filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#5bc0de',endColorstr='#339bb9',GradientType=0)}.progress-info.progress-striped .bar{background-color:#5bc0de;background-image:-webkit-gradient(linear,0 100%,100% 0,color-stop(0.25,rgba(255,255,255,0.15)),color-stop(0.25,transparent),color-stop(0.5,transparent),color-stop(0.5,rgba(255,255,255,0.15)),color-stop(0.75,rgba(255,255,255,0.15)),color-stop(0.75,transparent),to(transparent));background-image:-webkit-linear-gradient(-45deg,rgba(255,255,255,0.15) 25%,transparent 25%,transparent 50%,rgba(255,255,255,0.15) 50%,rgba(255,255,255,0.15) 75%,transparent 75%,transparent);background-image:-moz-linear-gradient(-45deg,rgba(255,255,255,0.15) 25%,transparent 25%,transparent 50%,rgba(255,255,255,0.15) 50%,rgba(255,255,255,0.15) 75%,transparent 75%,transparent);background-image:-ms-linear-gradient(-45deg,rgba(255,255,255,0.15) 25%,transparent 25%,transparent 50%,rgba(255,255,255,0.15) 50%,rgba(255,255,255,0.15) 75%,transparent 75%,transparent);background-image:-o-linear-gradient(-45deg,rgba(255,255,255,0.15) 25%,transparent 25%,transparent 50%,rgba(255,255,255,0.15) 50%,rgba(255,255,255,0.15) 75%,transparent 75%,transparent);background-image:linear-gradient(-45deg,rgba(255,255,255,0.15) 25%,transparent 25%,transparent 50%,rgba(255,255,255,0.15) 50%,rgba(255,255,255,0.15) 75%,transparent 75%,transparent)}.progress-warning .bar{background-color:#faa732;background-image:-moz-linear-gradient(top,#fbb450,#f89406);background-image:-ms-linear-gradient(top,#fbb450,#f89406);background-image:-webkit-gradient(linear,0 0,0 100%,from(#fbb450),to(#f89406));background-image:-webkit-linear-gradient(top,#fbb450,#f89406);background-image:-o-linear-gradient(top,#fbb450,#f89406);background-image:linear-gradient(top,#fbb450,#f89406);background-repeat:repeat-x;filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#fbb450',endColorstr='#f89406',GradientType=0)}.progress-warning.progress-striped .bar{background-color:#fbb450;background-image:-webkit-gradient(linear,0 100%,100% 0,color-stop(0.25,rgba(255,255,255,0.15)),color-stop(0.25,transparent),color-stop(0.5,transparent),color-stop(0.5,rgba(255,255,255,0.15)),color-stop(0.75,rgba(255,255,255,0.15)),color-stop(0.75,transparent),to(transparent));background-image:-webkit-linear-gradient(-45deg,rgba(255,255,255,0.15) 25%,transparent 25%,transparent 50%,rgba(255,255,255,0.15) 50%,rgba(255,255,255,0.15) 75%,transparent 75%,transparent);background-image:-moz-linear-gradient(-45deg,rgba(255,255,255,0.15) 25%,transparent 25%,transparent 50%,rgba(255,255,255,0.15) 50%,rgba(255,255,255,0.15) 75%,transparent 75%,transparent);background-image:-ms-linear-gradient(-45deg,rgba(255,255,255,0.15) 25%,transparent 25%,transparent 50%,rgba(255,255,255,0.15) 50%,rgba(255,255,255,0.15) 75%,transparent 75%,transparent);background-image:-o-linear-gradient(-45deg,rgba(255,255,255,0.15) 25%,transparent 25%,transparent 50%,rgba(255,255,255,0.15) 50%,rgba(255,255,255,0.15) 75%,transparent 75%,transparent);background-image:linear-gradient(-45deg,rgba(255,255,255,0.15) 25%,transparent 25%,transparent 50%,rgba(255,255,255,0.15) 50%,rgba(255,255,255,0.15) 75%,transparent 75%,transparent)}.accordion{margin-bottom:18px}.accordion-group{margin-bottom:2px;border:1px solid #e5e5e5;-webkit-border-radius:4px;-moz-border-radius:4px;border-radius:4px}.accordion-heading{border-bottom:0}.accordion-heading .accordion-toggle{display:block;padding:8px 15px}.accordion-inner{padding:9px 15px;border-top:1px solid #e5e5e5}.carousel{position:relative;margin-bottom:18px;line-height:1}.carousel-inner{overflow:hidden;width:100%;position:relative}.carousel .item{display:none;position:relative;-webkit-transition:.6s ease-in-out left;-moz-transition:.6s ease-in-out left;-ms-transition:.6s ease-in-out left;-o-transition:.6s ease-in-out left;transition:.6s ease-in-out left}.carousel .item>img{display:block;line-height:1}.carousel .active,.carousel .next,.carousel .prev{display:block}.carousel .active{left:0}.carousel .next,.carousel .prev{position:absolute;top:0;width:100%}.carousel .next{left:100%}.carousel .prev{left:-100%}.carousel .next.left,.carousel .prev.right{left:0}.carousel .active.left{left:-100%}.carousel .active.right{left:100%}.carousel-control{position:absolute;top:40%;left:15px;width:40px;height:40px;margin-top:-20px;font-size:60px;font-weight:100;line-height:30px;color:#fff;text-align:center;background:#222;border:3px solid #fff;-webkit-border-radius:23px;-moz-border-radius:23px;border-radius:23px;opacity:.5;filter:alpha(opacity=50)}.carousel-control.right{left:auto;right:15px}.carousel-control:hover{color:#fff;text-decoration:none;opacity:.9;filter:alpha(opacity=90)}.carousel-caption{position:absolute;left:0;right:0;bottom:0;padding:10px 15px 5px;background:#333;background:rgba(0,0,0,0.75)}.carousel-caption h4,.carousel-caption p{color:#fff}.hero-unit{padding:60px;margin-bottom:30px;background-color:#eee;-webkit-border-radius:6px;-moz-border-radius:6px;border-radius:6px}.hero-unit h1{margin-bottom:0;font-size:60px;line-height:1;color:inherit;letter-spacing:-1px}.hero-unit p{font-size:18px;font-weight:200;line-height:27px;color:inherit}.pull-right{float:right}.pull-left{float:left}.hide{display:none}.show{display:block}.invisible{visibility:hidden}html{overflow-y:scroll}.mod{margin-bottom:20px}.mod h2{font-size:16px;margin-bottom:10px;line-height:normal;padding-bottom:10px}.bull{margin:0 4px}div.btn-more{text-align:center;min-height:40px;padding:10px 20px}a.share{display:inline-block;*zoom:1;width:16px;height:16px!important;overflow:hidden;background:url(i/icons-csser.png) no-repeat;vertical-align:middle;margin-left:5px}a.share.sina{background-position:-3px -66px}a.share.tencent{background-position:-27px -66px}.subnav-fixed{position:fixed}.popup{-webkit-border-radius:5px;-moz-border-radius:5px;border-radius:5px;position:fixed;_position:absolute;top:50%;left:50%;min-width:400px;min-height:200px;_width:400px;_height:200px;margin:-100px 0 0 -200px;text-align:left;background-color:#fdfdfd;z-index:100000;border:2px solid #08c}.popup .mod{padding:0 10px}.popup .mod-header h2{padding-top:10px}a.popup-close{display:block;width:20px;height:20px;position:absolute;z-index:5000;top:-6px;right:-6px;background:url(i/icons-csser.png) no-repeat 0 -41px}a.popup-close:hover{background-position:-25px -41px}.quick-login{-webkit-box-shadow:0 0 10px rgba(0,0,200,0.75);-moz-box-shadow:0 0 10px rgba(0,0,200,0.75);box-shadow:0 0 10px rgba(0,0,200,0.75);display:none;padding-top:15px}.quick-login .control-group{margin-bottom:0}img.img-verifycode{-webkit-border-radius:5px;-moz-border-radius:5px;border-radius:5px;margin-left:5px;cursor:pointer}#verifycode{text-transform:uppercase}#to-top:link,#to-top:visited{-webkit-border-radius:5px;-moz-border-radius:5px;border-radius:5px;position:fixed;width:2em;line-height:1.2;display:none;width:40px;height:40px;background:#ebebeb url(i/back-to-top.png) no-repeat center;text-indent:-9999px}#to-top:hover{background-color:#ddd}.list li{margin-bottom:5px}.tag-list li{border-bottom:1px dotted #999;margin-bottom:20px;padding-bottom:15px;position:relative}.tag-list img{float:left;margin-right:10px}.tag-list .info{overflow:hidden;*zoom:1}.tag-list .cmd{position:absolute;right:0;top:0}.csser-version p a{margin-right:10px}.good-users .btn{margin-left:5px}.badge{padding:0 5px}ul.nav-tabs{padding-left:1em}ul.nav-tabs .badge{margin-left:2px}ul.nav-tabs li>a{padding-top:5px;padding-bottom:6px}.nav-main li{position:relative}.nav-main li .menu a:link,.nav-main li .menu a:visited{color:#eee;white-space:nowrap}.nav-main li .menu a:hover{color:#fff;text-decoration:none}.nav-main li a.todo:link,.nav-main li a.todo:visited{color:#999}.nav-main li:hover{background:#3a87ad}.nav-main li:hover .menu{-webkit-box-shadow:0 1px 3px rgba(0,0,0,0.25);-moz-box-shadow:0 1px 3px rgba(0,0,0,0.25);box-shadow:0 1px 3px rgba(0,0,0,0.25);background-color:#3a87ad;display:block}.nav-main li .menu{-moz-border-top-left-radius:0;-moz-border-top-right-radius:0;-moz-border-bottom-left-radius:5px;-moz-border-bottom-right-radius:5px;-webkit-border-top-left-radius:0;-webkit-border-top-right-radius:0;-webkit-border-bottom-left-radius:5px;-webkit-border-bottom-right-radius:5px;border-top-left-radius:0;border-top-right-radius:0;border-bottom-left-radius:5px;border-bottom-right-radius:5px;display:none;position:absolute;z-index:90;left:0;padding:5px 20px 5px 10px}.nav-main li .menu a{display:block;margin:5px 0}.nav-main li.pop-tags .menu{width:300px;padding-left:10px;color:#eee}.nav-main li.pop-tags .menu img{vertical-align:middle;margin-right:2px}.nav-main li.pop-tags .menu span{vertical-align:middle}.nav-main li.pop-tags .menu div a:link,.nav-main li.pop-tags .menu div a:visited{-webkit-border-radius:3px;-moz-border-radius:3px;border-radius:3px;margin-right:10px;margin-top:5px;margin-bottom:5px;padding:2px 5px;display:inline-block;*zoom:1;background-color:#f1f1f1;color:#333}.nav-main li.pop-tags .menu div a:hover{color:#08c;background-color:#fff}.nav-main li hr{height:1px;border:0;border-top:1px solid #eee;margin:10px 0}.nav-main li>a{text-shadow:0 1px 0}.nav-main li.message-bar span{-webkit-border-radius:10px;-moz-border-radius:10px;border-radius:10px;display:none;font-weight:400;*zoom:1;margin-left:3px}#search{margin:2px 10px 0 0}#search button{float:none}.user-stat ul{*zoom:1}.user-stat ul:before,.user-stat ul:after{display:table;content:""}.user-stat ul:after{clear:both}.user-stat li{min-width:5em;_width:5em;white-space:nowrap;float:left;margin-right:10px}.user-stat li strong{display:block;font-size:24px;margin-bottom:5px}.user-stat div{margin:15px 0}.user-stat div a{margin-right:5px;margin-bottom:5px;*zoom:1;display:inline-block}.user-stat div img{-webkit-box-shadow:0 0 2px #eee;-moz-box-shadow:0 0 2px #eee;box-shadow:0 0 2px #eee}.user-stat div img:hover{-webkit-box-shadow:0 0 2px #999;-moz-box-shadow:0 0 2px #999;box-shadow:0 0 2px #999}.user-stat div strong{display:block;margin-bottom:5px;overflow:hidden}.user-stat div strong a{font-weight:400;margin-left:5px;margin-bottom:0;*zoom:1}.user-show{*zoom:1;*zoom:1;padding-bottom:10px;position:relative;overflow:hidden;padding:0;*zoom:1}.user-show:before,.user-show:after{display:table;content:""}.user-show:after{clear:both}.user-show .photo{float:left;margin-right:20px}.user-show strong{font-size:22px}.user-show .operation{position:absolute;top:10px;right:0}.user-show .operation a{margin-left:10px}.user-show .info{overflow:hidden;*zoom:1}.user-show .info p{*zoom:1;margin:10px 0;*zoom:1}.user-show .info p:before,.user-show .info p:after{display:table;content:""}.user-show .info p:after{clear:both}.user-show .info p em{width:6em;float:left;margin-right:10px;color:#999;font-style:normal;font-size:12px}.user-show .info p span{display:block;overflow:hidden;*zoom:1;font-weight:400}.users li{*zoom:1;position:relative;padding:10px;padding-left:0;border-bottom:1px dotted #f1f1f1}.users li:before,.users li:after{display:table;content:""}.users li:after{clear:both}.users li h3{font-size:14px}.users li h3 span{margin-left:10px;font-size:12px;font-weight:400}.users li h3 span a:link,.users li h3 span a:visited{margin-right:8px}.users li h3 span.online-status{display:none;color:#005580}.users li p a:link,.users li p a:visited{margin-right:8px}.users li .photo{float:left;margin-right:10px;width:58px}.users li .info{overflow:hidden;*zoom:1}.users li .info p{margin:5px 0}.users li .info .last-feed span{margin-right:5px;vertical-align:bottom}.users li .cmd{position:absolute;right:10px;top:10px}.users li .cmd a{margin-left:10px}.my-csser-nav .mod-header h2{padding-left:10px}.my-csser-nav li{font-size:14px;padding-left:10px;margin:0 0 5px;height:24px;line-height:24px}.my-csser-nav li.focus{background:url(i/tips-arrow.gif) no-repeat 0 8px}.my-csser-nav li.focus h2{display:inline;vertical-align:baseline;font-weight:400}.my-csser-nav li span a{margin-left:8px;font-size:12px}.my-csser-nav li span a:link,.my-csser-nav li span a:visited{color:#91b2d8}.my-csser-nav li span a:hover{text-decoration:underline}.my-message{*zoom:1;border:1px solid #999}.my-message:before,.my-message:after{display:table;content:""}.my-message:after{clear:both}.my-message span{vertical-align:bottom;*display:inline-block;*zoom:1}.my-message div.message-type{padding:0 0 10px}.my-message div.message-type a,.my-message div.message-type span{margin-right:10px}.my-message dl{width:180px;float:left;margin:0;height:414px;overflow-x:hidden;overflow-y:auto;padding:0;position:relative;z-index:2;background-color:#f4f4f4}.my-message dt{margin-top:0;margin-bottom:0;padding:4px 3px 5px 5px;position:relative;cursor:pointer;white-space:nowrap;font-weight:400}.my-message dt.focus{background-color:#fff}.my-message dt.focus:hover{background-color:#fff}.my-message dt:hover{background-color:#fff6a5}.my-message dt:hover a{color:#898989}.my-message dt b{margin:0 3px;display:inline-block;*zoom:1;width:9px;height:9px;*padding-bottom:2px}.my-message dt b.online{background:url(i/icons-csser.png) no-repeat -4px -4px}.my-message dt b.offline{background:url(i/icons-csser.png) no-repeat -64px -4px}.my-message div.history{height:404px;overflow:hidden;*zoom:1;padding:0;overflow:hidden;position:relative;background-color:#fff}.my-message div.history span{margin-right:5px}.my-message div.history img{margin-right:5px}.my-message div.history ul{height:270px;overflow-y:auto}.my-message div.history ul li{border:1px dotted #999;margin:5px;margin-right:120px;padding:5px;background-color:#fef4e2}.my-message div.history ul li p{padding:5px 0 0}.my-message div.history ul li.me{text-align:right;background-color:#fff;margin:5px;margin-left:120px}.my-message div.history ul li.me p{text-align:left;word-break:break-all;word-wrap:break-word;overflow:hidden}.my-message div.history ul li.loading{padding:10px}.my-message div.history .send-message{width:100%;border-left:none;position:absolute;bottom:0;border-bottom:0;margin:0}.my-message div.history .send-message .textarea{width:100%}.my-message div.history .send-message p.cmd{margin:0 0 0 10px}.my-notify{min-height:400px;overflow-y:auto}.my-notify li{margin-bottom:5px;padding:0 0 5px;border-bottom:1px dotted #999}.my-notify li span{vertical-align:middle;margin-right:10px}.users-head .mod-body{*zoom:1}.users-head .mod-body:before,.users-head .mod-body:after{display:table;content:""}.users-head .mod-body:after{clear:both}.users-head a{float:left;margin-right:5px;margin-bottom:5px}.users-head img{-webkit-box-shadow:0 0 2px #eee;-moz-box-shadow:0 0 2px #eee;box-shadow:0 0 2px #eee}.users-head img:hover{-webkit-box-shadow:0 0 2px #999;-moz-box-shadow:0 0 2px #999;box-shadow:0 0 2px #999}.user-feeds li{position:relative;border-bottom:1px dotted #999;padding-bottom:20px;margin-bottom:20px}.user-feeds li:hover a.do-delete-feed{visibility:visible}.user-feeds h3{font-size:14px;font-weight:700;margin:5px 0;padding-right:30px;line-height:1.4}.user-feeds h3 i{margin-right:2px}.user-feeds h3 span{font-size:12px;font-weight:normal;color:#999}.user-feeds h3 span.bull{margin:0 5px}.user-feeds h3 span a:link,.user-feeds h3 span a:visited{color:#999;text-decoration:underline}.user-feeds h3 span a:hover{background-color:#555;color:#fff;text-decoration:none}.user-feeds div.photo{*zoom:1;margin-top:10px;margin-left:18px}.user-feeds div.photo:before,.user-feeds div.photo:after{display:table;content:""}.user-feeds div.photo:after{clear:both}.user-feeds div.photo img,.user-feeds div.photo a.tag-no-thumb{float:left;margin-right:15px;margin-bottom:10px;border:1px solid #999}.user-feeds div.photo img:hover,.user-feeds div.photo a.tag-no-thumb:hover{border-color:#555}.user-feeds div.photo a.tag-no-thumb{height:48px;line-height:48px;padding:0 20px;font-size:16px;font-weight:700}.user-feeds div.photo div.detail{overflow:hidden;*zoom:1}.user-feeds div.photo h4{margin:0 0 5px;padding:0;font-size:16px}.user-feeds div.photo h4 span.bull{visibility:hidden}.user-feeds div.photo strong{margin-right:10px}.user-feeds p.user{color:#555;margin:5px 0;margin-left:18px}.user-feeds p.user img{position:absolute;top:0;right:0}.user-feeds p.user span,.user-feeds p.user em{vertical-align:bottom;margin-right:5px;font-style:normal;font-size:12px}.user-feeds p.info,.user-feeds p.review{font-size:13px;margin-left:18px}.user-feeds p.info a,.user-feeds p.review a{font-size:12px;white-space:nowrap;margin-left:5px}.user-feeds p.review{margin-top:5px}.user-feeds a.do-delete-feed{visibility:hidden}.boards h3{font-size:14px;line-height:1.6;white-space:nowrap;overflow:hidden;text-overflow:ellipsis;margin-top:10px;margin-bottom:10px}.boards .posts{*zoom:1}.boards .posts:before,.boards .posts:after{display:table;content:""}.boards .posts:after{clear:both}.boards h4{margin:5px 10px 5px 0;font-weight:400;font-size:13px;display:inline-block;*zoom:1;width:48%;white-space:nowrap;overflow:hidden;text-overflow:ellipsis}.boards ul.unstyled li{min-height:60px;_height:60px;margin-bottom:30px;margin-left:30px;position:relative;border:1px solid #eee}.boards ul.unstyled li .info{margin:5px 10px 10px}.boards ul.unstyled li .post{text-shadow:0 1px #fff;-moz-border-top-left-radius:5px;-moz-border-top-right-radius:0;-moz-border-bottom-left-radius:0;-moz-border-bottom-right-radius:5px;-webkit-border-top-left-radius:5px;-webkit-border-top-right-radius:0;-webkit-border-bottom-left-radius:0;-webkit-border-bottom-right-radius:5px;border-top-left-radius:5px;border-top-right-radius:0;border-bottom-left-radius:0;border-bottom-right-radius:5px;position:absolute;left:-30px;top:-1px;width:30px;height:30px;line-height:30px;text-align:center;background-color:#d9edf7;font-size:14px;font-weight:400;color:#08c}.boards ul.unstyled li .stat{margin-top:10px}.boards ul.unstyled li .stat span{margin-right:5px}.boards ul.unstyled li span.tags a{margin-right:5px}.boards .cmd{position:absolute;right:10px;top:15px}.board-show h1,.question-show h1{font-size:16px;line-height:normal;margin-bottom:15px}.board-show h1 a,.question-show h1 a{font-size:12px;margin-left:5px}.board-show .content,.question-show .content{word-break:break-all}.board-show .meta,.question-show .meta{*zoom:1;margin:10px 0}.board-show .meta:before,.question-show .meta:before,.board-show .meta:after,.question-show .meta:after{display:table;content:""}.board-show .meta:after,.question-show .meta:after{clear:both}.board-show .meta span,.question-show .meta span{margin-right:10px}.board-show .meta span span,.question-show .meta span span{margin-right:0}.board-show .meta .pull-right a,.question-show .meta .pull-right a{margin-left:5px}.board-show .meta .btn-group:before,.question-show .meta .btn-group:before,.board-show .meta .btn-group:after,.question-show .meta .btn-group:after{display:inline}.board-show span.tags a,.question-show span.tags a{margin-right:5px}.board-show .line,.question-show .line{height:1px;font-size:0;overflow:hidden;border-top:3px solid #999;margin:0;padding:0}.board-show .answer-signature,.question-show .answer-signature{*zoom:1;float:right;margin:10px 0;min-width:220px;background-color:#eee;padding:5px 10px}.board-show .answer-signature:before,.question-show .answer-signature:before,.board-show .answer-signature:after,.question-show .answer-signature:after{display:table;content:""}.board-show .answer-signature:after,.question-show .answer-signature:after{clear:both}.board-show .answer-signature img,.question-show .answer-signature img{float:left;margin-right:5px;margin-top:3px}.board-show .answer-signature .answer-user,.question-show .answer-signature .answer-user{overflow:hidden;*zoom:1;position:relative}.board-show .answer-signature .credit,.question-show .answer-signature .credit{position:absolute;right:0;top:0}.board-show .answer-signature span,.question-show .answer-signature span{display:block}.board-show .answerd,.question-show .answerd{text-align:center;font-weight:700}.board-show .answers dl,.question-show .answers dl,.board-show .posts dl,.question-show .posts dl{background-color:#fff}.board-show .answers dd,.question-show .answers dd,.board-show .posts dd,.question-show .posts dd{position:relative;border-bottom:1px solid #999;padding-bottom:10px;margin-bottom:20px;margin-left:30px}.board-show .answers dd .textarea,.question-show .answers dd .textarea,.board-show .posts dd .textarea,.question-show .posts dd .textarea{display:block;width:80%;height:70px;-webkit-border-radius:5px;-moz-border-radius:5px;border-radius:5px}.board-show .answers dd:hover .owner,.question-show .answers dd:hover .owner,.board-show .posts dd:hover .owner,.question-show .posts dd:hover .owner{display:block}.board-show .answers dd .vote,.question-show .answers dd .vote,.board-show .posts dd .vote,.question-show .posts dd .vote{position:absolute;top:0;left:-30px;margin:0;padding:0;width:25px;height:60px}.board-show .answers dd .vote a,.question-show .answers dd .vote a,.board-show .posts dd .vote a,.question-show .posts dd .vote a{display:block;width:20px;height:20px;margin:0 auto 5px}.board-show .answers dd .vote a.up:link,.question-show .answers dd .vote a.up:link,.board-show .posts dd .vote a.up:link,.question-show .posts dd .vote a.up:link,.board-show .answers dd .vote a.up:visited,.question-show .answers dd .vote a.up:visited,.board-show .posts dd .vote a.up:visited,.question-show .posts dd .vote a.up:visited{background:url(i/icons-csser.png) no-repeat -74px -40px}.board-show .answers dd .vote a.up:link span,.question-show .answers dd .vote a.up:link span,.board-show .posts dd .vote a.up:link span,.question-show .posts dd .vote a.up:link span,.board-show .answers dd .vote a.up:visited span,.question-show .answers dd .vote a.up:visited span,.board-show .posts dd .vote a.up:visited span,.question-show .posts dd .vote a.up:visited span{display:none}.board-show .answers dd .vote a.up:hover,.question-show .answers dd .vote a.up:hover,.board-show .posts dd .vote a.up:hover,.question-show .posts dd .vote a.up:hover{background-position:-51px -40px}.board-show .answers dd .vote a.up:hover span,.question-show .answers dd .vote a.up:hover span,.board-show .posts dd .vote a.up:hover span,.question-show .posts dd .vote a.up:hover span{-webkit-border-radius:5px;-moz-border-radius:5px;border-radius:5px;position:absolute;left:30px;top:0;display:inline-block;*zoom:1;white-space:nowrap;background-color:#333;color:#fff;padding:3px 8px}.board-show .answers dd .vote a.up.focus,.question-show .answers dd .vote a.up.focus,.board-show .posts dd .vote a.up.focus,.question-show .posts dd .vote a.up.focus{background-position:-51px -40px}.board-show .answers dd .vote a.down:link,.question-show .answers dd .vote a.down:link,.board-show .posts dd .vote a.down:link,.question-show .posts dd .vote a.down:link,.board-show .answers dd .vote a.down:visited,.question-show .answers dd .vote a.down:visited,.board-show .posts dd .vote a.down:visited,.question-show .posts dd .vote a.down:visited{background:url(i/icons-csser.png) no-repeat -74px -62px}.board-show .answers dd .vote a.down:link span,.question-show .answers dd .vote a.down:link span,.board-show .posts dd .vote a.down:link span,.question-show .posts dd .vote a.down:link span,.board-show .answers dd .vote a.down:visited span,.question-show .answers dd .vote a.down:visited span,.board-show .posts dd .vote a.down:visited span,.question-show .posts dd .vote a.down:visited span{display:none}.board-show .answers dd .vote a.down:hover,.question-show .answers dd .vote a.down:hover,.board-show .posts dd .vote a.down:hover,.question-show .posts dd .vote a.down:hover{background-position:-51px -62px}.board-show .answers dd .vote a.down:hover span,.question-show .answers dd .vote a.down:hover span,.board-show .posts dd .vote a.down:hover span,.question-show .posts dd .vote a.down:hover span{-webkit-border-radius:5px;-moz-border-radius:5px;border-radius:5px;position:absolute;left:30px;top:25px;display:inline-block;*zoom:1;white-space:nowrap;background-color:#333;color:#fff;padding:3px 8px}.board-show .answers dd .vote a.down.focus,.question-show .answers dd .vote a.down.focus,.board-show .posts dd .vote a.down.focus,.question-show .posts dd .vote a.down.focus{background-position:-51px -62px}.board-show .answers div.cmd,.question-show .answers div.cmd,.board-show .posts div.cmd,.question-show .posts div.cmd{position:relative}.board-show .answers div.cmd a,.question-show .answers div.cmd a,.board-show .posts div.cmd a,.question-show .posts div.cmd a,.board-show .answers div.cmd span,.question-show .answers div.cmd span,.board-show .posts div.cmd span,.question-show .posts div.cmd span{vertical-align:middle}.board-show .answers .owner,.question-show .answers .owner,.board-show .posts .owner,.question-show .posts .owner{position:absolute;right:0;display:none}.board-show .answers .answer,.question-show .answers .answer,.board-show .posts .answer,.question-show .posts .answer{*zoom:1}.board-show .answers .answer:before,.question-show .answers .answer:before,.board-show .posts .answer:before,.question-show .posts .answer:before,.board-show .answers .answer:after,.question-show .answers .answer:after,.board-show .posts .answer:after,.question-show .posts .answer:after{display:table;content:""}.board-show .answers .answer:after,.question-show .answers .answer:after,.board-show .posts .answer:after,.question-show .posts .answer:after{clear:both}.board-show .answers .answer:hover,.question-show .answers .answer:hover,.board-show .posts .answer:hover,.question-show .posts .answer:hover{border-color:#eee}.board-show .answers .answer:hover .owner,.question-show .answers .answer:hover .owner,.board-show .posts .answer:hover .owner,.question-show .posts .answer:hover .owner{display:block}.board-show .answers .answer:hover .cmd,.question-show .answers .answer:hover .cmd,.board-show .posts .answer:hover .cmd,.question-show .posts .answer:hover .cmd{visibility:visible}.board-show .answers .answer .uper,.question-show .answers .answer .uper,.board-show .posts .answer .uper,.question-show .posts .answer .uper{padding:0 0 10px}.board-show .answers .answer .uper a,.question-show .answers .answer .uper a,.board-show .posts .answer .uper a,.question-show .posts .answer .uper a{margin-left:5px}.board-show .answers .answer .answer-content,.question-show .answers .answer .answer-content,.board-show .posts .answer .answer-content,.question-show .posts .answer .answer-content{font-size:13px}.board-show .answers .answer .form,.question-show .answers .answer .form,.board-show .posts .answer .form,.question-show .posts .answer .form{display:none}.board-show .answers .reviews,.question-show .answers .reviews,.board-show .posts .reviews,.question-show .posts .reviews{-webkit-border-radius:5px;-moz-border-radius:5px;border-radius:5px;display:none;background-color:#fcfcfc;border:1px solid #eee;margin:0 0 10px;padding:10px 10px 0}.board-show .answers .reviews li,.question-show .answers .reviews li,.board-show .posts .reviews li,.question-show .posts .reviews li{*zoom:1;border-bottom:1px dotted #eee;margin-bottom:10px}.board-show .answers .reviews li:before,.question-show .answers .reviews li:before,.board-show .posts .reviews li:before,.question-show .posts .reviews li:before,.board-show .answers .reviews li:after,.question-show .answers .reviews li:after,.board-show .posts .reviews li:after,.question-show .posts .reviews li:after{display:table;content:""}.board-show .answers .reviews li:after,.question-show .answers .reviews li:after,.board-show .posts .reviews li:after,.question-show .posts .reviews li:after{clear:both}.board-show .answers .reviews li.last,.question-show .answers .reviews li.last,.board-show .posts .reviews li.last,.question-show .posts .reviews li.last{border-bottom:0}.board-show .answers .reviews li .photo,.question-show .answers .reviews li .photo,.board-show .posts .reviews li .photo,.question-show .posts .reviews li .photo{float:left;width:25px;margin-right:10px}.board-show .answers .reviews li .info,.question-show .answers .reviews li .info,.board-show .posts .reviews li .info,.question-show .posts .reviews li .info{overflow:hidden;*zoom:1;position:relative}.board-show .answers .reviews li .info span.date,.question-show .answers .reviews li .info span.date,.board-show .posts .reviews li .info span.date,.question-show .posts .reviews li .info span.date{margin-right:5px}.board-show .answers .reviews li .info:hover a.edit-review,.question-show .answers .reviews li .info:hover a.edit-review,.board-show .posts .reviews li .info:hover a.edit-review,.question-show .posts .reviews li .info:hover a.edit-review{display:inline}.board-show .answers .reviews li .info a.edit-review,.question-show .answers .reviews li .info a.edit-review,.board-show .posts .reviews li .info a.edit-review,.question-show .posts .reviews li .info a.edit-review{font-size:12px;margin-left:5px;display:none;position:absolute;right:0;top:0}.board-show .answers .reviews li .info a,.question-show .answers .reviews li .info a,.board-show .posts .reviews li .info a,.question-show .posts .reviews li .info a{margin-right:5px}.board-show .answers .reviews li .info .review-content,.question-show .answers .reviews li .info .review-content,.board-show .posts .reviews li .info .review-content,.question-show .posts .reviews li .info .review-content{padding:5px 0 10px;line-height:1.6}.board-show .answers .reviews li .info form,.question-show .answers .reviews li .info form,.board-show .posts .reviews li .info form,.question-show .posts .reviews li .info form{display:none}.board-show .answers .reviews li.loading,.question-show .answers .reviews li.loading,.board-show .posts .reviews li.loading,.question-show .posts .reviews li.loading{padding:0 0 10px}.board-show .answers .reviews .textarea,.question-show .answers .reviews .textarea,.board-show .posts .reviews .textarea,.question-show .posts .reviews .textarea{-webkit-box-sizing:border-box;-moz-box-sizing:border-box;-ms-box-sizing:border-box;box-sizing:border-box;width:100%;height:70px}.board-show .answers .reviews form,.question-show .answers .reviews form,.board-show .posts .reviews form,.question-show .posts .reviews form{margin:15px 0}.board-show .answers .reviews form .control-group,.question-show .answers .reviews form .control-group,.board-show .posts .reviews form .control-group,.question-show .posts .reviews form .control-group,.board-show .answers .reviews form .form-actions,.question-show .answers .reviews form .form-actions,.board-show .posts .reviews form .form-actions,.question-show .posts .reviews form .form-actions{margin:0}.board-show .posts,.question-show .posts{padding-top:20px}.board-show .posts .post,.question-show .posts .post{margin-bottom:10px;padding:0 0 10px;border-bottom:1px solid #999;position:relative;min-height:60px;line-height:1.8;font-size:13px;background-color:#fff}.board-show .posts .post img,.question-show .posts .post img{max-width:100%}.board-show .posts .post:hover,.question-show .posts .post:hover{border-color:#999}.board-show .posts .post:hover .owner,.question-show .posts .post:hover .owner{display:block}.board-show .posts .post:hover .cmd,.question-show .posts .post:hover .cmd{visibility:visible}.board-show .posts .post div.cmd,.question-show .posts .post div.cmd,.board-show .posts .post .reviews,.question-show .posts .post .reviews{margin-left:20px}.board-show .posts .post-content,.question-show .posts .post-content{padding-left:20px}.board-titles ul{max-height:500px;overflow-y:auto}.board-titles li.sub{text-indent:1em}.form .form-actions input{margin-right:5px}.form i,.form span.help-inline{font-size:12px;font-style:normal;margin-left:5px}.form i.error,.form span.help-inline.error{color:#9d261d}.form textarea{vertical-align:bottom}.form .tags{*zoom:1;padding:10px 0 0}.form .tags:before,.form .tags:after{display:table;content:""}.form .tags:after{clear:both}.form .tags .add-tag{margin-left:10px}.form .tags span.tag-panel{overflow:hidden;_zoom:1;display:block;padding:4px 0 0}.form .tags span.tag-panel b{font-weight:400}.form .tags span.tag-panel b input{width:120px}.form .tags span.tag-panel em{display:block;padding:10px 0 0}.form .tags span.tag-panel em a{vertical-align:middle}.form .tags span.tag-panel em a:link,.form .tags span.tag-panel em a:visited{display:inline-block;*zoom:1;padding:4px 8px;margin-right:10px;margin-left:0;margin-bottom:10px;line-height:normal;padding-right:25px;color:#fff;background:#999 url(i/icon-minus.png) no-repeat right center}.form .tags span.tag-panel em a:hover{background-color:#86281a;text-decoration:none}.form-crop #form-crop{*zoom:1}.form-crop #form-crop:before,.form-crop #form-crop:after{display:table;content:""}.form-crop #form-crop:after{clear:both}.form-crop #form-crop iframe{display:none}.form-crop .cover{margin-top:15px}.form-crop div.big{margin-left:160px}.form-crop p{margin-bottom:10px}.form-crop div.big{width:300px;height:300px;overflow:hidden;float:left;margin-right:10px;border:1px solid #333}.form-crop div.preview{position:relative;overflow:hidden;margin-bottom:10px}.form-tag .textarea{width:400px}#quick-question{padding:10px 0 15px 10px;border:1px solid #eee}#quick-question label{width:4em}#quick-question #title{width:450px;margin:0 10px;height:18px}.form-question textarea{width:500px}.form-answer{margin:15px 0}.form-answer .textarea{width:98%;height:140px}.form-post,.post-panel>form{display:none;margin:15px 0}.form-post .form-actions input,.post-panel>form .form-actions input{margin-right:5px}.questions .mod-body li{*zoom:1;border-bottom:1px dotted #999;margin-bottom:15px;padding-bottom:15px}.questions .mod-body li:before,.questions .mod-body li:after{display:table;content:""}.questions .mod-body li:after{clear:both}.questions h3{font-size:14px;line-height:1.6;margin-bottom:10px}.questions div.answer{width:50px;height:50px;float:left;margin-right:10px;text-align:center;background-color:#eee;font-size:13px;font-weight:400;color:#333}.questions div.answer.has-answer{background-color:#d9edf7;color:#3a87ad}.questions div.answer strong{text-shadow:0 1px #fff;display:block;margin:8px 0 0;font-size:16px;line-height:normal}.questions div.answer a:link,.questions div.answer a:visited{color:#333}.questions div.answer a:hover{font-weight:700}.questions .abstract{margin-top:5px}.questions .info{overflow:hidden;*zoom:1}.questions .stat span,.questions .stat a{vertical-align:bottom}.questions .stat span{margin-right:5px}.questions .tags a{margin-right:5px}.show-info{-webkit-border-radius:5px;-moz-border-radius:5px;border-radius:5px;position:absolute;z-index:2000;padding:5px 10px;display:none;background-color:#9d261d;color:#fff}.send-message{position:absolute;background-color:#fff;text-align:left;min-width:300px;width:300px;border:1px solid #bfbfbf;padding:0}.send-message h2{margin-bottom:5px;padding:5px 10px 0;line-height:normal}.send-message .textarea{-webkit-border-radius:0;-moz-border-radius:0;border-radius:0;vertical-align:top;width:290px;height:40px;border:1px solid #f1f1f1;border-left:none;border-right:0;border-top-color:#ddd;padding:5px;text-align:left}.send-message form{margin-bottom:0}.send-message .form-actions{margin:0}.ke-container{display:inline-block!important}.ke-container .ke-toolbar-icon{font-size:12px;line-height:16px;height:16px}.ke-container .ke-menu-item-left{display:none!important}.ke-container .ke-icon-source{width:16px}.ke-container .ke-icon-code{width:15px}.ke-container .ke-icon-inlinecode{background-position:0 -1232px;width:15px}.tag-show .tag-info{*zoom:1;margin-bottom:20px;position:relative}.tag-show .tag-info:before,.tag-show .tag-info:after{display:table;content:""}.tag-show .tag-info:after{clear:both}.tag-show .tag-info .photo{float:left;margin-right:15px}.tag-show .tag-info .info{overflow:hidden;*zoom:1}.tag-show .tag-info .info h1{font-size:14px}.tag-show .tag-info .info strong{margin-right:10px}.tag-show .tag-info .info p{line-height:1.6;margin-bottom:5px}.tag-show .tag-info .cmd{line-height:21px;position:absolute;right:0;top:0}.tag-show .tag-info .cmd a{margin-left:5px}.change-logs .form{padding-bottom:30px}.change-logs .form .textarea{height:140px;width:500px}.change-logs ul>li{position:relative;border-bottom:1px solid #eee;margin:10px 0;padding-bottom:10px}.change-logs ul>li h3{font-size:14px}.change-logs ul>li h3 span{margin-left:10px;font-weight:400;color:#999;font-size:12px}.change-logs ul>li .content{font-size:13px;padding:10px 0 0}.change-logs ul>li .cmd{position:absolute;top:0;right:0}.question-show .content,.question-show .answers .answer-content,.board-show .content,.board-show .post-content{color:#333}.question-show .content h1,.question-show .answers .answer-content h1,.board-show .content h1,.board-show .post-content h1,.question-show .content h2,.question-show .answers .answer-content h2,.board-show .content h2,.board-show .post-content h2,.question-show .content h3,.question-show .answers .answer-content h3,.board-show .content h3,.board-show .post-content h3{font-size:100%;vertical-align:middle}.question-show .content table,.question-show .answers .answer-content table,.board-show .content table,.board-show .post-content table{border-collapse:collapse;border-spacing:0}.question-show .content a:link,.question-show .answers .answer-content a:link,.board-show .content a:link,.board-show .post-content a:link,.question-show .content a:visited,.question-show .answers .answer-content a:visited,.board-show .content a:visited,.board-show .post-content a:visited{text-decoration:none;color:#08c}.question-show .content a:hover,.question-show .answers .answer-content a:hover,.board-show .content a:hover,.board-show .post-content a:hover,.question-show .content a:active,.question-show .answers .answer-content a:active,.board-show .content a:active,.board-show .post-content a:active{color:#005580;outline:0}.question-show .content h1,.question-show .answers .answer-content h1,.board-show .content h1,.board-show .post-content h1{font-size:1.8em}.question-show .content h2,.question-show .answers .answer-content h2,.board-show .content h2,.board-show .post-content h2{font-size:14px;padding:0 0 5px;margin:10px 0;line-height:normal}.question-show .content h3,.question-show .answers .answer-content h3,.board-show .content h3,.board-show .post-content h3{margin:10px 0}.question-show .content div,.question-show .answers .answer-content div,.board-show .content div,.board-show .post-content div,.question-show .content p,.question-show .answers .answer-content p,.board-show .content p,.board-show .post-content p{margin:0 0 8px}.question-show .content table,.question-show .answers .answer-content table,.board-show .content table,.board-show .post-content table{border:1px solid #eee;margin:10px 0}.question-show .content table th,.question-show .answers .answer-content table th,.board-show .content table th,.board-show .post-content table th,.question-show .content table td,.question-show .answers .answer-content table td,.board-show .content table td,.board-show .post-content table td{border:1px dotted #eee;padding:5px}.question-show .content pre,.question-show .answers .answer-content pre,.board-show .content pre,.board-show .post-content pre{font-family:Monaco,Consolas,"Lucida Console",monospace}.question-show .content code,.question-show .answers .answer-content code,.board-show .content code,.board-show .post-content code{font-size:12px;margin:0;padding:1px 2px;border:0;background-color:transparent;white-space:normal;word-break:break-all;color:#d14}.question-show .content .pln,.question-show .answers .answer-content .pln,.board-show .content .pln,.board-show .post-content .pln{color:#000}@media screen{.question-show .content .str,.question-show .answers .answer-content .str,.board-show .content .str,.board-show .post-content .str{color:#080}.question-show .content .kwd,.question-show .answers .answer-content .kwd,.board-show .content .kwd,.board-show .post-content .kwd{color:#008}.question-show .content .com,.question-show .answers .answer-content .com,.board-show .content .com,.board-show .post-content .com{color:#800}.question-show .content .typ,.question-show .answers .answer-content .typ,.board-show .content .typ,.board-show .post-content .typ{color:#606}.question-show .content .lit,.question-show .answers .answer-content .lit,.board-show .content .lit,.board-show .post-content .lit{color:#066}.question-show .content .pun,.question-show .answers .answer-content .pun,.board-show .content .pun,.board-show .post-content .pun,.question-show .content .opn,.question-show .answers .answer-content .opn,.board-show .content .opn,.board-show .post-content .opn,.question-show .content .clo,.question-show .answers .answer-content .clo,.board-show .content .clo,.board-show .post-content .clo{color:#660}.question-show .content .tag,.question-show .answers .answer-content .tag,.board-show .content .tag,.board-show .post-content .tag{color:#008}.question-show .content .atn,.question-show .answers .answer-content .atn,.board-show .content .atn,.board-show .post-content .atn{color:#606}.question-show .content .atv,.question-show .answers .answer-content .atv,.board-show .content .atv,.board-show .post-content .atv{color:#080}.question-show .content .dec,.question-show .answers .answer-content .dec,.board-show .content .dec,.board-show .post-content .dec,.question-show .content .var,.question-show .answers .answer-content .var,.board-show .content .var,.board-show .post-content .var{color:#606}.question-show .content .fun,.question-show .answers .answer-content .fun,.board-show .content .fun,.board-show .post-content .fun{color:#f00}}@media print,projection{.question-show .content .str,.question-show .answers .answer-content .str,.board-show .content .str,.board-show .post-content .str{color:#060}.question-show .content .kwd,.question-show .answers .answer-content .kwd,.board-show .content .kwd,.board-show .post-content .kwd{color:#006;font-weight:bold}.question-show .content .com,.question-show .answers .answer-content .com,.board-show .content .com,.board-show .post-content .com{color:#600;font-style:italic}.question-show .content .typ,.question-show .answers .answer-content .typ,.board-show .content .typ,.board-show .post-content .typ{color:#404;font-weight:bold}.question-show .content .lit,.question-show .answers .answer-content .lit,.board-show .content .lit,.board-show .post-content .lit{color:#044}.question-show .content .pun,.question-show .answers .answer-content .pun,.board-show .content .pun,.board-show .post-content .pun,.question-show .content .opn,.question-show .answers .answer-content .opn,.board-show .content .opn,.board-show .post-content .opn,.question-show .content .clo,.question-show .answers .answer-content .clo,.board-show .content .clo,.board-show .post-content .clo{color:#440}.question-show .content .tag,.question-show .answers .answer-content .tag,.board-show .content .tag,.board-show .post-content .tag{color:#006;font-weight:bold}.question-show .content .atn,.question-show .answers .answer-content .atn,.board-show .content .atn,.board-show .post-content .atn{color:#404}.question-show .content .atv,.question-show .answers .answer-content .atv,.board-show .content .atv,.board-show .post-content .atv{color:#060}}.question-show .content pre.prettyprint,.question-show .answers .answer-content pre.prettyprint,.board-show .content pre.prettyprint,.board-show .post-content pre.prettyprint{padding:2px;border:1px solid #888}.question-show .content ol.linenums,.question-show .answers .answer-content ol.linenums,.board-show .content ol.linenums,.board-show .post-content ol.linenums{margin-top:0;margin-bottom:0}.question-show .content pre,.question-show .answers .answer-content pre,.board-show .content pre,.board-show .post-content pre,.question-show .content pre.prettyprint,.question-show .answers .answer-content pre.prettyprint,.board-show .content pre.prettyprint,.board-show .post-content pre.prettyprint{color:#333;border:0;font-size:12px;padding:0;margin:10px 0;overflow-x:auto;*width:auto;*padding-bottom:22px;background-color:transparent}
div#sidebar {background: #fff; max-height:600px; position: fixed;width: 200px;overflow-y: auto;overflow-x: hidden;padding: 0 0 10px 10px;border-right: 1px solid #ddd;box-shadow: 0 0 20px #ccc; -webkit-box-shadow: 0 0 2px #ccc; -moz-box-shadow: 0 0 2px #ccc;}
a.toc_title, a.toc_title:visited {display: block;color: black;font-weight: bold;margin-top: 10px; font-size:14px;}
a.toc_title:hover {text-decoration: underline;}
#sidebar .version {font-size: 10px;font-weight: normal;}
ul.toc_section {font-size: 11px;line-height: 14px;margin: 5px 0 0 0;padding-left: 0px;list-style-type: none;font-family: Lucida Grande;}
.toc_section li {cursor: pointer;margin: 0 0 3px 0;}
.toc_section li a {text-decoration: none;color: black;}
.toc_section li a:hover {text-decoration: underline;}
#container {position: relative; margin: 0px 0 50px 60px; font-size:14px;}
#container p, #container div.container ul {margin: 20px 0;}
#container p.warning {font-size: 12px;line-height: 18px;font-style: italic;}
#container div.container ul {list-style: circle;font-size: 12px;padding-left: 15px;}
#container b.header {font-size: 16px;line-height: 30px;}
#container span.alias {font-size: 14px;font-style: italic;margin-left: 20px;}

</style>
    <div class="content" id="container" >
      <h1> Backbone.js API中文文档 </h1>
      <ul>
        <li>翻译：一回 </li>
        <li>日期：2011-8-16 </li>
        <li>反馈：xianlihua$gmail.com [$ -> @] </li>
      </ul>
      <p> <img src="http://documentcloud.github.com/backbone/docs/images/backbone.png" alt="Backbone.js" /> </p>
      <p>简单术语翻译对照：<br />
        散列表（hash） 模型（model） 视图（view） 集合（collection） 回调函数（callback） 绑定（bind）</p>
      <p> <a href="http://github.com/documentcloud/backbone/" target="_blank">Backbone</a> 为复杂Javascript应用程序提供<b>模型</b>(models)、<b>集合</b>(collections)、<b>视图</b>(views)的结构。其中模型用于绑定键值数据和自定义事件；集合附有可枚举函数的丰富API；
        视图可以声明事件处理函数，并通过RESRful JSON接口连接到应用程序。 </p>
      <p> Backbone项目 <a href="http://github.com/documentcloud/backbone/" target="_blank">托管在Github</a> </p>
      <p> <i> Backbone是 <a href="http://documentcloud.org/" target="_blank">DocumentCloud</a> 的一个开源组件. </i> </p>
      <h2 id="downloads"> 下载和依赖 </h2>
      <p> <a href="http://www.csser.com" target="_blank">一回</a> 翻译的为 0.5.3 版本，下载请前往 <a href="http://documentcloud.github.com/backbone/" target="_blank">Backbone官网</a> 。 </p>
      <p> Backbone.js 唯一重度依赖 <a href="http://documentcloud.github.com/underscore/" target="_blank">Underscore.js</a>.
        对于 RESTful , history 的支持依赖于 <a href="#Router">Backbone.Router</a> ,
        DOM 处理依赖于 <a href="#View">Backbone.View</a> , <a href="https://github.com/douglascrockford/JSON-js" target="_blank">json2.js</a>, 和 <a href="http://jquery.com" target="_blank">jQuery</a> <small>( > 1.4.2)</small> 或 <a href="http://zeptojs.com/" target="_blank">Zepto</a> 之一. </p>
      <h2 id="Introduction">简介</h2>
      <p> 当我们开发含有大量Javascript的web应用程序时，首先你需要做的事情之一便是停止向DOM对象附加数据。
        通过复杂多变的jQuery选择符和回调函数创建Javascript应用程序，包括在HTML UI，Javascript逻辑和数据之间保持同步，都不复杂。
        但对富客户端应用来说，良好的架构通常是有很多益处的。 </p>
      <p> Backbone将数据呈现为 <a href="#Model">模型</a>, 你可以创建模型、对模型进行验证和销毁，甚至将它保存到服务器。
        当UI的变化引起模型属性改变时，模型会触发<i>"change"</i>事件；
        所有显示模型数据的 <a href="#View">视图</a> 会接收到该事件的通知，继而视图重新渲染。
        你无需查找DOM来搜索指定<i>id</i>的元素去手动更新HTML。
        &mdash; 当模型改变了，视图便会自动变化。 </p>
      <h2 id="Events">Backbone.Events</h2>
      <p> <b>Events</b> 是一个可以被mix到任意对象的模块，它拥有让对象绑定和触发自定义事件的能力。
        事件在被绑定之前是不需要事先声明的，还可以携带参数。我们通过一个例子来看： </p>
      <pre class="runnable">
var object = {};

_.extend(object, Backbone.Events);

object.bind("alert", function(msg) {
  alert("Triggered " + msg);
});

object.trigger("alert", "www.csser.com");
</pre>
      <p id="Events-bind"> <b class="header">bind</b><code>object.bind(event, callback, [context])</code> <br />
        绑定 <b>callback</b> 函数到 object 对象。
        当<b>事件</b>触发时执行回调函数 callback 。如果一个页面中有大量不同的事件，按照惯例使用冒号指定命名空间： <tt>"poll:start"</tt>, 或 <tt>"change:selection"</tt> </p>
      <p> 当 callback 执行时提供第三个可选参数，可以为 <tt>this</tt> 指定上下文： <tt>model.bind('change', this.render, this)</tt> </p>
      <p> 绑定到特殊事件 <tt>"all"</tt> 的回调函数会在任意事件发生时被触发，其第一个参数为事件的名称。
        例如，将一个对象的所有事件代理到另一对象： </p>
      <pre>
proxy.bind("all", function(eventName) {
  object.trigger(eventName);
});
</pre>
      <p id="Events-unbind"> <b class="header">unbind</b><code>object.unbind([event], [callback])</code> <br />
        从 object 对象移除先前绑定的 <b>callback</b> 函数。如果不指定第二个参数，所有 <b>event</b> 事件绑定的回调函数都被移除。
        如果第一个参数也不指定，对象所绑定的<i>所有</i>回调函数都将被移除。 </p>
      <pre>
object.unbind("change", onChange);  // 只移除onChange回调函数

object.unbind("change");            // 移除所有 "change" 回调函数

object.unbind();                    // 移除对象的所有回调函数
</pre>
      <p id="Events-trigger"> <b class="header">trigger</b><code>object.trigger(event, [*args])</code> <br />
        触发 <b>event</b> 事件的回调函数。后续传入 <b>trigger</b> 的参数会被依次传入事件回调函数。 </p>
      <h2 id="Model">Backbone.Model</h2>
      <p> <b>模型</b> 是所有 Javascript 应用程序的核心，包括交互数据及相关的大量逻辑：
        转换、验证、计算属性和访问控制。你可以用特定的方法扩展 <b>Backbone.Model</b> ， <b>模型</b> 也提供了一组基本的管理变化的功能。 </p>
      <p> 下面的示例演示了如何定义一个模型，包括自定义方法、设置属性、以及触发该属性变化的事件。 </p>
      <pre class="runnable">
var Sidebar = Backbone.Model.extend({
  promptColor: function() {
  var cssColor = prompt("请输入一个CSS颜色值：");
  this.set({color: cssColor});
  }
});

window.sidebar = new Sidebar;

sidebar.bind('change:color', function(model, color) {
  $('#sidebar').css({background: color});
});

sidebar.set({color: 'white'});

sidebar.promptColor();
</pre>
      <p id="Model-extend"> <b class="header">extend</b><code>Backbone.Model.extend(properties, [classProperties])</code> <br />
        要创建自己的 <b>模型</b> 类，你可以扩展 <b>Backbone.Model</b> 并提供实例 <b>属性</b> ，
        以及可选的可以直接注册到构造函数的 <b>类属性</b> (classProperties)。 </p>
      <p> <b>extend</b> 可以正确的设置原型链，因此通过 <b>extend</b> 创建的子类 (subclasses) 也可以被深度扩展。 </p>
      <pre>
var Note = Backbone.Model.extend({

  initialize: function() { ... },
  
  author: function() { ... },
  
  coordinates: function() { ... },
  
  allowedToEdit: function(account) {
  return true;
  }
  
});

var PrivateNote = Note.extend({

  allowedToEdit: function(account) {
  return account.owns(this);
  }
  
});
</pre>
      <p class="warning"> <tt>父类</tt> 的简述：Javascript没有提供一种直接调用父类的方式，
        如果你要重载原型链中上层定义的同名函数，如 <tt>set</tt>，或 <tt>save</tt> ，
        并且你想调用父对象的实现，这时需要明确的调用它，类似这样： </p>
      <pre>
var CSSercom = Backbone.Model.extend({
  set: function(attributes, options) {
  Backbone.Model.prototype.set.call(this, attributes, options);
  ...
  }
});
</pre>
      <p id="Model-constructor"> <b class="header">constructor / initialize</b><code>new Model([attributes])</code> <br />
        当创建模型实例时，可以传入 <b>属性</b> 初始值，这些值会被 <a href="#Model-set">set</a> 到模型。
        如果定义了 <b>initialize</b> 函数，该函数会在模型创建后执行。 </p>
      <pre>
new Site({
  title: "CSSer, 关注web前后端技术",
  author: "一回"
});
</pre>
      <p id="Model-get"> <b class="header">get</b><code>model.get(attribute)</code> <br />
        从模型获取当前属性值，比如：<tt>csser.get("title")</tt> </p>
      <p id="Model-set"> <b class="header">set</b><code>model.set(attributes, [options])</code> <br />
        向模型设置一个或多个散列属性。
        如果任何一个属性改变了模型的状态，在不传入 <tt>{silent: true}</tt> 选项参数的情况下，会触发 <tt>"change"</tt> 事件。
        可以绑定事件到某个属性，例如：<tt>change:title</tt>，及 <tt>change:content</tt>。 </p>
      <pre>
csser.set({title: "CSSer", content: "http://www.csser.com"});
</pre>
      <p> 如果模型拥有 <a href="#Model-validate">validate</a> 方法，
        那么属性验证会在 set 之前执行，如果验证失败，模型不会发生变化，这时 <b>set</b> 会返回 <tt>false</tt>。
        也可以在选项中传入 <tt>error</tt> 回调函数，此时验证失败时会执行它而不触发 <tt>"error"</tt> 事件。 </p>
      <p id="Model-escape"> <b class="header">escape</b><code>model.escape(attribute)</code> <br />
        与 <a href="#Model-get">get</a> 类似, 但返回模型属性值的 HTML 转义后的版本。
        如果将数据从模型插入 HTML，使用 <b>escape</b> 取数据可以避免 <a href="http://en.wikipedia.org/wiki/Cross-site_scripting" target="_blank">XSS</a> 攻击. </p>
      <pre class="runnable">
var hacker = new Backbone.Model({
  name: "&lt;script&gt;alert('xss')&lt;/script&gt;"
});

alert(hacker.escape('name'));
</pre>
      <p id="Model-has"> <b class="header">has</b><code>model.has(attribute)</code> <br />
        属性值为非 null 或非 undefined 时返回 <tt>true</tt> </p>
      <pre>
if (note.has("title")) {
  ...
}
</pre>
      <p id="Model-unset"> <b class="header">unset</b><code>model.unset(attribute, [options])</code> <br />
        从内部属性散列表中删除指定属性。
        如果未设置 <tt>silent</tt> 选项，会触发 <tt>"change"</tt> 事件。 </p>
      <p id="Model-clear"> <b class="header">clear</b><code>model.clear([options])</code> <br />
        从模型中删除所有属性。
        如果未设置 <tt>silent</tt> 选项，会触发 <tt>"change"</tt> 事件。 </p>
      <p id="Model-id"> <b class="header">id</b><code>model.id</code> <br />
        模型的特殊属性， <b>id</b> 可以是任意字符串（整型 id 或 UUID）。
        在属性中设置的 <b>id</b> 会被直接拷贝到模型属性上。
        我们可以从集合（collections）中通过 id 获取模型，另外 id 通常用于生成模型的 URLs。 </p>
      <p id="Model-cid"> <b class="header">cid</b><code>model.cid</code> <br />
        模型的特殊属性，<b>cid</b> 或客户 id 是当所有模型创建时自动产生的唯一标识符。
        客户 ids 在模型尚未保存到服务器之前便存在，此时模型可能仍不具有最终的 <b>id</b>，
        客户 ids 的形式为：<tt>c1, c2, c3 ...</tt> </p>
      <p id="Model-attributes"> <b class="header">attributes</b><code>model.attributes</code> <br />
        <b>attributes</b> 属性是包含模型状态的内部散列表。
        建议采用 <a href="#Model-set">set</a> 更新属性而不要直接修改。
        如要获取模型属性的副本，
        用 <a href="#Model-toJSON">toJSON</a> 取而代之。 </p>
      <p id="Model-defaults"> <b class="header">defaults</b><code>model.defaults or model.defaults()</code> <br />
        <b>defaults</b> 散列（或函数）用于为模型指定默认属性。
        创建模型实例时，任何未指定的属性会被设置为其默认值。 </p>
      <pre class="runnable">
var Meal = Backbone.Model.extend({
  defaults: {
  "appetizer":  "caesar salad",
  "entree":     "ravioli",
  "dessert":    "cheesecake"
  }
});

alert("Dessert will be " + (new Meal).get('dessert'));
</pre>
      <p class="warning"> 需要提醒的是，在 Javascript 中，对象是按引用传值的，因此包含对象作为默认值，它会被所有实例共享。 </p>
      <p id="Model-toJSON"> <b class="header">toJSON</b><code>model.toJSON()</code> <br />
        返回模型 <a href="#Model-attributes">attributes</a> 副本的 JSON 字符串化形式。
        它可用于模型的持久化、序列化，或者传递到视图前的扩充。
        该方法的名称有点混乱，因为它事实上并不返回 JSON 字符串，但 <a href="https://developer.mozilla.org/en/JSON#toJSON()_method" target="_blank">JavaScript API for <b>JSON.stringify</b> </a>可以实现。
        </>
      <pre class="runnable">
var artist = new Backbone.Model({
  firstName: "立华",
  lastName: "咸"
});

artist.set({birthday: "December 13, 1979"});

alert(JSON.stringify(artist));
</pre>
      <p id="Model-fetch"> <b class="header">fetch</b><code>model.fetch([options])</code> <br />
        从服务器重置模型状态。这对模型尚未填充数据，或者服务器端已有最新状态的情况很有用处。
        如果服务器端状态与当前属性不同，则触发 <tt>"change"</tt> 事件。
        选项的散列表参数接受 <tt>success</tt> 和 <tt>error</tt> 回调函数，
        回调函数中可以传入 <tt>(model,response)</tt> 作为参数。 </p>
      <pre>
// 每隔 10 秒从服务器拉取数据以保持频道模型是最新的
setInterval(function() {
  channel.fetch();
}, 10000);
</pre>
      <p id="Model-save"> <b class="header">save</b><code>model.save([attributes], [options])</code> <br />
        通过委托 <a href="#Sync">Backbone.sync</a> 保存模型到数据库（或可替代的持久层）。 <b>attributes</b> 散列表
        (在 <a href="#Model-set">set</a>) 应当包含想要改变的属性，不涉及的键不会被修改。
        如果模型含有 <a href="#Model-validate">validate</a> 方法，并且验证失败，模型不会保存。
        如果模型 <a href="#Model-isNew">isNew</a>, 保存将采用 <tt>"create"</tt> (HTTP <tt>POST</tt>) 方法, 如果模型已经在服务器存在，保存将采用 <tt>"update"</tt> (HTTP <tt>PUT</tt>) 方法. </p>
      <p> 在下面的示例，注意我们是如何在模型初次保存时接收到 <tt>"create"</tt> 请求，第二次接收到 <tt>"update"</tt> 请求的。 </p>
      <pre class="runnable">
Backbone.sync = function(method, model) {
  alert(method + ": " + JSON.stringify(model));
  model.id = 1;
};

var book = new Backbone.Model({
  title: "The Rough Riders",
  author: "Theodore Roosevelt"
});

book.save();

book.save({author: "Teddy"});
</pre>
      <p> <b>save</b> 支持在选项散列表中传入 <tt>success</tt> 和 <tt>error</tt> 回调函数，
        回调函数支持传入 <tt>(model, response)</tt> 作为参数。
        如果模型拥有 <tt>validate</tt> 方法并且验证失败，<tt>error</tt> 回调函数会执行。
        如果服务端验证失败，返回非 <tt>200</tt> 的 HTTP 响应码，将产生文本或 JSON 的错误内容。 </p>
      <pre>
book.save({author: "F.D.R."}, {error: function(){ ... }});
</pre>
      <p id="Model-destroy"> <b class="header">destroy</b><code>model.destroy([options])</code> <br />
        通过委托 HTTP <tt>DELETE</tt> 请求到 <a href="#Sync">Backbone.sync</a> 销毁服务器上的模型. 接受 <tt>success</tt> 和 <tt>error</tt> 回调函数作为选项散列表参数。
        将在模型上触发 <tt>"destroy"</tt> 事件，该事件可以通过任意包含它的集合向上冒泡。 </p>
      <pre>
book.destroy({success: function(model, response) {
  ...
}});
</pre>
      <p id="Model-validate"> <b class="header">validate</b><code>model.validate(attributes)</code> <br />
        该方法是未定义的，如果有在Javascript执行的需要，建议用自定义的验证逻辑重载它。 <b>validate</b> 会在 <tt>set</tt> 和 <tt>save</tt> 之前调用，并传入待更新的属性。
        如果模型和属性通过验证，不返回任何值；
        如果属性不合法，返回一个可选择的错误。该错误可以是简单的用于显示的字符串错误信息，
        或者是一个可以描述错误详细的 error 对象。
        如果 <b>validate</b> 返回错误，<tt>set</tt> 和 <tt>save</tt> 将不会执行。
        失败的验证会触发一个 <tt>"error"</tt>事件。 </p>
      <pre class="runnable">
var Chapter = Backbone.Model.extend({
  validate: function(attrs) {
  if (attrs.end < attrs.start) {
    return "can't end before it starts";
  }
  }
});

var one = new Chapter({
  title : "Chapter One: The Beginning"
});

one.bind("error", function(model, error) {
  alert(model.get("title") + " " + error);
});

one.set({
  start: 15,
  end:   10
});
</pre>
      <p> <tt>"error"</tt> 事件对模型和集合级别提供粗粒度的错误信息很有帮助，
        但如果想设计更好的处理错误的特定视图，可以直接传入 <tt>error</tt> 回调函数重载事件。 </p>
      <pre>
account.set({access: "unlimited"}, {
  error: function(model, error) {
  alert(error);
  }
});
</pre>
      <p id="Model-url"> <b class="header">url</b><code>model.url()</code> <br />
        返回模型资源在服务器上位置的相对 URL 。
        如果模型放在其它地方，可通过合理的逻辑重载该方法。
        生成 URLs 的形式为：<tt>"/[collection.url]/[id]"</tt>，
        如果模型不是集合的一部分，则 URLs 形式为：<tt>"/[urlRoot]/id"</tt>。 </p>
      <p> 由于是委托到 <a href="#Collection-url">Collection#url</a> 来生成 URL，
        所以首先需要确认它是否定义过，或者所有模型共享一个通用根 URL 时，是否存在 <a href="#Model-urlRoot">urlRoot</a> 属性。
        例如，一个 id 为 <tt>101</tt> 的模型，存储在 <tt>url</tt> 为 <tt>"/documents/7/notes"</tt> 的 <a href="#Collection">Backbone.Collection</a> 中，
        那么该模型的 URL 为：<tt>"/documents/7/notes/101"</tt> </p>
      <p id="Model-urlRoot"> <b class="header">urlRoot</b><code>model.urlRoot</code> <br />
        如果使用的集合外部的模型，通过指定 <tt>urlRoot</tt> 来设置生成基于模型 id 的 URLs 的默认 <a href="#Model-url">url</a> 函数。 <tt>"/[urlRoot]/id"</tt> </p>
      <pre class="runnable">
var Book = Backbone.Model.extend({urlRoot : '/books'});

var solaris = new Book({id: "1083-lem-solaris"});

alert(solaris.url());
</pre>
      <p id="Model-parse"> <b class="header">parse</b><code>model.parse(response)</code> <br />
        <b>parse</b> 会在通过 <a href="#Model-fetch">fetch</a> 从服务器返回模型数据，以及 <a href="#Model-save">save</a> 时执行。
        传入本函数的为原始 <tt>response</tt> 对象，并且应当返回可以 <a href="#Model-set">set</a> 到模型的属性散列表。
        默认实现是自动进行的，仅简单传入 JSON 响应。
        如果需要使用已存在的 API，或者更好的命名空间响应，可以重载它。 </p>
      <p> 如果使用的 Rails 后端，需要注意 Rails's 默认的 <tt>to_json</tt> 实现已经包含了命名空间之下的模型属性。
        对于无缝的后端集成环境禁用这种行为： </p>
      <pre>
ActiveRecord::Base.include_root_in_json = false
</pre>
      <p id="Model-clone"> <b class="header">clone</b><code>model.clone()</code> <br />
        返回与模型属性一致的新的实例。 </p>
      <p id="Model-isNew"> <b class="header">isNew</b><code>model.isNew()</code> <br />
        模型是否已经保存到服务器。
        如果模型尚无 <tt>id</tt>，则被视为新的。 </p>
      <p id="Model-change"> <b class="header">change</b><code>model.change()</code> <br />
        手动触发 <tt>"change"</tt> 事件。
        如果已经在 <a href="#Model-set">set</a> 函数传入选项参数 <tt>{silent: true}</tt> ，
        当所有操作结束时，可以手动调用 <tt>model.change()</tt> 。 </p>
      <p id="Model-hasChanged"> <b class="header">hasChanged</b><code>model.hasChanged([attribute])</code> <br />
        标识模型从上次 <tt>"change"</tt> 事件发生后是否改变过。
        如果传入 <b>attribute</b> ，当指定属性改变后返回 <tt>true</tt>。 </p>
      <p class="warning"> 注意，本方法以及接下来 change 相关的方法，仅对 <tt>"change"</tt> 事件发生有效。 </p>
      <pre>
book.bind("change", function() {
  if (book.hasChanged("title")) {
  ...
  }
});
</pre>
      <p id="Model-changedAttributes"> <b class="header">changedAttributes</b><code>model.changedAttributes([attributes])</code> <br />
        仅获取模型属性已改变的散列表。
        或者也可以传入外来的 <b>attributes</b> 散列，返回该散列与模型不同的属性。
        一般用于指出视图的哪个部分已被更新，或者确定哪些需要与服务器进行同步。 </p>
      <p id="Model-previous"> <b class="header">previous</b><code>model.previous(attribute)</code> <br />
        在 <tt>"change"</tt> 事件发生的过程中，本方法可被用于获取已改变属性的旧值。 </p>
      <pre class="runnable">
var bill = new Backbone.Model({
  name: "二回"
});

bill.bind("change:name", function(model, name) {
  alert("名字已从 " + bill.previous("name") + " 改为 " + name);
});

bill.set({name : "一回"});
</pre>
      <p id="Model-previousAttributes"> <b class="header">previousAttributes</b><code>model.previousAttributes()</code> <br />
        返回模型的上一个属性散列的副本。一般用于获取模型的不同版本之间的区别，或者当发生错误时回滚模型状态。 </p>
      <h2 id="Collection">Backbone.Collection</h2>
      <p>集合是模型的有序组合，我们可以在集合上绑定 <tt>"change"</tt> 事件，从而当集合中的模型发生变化时获得通知，集合也可以监听 <tt>"add"</tt> 和 <tt>“remove"</tt> 事件， 从服务器更新，并能使用 <a href="#Collection-Underscore-Methods">Underscore.js  提供的方法</a> </p>
      <p>集合中的模型触发的任何事件都可以在集合身上直接触发，所以我们可以监听集合中模型的变化：<tt>Documents.bind("change:selected", ...)</tt></p>
      <p id="Collection-extend"> <b class="header">extend</b><code>Backbone.Collection.extend(properties, [classProperties])</code> <br />
        通过扩展 <b>Backbone.Collection</b> 创建一个 <b>Collection</b> 类。实例属性参数 <b>properties</b> 以及 类属性参数 <b>classProperties</b> 会被直接注册到集合的构造函数。 </p>
      <p id="Collection-model"> <b class="header">model</b><code>collection.model</code> <br />
        指定集合的模型类。可以传入原始属性对象（和数组）来 <a href="#Collection-add">add</a>，<a href="#Collection-create">create</a>，以及 <a href="#Collection-reset">reset</a>，传入的属性会被自动转换为适合的模型类型。 </p>
      <pre>
var Library = Backbone.Collection.extend({
  model: Book
});
</pre>
      <p id="Collection-constructor"> <b class="header">constructor / initialize</b><code>new Collection([models], [options])</code> <br />
        当创建集合时，你可以选择传入初始的 <b>模型</b> 数组。集合的 <a href="#Collection-comparator">comparator</a> 函数也可以作为选项传入。
        如果定义了 <b>initialize</b> 函数，会在集合创建时被调用。 </p>
      <pre>
var tabs = new TabSet([tab1, tab2, tab3]);
</pre>
      <p id="Collection-models"> <b class="header">models</b><code>collection.models</code> <br />
        访问集合中模型的原始值。通常我们使用 <tt>get</tt>，<tt>at</tt>，或 <b>Underscore方法</b> 访问模型对象，但偶尔也需要直接访问。 </p>
      <p id="Collection-toJSON"> <b class="header">toJSON</b><code>collection.toJSON()</code> <br />
        返回集合中包含的每个模型对象的数组。可用于集合的序列化和持久化。本方法名称容易引起混淆，因为它与 <a href="https://developer.mozilla.org/en/JSON#toJSON()_method" target="_blank">JavaScript's JSON API</a> 命名相同. </p>
      <pre class="runnable">
var collection = new Backbone.Collection([
  {name: "Tim", age: 5},
  {name: "Ida", age: 26},
  {name: "Rob", age: 55}
]);

alert(JSON.stringify(collection));
</pre>
      <p id="Collection-Underscore-Methods"> <b class="header">Underscore 方法 (26)</b> <br />
        Backbone 代理了 <b>Underscore.js</b> 从而为 <b>Backbone.Collection</b> 提供了26个迭代函数。这里没有列出这些函数的使用方法，你可以点击链接前往查看： </p>
      <ul>
        <li><a href="http://documentcloud.github.com/underscore/#each" target="_blank">forEach (each)</a></li>
        <li><a href="http://documentcloud.github.com/underscore/#map" target="_blank">map</a></li>
        <li><a href="http://documentcloud.github.com/underscore/#reduce" target="_blank">reduce (foldl, inject)</a></li>
        <li><a href="http://documentcloud.github.com/underscore/#reduceRight" target="_blank">reduceRight (foldr)</a></li>
        <li><a href="http://documentcloud.github.com/underscore/#detect" target="_blank">find (detect)</a></li>
        <li><a href="http://documentcloud.github.com/underscore/#select" target="_blank">filter (select)</a></li>
        <li><a href="http://documentcloud.github.com/underscore/#reject" target="_blank">reject</a></li>
        <li><a href="http://documentcloud.github.com/underscore/#all" target="_blank">every (all)</a></li>
        <li><a href="http://documentcloud.github.com/underscore/#any" target="_blank">some (any)</a></li>
        <li><a href="http://documentcloud.github.com/underscore/#include" target="_blank">include</a></li>
        <li><a href="http://documentcloud.github.com/underscore/#invoke" target="_blank">invoke</a></li>
        <li><a href="http://documentcloud.github.com/underscore/#max" target="_blank">max</a></li>
        <li><a href="http://documentcloud.github.com/underscore/#min" target="_blank">min</a></li>
        <li><a href="http://documentcloud.github.com/underscore/#sortBy" target="_blank">sortBy</a></li>
        <li><a href="http://documentcloud.github.com/underscore/#groupBy" target="_blank">groupBy</a></li>
        <li><a href="http://documentcloud.github.com/underscore/#sortedIndex" target="_blank">sortedIndex</a></li>
        <li><a href="http://documentcloud.github.com/underscore/#toArray" target="_blank">toArray</a></li>
        <li><a href="http://documentcloud.github.com/underscore/#size" target="_blank">size</a></li>
        <li><a href="http://documentcloud.github.com/underscore/#first" target="_blank">first</a></li>
        <li><a href="http://documentcloud.github.com/underscore/#rest" target="_blank">rest</a></li>
        <li><a href="http://documentcloud.github.com/underscore/#last" target="_blank">last</a></li>
        <li><a href="http://documentcloud.github.com/underscore/#without" target="_blank">without</a></li>
        <li><a href="http://documentcloud.github.com/underscore/#indexOf" target="_blank">indexOf</a></li>
        <li><a href="http://documentcloud.github.com/underscore/#lastIndexOf" target="_blank">lastIndexOf</a></li>
        <li><a href="http://documentcloud.github.com/underscore/#isEmpty" target="_blank">isEmpty</a></li>
        <li><a href="http://documentcloud.github.com/underscore/#chain" target="_blank">chain</a></li>
      </ul>
      <pre>
Books.each(function(book) {
  book.publish();
});

var titles = Books.map(function(book) {
  return book.get("title");
});

var publishedBooks = Books.filter(function(book) {
  return book.get("published") === true;
});

var alphabetical = Books.sortBy(function(book) {
  return book.author.get("name").toLowerCase();
});
</pre>
      <p id="Collection-add"> <b class="header">add</b><code>collection.add(models, [options])</code> <br />
        向集合中增加模型（或模型数组）。默认会触发 <tt>"add"</tt> 事件，可以传入 <tt>{silent : true}</tt> 关闭。
        如果定义了 <a href="#Collection-model">模型</a> 属性，也可以传入原始的属性对象让其看起来像一个模型实例。
        传入 <tt>{at: index}</tt> 可以将模型插入集合中特定的位置。 </p>
      <pre class="runnable">
var ships = new Backbone.Collection;

ships.bind("add", function(ship) {
  alert("Ahoy " + ship.get("name") + "!");
});

ships.add([
  {name: "Flying Dutchman"},
  {name: "Black Pearl"}
]);
</pre>
      <p id="Collection-remove"> <b class="header">remove</b><code>collection.remove(models, [options])</code> <br />
        从集合中删除模型（或模型数组）。会触发 <tt>"remove"</tt> 事件，同样可以使用 <tt>silent</tt> 关闭。 </p>
      <p id="Collection-get"> <b class="header">get</b><code>collection.get(id)</code> <br />
        返回集合中 id 为 <b>id</b> 的模型。 </p>
      <pre>
var book = Library.get(110);
</pre>
      <p id="Collection-getByCid"> <b class="header">getByCid</b><code>collection.getByCid(cid)</code> <br />
        通过指定客户id返回集合中的模型。客户id是指模型创建时自动生成的 <tt>.cid</tt> 属性。在模型尚未保存到服务器时其还没有id值，所以通过cid获取模型很有用处。 </p>
      <p id="Collection-at"> <b class="header">at</b><code>collection.at(index)</code> <br />
        返回集合中指定索引的模型对象。不论你是否对模型进行了重新排序， <b>at</b> 始终返回其在集合中插入时的索引值。 </p>
      <p id="Collection-length"> <b class="header">length</b><code>collection.length</code> <br />
        与数组类似，集合拥有 <tt>length</tt> 属性，返回该集合拥有的模型数量。 </p>
      <p id="Collection-comparator"> <b class="header">comparator</b><code>collection.comparator</code> <br />
        默认情况下，集合没有声明 <b>comparator</b> 函数。如果定义了该函数，集合中的模型会按照指定的算法进行排序。
        换言之，模型被增加的同时会插入适合的位置。Comparator接收模型作为参数，返回数值或字符串作为相对其它模型的排序依据。 </p>
      <p> 注意即使下面例子中的章节是后加入集合中的，但它们都会遵循正确的排序： </p>
      <pre class="runnable">
var Chapter  = Backbone.Model;
var chapters = new Backbone.Collection;

chapters.comparator = function(chapter) {
  return chapter.get("page");
};

chapters.add(new Chapter({page: 9, title: "The End"}));
chapters.add(new Chapter({page: 5, title: "The www.csser.com"}));
chapters.add(new Chapter({page: 1, title: "The Beginning"}));

alert(chapters.pluck('title'));
</pre>
      <p class="warning"> 说明：comparator 函数与 Javascript 的 "sort" 并不相同，后者必须返回 <tt>0</tt>, <tt>1</tt>, 或 <tt>-1</tt>, 前者则更像 <tt>sortBy</tt> &mdash; 一个更友好的API。 </p>
      <p id="Collection-sort"> <b class="header">sort</b><code>collection.sort([options])</code> <br />
        强制对集合进行重排序。一般情况下不需要调用本函数，因为 <a href="#Collection-comparator">comparator</a> 函数会实时排序。
        如果不指定 <tt>{silent: true}</tt> ，调用 <b>sort</b> 会触发集合的 <tt>"reset"</tt> 事件。 </p>
      <p id="Collection-pluck"> <b class="header">pluck</b><code>collection.pluck(attribute)</code> <br />
        从集合中的每个模型拉取 <tt>attribute</tt>。等价于调用 <tt>map</tt>，并从迭代器中返回单个属性。 </p>
      <pre class="runnable">
var stooges = new Backbone.Collection([
  new Backbone.Model({name: "Curly"}),
  new Backbone.Model({name: "Larry"}),
  new Backbone.Model({name: "Moe"})
]);

var names = stooges.pluck("name");

alert(JSON.stringify(names));
</pre>
      <p id="Collection-url"> <b class="header">url</b><code>collection.url or collection.url()</code> <br />
        设置 <b>url</b> 属性（或函数）以指定集合对应的服务器位置。集合内的模型使用 <b>url</b> 构造自身的 URLs。 </p>
      <pre>
var Notes = Backbone.Collection.extend({
  url: '/notes'
});

// 或者，更复杂一些的方式：

var Notes = Backbone.Collection.extend({
  url: function() {
  return this.document.url() + '/notes';
  }
});
</pre>
      <p id="Collection-parse"> <b class="header">parse</b><code>collection.parse(response)</code> <br />
        每一次调用 <a href="#Collectionfetch">fetch</a> 从服务器拉取集合的模型数据时，<b>parse</b>都会被调用。
        本函数接收原始 <tt>response</tt> 对象，返回可以 <a href="#Collection-add">add</a> 到集合的模型属性数组。
        默认实现是无需操作的，只需简单传入服务端返回的JSON对象。
        如果需要处理遗留API，或者在返回数据定义自己的命名空间，可以重写本函数。 </p>
      <pre>
var Tweets = Backbone.Collection.extend({
  // Twitter 搜索 API 在 "result" 键下返回 tweets
  parse: function(response) {
  return response.results;
  }
});
</pre>
      <p id="Collection-fetch"> <b class="header">fetch</b><code>collection.fetch([options])</code> <br />
        从服务器拉取集合的默认模型，成功接收数据后会重置（reset）集合。 <b>options</b> 支持 <tt>success</tt> 和 <tt>error</tt> 回调函数，回调函数接收 <tt>(collection, response)</tt> 作为参数。
        可以委托 <a href="#Sync">Backbone.sync</a> 在随后处理个性化需求。
        处理 <b>fetch</b> 请求的服务器应当返回模型的 <tt>JSON</tt> 数组。 </p>
      <pre class="runnable">
Backbone.sync = function(method, model) {
  alert(method + ": " + model.url);
};

var Accounts = new Backbone.Collection;
Accounts.url = '/accounts';

Accounts.fetch();
</pre>
      <p> 如果希望向当前集合追加模型数据而不是替换，传入 <tt>{add: true}</tt> 作为 <b>fetch</b> 的参数。 </p>
      <p> <b>fetch</b> 的参数可以支持直接传入 <b>jQuery.ajax</b> 作为参数，所以拉取指定页码的集合数据可以这样写：。 <tt>Documents.fetch({data: {page: 3}})</tt> </p>
      <p> 不建议在页面加载完毕时利用 <b>fetch</b> 拉取并填充集合数据 &mdash; 所有页面初始数据应当在 <a href="#FAQ-bootstrap">bootstrapped</a> 时已经就绪。 <b>fetch</b> 适用于惰性加载不需立刻展现的模型数据。 </p>
      <p id="Collection-reset"> <b class="header">reset</b><code>collection.reset(models, [options])</code> <br />
        每次一个的向集合做增删操作已经很好了，但有时会有很多的模型变化以至于需要对集合做大批量的更新操作。
        利用 <b>reset</b> 可将集合替换为新的模型（或键值对象），结束后触发 <tt>"reset"</tt> 事件。
        传入 <tt>{silent: true}</tt> 忽略 <tt>"reset"</tt> 事件的触发。
        不传入任何参数将清空整个集合。 </p>
      <p> 这里有一个在页面加载完毕后 <b>reset</b> 初始启动集合的例子： </p>
      <pre>
&lt;script&gt;
  Accounts.reset(&lt;%= @csser.to_json %&gt;);
&lt;/script&gt;
</pre>
      <p id="Collection-create"> <b class="header">create</b><code>collection.create(attributes, [options])</code> <br />
        在集合中创建一个模型。
        等价于用键值对象实例一个模型，然后将模型保存到服务器，保存成功后将模型增加到集合中。
        如果验证失败会阻止模型创建，返回 <tt>false</tt>，否则返回该模型。
        为了能正常运行，需要在集合中设置 <a href="#Collection-model">model</a> 属性。 <b>create</b> 方法接收键值对象或者已经存在尚未保存的模型对象作为参数。 </p>
      <pre>
var Library = Backbone.Collection.extend({
  model: Book
});

var NYPL = new Library;

var othello = NYPL.create({
  title: "Backbone.js API 中文手册",
  author: "一回（www.csser.com）"
});
</pre>
      <h2 id="Router">Backbone.Router</h2>
      <p> web应用程序通常需要为应用的重要位置提供可链接，可收藏，可分享的 URLs。
        直到最近， 锚点（hash）片段（<tt>#page</tt>）可以被用来提供这种链接，
        同时随着 History API 的到来，锚点已经可以用于处理标准 URLs （<tt>/page</tt>）。 <b>Backbone.Router</b> 为客户端路由提供了许多方法，并能连接到指定的动作（actions）和事件（events）。
        对于不支持 History API 的旧浏览器，路由提供了优雅的回调函数并可以透明的进行 URL 片段的转换。 </p>
      <p> 页面加载期间，当应用已经创建了所有的路由，需要调用 <tt>Backbone.history.start()</tt>，或 <tt>Backbone.history.start({pushState : true})</tt> 来确保驱动初始化 URL 的路由。 </p>
      <p id="Router-extend"> <b class="header">extend</b><code>Backbone.Router.extend(properties, [classProperties])</code> <br />
        创建一个自定义的路由类。
        可以通过 <a href="#Router-routes">routes</a> 定义路由动作键值对，当匹配了 URL 片段便执行定义的动作。 </p>
      <pre>
var Workspace = Backbone.Router.extend({

  routes: {
  "help":                 "help",    // #help
  "search/:query":        "search",  // #search/kiwis
  "search/:query/p:page": "search"   // #search/kiwis/p7
  },
  
  help: function() {
  ...
  },
  
  search: function(query, page) {
  ...
  }
  
});
</pre>
      <p id="Router-routes"> <b class="header">routes</b><code>router.routes</code> <br />
        routes 将带参数的 URLs 映射到路由实例的方法上，这与 <a href="#View">视图</a> 的 <a href="#View-delegateEvents">事件键值对</a> 非常类似。
        路由可以包含参数，<tt>:param</tt>，它在斜线之间匹配 URL 组件。
        路由也支持通配符，<tt>*splat</tt>，可以匹配多个 URL 组件。 </p>
      <p> 举个例子，路由 <tt>"search/:query/p:page"</tt> 能匹配 <tt>#search/obama/p2</tt> , 这里传入了 <tt>"obama"</tt> 和 <tt>"2"</tt> 到路由对应的动作中去了。 <tt>"file/*path</tt> 路由可以匹配 <tt>#file/nested/folder/file.txt</tt>，这时传入动作的参数为 <tt>"nested/folder/file.txt"</tt>。 </p>
      <p> 当访问者点击浏览器后退按钮，或者输入 URL ，如果匹配一个路由，此时会触发一个基于动作名称的 <a href="#Events">事件</a>，
        其它对象可以监听这个路由并接收到通知。
        下面的示例中，用户访问 <tt>#help/uploading</tt> 将从路由中触发 <tt>route:help</tt> 事件。 </p>
      <pre>
routes: {
  "help/:page":         "help",
  "download/*path":     "download",
  "folder/:name":       "openFolder",
  "folder/:name-:mode": "openFolder"
}
</pre>
      <pre>
router.bind("route:help", function(page) {
  ...
});
</pre>
      <p id="Router-constructor"> <b class="header">constructor / initialize</b><code>new Router([options])</code> <br />
        实例化一个路由对象，你可以直接传入 <a href="#Router-routes">routes</a> 键值对象作为参数。
        如果定义该参数， 它们将被传入 <tt>initialize</tt> 构造函数中初始化。 </p>
      <p id="Router-route"> <b class="header">route</b><code>router.route(route, name, callback)</code> <br />
        为路由对象手动创建路由，<tt>route</tt> 参数可以是 <a href="#Router-routes">路由字符串</a> 或 正则表达式。
        每个捕捉到的被传入的路由或正则表达式，都将作为参数传入回调函数（callback）。
        一旦路由匹配，<tt>name</tt> 参数会触发 <tt>"route:name"</tt> 事件。 </p>
      <pre>
initialize: function(options) {

  // 匹配 #page/10, 传入回调函数 "10"
  this.route("page/:number", "page", function(number){ ... });
  
  // 匹配 /csser.com/b/c/open, 传入回调函数 "csser.com/b/c"
  this.route(/^(.*?)/open$/, "open", function(id){ ... });
  
}
</pre>
      <p id="Router-navigate"> <b class="header">navigate</b><code>router.navigate(fragment, [triggerRoute])</code> <br />
        手动到达应用程序中的某个位置。
        传入 <b>triggerRoute</b> 以执行路由动作函数。 </p>
      <pre>
openPage: function(pageNumber) {
  this.document.pages.at(pageNumber).open();
  this.navigate("page/" + pageNumber);
}

# 或者 ...

app.navigate("help/troubleshooting", true);
</pre>
      <h2 id="History">Backbone.history</h2>
      <p> <b>History</b> 作为全局路由服务用于处理 <tt>hashchange</tt> 事件或 <tt>pushState</tt>，匹配适合的路由，并触发回调函数。
        我们不需要自己去做这些事情 &mdash; 如果使用带有键值对的 <a href="#Router">路由</a>，<tt>Backbone.history</tt> 会被自动创建。 </p>
      <p> Backbone 会自动判断浏览器对 <b>pushState</b> 的支持，以做内部的选择。
        不支持 <tt>pushState</tt> 的浏览器将会继续使用基于锚点的 URL 片段，
        如果兼容 <tt>pushState</tt> 的浏览器访问了某个 URL 锚点，将会被透明的转换为真实的 URL。
        注意使用真实的 URLs 需要 web 服务器支持直接渲染那些页面，因此后端程序也需要做修改。
        例如，如果有这样一个路由 <tt>/document/100</tt>，如果浏览器直接访问它， web 服务器必须能够处理该页面。
        趋于对搜索引擎爬虫的兼容，让服务器完全为该页面生成静态 HTML 是非常好的做法 ...
        但是如果要做的是一个 web 应用，只需要利用 Javascript 和 Backbone 视图将服务器返回的 REST 数据渲染就很好了。 </p>
      <p id="History-start"> <b class="header">start</b><code>Backbone.history.start([options])</code> <br />
        当所有的 <a href="#Router">路由</a> 创建并设置完毕，调用 <tt>Backbone.history.start()</tt> 开始监控 <tt>hashchange</tt> 事件并分配路由。 </p>
      <p> 需要指出的是，如果想在应用中使用 HTML5 支持的 <tt>pushState</tt>，只需要这样做：<tt>Backbone.history.start({pushState : true})</tt> 。 </p>
      <p> 如果应用不是基于域名的根路径 <tt>/</tt>，需要告诉 History 基于什么路径： <tt>Backbone.history.start({pushState: true, root: "/public/search/"})</tt> </p>
      <p> 当执行后，如果某个路由成功匹配当前 URL，<tt>Backbone.history.start()</tt> 返回 <tt>true</tt>。
        如果没有定义的路由匹配当前 URL，返回 <tt>false</tt>。 </p>
      <p> 如果服务器已经渲染了整个页面，但又不希望开始 History 时触发初始路由，传入 <tt>silent : true</tt> 即可。 </p>
      <pre>
$(function(){
  new WorkspaceRouter();
  new HelpPaneRouter();
  Backbone.history.start({pushState: true});
});
</pre>
      <h2 id="Sync">Backbone.sync</h2>
      <p> <b>Backbone.sync</b> 是 Backbone 每次向服务器读取或保存模型时都要调用执行的函数。
        默认情况下，它使用 <tt>(jQuery/Zepto).ajax</tt> 方法发送 RESTful json 请求。
        如果想采用不同的持久化方案，比如 WebSockets, XML, 或 Local Storage，我们可以重载该函数。 </p>
      <p> <b>Backbone.sync</b> 的语法为 <tt>sync(method, model, [options])</tt>。 </p>
      <ul>
        <li><b>method</b> – CRUD 方法 (<tt>"create"</tt>, <tt>"read"</tt>, <tt>"update"</tt>, 或 <tt>"delete"</tt>)</li>
        <li><b>model</b> – 要被保存的模型（或要被读取的集合）</li>
        <li><b>options</b> – 成功和失败的回调函数，以及所有 jQuery 请求支持的选项</li>
      </ul>
      <p> 默认情况下，当 <b>Backbone.sync</b> 发送请求以保存模型时，其属性会被序列化为 JSON，并以 <tt>application/json</tt> 的内容类型发送。
        当接收到来自服务器的 JSON 响应后，对经过服务器改变的模型进行拆解，然后在客户端更新。
        当 <tt>"read"</tt> 请求从服务器端响应一个集合（<a href="#Collection#fetch">Collection#fetch</a>）时，便拆解模型属性对象的数组。 </p>
      <p> 默认 <b>sync</b> 映射 REST 风格的 CRUD 类似下面这样： </p>
      <ul>
        <li><b>create &rarr; POST &nbsp; </b><tt>/collection</tt></li>
        <li><b>read &rarr; GET &nbsp; </b><tt>/collection[/id]</tt></li>
        <li><b>update &rarr; PUT &nbsp; </b><tt>/collection/id</tt></li>
        <li><b>delete &rarr; DELETE &nbsp; </b><tt>/collection/id</tt></li>
      </ul>
      <p id="Sync-emulateHTTP"> <b class="header">emulateHTTP</b><code>Backbone.emulateHTTP = true</code> <br />
        老的浏览器不支持 Backbone 默认的 REST/HTTP，此时可以开启 <tt>Backbone.emulateHTTP</tt> 。
        设置该选项将通过 <tt>POST</tt> 方法伪造 <tt>PUT</tt> 和 <tt>DELETE</tt> 请求，此时该请求会向服务器传入名为 <tt>_method</tt> 的参数。
        设置该选项同时也会向服务器发送 <tt>X-HTTP-Method-Override</tt> 头。 </p>
      <pre>
Backbone.emulateHTTP = true;

model.save();  // POST 到 "/collection/id", 附带 "_method=PUT" + header.
</pre>
      <p id="Sync-emulateJSON"> <b class="header">emulateJSON</b><code>Backbone.emulateJSON = true</code> <br />
        同样老的浏览器也不支持发送 <tt>application/json</tt> 编码的请求，
        设置 <tt>Backbone.emulateJSON = true;</tt> 后 JSON 模型会被序列化为 <tt>model</tt> 参数，
        请求会按照 <tt>application/x-www-form-urlencoded</tt> 的内容类型发送，就像提交表单一样。 </p>
      <h2 id="View">Backbone.View</h2>
      <p> Backbone 视图的使用相当方便 &mdash; 它不会影响任何的 HTML 或 CSS 代码，并且可以与任意 Javascript 模板引擎兼容。
        基本的做法就是，将界面组织到逻辑视图，之后是模型，当模型数据发生改变，视图立刻自动更新，这一切都不需要重绘页面。
        我们再也不必钻进 JSON 对象中，查找 DOM 元素，手动更新 HTML 了，通过绑定视图的 <tt>render</tt> 函数到模型的 <tt>"change"</tt> 事件 &mdash; 模型数据会即时的显示在 UI 中。 </p>
      <p id="View-extend"> <b class="header">extend</b><code>Backbone.View.extend(properties, [classProperties])</code> <br />
        创建自定义的视图类。
        通常我们需要重载 <a href="#View-render">render</a> 函数，声明 <a href="#View-delegateEvents">事件</a>，
        以及通过 <tt>tagName</tt>，<tt>className</tt>，或 <tt>id</tt> 为视图指定根元素。 </p>
      <pre>
var DocumentRow = Backbone.View.extend({

  tagName: "li",
  
  className: "document-row",
  
  events: {
  "click .icon":          "open",
  "click .button.edit":   "openEditDialog",
  "click .button.delete": "destroy"
  },
  
  render: function() {
  ...
  }
  
});
</pre>
      <p id="View-constructor"> <b class="header">constructor / initialize</b><code>new View([options])</code> <br />
        每次实例化一个视图时，传入的选项参数会被注册到 <tt>this.options</tt> 中以备后用。
        这里有多个特殊的选项，如果传入，则直接注册到视图中去： <tt>model</tt>, <tt>collection</tt>, <tt>el</tt>, <tt>id</tt>, <tt>className</tt>, 以及 <tt>tagName</tt>.
        如果视图定义了 <b>initialize</b> 函数，当视图实例化时该函数便立刻执行。
        如果希望创建一个指向 DOM 中已存在的元素的视图，传入该元素作为选项： <tt>new View({el: existingElement})</tt> </p>
      <pre>
var doc = Documents.first();

new DocumentRow({
  model: doc,
  id: "document-row-" + doc.id
});
</pre>
      <p id="View-el"> <b class="header">el</b><code>view.el</code> <br />
        所有的视图都拥有一个 DOM 元素（<b>el</b> 属性），即使该元素仍未插入页面中去。
        视图可以在任何时候渲染，然后一次性插入 DOM 中去，这样能尽量减少 reflows 和 repaints 从而获得高性能的 UI 渲染。 <tt>this.el</tt> 可以从视图的 <tt>tagName</tt>，<tt>className</tt>，以及 <tt>id</tt> 属性创建，如果都未指定，<b>el</b> 会是一个空 <tt>div</tt>。 </p>
      <p> 如果希望将 <b>el</b> 赋给页面 DOM 中已经存在的元素，直接设置其值为真实的 DOM 元素或 CSS 选择符字符串。 </p>
      <pre class="runnable">
var ItemView = Backbone.View.extend({
  tagName: 'li'
});

var BodyView = Backbone.View.extend({
  el: 'body'
});

var item = new ItemView();
var body = new BodyView();

alert(item.el + ' ' + body.el);
</pre>
      <p id="View-dollar"> <b class="header">$ (jQuery 或 Zepto)</b><code>view.$(selector)</code> <br />
        如果页面中引入了 jQuery 或 Zepto ，每个视图都将拥有 <b>$</b> 函数，可以在视图元素查询作用域内运行。
        如果使用该作用域内的 jQuery 函数，就不需要从列表中指定的元素获取模型的 ids 这种查询了，我们可以更多的依赖 HTML class 属性。
        它等价于运行：<tt>$(selector, this.el)</tt>。 </p>
      <pre>
ui.Chapter = Backbone.View.extend({
  serialize : function() {
  return {
    title: this.$(".title").text(),
    start: this.$(".start-page").text(),
    end:   this.$(".end-page").text()
  };
  }
});
</pre>
      <p id="View-render"> <b class="header">render</b><code>view.render()</code> <br />
        <b>render</b> 默认实现是没有操作的。
        重载本函数可以实现从模型数据渲染视图模板，并可用新的 HTML 更新 <tt>this.el</tt>。
        推荐的做法是在 <b>render</b> 函数的末尾 <tt>return this</tt> 以开启链式调用。 </p>
      <pre>
var Bookmark = Backbone.View.extend({
  render: function() {
  $(this.el).html(this.template(this.model.toJSON()));
  return this;
  }
});
</pre>
      <p> Backbone 并不知道开发者使用何种模板引擎。 <b>render</b> 函数中可以采用拼字符串，或者利用 <tt>document.createElement</tt> 创建 DOM 树等等。
        但还是建议选择一个好的 Javascript 模板引擎。 <a href="http://github.com/janl/mustache.js" target="_blank">Mustache.js</a>, <a href="http://github.com/creationix/haml-js" target="_blank">Haml-js</a>, 以及 <a href="http://github.com/sstephenson/eco" target="_blank">Eco</a> 都是很好的选择。
        因为 <a href="http://documentcloud.github.com/underscore/" target="_blank">Underscore.js</a> 已经引入页面了，
        所以为了防止 XSS 攻击带给数据的安全威胁，<a href="http://documentcloud.github.com/underscore/#template" target="_blank">_.template</a> 可以使用并是一个很好的选择。 </p>
      <p> 无论基于什么考虑，都永远不要在 Javascript 中拼接 HTML 字符串。 </p>
      <p id="View-remove"> <b class="header">remove</b><code>view.remove()</code> <br />
        从 DOM 中移除视图。它等价与下面的语句： <tt>$(view.el).remove();</tt> </p>
      <p id="View-make"> <b class="header">make</b><code>view.make(tagName, [attributes], [content])</code> <br />
        借助给定的元素类型（<b>tagName</b>），以及可选的 attributes 和 HTML 内容创建 DOM 元素。
        通常用于内部创建初始的 <tt>view.el</tt>。 </p>
      <pre class="runnable">
var view = new Backbone.View;

var el = view.make("b", {className: "bold"}, "Bold! ");

$("#make-demo").append(el);
</pre>
      <div id="make-demo"></div>
      <p id="View-delegateEvents"> <b class="header">delegateEvents</b><code>delegateEvents([events])</code> <br />
        采用 jQuery 的<tt>delegate</tt> 函数来为视图内的 DOM 事件提供回调函数声明。
        如果未传入 <b>events</b> 对象，使用 <tt>this.events</tt> 作为事件源。
        事件对象的书写格式为 <tt>{"event selector" : "callback"}</tt>。
        省略 <tt>selector</tt> 则事件被绑定到视图的根元素（<tt>this.el</tt>）。
        默认情况下，<tt>delegateEvents</tt> 会在视图的构造函数内被调用，因此如果有 <tt>events</tt> 对象，所有的 DOM 事件已经被连接，
        并且我们永远不需要去手动调用本函数。 </p>
      <p> <tt>events</tt> 属性也可以被定义成返回 <b>events</b> 对象的函数，这样让我们定义事件，以及实现事件的继承变得更加方便。 </p>
      <p> 视图 <a href="#View-render">渲染</a> 期间使用 <b>delegateEvents</b> 相比用 jQuery 向子元素绑定事件有更多优点。
        所有注册的函数在传递给 jQuery 之前已被绑定到视图上，因此当回调函数执行时，<tt>this</tt> 仍将指向视图对象。
        当 <b>delegateEvents</b> 再次运行，此时或许需要一个不同的 <tt>events</tt> 对象，所以所有回调函数将被移除，然后重新委托 &mdash;
        这对模型不同行为也不同的视图挺有用处。 </p>
      <p> 搜索结果页面显示文档的视图看起来类似这样： </p>
      <pre>
var DocumentView = Backbone.View.extend({

  events: {
  "dblclick"                : "open",
  "click .icon.doc"         : "select",
  "contextmenu .icon.doc"   : "showMenu",
  "click .show_notes"       : "toggleNotes",
  "click .title .lock"      : "editAccessLevel",
  "mouseover .title .date"  : "showTooltip"
  },
  
  render: function() {
  $(this.el).html(this.template(this.model.toJSON()));
  return this;
  },
  
  open: function() {
  window.open(this.model.get("viewer_url"));
  },
  
  select: function() {
  this.model.set({selected: true});
  },
  
  ...
  
});
</pre>
      <h2 id="Utility">Utility Functions</h2>
      <p> </p>
      <p id="Utility-noConflict"> <b class="header">noConflict</b><code>var backbone = Backbone.noConflict();</code> <br />
        返回 <tt>Backbone</tt> 对象的原始值。通常用于在第三方网站上引入了多个 Backbone 文件，避免冲突。 </p>
      <pre>
var localBackbone = Backbone.noConflict();
var model = localBackbone.Model.extend(...);
</pre>
  </div>
</div>

<?php
require_once './inc/footer.php';
 ?>