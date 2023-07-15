<!-- veritabanı bağlantısı oluştruan php kodları -->
<?php 

try {
$db = new PDO("mysql:host=localhost; dbname=hastane_otomasyon; charest=utf8 ", 'root' , '' );
//echo 'veritabanı bağlantısı başarılı'; veritabanının çalışıp çalışmadığını print işlemi yaparak denetledik 
} 
catch (Exception $e) {
    echo $e->getMessage();
 }


 
?>