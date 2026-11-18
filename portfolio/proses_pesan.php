<?php
// Menyimpan pesan dari formulir kontak ke tbl_pesan
require 'koneksi.php';

if ($_SERVER['REQUEST_METHOD'] !== 'POST') { header('Location: kontak.php'); exit; }

$nama  = trim($_POST['nama'] ?? '');
$email = trim($_POST['email'] ?? '');
$pesan = trim($_POST['pesan'] ?? '');

if ($nama === '' || $pesan === '' || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
    header('Location: kontak.php?status=gagal#kontak'); exit;
}

$stmt = $conn->prepare('INSERT INTO tbl_pesan (nama, email, pesan) VALUES (?, ?, ?)');
$stmt->bind_param('sss', $nama, $email, $pesan);
$stmt->execute();

header('Location: kontak.php?status=ok#kontak');
