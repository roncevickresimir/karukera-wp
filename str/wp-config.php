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
define( 'DB_NAME', 'str' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', '' );

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
define( 'AUTH_KEY',         '?(ewyS]8Xvj1Yh[vW?J}m-5h-xy*,dizwtuc@mM.yLslucNELrS;&*?5no#|Iiez' );
define( 'SECURE_AUTH_KEY',  'Eu4b]8Cttnz,tg(j`o^`NkmNKS&N(!wiU(T>2%OK*Pw*k4/I6v]F>>h@O~ s?8aY' );
define( 'LOGGED_IN_KEY',    'L.|bu`;)Tv337~ThV],#DZd8Br0)|[ogR}ix~^P$.oK?DmD04uK}mIq~_N6ff? m' );
define( 'NONCE_KEY',        '=ef8FhwIM0~wsjfxPdBnn|F%92~Sl-!4P2]>]{*g% c.6hV$%(2d;>/v4ntqjC3-' );
define( 'AUTH_SALT',        '[wt8kJ2g[C^9?9AsP}L<@2Q8HIZ/)/zZsF^J/O!oq]oA5Yqym:e,v;k~]]^14}/&' );
define( 'SECURE_AUTH_SALT', 'X}|l4H,-H/mNtXm&)!}IlDA[waW;@W@zYKN1D Ag.-t&Y*+GgD *.]T!~TIlS.T>' );
define( 'LOGGED_IN_SALT',   '9JhrE>Yy[@NU=;3|{mbNCMl5N{ivH02=Rfaf[}~}`!OKO?(AS!}R$4d^6DX])urk' );
define( 'NONCE_SALT',       'G&>-n4_1T!bP9<lIWZB5!79efq<L,ZbF#1Qf9L:1,VxC6J}<4rQ=e1x*PDU@h#Re' );

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
