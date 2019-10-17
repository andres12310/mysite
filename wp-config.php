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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'test_db' );

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
define( 'AUTH_KEY',         'J?-#=9:E&3x$0Et;[~izJ2;Z)T$)~3u>G~QN_abT;?w}Y_Nxk(j :<.cVa3jKt ;' );
define( 'SECURE_AUTH_KEY',  'RW>D53y%gh3Jxq .WE)B!|i %$yX%,q_MYv/d.*WlLdXL]BSw``ufL1i&2%$s6<m' );
define( 'LOGGED_IN_KEY',    'UJ,#}YXnZsKSI5xPwLNkw2_t_nw321lL 7={{R08Lb,O=_+TR*+Hx+,x`d?QaxfG' );
define( 'NONCE_KEY',        '3yR2&b4v#k&BiNlFYe[K)%oyPE%/G]%?aM&0RoOYj0ogg`*gmGv+b3J*@fh/5!J7' );
define( 'AUTH_SALT',        'Z{mNC4[b47]Ty4*Qv@gu/m!nJ~%tkPFO@6{~^am4oqy/U(^ci-&g|oE]wTK-_Yve' );
define( 'SECURE_AUTH_SALT', '*x5n7 EH.zrXp1U3F=D_k}RYAAmFC^5,d,Rw~)CtcVQu|gk]XB?}l:?yGiwIUb)f' );
define( 'LOGGED_IN_SALT',   '!n|eMRkub4b2gq6)OJ;Ak>NSC/h3oE4%8k=Gw1lduQH6UUTnSq)}meQ:G3Uk&:{t' );
define( 'NONCE_SALT',       '}p|8<I{fSx/(b`gF b3wPgdmZ2|JDN7GQ],TJ,vnK(Cs2S4lpzccn:~F]1I)1Lv]' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
