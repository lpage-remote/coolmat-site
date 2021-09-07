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
define( 'DB_NAME', getenv('MYSQL_DATABASE') ?: 'test' );

/** MySQL database username */
define( 'DB_USER',getenv('MYSQL_USER') ?: 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', getenv('MYSQL_PASSWORD') ?:'root' );

/** MySQL hostname */
define( 'DB_HOST', getenv('MYSQL_HOST') ?:'localhost' );

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
define( 'AUTH_KEY', getenv('AUTH_KEY') ?:      'V1%D7 gbXeu;jaHx*@]$H*T}0R ViEX<|1o-x*N3`C%M=R#XrC=dVB>:b0K#.!Sl' );
define( 'SECURE_AUTH_KEY', getenv('SECURE_AUTH_KEY') ?: 'UDK14VYKn|!mtGBl#wDKI:6kX=/eKDn;yGECrs[S,(Jv!4RIKR n(Y khSH=6v-B' );
define( 'LOGGED_IN_KEY', getenv('LOGGED_IN_KEY') ?:  'q?,-^og]Y*)Lh9[0ig Im&tJ]fA:GrJ::yls;7fj;S]WI8W|?zqO*2^V[zjl>HO3' );
define( 'NONCE_KEY', getenv('NONCE_KEY') ?:    'TPF?t/;8bN`Ru:@t2Fa|LnN<c,!ScLz(mN}C2WE*lLP1W.r<kK/eI>G$3G/<sl/T' );
define( 'AUTH_SALT', getenv('AUTH_SALT') ?:       '#wMuW~yQw?gKgRY$k6V TkyVut%MM]/-By*eeoO}X47JH|mfqK>F ?kti)TAsj@w' );
define( 'SECURE_AUTH_SALT', getenv('SECURE_AUTH_SALT') ?:'kJRFLcPK?Qxc_._T}X+VuDawG_UkaP7nAR(7cBO/gQI[5]gj*Jamn4nY&ZC{~/3E' );
define( 'LOGGED_IN_SALT', getenv('LOGGED_IN_SALT') ?:  'j.^j0Ko5ns,_KW.T?!LwQ*E=6^QZMdPTew*DVZ~@,WH>H9 to`R!;cN;9 %cP|J%' );
define( 'NONCE_SALT', getenv('NONCE_SALT') ?:   '67^N50< .WskA]2v#Kg,)}~O.a!v,b![ vZB]BwA~UN9XlKhTou?JlOxT>_odt05' );

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
