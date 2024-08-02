<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'task' );

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
define( 'AUTH_KEY',         '^wEa0,2H:wG98fu6,=e %;$e8eWo0GooVXDP}+@)%R$H$hQiPwo*RLEUv!C)I4`t' );
define( 'SECURE_AUTH_KEY',  ';MAs|%$,32H/I ~m^o$KQ6!5n_h!F7R&cD03=p1h05u!sNwz9F)VD;}6hG!B,Pz0' );
define( 'LOGGED_IN_KEY',    '0#)M|,4EVh(]Ny`NXs?&}Mkk!ZxKRoi6AfEmV5;+<|8<2axV5uNSqieI*%QL H]{' );
define( 'NONCE_KEY',        'M$UMzNZ8dVdbKp@_EG@(XJ%$7ax{Q3TpkyNS{!U*o-sL Yhk#S -]i!D-cbsIhlN' );
define( 'AUTH_SALT',        '@jkWcR2 )RTZ %oB]Ur mwE8PIwB?;L3~R+o~).3@LEj!6M$WP%]@y4&WX|wA-dC' );
define( 'SECURE_AUTH_SALT', ',5f*R<pEE,jE0s+Ytg=WZA$5/`^sa/f4Qw;Ous:<r$CZ7y>D/Wg)(,8;(}|AiBQ{' );
define( 'LOGGED_IN_SALT',   '*qjr{5qq5r&e&;0ptJEUGDAf*9;I;$#d;Y:gyHafQ:*9:}]7s3mVLl2Lv.uCr7S#' );
define( 'NONCE_SALT',       'yn!{)DoBQG)k=F_l(}N@97`w^YtF-Q|L2fck>/q@CZ+_U@VvNl7t_[JX4{<5A[Tt' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
