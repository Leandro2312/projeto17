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
define( 'DB_NAME', 'wordpress_site_ecommerce' );

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
define( 'AUTH_KEY',         '[8_{HB0OwRDrnIL?t{Z{gBjS&-HYA5S5%oiZHFq`<[7d+Of)f2<u/}c9[t(vekzV' );
define( 'SECURE_AUTH_KEY',  '},@Z7&Wv|A4GCcj^f?mx@4ZQ%TU}HZbvMpd(_X~T?1F[9KW_ets!5vV@btu-A^&y' );
define( 'LOGGED_IN_KEY',    '%gC~P^;Gp-90!HD#)>8,3t1.m[kO6`}YFbbxrzJP*m.kJMI|.?F$LQ0W9PaPnr_z' );
define( 'NONCE_KEY',        'j%8CFIT D,]iVRK1]{Gb=xD>K>sxH3HF<I*q!e[d;o,:)%% L`Qmk~:ko8f*+=!Z' );
define( 'AUTH_SALT',        '$UX+NAW MEcgN5ClFp]M9Wlzl{i|rfg<tndRWer2cE0E7hq]QCvx^OTK9}roGp=1' );
define( 'SECURE_AUTH_SALT', 'WeCjTO mXsA^#k3w+nVw21iJ#O,ALy2?L<vU^Zs4/s$Qz=}[&b{&7C[+Hl|EdF9i' );
define( 'LOGGED_IN_SALT',   'fsjrg{:>:T<=&Xi?[00CGGKrXoU-V%OH.eksXW16r9wRS@<5^fu@3U|ElYhu#Myq' );
define( 'NONCE_SALT',       ';h:_#=n~MfNRd#E[RW-$0E<`}=lON_:XQS .#i3]Y/a$JMJtx0eG[gU}.BP[kE|6' );

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
