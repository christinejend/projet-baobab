<?php

get_header();

?>

    <section class="error">
        <h2 role="heading" aria-level="2" class="error__title">Oups&nbsp;!</h2>
        <p class="error__description">La page demandée n'as pas été trouvée... Peut-être que l'URL fournie est érronnée</p>
        <p class="error_back">Vous pouvez retourner <a href="<?php echo home_url('/') ?>" title="">à la page d'accueil</a></p>
        <!-- On génère un lien vers l'accueil -->
    </section>

<?php

get_footer();