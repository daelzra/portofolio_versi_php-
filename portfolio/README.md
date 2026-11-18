# Portofolio Daelzra (PHP + MySQL)

## Struktur
index.php · about.php · projects.php · kontak.php · proses_pesan.php · koneksi.php
includes/ (data.php, layout.php, sections.php) · database/db_portofolio.sql · css/ · js/ · assets/

## Menjalankan di komputer (XAMPP / Laragon)
1. Salin folder ini ke `htdocs` (XAMPP) atau `www` (Laragon).
2. Nyalakan Apache dan MySQL.
3. Buka phpMyAdmin → Import → pilih `database/db_portofolio.sql`.
4. Sesuaikan user/password di `koneksi.php` bila perlu.
5. Buka `http://localhost/<nama-folder>/index.php`.

## Push ke GitHub
git init
git add .
git commit -m "Portofolio versi PHP + MySQL"
git branch -M main
git remote add origin https://github.com/daelzra/<nama-repo>.git
git push -u origin main

Catatan: GitHub Pages tidak menjalankan PHP, jadi GitHub dipakai untuk kode; demo langsung perlu hosting PHP.
