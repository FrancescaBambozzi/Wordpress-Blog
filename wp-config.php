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
define('DB_NAME', 'yypksxyy_wordpress-blog');

/** MySQL database username */
define('DB_USER', 'yypksxyy_francesca-wordpress');

/** MySQL database password */
define('DB_PASSWORD', 'paperella123456789!');

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
define('AUTH_KEY',         'zdQ4Z5Tao*P;BWv4g[#Z?lDcox9JIe]IrDiz7}O=B`$B#K<P]C6kh~IfBO4r4qE}');
define('SECURE_AUTH_KEY',  'W:rU]J : `~nYS^Sd@nDr=.z>(aWaU[CQ8Y!?!5UQUD!}-of}7G?7ll%qAl~_32l');
define('LOGGED_IN_KEY',    '3?dZd@06,.aHO~<e_bk~SL6)v -j-!@7FkR)xotpP1Lp05ncY4oj@Ll4_ZlBYoY3');
define('NONCE_KEY',        '>5O_P-meYI*BsQ>ii`2)b~ 2dG&A6(NP5i23o,b&gVzt[zYBN&)(@0$,VM9:W;t8');
define('AUTH_SALT',        '9WycY%vP-~@a83DMgA%+p3hY-vV-,^ocAi /{+}b,8JYsZE/SOtO2G8:,>,7.(;n');
define('SECURE_AUTH_SALT', 'H7gPI?5k5WOCnLN5.jK7d8e+0@(Jt-+zMQ}i|YLP;4z4XSD.n2{VX}.WV:r&:ZZj');
define('LOGGED_IN_SALT',   'aqez_ew32]CN.b&*Mt&4oVJ?5hu]14~Uz/V0yhVdg;/CD?7}snkTf^]$S=KpZE8i');
define('NONCE_SALT',       'w>1ch/Dh-{35,f5;{$~LFA/YjX}F_=u1bJntKues?9qx*qwz}_`svjwe.%zG#.nM');

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
