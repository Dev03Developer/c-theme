<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
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
define( 'DB_NAME', 'c-theme' );

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
define( 'AUTH_KEY',         'pTaZO~YNTkbIelj4 yb2m-,pWb]BZImUH}aPSA*m,$N1Z-e`1*@Wogl2j>lcOV9Z' );
define( 'SECURE_AUTH_KEY',  'c)-J?RqFrjcs:y[^>~A#_vr8qsnZ=U3%>gBM#rm@dMlezy@wtffK;i.l8*Id3D(w' );
define( 'LOGGED_IN_KEY',    '6j9XO(_?:/9[Xzbu=mO+MBHbu!7t;xl~,$#mam#htD:Jb;8PqSm~sqP%?qG;o7fP' );
define( 'NONCE_KEY',        'd`-ZnsvfG-:nKctPD ^w`yW]GZ)h&,mOXFk.XS1Zvv9Cizc]ui$~{|RxJ2t%E_Hb' );
define( 'AUTH_SALT',        'V_x~|YhgGFc5f2n?ISj0,.XcK+l<eXKWZzKzDbO dzC`0%3efWbw8mK UQL(%?^V' );
define( 'SECURE_AUTH_SALT', 'w9@_[|A|GhC?4j%5d;vbANGB^R|,:pZTN9>)!M]#dp/w msnM+tmrOGM&sa;&*;o' );
define( 'LOGGED_IN_SALT',   'F.6.r!^GrX0WbFD5.0)54=`#)qCTZ24+MFA0`,=%O{[BgF l!t|::K7EfE$F=s^:' );
define( 'NONCE_SALT',       'hqT/XG$3iSz`2]#7kqVS,e7>>/_V`)FhLUkyJ[m!KPslt4>ar`GF{pC=4[d4fw}z' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'devn_';

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
