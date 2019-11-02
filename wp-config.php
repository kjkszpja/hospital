<?php
/**
 * WordPress için taban ayar dosyası.
 *
 * Bu dosya şu ayarları içerir: MySQL ayarları, tablo öneki,
 * gizli anahtaralr ve ABSPATH. Daha fazla bilgi için
 * {@link https://codex.wordpress.org/Editing_wp-config.php wp-config.php düzenleme}
 * yardım sayfasına göz atabilirsiniz. MySQL ayarlarınızı servis sağlayıcınızdan edinebilirsiniz.
 *
 * Bu dosya kurulum sırasında wp-config.php dosyasının oluşturulabilmesi için
 * kullanılır. İsterseniz bu dosyayı kopyalayıp, ismini "wp-config.php" olarak değiştirip,
 * değerleri girerek de kullanabilirsiniz.
 *
 * @package WordPress
 */

// ** MySQL ayarları - Bu bilgileri sunucunuzdan alabilirsiniz ** //
/** WordPress için kullanılacak veritabanının adı */
define( 'DB_NAME', 'hastane_db' );

/** MySQL veritabanı kullanıcısı */
define( 'DB_USER', 'root' );

/** MySQL veritabanı parolası */
define( 'DB_PASSWORD', '' );

/** MySQL sunucusu */
define( 'DB_HOST', 'localhost' );

/** Yaratılacak tablolar için veritabanı karakter seti. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Veritabanı karşılaştırma tipi. Herhangi bir şüpheniz varsa bu değeri değiştirmeyin. */
define('DB_COLLATE', '');

/**#@+
 * Eşsiz doğrulama anahtarları.
 *
 * Her anahtar farklı bir karakter kümesi olmalı!
 * {@link http://api.wordpress.org/secret-key/1.1/salt WordPress.org secret-key service} servisini kullanarak yaratabilirsiniz.
 * Çerezleri geçersiz kılmak için istediğiniz zaman bu değerleri değiştirebilirsiniz. Bu tüm kullanıcıların tekrar giriş yapmasını gerektirecektir.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '>/J=1YV3~Uz]Gz/@*:8],X.^Qm(Wjp:;%Z:dg~ne1RI}W+9M,r O)q;QE7un Y^{' );
define( 'SECURE_AUTH_KEY',  'v8J$`Dq~{)R,OygH}Gei6jqP/Zk {d_jLXSJ^f@H=M`VeHBu_AE5H 5tbI=&0zYB' );
define( 'LOGGED_IN_KEY',    'le%S38=YoZ/KDmpy<+FVs=R~2c)Mw,mET%W&GQ?3wpC1XTQUz{F{j~@lE5$k~F3#' );
define( 'NONCE_KEY',        '@{R$ X@0S!ja0{`.$855Y:VdY4D!aqy}mJ?~q=F{o!_nrv#XYQ++];9O1ja&qmVg' );
define( 'AUTH_SALT',        'Tt:^M@_<@1umG. ?72jV=}L%i`mDVR9xrEEDIl.&A>xQ>rnYhR/Kx7`n-I9jZ@A|' );
define( 'SECURE_AUTH_SALT', 'A !zZd::j-_ ;0[:D1Aookqv10gwz!>_)Fe8@p`]#=Za$Ww&_Yp&N PF&GHTSi=G' );
define( 'LOGGED_IN_SALT',   'EwkAo_m(DwxmHPKjT-(ElC[_>Pr2{k~*0)1|Yox-Bspse6>-Y!%UE, :5w8ipA|7' );
define( 'NONCE_SALT',       '@f*Xc<d<ca}A^f0FDdcLVWx[M$riVo!9`*`ej|+]atJq>C@<+X$G&SaY BV66y|]' );
/**#@-*/

/**
 * WordPress veritabanı tablo ön eki.
 *
 * Tüm kurulumlara ayrı bir önek vererek bir veritabanına birden fazla kurulum yapabilirsiniz.
 * Sadece rakamlar, harfler ve alt çizgi lütfen.
 */
$table_prefix = 'wp_';

/**
 * Geliştiriciler için: WordPress hata ayıklama modu.
 *
 * Bu değeri "true" yaparak geliştirme sırasında hataların ekrana basılmasını sağlayabilirsiniz.
 * Tema ve eklenti geliştiricilerinin geliştirme aşamasında WP_DEBUG
 * kullanmalarını önemle tavsiye ederiz.
 */
define('WP_DEBUG', false);

/* Hepsi bu kadar. Mutlu bloglamalar! */

/** WordPress dizini için mutlak yol. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** WordPress değişkenlerini ve yollarını kurar. */
require_once(ABSPATH . 'wp-settings.php');
