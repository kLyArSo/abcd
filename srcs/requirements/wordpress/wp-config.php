<?php

define( 'DB_NAME', 'wordpress_db' );
define( 'DB_USER', 'ylhouari' );
define( 'DB_PASSWORD', 'ylhouari' );
define( 'DB_HOST', 'mariadb:3306' );
define( 'DB_CHARSET', 'utf8mb4' );
define( 'DB_COLLATE', '' );

define( 'AUTH_KEY',         '88h@;5GzulN)d?/ynjsNX: 2RHwGTEs,-fO?d`HrvV/n=sqK;0LuU3#y9_tF31.7' );
define( 'SECURE_AUTH_KEY',  '.4{s^R5<zTP:0PHxC5YsgD2Lu9*%B1JkvZy4c</[+SHhp[iGtUryAIl$$+C*?(s=' );
define( 'LOGGED_IN_KEY',    'oTkzzX7&] ]KhnY*oU7.(erT{5hZKm+~V!:@?BQ@D]1m~]!*kOn-]J.$$;&t/Kyg' );
define( 'NONCE_KEY',        ')$}+r.&E]#3,3!r{`i;k~k_xt^eW7J35Me<tg-JY-7:=OgqTVSjDZeIxb8]4xJ_B' );
define( 'AUTH_SALT',        'GK5kAtGw:x]L`B%B$ai[rngN1*Iacvh8}%$5-QNrJVy6FjEH/^7hZk*0qFT@THVx' );
define( 'SECURE_AUTH_SALT', '$3U4<i+y*%WY8_N>Ltb<p*29`BLV.QGF?`^J,;%O@W iF`5xjdy 3o=scm7veSJ{' );
define( 'LOGGED_IN_SALT',   'LWMr(xWL<0Eyn? EoNrQC(N.0V6KAZ$sx!C[nQ;oC?O]! FhS1y0U2xIqdq$/Cqy' );
define( 'NONCE_SALT',       'R1y~n%rFX6IIp{8!M{S28&+z=K~uEw&Vp170;K $K[S%_>77y=hR$/O@S+_`xDnX' );

$table_prefix = 'wp_';
define('WP_HOME', 'https://ylhouari.42.fr');
define('WP_SITEURL', 'https://ylhouari.42.fr');
define( 'WP_DEBUG', false );

if ( ! defined( 'ABSPATH' ) ) {
	        define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}
require_once( ABSPATH . 'wp-settings.php' );
