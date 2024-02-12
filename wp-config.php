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
define( 'AUTH_KEY',         'p?vlwW437dg!#2(oB2>0$5wPUNfWf@A0<5Vp!:$EXv(d,^8{=FLmF4wHvR)jLZ)r' );
define( 'SECURE_AUTH_KEY',  '0ADjO)]onvkap@.Pl+dbaftcSijG3#V`r0G$2[_(U;)!B2xyaW~qZZEhsZ?{J1=o' );
define( 'LOGGED_IN_KEY',    'RF/fl};*/*eZQVp^Mpl|[_L?|0~KgS5&r}$dfEkKEd.W&+~ztS=/*R:eYr7t0MLK' );
define( 'NONCE_KEY',        '$a{llEp?[J|IbV#?U(q@JE|NoZ`#C^d,2RlwdIX4%AUR<`OwOqvW&DovD39Z8F{k' );
define( 'AUTH_SALT',        'K$|7MKl_:L2N$q)xB[npV>=H/WauIT0_)Y8J`2zG}p{n[H&}qRdPQbSY4YbOFJ#,' );
define( 'SECURE_AUTH_SALT', '(f73@Iuf|K{Gr=%@B$,^~s1yG-fX/TF9N?<%j]nr1<^MqN)[xHN4+SZ0eiF+#{pd' );
define( 'LOGGED_IN_SALT',   '8 &8|:slQzIfc@Yr%aREHK7Zm,Nz8(|,qvP3Z>hWj~c,dTEA${yO1O+Qw3l?]RCq' );
define( 'NONCE_SALT',       'L8gg+np@0+b$N_guGCr,L&a -[ywehkYHRew?3/@MA[]GE,Y{ABQ9NkHvf,F~A{U' );

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
