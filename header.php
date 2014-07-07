<?php
session_start();
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
	<meta name="google-site-verification" content="snZhqYfsr9ljKXgEbD8KW2l1JpHXXoqygxbkKmWfIWA"/>

	<title><?php bloginfo( 'name' ); ?> <?php wp_title (); ?></title>

	<link rel="profile" href="https://gmpg.org/xfn/11" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

	<link rel='stylesheet' href='//fonts.googleapis.com/css?family=Oxygen' type='text/css'>
	<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />

	<script type="text/javascript" src="//code.jquery.com/jquery-1.10.2.min.js"></script>
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.fitvids.js"></script>
	<script type="text/javascript">
	$(document).ready(function() {
		$(".featured-summary").fitVids();
		$(".postcontent").fitVids();
	});
	</script>

	<?php
/*
	 * 	Add this to support sites with sites with threaded comments enabled.
	 */
if ( is_singular() /*&& get_option( 'thread_comments' )*/ )
	wp_enqueue_script( 'comment-reply' );

wp_head();

wp_get_archives( 'type=monthly&format=link' );
?>
</head>
<body>
	<!-- top -->
	<div class="top">
		<div class="container img-page">
			<div class="row">
				<div class="top-bar">

					<div class="span6 top-menu">
						<ul>
							<li><a href="/category/management/">Management &amp; Leadership</a></li>
							<li><a href="/category/it/">Information Technology</a></li>
							<li><a href="/category/empreendorismo/">Empreendorismo em Portugal</a></li>
						</ul>
					</div>

					<div class="span1 top-links">
						<ul>
							<li style="padding-right: 15px;">
								<a href="http://www.outsystems.com" class="icon-os-s" title="OutSystems - High Productivity PaaS for Enterprise Web and Mobile Applications">OutSystems</a>
							</li>
							<li>
								<a href="https://twitter.com/paulorosado" class="icon-twitter-s">Twitter</a>
							</li>
						</ul>
					</div>

					<div class="span5 top-search">

						<?php get_search_form(); ?>
						
					</div>

				</div>

				<div class="span12 header-page">
					<div class="row">
						<div class="span12"><div class="logo-page"><h1><a href="/" accesskey="1">Paulo Rosado</a></h1></div></div></div>
						<div class="row">
							<div class="span6"><div class="lead-page"><h2>Management, Entrepreneurship, IT and other ramblings on stumbling and thriving in the high-tech world</h2></div></div><div class="clearfix"></div></div>

							<div class="clearfix"></div>
						</div><div class="clearfix"></div>


					</div>
					<div class="clearfix"></div>
				</div>

			</div>
			<!-- \top -->