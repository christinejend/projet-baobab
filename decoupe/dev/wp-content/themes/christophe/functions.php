<?php

// Defines custom post_type

// on va faire une fonction qui va générer un truc dans WordPress mais j'ai pas tout compris...
// dans le menu de l'admin ca a ajouter "Court Métrages > type de projet" etc.

add_theme_support( 'post-thumbnails' );

register_taxonomy(
	'project-type',
	'project', [
		'label' => __('Types de projets', 'b'),
		'labels' => [
			'singular_name' => __('Type de projet', 'b')
		],
		'public' => true,
		'description' => __('le procéddé utilisé pour créer ce projet', 'b'),
		'hierarchical' => true
	] );
	// ca va ajouté la taxonomie...
	// ici on met en place la page pour créer les catégorie
	// après ca pdt la création/éditions de nouveau court métrage on pourra cocher des catégories (sur le coté a droite (check-box))

register_post_type( //Crée onglet court metrage dans admin
	'project',
	[
		'label' => __('Courts-métrages', 'b'),
		'labels' => [
			'singular_name' => __('Court-métrage', 'b'),
			'add_new' => __('Ajouter un nouveau projet', 'b')
		],
		'description' => __('la liste de tous les projets (Courts-métrages, ateliers, ...) affichés sur le site', 'b'),
		'public' => true,
		'menu_position' => 5,
		'menu_icon' => 'dashicons-editor-video',
		'supports' => [ 'title', 'editor', 'thumbnail' ],
		'has_archive' => true
	]
	// ca permetra de créer/éditer un court métrage avec les champs que l'on veut avec un nom qu'on veut
	// il faut aussi faire des trucs avec ACF
);

register_post_type( //Crée onglet court metrage dans admin
	'event',
	[
		'label' => __('Événements', 'b'),
		'labels' => [
			'singular_name' => __('Événement', 'b'),
			'add_new' => __('Ajouter un événement', 'b')
		],
		'description' => __('la liste de tous les évenements (Événement, ...) affichés sur le site', 'b'),
		'public' => true,
		'menu_position' => 20,
		'menu_icon' => 'dashicons-calendar-alt',
		'supports' => [ 'title', 'editor', 'thumbnail' ],
		'has_archive' => true
	]
	// ca permetra de créer/éditer un Événementvec les champs que l'on veut avec un nom qu'on veut
	// il faut aussi faire des trucs avec ACF
);

register_post_type( //Crée onglet court metrage dans admin
	'propos',
	[
		'label' => __('À propos', 'b'),
		'labels' => [
			'singular_name' => __('À propos', 'b'),
			'add_new' => __('Ajouter un truc à propos', 'b')
		],
		'description' => __('descriptif et info du site', 'b'),
		'public' => true,
		'menu_position' => 20,
		'menu_icon' => 'dashicons-admin-users',
		'supports' => [ 'title', 'editor', 'thumbnail' ],
		'has_archive' => true
	]
	// ca permetra de créer/éditer un Événementvec les champs que l'on veut avec un nom qu'on veut
	// il faut aussi faire des trucs avec ACF
);



// Generates a custom exerpt used on the homepage
function get_the_custom_excerpt( $lenght  = 150 ){
    $excerpt = get_the_content();
    $excerpt = strip_shortcodes( $excerpt );
    $excerpt = strip_tags( $excerpt );
    return substr($excerpt, 0, $lenght);
};

function the_custom_excerpt( $lenght = 150 ){
    echo get_the_custom_excerpt( $lenght );
};

// Generates a link containing the post_title
function get_the_link_content( $string, $replacement = '%s' ){
	// la class sro (Screen Reader Only) sera utilisée en CSS pour cacher le span, tout en gardant le nom de l'article dans le texte du lien
	return str_replace( 'replacement', '<span class="sro">' . get_the_title() . '</span>', __( $string, 'b' ) );
};

function the_link_content( $string, $replacement = '%s' ){
	echo get_the_link_content( $string, $replacement );
};


//FOnction pour créer le menu
register_nav_menu( 'main-nav', __( 'Menu principale, affiché dans le header.', 'b' )); 

//Récupere l'ID
function b_get_menu_id( $location ){
	$locations = get_nav_menu_locations();

	if (isset($locations[$location])) {
		return $locations[$location];
	}
	return false;
}

//Génération du menu client, doit retourner un tableau
function b_get_menu_items( $location ) //defini la var
{

	$navItems = []; //On veut récupérer tous les liens de navigation à qui on passe l'id
	foreach (wp_get_nav_menu_items( b_get_menu_id($location) ) as $obj) {
	  	$item = new  stdClass(); //Crée des class vides (objzt)
	  	$item->url = $obj->url ;// url et label création
	  	$item->label= $obj->title; //Pour lier le titre 
	  	$item->icon= $obj->classes[0]; //Pour ajouter les icones avec des classes css
	  	array_push($navItems, $item);
	  }  
	return $navItems; //retourne la liste des liens
}

//Génération du menu de sélection
function b_get_languages(){ 

	$langItems = [];
	$rawItems = pll_the_languages([ 'echo'=>false,
						'hide_if_empty'=>false,
						'hide_if_no_translation'=>false,
						'raw'=>true //Mets le menu en array, plus en html
					]);

	foreach ($rawItems as $arr) { // Ne fait que renvoier
		$item = new stdClass();
		$item->label = $arr['name'];
		$item->url = $arr['url'];
		$item->code = $arr['slug'];
		array_push($langItems, $item);
	}
	return $langItems;
	//Ne pas oublier d'activer les menus dans les autres langues dans l'admin
}