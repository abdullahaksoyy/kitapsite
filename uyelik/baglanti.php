<?php

$host = "localhost";
$kullanici = "root";
$parola = "";
$vt = "uyelik"; // Veritabanı adını güncelledim

$baglanti = mysqli_connect($host, $kullanici, $parola, $vt);

if (!$baglanti) {
    die("Veritabanı bağlantısı başarısız: " . mysqli_connect_error());
}

mysqli_set_charset($baglanti, "UTF8");

?>