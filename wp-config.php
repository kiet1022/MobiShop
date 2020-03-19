<?php
define('WP_CACHE', true); // Added by WP Rocket
/**
 * Cấu hình cơ bản cho WordPress
 *
 * Trong quá trình cài đặt, file "wp-config.php" sẽ được tạo dựa trên nội dung 
 * mẫu của file này. Bạn không bắt buộc phải sử dụng giao diện web để cài đặt, 
 * chỉ cần lưu file này lại với tên "wp-config.php" và điền các thông tin cần thiết.
 *
 * File này chứa các thiết lập sau:
 *
 * * Thiết lập MySQL
 * * Các khóa bí mật
 * * Tiền tố cho các bảng database
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Thiết lập MySQL - Bạn có thể lấy các thông tin này từ host/server ** //
/** Tên database MySQL */
define( 'DB_NAME', 'kietkunx_mobishop_local' );

/** Username của database */
define( 'DB_USER', 'kietkunx_admin' );

/** Mật khẩu của database */
define( 'DB_PASSWORD', '1022Kiet.' );

/** Hostname của database */
define( 'DB_HOST', '45.252.248.44' );

/** Database charset sử dụng để tạo bảng database. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Kiểu database collate. Đừng thay đổi nếu không hiểu rõ. */
define('DB_COLLATE', '');

/**#@+
 * Khóa xác thực và salt.
 *
 * Thay đổi các giá trị dưới đây thành các khóa không trùng nhau!
 * Bạn có thể tạo ra các khóa này bằng công cụ
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * Bạn có thể thay đổi chúng bất cứ lúc nào để vô hiệu hóa tất cả
 * các cookie hiện có. Điều này sẽ buộc tất cả người dùng phải đăng nhập lại.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '*Y={[U5u TbK.lXu B%vK6:JJb.jQ71<4,:]#04?R^,0- 5i/8EMt3)Im4=r5!&L' );
define( 'SECURE_AUTH_KEY',  'P@E<vO`._n;cyUOq:9o`2_D:M;hyuxz/gAf)07bHt9Op(%ym*:3)_,~oQ(+0 BD8' );
define( 'LOGGED_IN_KEY',    'oZm1(z|%-JK>+Kp$;RdHhWF>zyov!N@#Db~_s3jV.13;wOkF=*Cd?Oy;Gmx f;>e' );
define( 'NONCE_KEY',        '`k|W&0*S! ap*$5Zkb)K*(0!15CZO/%D3_IM.V}u|aI7hhA;.CiP[|@QlW%(`8(x' );
define( 'AUTH_SALT',        '$/RxmuS=}B?15$@[tC/n8_/u!DO?JIy,4`FU|Ewp8PI=e%`# Lvv_(?GTi*ijLA{' );
define( 'SECURE_AUTH_SALT', '0{|6KNo{292|Jf/,gp^A(]7UFd>+L#eCet0iH.zfq$|%J%4`JVTn:]+oiO<[?!:o' );
define( 'LOGGED_IN_SALT',   'XaSE0KmqhS1mWZw-Rq<rc{v< r|cD)=mKhJ]G!fhIkx=vV~dvvWno_D8<l[ZQHL-' );
define( 'NONCE_SALT',       'O^3-[dVDj!Zo*f+~(V0b[RgNi@QjEv~D_PU7#nlYt L7/pWVo)Q]Be68`(N:-B)L' );

/**#@-*/

/**
 * Tiền tố cho bảng database.
 *
 * Đặt tiền tố cho bảng giúp bạn có thể cài nhiều site WordPress vào cùng một database.
 * Chỉ sử dụng số, ký tự và dấu gạch dưới!
 */
$table_prefix  = 'wpsim_';

/**
 * Dành cho developer: Chế độ debug.
 *
 * Thay đổi hằng số này thành true sẽ làm hiện lên các thông báo trong quá trình phát triển.
 * Chúng tôi khuyến cáo các developer sử dụng WP_DEBUG trong quá trình phát triển plugin và theme.
 *
 * Để có thông tin về các hằng số khác có thể sử dụng khi debug, hãy xem tại Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* Đó là tất cả thiết lập, ngưng sửa từ phần này trở xuống. Chúc bạn viết blog vui vẻ. */

/** Đường dẫn tuyệt đối đến thư mục cài đặt WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Thiết lập biến và include file. */
require_once(ABSPATH . 'wp-settings.php');
