<!DOCTYPE html>
<html lang="en">

<head>
	<?php get_header(); ?>
</head>

<body>
<?php get_sidebar(); ?>
<div id="header">
	<!-- url:当前url  name:博客名称  description:描述-->
	<h1><a href="<?php bloginfo('url'); ?>" ><?php bloginfo('name'); ?></a></h1>
	<section>
		<?php bloginfo('description'); ?>
	</section>
</div>
<div id="content">
	<!-- have_posts检查是否有文章  the_post有文章执行这个方法 -->
	<!-- the_permalink():日志地址  the_title():日志标题-->
	<!-- the_content(): 日志内容-->
	<!-- the_author()  作者-->
	<!-- the_category() 标签 -->
	<!-- comments_popup_link 评论展示 -->
	<!-- the_ID() 日志的 ID。-->
	<!-- posts_nav_link() – 调用后一页和前一页的链接。 -->
	<?php if(have_posts()) : ?>
		<?php while(have_posts()) : the_post(); ?>
			<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
			<article class="article" id="post-<?php the_ID(); ?>">
				<?php the_excerpt(); ?>
				<?php _e('by'); ?>
				<?php the_category(',') ?>
				<?php the_author(); ?>
				<?php comments_popup_link('No Comments »', '1 Comment »', '% Comments »'); ?>
				<?php edit_post_link('Edit', '|', ''); ?>
			</article>
		<?php endwhile; ?>
		<div class="navigation">
			<?php posts_nav_link('in between','befor','after'); ?>
		</div>
	<?php else : ?>
		<div class="post">
			<h2><?php _e('Not Found'); ?></h2>
		</div>
	<?php endif; ?>
</div>

<!-- 侧边栏 -->
<!-- _e('Categories') 文章分类 -->
<!-- wp_list_cats()分类li列表 -->
<!-- wp_list_pages() 页面链接列表 -->
<div class="sidebar">
	<h2><?php _e('Categories'); ?></h2>
	<ul>
		<?php wp_list_cats('sort_column=name&optioncount=1&hierarchical=0'); ?>
	</ul>
</div>
<div id="footer">
	<?php wp_list_pages(); ?>
</div>
<!--  存档和链接-->
<!--  _e('Archives') 文章归档-->
<!--  wp_get_archives('type=monthly') -->
<div class="Categories">
	<h3><?php _e('Archives'); ?></h3>
	<ul>
		<?php wp_get_archives('type=monthly'); ?>
	</ul>
</div>
<!--  友情链接 get_links_list()-->
<div class="link">
	<?php get_links_list() ; ?>
</div>
<!--  底部引用-->
<?php get_footer();?>
我是archive内容区域
</body>
</html>
