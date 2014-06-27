<?php $selected_category = '';
$sel_cat = single_tag_title( '', false );
$tag = get_term_by( 'name', $sel_cat, 'post_tag' );
//echo $tag;
$selected_category = $tag->slug;
?>
<?php
if ( is_mobile() ) :
	get_header( 'mobile' );
else :
	get_header();
endif;
?>

<div class="container">
	<div class="feeds_home"><a href="<?php bloginfo( 'rss2_url' ); ?>"><i class="rss">&nbsp;</i> Subscribe RSS</a></div>
	<h1><a href="<?php echo get_option( 'home' ); ?>"><?php bloginfo( 'name' ); ?></a></h1>
	<div class="header_top">
		<div style="float:left;" class="tags">
			<h3><i></i> Posts tagged with <a href="<?php echo get_tag_link( $tag->ID ); ?>"><?php echo $sel_cat; ?></a></h3>
		</div>
		<div class="subscription_area">
			<?php
			$success = $_GET['aliId'];
			if( $success != "" )
				echo '<div class="subscribed">Thank you for subscribing to our blog!</div>';
			else {
				echo '<script src="//app-sj03.marketo.com/js/forms2/js/forms2.js"></script>
				<form id="mktoForm_1119"></form>
				<script>MktoForms2.loadForm("//app-sj03.marketo.com", "338-PNW-019", 1119);</script>';
			}
			?>
		</div>
	</div>
</div>


<div class="container">
	<?php if ( have_posts() ) : ?>
	<div class="posts row">
		<?php
		while ( have_posts() ) : the_post(); ?>
		<div class="post span4" onclick="location.href='<?php the_permalink(); ?>'">
			<?php if ( has_post_thumbnail() or ( has_category() and !( has_category( get_term_by( 'name', 'Uncategorized', 'category' )->term_id ) ) ) ) : ?>
			<div class="header">
				<?php the_post_thumbnail(); ?>
				<?php
				$postcats = get_the_category();
				if ( $postcats ) {
					foreach ( $postcats as $postcat ) {
						if ( $postcat->name != "Uncategorized" ) {
							echo '<div class="category '
							. $postcat->slug
							. '"><i>&nbsp;</i>&nbsp;'
							. $postcat->name
							. '</div>';
						}
					}
				}
				?>
			</div>
		<?php endif; ?>
		<div class="entry">
			<h3><a class="postlink" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
			<div class="postcontent"><?php the_content(); ?></div>
			<p class="postmetadata byline">
				By <?php  the_author_posts_link(); ?> on <?php echo get_the_date(); ?>
			</p>
		</div>
	</div>
<?php endwhile; ?>
</div>
<?php endif; ?>
</div>

<?php
get_footer();
?>
