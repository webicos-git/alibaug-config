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
define( 'DB_NAME', 'wp_aws' );

/** Database username */
define( 'DB_USER', 'wp' );

/** Database password */
define( 'DB_PASSWORD', 'admin' );

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
define( 'AUTH_KEY',         '9j)crReeP#^fh*@2mmy;>QSH_xYVW~d+QC,$Z,zh8f9 HL%:_Rqw}0+3wRBN,w.|' );
define( 'SECURE_AUTH_KEY',  '^|rWI54p!yVcVK}l^CG;.L=X$5bvQ.fgtStGdi&&M6(>KJu77 4q|I&L=$se%{]l' );
define( 'LOGGED_IN_KEY',    '%AAxsbrh}zUMZD:3}UnF#-cg[k$rF).%gAIQa@y{M/ ?emlt$[0)S*B4]@n%BCOT' );
define( 'NONCE_KEY',        '&-{;si_coNN1CssoG=C[6B;(w}fVsu/N*H%&etsC(S)w?oTQ)aSz/nF&Qe}isf*4' );
define( 'AUTH_SALT',        'm7bEY[`F^7MCnzQqi~P[Ywi|<0%L0sCWLV&k(:`0~*|DKxe;$RZWvyIqX?o;-(<#' );
define( 'SECURE_AUTH_SALT', 'Dr/Zoh$6+J68STa,S7HFO(i<{0oQ C{]>3:wlJ*7n313gztYbfJMBY>vIPGaP51?' );
define( 'LOGGED_IN_SALT',   'LbDQB`BmZ_gX#Iln1h.F(U_x(J7J$OAtJbO#:1XV|fS8HVb=c^b6Ca(Rr 5EYW/:' );
define( 'NONCE_SALT',       '?{iV|rtx{fT38`eG|/5]+8=gZD2I}.4r&Kuoh5n;2ep?[b?,H,&m?7 mG9O8BC7R' );

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
