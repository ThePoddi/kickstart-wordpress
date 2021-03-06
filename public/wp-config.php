<?php
// load config files with database settings
if ( file_exists( dirname( __FILE__ ) . '/config/config.' . $_SERVER['HTTP_HOST'] . '.php' ) ) :
  include( dirname( __FILE__ ) . '/config/config.' . $_SERVER['HTTP_HOST'] . '.php' );
else :
  include( dirname( __FILE__ ) . '/config/config.php' );
endif;

// more database settings
define( 'DB_CHARSET', 'utf8' );
define( 'DB_COLLATE', '' );

// custom content directory
define( 'WP_CONTENT_DIR', dirname( __FILE__ ) . '/content' );
define( 'WP_CONTENT_URL', 'http://' . $_SERVER['HTTP_HOST'] . '/content' );

// language
define( 'WPLANG', '' );

// debug
if ( WP_LOCAL_DEV === true ) {
  ini_set( 'display_errors', E_ALL );
  define( 'WP_DEBUG_DISPLAY', true );
  define( 'WP_DEBUG', true );
} else {
  ini_set( 'display_errors', 0 );
  define( 'WP_DEBUG_DISPLAY', false );
  define( 'WP_DEBUG', false );
}

// secret keys
// @link https://api.wordpress.org/secret-key/1.1/salt/
define('AUTH_KEY',         '');
define('SECURE_AUTH_KEY',  '');
define('LOGGED_IN_KEY',    '');
define('NONCE_KEY',        '');
define('AUTH_SALT',        '');
define('SECURE_AUTH_SALT', '');
define('LOGGED_IN_SALT',   '');
define('NONCE_SALT',       '');

// automatic updates
define( 'AUTOMATIC_UPDATER_DISABLED', false );

// wordpress settings
$table_prefix  = 'wp_';

if ( ! defined( 'ABSPATH' ) ) {
    define( 'ABSPATH', dirname( __FILE__ ) . '/wp/' );
}
require_once( ABSPATH . 'wp-settings.php' );
