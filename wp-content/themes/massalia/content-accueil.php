<?php
// cette partie de code est commune aux 2 sections de la page d'accueil
// variable categorie
                        $cat = get_the_category();
                        if(!empty($cat)):
                        echo '<h2>' . esc_html($cat[0]->name) . '</h2>';
                        endif;
                        //afficher l’article
                        ?>
                        <article class="bloc-lien">
                            <header>
                                <h3>
                                    <?php // intégrer le titre avec le lien vers l’article ?>
                                    <a href="<?php the_permalink(); ?>" ><?php the_title(); ?></a>
                                </h3>
                            </header>
                            <figure>
                                <?php the_post_thumbnail(); ?>
                            </figure>
                            <div class="excerpt">
                                <?php the_excerpt(); ?>
                            </div>

                            <div class="excerpt">
                                <?php // date de publication ?>
                            </div>