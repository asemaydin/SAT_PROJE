<!-- veritabanı işlemlerini yapacak php dosyasının oluşturulması -->
<?php

ob_start();
session_start();
include 'baglan.php';

if(isset($_POST["kullanicikaydet"])){
                                            //echo 'başarılı';      kaydet butonunun çalışıp çalışmadığını kontrol eden test kodu 
        $kullanici_tc=isset($_POST['kullanici_tc']) ? $_POST['kullanici_tc'] : null;
        $kullanici_adsoyad=isset($_POST['kullanici_adsoyad']) ? $_POST['kullanici_adsoyad'] : null;
        $kullanici_password=isset($_POST['kullanici_password']) ? $_POST['kullanici_password'] : null;


        // veritabanı ekleme işlemleri

        $sorgu = $db->prepare('INSERT INTO kullanici SET
            kullanici_tc = ?,
            kullanici_adsoyad = ?,
            kullanici_password = ?
        ');
        $ekle = $sorgu->execute([
            $kullanici_tc, $kullanici_adsoyad, $kullanici_password
        ]);

        if ($ekle) {
            header('location:index.php?durum=basarili');
            
        } else{
            $hata = $sorgu->errorInfo();
            echo 'mysql hatası' .$hata[2];
        }


}
// kullanıcı doğrulaması yaptıran php komutları 
if (isset($_POST['giris_yap'])) {
    $kullanici_tc = $_POST['kullanici_tc'];
    $kullanici_password = $_POST['kullanici_password'];
    

    $kullanicisor = $db->prepare("SELECT * FROM kullanici WHERE kullanici_tc=:kullanici_tc and kullanici_password=:kullanici_password");
    $kullanicisor-> execute([
        'kullanici_tc' =>$kullanici_tc,
        'kullanici_password' => $kullanici_password
    ]);
// giriş doğrulaması ve yönlendirmesi yaptıran php komutları
    $say = $kullanicisor->rowCount();
    if ($say==1) {
        $_SESSION['userkullanici_tc']=$kullanici_tc;
        header( 'location:anasayfa.php?durum=girisbasarili');
        exit;
    }else {
        header('location:index.php?durum=basarisizgiris');
        exit;
    }
}
?>