<?php

/*
    Template Name: Homepage
    http://localhost/projet-baobab/decoupe/dev/wp-admin/themes.php
*/

get_header();

?>

    <section class="intro">

<?php if ( have_posts() ): while ( have_posts() ): the_post(); ?>

        <h2 role="heading" aria-level="2" class="intro__title"><?php the_title(); ?></h2>
        <p class="intro__slogan"><?php bloginfo('description'); ?></p>
        <div class="intro__text">
            <?php the_content(); ?>
        </div>

       
      <!--  <aside class="about">
            <h3 role="heading" aria-level="3" class="about__title"><?php// the_field('about_title'); ?></h3>
            <div class="about__text">
                <?php// the_field('about_content'); ?>
            </div>
        </aside>-->
       

<?php endwhile; endif; ?>

    </section>

    <section class="latest-articles">
        <h2 role="heading" aria-level="2" class="latest-articles__title">Mes articles</h2>
        <div class="latest-articles__container">
            
            <?php
                $posts = new WP_Query( [ 'posts_per_page' => 2 ] );
                if ( $posts -> have_posts() ): while ( $posts ->  have_posts() ): $posts ->  the_post();
            ?>
            
                <articles class="article">
                    <h3 role="heading" aria-level="3" class="article__title"><?php the_title(); ?></h3>
                    <p class="article__date">Publié le <time datetime="<?php the_time('c'); ?>"><?php the_time('d/m/Y'); ?></time></p>
                    <p class="article__excerpt"><?php the_custom_excerpt(); ?></p>
                    <a href="<?php the_permalink(); ?>" title="" class="article__more">Lire la suite...</a>
                </articles>

            <?php endwhile; endif; ?>

        </div>
    </section>

    <section class="latest-projects">
        <h2 role="heading" aria-level="2" class="latest-projects__title">Derniers court-métrages</h2>
        <div class="latest-projects__contaier">
            <?php
                $posts = new WP_Query( [ 'posts_per_page' => 2, 'post_type' => 'project' ] );
                if ( $posts -> have_posts() ): while ( $posts ->  have_posts() ): $posts ->  the_post();
            ?>
            
                <articles class="project">
                    <h3 role="heading" aria-level="3" class="project__title"><?php the_title(); ?></h3>
                    <?php the_post_thumbnail( 'medium' ); ?>

                    <?php
                        // récupérer l'SRC de l'image, et  l'injecter dans un tag <ismg>
                    ?>

                    <dl class="project__details">
                        <dt class="project__label">Pays&nbsp;:</dt>
                        <dd class="project__value"><?php the_field( 'Country' ); ?></dd>
                        <dt class="project__label">Durée&nbsp;:</dt>
                        <dd class="project__value"><?php the_field( 'Time' ); ?></dd>
                    </dl>

                    <a href="<?php the_permalink(); ?>" title="" class="project__link">Voir le projet</a>
                </articles>

            <?php endwhile; endif; ?>
        </div>
    </section>

<?php

get_footer();