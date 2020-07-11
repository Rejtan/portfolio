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
define('AUTH_KEY',         'WckpzM4jCZv4oRpXks9g9lCsEMbvBF1xcHhsLsGdaeaE5kg/e1eW3KrXLX3zNt947SVuw3iTuNxxgPRx2rEWYQ==');
define('SECURE_AUTH_KEY',  'T+iJ1BB3d9DL9fhgUNKGUwPhTdXHY/2sg5U3cgSKHNABM3owUXO+yjNEUJ0+qAKgYZG7T+1iHXQnT9M2BD10dA==');
define('LOGGED_IN_KEY',    'ga4wpSwvBzkoRwKhAmnhXGiTASTx6NCeO1xmDVBQ3T5JyKkBMGzNf+pdYSre0kaYfMWjvX2YyOalrPumbZDBIg==');
define('NONCE_KEY',        'l2xwgkjHEbrOMPQ4aU9rXHigNWEwuQ5Xj/kx/R5QlLa/Sx22MPom/1ptDo4OHryATYIJx57y+yQHo6tK4s4eNg==');
define('AUTH_SALT',        'wIWiGRQpzsl+szT1+I8IhLU+99gHCYJgd7LAxCCFB6k5/L82scLb/CbLrVgM9oyp0p1BCfCRf4OyXpjmDm/MRg==');
define('SECURE_AUTH_SALT', 'hmNmjAxHebAd2RKzuF82BZaMisRt3er3I3prYg5Ih9zvESK8R4u4fd+RTkGzDdyuURiGokhs2cZGSaLjANCfzw==');
define('LOGGED_IN_SALT',   '3SqAYzkt0Ea2/SJ9sn/V677IuG749c21NrApWTHtDrSuwqL4jn3XKAtXPl4pb7ZJv3uQVYUb7x+A/E940JiC4A==');
define('NONCE_SALT',       'XXsKHdoYFOONkDX88O0cBhm3h03fXPIUrbfXIl0LqoH0wlXBgb+oZYfhj25CrHdeOGrDrtIidAoNPddEa8v1cQ==');

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
