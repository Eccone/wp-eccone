<div class="home-splash">
	<div class="container">
		<div class="row">
			<div class="col-lg-8 col-md-7 col-sm-5">
				<h3>La pause !</h3>
				<img style="margin: 0 10px 10px 0;" src="<?php echo openbootpress_get_resource_uri("public/images/home-event-standbye.jpg"); ?>" class="pull-left img-responsive" alt="Participants à un évènement Eccone autour d'un table" />
				<p>
					Après un 1er semestre 2015 chargé d'événements, de projets communs et de rencontres heureuses,
					l'équipe vous informe que le dispositif Eccone est en standbye pour quelques temps.
				</p>
				<p>
					Nous souhaitons en effet trouver de nouvelles ressources, nous ouvrir sur de nouveaux réseaux et
					recharger nos batteries. Nous avons énormément appris grâce à tous ceux qui ont participé de près
					ou de loin à nos événements. Nous réfléchissons actuellement à de nouvelles méthodologies,
					de nouvelles formes de travail et nous nous questionnons sainement sur la forme et le fond du dispositif.
					(Eccone est-il lui même un bien commun ?)
				</p>
				<p>
					En attendant, nous avons le plaisir de vous inviter aux rencontres régulières organisées par
					l'association Combustible, co-porteuse du projet Eccone.
					Les « Apéros Combustible » sont l'occasion pour nous d'agrandir notre réseau et nous l’espérons,
					créer de nouvelles dynamiques qui relanceront rapidement Eccone.
				</p>
				<p><a href="">Plus d'informations sur : http://combustible.fr/</a></p>
			</div>
			<div class="col-lg-4 col-md-5 col-sm-7 home-event-carousel">
				<h2 style="color: #444; text-align:center;"><span class="glyphicon glyphicon-bullhorn"></span>&nbsp;Dernières actualités</h2>
				<?php echo do_shortcode('[stic_slider]'); ?>
			</div>
		</div>
	</div>
</div>
<div class="eccone-howto">
	<div class="container">
		<div class="row">
			<div class="col-lg-7">
				<h2>
					<strong>NOTRE MISSION</strong>
					<span class="fa fa-heart"></span>
				</h2>
				<div class="row">
					<div class="col-lg-6">
						<h3>Renforcer les coopérations</h3>
						<p>
							Par l'animation de nos rencontres, nous aidons à tisser des liens entre les communautés : informatiques, artistes, makers, ESS, ...
						</p>
					</div>
					<div class="col-lg-6">
						<h3>Activer la création</h3>
						<p>
							En mobilisant des ressources et en partant de vos besoins, nous oeuvrons pour favoriser l'émergence
							de communautés de projet pour l'aider dans la réalisation du premier pas
						</p>
					</div>
					<div class="col-lg-12">
						<a href="/qui-sommes-nous/" title="Eccone : qui sommes nous ?" class="btn btn-default">En savoir plus</a>
					</div>
				</div>
			</div>
			<div class="col-lg-5" id="eccone-keepintouch">
				<h2>
					<strong>RESTONS EN CONTACT</strong>
					<a href="http://www.facebook.com/eccone"><span class="fa fa-facebook-official"></span></a>
					<a href="https://twitter.com/eccone_org"><span class="fa fa-twitter"></span></a>
					<a href="http://www.meetup.com/fr/Eccone-Toulouse"><span class="icon-obpress icon-obpress-meetup"></span></a>
				</h2>
				<div class="row">
					<div class="col-lg-12">
						<p>
							<a href="https://twitter.com/eccone_org" class="twitter-follow-button" data-show-count="false">Suivez @eccone_org</a>
							<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
						</p>
						<p>
							<div class="fb-like" data-href="https://www.facebook.com/eccone" data-layout="button_count" data-action="like" data-show-faces="false" data-share="false"></div>
							<div class="fb-share-button" data-href="http://www.eccone.org" data-layout="button_count"></div>
						</p>
						<p><a href="/newsletter/" title="S'abonner à la newsletter" class="btn btn-default">S'abonner à la newsletter</a></p>
					</div>
				</div>
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
