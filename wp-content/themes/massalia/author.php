<?php get_header(); ?>
			
			<div class="grid grid-2-1 grid-top">
					<div id="contenu">
            <h1>Articles de 
                <?php 
                the_author(); ?>
            </h1>
			<?php 
						// boucle de base et content
						if(have_posts()):
							while(have_posts()):
								the_post();								
			?>
								<article class="bloc-lien clearfix">
									<header>
										<h2><a href="<?php the_permalink();?>" ><?php the_title(); ?></a></h2>
									</header>
                                    <div class="grid grid-2 grid-top">
                                        <?php the_post_thumbnail();?>
                                        <?php the_excerpt(); ?>
                                    </div>
								</article>
			<?php
							endwhile;
						endif;
                        
                        the_posts_pagination(array( 'prev_text' => 'Page précédente',
                                                    'next_text' => 'Page suivante',
                                                    'before_page_number' => '<span class="screen-reader-text">Page</span>'
                        ));
                        
			?>
					</div><!-- fin .contenu -->
			
			<?php 
				// sidebar
				get_sidebar();
			?>
			</div><!-- fin .grid -->
<?php get_footer(); ?>