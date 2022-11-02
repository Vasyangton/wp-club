<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'u1560783_wp227' );

/** Database username */
define( 'DB_USER', 'u1560783_wp227' );

/** Database password */
define( 'DB_PASSWORD', '20peM5.]2S' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '4gfu7wob5gmdzm8sfa9q9syowhxtkjcd2bu2sfz5ewx5kkbxhfw0njdfk2552xed' );
define( 'SECURE_AUTH_KEY',  '4lsvzcfljp1yq3pqbrseypgoqtzeqxhcw7xnjkyncmzavdpnesxry1hel2boh3ye' );
define( 'LOGGED_IN_KEY',    'l9vx1pky2chesnctqk2lbuicpuwsthtrsf943cgjnvtjbbaip0mjm5yd5wjspyoe' );
define( 'NONCE_KEY',        'm3qmbzerw3ngugiyhz8q1k8gtcgcawgxioegvaonc6tp6azkgorcpimkqiqiban8' );
define( 'AUTH_SALT',        '4qv7bzuxxmib49uicwnmkmxp9qdpcmvmbsw6jqdcuhndpgskxljtpzwitegxwsvv' );
define( 'SECURE_AUTH_SALT', '4kvf7kxdydugayvixy8xyxzc0ng09sl0exyxxzoez2xkvflwmulafxo4hktjfzw5' );
define( 'LOGGED_IN_SALT',   '10m0kjduczkjbehinpgonlrfeehlkyjoaymfod3nrqwezooiiel27ksc3qinyka2' );
define( 'NONCE_SALT',       'fmri0lam5l3rhwitpww4ywwdsrey4xy8leydlqfznx3tm5exjzfjptct6eh4ogew' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpjw_';

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

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
