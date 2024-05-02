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
define( 'DB_NAME', 'custom-theme-name' );

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
define( 'AUTH_KEY',         '(}SvEh!d{P#6+JJKFe^%$>OX59oXt/yrI|,z0Y+2yaWo6;|P`mn=nQQ$Cs-bJIT}' );
define( 'SECURE_AUTH_KEY',  '^33!KW<^_:~Tg2H>SiV9y#+7oq5,9C&<]ze/~PL(6%s=K#n<F(Yfx3>iX=89>#WF' );
define( 'LOGGED_IN_KEY',    '0x#.UC)pYk2$%;&myj]]r8G]^$s>f>5D&~+AKi)0PYc^sv&)t=bkl+M <ye-)9KI' );
define( 'NONCE_KEY',        '(K_AVdntLz~P=Zpot3xR`Dj;|0844m`iiQ-[.FmM&+W;(:G^3|D++l[|;J5[c6T,' );
define( 'AUTH_SALT',        'r_d_[8Y mPjn?TB%~$3f2dGw*>B_c}trV<{ZAvPnI}t3}LRhkz=IIx|WR^Y#0*][' );
define( 'SECURE_AUTH_SALT', 'yO%VEY2%xilolgepz ;E!>Dz~ISSlWFxfS,qCr5&ZAYc0dzSE-E~kY;Vbz_5>{XN' );
define( 'LOGGED_IN_SALT',   '<+5;#07h~=Z@f3xI*H0heZJ8rX8(A!!f6g2)`W#x=>tf6fn<a{:E.`aSELilT?#Q' );
define( 'NONCE_SALT',       'ydkh+aX!OR2nH7ANav9~F>_J=j{8[}eWnEYaubvVnc|t%Gw1~(ek^SQTJ_=oX:>7' );

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
