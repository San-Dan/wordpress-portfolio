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
define( 'DB_NAME', 'portfolio' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'sandan' );

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
define( 'AUTH_KEY',         '~%BfRwR`o(&yGA|~c%;e-MnVQVIa4<3i7c(tc=G(4zssviHk]l+l6nQMDJ-[iASM' );
define( 'SECURE_AUTH_KEY',  'tv<IJ%.>oYQs$]Q.rY2/,]uV@R@j`a^,$;$~doSd+N|{RaY[1M^,:Tl7BfWBn@{I' );
define( 'LOGGED_IN_KEY',    'tkcMy$^tt^,xTG~w,Xc9ROe:EfH9z@zwgC,2W=hZoh34z2t*F-*=w7wD0>UVqOHO' );
define( 'NONCE_KEY',        ':o&WC;P26.G$*.ZS3&/}(<lEV|)~KdR7-S/Ku{qHkTt+6lJf}F$V,?aLQ=OAVzzE' );
define( 'AUTH_SALT',        'ZEIe92$2K}p$Sk=QIx#TY2FH]vfu}7;wW)<V}UVk?X|U*s7KPVJ&xJQ3HIDRZd 2' );
define( 'SECURE_AUTH_SALT', 'Bp0-]**W&37M?S/ZWHHhS!N |#mZUNZTea$]+`hfHXI>A ZM1#EiG]W<^_k~92gA' );
define( 'LOGGED_IN_SALT',   'JF3VP:siFq=|kawxX-=3Pf>@~0iv:kTh<#ozXDh3`u96B%u.%.7-ZsVcC~3-oc<_' );
define( 'NONCE_SALT',       '`F[5T.J@*)vhxYnP0krs^ AZ&+;+F,OsR(kLNf;^OwW<#&SK :NMh< =2{7^=qjt' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_fjfri_';

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
