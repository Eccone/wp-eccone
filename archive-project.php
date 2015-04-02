<?php
/**
 * The template for displaying Category pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package OpenBootpress
 * @subpackage Templates
 * @since Open Bootpress 1.0.0
 */
get_header(); ?>

	<div id="primary" class="content-area">
		<div id="content" class="site-content posts" role="main">
		
		<?php
		$projects_query = $wp_query;
		// Get project page content
		$project_page = get_option('stic_project_page');
		if (!empty($project_page)) {
			query_posts('page_id='.$project_page);
			get_template_part('templates/content', 'page');
		}
		
		// Projects
		$wp_query = $projects_query;
		get_template_part('templates/posts'); ?>
		
		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>