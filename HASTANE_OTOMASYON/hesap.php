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
            <label for="">AD</label>
            <input type="text">
        </div> <br>

        <div class="label">
            <label for="">SOYAD</label>
            <input type="text">
        </div> <br>

        <div class="label">
            <label for="">T.C.NO</label>
            <input type="text">
        </div> <br>

        <div class="label">
            <label for="">TELEFON NO</label>
            <input type="text">
        </div> <br>

        <div class="label">
            <label for="">MAIL</label>
            <input type="text">
        </div> <br>
    <button type="submit">Güncelle</button>
    </div>
</body>
</html>