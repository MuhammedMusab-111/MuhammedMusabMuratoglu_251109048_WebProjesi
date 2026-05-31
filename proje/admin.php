<!--Bu sayfayı haber ekleme ve silme amacı ile kullanmaya karar verdim.-->
<?php
require "veritabani.php";
if (isset($_POST["ekle"])) {
    $baslik = $_POST["baslik"];
    $icerik = $_POST["icerik"];
    $kategori_id = $_POST["kategori_id"];
    $sorgu = $db->prepare("
        INSERT INTO 251109048_haberler (baslik, icerik, kategori_id)
        VALUES (?, ?, ?)
    ");
    $sorgu->execute([$baslik, $icerik, $kategori_id]);
}
if (isset($_GET["sil"])) {

    $id = $_GET["sil"];

    $sorgu = $db->prepare("DELETE FROM 251109048_haberler WHERE id = ?");
    $sorgu->execute([$id]);

    header("Location: admin.php");
    exit();
}
session_start();
if (!isset($_SESSION["kullanici"])) {
    header("Location: giris.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADMIN</title>
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
    <h2 class="m-sayfa-baslik">Admin Paneli</h2>
    <div class="m-admin-kutusu">
        <p>Merhaba:
            <strong>
                <?php echo $_SESSION["kullanici"]; ?>
            </strong>
        </p>
        <p>Buradan haber ekleme ve silme işlemleri yapılır.</p>
        <a href="cikis.php">Çıkış Yap</a>
    </div>
    <div class="m-admin-kutusu">
        <h3>Haber ekle</h3>
    <form method="POST" action="admin.php">
        <input type="text" name="baslik" placeholder="Başlık"><br><br>
        <textarea name="icerik" placeholder="İçerik"></textarea><br><br>
        <select name="kategori_id">
            <option value="1">AI</option>
            <option value="2">Mobil</option>
            <option value="3">Web</option>
        </select><br><br>
        <button type="submit" name="ekle">Ekle</button>
    </form>
    <h3>Mevcut Haberler</h3>
    <?php
        $sorgu = $db->query("SELECT * FROM 251109048_haberler");
        while ($haber = $sorgu->fetch(PDO::FETCH_ASSOC)) {
            echo "<div style='background:white; margin:10px; padding:10px;'>";
            echo "<b>" . $haber["baslik"] . "</b><br>";
            echo $haber["icerik"] . "<br>";
            echo "<a href='admin.php?sil=" . $haber["id"] . "'>Sil</a>";
            echo "</div>";
        }
    ?>
    </div>
</body>
</html>