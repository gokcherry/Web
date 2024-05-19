<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $isim = isset($_POST['adi']) ? trim($_POST['adi']) : '';
    $soyad = isset($_POST['soyadi']) ? trim($_POST['soyadi']) : '';
    $cinsiyet = isset($_POST['cinsiyet']) ? $_POST['cinsiyet'] : '';
    $telefon = isset($_POST['telefon']) ? trim($_POST['telefon']) : '';
    $email = isset($_POST['email']) ? trim($_POST['email']) : '';
    $sehir = isset($_POST['il']) ? $_POST['il'] : '';
    $adres = isset($_POST['adres']) ? trim($_POST['adres']) : '';

    echo "<h1>Form Başarıyla Gönderilmiştir.</h1>";
    echo "<h2>Merhaba <i>" . htmlspecialchars($isim) . "</i></h2>";
    echo "<hr>";
    echo "<p><strong><i>Ad:</i></strong> " . htmlspecialchars($isim) . "</p>";
    echo "<p><strong><i>Soyad:</i></strong> " . htmlspecialchars($soyad) . "</p>";
    echo "<p><strong><i>Cinsiyet:</i></strong> " . htmlspecialchars($cinsiyet) . "</p>";
    echo "<p><strong><i>Telefon:</i></strong> " . htmlspecialchars($telefon) . "</p>";
    echo "<p><strong><i>E-Posta:</i></strong> " . htmlspecialchars($email) . "</p>";
    echo "<p><strong><i>Şehir:</i></strong> " . htmlspecialchars($sehir) . "</p>";
    echo "<p><strong><i>Adres:</i></strong> " . htmlspecialchars($adres) . "</p>";
}
?>
