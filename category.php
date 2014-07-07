<?php $selected_category = '';
$sel_cat = single_cat_title( '', false );
$selected_category = strtolower( $sel_cat );

get_header();

?>

<!-- main content -->
<div id="maincontent">
	<div class="container">
		<div class="row">
			<div class="span12">
				<h1 class="archive-title">Articles in <?php echo category_description( get_cat_ID( $selected_category ) ); ?></h1>
			</div>

			<div class="span8">	
				<?php
				$catquery = new WP_Query( 'cat='.get_cat_ID( $selected_category ).'&posts_per_page=' );
				while ( $catquery->have_posts() ) : $catquery->the_post();

				?>	

				<h2>
					<a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a>
				</h2>
				<p class="postmetadata byline">
						<?php echo get_the_date(); ?>
					</p>
				<div class="featured-summary">
					<?php the_content(); ?>
				</div>
				<div class="asset-footer"></div>

			<?php endwhile; ?>
		</div>

		<?php get_sidebar(); ?>	

	</div>
</div>
</div>
<!-- /End main content -->


<?php
get_footer();
?>
