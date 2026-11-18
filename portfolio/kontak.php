<?php
require 'koneksi.php';
require 'includes/data.php';
require 'includes/layout.php';
require 'includes/sections.php';

mulai_halaman('kontak.php', 'Kontak — Daelzra');
bagian_kontak(ambil_kontak($conn), 'block page-top');
akhiri_halaman();
