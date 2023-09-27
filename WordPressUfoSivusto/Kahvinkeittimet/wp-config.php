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
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'Kahvinkeittimet' );

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
define( 'AUTH_KEY',         'axwTTa_V>O.arg$00wrTR[I]VDu$Vc@[Lck8_ktc<!%Z:?#46i6yVyyVwIN?{L1_' );
define( 'SECURE_AUTH_KEY',  '7Ut}AGjq=+h|LA=hU@dY*GHJ-6K(s3&O)t^NY0*R=TRhE(Y/LB-Nr7 HBc6R3[Ud' );
define( 'LOGGED_IN_KEY',    'T~~l+z42P^,nBrZ|Mjsv92TZ$VbXl-nl~i:y-DajEtDH+o6BolOu&tG<K{Pic!V5' );
define( 'NONCE_KEY',        'BP=}W*@F$@]|t2p0m]:?cF<+P8n3S/c@$<,y,`O+(IjPE+&y$4VPAU{%IbWvrUC?' );
define( 'AUTH_SALT',        '!Ikni=|N(Sv IpFsM7pjY17IVgyb;-MUtPB%b6bNS nC?U0~upU~+6[D>!D|M(+8' );
define( 'SECURE_AUTH_SALT', 'n+ p)i]ti4c/<d4=pLld^^Z{&6Z$ XGI@nDasY6o&#!#o2;eUHFm$EY_Jmq^:R#Q' );
define( 'LOGGED_IN_SALT',   'xN2*R8?h,pZ7f,cy_by,-O-hN3$g.NAadLoWmwk|cB.~ifDiPn,_OM.C)nf.^pFl' );
define( 'NONCE_SALT',       'D@-h{?+jvNV^OFCeL(kW0ZwNtaH-%M(8adhTDL>Fu24Us-=yaGeed@[42-k+(v*=' );

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
