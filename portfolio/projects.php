<?php
require 'koneksi.php';
require 'includes/data.php';
require 'includes/layout.php';
require 'includes/sections.php';

mulai_halaman('projects.php', 'Projects — Daelzra');
bagian_projects(ambil_portofolio($conn), 'block ink page-top');
akhiri_halaman();
