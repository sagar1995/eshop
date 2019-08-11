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
define( 'DB_NAME', 'eshop' );

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
define( 'AUTH_KEY',         'lwLU0;qOW2cRp~)v%N2OywUR`9F)M;cWCycQ$8pI?Jpf*NdYD,A2YRvazIhyvt/r' );
define( 'SECURE_AUTH_KEY',  'o5Z!?/@{rqH]:AdYtS[kn;_nKhA$O5KRr $AsTubB<3UotxvDRb|d24L~5<O7[G.' );
define( 'LOGGED_IN_KEY',    '}c(Y-)AWl$E|6Md#NpT8Vn-18}8F+vu]t_kQV$p,Z:K58U~:Kk(V$NX]GBw_I:-r' );
define( 'NONCE_KEY',        'p_NYAG!m>kTe=QOQ@R2%#ly9=~jkfa={[X@`}tn>B}8Vpl-]wNp__-uEtFg@i{iz' );
define( 'AUTH_SALT',        'Ojjfpi)^tQ`!j8^s1KX0]6un7.gJy-l_pBoC#0U;DG7p1ZjYL)?)q50R}r7OK4h<' );
define( 'SECURE_AUTH_SALT', '<U-0Fo&3~?:F3B=k8CT[;QWQD^fR/SeUh7|+>K10wY,AQW@7?rj[E{_7zD}Wm$br' );
define( 'LOGGED_IN_SALT',   'qxyLJRhx-#[j.xdf$B>(C>wr;qLG@PG},et|L{N5w-c`fjvtf6EIYB&]AiSsR=G-' );
define( 'NONCE_SALT',       'i.,UnLl;hV [GPU~(|YoRq`z7*63/!qKfpMSjI=0%8tF]^Bd>8O(h2Yr1|JKkc_:' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
