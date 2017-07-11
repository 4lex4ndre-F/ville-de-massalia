<?php
/*
Template Name: modele-accueil
*/


/*
Récupérer le dernier article d’une catégorie
*/
// categorie agenda
$args = array(
    'posts_per_page' => 1,
    'category_name' => 'agenda',
    'orderby' => 'date',
    'order' => 'desc'
);
$loop1 = new WP_Query($args); // classe WP_query est une classe, elle a donc des méthodes associées.

// categorie actualites
$args2 = array(
    'posts_per_page' => 1,
    'category_name' => 'actualites',
    'orderby' => 'date',
    'order' => 'desc'
);
$loop2 = new WP_Query($args2);



?>
<?php get_header(); ?>
<div class="grid grid-2-1 grid-top">
    <div id="contenu">
        <div class="grid grid-2 grid-stretch">

            <section class="rubrique bord-rubrique">
                <!-- Boucle sur les articles agenda -->
                <?php
                If ( $loop1->have_posts() ) :
                    while ( $loop1->have_posts() ) :
                        $loop1->the_post();
                        get_template_part('content-accueil');

                            // lien vers tous les évènements
                            $category_id = get_cat_ID('Agenda' );
                            $category_link = get_category_link( $category_id);
                            ?>
                            <p class="lien-categorie">
                                <span class="icon-fleche" aria-hidden="true"></span>
                                <a href="<?php echo esc_url( $category_link); ?>">Tous les événements</a>
                            </p>

                        </article>
                        <?php
                    endwhile;
                    wp_reset_postdata();
                endif;
                ?><!-- FIN Boucle sur les articles agenda -->
            </section>

            <section class="rubrique bord-rubrique">
                <!-- Boucle sur les articles -->
                <?php
                If ( $loop2->have_posts() ) :
                    while ( $loop2->have_posts() ) :
                        $loop2->the_post();
                        get_template_part('content-accueil');

                            // lien vers tous les évènements
                                $category_id = get_cat_ID('Agenda' );
                                $category_link = get_category_link( $category_id);
                            ?>
                            <p class="lien-categorie">
                                <span class="icon-fleche" aria-hidden="true"></span>
                                <a href="<?php echo esc_url( $category_link); ?>">Tous les articles</a>
                            </p>

                        </article>
                        <?php
                    endwhile;
                    wp_reset_postdata();
                endif;
                ?><!-- FIN Boucle sur les articles -->
            </section>

        </div>
    </div><!-- fin .contenu -->
    <?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>