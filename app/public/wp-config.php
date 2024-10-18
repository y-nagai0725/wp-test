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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',          ')|*`><Lvx~3/-[#:vLfZ{k]!9hc:SP}}a0F.UXr^0tm-k$Xaf!tf, VFXB,m{ea^' );
define( 'SECURE_AUTH_KEY',   'a,0Q1ZzUgvdcEm`!yvK;:sXM[(m_NG7U6nw 1dv$9M>:!=k!)`U_JSPF:&e)MOzc' );
define( 'LOGGED_IN_KEY',     'wJnDn&{?Y(5:`q=ys9qByY>TN}L[;iDyBBys 8=~cmT*<^.OJbY>xG0y9omcQr9*' );
define( 'NONCE_KEY',         'f}gY4B:04!g=+sg2oxw/(B3l_#G%IstyZ!-3%Z|<vyC8*acYGH*-iN:v`,{H~u.5' );
define( 'AUTH_SALT',         ':Ul`Wrw<^z2)?$=]f{Q+($xpdwXv3?I&T{3SdCUBaac_m|>@JKG|v{m>RmX]Cuf6' );
define( 'SECURE_AUTH_SALT',  '[E=2;tNUNq+}m|wpDFs?(K#7r2@<woMONQ8hZt1|L@(6M%6bo1sXnw_5p$Kqb=?A' );
define( 'LOGGED_IN_SALT',    'U |7m|p,jPxz@1V5M(_Ym)A$kls$Y|HDY NsJT?a^4*=JdpcNO&k]j53MIwok}g7' );
define( 'NONCE_SALT',        '0!rQa)W$*tMV0Ul{G`UifVwwJ%:>to+0Lvg&G)T6Y><kZ48xT#z5!Bua-s5W~7$J' );
define( 'WP_CACHE_KEY_SALT', 'Rv$Bh{9R,1*aMHdJ/$^P,q`fhDc`u ~ygt*Q;}Be/BACah1y4Ku#0|9[%#}meE1t' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
