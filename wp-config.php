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
define( 'DB_NAME', 'editinside' );

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
define( 'AUTH_KEY',         'avk*Eqw*jEx#8p~rWO<mmRfjCu2#]#?3m!/w]($N#>u,!yY#JmeIbK;}/$8UW<QT' );
define( 'SECURE_AUTH_KEY',  '#IHu>[:lu4#ex-5eLo!m&zY P`(:l7C.wwRnd |r21z,#4gK@%9c<,(u|tx[zgaj' );
define( 'LOGGED_IN_KEY',    '+@{uV4p@4#tI>9|(RHNN{X; }WNvbVRZEF ?i*<<-fpa8lL7G_#U1K0>%lFLbyPm' );
define( 'NONCE_KEY',        'iJ}[-Brit92]bxxTXMILxl_^zm2|x%[3IflYnWNyQv2aY>V(%K3i@7iYu~Of[1}V' );
define( 'AUTH_SALT',        'UhN8 `vYK+H.JN(1A_(>I[/`DT n`7wE?!K|_1UthiWF*j}r2;qz5.eI`@+R~$tK' );
define( 'SECURE_AUTH_SALT', '(HB-7{p1ERM@C45zf,yw~qAP_:<n2U|l_70b_6MB[[Vj:q|c64K|Ocsi.1>YA(?C' );
define( 'LOGGED_IN_SALT',   '$k1]kTJ8@+V;D<8L-qy)s.~=yVFagSbKW4HF`$U>hMd1_j6^=OTlvd*tUB|~}6a/' );
define( 'NONCE_SALT',       '.xJH=q[[H5GXDfiU5Z^43YA@_d00F6f}X!x h:k19&r4{uCq}w_Ds%7glpLW>IY.' );

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
