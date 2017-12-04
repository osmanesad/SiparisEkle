


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

$sql = "SELECT * FROM tablo";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "no: " . $row["no"]. " - Okul Adi: " . $row["okul_adi"]. " - Kişi Adı - " . $row["kisi_adi"]. "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>
