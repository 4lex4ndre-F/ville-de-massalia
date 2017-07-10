<?php get_header(); ?>
			
			<div class="grid grid-2-1 grid-top">
					<div id="contenu">
                        <h1>Page non trouvée.</h1>
                        <p>La page demandée n'existe pas. Pour continuer la navigation, vous pouvez:</p>

                        <ul>
                            <li>aller à la <a href="<?= esc_url(home_url( '/' )); ?>">page d'accueil</a>,</li>
                            <li>consulter le <a href=" <?=  esc_url(home_url( '/plan-du-site' )); ?> ">plan du site</a>,</li>
                            <li>utiliser le formulaire de recherche.</li>
                        </ul>

                        <p>En cas de problème persistant, n'hésitez pas à nous contacter. Vous trouverez nos coordonnées sur la page <a href="<?= esc_url(home_url( '/contact' )); ?>">contacts</a>.</p>




					</div><!-- fin .contenu -->
			
			<?php 
				// sidebar
				get_sidebar();
			?>

			</div><!-- fin .grid -->
<?php get_footer(); ?>