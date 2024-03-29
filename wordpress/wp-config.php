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
define('DB_NAME', 'db215537_1clk_wordpress_RxyFpiZAy4XYSQQz');

/** MySQL database username */
define('DB_USER', 'wordpress_dpDYM7');

/** MySQL database password */
define('DB_PASSWORD', 'uZ3sCw4u');

/** MySQL hostname */
define('DB_HOST', 'internal-db.s215537.gridserver.com');

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
define('AUTH_KEY',         'NIVoApi8ovMKF6UhKNAw8knGRznue5tV695JbYzuW6oo1V0qMnCJlqEYrwgJg02x');
define('SECURE_AUTH_KEY',  'tQX5S3IFrDDWeeFCEtTDOAB2VRzBmZJFsEM8Rjy2gTe8paWNF1gr6F3pfehG7IMi');
define('LOGGED_IN_KEY',    'zUo3LRpFbKp4dll1cVQXJTAfkxmhDGXArg8NTZJVGIRZbVIrXe0IrQzzCI2BbIxw');
define('NONCE_KEY',        'iUKTuimo1rc8Ysg7rRmMvdzRc1wqZAuoeXdZW07KhTpBsQnkjVyx4VW32l1hvxsV');
define('AUTH_SALT',        'wm4Xb6bZ8Ed7gydrn6ZCeF9IK0rGEMQZQghrDUeUOF2R7EoR9jH7DWjPATfcpZ1p');
define('SECURE_AUTH_SALT', 'B10PfMIMIlSwgYpAc6P7ONbIuI7OVzyD3BESoXy95s1PFCRT3JIY6p2yApIBa6LM');
define('LOGGED_IN_SALT',   'NrYT0qhy99x7wdjsp2059nBoKqvVPtzCQslqOeFVXSIAYTRbVkUq9zC4IT9Y0sfe');
define('NONCE_SALT',       '8N2eIkUcatoueX1MTZ7F5D5SpbB40BmmesRVtLEFrNQn13QvP8z4uRNHpWylOn8F');

/**
 * Other customizations.
 */
define('FS_METHOD','direct');define('FS_CHMOD_DIR',0755);define('FS_CHMOD_FILE',0644);
define('WP_TEMP_DIR',dirname(__FILE__).'/wp-content/uploads');

/**
 * Turn off automatic updates since these are managed upstream.
 */
define('AUTOMATIC_UPDATER_DISABLED', true);


/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'n8ma_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
