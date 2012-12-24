<?php
if($nocommont){

?> 
<div class="ujian-hook"></div>
  <!-- UY BEGIN -->
<div id="uyan_frame"></div>
<script type="text/javascript" id="UYScript" src="http://v1.uyan.cc/js/iframe.js?UYUserId=1532596" async=""></script>
<!-- UY END -->

<!-- UJian Button BEGIN -->
<script type="text/javascript">var ujian_config = {num:6,showType:3,bgColor:'#'};</script>
<script type="text/javascript" src="http://v1.ujian.cc/code/ujian.js?uid=1532596"></script>
<a href="http://www.ujian.cc" style="border:0;"><img src="http://img.ujian.cc/pixel.png" alt="友荐云推荐" style="border:0;padding:0;margin:0;" /></a>
<!-- UJian Button END -->
<?php
}
?>
 </article>

</div>
<footer class="container" id="footer">
		
		<p><small>&copy; Copyright rAy 2012. All Rights Reserved.
<?php
$endtime = microtime();
echo 'Processed in '.($endtime - $starttime).'ms';
?></small></p>
		
	</footer>
    
    <?php 
if($extjs){
echo '<script type="text/javascript" src="'.$SITEURL.$extjs.'"></script>';
	}
?>
<script type="text/javascript">
var _bdhmProtocol = (("https:" == document.location.protocol) ? " https://" : " http://");
document.write(unescape("%3Cscript src='" + _bdhmProtocol + "hm.baidu.com/h.js%3Fdbd40babfe06b418a82db3f19051ee6b' type='text/javascript'%3E%3C/script%3E"));
</script>


</body>
</html>
