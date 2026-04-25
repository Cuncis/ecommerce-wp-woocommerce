<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'sGx+-x6qTqDa4/[pcp^R3[z]KUW$}(cVBrRFD=&>XMis)o(=Kl%!~$(rSo/T2xYF' );
define( 'SECURE_AUTH_KEY',   ' $V]%t$2Bt4<SFDQQ# -`A1WXu*W|E-`dDWm!|8hrXtzQ>+#G$~i-wAQq@?YfyTV' );
define( 'LOGGED_IN_KEY',     'Uk~b?ExbUI$5$o[cAc=B{~lS6B|z>XfV`CoXVP1F=of4m?]G+heTX8u68Xdm$ TJ' );
define( 'NONCE_KEY',         'SuhHOv%rCq`-,[ eW]*vLU&@X~0bke#1>0L^Vo_QQN&~N+oWIh~{=DU%f=VleqV+' );
define( 'AUTH_SALT',         '64AI=g]oPFy@vu>3hRG7&SI5t(;RS+@epqyE9K??Sx33s%).dB0=|.#CKGz}nPb(' );
define( 'SECURE_AUTH_SALT',  ']IZ){zW:kcSsVE7o[(`+UQo zV$%T2d, 1?%X~@E/q6(6}N;=i{)Yk+d4?dGh5^G' );
define( 'LOGGED_IN_SALT',    '2H0sRJ]f cO%s)h|:_%D$O~v;l@JYl?PZ12n0YnS|rw^l9ev0,|Sm$g_0g9thH{5' );
define( 'NONCE_SALT',        'pHkar^`:Y-c2I.bY|iGs,>mhNUY83{%wbTy=7Sp3Qli:_ei2I%:}@F-7Jo^8)eqO' );
define( 'WP_CACHE_KEY_SALT', 'f5rZtc-&5|<KvkvPyLW~N$4+g9p,bIWZPe&;zo1iVc L;XZZm*$$Ab9UX97obH}s' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
