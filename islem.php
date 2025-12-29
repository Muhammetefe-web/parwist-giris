<?php
// islem.php - Sunucu tarafı işlemleri

// Formdan gelen verileri al
$type = $_POST['type']; // 'login' mi 'register' mi?
$email = $_POST['email'];
$password = $_POST['password'];
$remember = isset($_POST['remember']);

// Veritabanı dosyası (Basit metin dosyası)
$db_file = "kullanicilar.txt";

if ($type == 'register') {
    // --- KAYIT İŞLEMİ ---
    
    // Şifreyi ve emaili yan yana yazıp dosyaya ekle (append)
    // Format: email|sifre
    $kayit_satiri = $email . "|" . $password . "\n";
    
    // Dosyaya yaz
    file_put_contents($db_file, $kayit_satiri, FILE_APPEND);
    
    echo "<script>alert('Parwist sistemine kayıt başarılı! Giriş yapabilirsiniz.'); window.location.href='index.php';</script>";

} elseif ($type == 'login') {
    // --- GİRİŞ İŞLEMİ ---
    
    // Dosyayı oku
    if(!file_exists($db_file)) {
        echo "Henüz hiç kayıtlı kullanıcı yok.";
        exit;
    }
    
    $kullanicilar = file($db_file); // Her satırı diziye atar
    $giris_basarili = false;

    foreach($kullanicilar as $satir) {
        list($kayitli_email, $kayitli_sifre) = explode("|", trim($satir));
        
        if($kayitli_email == $email && $kayitli_sifre == $password) {
            $giris_basarili = true;
            break;
        }
    }

    if ($giris_basarili) {
        // Eğer beni hatırla dediyse Çerez (Cookie) oluştur - 30 gün geçerli
        if($remember) {
            setcookie("parwist_email", $email, time() + (86400 * 30), "/");
            setcookie("parwist_pass", $password, time() + (86400 * 30), "/");
        } else {
            // Beni hatırla seçilmediyse çerezleri sil
            setcookie("parwist_email", "", time() - 3600, "/");
            setcookie("parwist_pass", "", time() - 3600, "/");
        }

        echo "<script>alert('Giriş Başarılı! Hoşgeldiniz.'); window.location.href='index.php';</script>";
    } else {
        echo "<script>alert('Hatalı E-posta veya Şifre!'); window.location.href='index.php';</script>";
    }
}
?>