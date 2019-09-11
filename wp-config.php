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
define( 'DB_NAME', 'dosmas_db' );

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
define( 'AUTH_KEY',         '8HFd3F0<sLZop~mCf#CF}nDVYh:}Aq7a;s_Q&o%Ab~uS&hn&]<LvYl16Z`+!@SXv' );
define( 'SECURE_AUTH_KEY',  '>^XiOSC$[iQVI0URC?[ysA^.ZRQ}G<`$6yzD[_(M&?R$t:n&O2>l:jsur-4Kpr<B' );
define( 'LOGGED_IN_KEY',    '$x4ow_}#}Y#6tf}@<dN|%mc<p1lF,7v`R@+ROU6*>.ng,VyeC?y5KWi}|D2J?r+M' );
define( 'NONCE_KEY',        '3MqF~gp=8hIo[.@cFrD H<qQu(XE0sItD`noAwwRg  /X0CMT1nrl;ll#tZ:8qw7' );
define( 'AUTH_SALT',        '$LLA!0l%4Q;PY-6n+OYH 1 $Y=v^JW/9]XMmCwnyH_)G2&ewjyg5nN28s&qJ lUA' );
define( 'SECURE_AUTH_SALT', '~k+_e:in_3)&k|?=+$;Qp,`Nfie_ag@sLp?X4:kKM#6IGrpiuQ(DxUc{xlt#k3JZ' );
define( 'LOGGED_IN_SALT',   'D9MM%-G2klv:mt@?WNn^.w[_&= Ve2~5Q~8RfOS~jp0[4ZK{E/UL%_-sju%3Cz(K' );
define( 'NONCE_SALT',       'J[gx~z loD|pcnXz9%zI_4l74T8?JkOO#sJqJuQ0Cl(}%qqD@Zb?,e[0i <|=M}.' );

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
