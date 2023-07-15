<!-- temel html kodlarının eklenmesi -->
<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <!-- site başlığının değiştirilmesi -->
    <title>Hastane Otomasyon</title>  
</head>

<!-- body elementlerinin eklenmesi -->
<body>                      
    <header>
        <!-- başlık eklenmesi -->
        <header>
            <h2>Hastane Otomasyon</h2>
        </header>

        <!-- buttonların ve inputların eklenmesi -->
        <div class="tableOuter">
            <h1>Giriş Yap</h1>
            <form action="islem.php" method="post">
                <div class="user">
                    <input type="text" name="tc" placeholder="Tc Kimlik No">
                </div>
                <div class="pass">
                    <input type="password" name="password" placeholder="Şifre">
                </div>
                <button type="submit" class="sub" id="giris" name="giris_yap">Giriş Yap</button>
                <br>
            </form>
            <!-- üye ol butonuna basıldığında üye ol formuna yönlendiren kod parçası -->
            <a href="uye.php"><button type="submit" class="sub" id="uye"> Üye Ol </button></a>
        </div>
    </header>
</body>
</html>