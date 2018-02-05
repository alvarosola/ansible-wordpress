<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'wordpress');

/** MySQL database password */
define('DB_PASSWORD', 'wordpress');

/** MySQL hostname */
define('DB_HOST', '10.0.100.1');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'DU3M@8T~Z9uiT_dxASH+C/-X}O&.x6a/zXy12:0<Sb>Ng>Y6n5XNQ5{n%$FyJ=k:');
define('SECURE_AUTH_KEY',  ';si5{s6Z:wT}TQKaa*668V*(*W1MH<2}T350XS#o{dzURHJVasD<%LeA<ki_SFQ3');
define('LOGGED_IN_KEY',    'y-hx-HI%GH(h!rlGlpX]5M^*@?Irc2L^buht<5pvz 1Ao)u]p;Ll57-bpaO>~S.U');
define('NONCE_KEY',        'jC}DK#Y@9JaG_o~%pLJkiQWQ%:M|YvPQ!iXE+}1~*4{B70EFjQ3>fHM86r1Y${wm');
define('AUTH_SALT',        'X*B)jY2Ux%r[8fG!yrZ:&[:D`5zr=bj~}8Jdtm.7GP_AJ$G+w=(ijeBm8$]#qaGI');
define('SECURE_AUTH_SALT', 'mJrn.}H!/&5:;{z=~;F0u_l=M8T`RD>{eRL2WKdWt9@IU_+f{OzDGMp~)neOyDr6');
define('LOGGED_IN_SALT',   'bx4NiG]Ra,{Me87)H-seuM{ 12ApqdCTi)cd^&;_ISHzq;kb]3qW0(sl9VB,rSmi');
define('NONCE_SALT',       'FfmHSS~v2]Ts%Bg;YV}Fp%+f.1bm=qbKF@*`Y);|6szGTQLN~-BX1`I+MCyKR!Qb');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
