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
define('DB_NAME', 'wordpress');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'root');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', 'JIsidro0203');

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
define('AUTH_KEY', 'f#11<+BuD2=>_[RP`@qFjf$]?SJX8C3]V> E/oYq+ZVMl9k_Lc^$X`I(Cz#U(HUJ');
define('SECURE_AUTH_KEY', 'G|_c2AV6M7GAe29MGkcbUUb,>FP_ O*Vu%STh9fjmY.GNG[#)E-1@5ZpZ%{se~He');
define('LOGGED_IN_KEY', '_CSVC|;[PCKxETag#{#zn.KMWq7K2<=0^D8wz]l=f)eV-(xc50yzrdOO xrCurM^');
define('NONCE_KEY', '3myjS$t_pRxL)esNb=y]iZhA5V8.Z#=Y{m&vsu],r,BLU~tsLPqJ9C$F,9=z-Q=L');
define('AUTH_SALT', '7m:E T~HPdYG$q`cc- a^Few^1%y[S+!ZT.Mb^Qt!=UWAbfPf[)y][]`$<99<!ns');
define('SECURE_AUTH_SALT', '*2Xe[lBV9kCPU{n4?k}5j$mM?m/jz 9D|q<>W9yJ=^yL>H>}(STV*c$d(uqF7,hs');
define('LOGGED_IN_SALT', '`;@[b}Sr45{hgYfZ81MB6+MXqtl&rz?M!!R%1z,!kWH/Cvkxb<xpST>06E$ T;r}');
define('NONCE_SALT', 'g|oGiaRZ%As)+XdPF)~x>g0h&DhMRKZ,:oJ^L#,?Ir-F:EwkaT76j_[M-!fI@:pi');

/**#@-*/

/**
 * Prefijo de la base de datos de WordPress.
 *
 * Cambia el prefijo si deseas instalar multiples blogs en una sola base de datos.
 * Emplea solo números, letras y guión bajo.
 */
$table_prefix  = 'wp_';


/**
 * Para desarrolladores: modo debug de WordPress.
 *
 * Cambia esto a true para activar la muestra de avisos durante el desarrollo.
 * Se recomienda encarecidamente a los desarrolladores de temas y plugins que usen WP_DEBUG
 * en sus entornos de desarrollo.
 */
define('WP_DEBUG', false);

/* ¡Eso es todo, deja de editar! Feliz blogging */

/** WordPress absolute path to the Wordpress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

if(is_admin()) {
add_filter('filesystem_method', create_function('$a', 'return "direct";' ));
define( 'FS_CHMOD_DIR', 0751 );
}