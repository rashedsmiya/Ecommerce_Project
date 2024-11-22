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
define( 'DB_NAME', 'ThemeDev' );

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
define( 'AUTH_KEY',         'u-BJxb,S/XephCy)$lp^n$O%Y-Y^?{uGK/V%A66n0j56%v&DA}0UI9:=|/-C}opY' );
define( 'SECURE_AUTH_KEY',  '4rYlXHz90NqUDFL7@[nA~@aPAoHj~).nK66wK, pbb[2%M!vcz<0$`c^+#M{]s?V' );
define( 'LOGGED_IN_KEY',    '<IA1{].>URUE9@r46PxW.sTMQ5U`NH*O(JvI?]8$=f#&=}E6EBAq=0ax{]A:ivPK' );
define( 'NONCE_KEY',        'p^RbrnQHcWYU^;wlt~2Qo,ocniCeh+[]q4gR+(Ul<cf(TaQl*aUKr}-l}uZEz5*&' );
define( 'AUTH_SALT',        'Cm=S5Qco4lJV{9o<2a:ORAA@GJC%/iu7@m.<!sdcws:VRqF?=am`-I940DU|zX$l' );
define( 'SECURE_AUTH_SALT', '`Mtix<csnp%F4|&W,]1JGIjlZ8?j?Q2DfS$_#x9y|#(WW7u>+&A0*s`gBjXMECAR' );
define( 'LOGGED_IN_SALT',   'ja(a.)wsy4`9eNhJ;!29`?Ut%gh6S nj-X8e1pzVL)%FBCun86InJ7Ey{hU6|}j%' );
define( 'NONCE_SALT',       'eyU/pA9S~D<.iQE65 RDwE.OBI 07M+|%ZXg?3A.9H}86PQWDV-tD,/Sv?$p9FvL' );

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

define('FS_METHOD', 'direct');

 
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

