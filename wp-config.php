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
define( 'DB_NAME', 'wordpress_9' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost:3306' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );
define('WP_HOME', 'http://host-1');
define('WP_SITEURL', 'http://host-1');

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
define( 'AUTH_KEY',         '8C=$235>mZ&nP[9Fg-!1sp$]ral6EpVEM0OOa^EG99~&%h_KvvG=Tzb{_r/]Yo,n' );
define( 'SECURE_AUTH_KEY',  '?sn&xpxnc~/@H,d`g/YQFVjc5F,M|GpQhfL<@s&-%+25tO}=}i&;t7Qv;{fOt>X,' );
define( 'LOGGED_IN_KEY',    '?^z`fVE_l-P#S^OOHGRD3=W z9Of62GM]=x+W bGj^}Z`zZVm&r10*#sZo16uaWx' );
define( 'NONCE_KEY',        '8qA7D;^8lsIhfr@vh!6)28mN=m2VbvQq:S5x,77(NJJ0f8yLOmK*]gUk ^5&lU-]' );
define( 'AUTH_SALT',        '^lEU`/dv<};ve@]d+A7o1;zt8B_g!-XU649bTKPSAV_o^CPnwl+nI@.?&m%Ev9Q)' );
define( 'SECURE_AUTH_SALT', '*X[o>+V^v*LQ?e4lAuHF1>to1i4a4HRYhQKVQKvS=kq*gr_H>P|ewTT)m$d>1T +' );
define( 'LOGGED_IN_SALT',   'HS#kv=jR+vmyx%Iq0wtVw$S;b{5S0K6ztHCxDW+Y`r:F]Tz[5]-:~eI~WbH]km-x' );
define( 'NONCE_SALT',       'yY8$U+nN).!T<1Pu))|}*OR-??<6z!,.,YU12:j;30o]-$Uj7tJ3Ds3RW3<~bbc2' );

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
