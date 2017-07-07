		</main>
		<div id="wrapper-footer" class="center">
			<footer id="footer" class="max-largeur center" role="contentinfo">
				<div class="grid grid-2 grid-center">

					<address class="identite">
						<?php dynamic_sidebar('coordonnees'); ?>
					</address>

					<?php 
					// menu pied de page
					if(has_nav_menu('footer'))
					{
						wp_nav_menu(
							array('container' =>false,
							'menu_class' => 'menu-hz text-center',
							'theme_location' => 'footer'
							)
						);
					};
					?>
					
				</div>
			</footer>
		</div>
		<?php wp_footer(); ?>
	</body>
</html>