<?php
/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache

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

//First we check for development env
if ( file_exists( dirname( __FILE__ ) . '/wp-config-local.php' ) ) { 
    include( dirname( __FILE__ ) . '/wp-config-local.php' ); 
 
} elseif  ( file_exists( dirname( __FILE__ ) . '/stage-config.php' ) ) {
    //then we check for staging env
    include( dirname( __FILE__ ) . '/stage-config.php' ); 
}else {
// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'ktryber_poweronly1');

/** MySQL database username */
define('DB_USER', 'ktryber_po1');

/** MySQL database password */
define('DB_PASSWORD', 'Port1land@');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');
}
/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '-=st95|[hhyTcd1+8tiCD__V-7F`5]Qz[P1N=lMjy+^yf4B):=,3SEkyULc7 7+8');
define('SECURE_AUTH_KEY',  '8_@3AEi5i,Z5z|cMQdiz3rBo WZAlmx$Vn-:S(xEzP84ZCqQ8Kacl~q/L[pM|87c');
define('LOGGED_IN_KEY',    'w%G]TXEake]P$q/73i`;>C0G(RMjF4+Pp5U-CgQwttn!8X&#D6AHjPZFFRT--4@!');
define('NONCE_KEY',        '.D5BBOlJU6$oK6YaaEuT(#|~HzS[0oc><4sSC[X?m*4O}+EGdQ{A|1J:Um_,anQ|');
define('AUTH_SALT',        'W+jTQENWn|DlDaqV5a.]jTfR@Zby?=QYwb~|4[t)y+Um4kz>E@g*x41 QbL{mzd]');
define('SECURE_AUTH_SALT', 'ND|Nqx4xaBNcHbr|1QHODqtWl&GG$BEMqdIv<P7-%Mz!-V9u?d|mCF!nS/T8D&d,');
define('LOGGED_IN_SALT',   'Nwb^5x6/vZZaQjq;v8BR.VklOEAn|I6%fPQ<?yDcNS0r+dXxdka`!rfl|trRlsOm');
define('NONCE_SALT',       'y]aY!D3raMe#+uEO+0~p.114{w>(mc/TGQ6MDgR;I1l){V;KHO/Bk|N=$W=u(+]6');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wppoweronly1_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

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

  define('WP_HOME','http://poweronlytransit.com');
  define('WP_SITEURL','http://poweronlytransit.com');