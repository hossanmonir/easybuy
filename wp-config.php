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
define( 'DB_NAME', 'db_easybuy' );

/** MySQL database username */
define( 'DB_USER', 'user_easy' );

/** MySQL database password */
define( 'DB_PASSWORD', '1128' );

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
define( 'AUTH_KEY',         '=uds?Oh4xZ){>nD=H3EuU@G=zLdTxg8sy+=rW9#P9$tQRa}*>w<DAb@n52o>_cU2' );
define( 'SECURE_AUTH_KEY',  'D[PTU %{8=~}hUTR=L!Q~Xbz0jncameyONH*p8XnO7AjVL?SWa_IW$MbEh0|e~G.' );
define( 'LOGGED_IN_KEY',    'KptZf|zRuodc0AnGP^1)Om&$dyZ>/3d6ky;6RIrJ[F:+Ke`lUOF{Jq(%O_|3^=oK' );
define( 'NONCE_KEY',        'YUw#,-k+C<k{d01;6E c _j|GelT]lh@./>7yM/52Q~}R,_|h&>1Hv3AgV6yENRZ' );
define( 'AUTH_SALT',        'W*S_n_vG@?1:ZV<%d=2<=Gs25,p++kI/.DE:Ix!=*rIzHA6 ?]hXp^{vk-tIK.Hj' );
define( 'SECURE_AUTH_SALT', 'J[c]^c=SCQvH=2DE!*Fgd#_C3gVS4<_d%_^CCH*]D,){rowC2!I1/5Z;YC.]>[La' );
define( 'LOGGED_IN_SALT',   '%udR}>y4TmD;KQc&&8{HD=yunDcZF2[6+5Z[vIqxP<|[OB#L`DdS%Z4Nb{H|Jl$?' );
define( 'NONCE_SALT',       'L.OZ*35H>bsT1h`kA6k5tQH{$jX9gB^oDqy~q?BZHjY3lMvul-[-56=bg{u.S?jW' );

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
