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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'iUhM_#Hz#MP 1tk$]Y*sq w2gI?s/4S9L5QN.$yH=~E+#[bH4%x* yogH*VYMw0p' );
define( 'SECURE_AUTH_KEY',  'R_mjP*B2`,aaJa~5bz(T)iWqq/NW{5}kZo$Tc>R^vf;k[nM~RbCfhc6[&+)6Y xs' );
define( 'LOGGED_IN_KEY',    '-x6_EPDKu,%#fkok$=!.W~ZaE8JCz[7.AlOhQ3E~e ]3A6;Z]qZuXjNktCl$c<%>' );
define( 'NONCE_KEY',        'aJ0$Hl6;L-4haZv, u{%(7rAO{fMCu FZ_ -/xoc:Ki<e%Vk[ns%j;#oGza3(@P[' );
define( 'AUTH_SALT',        '{:o#+<J>u`APHLpg1Pl~P?Yo:0/& r9{8S<`{ezsui/6jc|rJg3b&aA`5.W?h[>c' );
define( 'SECURE_AUTH_SALT', '/M-7D&yzY44kOpb},%q>?35ugnr;2sJBMp?=mV/=:=Eube~}BQ,XE]X1-`L4=uI~' );
define( 'LOGGED_IN_SALT',   '9|`(8vCLa>Sv+D]4v=2Y`8w]&9kO,lvl7<k<3?yz&WrsVTpS7&iz=b6/f7V$^T0E' );
define( 'NONCE_SALT',       'v[~Zh*CpuTJj|aXz)+S,K@ca:`gJrIN9mC4B!%2A,4TQtQskwif`esm6H#iaXg>r' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
