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

define('WP_DEBUG', true);

define('WP_DEBUG_LOG', true);

// ** MySQL settings ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'db748607006' );

/** MySQL database username */
define( 'DB_USER', 'dbo748607006' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Nanami2013.' );

/** MySQL hostname */
define( 'DB_HOST', 'db748607006.db.1and1.com' );

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
define('AUTH_KEY',         'KPoh3NcE65wIWUb2BQqJ4jeK4wBBV4cfNJq87jRKJsSbm5TcV4dqsmp+9xCHsIc+783Jhy7LKUKWy1Iw07Yuzw==');
define('SECURE_AUTH_KEY',  'QQMMUFfWHknV9/AbDOAGRtEYPTGQ+AgYRmz3tu5nDqm+1sbfLvb9RxzBMQ6dPqb0zHG8LJnYBTBRtJynAf7eIw==');
define('LOGGED_IN_KEY',    'ZbvEQVEo1JdXYj0exqmBTmH3IrTgvxFDlRQH3f+y2eXGQZDQbQmmzc1oz/OWUYPrO3WP5tuXHGN+tSKnCPljdA==');
define('NONCE_KEY',        'q2v+fOocqGEJQSVlXmnFQB3oU5wS3kfpYejC6+gmjRKFkOy9YGFghS9US9POIoK0BN94XcECrEmEZRy/+Kqfrw==');
define('AUTH_SALT',        '4jfrMv6C3wR86+MUOdU1BWJXEVL+WufPaSNlI9GrkWpfdIa4tVNiLpj9JjUZxXYmvWfiZom8m1pwwrnuJsXjDQ==');
define('SECURE_AUTH_SALT', 'elMA1rML88jokpOXhIxe/QzUy32rYJ04lCMEpv/NdnT786Nsd0qXoG4VxaXT8uPlNxQtPIof/74EiY8XZPM3Zw==');
define('LOGGED_IN_SALT',   'p20PFhbhlyP/SRk1aAGHgHXwhqncpnoP9Odyth1IHisunuHx9Hj9GIKZEVkpLy+LAXCV6hhaTHhPult9bc5mLw==');
define('NONCE_SALT',       'CC5QTyE7bpQAWVl/51ZQ6mP8U9jPnBSLysk/qSqs7unXPUCa/EmAVyw9cMRrpBNp4bdvIZgfXGa8uWf1p6Yxqw==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';





/* Inserted by Local by Flywheel. See: http://codex.wordpress.org/Administration_Over_SSL#Using_a_Reverse_Proxy */
if ( isset( $_SERVER['HTTP_X_FORWARDED_PROTO'] ) && $_SERVER['HTTP_X_FORWARDED_PROTO'] === 'https' ) {
	$_SERVER['HTTPS'] = 'on';
}

/* Inserted by Local by Flywheel. Fixes $is_nginx global for rewrites. */
if ( ! empty( $_SERVER['SERVER_SOFTWARE'] ) && strpos( $_SERVER['SERVER_SOFTWARE'], 'Flywheel/' ) !== false ) {
	$_SERVER['SERVER_SOFTWARE'] = 'nginx/1.10.1';
}
/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
