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
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
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
define( 'AUTH_KEY',         '%`I81zgwikm  =l%[[`*wKc[+F.%R*;k/,==M`Bw cqWDKT/!N~5uqa@QBwvNF9k' );
define( 'SECURE_AUTH_KEY',  'zcwZ=ri<hm1nJLj?~(9PnpPD[?NycHT:E!]3C47`G,CAa-rJn^T|#WQ#V8vN:.L@' );
define( 'LOGGED_IN_KEY',    'PZbAb kl`7#s3d}UU[W|$1@f|IyH]YH2itpicE<=_{opZGN5-E>f869!l%l:Pf>>' );
define( 'NONCE_KEY',        '&7X-hru})5~;Tof.,U<q./aoZbLF4p_<#tH{M%b.Q:e8pl-gG^B:E)aGh%uSVlN/' );
define( 'AUTH_SALT',        'B2X:e^^nHa.n^l!E aEREFL_.}v#g|:IV.XUHWxTRxrrP?cE;!3<A4PF,lxsB%V|' );
define( 'SECURE_AUTH_SALT', 'y{w={A4_Ibeeo1&9f[ZaxjlCfD<vt}Knop9GpSWIKOyPUT`krqsy52}jg_~Lk<#@' );
define( 'LOGGED_IN_SALT',   'Z IUj15<VD-ScSzrd:<PT)JF8Q}7SZUSS97D7kD~F|[Pw7uOUsM2EIfecI?8!X}E' );
define( 'NONCE_SALT',       'B^e>0)#/Eue04M0B/4[TDe)6i>8HrHrG/D(u~odH0>sY|EY6WVNR-mRknANU)BLL' );

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
