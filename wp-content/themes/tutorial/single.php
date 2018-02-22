<!DOCTYPE html>
<html lang="en">

<head>
	<?php get_header(); ?>
</head>

<body>

<!--判断是否有文章-->
<?php while(have_posts()) : the_post(); ?>
	<?php the_content(); ?>
<?php endwhile; ?>

<?php link_pages('<p><strong>Pages:</strong>', '</p>', 'number'); ?>

<?php previous_post_link('%link'); ?>

<?php next_post_link('%link'); ?>

<!--单篇文章调用评论接口-->
<?php comments_template(); ?>

</body>
</html>
