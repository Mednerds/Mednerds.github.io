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
define( 'DB_NAME', 'mednerds_db' );

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
define( 'AUTH_KEY',         '(Zrm!#da=3RHVplj[#1/G//I%1g;n=)ZY!!<{ETMWH~<OG0-pG=P_vj:9P1J($Gu' );
define( 'SECURE_AUTH_KEY',  'o(=![,?Y&x_9:rUc4K/Ak:vS8qW!{h:6Y!2QwXD:KE2ezDv$AG.KF=.SMu6/*ht2' );
define( 'LOGGED_IN_KEY',    'y)QC7XBFj4iT-aZ^hFq,@0`? oEl7%}+s,8vBJkgaYp|bx8VgK3VJ>QCm&nPt? ,' );
define( 'NONCE_KEY',        'BbQ?p%[sp[J{+]6?Wj 8bHlw/.rOzg]qNV$;Mea:GT.^yfQ^n+7D6E=?vA8,Ljvq' );
define( 'AUTH_SALT',        'g[J2fn<rA|YMf#+h@Lv0Ss.o/S8>od(K*?V?:XXfQNsFZL2Wzz,/Z38$qzkABbf.' );
define( 'SECURE_AUTH_SALT', 'YJu@eykiLr)U2mQx,X9<z--LB2w8QalAa,ci@cwdy@O-CmY Qm|ZL@[estUe(g5Y' );
define( 'LOGGED_IN_SALT',   ' g :3+Q 7tZWnhVr__Nokr#0fr_9J}Aa$IbsB+?I]fR1!*j:pA8|j8u8dkoj_iWG' );
define( 'NONCE_SALT',       'bP:Fd;$0l/a(O)-ghe0{7=8I[sx9BDO8Ide?lVYWqH%rmE,ah~Z4f#H!XZp,jZJQ' );

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
