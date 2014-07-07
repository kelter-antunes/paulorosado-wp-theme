<?php
$category_id_featured = get_cat_ID('Featured');
$category_id_management = get_cat_ID('Management');
$category_id_it = get_cat_ID('IT');
$category_id_empreendorismo = get_cat_ID('Empreendorismo');

get_header('index');
?>

<!-- main content -->
<div id="maincontent">
	<div class="container">
		<div class="row">

			<div class="span4 cat-menu">
				<span class="label">
					<a href="/category/management" class="ml">Management &amp; Leadership</a>
				</span>
				<div class="featured">
					<?php
					$query_args = array( 'category__and' => array($category_id_featured,$category_id_management), 'posts_per_page' => 1, 'no_found_rows' => 1, 'post_status' => 'publish');
					$catquery = new WP_Query($query_args);
					//$catquery = new WP_Query( 'cat='.$category_id_management.'&posts_per_page=1' );
					while ( $catquery->have_posts() ) : $catquery->the_post();
					?>				
					<h2>
						<a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a>
					</h2>
					<div class="featured-summary">
						<?php the_content(); ?>
					</div>
				<?php endwhile; ?>
				</div>
				<div class="more">
					<h2>Featured articles</h2>
					<ul>
						<?php
						$catquery = new WP_Query( 'cat='.$category_id_management.'&posts_per_page=5' );
						while ( $catquery->have_posts() ) : $catquery->the_post();
						?>

						<li>
							<a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a>
						</li>

					<?php endwhile; ?>
					</ul>
				</div>
			</div>

			<div class="span4 cat-menu">
				<span class="label">
					<a href="/category/it" class="it">Information Technology</a>
				</span>
				<div class="featured">
					<?php
					$query_args = array( 'category__and' => array($category_id_featured,$category_id_it), 'posts_per_page' => 1, 'no_found_rows' => 1, 'post_status' => 'publish');
					$catquery = new WP_Query($query_args);
							//$catquery = new WP_Query( 'cat='.$category_id_management.'&posts_per_page=1' );
					while ( $catquery->have_posts() ) : $catquery->the_post();
					?>				
					<h2>
						<a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a>
					</h2>
					<div class="featured-summary">
						<?php the_content(); ?>
					</div>

					<?php endwhile; ?>
				</div>

				<div class="more">
					<h2>Featured articles</h2>
					<ul>
						<?php
						$catquery = new WP_Query( 'cat='.$category_id_it.'&posts_per_page=5' );
						while ( $catquery->have_posts() ) : $catquery->the_post();
						?>

						<li>
							<a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a>
						</li>

					<?php endwhile; ?>
					</ul>
				</div>
			</div>

			<div class="span4 gray cat-menu">
				<span class="pt label">
					<a href="/category/empreendorismo" class="pt">Empreendorismo em Portugal</a>
				</span>
				<div class="featured">
					<?php
					$query_args = array( 'category__and' => array($category_id_featured,$category_id_empreendorismo), 'posts_per_page' => 1, 'no_found_rows' => 1, 'post_status' => 'publish');
					$catquery = new WP_Query($query_args);
								//$catquery = new WP_Query( 'cat='.$category_id_management.'&posts_per_page=1' );
					while ( $catquery->have_posts() ) : $catquery->the_post();
					?>				
					<h2>
						<a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a>
					</h2>
					<div class="featured-summary">
						<?php the_content(); ?>
					</div>

					<?php endwhile; ?>
				</div>

				<div class="more-pt">
					<h2>Artigos em destaque</h2>
					<ul>
						<?php
						$catquery = new WP_Query( 'cat='.$category_id_empreendorismo.'&posts_per_page=5' );
						while ( $catquery->have_posts() ) : $catquery->the_post();
						?>

						<li>
							<a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a>
						</li>

					<?php endwhile; ?>
					</ul>
				</div>
			</div>

		</div>
	</div>
</div>
<!-- /End main content -->


<?php
get_footer();
?>
