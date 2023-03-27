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
define( 'DB_NAME', 'portfolio' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'vZnV(c$~O;Cd;8+A,MX-rUuhUyW^O@0%uN,NH0A~p+J BDy{61D|~_L{~7~h3~i$' );
define( 'SECURE_AUTH_KEY',  'bq5g&3M08fO~rh>9x7y#^7=_YlING`G]w/9,+U)Z X$Vx01CpX;tI-65r$lk>9>h' );
define( 'LOGGED_IN_KEY',    '(]-BV abkWVTIA5t>W>SX[#Tbk}-u6MeQXwFdl}.j%2h~0.<E1P.#i_PkvcR?x`H' );
define( 'NONCE_KEY',        'W- );WWh_2jG)ZnD6N86)?xI*sQSbf|eD`X%F>N9yop0?H%W?nV[5FHnG,r72.J_' );
define( 'AUTH_SALT',        '[Ki?*uJ$f-`74rywd]* c):A<e~:?BJ0&+@^pQ%KlKg9+IzbA {U.Ipcs1IW 3:p' );
define( 'SECURE_AUTH_SALT', '2$ohjmtx.^A/Uv*?z7:GE<AY#+JPn+@uuOXDlU^{l:E}tKNo)tI+.wLm1_#Lk|%>' );
define( 'LOGGED_IN_SALT',   '<-`!zocOb.pzFQb^5U)a*U+k#NDPxzzUE2~Lz%tLXMO!66=ZfV#3IHMKZ+-j*e$7' );
define( 'NONCE_SALT',       'X(sNWtWb8X(MzFsn/y:!a82YedV=$87YP4w2~|y-5Y&Oa@>:*MQAfbajmH]($ )p' );

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
