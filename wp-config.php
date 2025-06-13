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
define( 'DB_NAME', 'Database-1' );

/** Database username */
define( 'DB_USER', 'dbmasteruser' );

/** Database password */
define( 'DB_PASSWORD', 'Your!!Stro09gPss123!' );

/** Database hostname */
define( 'DB_HOST', 'ls-a5253c7856e45cd6035977cf8423616a572eba3a.cw92gkc8qp8p.us-east-1.rds.amazonaws.com' );

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
define( 'AUTH_KEY',         'ys-g4}-B?sMna=:YC3X:WSu58b<*B+7#~0$FH;+q7,_2$kI3~<dS+N^8HwEQ}BA=' );
define( 'SECURE_AUTH_KEY',  'E yE+^HO4EK?6A|e*A|djpxn@-n@+> gekzd/z-7j{8=PnsthxhJT}3yl_RMN#^}'' );
define( 'LOGGED_IN_KEY',    ',nLx&6Or>PgZa,uyT~Ue?T_2FuU_%tvouAo6#mR3J;1)K|DA>.9)M0:6Yxqa|j*O' );
define( 'NONCE_KEY',        '[x~&V&]Q&)s)e+P naz`>ne!SQDc&va3}{L++K-VwKEQb,,a7?h+|?P0s-Sh!jW}' );
define( 'AUTH_SALT',        '|P2(6%ym-qnIDo(!^FJRTg,siI=nYP>_|-zsqQc^}/_xI(@f6/*_YY-R*j~Z-4JM' );
define( 'SECURE_AUTH_SALT', 'g)vTLNK-O.M<V}}lNhDgw)VG|=+LYiNhld[;o 1} SpP~#s*#cDQQ6?q~:onPwv7' );
define( 'LOGGED_IN_SALT',   't{EZ;WAkUH;c2]b)$&#N!O?y_WaP>I+>3fTi8;sAg4rZ5mYhvq`zh&tgvD|i>t~L' );
define( 'NONCE_SALT',       'D:E?3Z{-N?~gr^0[D~c|#Gb$o)i 1:O2Z<i+~*0Ce@-`qh?(AarPTngL4TSwV&Dj' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
