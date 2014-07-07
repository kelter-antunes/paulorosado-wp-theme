<?php
get_header();
?>
<?php 
global $the_author_name;
global $the_author_description;
global $the_author_id;
global $the_category;
global $the_category_id;
global $the_post_id;
?>

<!-- main content -->
<div id="maincontent">
	<div class="container">
		<?php if(have_posts()) : ?>
		<?php while(have_posts()) : the_post(); ?>
		<?php 

	// data for side bar
		$the_post_id = get_the_ID();
		$the_author_name = get_the_author_meta('display_name');
		$the_author_description = get_the_author_meta('description');
		$the_author_id = get_the_author_meta('ID');
		$allcategories = get_the_category($the_post_id);
		if( $allcategories )
			$category = $allcategories[0];
		if( $category )
			$the_category = $category->cat_name;
		?>

		<div class="row">

			<div class="span12">
				<h1><?php the_title(); ?></h1>
			</div>
			<div class="leftbar span8">
				<div class="fullpost">
					<p class="postmetadata byline">
						<?php echo get_the_date(); ?>
					</p>
					<div class="postcontent"><?php the_content(); ?></div>
					<?php
					echo get_the_tag_list('<div class="tags"><i></i> ','','</div>');
					?>

					<div class="asset-footer">    
						<div class="social">
							<!-- AddThis Button BEGIN -->
							<div class="addthis_toolbox addthis_default_style ">
								<a class="addthis_button_facebook_like" fb:like:layout="button_count"></a>
								<a class="addthis_button_tweet"></a>
								<a class="addthis_button_google_plusone" g:plusone:size="medium"></a>
								<a class="addthis_counter addthis_pill_style"></a>
							</div>
							<script type="text/javascript">var addthis_config = {"data_track_addressbar":true};</script>
							<script type="text/javascript" src="http://s7.addthis.com/js/250/addthis_widget.js#pubid=ra-4feb3b104c6a1370"></script>
							<!-- AddThis Button END --> 
						</div>
					</div>
				</div>

				<div class="comments-template comments">
					<?php comments_template(); ?>
				</div>				
			</div>
		<?php endwhile; ?>	
		<?php get_sidebar(); ?>	
	<?php endif; ?>
</div>
</div>
</div>
<!-- /End main content -->

<?php
get_footer();
?>