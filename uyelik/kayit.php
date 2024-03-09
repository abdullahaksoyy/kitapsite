<?php
include("baglanti.php");

if (isset($_POST["kaydet"])) { // Parantez eksikti

    $name = $_POST["kullaniciadi"];
    $email = $_POST["email"]; // _POST yerine $_POST kullanılmalı
    $password = $_POST["parola"]; // _POST yerine $_POST kullanılmalı

   $ekle = "INSERT INTO kullanıcılar (kullanici_adi, email, parola) VALUES ('$name', '$email', '$password')";

    $calistirekle = mysqli_query($baglanti, $ekle);

    if ($calistirekle) {
        echo '<div class="alert alert-success" role="alert">
        Kayıt başarıyla eklendi </div>';
    } else {
        echo "Kayıt oluşturulurken bir hata oluştu: " . mysqli_error($baglanti);
    }

    mysqli_close($baglanti);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Kayıt Formu</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            margin: 0;
            padding: 20px;
        }

        h1 {
            text-align: center;
            margin-bottom: 30px;
            color: #333;
        }

        form {
            max-width: 400px;
            margin: 0 auto;
            background: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        label {
            display: block;
            margin-bottom: 10px;
            color: #333;
        }

        input[type="text"],
        input[type="email"],
        input[type="password"],
        input[type="submit"] {
            width: calc(100% - 12px);
            padding: 8px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        input[type="submit"] {
            background-color: #007bff;
            color: #fff;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>
</head>

<body>
    <h1>Kayıt Formu</h1>
    
    <?php
    // Display success message if the 'success' parameter is present in the URL
    if (isset($_GET['success']) && $_GET['success'] == 'true') {
        echo '<p style="color: green; text-align: center;">Kayıt başarıyla tamamlandı!</p>';
    }
    ?>
    
    <form method="post" action="kayit.php">
        <label for="kullaniciadi">Kullanıcı Adı:</label><br>
        <input type="text" id="kullaniciadi" name="kullaniciadi"><br>
        <label for="email">E-posta:</label><br>
        <input type="email" id="email" name="email"><br>
        <label for="parola">Parola:</label><br>
        <input type="password" id="password" name="parola"><br><br>
        <input type="submit" name="kaydet" value="Kayıt Ol">
    </form>
</body>

</html>
