<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'vm-academy');

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
define('AUTH_KEY',         'qMtg|Ty:ml]wo%[*cS`38.+DvbbW]:PLcMN=au`|xSKR:tzfsKIKO`+<q|hY!_/v');
define('SECURE_AUTH_KEY',  'T1iIex| 8:{-Q;6&rZC/ @XIc+N 8YXe)-m%]@Wei08xm{<EW_mMrJJ4)&+2M*-D');
define('LOGGED_IN_KEY',    '$N5D|485oddJ4[x4?nhV7QG/YE}yREbbL;58|We5[0)V+5<zHY2[Y$&*T5-z(7<!');
define('NONCE_KEY',        '|Bx1[*f1Z1oynYm#D/+Y0=Y0;OnR}Sy-Ut|-D]F7?w-{-8bAEr;yv4i$VLi$hMO}');
define('AUTH_SALT',        '2Soe5POH[-<|/{|y%EL7He&eZdz]6os=oXPt x)6(nwJ:/2Z1uNjN+N1k*bna0zz');
define('SECURE_AUTH_SALT', '(H+tQu>MUn,-gDCN%jm/15 YlkB8 f1kM<]Qfgee5vMF:,ww~j-l!sYHq%@$x^x1');
define('LOGGED_IN_SALT',   '-G|]t|C2Oy S.EHf?EwZpEz@aM`fCHxK3iv5%dc<L#Mc38Q{<G->r-k- X&l38`n');
define('NONCE_SALT',       '{o*ni(.|-RJX&xTCxd-0*.l@k.6m{c%<>]]QjMCxi[9~mk)Gp=_`B=Kb#2DToqZ8');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
