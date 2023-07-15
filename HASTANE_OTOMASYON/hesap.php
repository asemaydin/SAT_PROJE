<!-- php taglarının açılması ve jeader phpyi içeren kod parçası eklenmesi   -->
<?php include 'header.php' ?>


<!-- temel html kodlarının eklenmesi -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hastane Otomasyon</title>
</head>
<body>
    <!-- ana divlerin eklenmesi adı soyad tc kimlik vs. -->
    <div class="hesabim_content">

        <div class="label">
            <label for="">AD SOYADI</label>
            <input type="text" placeholder="<?php echo $kullanicicek['kullanici_adsoyad'];?>">
        </div> <br>
        <div class="label">
            <label for="">T.C NO</label>
            <input type="text" placeholder="<?php echo $kullanicicek['kullanici_tc'];?>">
        </div> <br>
</body>
</html>