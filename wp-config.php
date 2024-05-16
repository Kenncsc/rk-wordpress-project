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
define( 'DB_NAME', 'rk-wordpress-project' );

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
define( 'AUTH_KEY',         ']p`-}L}@p0;;=W,1c96tOOkll)=B<au7=YelWw,O0R{N,ls pQ:mUF5xBYlCWj;d' );
define( 'SECURE_AUTH_KEY',  'Nv1hgrU #>>fXTA/8{HOb@`9_jr|+3(s:~g.%wQHPn3H@iWTWhb2u0m0et=..3W.' );
define( 'LOGGED_IN_KEY',    ':0~C}+IfjY.b-zlARWGS5/AGpOCSWRdbp%+fz]3XqUdBLXvBA(I~d?(E nEdC8:>' );
define( 'NONCE_KEY',        'y{(I1gR<,>p4ljt4s&;yU+IL,W[Vor.lNaBUjSf0,Bf+qA#ECZs:%nf!} ;GFT;t' );
define( 'AUTH_SALT',        '^R3% gmdR?x>giRySD}0./#/Nv*m+p/qqv,bCl.Ne=eplpsJZ]M0]M(:Rd{~{EG}' );
define( 'SECURE_AUTH_SALT', 'Yv!$uQ4sP<nC(h.NGtVNus ]t.g+,/k&8tP{C;~wv_lE$6:&FIU8qLvnfkYLjf2,' );
define( 'LOGGED_IN_SALT',   'G 4xM;Ela?NAJt/7w_!.tW#,If@BP?0pQ&W@>Z5AXhRgHJM&wX.07Un=Y$x@aRwE' );
define( 'NONCE_SALT',       'I9djh%e~~:Fiz)c{!KO26]D0MENCEy%.:12@n9X{.v*w1eJLU_=Y ^{}&D/Y8w.F' );

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
