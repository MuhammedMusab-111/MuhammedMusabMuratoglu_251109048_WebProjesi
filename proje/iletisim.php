<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>İletişim</title>
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
    <div class="m-iletisim-form-disari">
    <h2 class="m-sayfa-baslik">İletişim Formu</h2>
    <div class="m-iletisim-formu">
        <form>
            <label>Ad Soyad</label><br>
            <input type="text"><br><br>

            <label>E-posta</label><br>
            <input type="email"><br><br>

            <label>Mesaj Türü</label><br>

            <input type="radio" name="mesaj">
            Haber Önerisi
            <input type="radio" name="mesaj">
            Şikayet
            <input type="radio" name="mesaj">
            Genel Mesaj
            <br><br>

            <label>Konu</label><br>
            <select>
                <option>Yapay Zeka</option>
                <option>Mobil</option>
                <option>Donanım</option>
                <option>Web Teknoloji</option>
            </select>
            <br><br>
            <div class="m-mesaj-alan">
                <label>Mesajınız</label>
                <textarea rows="6"></textarea>
            </div>
            <br><br>
            <button type="submit">Gönder</button>
        </form>
        </div>
    </div>
    <div class="m-ust-menu">
    <h2 class="m-sayfa-baslik">Sayfa Videosu</h2>
    <iframe
    width="560"
    height="315"
    src="https://www.youtube.com/embed/PLACEHOLDER"
    allowfullscreen>
    </iframe> <!--Konu ile alakalı yerine buraya projenin hazır olduğu halindeki videoyu koymak istedim, çünkü dürüst olursam konu ile alakalı video bulamadım.-->
    <h2 class="m-sayfa-baslik">Konum</h2>
    <iframe
    src="https://www.google.com/maps?q=Hüdaverdi%20Sk.%20Pendik%20Istanbul&output=embed"
    width="560"
    height="400"></iframe>
</body>
</html>