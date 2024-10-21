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
define( 'DB_NAME', 'wp_test' );

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
define( 'AUTH_KEY',         'd=?UQ8H:I4HgojjXvfj*h=OU6f58l8Ep8.5W0-OZ AbS:9oH!{Fav_$8|5,oqaWB' );
define( 'SECURE_AUTH_KEY',  'O_ *!0b|Y7gAbed5hB_5D81K%f`5_SBv_S@a%;Nf`8C`C%OmhSK.-BcT+E/*8&#R' );
define( 'LOGGED_IN_KEY',    'rT4Jl{<A]62y3Rl/SU_p|d{`xD&sS]0{r6oF9N8Ui4A0rBq!<~S(yF<!=Q,X}l*4' );
define( 'NONCE_KEY',        'p%=7>~gdwd(^S#{e8@MDgl^mx$1jFuE*-2w=3_W>c9o*I?}IM,,O$ 0ANJc&|sdi' );
define( 'AUTH_SALT',        '+|jn/IMU0VsMD?#*3YH0X#7U}1_7[w9h@?&8:OuQ`wXN>&E&rh ~=X3.>q/[<VoQ' );
define( 'SECURE_AUTH_SALT', '!^fr<(@+X*94Rqv=)yOUlJLL.[S}y>reKJ3?C~UXq*;1(:Q&/O8pHcX!1)NXxhB6' );
define( 'LOGGED_IN_SALT',   '/,TVsB(.2$==W,=SfTguS))$5tR[783Snd%C+ft.Far0fXSI1v8x7Dy%son1VK;[' );
define( 'NONCE_SALT',       '<0&=<CyW3X1QQ:[Rt0FvS*A{?_)d<l1A$6$P_+bQ5->+6<5[>x.F]Uc!2cnOx`nI' );

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
