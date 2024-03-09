<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Hesabım</title>
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

        .account-container {
            max-width: 600px;
            margin: 0 auto;
            background: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .user-info {
            margin-bottom: 20px;
        }

        .user-info label {
            font-weight: bold;
            display: block;
            margin-bottom: 5px;
            color: #333;
        }

        .user-info span {
            color: #007bff;
        }

        .logout-btn {
            background-color: #dc3545;
            color: #fff;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .logout-btn:hover {
            background-color: #c82333;
        }
    </style>
</head>

<body>
    <h1>Hesabım</h1>
    <div class="account-container">
        <div class="user-info">
            <label>Kullanıcı Adı:</label>
            <span>deneme123</span>
        </div>
        <div class="user-info">
            <label>Email:</label>
            <span>deneme@deneme.com.tr</span>
        </div>
        <div class="user-info">
          
        </div>
        <div class="user-info">
          
        
        </div>
        <button class="logout-btn" onclick="logout()">Çıkış Yap</button>
    </div>

    <script>
        function logout() {
            // Buraya çıkış yapılacak işlemleri ekleyebilirsiniz, örneğin bir oturum kapatma işlemi
            alert("Çıkış yapıldı!");
            window.location.href = "giris.php"; // Giriş sayfasına yönlendir
        }
    </script>
</body>

</html>
