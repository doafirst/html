<?php
// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'wordpress' );

/** MySQL database password */
define( 'DB_PASSWORD', 'wordpress' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

define( 'AUTH_KEY',         '7B NxcBWg1W-uP,{)qE@k/z2m:=yS!{3Xm,>geslbpBk.~Onv6^NHhUhA#^o~Wbr' );
define( 'SECURE_AUTH_KEY',  'hZ0qmu6wS8|`ry$nprU_Jyob=::?z-E3r+RF$pn2cY?m4Q3UU~*n*P<Op94e+R=&' );
define( 'LOGGED_IN_KEY',    'P+ftd:`rqX:}1+dUYmp_tf 7oAtfw]5*{[LB`gcw`*54:GG5B@v*uesHJhZQJ-*1' );
define( 'NONCE_KEY',        ']wOoFF}j|T%Z:1<[j1{voK6f;8`ch#Uh NeHCIb(i5O+Ei4zG(#{&c[@<=[w3`uT' );
define( 'AUTH_SALT',        'iZVR]=UpT2^HH|F<$!CUL06@hvV Qd@+ip}|rE)j3wQgl@72!5GV:(iZ6zHUY?E_' );
define( 'SECURE_AUTH_SALT', 'Hb_*!L={5B~3!E.xkz_QGGBb@,~sYON*yR`f9*wj&M#Or~m~,R6v01-w^^d]7R!e' );
define( 'LOGGED_IN_SALT',   '@a)Kmm5i5f!G=bdH+(r.FpU _L=0K8LJ^DS5@96CO`<:P+exrggZE|8`dX_6*|81' );
define( 'NONCE_SALT',       'HeYV/+E:v:,u8)0H0CDuFRdK}n c5,we :cTCNxsN6PQzvq:Bf;H(o??lZJs)H=a' );

define('FS_METHOD','direct');
$table_prefix = 'wp_';

define( 'WP_DEBUG', false );

if ( ! defined( 'ABSPATH' ) ) {
    define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';