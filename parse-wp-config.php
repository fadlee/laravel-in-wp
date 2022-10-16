<?php

$config_file = __DIR__ . '/../../../wp-config.php';
$config_content = file_get_contents( $config_file );

$keys = [
    'DB_NAME',
    'DB_USER',
    'DB_PASSWORD',
    'DB_HOST',
    'DB_CHARSET',
    'DB_COLLATE',
];
$config = [];

foreach ( $keys as $key ) {
    preg_match( "#{$key}', '(.*)'#", $config_content, $matches );
    $config[$key] = $matches[1];
}

preg_match( "#table_prefix = '(.*)'#", $config_content, $matches );
$config['DB_PREFIX'] = $matches[1];

if ( preg_match( '#:#', $config['DB_HOST'] ) ) {
    $parts = explode( ':', $config['DB_HOST'] );
    $config['DB_HOST'] = $parts[0];
    $config['DB_PORT'] = $parts[1];
} else {
    $config['DB_PORT'] = 3306;
}

return $config;
