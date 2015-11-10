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
define('DB_NAME', 'db600106881');

/** MySQL database username */
define('DB_USER', 'dbo600106881');

/** MySQL database password */
define('DB_PASSWORD', 'c4RoL_r3yEs_b3l4Rd0');

/** MySQL hostname */
define('DB_HOST', 'db600106881.db.1and1.com');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '_57NO,c*<.[? |dZvp?LCW[/jMaXI=W _kP >[#r!|j0jGIZ:{6~:Q@j|XK]}gg2');
define('SECURE_AUTH_KEY',  'v/-~Eqy;uIZ;/L}CH8. P;<xc&BvWW`@&(KL=;+QhBN1$]Dvb)BUFRb<}A(|whmM');
define('LOGGED_IN_KEY',    'F(u*f^Z?N^Ox$1!M8PS3!PLc,WJ+hy;!n-Z6d;=3<j~Gi?FX_pt%hI&|[I.cbaH@');
define('NONCE_KEY',        '|pHte#f~CSUC=!,hZG8&]Cq[$-xq9RP~tCMwztRb8%w8>Z+DnfGJQ!Z1GirQSj3f');
define('AUTH_SALT',        ',v@IMf]N)zxUPZ|$+Iu8d[6rWvNrCGk`F&%{hU8C5#nIZ;y<rW=+O|u|[9Z7D*/A');
define('SECURE_AUTH_SALT', 'DxNRRtJCzb0xR2G.[!TXE }~BN>C-uK0bo4W1^6SI<dbhirptAM-ZLk]MV-.|nh6');
define('LOGGED_IN_SALT',   'Z8>E6SH0!PU9!%wkXpzX7V+7+^pJ3bY t|%Wr(jHV=trsF}kgr];,#9>h`M &~2Y');
define('NONCE_SALT',       'q@*R(&wD>C3|LE[Z_8.Zb`fUBiVeOx#MZm#wU+*~=6j=|a7_m>r]Yy9GjPF:$ oi');


/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wpress_';

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
