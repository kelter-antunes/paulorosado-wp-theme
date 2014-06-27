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

	<div class="top">
		<div class="container img-home">

			<div class="top-bar">

				<div class="top-menu">
					<ul>
						<li><a href="/management/">Management &amp; Leadership</a></li>
						<li><a href="/it/">Information Technology</a></li>
						<li><a href="/empreendorismo/">Empreendorismo em Portugal</a></li>
					</ul>
				</div>

				<div class="top-links">
					<ul> 
						<li><a href="http://www.outsystems.com" class="icon-os-s" title="OutSystems - High Productivity PaaS for Enterprise Web and Mobile Applications">OutSystems</a></li>
						<li><a href="https://twitter.com/paulorosado" class="icon-twitter-s">Twitter</a></li>
					</ul>
				</div>

				<div class="top-search">

					<form method="get" action="http://www.paulorosado.com/mt/mt-search.cgi">
						<input type="text" class="search-field" name="search" value="">

						<input type="hidden" name="IncludeBlogs" value="6">

						<input type="hidden" name="limit" value="20">
						<input type="submit" class="search-icon" accesskey="4" value="Search">
					</form>

				</div>

			</div>

			<div class="header">
				<div class="logo"><h1><a href="/" accesskey="1">Paulo Rosado</a></h1></div>
				<div class="lead"><h2>Management, Entrepreneurship, IT and other ramblings on stumbling and thriving in the high-tech world</h2></div>
				<div class="bio">
					Besides my daily job as CEO of <a href="http://www.outsystems.com" target="_blank">OutSystems</a>, I occasionally help entrepreneurs grow their businesses and avoid obvious mistakes. 

				</div>
			</div>

			<div class="cat-menu">
				<ul>
					<li><a href="/management" class="ml">Management &amp; Leadership</a></li>
					<li><a href="/it" class="it">Information Technology</a></li>
					<li class="pt"><a href="/empreendorismo" class="pt">Empreendorismo em Portugal</a></li>
				</ul>
			</div>

		</div>

	</div>
