<?php
// load config files with database settings
if ( file_exists( dirname( __FILE__ ) . '/../config.production.php' ) ) :
  define( 'WP_LOCAL_DEV', false );
  include( dirname( __FILE__ ) . '/../config.production.php' );
else :
  define( 'WP_LOCAL_DEV', true );
  include( dirname( __FILE__ ) . '/../config.development.php' );
endif;

// more database settings
define( 'DB_CHARSET', 'utf8' );
define( 'DB_COLLATE', '' );

// custom content directory
define( 'WP_CONTENT_DIR', dirname( __FILE__ ) . '/wp-content' );
define( 'WP_CONTENT_URL', 'http://' . $_SERVER['HTTP_HOST'] . '/wp-content' );

// language
define( 'WPLANG', '' );

// debug
ini_set( 'display_errors', 0 );
define( 'WP_DEBUG_DISPLAY', false );
define( 'WP_DEBUG', false );

// automatic updates
define( 'AUTOMATIC_UPDATER_DISABLED', false );

// wordpress settings
$table_prefix  = 'wp_';

if ( ! defined( 'ABSPATH' ) ) {
    define( 'ABSPATH', dirname( __FILE__ ) . '/wp/' );
}
require_once( ABSPATH . 'wp-settings.php' );
