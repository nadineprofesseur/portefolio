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
define( 'DB_NAME', 'portefolio' );

/** MySQL database username */
define( 'DB_USER', 'portefolio' );

/** MySQL database password */
define( 'DB_PASSWORD', 'super' );

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
define( 'AUTH_KEY',         '$Yo S2JHf,$S9(O?bwKC1IqC>qp3gxQNiq_Nm1:,ZoCK2i]C!)DoA_h1hA#ydTe9' );
define( 'SECURE_AUTH_KEY',  '~N.0N~A4@`=1v3AwSVxrS<-=hl^Y4R2rI$V[UG$L^*EUrxM(Iz_7wp%CP]/v.x$!' );
define( 'LOGGED_IN_KEY',    '.%fscZjfX@-xx>-g1?:r=o<_;%e$!StI_imhc.:%2tc-b[CM]Bu),=sE]4Bp4U^E' );
define( 'NONCE_KEY',        '+eIkF%{m4RrTDc0nd>d8xL$lvIO:5J2T=_p{~,F#J}cx4B;]AslRBz3:WcBY*v/&' );
define( 'AUTH_SALT',        '^lH8.{IYm?61JAQ{*>Jz(,Q?+`$$>0;=qfp3)=gI2*2JQ|3#qyO}#0z>*:<1;.{/' );
define( 'SECURE_AUTH_SALT', '@V=;>8T<!zX dMso}LS(YAvaM2qZ:&q+D?VY9S~)b^1-),A>NyaFH6eQ{^<H^S1 ' );
define( 'LOGGED_IN_SALT',   '+rjz?4W~h/:kQ%6a,JW3i:}iU`29|>bO;{C![u]9o,F(DH9=iD&ViKd~oP.|l@eJ' );
define( 'NONCE_SALT',       'fN+Gbe@J-HoR<?$YYQ%G2CZ$mR^ZU%Jk}R<1>>CzF0p1i/=z7k._<U*FY2H1xbw^' );

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
