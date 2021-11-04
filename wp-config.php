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
define( 'DB_NAME', 'wpcustom' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         '*E[&%%2w^D_oJ_ZO?/u@f#?B u|<y#V}CB|W7ATZp}VNLZHfHWPjA!:Yt!M]%}cC' );
define( 'SECURE_AUTH_KEY',  '$3n~f,,|cIh:>%vl4X4LUn&%/fg?Ke^U:=6u8>NFro93(=_-OBRjo/pxRfJ~>.(<' );
define( 'LOGGED_IN_KEY',    '{{/W-;[b!]eJ`QJ63L7LEQ.k.qb0vt$A!{ZkrfnbL2eG~;?gRoRri[6D?I*lAtoe' );
define( 'NONCE_KEY',        'D]9M=d0-%si^hT>)Zs WC]?S~Ty>?E gN.k(*k`^bvm}hgHx[wMt]d!xyMAs*W1<' );
define( 'AUTH_SALT',        '?{Lu+%m,Wg:XO1H_>uk*q(nG&i5+cAT3{e_(Zo-IW2|m~H~A%<G(FTx+c5g4z9.R' );
define( 'SECURE_AUTH_SALT', 'mI%fbZ*8B)|FZZ4<]G^si.1JDyBNE)45K$Mm7^dLaSs<GYQi}F@S2C? #d~KC_H:' );
define( 'LOGGED_IN_SALT',   ',81TsT25va0bA8V<1u!wG:]XA.&G=Rm7C^.a:_5Q:%+ljo=y^$pdbfh:-I^Tma<m' );
define( 'NONCE_SALT',       'g~rrZ9^{SKC+ua7xOvU_aB ^^L(M@G`u!{%dC7=>1aPqdRpO:w2q{J{?LEUvB!Kd' );

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
define( 'WP_DEBUG', true );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
