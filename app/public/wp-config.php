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
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'k2zdGvSFGSgOTSw/2c2gRHcNafyMFzRyClStjomaV3RMl0Gb0ACoKFxoF/+us2NO4vK9QAVbnjTogZlRzn+i5A==');
define('SECURE_AUTH_KEY',  'A3gUUakMawzOovv44YuT/j7zr6iqlf0V8p1eceFkq9aCPIWmyg5mZCOvaqzclhtXZKdCISAC1iZJsE94iirFzg==');
define('LOGGED_IN_KEY',    'eUgS8VLsFga/Vj/sXZyTDJ8Jsg+T/PBTb0p77fN3r6KfNLWrJXM/MiA8wPrR1KUdp8DSMvvspWdlT4gvzDPHwg==');
define('NONCE_KEY',        'k632xyzOMRQkkME/cEIWcEbLL3QGa2OEE8hykb97rr++eqoYgy/mQgA3Rw/luEt8c8MPa8K7Uxf0fP2m+dzzUA==');
define('AUTH_SALT',        'gSlXeqzr6Yncwuwym4qqCxC85hrJ2OGS50fNTsGNAdp4nMMQRtEnPq8l8xcQ/3hOrihpYg4VBhr0RVpqycpqoA==');
define('SECURE_AUTH_SALT', 'pEynMZ4yLQ/h7imx7F+r92H7tuZZ7NVFiv5odppFiGfD0pYfsFe4ca+nDvs4D5W0nL7gyOsosUmLLxfTEKYLow==');
define('LOGGED_IN_SALT',   'KlvMuHfCrZv0fwDV5ZJ+9ScQavlAN8B5r2Trqi0D1p6g/rXbetlVxqGOOjidLfb5D+AlnB05zC05TeWnLmTKWQ==');
define('NONCE_SALT',       'm4pcs0NH0OXFLvYRNOx3ts7P4IoF0k1908OWomV+hm80pNoEFfsqUQ7UuCmNjMQDNn+ZbCznTkx2VGTNoBpSvg==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
