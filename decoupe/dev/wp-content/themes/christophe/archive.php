<?php

/*
    Template Name: Single Court-métrage
*/

get_header();

?>
    <!-- 
    pour accéder au page archives il faut enlever un morceau de l'url ->
    http://localhost:8080/sur-un-baobab/actus/super-article-3/
    devient
    http://localhost:8080/sur-un-baobab/actus/


      _e : permet de retourner un echo, + traducteur pour serveur
     -->


    <section class="archive">
        <h2 role="heading" aria-level="2" class="archive__title"><?php _e( 'Tous mes aticles', 'b' ); ?></h2>
        <div class="archive__container">

            <?php if ( have_posts() ): while ( have_posts() ): the_post(); ?>

                <section class="article">
                    <h2 role="heading" aria-level="2" class="article_title"><?php the_title(); ?></h2>
                    <div class="article__excerpt">
                        <?php the_custom_excerpt(); ?>
                    </div>
                    <a href="<?php the_permalink(); ?>" title="" class="article__link">
                    <?php the_link_content( 'Voir l\'article %s' ); ?>
                    <!-- On appel une fonction de functions.php pour générer des lien correct -->
                    </a>
                </section>
                
            <?php endwhile; endif; ?>

        </div>
    </section>

<?php

get_footer();