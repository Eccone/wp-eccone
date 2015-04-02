<?php
/**
 * The sidebar containing the main widget area
 *
 */

global $openbootpress_page_id;
?>
<?php if ( is_active_sidebar( 'sidebar-main' ) && !is_front_page() ) : ?>
	</div><!-- .col -->
	<div class="col-lg-4 col-md-5 widgets img-rounded">
		<div id="sidebar-main" class="widget-area visible-md visible-lg" role="complementary">
			<?php 
			if (is_active_sidebar( 'sidebar-blog' ) && (is_category() || is_singular('post') || wb_core_is_blog_page_front())) {
				dynamic_sidebar( 'sidebar-blog' );
			} else {
				dynamic_sidebar( 'sidebar-main' );
			}
			?>
		</div>
	</div>
<?php endif; ?>