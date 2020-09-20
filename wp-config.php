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
define( 'DB_NAME', 'silashammer_dk_db' );

/** MySQL database username */
define( 'DB_USER', 'silashammer_dk' );

/** MySQL database password */
define( 'DB_PASSWORD', 'hammer123' );

/** MySQL hostname */
define( 'DB_HOST', 'mysql99.unoeuro.com' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY',         '({gnx:J:iC2l]X:|f*=q+O:.-QrwjL3MSo?QZ:J ]VNX{;2<UMd85#fs.zJ*6T-C');
define('SECURE_AUTH_KEY',  'Eq{4KaC& )<@$fiQgLMY| km4(lSP#W4=I%e#Zte;X]aY ~wpRCQ|Fh>TWnY}i[F');
define('LOGGED_IN_KEY',    'wefxM1Uf6;+nNV4#hZ<||A!L/R,^+||N/H;BgnI/S+:J+43r(4R=B8K/A)R:r|ns');
define('NONCE_KEY',        'X.iG}%Wn^,]-A+|!-Egt0C5es~nzrYogJ+#-f1Gzg&9iff[FR/<?:-)5rFw%n<X(');
define('AUTH_SALT',        '|(:MVQNW|=3dm&Ksudd-uh Z{d9`F F->8+/aE?5vQi_=XUhg8J=aT$$lvkJ -`Z');
define('SECURE_AUTH_SALT', '2FV%n8+F+DZL RsSG9~H:+s[U3wQz/T-WIaKvbeXjZ0#gz5bf*sK%F0L|c-D=%j;');
define('LOGGED_IN_SALT',   'Se Z|wtW@w7{NoeD,,YiHu4wRp8%dTc9mG#TW$>smfs5/*,IY5@Q%UcOM!%Z)v-Z');
define('NONCE_SALT',       'An~3S78aM8LU7s{Ow2f->Q7S?kkdkT7Of|q^:!:02~v/v0>-!Msv*BIF+<4/F!vS');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'storytellingwp_';

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
