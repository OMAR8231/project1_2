<?php
define( 'WP_CACHE', true );
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
define( 'DB_NAME', 'u681811854_Hotel' );

/** Database username */
define( 'DB_USER', 'u681811854_root' );

/** Database password */
define( 'DB_PASSWORD', 'Oomar12@1245' );

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
define( 'AUTH_KEY',         'DZdBy.&)G^[g1OL=1FLUhHa+$^ F@Zfu?LVmdCF3=pd<WP[GOfYA@4UE5>m0x=Q?' );
define( 'SECURE_AUTH_KEY',  '<877WZ3U5!C|CU>Ig#RT}5a2ud7=;irs(-9xmd-Qb]~k_X/Pi4&Iom+!Y9sS2;Kq' );
define( 'LOGGED_IN_KEY',    '{tO?:7xE5YL]+@ny]IdrVz2u@X`.etn<];pQfhF5}/@kfe5>J-qB m1=<@Yj^h+x' );
define( 'NONCE_KEY',        '_/fEEkL4Dnt%elb3/[8A1npzo6~N`CIP<C&=SHB|-&:j1^y<Sx[@*[Nf_YUH>}6O' );
define( 'AUTH_SALT',        'N<WEHh;&_VYQ[t9gXLPU=2M<`-VyC<;16|,KcR1I*.FJh.$N;I7p|V][z=6O }|9' );
define( 'SECURE_AUTH_SALT', 'N1o![U`6oP}=U)r,W`|cHdrs[xwO5yBt]E]1ys@7H;; 9UBcrIi:0rXiqj!mj5t$' );
define( 'LOGGED_IN_SALT',   '@VY{Dwn?!ZJO]wqm*?#]D83%$%J]e^Y}j>0|p_M9H$Q&Av@Jju|]]bC5O32C./Dx' );
define( 'NONCE_SALT',       'j,9yt|xJ_gaHqr;N{DlEC4d+c>i+;&~MVX#yvVXXS$|)uoQ`2mR,mYB]rM V3DU-' );

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
