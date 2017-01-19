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
define('DB_NAME', 'Tricia_freelance');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         '=;}9Nd^Ps_TQmj$<C.a);1c9sGX@KsT@UZ&v5kvtfoj]r(L3+&VS[rq0^[) 8JdF');
define('SECURE_AUTH_KEY',  'XNCyFD&2KL.8m?Ef.A3L(CVLg_(Xbc>~mo=!+3OVPFZ19Gg`^&?]iA);HRBIdHxP');
define('LOGGED_IN_KEY',    '9eyd>)ad&+X,r6EwBED)J=fJkKj!3EUs(^A=9sqId)7^?1 o`1V_nz/3k:m;4wJc');
define('NONCE_KEY',        '8Q/FXk]`$f/RZHkI~zv?wQX=}1EY:SHbX0RpW+8bJducOQEm%pgC~0Y6xHrEdm[@');
define('AUTH_SALT',        'z/-Z82yE031|NZj0$B9Jo/hEQa7i)oWxVS3x&s51_rz2ujaJg kfOZ9[dUQdrnqD');
define('SECURE_AUTH_SALT', '/a=Ui1Vpx1UW&<H@8=PMDfmVxO<[JcN[<L~v+{^,B1#4b*GrakTQpGO-l$#,l;Ro');
define('LOGGED_IN_SALT',   'V~??c$(&!*VY~[Zz|PM23=v}DbM3oSXD][SZRVA~u5mB=N!rWK&`z~mJ:}bvZ7/+');
define('NONCE_SALT',       '4YBYfh2DE3RO^Yx4?VWR+uAPzvo f1J>GML&l7o7rf/4euT6J{Hxr}E@s-}s+5b ');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
