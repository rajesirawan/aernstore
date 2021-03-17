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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'website' );

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
define( 'AUTH_KEY',         '(C|p1nt=AeD1&Aye7B>`0l$yEt>omUSlf{_l?_$ne%O?,;yqAb^klZV3Rw)tL5wt' );
define( 'SECURE_AUTH_KEY',  '%=!!c):L8]Q} L^XZMD|KZNm${T}0gA4s@oZGko<gcA!uMZ=a9<cZ[QiOw0,CU!L' );
define( 'LOGGED_IN_KEY',    'DmbBHt$M4$_0?g$ig%%Ht0h}d/;OL;XOx;G{^BKU|^@ASAu*QCJV`uz-ORT-)0?[' );
define( 'NONCE_KEY',        'LhoP{3K]VeOWkp`i67dp-LH)e`VI)=?tb,)D08xwxK=[HdL#Ff|CKq!ov~R^dxgP' );
define( 'AUTH_SALT',        ':Z4NUkOovzm):bau}h!~wc*`; i>oP5bzR99D$!5~Nz4{CVOmbW@`-H]mB3Th/,f' );
define( 'SECURE_AUTH_SALT', 'zI&,E{aic1*m_@630cK*-25K&7+.aB6g(OT)^{VZgZ4fPo]$u-cwY5qQ9([$0r?%' );
define( 'LOGGED_IN_SALT',   'i(g;i6~>Ys}@0Nh/lzi6wx#;H>M-+=}qQ;(>58m~U#3QzvUxRQ-s0Sp_1cH1{v^%' );
define( 'NONCE_SALT',       '}_TZ{x,uN1jJ!!u3p^ 4:FY<K=2]@/K,-<|3FqYeYnDRKVKI@gWWFxdRd{[-{T]C' );

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
