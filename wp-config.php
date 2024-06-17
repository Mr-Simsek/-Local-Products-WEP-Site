<?php
/**
 * WordPress için başlangıç ayar dosyası.
 *
 * Bu dosya kurulum sırasında wp-config.php dosyasının oluşturulabilmesi için
 * kullanılır. İsterseniz bu dosyayı kopyalayıp, ismini "wp-config.php" olarak değiştirip,
 * değerleri girerek de kullanabilirsiniz.
 *
 * Bu dosya şu ayarları içerir:
 * 
 * * Veritabanı ayarları
 * * Gizli anahtarlar
 * * Veritabanı tablo ön eki
 * * ABSPATH
 * 
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Veritabanı ayarları - Bu bilgileri servis sağlayıcınızdan alabilirsiniz ** //
/** WordPress için kullanılacak veritabanının adı */
define( 'DB_NAME', 'wepsitesii' );

/** Veritabanı kullanıcısı */
define( 'DB_USER', 'aliiosman' );

/** Veritabanı parolası */
define( 'DB_PASSWORD', '' );

/** Veritabanı sunucusu */
define( 'DB_HOST', 'localhost' );

/** Yaratılacak tablolar için veritabanı karakter seti. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Veritabanı karşılaştırma tipi. Herhangi bir şüpheniz varsa bu değeri değiştirmeyin. */
define( 'DB_COLLATE', '' );

/**#@+
 * Eşsiz doğrulama anahtarları ve tuzlar.
 *
 * Her anahtar farklı bir karakter kümesi olmalı!
 * {@link http://api.wordpress.org/secret-key/1.1/salt WordPress.org secret-key service} servisini kullanarak yaratabilirsiniz.
 * 
 * Çerezleri geçersiz kılmak için istediğiniz zaman bu değerleri değiştirebilirsiniz.
 * Bu tüm kullanıcıların tekrar giriş yapmasını gerektirecektir.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '7dqs[mA)9?w@*Ng 7>(@Mf;].bk8bc6zr2]K*q^}iu-ddqb$l:R8ruQ0!:D:i[]N' );
define( 'SECURE_AUTH_KEY',  'iL9I4a -U(Byi#c:$jN[Wvbnd`zlJx(+rxixVoKz=2Kula7 @QN7OL%9+mHa2yjm' );
define( 'LOGGED_IN_KEY',    'QQ=&fmcqejJEO=6I.%|r;8%x@aL#=7HBj|*tRVpQ>7IRti )0.B:Xl]^Biga7Zx=' );
define( 'NONCE_KEY',        '<).;t,[F>jd4N&Ow@F$Q04~5T6X*x+[!K/VD(m/XW?gQ;i|QSn!~i2qMKswCB403' );
define( 'AUTH_SALT',        'XE<k~|DQ+/ r_|<Fzh4tb_b9v=xX/ez8wHP[#T/y^g-lY{Q}mqG$BH[UHG)Q5=_E' );
define( 'SECURE_AUTH_SALT', 'K/L)#[h4)9FR%aV*uYK*;Bc krT0]@;#Dqx/rp/6JZm m7)IwDPX<_ZZH/w)OnYG' );
define( 'LOGGED_IN_SALT',   'BD:Bdq@SK_JsZt9X`=&I5h/GP*M1THu4t4ng=N:((Sx,z{ikFxacuLENAo0!G%.i' );
define( 'NONCE_SALT',       'FfLT5{UF]9sU{g$`_FUcB#0_LwujLsQ{_G~^WN,d(m_}2M8Y>%%.P6-MIds4!GeF' );

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
 * Bu değeri true olarak ayarlayıp geliştirme sırasında hataların ekrana
 * basılmasını sağlayabilirsiniz. Tema ve eklenti geliştiricilerinin geliştirme
 * aşamasında WP_DEBUG kullanmalarını önemle tavsiye ederiz.
 * 
 * Hata ayıklama için kullanabilecek diğer sabitler ile ilgili daha fazla bilgiyi
 * belgelerden edinebilirsiniz.
 * 
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Her türlü özel değeri bu satı ile "Hepsi bu kadar" yazan satır arasına ekleyebilirsiniz. */



/* Hepsi bu kadar. Mutlu bloglamalar! */

/** WordPress dizini için mutlak yol. */
if ( ! defined( 'ABSPATH' ) ) {
    define( 'ABSPATH', __DIR__ . '/' );
}

/** WordPress değişkenlerini ve yollarını kurar. */
require_once ABSPATH . 'wp-settings.php';