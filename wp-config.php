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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         '0>>P828 .r1dI!=5e|Q]Lz*vuYVQOw@).Qs@i)~YSd8GrD(iPSRD+H{ huJc_]$r' );
define( 'SECURE_AUTH_KEY',  '&XVh*O*.t?&I`NYphj.#igG1]:{]XKzvWPc5&p/z5xfz};3&u.sE ;O>7k(igOUc' );
define( 'LOGGED_IN_KEY',    'D_[EYjfco#9-Qn7d=Gn00_g]qG%i^zX<WPWimpgUg@MT1}xh~NI]A`moneHGMP;y' );
define( 'NONCE_KEY',        '?$.8jOFEZ*;*D`mW=nuETLUV[1o a?KwN{sK2}gF{R1)d*a!_M)vzpR07skleIK)' );
define( 'AUTH_SALT',        '6/,lsD(YR{3q7+Nqa3/x(<x#1y+edju.g03AuG&D;#;kx+vs?j:(3URk7&hkWt_+' );
define( 'SECURE_AUTH_SALT', '{;,{TsMIQFZd,|3[[xj6YSkn4LM?M)1HI~WE<$C%e%D^fTs 3.2%Vc1IaLz8bHqj' );
define( 'LOGGED_IN_SALT',   'nwvPwb wb)@V$kdc&WZg{aqumXR1S_r/yuiNp:(rj9HfpB_B#6/;R*t],iI)GonC' );
define( 'NONCE_SALT',       'QRcLS!EHq{r}K1qf *Ske3!7@+VQ`AjN?BKf_M_$}AOD:cyOp<1vweAeN6n}+,8=' );

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
