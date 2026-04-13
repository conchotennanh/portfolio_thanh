<?php
/**
 * The base configuration for WordPress
 */

// ** Database settings - Thông số lấy từ hình ảnh image_229201.jpg ** //

/** Tên database chính xác trên Hosting */
define( 'DB_NAME', 'if0_41617625_thanh_profile' );

/** Username database */
define( 'DB_USER', 'if0_41617625' );

/** Mật khẩu database (Cái mà bạn đã đổi là PhAmTrUnGtHaNh) */
define( 'DB_PASSWORD', 'PhAmTrUnGtHaNh' );

/** Database hostname (sql100.infinityfree.com) */
define( 'DB_HOST', 'sql100.infinityfree.com' );

/** Database charset */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 */
define( 'AUTH_KEY',         '2+TuGZ$b@M4RnVdA4[IvD)=H4O[fPz+*+*4Cb-bBm?o?A9_!}Gz|Ts}6RS9Op+:7' );
define( 'SECURE_AUTH_KEY',  'hslHA_DX1c8s`DGeIlI3~N:,a[9&0:Rsi]+y/7~pEIzsQ*/kN!ZtU(t=]kBl7,HL' );
define( 'LOGGED_IN_KEY',    'squzov}t#v3U?0UdI dC;Oe-:S)3i3*SLod{M/eRrx95F-LR$d9dVY4E.B5(ek7{' );
define( 'NONCE_KEY',        '%<A()O`+2<AtwE4dwlxfxXBy:N>JSXb$(u;1@>H/4]#F6_>$-_BGSv1G: 4<;_jF' );
define( 'AUTH_SALT',        '<gjD=HL}u@u~S?hla2-;i}rAmX9$X&2/c&6KrYM`0}GKq;Q-EvrP;Kqy;&|Z6Tsk' );
define( 'SECURE_AUTH_SALT', 'MS>x?uir=s&)6`V-S>gz#(e0OkD%Q`r S?:TODbdu3wT;wArvH-PyW<)>yWP;dH[' );
define( 'LOGGED_IN_SALT',   '4`g20k]:UOx9B.>{s<FqmS]V%[AosA|]0@u+Vn+eh.JMj7}v%_u&tQuQ{k2o^OZ$' );
define( 'NONCE_SALT',       'uY1+LW-_5o(M.|5M1x5mla6 Kg@shhe >U.ELbd} @71nh`@tomO}X:38s2Bq)Sz' );

/**
 * WordPress database table prefix.
 * Thành lưu ý: Nếu database của bạn không có tiền tố wp_ thì để trống ''
 */
$table_prefix = 'wp_';

define( 'WP_DEBUG', false );

if ( ! defined( 'ABSPATH' ) ) {
    define( 'ABSPATH', __DIR__ . '/' );
}

require_once ABSPATH . 'wp-settings.php';