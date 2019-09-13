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
define( 'AUTH_KEY',         'W 0E]s,!Ekco(ryAhKb-EK8=w6H/c;C*NO+**IWz<gVUK^t5cTWiGC^a-.{!%ROt' );
define( 'SECURE_AUTH_KEY',  '3L]A.+?dEAzA`>xls>Y}hX>~EGEJhA{9:l~.>VD|~H1Z{wt[hH/><~w&$eL?M78F' );
define( 'LOGGED_IN_KEY',    '%5P*+ZZNhk0&{%F<N5m}laS@]_K%dz[u(f)v=M-?z9ExxMh4Ds|Y$rt7ZV]kF#Q^' );
define( 'NONCE_KEY',        't0l%=fNGzy7]r%U$GkOCO.4I: NXAd@?kQ? {`<c1H$>|JypE+LX$:eu^{[bh`|.' );
define( 'AUTH_SALT',        'RC@)pv_qg2si0#U?w_Q?^8yA?17H-|^YN_R:a1!`4K&kVF6F-Z1g #d?A)*K8P~~' );
define( 'SECURE_AUTH_SALT', 'ZKk}qJd%<ctz?)WQ&2L%:ezbM.$|Ndf=$h]^}(2MO6vk!@msTn8iJ0D6+V5_5Doh' );
define( 'LOGGED_IN_SALT',   'N8w{P5wiHVhc@M @M%$ypa7ZzFFt(34;rbH^g&aMgWkjh9dQgO(r0$hSxrU$$Tgz' );
define( 'NONCE_SALT',       '7<4v%;IIs%s,!OYZ~O/~t-l.Wuv-ODE[Q4KFMQ`Gf~Y_cwYgd:i/V6NS8!`+(Sw#' );

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
