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
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'learnwp' );

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
define( 'AUTH_KEY',         ':j-oh<b5.o3x*6E6;S~7)H(6r+y8T+#MI:)e[SkQ]/;,~%}%EO>v}kdnhAuy/qDp' );
define( 'SECURE_AUTH_KEY',  'P9zgw3M@!9q^&Q7e(_:F#Cva`pz|]7vT[f&JiS)nk6*^#8RhEwgK?v<j+[vQN/.R' );
define( 'LOGGED_IN_KEY',    's07igu0.Pnr}7H8cx1+7V`gNvIR$|?7BNhoQ58~B8zA:K`~t!QOAf8a[Ts-o:)$D' );
define( 'NONCE_KEY',        ';H+|4D(4mG]`WvQTqX+1}>n8T*D <BRLt#PH4vpN46:z<&U7_vG-69U6x6Pl>gKs' );
define( 'AUTH_SALT',        'e]NmVTWpmC*Hu`Po^mh@.v5hHiw](|)7J&d`fHEh!vB5D<m~*~q(q;r89MV<Gm2K' );
define( 'SECURE_AUTH_SALT', '/{IX`TM@,r]VL+rw&J/=X2P|,fO;egS~&ZT;jsXg(]0Xl-Q-C JLNX(Olq{c 7v,' );
define( 'LOGGED_IN_SALT',   '|)ZW#|Yh;[|#S_=/3^?d<Q[hzomrRN-[|xVK^jE9SUwbAEy{v;qgsp8e-V&&kHS}' );
define( 'NONCE_SALT',       '^O]UPHC;8IHrP?(X}N)@.HoUM^9R<T.CJaAr[t5 QMMs/c2d4X=YP1}aPWgJjG~T' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
