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
define('REVISR_WORK_TREE', 'C:\xampp\htdocs\rapidbytes/'); // Added by Revisr
define('REVISR_GIT_PATH', 'https://github.com/farrdy/rapidbyteswp.git'); // Added by Revisr
define( 'DB_NAME', 'wp_rapidbytes' );

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
define( 'AUTH_KEY',         'Cg;A(Qenj!:jA,6:5+A[d@x@4KUAz?F&5-ztQr&9riLFJ<<u1$kpfa?LG7.mn@(D' );
define( 'SECURE_AUTH_KEY',  'V=r~*hL:({,yI5itUk@-DrL}`ud(tZN*kO?@-[$RoG#FamORNPV=?s pfR/q$4WN' );
define( 'LOGGED_IN_KEY',    '*8s_D>%H,DulBlEkfKl4^<,D@2$CL.!H>l[<6hg48^?Gm{>GbF7J6pf_Fu|ywvdh' );
define( 'NONCE_KEY',        '}new<#XHDtq[#cEh0!|C}j{3(heGj`R$<uw{<{rhs[zCXKUJA;PqLS5_|;0Sd?`D' );
define( 'AUTH_SALT',        '>@wo_%]Xi3Nx/*1ika=|xjXccq~:VRwlZe0OBy,IHy8,FUn-+A@Dc~PhM`U2g^AA' );
define( 'SECURE_AUTH_SALT', 'ZGA$B}RwuFqinr[Ozp<^{lzC8fG~?GVozHiHyBGkQs )U]>W70daCXr.Qe0^X0os' );
define( 'LOGGED_IN_SALT',   '.HLuS:;?3~=Ou6(5~jv^K#:Ap1?q.I+PA.5KEJZ-l*=]Qu6s7lm*j4QrYIJ0k75f' );
define( 'NONCE_SALT',       'ae#.V,Yw~L&b1tTQ~}:WxOPKoEx]V_Y=Ky;&g$kIm_ggAa4|!486jh0s3al>]DC2' );

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
