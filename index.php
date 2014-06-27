<?php
$category_id_management = get_cat_ID('Management');
$category_id_it = get_cat_ID('IT');
$category_id_empreendorismo = get_cat_ID('Empreendorismo');

get_header();
?>

<div id="maincontent">
	<div class="container">
		<div class="row">

			<div class="span4">
				<div class="featured">
					<?php
					$catquery = new WP_Query( 'cat='.$category_id_management.'&posts_per_page=1' );
					while ( $catquery->have_posts() ) : $catquery->the_post();
					?>
					<ul>
						<li>
							<h3><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h3>
							<ul>
								<li><?php the_content(); ?></li>
							</ul>
						</li>
					</ul>
				<?php endwhile; ?>
			</div>
		</div>

		<div class="span4">
			<div class="featured">
				<?php
				$catquery = new WP_Query( 'cat='.$category_id_it.'&posts_per_page=1' );
				while ( $catquery->have_posts() ) : $catquery->the_post();
				?>
				<ul>
					<li>
						<h3><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h3>
						<ul>
							<li><?php the_content(); ?></li>
						</ul>
					</li>
				</ul>
			<?php endwhile; ?>
		</div>
	</div>

	<div class="span4 gray">
		<div class="featured">
			<?php
			$catquery = new WP_Query( 'cat='.$category_id_empreendorismo.'&posts_per_page=1' );
			while ( $catquery->have_posts() ) : $catquery->the_post();
			?>
			<ul>
				<li>
					<h3><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h3>
					<ul>
						<li><?php the_content(); ?></li>
					</ul>
				</li>
			</ul>
		<?php endwhile; ?>
	</div>
</div>

<div class="reset"></div>

<div class="span4">
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

<div class="span4">
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

<div class="span4 gray">
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



<?php
get_footer();
?>
