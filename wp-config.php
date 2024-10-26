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
define( 'DB_NAME', 'demo' );

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
define( 'AUTH_KEY',         'I/p593mMN8NJ7~<5u`2F.Lk_Xa2Y Pd^3*0WgF=nLai !zG|A2d^]AV{RJH1{R7y' );
define( 'SECURE_AUTH_KEY',  ':A3@Cj6!F4$  |]p(94Zke6vq!>]R _p_2dL Z~|[:b4*F((wa?PCj*~L~wkMV=F' );
define( 'LOGGED_IN_KEY',    'w-LCy2LScth_:&uO6G># 1[AV0;Pc[ti]c5yFL3E~;y3H&SCdI<(%%: KWbk#mh=' );
define( 'NONCE_KEY',        'Y*baC7R*v.V+U~v;8?;~G/yDl9dTrb!bS u5*u|MD-B4G}1,!<(+I}$ig>Lnu@3j' );
define( 'AUTH_SALT',        'Q!7f :#i*UD_`LVyX$/gc*5^h)f9f#0j#L>LsMZYQM0g=s?BA%U55_#Tf3mD[U(=' );
define( 'SECURE_AUTH_SALT', ',MSZc@r`JMISQz!v3{ELAdGoS5Mi1)q98Y.``@%tfU,kGiI2(+m[=y,1XKmSh*M:' );
define( 'LOGGED_IN_SALT',   ']X#v5TC 7)?in,Kx){,Q~,C7Cp8-d g D/J9W5>kit-ix5UCF!(@=fF=N{;iQ1yF' );
define( 'NONCE_SALT',       '=T`~VZ@Id_Iam.*+!NX--T)OF$Mtjt#M!r|TXFr,I{1{3r>6Ob5%N*3C[Ko*Jo*m' );

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
