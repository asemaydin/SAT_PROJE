<!-- php taglarının açılması  -->
<?php
// giriş çıkış işlemleri için sessionlar ekliyoruz

ob_start();
session_start();

// giriş yapmadan anasayfa.phpye girilmesini engelleyene komut satırı
$kullanicisor=$db->prepare("SELECT * FROM kullanici WHERE kullanici_tc=:kullanici_tc");
$kullanicisor->execute([
    'kullanici_tc' => $_SESSION['userkullanici_tc']
]);

$say=$kullanicisor->rowCount();
$kullanicicek=$kullanicisor->fetch(PDO::FETCH_ASSOC);
if ($say=0) {
    header('location:index.php?izinsiz');
    exit;
}


// veritabanı içeren baglan.php include ettik
include 'baglan.php';


?>

<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Hastane Otomasyon</title>
</head>
<body>

    <div class="ust_bar">
        <!-- anasayfa.php ye yönlendiren kod parçası  -->
        <a href="anasayfa.php"><h1>Hastane Otomasyon</h1></a>
        <div class="menu">
            <a href="hesap.php"><h5>Hesap Bilgileri</h5></a>
            <a href="randevu.php"><h5>Randevu Bilgileri</h5></a>
        </div>
    </div>
    <div class="cikis">
        Çıkış Yap
    </div>
</body>
</html>