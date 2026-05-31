<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
?>
<!--Bir hata vardı, internette araştırdığımda bunu yazıp diğer session_start'ı sildiğimde geçti. Bu nedenle bu burada var.-->
<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giriş</title>
    <link rel="stylesheet" href="stil.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>
<body>
    <div class="m-ust-menu">
        <a href="index.php"><i class="fa-solid fa-house"></i> Ana Sayfa</a>
        <a href="haber.php"><i class="fa-solid fa-newspaper"></i> Haberler</a>
        <a href="iletisim.php"><i class="fa-solid fa-envelope"></i> İletişim</a>
        <a href="giris.php"><i class="fa-solid fa-user"></i> Giriş</a>
        <a href="admin.php"><i class="fa-solid fa-user-gear"></i> Admin Panel</a>
    </div>
    <form action="giris.php" method="POST" class="m-login-form">
        <h2>Kullanıcı Girişi</h2>
        <input type="text" name="kullanici" placeholder="Kullanıcı Adı"><br><br>
        <input type="password" name="sifre" placeholder="Şifre"><br><br>
        <button type="submit">Giriş</button>
    </form>
    <?php
        require "veritabani.php";
        if ($_POST) {
            $kullanici = $_POST["kullanici"];
            $sifre = $_POST["sifre"];
            $sorgu = $db->prepare("SELECT * FROM 251109048_kullanicilar WHERE kullanici_adi = ? AND sifre = ?");
            $sorgu->execute([$kullanici, $sifre]);
            $user = $sorgu->fetch(PDO::FETCH_ASSOC);
            if ($user) {
                $_SESSION["kullanici"] = $user["kullanici_adi"];
                echo "<p style='color:green'>Giriş başarılı</p>";
            } else {
                echo "<p style='color:red'>Hatalı giriş</p>";
            }
        }
    ?>
    <!--Girilen bilgileri POST ile alıp veritabanına eşleştirmek için burası var-->
    <!--Admine girebilme yolu olması gerektiğinden dolayı isim ve şifre verdim. "admin" ve "1234"-->
</body>
</html>