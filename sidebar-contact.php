<?php
/**
 * The sidebar containing the main widget area.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package _djh
 */

if ( ! is_active_sidebar( 'sidebar-contact' ) ) {
	return;
}
?>

<div id="contact" class="widget-area" role="complementary">
  <div id="sidebar-contact" class="sidebar-contact">
    <?php dynamic_sidebar( 'sidebar-contact' ); ?>
  </div>
</div><!-- #secondary -->
