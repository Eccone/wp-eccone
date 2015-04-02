<?php
echo $before_widget;
while ( $interviews_query->have_posts() ) {
	$interviews_query->the_post();
	// Une photo à la une ?
	the_post_thumbnail( 'thumbnail', array('class' => 'pull-right attachment-thumbnail img-thumbnail') );
	$title = (!empty( $title ))?$title:'';
	if ( !empty( $title ) ) {
		echo $before_title . $title . $after_title;
	} else {
		echo $before_title . '<a href="'.get_permalink().'">' . get_the_title() . '</a>' . $after_title;
	}
	echo '<p>';
	echo get_the_excerpt();
	echo '<div style="padding-right: 175px;">';
	ecn_display_player_interview(get_the_ID());
	echo '</div>';
	echo '</p>';
}

// All interviews
$link_all = get_category_link(ECN_CATEGORY_INTERVIEW_ID);?>
<p><a href="<?php echo $link_all;?>" class="btn btn-default"><?php echo __('Toutes les interviews', 'eccone');?></a></p>
<?php 
echo $after_widget;
?>