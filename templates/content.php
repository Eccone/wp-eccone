<?php
/**
 * The default template for displaying content. Used for both single and index/archive/search.
 *
 * @package OpenBootpress
 * @subpackage Templates
 * @since Open Bootpress 1.0.0
 */

$post_class = '';
$panel = '';
$panel_heading = '';
$panel_body = '';
$panel_footer = '';
if (!is_single()) {
	//$post_class = 'col-lg-6 col-md-6 col-sm-12 col-xs-12';
	$panel = 'panel panel-default';
	$panel_heading = 'panel-heading';
	$panel_body = 'panel-body';
	$panel_footer = 'panel-footer';
}
?>
<article id="post-<?php the_ID(); ?>" <?php post_class($post_class); ?>>
	<div class="<?php echo $panel;?>">
		<header class="entry-header <?php echo $panel_heading;?>">
			<?php if (is_single()) {
				edit_post_link( __( 'Modifier', 'openbootpress' ), '<span class="btn btn-default pull-right">', '</span>' );
			}?>
			<?php if ( !is_single() && has_post_thumbnail() && ! post_password_required() ) : ?>
			<div class="entry-thumbnail pull-left">
				<?php the_post_thumbnail('thumbnail', array('class' => "attachment-thumbnail img-thumbnail")); ?>
			</div>
			<?php endif; ?>
	
			<?php if ( is_single() ) : ?>
			<h1 class="entry-title h4"><?php the_title(); ?></h1>
			<?php else : ?>
			<h1 class="entry-title h4">
				<a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a>
			</h1>
			<?php endif; // is_single() ?>
		</header><!-- .entry-header -->
		
		<div class="clearfix <?php echo $panel_body;?>">
			<?php if ( !is_single() ) : // Only display Excerpts for Search ?>
			<div class="entry-summary">
				<?php
				do_action('openbootpress_entry_summary_before');
				echo '<div class="clearfix">'; the_excerpt(); echo '</div>';
				do_action('openbootpress_entry_summary_after');
				?>
			</div><!-- .entry-summary -->
			<?php else : ?>
			<div class="entry-meta img-rounded pull-right holderjs">
				<?php openbootpress_entry_meta(); ?>
			</div>
			<div class="entry-content">
				<?php
				do_action('openbootpress_entry_content_before');
				the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'openbootpress' ) );
				do_action('openbootpress_entry_content_after');
				?>
			</div><!-- .entry-content -->
			<?php endif; ?>
		</div>
	
		<footer class="entry-meta <?php echo $panel_footer;?>">
			<?php if (!is_single()) {
				edit_post_link( __( 'Modifier', 'openbootpress' ), '<span class="btn btn-default pull-right">', '</span>' );
				openbootpress_entry_meta();
			}?>
		</footer><!-- .entry-meta -->
	</div>
</article><!-- #post -->
