<?php get_header(); ?>
    <div class="grid grid-2-1 grid-top">
        <div id="contenu">
            <section>
                
                <header>
                    <h1>Résultats de recherche pour "<?php echo get_search_query(); ?>"</h1>
                </header>
                <?php
                // boucle sur articles et des pages avec le lien sur titre et l’extrait 

                    // boucle de base et content
                    if(have_posts()):
                        while(have_posts()):
                            the_post();								
		        ?>
                            <article class="bloc-lien">
                                <header>
                                    <h2><a href="<?php the_permalink(); ?>" ><?php the_title(); ?></a></h2>
                                </header>
                                <div class="excerpt">
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

            </section>
        </div>
    <?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>