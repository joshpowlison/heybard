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
define( 'DB_NAME', 'heybard_wordpress' );

/** MySQL database username */
define( 'DB_USER', 'master' );

/** MySQL database password */
define( 'DB_PASSWORD', 'password' );

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
define( 'AUTH_KEY',         '{5q&n-_/T<sl>3bAmTF4<g2GZ=4d?Q@biSYE&GHtQ(MQE}=A&<`5onMK_`=X`H) ' );
define( 'SECURE_AUTH_KEY',  '&kkR<>/piMcKxs!;QZXmZHncoi;D[@ak[uKvbV>;][x/irnG+TfWL&j5&+REjDoG' );
define( 'LOGGED_IN_KEY',    ';J8&+N3IavFE*$na0oXvp}NdmtclW7H:nNQ7#.?%GA%Gd&D<#+qi.H%fogW7q{9o' );
define( 'NONCE_KEY',        '~u,pIN^Ty(>XZjNBYzq%;NC6 *)6VB-.]M~`^_J+U3m8+-{L|}]o3/?/cDf_y3rf' );
define( 'AUTH_SALT',        ')856Go`U4)`-S%}KdYo]MF86@2?!+y,rdp0|$Zy/5UhJ7K5+%R<[!0]jhg>0b@ns' );
define( 'SECURE_AUTH_SALT', 'mYekL,X>fbh6z]%xfI;FqVli h5w2AddB^BHI+~ERD4+MIz_8j^I[;(9*IGkpT 6' );
define( 'LOGGED_IN_SALT',   '7EyH7!4 uE>yi-]/HhW4:$MP}8:Jyv}v)HE{=bUx)|RxO|$MYf2rMzb@Jks:g`<N' );
define( 'NONCE_SALT',       'zgFc5V5YG$A5,B]ja koWO@f;CXda!TEV7GH{ Y3NzFrIDF*uArwth/H2M!UxWi[' );

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
