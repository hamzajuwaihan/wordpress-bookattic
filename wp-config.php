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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'bookattic' );

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
define( 'AUTH_KEY',         '*uJ-lf)JJQ8N1no8hP:W{:PTvD`(*;a]e+({b,hGco2q}`R0dWKJO9a)eDX^f5A6' );
define( 'SECURE_AUTH_KEY',  'YE-BkXRSgZG2s];_QDrX&],{JS8:Q&F)%@S@,fsV}+lqs?<nWj1cWjfvZW`%L8:w' );
define( 'LOGGED_IN_KEY',    '|~(%m>+A#_)Uuo8d00-kiiS [<i lO8Ctq1<|TCDg/D8JAh@9ot9d}kP0Qb7%OPW' );
define( 'NONCE_KEY',        'Y)YaW]?:me?:TtFJq8zvS3lpK<m@YDof,^mkUJ&QI=?v0rXHD<E0*Q;tn_+0V X.' );
define( 'AUTH_SALT',        'hio=i:&^~VEQfl]L,Fgb)irSR{o=>z]+/-P;Af>zZRMC8{nmGJ,(OB^7ZNKrZ5-~' );
define( 'SECURE_AUTH_SALT', 'T5.$d_7HHb&^V*qCRf{!70r0-gyWr;l}`({j.ebkIEVEy#V:Gn]})TPMF,NOv7~l' );
define( 'LOGGED_IN_SALT',   '*%XT+vG:8l:K;F8uRaB&_N<.>f)<Y373rDA+V#xCC6v{:LBR6tZ{GyJtGJ{nOvtI' );
define( 'NONCE_SALT',       'JG!R>Z3RZ8e/T;D0^mC(CG0n)3:.[4`>1m_.p3kx^yz-P!6<jBWT!V^@9@^Q3ouP' );

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
