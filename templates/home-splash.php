<div class="home-splash">
	<div class="container">
		<div class="row">
			<div class="col-lg-8 col-md-7 col-sm-5">
				<div class="row">
					<div class="col-lg-5" style="text-align: center;">
						<h3>
							Eccone fera bientôt sa rentrée 2015/2016
						</h3>
						<p>
							La saison n°2 d'Eccone a vu l'organisation de 4 évènements autour d'Eccone de comptoir et d'Eccone
							Atelier pour soutenir la création de vos outils numériques <strong>et les transformer en un commun</strong>
						</p>
						<p>
							Nous vous tiendrons au courant du lancement de la saison 3 dès que nous aurons un peu avancée dessus.
							N'hésitez pas à <a href="http://www.eccone.org/newsletter/">vous inscrire à notre lettre d'informations</a>
						</p>
					</div>
					<div class="col-lg-7" style="padding-top: 20px;">
						<table class="table">
							<tbody>
								<tr class="active">
									<td><strong>Eccone de Comptoir</strong><br />C'était le mardi 28 avril 2015 en soirée</td>
									<td>
										<a href="<?php bloginfo('url')?>/events/leccone-de-comptoir-1/" class="btn btn-sm btn-default">
											<span class="glyphicon glyphicon-check"></span>
											Pour le souvenir...
										</a>
									</td>
								</tr>
								<tr class="active">
									<td><strong>Eccone de Comptoir - spéciale projets</strong><br />C'était le mardi 2 juin 2015 en soirée</td>
									<td>
										<a href="<?php bloginfo('url')?>/events/leccone-de-comptoir-1/" class="btn btn-sm btn-default">
											<span class="glyphicon glyphicon-check"></span>
											Pour le souvenir...
										</a>
									</td>
								</tr>
								<tr class="active">
									<td><strong>Eccone Atelier - Journée 1</strong><br />C'était le samedi 27 juin 2015</td>
									<td>
										<a href="<?php bloginfo('url')?>/events/leccone-atelier-1/ " class="btn btn-sm btn-default">
											<span class="glyphicon glyphicon-check"></span>
											Pour le souvenir...
										</a>
									</td>
								</tr>
								<tr class="active">
									<td><strong>Eccone Atelier - Journée 2</strong><br />C'était le samedi 4 juillet 2015</td>
									<td>
										<a href="<?php bloginfo('url')?>/events/leccone-atelier-2/ " class="btn btn-sm btn-default">
											<span class="glyphicon glyphicon-check"></span>
											Pour le souvenir...
										</a>
									</td>
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
