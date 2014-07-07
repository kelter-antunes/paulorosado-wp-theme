 <!-- footer -->
 <div id="mainfooter" class="bottom">

 	<div class="container">
 		<div class="row">

 			<div class="span4">
 				<?php if ( !function_exists( 'dynamic_sidebar' ) || !dynamic_sidebar('footer-left-widget') ) ?>
 			</div>

 			<div class="span4">
 				<?php if ( !function_exists( 'dynamic_sidebar' ) || !dynamic_sidebar('footer-center-widget') ) ?>
 			</div>

 			<div class="span4">
 				<?php if ( !function_exists( 'dynamic_sidebar' ) || !dynamic_sidebar('footer-right-widget') ) ?>
 			</div>

 		</div>
 	</div>

 </div>
 <!-- /End Footer -->

 <?php wp_footer(); ?>

</body>
</html>