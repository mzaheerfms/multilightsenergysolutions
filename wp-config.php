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
define( 'WP_HOME', 'https://multilightsenergysolutions.com' );
define( 'WP_SITEURL', 'https://multilightsenergysolutions.com' );

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'multilight_db' );

/** Database username */
define( 'DB_USER', 'multilight_user' );

/** Database password */
define( 'DB_PASSWORD', 'ukF7OuPpte$(&%^4' );

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
define( 'AUTH_KEY',         '<ZN?@./9fl!r/.$d(G<fyiJ%r]=S5h*lk|T4&]Oa=Azw$ryTT$tx[`FO)<9K9vS1' );
define( 'SECURE_AUTH_KEY',  'eYwG)}&meE 1(EaO{v-|AQS-b[GYp^.,(%XhJEw_WQ|`zOWRV#oT8aA3!!gQEI)>' );
define( 'LOGGED_IN_KEY',    'E@[WN4F-nE= 0o(}di.[<#NOe{GA{xd3HlSe;a7$fa`Ta=W6*nx2K{qS!|h$#3h}' );
define( 'NONCE_KEY',        '0%(m1C>zaeacgwuWyAH!~I:z)}-}9!qvebQo,p(]7c$+G|v$]}tT(gNgcyUU.xyf' );
define( 'AUTH_SALT',        '+ClCz$!!#bnsE.F%:Wof?ybs|uCG-i[h~mo$OGRUU=0$n$B+K8BkEz0^=saJ]}ls' );
define( 'SECURE_AUTH_SALT', 'GM{Dz8FB|4b?U04Ah_[l+ dPZI>7|1oVcwkC,#}=,%*#9@gt1%qF7By%CjsgbSg&' );
define( 'LOGGED_IN_SALT',   '@2${b$6 zV>nc2HUcFqB~R~5<Z&j,Yy]T,t0HW@ZN]Q6a+@P[7*yy0:EIT>3K#$[' );
define( 'NONCE_SALT',       '>v(6R<uvi<z4W0jU3zl$]XC(U`sU@]{(e%H`2ni8(2Q@ 4%a?*4L$Q=+BTe2*+2i' );

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
