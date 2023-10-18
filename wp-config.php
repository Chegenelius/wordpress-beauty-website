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
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp_db_starter' );

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
define( 'AUTH_KEY',         '-Xduh@6*:w,KqHvL^ZqS5tnXEi}#64^AWTbM&H+h<w~/(Q96I#WSKC1hw}s,-*09' );
define( 'SECURE_AUTH_KEY',  'b.u9=vWv]UTTu,9K72<3A]]lHB&HBt|g4du=Tp]RzcEy.Xu<Bk&Kt&{R>x[hu`-y' );
define( 'LOGGED_IN_KEY',    'Sts3?~vx!66[MLa1lM|F0}%q<23[ N, AgUEoVg]x6YKL=Rx0u6zzNcCNv4}fh@e' );
define( 'NONCE_KEY',        '.a`Y/.~lBqMV%:_TXh)B4S)+;Wvwae~}+eJUGuWWHDGgkhv+7$(=4%ITM``=DJ*F' );
define( 'AUTH_SALT',        '})gQc#y*U}C6[DbKff)3rE1:YlU4/AUvrgFyb$i[jPbx@Ma~{zvcIs4ec4`D*)V{' );
define( 'SECURE_AUTH_SALT', 'Ndo&#%!{X/L,k`U;#4Z:*#ew1A$;]]oUzqsZrsAZVlH}5w$%.{&&tZPLPp2~7Y^t' );
define( 'LOGGED_IN_SALT',   'P;w5#0F3{IHSelwGvld30p.j-X&O<_R-n*c@o5zX7ip/%W`^,<ciTN-h*r]Qp/UD' );
define( 'NONCE_SALT',       '^`PZZ@Olvk:hR,)8Xw{kb,VE6FN9u!8T9_&h/,+Xc?{y, VbD#zOOtvI|8sk+P<?' );

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
