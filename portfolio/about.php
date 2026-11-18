<?php
require 'koneksi.php';
require 'includes/data.php';
require 'includes/layout.php';
require 'includes/sections.php';

$p = ambil_pribadi($conn);
mulai_halaman('about.php', 'About Me — ' . $p['nama_panggilan']);
bagian_about($p, ambil_pendidikan($conn), ambil_skill($conn), 'block page-top');
akhiri_halaman();
