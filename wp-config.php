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
define( 'DB_NAME', 'video' );
/** MySQL database username */
define( 'DB_USER', 'root' );
/** MySQL database password */
define( 'DB_PASSWORD', '' );
/** MySQL hostname */
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
define( 'AUTH_KEY',         '53y&`g1i.ij&=,Z5[D&kUT_eK1UH6DRj=8wm;iewJ7R.`{atdfrUBGeb@IoDFjew' );
define( 'SECURE_AUTH_KEY',  'V;k4N!6XvcrT,dkk@$%+H#XBH}e+wQT:|fBguU[~U}{/EqQPxHBhaD*F@zFQphb)' );
define( 'LOGGED_IN_KEY',    '|*3zkEn+@3C68x8{iE8%b1B0to]V=m/dF/:(Lbt2%1jMW$Yg>H7^|n/M;ChHpCXH' );
define( 'NONCE_KEY',        'GUSSaOV+fbW0ti1AF7hyw.>H.=h#RM`{.UTOf*{^GfdS<lCYS2ZI-}cOhlc9>@f=' );
define( 'AUTH_SALT',        'pOS5U+Vm`id*CGyT-KvlxjJbsfJo5Q+SlRd>/vy0woVIlIMD!WS1K9s.j1q)?OMV' );
define( 'SECURE_AUTH_SALT', 'U=jH)*}5SPHtt#Zb>J)8jm7=H^0h@c<]+~$8DWXN#Gd|*JQk@+5ca%uT6!AF=Okl' );
define( 'LOGGED_IN_SALT',   ')>0?8_KuB,jkl[qiU%aS6hH5C+j]^&Z1|;}Iv>*.Ka<!1hEP&[-BzTR1,U52As(P' );
define( 'NONCE_SALT',       '5zP4bY|)2kCFb(;W|sl2G}DqJ5w*r@8OIHJW)A-T2ll~$&Ko=<,+@zAGt;i/!6B?' );
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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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