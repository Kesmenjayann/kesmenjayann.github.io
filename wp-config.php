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
define('WP_SITEURL', 'https://kesmenjayann.github.io');
define('WP_HOME', 'https://kesmenjayann.github.io');

/** The name of the database for WordPress */
define( 'DB_NAME', 'kesmenja' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

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
define( 'AUTH_KEY',         ':OrQHV 6L_ouG+;.Zx:9iND`PA<MV4C058;;1DKE3sY3J6Qr~.>`C)*3z[lC6NLj' );
define( 'SECURE_AUTH_KEY',  'ux_B]rHDQW5?%Cc]B2M2dBDA_TV`]y2F9ptS/Ok<k(gg2agvc0c`.W:?7<r6$(OX' );
define( 'LOGGED_IN_KEY',    'x~`)59xE}Rq&47k/p]ky>U+S,!R=ZQXRC(nt7b~P7M]h]#0=U=$q-u=V] Q=mbia' );
define( 'NONCE_KEY',        '??@Vxx4w>0xq20BU<FD;Mh3n;^$ouqMo-Q m@e9w./ ~ssV;-2dBqTVhSsRj~%V~' );
define( 'AUTH_SALT',        '!ILG9yX8JIH].tRZeH>lft17Ct1UWK5{bC*:]|&k-,uTUkc4Ox0Pws,/7DaxikD$' );
define( 'SECURE_AUTH_SALT', 'KO|ojSuWcsG{(ojL0SQgjtmT_HlYbq..p:Ka`^w@[i`vPX1UOt[(uFy0y|/i-*83' );
define( 'LOGGED_IN_SALT',   '/W^M!~{#7fK9UMC(GwSM{5p,OV3?=(*`tYP.PB@%5H+ZUL#0p.c|C5V3e>$9o+p}' );
define( 'NONCE_SALT',       ' 3ls}LxY}0[I]JXKL)pbX,{a?vZisj!/b:}CTya?k/*VEJ3D[>v+l2Yvh=SU,#El' );

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
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
