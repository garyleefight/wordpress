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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress-db' );

/** Database username */
define( 'DB_USER', 'garyleefight' );

/** Database password */
define( 'DB_PASSWORD', '!Ll19920503' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY',         'f2Of--J)#=~42nW-o3V?iWTxX3BS/6=_X3)%CB$N+gW]7u,yi~>w8)CG*i^R4TWA');
define('SECURE_AUTH_KEY',  ':cB~s?Ulk||d#/e?EY8Gj?9.d&(AF1sSVyNb;$GuIu(7sH}yAXC.A{* VLB_-6TR');
define('LOGGED_IN_KEY',    'ur w!EH!B=eEbKYP-JuQR/%sD,}eOg5ar9wv<&3S1+w|r^`Zki[Im3IU- `U7x3S');
define('NONCE_KEY',        'tz,5X3Tz$B`Aax$;j)Q:p@/qMy u!f=|qIZC}<$9v;/Qz+a%k|Mdw[NU)2(aQ.!=');
define('AUTH_SALT',        'XXjb1 nYD--G[{1xRu+0XCJ37!5;T3e]Rs_8XrFs]=#4|5@h&Zuquh*ETB0lyl_r');
define('SECURE_AUTH_SALT', ']P+@2eICYAdHtNJp,[vrRdSv7r:2+QMBF&mE1!2oPd9Vjs:HV{#n{g3}Q^VvUyF>');
define('LOGGED_IN_SALT',   'PIV@!8OtC}qx_ni(<my4_j#`4nf.YvaNxhw-|w[r/+iLBVrV+%0gDLZY,~%fQfJF');
define('NONCE_SALT',       '%:jGO1e$-M8:{l1jLbTBd+x&3Q1<d`}Qi4JUDRY|AAW3v}uPWuC8)M!Oy-c}r:p9');

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
