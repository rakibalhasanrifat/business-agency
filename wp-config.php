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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'business-agency_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'pncy+Q9@<[P+*li{@[J^,GcEkdhOds#wBWeu2>$H gF4haN$KlW#4Z6^U!`-#D-6' );
define( 'SECURE_AUTH_KEY',  'OI<TQ|5rFt`eswqt.2sxgT7Q}Ioa<Ek+{4<|wC1NF%W<%rfvn/P?/.Sv#*5@wG:2' );
define( 'LOGGED_IN_KEY',    'Btgp7zuUMzQR%rB?/1KPkQ>P[&G!dl<tfcXYg-itI>GS*no;?-&*O8[AB_N2g!EI' );
define( 'NONCE_KEY',        'EIn#6uxMYk5L5>rlC_8W>W*QfRiV..e`D=(h8GWhScSTVrD%)m!9q:e0K/l;vi%7' );
define( 'AUTH_SALT',        'AT}GQ}B%I8HXiOeclhQk>9be~O|#y-{AH0DF<cf0s3Czb=rz~i,G%.lmc=Bvp{A,' );
define( 'SECURE_AUTH_SALT', 'vjrr3rU.6D9bwT+5?Aw*(+?]xHU}x& W`XT.es|_Q0>KNYVWz( (d{MXv(,,ZX_s' );
define( 'LOGGED_IN_SALT',   '}kGDO#Z=Z$U-WQ/wENU81hNi8~#G=z,} If(y;Y}y}QQp@xCG|5aN-3|Nby[1jJd' );
define( 'NONCE_SALT',       '$x%(<m}=a)dBugZz|PoU-zAX;q,]|!5E](/&bDAnh*N96W{W:sFTC0*6Hg{A^qb6' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
