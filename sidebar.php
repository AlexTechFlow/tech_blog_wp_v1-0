<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Digital_Health_Blog
 */

if ( ! is_active_sidebar( 'right-sidebar' ) ) {
	return;
}
?>

<aside id="secondary" class="widget-area" style="width: 15%; display: inline-block;">
	<?php dynamic_sidebar( 'right-sidebar' ); ?>
</aside><!-- #secondary -->
