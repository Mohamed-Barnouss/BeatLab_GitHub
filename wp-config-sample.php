<?php
/** BeatLab WordPress configuration sample. */
define( 'DB_NAME', 'djcourse' );
define( 'DB_USER', 'root' );
define( 'DB_PASSWORD', '' );
define( 'DB_HOST', 'localhost' );
define( 'DB_CHARSET', 'utf8mb4' );
define( 'DB_COLLATE', '' );
$table_prefix = 'wp_';
/* Generate unique salts for your own installation:
 * https://api.wordpress.org/secret-key/1.1/salt/
 */
define( 'AUTH_KEY',         'put-your-unique-phrase-here' );
define( 'SECURE_AUTH_KEY',  'put-your-unique-phrase-here' );
define( 'LOGGED_IN_KEY',    'put-your-unique-phrase-here' );
define( 'NONCE_KEY',        'put-your-unique-phrase-here' );
define( 'AUTH_SALT',        'put-your-unique-phrase-here' );
define( 'SECURE_AUTH_SALT', 'put-your-unique-phrase-here' );
define( 'LOGGED_IN_SALT',   'put-your-unique-phrase-here' );
define( 'NONCE_SALT',       'put-your-unique-phrase-here' );
if ( ! defined( 'ABSPATH' ) ) define( 'ABSPATH', __DIR__ . '/' );
require_once ABSPATH . 'wp-settings.php';
