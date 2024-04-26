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
define( 'DB_NAME', 'Ruterdb' );

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
define( 'AUTH_KEY',         '.03zd/1i|LV!jNS a&RbQ%#@+9&*M^v@O;_7U9-rM#tm:%WiKE?JP#*92eR5O@^]' );
define( 'SECURE_AUTH_KEY',  '@.lSxFDBiwl6]st5h~9%XeABZ ;mbs{ik6,z2vATBq&P3K?LWqujpOb+Z)mqpXmO' );
define( 'LOGGED_IN_KEY',    '&vF/#!g405m}:@FX:]xbiy{hg<kGr<etJn#=@(W$z p|zsDDUg[lhS%{-ZZRi23s' );
define( 'NONCE_KEY',        '~gX-K,`/2$9(aRf3&q2s*YF<UM:v`?-.311w9?yj!fopqkAeyxRAo1>dJ`3>xtHk' );
define( 'AUTH_SALT',        'bT$z,KxysKzSU/H6D/{[^8_ k?VMDo*`i8[W_BQ.+SqmM4.?B%JG5Qv^?ORu5b|)' );
define( 'SECURE_AUTH_SALT', 'ulJH2rh_:1{sc ,-rlXd-9dKjy6Kq{ s,/I01lEhv{/Yp {!WJ_o{5fzlNn=+zz[' );
define( 'LOGGED_IN_SALT',   'lZzvv78l9_}gR}mOHzZ%Xn4ETQ*]5waxS@3#+:,R :-63/KTjf%X/#U]x+E24e|>' );
define( 'NONCE_SALT',       'g!n=[Ya&%:fzDN|)a~,dI3$VPFQq.,_#ln!iAy_|1NAvMZIKT=N<M;fy(XCj2aIs' );

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
