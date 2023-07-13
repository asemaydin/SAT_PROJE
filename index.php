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

<body>
    <header>
        <header>
            <h2>Hastane Otomasoyn</h2>
        </header>

        
        <div class="tableOuter">
            <h1>Giriş Yap</h1>
            <form action="islem.php" method="post">
                <div class="user">
                    <input type="text" name="tc" placeholder="Tc Kimlik No">
                </div>
                <div class="pass">
                    <input type="password" name="password" placeholder="Şifre">
                </div>
                <button type="submit" class="sub">Giriş Yap</button>
                <br>
            </form>
            <a href="uye.php"><button type="submit" class="sub"> Üye Ol </button></a>
        </div>
    </header>
</body>
</html>