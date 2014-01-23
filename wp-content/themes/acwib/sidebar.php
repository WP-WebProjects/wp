<?php
/**
 * The sidebar containing the main widget area
 *
 * If no active widgets are in the sidebar, hide it completely.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?>

	

	<?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
		<div id="secondary" class="widget-area" role="complementary">
			<?php dynamic_sidebar( 'sidebar-1' ); ?>
					<a href="http://10.141.243.81/devacwib/"><img src="http://10.141.243.81/devacwib/wp-content/uploads/sites/2/2014/01/social/footerfb.png" alt=""></a> 
			<a href="http://10.141.243.81/devacwib/"><img src="http://10.141.243.81/devacwib/wp-content/uploads/sites/2/2014/01/social/footeryt.png" alt=""></a> 
			<a href="http://10.141.243.81/devacwib/"><img src="http://10.141.243.81/devacwib/wp-content/uploads/sites/2/2014/01/social/twittersmall.png" alt=""></a>
		</div><!-- #secondary -->
	<?php endif; ?>