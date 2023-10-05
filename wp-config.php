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
define( 'DB_NAME', 'portfolio_db' );

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
define( 'AUTH_KEY',         ';5>2<Ek3(HA2J=^phIpQTNUk </G!.~Ongc{&mL?2N0)J3^uy@IQP+#7z6AB88&e' );
define( 'SECURE_AUTH_KEY',  '(q5au[c$!ZF~*SP1Ye`&vJD RI6PJcgOFBkbw:yal>=j6.X=~.<*6YMiho.!lu%]' );
define( 'LOGGED_IN_KEY',    'YqJ`?|RR#t}(1{p891-qM9W[4~-wuckU9.34 ~P1DV.t}h+ZuTiHSEp]tF$1G*q$' );
define( 'NONCE_KEY',        'BNo(q#Hn]G.(>8R11DL%e(^#0{<eF(Y)$LkWJ9u0.1IXtPf=,$o}9/<F*E|_eba}' );
define( 'AUTH_SALT',        'c}p1Bb> Q%U:Q,6PkDca}g)=r8`=Q2&1d*] !df&7D&:u%Y7C6W*z;[T/7<^XgH*' );
define( 'SECURE_AUTH_SALT', 'uL)9C?-#T=kt3dB~mk~5Dc6(S3r/6zm`u).VWx%Qh<ky=$A40Zq::|+rSo3`|19x' );
define( 'LOGGED_IN_SALT',   'M2%9E|h|? s@=9k?n8%whPNi`1O~@UEXg6QqzC0vVq]1VWc1;x^&LGGva^EJ7W>2' );
define( 'NONCE_SALT',       'UMiMA:>M~;,8B<$y5^:{Uu3C8?*k1>Kt-8N:85612?:~N]Ql0PIFF&FvCyk[HA<^' );

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
