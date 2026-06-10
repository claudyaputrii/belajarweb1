<?php
require_once "database.php";
require_once "users.php";


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    if (isset($_POST["setuju"])) {
        
        $username = $_POST["username"];
        // ... (data lainnya)

        echo "Anda telah menyetujui form<br>";
        
        $database = new Database();
        $conn = $database->connect();
        
        echo "Database terhubung";
    } else {
        echo "Anda harus menyetujui form (Checkbox belum dicentang)";
    }
} else {
    echo "Akses ditolak: Form belum disubmit.";
}
?>