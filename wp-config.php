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
define( 'DB_NAME', 'niagahoster-wordpress' );

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
define( 'AUTH_KEY',         'F8N8ImKf}1T0bft<fH7XaM^FS>(hdyIHJa>?SS?d@hV}%S/KDtGZJB|_J~mkSm)R' );
define( 'SECURE_AUTH_KEY',  'cD@X$+7)*&T/O_9LWJ:jis/{3u#thrJ ~rn|_az+9)7lv44CnXaEvzg458SVbxh%' );
define( 'LOGGED_IN_KEY',    '%1$u<PSB$q*YoSC}lb?}[X94>WjrLvFc^qRK9{$bo91$4s3~99Oa[UtFzkFXeASo' );
define( 'NONCE_KEY',        'Z@,=d}/kj:NB<ilGaD@z6By4;i-F6YJ,GHJ4H(|&Ns][GW#@0nwcWreu4,pOaw^`' );
define( 'AUTH_SALT',        'f8bp_3se$8n64;5sfCeH:k3#@6+^33LeQR~8|Oj}~PNhe(b!snxTz!R[j=sDU# }' );
define( 'SECURE_AUTH_SALT', 'n#Z`R`sEj9T;{t)&F;$14JhP|+<I2:?n(f,O2~Aw<K@gFmT:SD3{2mVx</uwK^_R' );
define( 'LOGGED_IN_SALT',   'GkyM1Mkc];*(co9rYNABL|<EwG67t8vGM$GMYk+0>4OS8Ui&!B<6%*|}eG4~0E`1' );
define( 'NONCE_SALT',       '=bBtg27KakLZdokF;_zG,w~^Up{C~IZ;!HU?5j;;)GQ%;RMMQ,M1!zTZ{ff#(Bn:' );

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
