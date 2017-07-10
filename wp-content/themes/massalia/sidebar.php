			<aside id="sidebar" role="complementary">
				<h2>En direct</h2>
				<nav id="acces-direct" role="navigation" aria-label="Menu secondaire">

				<?php  
					// menu acces direct
					if(has_nav_menu('sidebar'))
					{
						wp_nav_menu(
							array('container' =>false,
							'menu_class' => 'menu text-center',
							'theme_location' => 'sidebar'
							)
						);
					};
					?>
				
				</nav>
				<?php // image cliquable
					if (is_active_sidebar('sidebar')) :
						dynamic_sidebar('sidebar');
					endif;
				?>
				
			</aside>