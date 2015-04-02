<?php

add_action( 'after_setup_theme', 'ecn_add_interview_metabox' );
/*
 * Register meta boxes
 */
function ecn_add_interview_metabox() {
	// add interview to article on rigth side
	global $meta_boxes, $eccone_box_prefix;
	$meta_boxes[] = array(
			'id' => 'interview',
			// Meta box title - Will appear at the drag and drop handle bar. Required.
			'title' => __( 'Interview', 'eccone' ),
			// Post types, accept custom post types as well - DEFAULT is array('post'). Optional.
			'pages' => array( 'post' ),
			// Where the meta box appear: normal (default), advanced, side. Optional.
			'context' => 'side',
			// Order of meta box: high (default), low. Optional.
			'priority' => 'high',
			// Auto save: true, false (default). Optional.
			'autosave' => false,
			'fields' => array(array(
					'name' => __( 'Fichier Audio', 'eccone' ),
					'id'   => "{$eccone_box_prefix}interview",
					'type' => 'file',
					'mime_type' => 'audio/mpeg', // Leave blank for all file types
				))
		);
}

function eccone_register_meta_boxes()
{
	// Make sure there's no errors when the plugin is deactivated or during upgrade
	if ( !class_exists( 'RW_Meta_Box' ) )
		return;

	global $meta_boxes;
	foreach ( $meta_boxes as $meta_box )
	{
		new RW_Meta_Box( $meta_box );
	}
}
// Hook to 'admin_init' to make sure the meta box class is loaded before
// (in case using the meta box class in another plugin)
// This is also helpful for some conditionals like checking page template, categories, etc.
add_action( 'admin_init', 'eccone_register_meta_boxes' );

// Widgets
require_once('widgets/interview-last.php');
function ecn_interviews_register_widgets() {
	register_widget('ECN_Widget_LastInterview');
}
add_action('widgets_init', 'ecn_interviews_register_widgets');

// Templating
function ecn_interview($args) {
	if (is_plugin_active('meta-box/meta-box.php')) {
		ob_start();
		the_widget('ECN_Widget_LastInterview', $args, array('before_title' => '<h4>', 'after_title' => '</h4>'));
		$output = ob_get_contents();
		ob_end_clean();
		return $output;
	} else {
		return '';
	}
}
add_shortcode('interview_last', 'ecn_interview');

function ecn_get_url_interview($post_id) {
	global $eccone_box_prefix;
	$attachment_id = get_post_meta( $post_id, "{$eccone_box_prefix}interview", true );
	if (!empty($attachment_id)) {
		$url = wp_get_attachment_url( $attachment_id );
		return (!empty($url))?$url:null;
	}
	return null;
}


add_filter('the_content', 'ecn_player_interview', 1);
function ecn_player_interview($content) {
	if (is_single()) {
		return $content . '<div class="interview-player">' . ecn_display_player_interview(get_the_ID(), false) . '</div>';
	} else {
		return $content;
	}
}

add_action('openbootpress_entry_summary_after', 'ecn_display_player_interview');
function ecn_display_player_interview($post_id, $echo = true) {
	$interview = '';
	if (is_plugin_active('meta-box/meta-box.php')) {
		if (!is_null($url_mp3 = ecn_get_url_interview(get_the_ID()))) {
			if (is_single()) {
				$interview = '<div class="col-lg-3 col-md-4"><p>'.do_shortcode('[audio src="'.$url_mp3.'"]').'</p></div>';
			} else {
				$interview = '<p>'.do_shortcode('[audio src="'.$url_mp3.'"]').'</p>';
			}
		}
	}
	if ($echo)
		echo $interview;
	else
		return $interview;
}
