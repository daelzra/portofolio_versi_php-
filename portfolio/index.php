<?php
require 'koneksi.php';
require 'includes/data.php';
require 'includes/layout.php';
require 'includes/sections.php';

$p = ambil_pribadi($conn);
mulai_halaman('index.php', $p['nama_panggilan'] . ' — Portofolio Web', $p['headline']);
bagian_home($p);
bagian_about($p, ambil_pendidikan($conn), ambil_skill($conn));
bagian_projects(ambil_portofolio($conn));
bagian_kontak(ambil_kontak($conn));
akhiri_halaman();
