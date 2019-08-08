<?php 
/*
Plugin Name: Copy al pie
Description: Copyright a pie de página
Version:     1.0
Author:      jorgiyo
Author URI:  http://peonnegro.com
License:     GPL2
License URI: https://www.gnu.org/licenses/gpl-2.0.html
GitHub Plugin URI: https://github.com/jorgiyo/copy_al_pie
*/

function imp_copy(){
echo "<div class='copy' align='center'>";
echo "&copy".date('Y')." - El Capitán Elefante - Web: <a href=https://bideoklip.com>bideoklip.com</a><br><a href=https://www.elcapitanelefante.com/politica-de-privacidad/>Política de privacidad</a>";
echo "</div>";
}
add_shortcode( 'copy','imp_copy');