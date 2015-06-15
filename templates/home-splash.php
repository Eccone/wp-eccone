<div class="home-splash">
	<div class="container">
		<div class="row">
			<div class="col-lg-8 col-md-7 col-sm-5">
				<div class="row">
					<div class="col-lg-6" style="text-align: center;">
						<h3>
							4 dates pour se lancer avant l'été !
						</h3>
						<img class="img-responsive" alt="Les Eccone Evènements pour soutenir la production local de biens communs numériques" src="<?php echo openbootpress_get_resource_uri('public/images/schema-eccone-website.png'); ?>" />
					</div>
					<div class="col-lg-6" style="padding-top: 20px;">
						<p>
							Le <strong>28 avril</strong> est le coup d'envoi de 4 dates pour vous soutenir dans la création
							de vos outils numériques <strong>et le transformer en un commun</strong>
						</p>
						<p>
							<strong>Les Eccone de Comptoir...</strong><br />
							...découvrir et partager autour d'un sujet en lien avec les communs.
						</p>
						<p>
							<strong>Les Eccone Atelier...</strong><br />
							...créer des nouvelles expériences collectives dans la réalisation des projets.
						</p>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-12">
						<table class="table">
							<tbody>
								<tr class="active">
									<td>Mardi 28 avril - soirée</td>
									<td>Eccone de Comptoir</td>
									<td>
										<a href="<?php bloginfo('url')?>/events/leccone-de-comptoir-1/" class="btn btn-default">
											<span class="glyphicon glyphicon-check"></span>
											Pour le souvenir...
										</a>
									</td>
								</tr>
								<tr class="active">
									<td>Mardi 2 juin - soirée</td>
									<td>Eccone de Comptoir - spéciale projets</td>
									<td>
										<a href="<?php bloginfo('url')?>/events/leccone-de-comptoir-1/" class="btn btn-default">
											<span class="glyphicon glyphicon-check"></span>
											Pour le souvenir...
										</a>
									</td>
								</tr>
								<tr class="active">
									<td>Samedi 27 juin</td>
									<td>Eccone Atelier - Journée 1</td>
									<td>
										<a href="<?php bloginfo('url')?>/events/leccone-atelier-1/ " class="btn btn-primary">
											<span class="glyphicon glyphicon-check"></span>
											Détails et inscription
										</a>
									</td>
								</tr>
								<tr class="active">
									<td>Samedi 4 juillet</td>
									<td>Eccone Atelier - Journée 2</td>
									<td><span class="font-style: italic;">à venir</span></td>
								</tr>
							</tbody>
						</table>
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
