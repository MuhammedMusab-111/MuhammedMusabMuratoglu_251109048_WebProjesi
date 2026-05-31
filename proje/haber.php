<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Haber Sayfası</title>
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

    <div class="m-haber-sayfa">
    <div class="m-haber-kart">
    <h2 class="m-sayfa-baslik">Teknoloji Haberleri</h2>

    <table class="m-haber-tablosu"> <!--Dış dosyadan alarak göstermeyi seçtim. Admine birşey koymam gerekiyordu, ben de bunu koydum, ve ona göre burayı değiştirdim-->
        <?php
        require "veritabani.php";
        $sorgu = $db->query("
            SELECT h.baslik, h.icerik, k.kategori_adi
            FROM 251109048_haberler h
            JOIN 251109048_kategoriler k ON h.kategori_id = k.id
        ");

        while ($haber = $sorgu->fetch(PDO::FETCH_ASSOC)) {
            echo "<tr>";
            echo "<td>" . $haber["baslik"] . "</td>";
            echo "<td>" . $haber["kategori_adi"] . "</td>";
            echo "<td>" . date("D-m-y") . "</td>";
            echo "</tr>";
        }
        ?>
        <!--Herhangi bir tarih olması yerine onu yazdığım günün tarihi olmasını istedim. Bu nedenle "d-m-y" kullandım-->
    </table>
    </div>
    </div>
</body>
</html>