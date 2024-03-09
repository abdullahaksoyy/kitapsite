<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Üyeler</title>
</head>
<body>
<table align="center" border="1" bgcolor="#7ab2bc" width="600">
<tr align="center">
<td>Sıra No</td><td>Üye No</td><td>Kullanıcı Adı</td><td>Şifre</td><td>E-Posta</td><td>Kayıt Tarihi</td>
</tr>

<?php
$baglanti = mysqli_connect("localhost", "root", "", "uyelik");
if (mysqli_connect_errno()) {
    echo "Bağlantı hatası: " . mysqli_connect_error();
    exit();
}
$sonuc = mysqli_query($baglanti, "SELECT * FROM kullanıcılar");
mysqli_set_charset($baglanti, "utf8");
$sayac = 0;

while ($satir = mysqli_fetch_row($sonuc)) {
    $sayac = $sayac + 1;
    echo "<tr>
    <td width='55' align='right'>$sayac</td>
    <td width='70' align='right'>$satir[0]</td>
    <td>$satir[1]</td>
    <td>$satir[2]</td>
    <td width='75'>$satir[3]</td>
    <td width='150'>$satir[4]</td>
    </tr>";
}
mysqli_close($baglanti);
?>
</table>

<?php
echo "<center>Admin sayfasına hoş geldiniz..! ";
echo "<a href=giris.php>Güvenli çıkış</a></center>";
?>
</body>
</html>