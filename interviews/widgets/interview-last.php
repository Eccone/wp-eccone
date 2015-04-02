<?php
/**
 * ECN_Widget_LastInterview class
 **/
class ECN_Widget_LastInterview extends WP_Widget {
	
	function ECN_Widget_LastInterview() {
		extract($this->get_base_settings());
		$this->WP_Widget($widget_ops['id_base'], $widget_ops['name'], $widget_ops, $control_ops);
	}
	
	/**
	 * Widget frontend output
	 *
	 * @param array $args
	 * @param array $instance
	 */
	function widget( $args, $instance ) {
		global $eccone_box_prefix;
		
		extract( $args );
		extract( $instance );
		
		$has_interview = false;
		// Get last interview
		$get_args = array( 
				'post_type' => 'post', 'posts_per_page' => 1, 'post_status' => 'publish', 'orderby' => 'rand', 'order' => 'DESC',
				'meta_query' => array(
						array(
								'key' => "{$eccone_box_prefix}interview",
								'compare' => '>', 'value' => '0',
						)
				),
			);
		$interviews_query = new WP_Query( $get_args );
		$has_interview = $interviews_query->have_posts();
		
		// Display
		if ($has_interview) {
			include( 'views/interview-last-view.php' );
		}
		wp_reset_postdata();
	}
	
	/**
	 * Update widget options
	 *
	 * @param object $new_instance Widget Instance
	 * @param object $old_instance Widget Instance
	 * @return object
	 * @author Laurent Chedanne
	 */
	function update( $new_instance, $old_instance ) {
		$instance = $old_instance;
		return $instance;
		
	}
	
	/**
	 * Form UI
	 *
	 * @param object $instance Widget Instance
	 */
	function form( $instance ) {
		$instance = wp_parse_args( (array) $instance, $this->get_defaults() );
		extract($instance);
		include( 'views/interview-last-admin.php' );
	}
	
	function get_base_settings() {
		return array(
				'widget_ops' => array(
					'name' => __( "ECN: Dernière interview", 'eccone'),
					'description' => __( "Affiche la dernière interview pour écoute", 'eccone'),
					'classname' => 'widget_last_interview'
				),
				'control_ops' => array(
					'id_base' => 'ecn_lastinterview',
				),
			);
	}
	
	function get_defaults() {
		$defaults =  array();
		return $defaults;
	}

}
