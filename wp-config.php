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
define( 'AUTH_KEY',         ')g}l$N%LfyKDx]cq]$x~4yyb](RKw(A{/W{wy}29u55WjD&]};RCrZ,8C:FQSpXN' );
define( 'SECURE_AUTH_KEY',  'ez `a>MD-QXSk.87j!ppR%wYW6$HP0ukv]:F2j0^+XzTTIsqZpL<-=:Qn{<]l|;B' );
define( 'LOGGED_IN_KEY',    '8t0]PdmMSDqtG/0wN{G,krREA?[a@D`%GGJ?kFCURi%IOl{Drjp.~acJ};+^Fp5!' );
define( 'NONCE_KEY',        '^8{Iw]aB(rofW:c5NmG(e6SUD$(#_w+QGLZ,s!2]7H<w!3h9P?[Hg)H5Y- ZN<_U' );
define( 'AUTH_SALT',        '~0O30| SB<u-^el($id9=XZeP5PNh1b0?Y!]}aFS.V/%APaks;qRXKSbLeig%,@p' );
define( 'SECURE_AUTH_SALT', 'C9w2~g AC-XCTZ5k&aI=%XVqIgVKry9U6ou IG1>Ko3`U=PGv-o{W?$P%~D!=X,,' );
define( 'LOGGED_IN_SALT',   '>f#` ?l/2Mjk<([s.u6[qV^:,v`eb*(:<$&y`N0UgK;ZiUDLb,r/143AX4$LgQ1B' );
define( 'NONCE_SALT',       'Vv9> ycJ<X,t-OL{$7JJ)SIe26j!YzVbz9=FOPN_)t|9FHn9DT8I{KD5C:t:>3?>' );

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
