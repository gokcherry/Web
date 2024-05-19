<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $valid_eposta = "b221210019@sakarya.edu.tr";
    $valid_sifre = "b221210019";

    $eposta = isset($_POST['eposta']) ? $_POST['eposta'] : '';
    $sifre = isset($_POST['sifre']) ? $_POST['sifre'] : '';

    if ($eposta === $valid_eposta && $sifre === $valid_sifre) {
        echo "<h1>Hoşgeldin,</h1>";
        echo "<h1><i>b221210019</i></h1>";
        echo "<h2><a href='index.html'>Ana Sayfa</a></h2>";
    } else {
        echo "<h1>Hatalı Giriş</h1>";
        echo "<h2><a href='login.html'>Geri Dön</a></h2>";
    }
} else {
    echo "<h1>Geçersiz istek.</h1>";
}
?>
