<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'normally' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );
define('WP_HOME','http://localhost/wordpress');
define('WP_SITEURL','http://localhost/wordpress');
define('FS_METHOD', 'direct');
@ini_set( 'upload_max_filesize' , '4000' );
@ini_set( 'post_max_size', '4000');
@ini_set( 'memory_limit', '4000M' );
@ini_set( 'max_execution_time', '3000' );
@ini_set( 'max_input_time', '3000' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'c=x<3M}<TKl|r-,``O9|~e&~_g>r(!<Bw{x&h5xJWTja)L8Tw5LmQ-q1Fg-^lWO=' );
define( 'SECURE_AUTH_KEY',  '^cQc.6{#+LN.x#Rhx}cxw9!=|s)0k3`(;eosWID+|tnjs:msHIEeZp-6b*>R1j;e' );
define( 'LOGGED_IN_KEY',    'j `@Bl#Jd@O_viKbLU+U[jZ9|yaJ{3g_[d0D;G2{,khZF?e>CGZAG-XtBMxltqDI' );
define( 'NONCE_KEY',        '|)?jh%]Vf$W,.0L$HsJrxx*>[t/%dhUP*?`126:/OI|b&!f`;$+(n{#WA0nHV/9x' );
define( 'AUTH_SALT',        'q%xc$XodzPPVxDow]w%[yJXk  2IKu%Wu~HDa|T]XI>FEn +n6K(XWE[c3d9F6b' );
define( 'SECURE_AUTH_SALT', 'Y2G;3!>GT.v*w~#cs+IC,?aD+Cxn![UG0Z_P.uG1?%|QTK1wpfwjZI.P9-<I08kV' );
define( 'LOGGED_IN_SALT',   '++^Obmpv(H-EjYziZkBHbAGDJ{$;9JWOKGu5.Z&N+h37LuCkrd=_T9CE_zgx%HQR' );
define( 'NONCE_SALT',       'olz+XA#`3gmV_$$SnMT:_[0+ S7;H%{-e|#v7`w<V-/k-9Ya %i0rKFy3!aPvaJt' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', true );

define( 'WP_DEBUG_DISPLAY', false );

define( 'WP_DEBUG_LOG', true );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
