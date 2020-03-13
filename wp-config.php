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
define( 'DB_NAME', 'purbana' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         '@RTwN$^iq;_lIQFHp}i|I`+?i$^C|VZd.1UW5rXim#n$$A)51HW*}#/?b_2H`Wb#' );
define( 'SECURE_AUTH_KEY',  '`4{[UOw0t/NlJ](+p*&k}?UH+*IdQ8$`b;UUz*My#P6in$ceO#D!rn1N;b0Xc6y9' );
define( 'LOGGED_IN_KEY',    '`ENGbi_n>sfLF4OSMc2zE2$-ptb^W//U 4r<{F cN}7~>Nv(L[%v rUSs$DRF1N1' );
define( 'NONCE_KEY',        '}y[[ga8SEi&ti$r4&o^:hiVXe *)N95VQT<@VY[J%5!V:!Hd: 98w-^U-*YGru`T' );
define( 'AUTH_SALT',        '5=fl1]iSXs18n^5ItZ_8Q/s*%ati6je,js1V{AD efbtVll)!Sq>!o0)..1uN2^e' );
define( 'SECURE_AUTH_SALT', '@WSCXL4iy@2HI$bH+ yof~OFb.g59#f-n8ekv#HF}ePg%wQ<i2053,YB,Y-I;8eI' );
define( 'LOGGED_IN_SALT',   'yv`aLnCg#GA:%.#Ywor$.D({;BPLy1Co8[55S}mo&&-f.Masn@nVM &rmpj(hniB' );
define( 'NONCE_SALT',       'Nvu8xEUs&1/6UE9:#ggWGo*7OZBy=092r@[eRAav]r)Rf|Y<b;BcTg!70to{=,uX' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

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
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
