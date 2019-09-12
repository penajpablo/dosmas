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
define( 'AUTH_KEY',         'bV-^NH;EOZ1yaI`q-*]Wz*3{9EB}m,lEF#S3|<b5F0HZa{.;<dE-l(N^2Z&Tjvu6' );
define( 'SECURE_AUTH_KEY',  '1q=LT:3=&xfb,7Gza:Wp<6}.g=!?VJc9qEPg$?f:x:OtJE(biGzviS[Zn$bp,D(8' );
define( 'LOGGED_IN_KEY',    'so6= 9UXZ@d@R}-N{9xO;2b;iR[(q!=_Q0l:1^6nH-!n?V<D310^4*Cc_K5NcY?W' );
define( 'NONCE_KEY',        '-<3a8%=@q;_m[^WR,Wg(Pew^fE{f~y{:yjd0vG_F8SC OK)gc<OF5>k%iq/Tr^XD' );
define( 'AUTH_SALT',        'Cc]b5}n6j$ei8zTl:$8J91Hj1mJk3B&r|~$sI:d=ms2<R`T2|Kt6eVU|};=8!na0' );
define( 'SECURE_AUTH_SALT', 'sAS*`sX@0JW(ni{cud2ZW/lhI?OPEl|n~qhKPQDOb4O,-q#L]^IRB{7 yyoEqm)5' );
define( 'LOGGED_IN_SALT',   'K&@nxj n%0sEzyEiLpyhZ,)HhU(<+Q[Y-p3iJ)4?wMoPUuzjW)J@#]J>;7ldMR-:' );
define( 'NONCE_SALT',       '-+$XB_3|?i>c}^i}NfBNaPK#r!Qz}Wpc!~dmDdL!E$~@i]ztD:X[pFa>u~65)XP^' );

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
