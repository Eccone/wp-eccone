<?php
/*
 Template Name: Projets
*/
/**
 * The template for displaying list of projects
 *
 * @package Sol&TIC Projects
 * @subpackage Templates
 * @since Sol&TIC Projects 1.0.0
 */

get_header(); ?>
	<div id="primary" class="content-area">
		<div id="content" class="site-content single" role="main">
			<?php /* The loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<?php if ( ! (is_home() || is_front_page())) {?>
				<header class="entry-header">
					<?php edit_post_link( __( 'Modifier le projet', 'stic_project' ), '<span class="btn btn-default pull-right">', '</span>' ); ?>
					<?php if ( has_post_thumbnail() && ! post_password_required() ) : ?>
					<div class="entry-thumbnail">
						<?php the_post_thumbnail(); ?>
					</div>
					<?php endif; ?>
					<h1 class="entry-title"><?php the_title(); ?></h1>
				</header><!-- .entry-header -->
				<?php }?>
				<div class="entry-content">
					<?php the_content(); ?>
				</div><!-- .entry-content -->
				<footer class="entry-meta"></footer><!-- .entry-meta -->
			</article><!-- #post -->

			<?php endwhile; ?>
			
			<?php 
			/*
			 * Search projects
			 */
			
			?>
			
			<?php get_template_part('templates/posts'); ?>

		</div><!-- #content -->
	</div><!-- #primary -->
<?php get_sidebar(); ?>
<?php get_footer(); ?>