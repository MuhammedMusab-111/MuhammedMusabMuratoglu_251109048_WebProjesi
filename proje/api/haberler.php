<?php
require "../veritabani.php";
header("Content-Type: application/json");
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $sorgu = $db->query("SELECT * FROM 251109048_haberler");
    $sonuc = $sorgu->fetchAll(PDO::FETCH_ASSOC);
    echo json_encode($sonuc);
    exit();
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $data = json_decode(file_get_contents("php://input"), true);
    $baslik = $data["baslik"];
    $icerik = $data["icerik"];
    $kategori_id = $data["kategori_id"];
    $sorgu = $db->prepare("
        INSERT INTO 251109048_haberler (baslik, icerik, kategori_id)
        VALUES (?, ?, ?)
    ");
}
if ($_SERVER["REQUEST_METHOD"] == "DELETE") {
    $data = json_decode(file_get_contents("php://input"), true);
    $id = $data["id"];
    $sorgu = $db->prepare("DELETE FROM 251109048_haberler WHERE id = ?");
    $sorgu->execute([$id]);
    echo json_encode(["message" => "Haber silindi"]);
    exit();
}
if ($_SERVER["REQUEST_METHOD"] == "PUT") {
    $data = json_decode(file_get_contents("php://input"), true);
    $id = $data["id"];
    $baslik = $data["baslik"];
    $icerik = $data["icerik"];
    $sorgu = $db->prepare("
        UPDATE 251109048_haberler
        SET baslik = ?, icerik = ?
        WHERE id = ?
    ");
    $sorgu->execute([$baslik, $icerik, $id]);
    echo json_encode(["message" => "Haber güncellendi"]);
    exit();
}
?>