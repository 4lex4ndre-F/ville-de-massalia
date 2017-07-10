<?php get_header(); ?>
			
			<div class="grid grid-2-1 grid-top">
					<div id="contenu">
			<?php 
						// boucle de base et content
						if(have_posts()):
							while(have_posts()):
								the_post();								
			?>
								<article>
									<header>
										<h1><?php the_title(); ?></h1>
									</header>
									<?php the_content(); ?>
								</article>
			<?php
							endwhile;
						endif;
			?>
					</div><!-- fin .contenu -->
			
			<?php 
				// sidebar
				get_sidebar();
			?>
			<?php
				the_posts_pagination(array(	'prev_text' => 'Page précédente',
											'next_text' => 'Page suivante',
											'before_page_number' => '<span class="screen-reader-text">Page</span>'
				));
			?>
			</div><!-- fin .grid -->
<?php get_footer(); ?>