
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "veri_tabani";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}

        // Form Gönderilmişmi Kontrolü Yapalım
        if($_POST){

            // Formdan Gelen Kayıtlar


            $okul_adi = $_POST['okul_adi'];
            $kisi_adi = $_POST['kisi_adi'];
            $siparis = $_POST['siparis'];
            $siparis_sayisi = $_POST['siparis_sayisi'];
            $siparis_tutari = $_POST['siparis_tutari'];
            $siparis_notu = $_POST['siparis_notu'];
            $siparis_tarihi = $_POST['siparis_tarihi'];


            // Veritabanına Ekleyelim.
            $ekle = "INSERT INTO tablo (okul_adi, kisi_adi, siparis, siparis_sayisi, siparis_tutari, siparis_notu, siparis_tarihi)
            VALUES ('$okul_adi', '$kisi_adi', '$siparis', '$siparis_sayisi', '$siparis_tutari', '$siparis_notu', '$siparis_tarihi')";

            // Sorun Oluştu mu diye test edelim. Eğer sorun yoksa hata vermeyecektir
            if ($conn->query($ekle) === TRUE) {
      echo "Kayıt Başarılı";
  } else {
      echo "Error: " . $ekle . "<br>" . $conn->error;
  }
        }
 $conn->close();
?>
