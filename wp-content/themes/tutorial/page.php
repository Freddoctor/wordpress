<?php
/**
 * Created by PhpStorm.
 * User: FredDoctor
 * Date: 2018/2/6
 * Time: 18:25
 */
;?>
<!DOCTYPE html>
<html lang="en">

<head>
	<?php get_header(); ?>
</head>
<!-- 页面内容page -->
<body>
<?php get_sidebar(); ?>

<!--判断是否有文章-->
<?php while(have_posts()) : the_post(); ?>
	<?php the_content(); ?>
<?php endwhile; ?>

<?php link_pages('<p><strong>Pages:</strong>', '</p>', 'number'); ?>
<?php edit_post_link('Edit', '<p>', '</p>'); ?>

<!--  底部引用-->
<?php get_footer();?>

</body>

</html>

