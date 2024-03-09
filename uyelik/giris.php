<?php
include("baglanti.php");

if (isset($_POST["Giriş"])) {

    $username = mysqli_real_escape_string($baglanti, $_POST["kullaniciadi"]);
    $password = mysqli_real_escape_string($baglanti, $_POST["parola"]);

    $sorgula = "SELECT * FROM kullanıcılar WHERE kullanici_adi='$username' AND parola='$password'";
    $calistir = mysqli_query($baglanti, $sorgula);

    if (mysqli_num_rows($calistir) > 0) {
        // Giriş başarılı, kullanıcıyı JavaScript ile hesabim.php sayfasına yönlendir
        echo '<script>window.location.href = "hesabim.php";</script>';
        exit();
    } else {
        echo "Kullanıcı adı veya şifre hatalı.";
    }

    mysqli_close($baglanti);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Giriş Formu</title>
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
    <h1>Giriş Formu</h1>
    <form method="post" action="giris.php">
        <label for="kullaniciadi">Kullanıcı Adı:</label><br>
        <input type="text" id="kullaniciadi" name="kullaniciadi" required><br>
        <label for="parola">Parola:</label><br>
        <input type="password" id="parola" name="parola" required><br><br>
        <input type="submit" name="Giriş" value="Giriş">
    </form>
</body>

</html>
