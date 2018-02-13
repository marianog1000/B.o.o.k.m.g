<?php
/** 
 * Configuración básica de WordPress.
 *
 * Este archivo contiene las siguientes configuraciones: ajustes de MySQL, prefijo de tablas,
 * claves secretas, idioma de WordPress y ABSPATH. Para obtener más información,
 * visita la página del Codex{@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} . Los ajustes de MySQL te los proporcionará tu proveedor de alojamiento web.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** Ajustes de MySQL. Solicita estos datos a tu proveedor de alojamiento web. ** //
/** El nombre de tu base de datos de WordPress */
define('DB_NAME', 'caprocom_capro');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'caprocom_lorena');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', 'lorena123.');

/** Host de MySQL (es muy probable que no necesites cambiarlo) */
define('DB_HOST', 'localhost');

/** Codificación de caracteres para la base de datos. */
define('DB_CHARSET', 'utf8mb4');

/** Cotejamiento de la base de datos. No lo modifiques si tienes dudas. */
define('DB_COLLATE', '');

/**#@+
 * Claves únicas de autentificación.
 *
 * Define cada clave secreta con una frase aleatoria distinta.
 * Puedes generarlas usando el {@link https://api.wordpress.org/secret-key/1.1/salt/ servicio de claves secretas de WordPress}
 * Puedes cambiar las claves en cualquier momento para invalidar todas las cookies existentes. Esto forzará a todos los usuarios a volver a hacer login.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', '?7<`g1-1W^a[8]:54}B=!b-GdCzZ=fRi=Cxva`IomP3T0B2^8E>Y/u/73I+^]8@j');
define('SECURE_AUTH_KEY', '*_)djW1]6.Mu=F<bCv{D,IjExaI4L5uiP+Fw1]?I@f7+*5x7_7zcs!FW~+f$RBwC');
define('LOGGED_IN_KEY', 'i.w_0I*CR(*;Nq^vb6fDzS#}!O|<W,hG k+DZTs=b|wrLCzz?J$yh|WDjM~J$aG5');
define('NONCE_KEY', '?1RG_RXAU~O]XED2j02<O.:e!4I)v?~y>-jJb;}vW>N9:ff-|1o(zW)j;<grLN,j');
define('AUTH_SALT', 'yAtIdGYB*!CP.*@OQ!<Oe:qu~Yj%.%/s{Y1H%8R7>I(BTtPKXy*~on*Op4/atBId');
define('SECURE_AUTH_SALT', ');pXtU@<alU(aFuZ$!lWPvL3~MiljC^J W9vn4h6hcp5-NFk>0NT21-o;r&MF=wi');
define('LOGGED_IN_SALT', '90i>9)}@w[wPL%#TN5D>J@!Hh%IvH#l}GdMU:`#X-roWfr4j%p5*sn.=P5(nRDG,');
define('NONCE_SALT', '9+)`~;F: #wt6UE-SRpH%4P Jp)6K9FMetXk@+pm,CkWDYAo=z8j,j9~dUVFP 1;');

/**#@-*/

/**
 * Prefijo de la base de datos de WordPress.
 *
 * Cambia el prefijo si deseas instalar multiples blogs en una sola base de datos.
 * Emplea solo números, letras y guión bajo.
 */
$table_prefix  = 'cp_';


/**
 * Para desarrolladores: modo debug de WordPress.
 *
 * Cambia esto a true para activar la muestra de avisos durante el desarrollo.
 * Se recomienda encarecidamente a los desarrolladores de temas y plugins que usen WP_DEBUG
 * en sus entornos de desarrollo.
 */
define('WP_DEBUG', TRUE);

/* ¡Eso es todo, deja de editar! Feliz blogging */

/** WordPress absolute path to the Wordpress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

?>