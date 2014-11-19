<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', '');

/** MySQL database username */
define('DB_USER', '');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '8kxscfbiuw0jhbtvh2m2ndi2yx3t1xfhpdgtghtazgvnwcold7tpidmbkrnyoldi');
define('SECURE_AUTH_KEY',  'y1513xvpm9hwd3qoev3wdcaollqvyjbwksdfdirlhp9psp5p3q9ccrwiq2pfohtr');
define('LOGGED_IN_KEY',    'pthpycmdphr4g9xrisaotykwffpc83imkmbupst9zh25bslwmyhcwj1ten5vxq4z');
define('NONCE_KEY',        'zrocmcjg9ejdjk6dsd0da7gcquohnwywu9rkpiruyuqeiw8jimrkrwswkh4dd1gl');
define('AUTH_SALT',        'srb8dabvvqxorilrmrcodybw9xzfghd0xjngv67bsjdutvhh5wl62xvgiehsxyrq');
define('SECURE_AUTH_SALT', '6gp6ivwtsbqcywftf2zw5p0bvwxu3lsdpqcvznbg3e1u5y1lfbqlgaoguvodtmnr');
define('LOGGED_IN_SALT',   'a0kwcz6dsq5pm1pomo5qqjdmgbabj6j15klx4kcfaqfkccfiraejeygvqu7wq5ig');
define('NONCE_SALT',       'hyr2e8m29adnar8owmtbqwcadpegkcuziroxtzkzlc7rkua9ljkmoi7apaggapei');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
