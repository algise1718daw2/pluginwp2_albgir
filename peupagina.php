<?php
/*
Plugin Name: Peu de pàgina per defecte per a noves entrades
Plugin URI: https://github.com/algise1718daw2/pluginwp2_albgir.git
Description: Crea peus de pàgina per defecte per a noves entrades
Version: 0.1
Author: Albert Giron
Author URI: https://github.com/algise1718daw2
License: GNU GPLv3
*/
function admin_menu_peu_pagina(){
	$titolPagina="Peu de pàgina per defecte";
	$titolEntrada="Peu de pàgina per defecte";
	$role="administrator";
	$id="peu_pagina_per_defecte";
	$nom_funcio="nouPeuPagDef";
	add_menu_page($titolPagina,$titolEntrada,$role,$id);
}
function nouPeuPagDef(){
	include_once('formPeuPag.php');
}
add_action('admin_menu','admin_menu_peu_pagina');
?>
