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
define('DB_NAME', 'halasat');

/** MySQL database username */
define('DB_USER', 'reetesh@demo12.m');

/** MySQL database password */
define('DB_PASSWORD', '321Reetesh@');

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
define('AUTH_KEY',         '_=2G/AnnikNo@F+T[F)=V([iO*e}DIX=PE @Z.)X-n7<4r`+#a,;dH`oz@.Ltvwg');
define('SECURE_AUTH_KEY',  '-t|WO1G&h5, TQ-s~=8 CUly5>e@;FY9e9,*)aW?qr5yO;Di$E$X19zJ4FE00)<G');
define('LOGGED_IN_KEY',    'xV:J!!9[p99P&Hb}ysExMZ_ z&*R][JW|I5yH9q 97H#)ljNPZ?8u1<e1N@vkqL{');
define('NONCE_KEY',        'QaQS*-yov[e/w<J4fEg4YYUSI{+HcajVylQ/08ONTP=1&}HL@D2}If|)<b$i!{F>');
define('AUTH_SALT',        '>dxU(Cn~oEbuWgW/S?2$?:j2:%cI:Hv8f8l:q$%6yjSC~QnZG,I6+03w)cI2=Fid');
define('SECURE_AUTH_SALT', 'X>!l$&Gw&Jb*t/Xh%I[[P3J.Wwwou!Ol:NZ[9lV,9^+YFw80`85c,1WSISTf}$sX');
define('LOGGED_IN_SALT',   'xt@X0.:z=0fWbYRQ<70:HLtB@/MKA4sV2w/Q=On^zvz6&Zx/]%a&Z~k#PMEF^;o{');
define('NONCE_SALT',       '=<<**e9oI%7a?IW<K-yWVoSkKS]=djln yK8gV:(,PUVkDSt2<H/gKaF+v4ITWA^');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_admin';

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
