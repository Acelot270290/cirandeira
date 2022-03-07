<?php
define( 'WP_CACHE', true );
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
define( 'DB_NAME', 'u802226174_Dh43P' );

/** MySQL database username */
define( 'DB_USER', 'u802226174_Ai5g9' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Lkic1XISSZ' );

/** MySQL hostname */
define( 'DB_HOST', 'mysql' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          'J,vs$w?.:,Xy/*7@)W|~Fcn1Hs8B3C(C;eIH$/Lq!,1U3@(lCe&a&IQ-,rR-mY1v' );
define( 'SECURE_AUTH_KEY',   'htalfx]-&JVH&QT/XJ/bV6b_x0L*Uw)k49?g]]Dmjx*$e[E7x=g8ak/0#r:Gu )N' );
define( 'LOGGED_IN_KEY',     'J)QC!8%JQ4P+v@c s-TvbB{vMRfX#C~O`!P<mUc%Bbu3M>So=,$!Yt|%o{@!4|c$' );
define( 'NONCE_KEY',         '0^Dz[d/sN$jn!!PKNt^,6E?e7@X/XxFcpf$[S$bs=FKk]G;:KVEK2/@8< wtP&|2' );
define( 'AUTH_SALT',         '_=p,6l,[D&Z,C#7:R<a| 5v%XuZNlT(FK-OKZFi2Y-vyms&zRQd;M3O3K(|/7=U!' );
define( 'SECURE_AUTH_SALT',  '2TNI*N:!nsD-O*5,pk!m7z/9{gP`h7V7CjNszmd<M@oAH3%]6f.c0}7Q{+N-kN&t' );
define( 'LOGGED_IN_SALT',    '@c=9Oyy/C{r&dMj{eVEpwc@yYNlJ*f-v1+NaC_&By8|p#UQ9TY~?i#^U://09rfq' );
define( 'NONCE_SALT',        '2izCJ+A@@duWuZmRZa.=+TA!aa78~_Q+QCs[+y.Rv8EO}1BR}3}csS{o1ZXrOcU+' );
define( 'WP_CACHE_KEY_SALT', '6<js%5_Z`MAK?P,diQx!#EArxD6_MWL}y0H(;0M|jo]#sJ?p89Q+zFF3j{{nTJ/M' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
