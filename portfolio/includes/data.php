<?php
// Fungsi pengambil data dari database + helper
function e($teks) { return htmlspecialchars((string)$teks, ENT_QUOTES, 'UTF-8'); }

function ambil_semua(mysqli $conn, string $sql): array {
    return $conn->query($sql)->fetch_all(MYSQLI_ASSOC);
}
function ambil_pribadi(mysqli $conn): array {
    return $conn->query('SELECT * FROM tbl_data_pribadi LIMIT 1')->fetch_assoc();
}
function ambil_pendidikan(mysqli $conn): array { return ambil_semua($conn, 'SELECT * FROM tbl_pendidikan ORDER BY id'); }
function ambil_skill(mysqli $conn): array      { return ambil_semua($conn, 'SELECT * FROM tbl_skill ORDER BY id'); }
function ambil_portofolio(mysqli $conn): array { return ambil_semua($conn, 'SELECT * FROM tbl_portofolio ORDER BY urutan'); }
function ambil_kontak(mysqli $conn): array     { return ambil_semua($conn, 'SELECT * FROM tbl_kontak ORDER BY urutan'); }
