<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'LocalBar');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         '4plMO7fd@ ]hQD/.^x=OFx3uEI_/7sXlZY[de.hv(>+%Wcc{AB0c*$@e:ZMLS5xu');
define('SECURE_AUTH_KEY',  '**8fd[#rVy~H~!]y8.3jVn!EE6K}GZ8J,@fu>~PH&dTmSE-17n]QKL_A<`l)7%7?');
define('LOGGED_IN_KEY',    'IgFJrh7dG}}s]u7E_hO$O# y5XvgT!J~s;eg/<J^i>?vub/COR@c1n=.`+xA4v`(');
define('NONCE_KEY',        'o9uGsT;:mk t`#PE>;cj@`x051UgU2S}s]A_WE}OkJeB=Xu[,6]R|L0^u|G{^bCt');
define('AUTH_SALT',        'a2#_)7tAGI|>+sC1=xg6$=/#b(L-[EH,s{|$!l@<oCSd0|jLy8MoO35JTS:-CpoR');
define('SECURE_AUTH_SALT', '0FAAKrYd9[}V&#hp6=Riq{0iD~:4-WU_Vv;ibz{{+(Uev~^N1pi&`^TCyUnSNgw;');
define('LOGGED_IN_SALT',   '0OLb;ir&[<a*RD@*pRZW@3C#0{j%h9&oW.-6BBh*kcI`}BJC6j)G|B{j_W.m<zSE');
define('NONCE_SALT',       'O.P+mhz3nUy_Cy?Bv`H uY?B}{L_PZ3GaF>:a8Jfq8::idcH3l(G4.!wh/Repw;@');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'bar_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
