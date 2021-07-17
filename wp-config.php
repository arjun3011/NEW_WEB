<?php
define( 'WP_CACHE', true );
define( 'WP_CACHE', true );
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
define('AUTH_KEY',         'F1LDk6Uxc3rPd2eRdHDj5xRyjNQwB/Y1p8IqJc0JEvBsXh6eTuGs7XUuTxsfaAr2nSF2of5NSYvsg3POBUtmoA==');
define('SECURE_AUTH_KEY',  'GqYJlUnJLeIzL7LIU1wDu4U1OINNMOV7qm4pgamvuvxPPn6pzbyCPBzYHoxSECVOYqb2YDwWZBHtxRXJpNF4WA==');
define('LOGGED_IN_KEY',    'Gf6M28aHSFvz0EQrN3tssKfDGygwTm3K/04hq7ByS4FBGqgRlZtXPJxFc4hVPoXr8if6a4YaPhKjLM+/s2xlfQ==');
define('NONCE_KEY',        'sNLYsBSJRykyWHZ4vLp2hcu6hQx5KUMierWezs0+0W23+f8igHH5THPda/z3+02KakFHi3inO11AP9g3jWkCrA==');
define('AUTH_SALT',        'sTYU4V6v+a4vznO0BBDxC5aeTuft7+rFtH0xZN7+tGJP7C4SB/2cQ39qurNcVEk32sgr8FRmSuCWehQVeJGrFQ==');
define('SECURE_AUTH_SALT', 'cU54jnGUP4J4pFM33pIBQo6ZdPEM5sF3wWb2Y4wMkzlQyJP4L0CDOLLrDkQa5H6zxULyHfesnCt0zrO6pTQ9vw==');
define('LOGGED_IN_SALT',   '0CQje5M+Jwh2pgbKWk2x12fmXtvxSW9PEXXPtNk5DRky7HrEGlGS2jku66zEY+6DWTUlzhhhy1PDNRwPO3hNhg==');
define('NONCE_SALT',       'JRh7eQz0rPOvR13eT83EHONzo7zn2jIMAWbI982aqkpaLEC7R9BxCG4ed8gjBcXggsElDvsofa+0hCa0gz7S9A==');

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
