<div class="home-splash">
	<div class="container">
		<div class="row">
			<div class="col-lg-8 col-md-7 col-sm-5">
				<div class="row">
					<div class="col-lg-6">
						<div class="flex-video widescreen"><iframe width="350" height="197" src="//www.youtube.com/embed/5-aHuUW2KAY" frameborder="0" allowfullscreen></iframe></div>
					</div>
					<div class="col-lg-6">
						<p>
							Eccone est un <strong>espace de création commune d'outils numériques</strong>
						</p>
						<p>
							Nous animons un réseau d'acteurs locaux souhaitant coopérer ensemble pour produire des biens communs numériques :
							connaissances, oeuvres d'art sur support numérique, création d'objets, de logiciels, ...
						</p>
						<p>
							En mobilisant des ressources et en partant du besoin des acteurs locaux, nous oeuvrons pour favoriser l'émergence
							des coopérations, des projets puis nous permettons la réalisation du premier pas.
						</p>
						<p>
							<a href="/qui-sommes-nous/" title="Eccone : qui sommes nous ?" class="btn btn-default">En savoir plus</a>
							<a href="/newsletter/" title="S'abonner à la newsletter" class="btn btn-primary">La newsletter</a>
						</p>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-5 col-sm-7 home-event-carousel">
				<h2 style="color: #444; text-align:center;"><span class="glyphicon glyphicon-bullhorn"></span>&nbsp;Dernières actualités</h2>
				<?php echo do_shortcode('[stic_slider]'); ?>
			</div>
		</div>
	</div>
</div>
<div class="home-projects">
	<div class="container">
		<h1><?php echo __('Les 3 derniers projets partagés');?></h1>
		<?php
		// get projects
		query_posts(array('posts_per_page' => 3, 'post_type' => 'project'));
		if ( have_posts() ) {
			echo '<div class="row">';
			while ( have_posts() ) {
				the_post();
				echo '<div class="col-sm-4">';
				get_template_part( 'templates/content', get_post_format() );
				echo '</div>';
			}
			echo '</div>';
		}
		wp_reset_query();
		?>
		<p>
			<a href="/projects/" title="Tous les projets" class="btn btn-primary">Tous les projets</a>
		<p>
	</div>
</div>
