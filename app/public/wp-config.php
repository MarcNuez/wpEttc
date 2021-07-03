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
define('AUTH_KEY',         'h/dytn7JrBwigJwMjKfA0u8xbqrT2iuv2h49gRiQmaae34tD0razBgUhyHkpyeWNjY5vdr8VD4H2CVGtFMk8Vg==');
define('SECURE_AUTH_KEY',  '6ygTyScU+x2BRZJx6ateWkJ4hvopKcTk7QOzhfcx4zxdHkgkCPw63fSlEP+h1RspF6/1PFx9mUhVF1w1VmCVpg==');
define('LOGGED_IN_KEY',    'tnoLzTx6aAofEc2iiVf9N0Erw78iTdcpIWdHSH5/vPbtwrk7iaqj1iJMf33m5u/7/OVYaHMQIziU3PE45y/GDg==');
define('NONCE_KEY',        'jjCFLR5wBHErIv68Uw2PGqsTE6/b5HBPgpncqqBwqZs082uoFJb0Fla3Nnn/62Y4jllUBDBOvTv29YpSam4uXA==');
define('AUTH_SALT',        'kt5l8QKLoVMDGjDYP4O87Et7WatooDGpzCaykQd74v3//SaYPzky3xdDS+mTXLM8GZY0aftN14F1NOs+jJGeiw==');
define('SECURE_AUTH_SALT', 'Nb7ZUHfD7jkp/+XLR8wvCgnXDjyt4QI79KDaLLwY9dQXydnIaP4wUTMisyTU/osCP8BDBOzy5+9ESUGyYS719g==');
define('LOGGED_IN_SALT',   'fG2yD7NQ2c//glz9irV/1tAuzFQaWJ/ba6kR4JLie5ZAxolzznlOf8SJbPIW9rLDwxE/fUtukA+TZ24OzKVZbQ==');
define('NONCE_SALT',       'FGiNnsTPNg4MgDvSv8Mat4R4BkWTEyPzqtanMWvNWltEQbQM7K/447fFk2LZ+c4KWdgXm6cU3yBnQFS4DQKS0g==');

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
