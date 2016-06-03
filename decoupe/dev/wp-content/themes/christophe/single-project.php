<?php

/*
    Template Name: Single Court-métrage
*/

get_header();

?>

    <?php if ( have_posts() ): while ( have_posts() ): the_post(); ?>

        <section class="article">
            <h2 role="heading" aria-level="2" class="article_title"><?php the_title(); ?></h2>

			<p class="project__type">
				<?php
					echo get_the_term_list( get_the_ID(), 'project-type' , __( 'Type de projet &nbsp;: ', 'b' ) , ' - ', '' );
				?>
			</p>
			<!-- le _e c'est une fonction de WordPress qui fait un echo, il faut l'utilliser pour que, lors de la traduction dans une autre langue, le serveur sache qu'il doit traduire cette phrase -->

            <div class="article__content">
                <?php the_content(); ?>
            </div>
            <dl class="project__details">
	            <dt class="project__label">Pays&nbsp;:</dt>
	            <dd class="project__value"><?php the_field( 'Country' ); ?></dd>
	            <dt class="project__label">Durée&nbsp;:</dt>
	            <dd class="project__value"><?php the_field( 'Time' ); ?></dd>
	        </dl>
        </section>
        
    <?php endwhile; endif; ?>

<?php

get_footer();