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
define('DB_NAME', 'psychologist');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'D?Xl[?,JOE[{PlQ1*{z~UyZ5`+eQcE%TG2:XP%[Bg}t.Oz}[((208!awGH>GnOfT');
define('SECURE_AUTH_KEY',  'IRz7aVRaC-E{Un3F+d2o}yG/D(R|vunIcHHH m[B|mhgs7>xeq$lA]Id9:]~*7Wu');
define('LOGGED_IN_KEY',    '70wB#dF: x<mZsq>dlV2/o`BuHE)95_`xdcW!%S:7TY<T^!@1rJrb#I8axv-QG~k');
define('NONCE_KEY',        'uFDWtZ@YkN.GG;tNp<Yv78;ZEX7[MdRPjh=j {$9k`k&yz2!i:t9o9D/PaSIvZNv');
define('AUTH_SALT',        'cVE5g*PI!cwy4bX2gE{$4u%$E*e8c-~z&h`lJ0z1XGtz;PwMOJ(R *40k._y@K=H');
define('SECURE_AUTH_SALT', '0(M|$`h)tRUJ %?1N:{Eu)}43&c;4i,sl4Cb@SQYJ2;YdZ5LD4]XT!x@%AR]D23P');
define('LOGGED_IN_SALT',   'DeIb@4nB,Xf^#(Y-ztcntn4q<Oa7t0lZ`+DzXm=E!Ub:dGgeob+,0ORBefj`Dr#+');
define('NONCE_SALT',       'y}1H@-#r%+7@2A^qI`!,2^09&mJ~hS*$gUNQZRY}saA6tpCXfR82:V3Q5Rrmy~b.');

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
