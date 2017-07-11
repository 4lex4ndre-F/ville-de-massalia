<?php
/*
Plugin Name: Génération du logo
Description: Gestion des liens du logo: img pour la page d'accueil / lien sur les autres pages.
Version: 11 / 07 / 2017
*/

function get_logo(){
	if (is_front_page()) :
		$custom_logo_id = get_theme_mod('custom_logo');
		$logo = '<h1>' . wp_get_attachment_image( $custom_logo_id,'full') . '</h1>';
	else :
		$logo = get_custom_logo();
	endif;
	return $logo;
}

?>