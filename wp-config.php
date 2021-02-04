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
define('AUTH_KEY',         '4gOIYFsQHIbwZfiZOXIG4tkkcrGfdFkrP2TKeXXLlhmpEN2j2qzeDpxXZjXfy3SqeEZqFn7cTfy+YtZLsVigFA==');
define('SECURE_AUTH_KEY',  'UK6iOSnSLz3U+2jFiyUzDFiozm3K9+5ZqOCKPvjgvGY61tmSmm84cV02GwmMWDLQA7AJ9cJmhZmMXHDs6i6Axg==');
define('LOGGED_IN_KEY',    'Z5PzDXrNut4+jhzNapQ+amJYDbiEENLOhCk3d5O0ovFgN3hMKFfASYmKMN5gZgfx9pd3qm2BH5SCJcI6s6seQw==');
define('NONCE_KEY',        'Zw0GKBRMTE4AIUvEuw3cnaXE6meElbXdyqYVzICcBTb8jBx+VD6kkhAbrEYR5fkR8ld1YaXTit0oOdG45l4/vA==');
define('AUTH_SALT',        '1Aqnd6SEePOo9ddnWdvqGpr2GhY9dcfDEBKzunNpWiTus6yCWR/7uZ5zzNRJu0FYDb/IePVKWRX7o87ObdwjSg==');
define('SECURE_AUTH_SALT', 'xq4Brw4h9wCuUkuAPz74pWD0tp60Ua8R7gwLV60d1xu80ilQlS6DPHgBTuvpHoO2XckhzmEO4IhQGeOkjzwvqA==');
define('LOGGED_IN_SALT',   'MMWq5X9UVXgvrIeNWQBlDVpYzsKk8TR15UgL0iPdVPylWWpqYi9FayB2+rosIw7nIJuB9db5pIec1HMyRXa9dA==');
define('NONCE_SALT',       'HTOoA2MIOpjy0wj530RF0NgfxkE8612xtRxbdQ5uEWLGHndmhCABTZFHzd9z41OybifPJ4c7+Dg/2qSrfalmzw==');

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


define('WP_DEBUG', true);
define('WP_DEBUG_LOG', true);
define('WP_DEBUG_DISPLAY', true); 