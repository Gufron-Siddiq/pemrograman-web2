
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "lat_dbase";

$conn = mysqli_connect($servername, $username, $password);

if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

$sql = "CREATE DATABASE $dbname";

if (mysqli_query($conn, $sql)) {
    echo "Database $dbname berhasil dibuat";
} else {
    echo "Gagal membuat database: " . mysqli_error($conn);
}

mysqli_close($conn);
?>
```