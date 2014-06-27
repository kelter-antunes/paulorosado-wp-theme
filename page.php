<?php
	get_header();
?>
<div class="container">
	<h1><a href="<?php echo get_option( 'home' ); ?>"><?php bloginfo( 'name' ); ?></a></h1>
</div>
<div class="container">
	<?php if ( have_posts() ) : ?>
	<?php while ( have_posts() ) : the_post(); ?>

	<?php the_content(); ?>

<?php endwhile; ?>
<?php endif; ?>
</div>
<?php
	get_footer();
?>
