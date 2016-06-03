<?php

/*
    Template Name: Single Artilce
*/

get_header();

?>

    <?php if ( have_posts() ): while ( have_posts() ): the_post(); ?> <!--Regarde si il y a des post -->

        <section class="article">
            <h2 role="heading" aria-level="2" class="article_title"><?php the_title(); ?></h2>
            <div class="article__content">
                <?php the_content(); ?>
            </div>
        </section>
        
    <?php endwhile; endif; ?>

<?php

get_footer();