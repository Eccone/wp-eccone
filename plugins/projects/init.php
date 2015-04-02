<?php

/*
 * ---------
 * LIB
 * ---------
 */
function stic_project_get_template($name, $vars = array()) {
	extract($vars);
	// Directories
	$parent_directory = get_template_directory();
	$directory = get_stylesheet_directory();
	// Get right CSS Uri
	if (file_exists($directory.'/plugins/stic-project/templates/'.$name)) {
		include($directory.'/plugins/stic-project/templates/'.$name);
	} elseif ($directory != $parent_directory && file_exists($parent_directory.'/plugins/stic-project/templates/'.$name)) {
		include($parent_directory.'/plugins/stic-project/templates/'.$name);
	} else {
		include(__DIR__.'/templates/'.$name);
	}
}

/*
 * ---------
 * POST TYPE
 * ---------
 */
add_action( 'init', 'stic_init_plugin_project' );
function stic_init_plugin_project() {
	$labels = array(
			'name' => __('Projets', 'stic_project'),
			'singular_name' => __('Project', 'stic_project'),
			'add_new' => __('Ajouter', 'stic_project'), __('Projet', 'stic_project'),
			'add_new_item' => __('Projet', 'stic_project'),
			'edit_item' => __('Modifier', 'stic_project'),
			'new_item' => __('Nouveau projet', 'stic_project'),
			'view_item' => __('Voir fiche', 'stic_project'),
			'search_items' => __('Rechercher projets', 'stic_project'),
			'not_found' =>  __('Aucun projet trouvé', 'stic_project'),
			'not_found_in_trash' => __('Aucun projet dans la corbeille', 'stic_project'),
			'parent_item_colon' => ''
	);

	$supports = array(
			'title',
			'editor',
			'thumbnail',
			'comments',
			'excerpt'
	);

	register_post_type( 'project',
			array(
					'labels' => $labels,
					'public' => true,
					'menu_position' => 6,
					'has_archive' => true,
					'hierarchical' => false,
					'supports' => $supports,
					'rewrite' => array( 'slug' => __('projects', 'stic_project') ),
			)
	);
}
//Add Exposants in RSS Feed
function stic_projects_feed($qv) {
	if (isset($qv['feed']) && !isset($qv['post_type']))
		$qv['post_type'] = array('post', 'project');
	return $qv;
}
add_filter('request', 'stic_projects_feed');

/*
 * ------------------------------------
 * ADMIN
 * ------------------------------------
*/ 
add_action('admin_menu', 'stic_project_plugin_menu');
function stic_project_plugin_menu() {
  add_options_page(__('Projets', 'stic_project'), __('Projets', 'stic_project'), 'manage_options', 'stic-project', 'stic_project_plugin_options');
}

function stic_project_plugin_options() {
  if (!current_user_can('manage_options'))  {
    wp_die( __('You do not have sufficient permissions to access this page.') );
  }
  
  // Get default project page
  $project_page = get_option('stic_project_page');
  // Get list of page
  stic_project_get_template('projects-admin-panel.php', array('project_page' => $project_page));
}
