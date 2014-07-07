<?php
get_header();
?>

<!-- main content -->
<div id="maincontent">
	<div class="container">
		<div class="row">

			<div class="span12">
				<h1>
					<?php the_title(); ?>
				</h1>
			</div>

			<?php if ( have_posts() ) : ?>
			<?php while ( have_posts() ) : the_post(); ?>

			<div class="span8">			
				<div class="featured-summary">
					<?php the_content(); ?>
				</div>
				<div class="asset-footer"></div>
			</div>
		<?php endwhile; ?>
	<?php endif; ?>

	<?php get_sidebar(); ?>	

</div>
</div>
</div>
<!-- /End main content -->


<?php
get_footer();
?>



