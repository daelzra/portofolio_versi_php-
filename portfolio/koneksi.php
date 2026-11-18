<?php
// koneksi.php — koneksi ke database MySQL (XAMPP/Laragon)
$host = 'localhost';
$user = 'root';
$pass = '';
$db   = 'db_portofolio';

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
try {
    $conn = new mysqli($host, $user, $pass, $db);
    $conn->set_charset('utf8mb4');
} catch (mysqli_sql_exception $e) {
    http_response_code(500);
    exit('Koneksi database gagal. Pastikan MySQL menyala dan database db_portofolio sudah di-import.');
}
