<?php /* Template Name: Search */ ?>
<?php get_header(); ?>

<!-- main content -->
<div id="maincontent">
	<div class="container">
		<div class="row">
			<div class="span12">
				<h1>Results matching "<?php the_search_query(); ?>"</h1>
			</div>

			<div class="span8">	
				<?php if ( have_posts() ) : ?>
				<?php while ( have_posts() ) : the_post(); ?>

				<h2>
					<a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a>
				</h2>
				<div class="featured-summary">
					<?php the_content(); ?>
				</div>
				<div class="asset-footer"></div>

			<?php endwhile; ?>
		<?php else :  // no results?>
		
		<p>No Results Found.</p>

	<?php endif; ?>
</div>

<?php get_sidebar(); ?>	

</div>
</div>
</div>
<!-- /End main content -->


<?php
get_footer();
?>



