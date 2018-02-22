<?php
/**
 * Created by PhpStorm.
 * User: FredDoctor
 * Date: 2018/2/6
 * Time: 16:23
 */
;?>
<footer>
	<nav>
		<a href="javascript:;">首页</a>
		<a href="javascript:;">关于我们</a>
		<a href="javascript:;">视频</a>
		<a href="javascript:;">更多</a>
	</nav>
</footer>
<!--
  增加模块引用
  include() 引用文件
  TEMPLATEPATH 当前url (index) 所在的绝对路径
  -->
<div class="module">
	<?php include(TEMPLATEPATH . '/searchform.php'); ?>
</div>
<p>
	Copyright © 2018 <?php bloginfo('name'); ?>
</p>
