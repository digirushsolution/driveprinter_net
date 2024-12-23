<?php
define( 'WP_CACHE', true );
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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'digital_marketing' );

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
define( 'AUTH_KEY',         'M>}{buA.BCl ?QDgil/xd^]j(rJY3-S<CplG,&|~Pn^,caAq{hzhaE}]m]N3XA3D' );
define( 'SECURE_AUTH_KEY',  'IzNFB}*tSOa2Wh~4J4Ud9{ZdgL[1A>!L5ECO~^=B*KMaoz^*m8FPLX.mm_I@O;Pj' );
define( 'LOGGED_IN_KEY',    ' ?fqYgn),_unE^^;){pdu.@!~>O/rS8xE~}`X`,^a?N+B8d?jv%EHx+[?[k9^f$$' );
define( 'NONCE_KEY',        'Vye& 5my}CJnt#/7cNiZg$7cS=JJ%h1J#d#(T{tCD<#(+)fNm6AL37c|5>ts$#^N' );
define( 'AUTH_SALT',        '#=8I&X^!T~Ff7R@,/>r+rXUcCY3c1yqEp9*]AO6)Lt(+lComEdkwXOSrjd:{T`:_' );
define( 'SECURE_AUTH_SALT', '>QB@)[Sx4:KT~m`NU;@6.a>P8.% y+yu{+$%Bn`oILPAgSO>WzSj`qVJE.8biD~)' );
define( 'LOGGED_IN_SALT',   'W%Nr;TlsV-~5?L5fKX$4$HUy4{Tcd-|CY7igIvm< m52`Ckpv8* 5.)QkNfIx3;K' );
define( 'NONCE_SALT',       '.9>OOctLpr$obX2(r|<SK`Xx$yEu9*B@Yd0`~,+A0%cvzxf/4&X>,9-M=a0&1NaS' );

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
