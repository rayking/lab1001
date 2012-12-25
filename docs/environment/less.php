<?php
chdir('../../');
$seotitle = 'less动态样式环境';
$description = 'test';

require_once './inc/header.php';

 ?>
<h2>less动态样式环境</h2>
<img src="asset/lesslogo.png" width="199" height="81" alt="less" class="imgleft"/>
<p><abbr title="一种动态样式语言" class="initialism">LESS</abbr>将 CSS 赋予了动态语言的特性，如 变量， 继承， 运算， 函数. <abbr title="一种动态样式语言" class="initialism">LESS</abbr> 既可以在 客户端 上运行 (支持IE 6+, Webkit, Firefox)，也可以借助<a href="http://baike.baidu.com/view/3974030.htm">Node.js</a>或者Rhino在服务端运行。本例将通过php脚本将less转换为css文件。</p><br />

<p>一个偶然的机会，发现了<abbr title="一种动态样式语言" class="initialism">LESS</abbr>，对于我来说，<abbr title="一种动态样式语言" class="initialism">LESS</abbr>为我解决了几个问题：
<ol>
<li>在大中型项目中，将UI中的各个设置以变量的方式储存，更加规范。</li>
<li>多人协作的团队中，避免了css的风格不一，可以作为一种标准来规范。</li>
<li>模块式的开发过程中，代码块清晰、方便。</li>
<li>css3针对不同浏览器的特殊定义更加方便了。</li>
<li>一些UI组建可以通过less函数/类功能实现，使用仅需传递参数。</li>
</ol>
更多关于<abbr title="一种动态样式语言" class="initialism">LESS</abbr>的信息请移步至<a href="http://www.lesscss.net/">http://www.lesscss.net/</a>.
</p>
<h2>谁在用LESS，哪种情况适合使用less</h2>
<p>我现在知道在使用less的有<a href="http://twitter.github.com/bootstrap">twitter的bootstrap项目</a>，个人觉得less适合于多人开发维护同一个项目，且项目比较大，css文件难于管理的情形。</p>
<h2>LESSPHP搭建</h2>
<p>less官方提供js、nood.js和一些在线、本地软件等方式编译less，个人觉得不是很理想，js编译影响前端性能，nood.js还需要熟悉更为高深的知识，而且操作不方便，本地软件操作也很不方便。本文介绍的lessphp编译个人觉得不错，适合于本身就是php的项目。</p>
<p><a href="http://leafo.net/lessphp/">lessphp作者网站</a></p>
<p><a href="asset/lessphp-0.3.8.tar.gz">本站下载lessphp-0.3.8</a></p>
<p>lessphp提供一个类，可以在php项目中直接调用这个类的各种方法实现less编译为css的过程。</p>
<script src="https://gist.github.com/4372005.js"></script>
<p>这种方法非常方便，而且可以使用php编写less变量的脚本，更方便的管理less文件，但是我没使用这种方法，而是通过这个类文件做了一个编译less的php脚本，不和项目文件挂钩，这样，无论是cdn部署css文件，还是把less/css移植到其他平台都很方便。</p>
<?php
require_once './inc/footer.php';
 ?>