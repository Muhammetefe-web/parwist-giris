<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Parwist - Giriş Paneli</title>
    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            background-color: #121212; /* Logonuzla uyumlu koyu arka plan */
            color: #fff;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .container {
            background-color: #1e1e1e; /* Koyu gri kart */
            padding: 40px;
            border-radius: 12px;
            box-shadow: 0 10px 25px rgba(0,0,0,0.5);
            width: 320px;
            text-align: center;
            border: 1px solid #333;
        }

        /* Logo Ayarları */
        .logo-container {
            margin-bottom: 20px;
        }
        .logo-container img {
            max-width: 150px; /* Logo boyutu */
            height: auto;
            border-radius: 5px;
        }

        h2 { margin-bottom: 20px; font-weight: 400; }

        .input-group { margin-bottom: 15px; text-align: left; }

        label { display: block; margin-bottom: 5px; color: #aaa; font-size: 14px; }

        input[type="email"], input[type="password"] {
            width: 100%;
            padding: 12px;
            background-color: #2c2c2c;
            border: 1px solid #444;
            border-radius: 6px;
            color: white;
            box-sizing: border-box;
            outline: none;
        }
        
        input:focus { border-color: #fff; }

        button {
            width: 100%;
            padding: 12px;
            background-color: #fff; /* Parwist Beyazı */
            color: black;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            font-weight: bold;
            margin-top: 10px;
            transition: 0.3s;
        }

        button:hover { background-color: #ddd; }

        .toggle-btn {
            background: none;
            color: #888;
            border: none;
            margin-top: 15px;
            font-size: 13px;
            cursor: pointer;
            text-decoration: underline;
        }
        .hidden { display: none; }
    </style>
</head>
<body>

<div class="container">
    <div class="logo-container">
        <img src="logo.png" alt="Parwist Logo">
    </div>

    <form id="login-form" action="islem.php" method="POST">
        <h2>Giriş Yap</h2>
        <input type="hidden" name="type" value="login">
        
        <div class="input-group">
            <label>E-posta</label>
            <input type="email" name="email" required 
                   value="<?php if(isset($_COOKIE['parwist_email'])) { echo $_COOKIE['parwist_email']; } ?>">
        </div>
        
        <div class="input-group">
            <label>Şifre</label>
            <input type="password" name="password" required
                   value="<?php if(isset($_COOKIE['parwist_pass'])) { echo $_COOKIE['parwist_pass']; } ?>">
        </div>

        <div style="text-align:left; margin-bottom:10px;">
            <input type="checkbox" name="remember" id="rem"> <label for="rem" style="display:inline;">Beni Hatırla</label>
        </div>

        <button type="submit">Giriş Yap</button>
        <button type="button" class="toggle-btn" onclick="toggle()">Hesabın yok mu? Kayıt Ol</button>
    </form>

    <form id="register-form" action="islem.php" method="POST" class="hidden">
        <h2>Kayıt Ol</h2>
        <input type="hidden" name="type" value="register">

        <div class="input-group">
            <label>E-posta Belirle</label>
            <input type="email" name="email" required>
        </div>
        
        <div class="input-group">
            <label>Şifre Belirle</label>
            <input type="password" name="password" required>
        </div>

        <button type="submit">Kaydı Tamamla</button>
        <button type="button" class="toggle-btn" onclick="toggle()">Giriş Ekranına Dön</button>
    </form>
</div>

<script>
    function toggle() {
        document.getElementById('login-form').classList.toggle('hidden');
        document.getElementById('register-form').classList.toggle('hidden');
    }
</script>

</body>
</html><!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Parwist - Giriş Paneli</title>
    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            background-color: #121212; /* Logonuzla uyumlu koyu arka plan */
            color: #fff;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .container {
            background-color: #1e1e1e; /* Koyu gri kart */
            padding: 40px;
            border-radius: 12px;
            box-shadow: 0 10px 25px rgba(0,0,0,0.5);
            width: 320px;
            text-align: center;
            border: 1px solid #333;
        }

        /* Logo Ayarları */
        .logo-container {
            margin-bottom: 20px;
        }
        .logo-container img {
            max-width: 150px; /* Logo boyutu */
            height: auto;
            border-radius: 5px;
        }

        h2 { margin-bottom: 20px; font-weight: 400; }

        .input-group { margin-bottom: 15px; text-align: left; }

        label { display: block; margin-bottom: 5px; color: #aaa; font-size: 14px; }

        input[type="email"], input[type="password"] {
            width: 100%;
            padding: 12px;
            background-color: #2c2c2c;
            border: 1px solid #444;
            border-radius: 6px;
            color: white;
            box-sizing: border-box;
            outline: none;
        }
        
        input:focus { border-color: #fff; }

        button {
            width: 100%;
            padding: 12px;
            background-color: #fff; /* Parwist Beyazı */
            color: black;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            font-weight: bold;
            margin-top: 10px;
            transition: 0.3s;
        }

        button:hover { background-color: #ddd; }

        .toggle-btn {
            background: none;
            color: #888;
            border: none;
            margin-top: 15px;
            font-size: 13px;
            cursor: pointer;
            text-decoration: underline;
        }
        .hidden { display: none; }
    </style>
</head>
<body>

<div class="container">
    <div class="logo-container">
        <img src="logo.png" alt="Parwist Logo">
    </div>

    <form id="login-form" action="islem.php" method="POST">
        <h2>Giriş Yap</h2>
        <input type="hidden" name="type" value="login">
        
        <div class="input-group">
            <label>E-posta</label>
            <input type="email" name="email" required 
                   value="<?php if(isset($_COOKIE['parwist_email'])) { echo $_COOKIE['parwist_email']; } ?>">
        </div>
        
        <div class="input-group">
            <label>Şifre</label>
            <input type="password" name="password" required
                   value="<?php if(isset($_COOKIE['parwist_pass'])) { echo $_COOKIE['parwist_pass']; } ?>">
        </div>

        <div style="text-align:left; margin-bottom:10px;">
            <input type="checkbox" name="remember" id="rem"> <label for="rem" style="display:inline;">Beni Hatırla</label>
        </div>

        <button type="submit">Giriş Yap</button>
        <button type="button" class="toggle-btn" onclick="toggle()">Hesabın yok mu? Kayıt Ol</button>
    </form>

    <form id="register-form" action="islem.php" method="POST" class="hidden">
        <h2>Kayıt Ol</h2>
        <input type="hidden" name="type" value="register">

        <div class="input-group">
            <label>E-posta Belirle</label>
            <input type="email" name="email" required>
        </div>
        
        <div class="input-group">
            <label>Şifre Belirle</label>
            <input type="password" name="password" required>
        </div>

        <button type="submit">Kaydı Tamamla</button>
        <button type="button" class="toggle-btn" onclick="toggle()">Giriş Ekranına Dön</button>
    </form>
</div>

<script>
    function toggle() {
        document.getElementById('login-form').classList.toggle('hidden');
        document.getElementById('register-form').classList.toggle('hidden');
    }
</script>

</body>
</html>