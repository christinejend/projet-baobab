<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Mon super site</title>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() . '/assets/css/style.css'; ?>">
</head>
<body <?php body_class(); ?>>
    <header>
        <h1 role="heading" aria-level="1"><?php bloginfo('name'); ?></h1>
        <nav>
        	<ul>
        	<h2 role="heading" aria-level="2" class="main-nav"><?php _e('Navigation Principale','b');?></h2>
        	<!-- MENU -->
        		<?php 
        			foreach (b_get_menu_items('main-nav') as $navItem) : ?> <!-- Doit retourner un tab-->
						<li><a href="<?php echo $navItem->url; ?>" title="" class="nav__link nav__link--<?php echo $navItem->icon; ?>"><?php echo $navItem->label; ?></a>
						</li>
        		<?php endforeach; ?>
        	</ul>
        </nav>
        <nav class="languages">
        	<h2 role="heading" aria-level="2"><?php _e('Choississez votre langue', 'b'); ?></h2>
        	<?php 
        		foreach (b_get_languages() as $langItem): ?> 
        			<a href="<?php echo $langItem->url ; ?>" title="" class="languages__item languages__item--<?php echo $langItem->code; ?>"><?php echo $langItem->label ; ?></a>
        		<?php endforeach; ?>
        </nav>
    </header>
