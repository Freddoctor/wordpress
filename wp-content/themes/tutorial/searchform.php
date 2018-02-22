<h3>搜索框</h3>
<input type="text" value="" placeholder="请输入文字" />

<!--
日历模块 Calendar
get_calendar() 日历调用
-->
<div id="calendar">
    <h2><?php _e('Calendar'); ?></h2>
    <?php get_calendar();?>
</div>

<!--
登陆注册模块
-->
<section>
    <h2><?php _e('Meta'); ?></h2>
    <nav>
		<?php wp_register(); ?>
        <?php wp_loginout(); ?>
		<?php wp_meta(); ?>
    </nav>
</section>

<!--
侧边栏

dynamic_sidebar('widgetized-area')
-->
<section class="side">
	<?php if (function_exists('dynamic_sidebar') && dynamic_sidebar('widgetized-area')) : else : ?>
        <div class="pre-widget">
            轻轻的我来了，正如我轻轻的来了 我挥一挥衣袖不带走一片云彩。
        </div>
	<?php endif; ?>
</section>