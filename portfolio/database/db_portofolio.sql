-- Database portofolio Daelzra
CREATE DATABASE IF NOT EXISTS db_portofolio CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE db_portofolio;

DROP TABLE IF EXISTS tbl_pesan, tbl_kontak, tbl_portofolio, tbl_skill, tbl_pendidikan, tbl_data_pribadi;

CREATE TABLE tbl_data_pribadi (
  id INT AUTO_INCREMENT PRIMARY KEY,
  nama_lengkap VARCHAR(100) NOT NULL,
  nama_panggilan VARCHAR(50) NOT NULL,
  headline VARCHAR(255) NOT NULL,
  tentang_1 TEXT NOT NULL,
  tentang_2 TEXT,
  foto_hero VARCHAR(150),
  foto_potret VARCHAR(150),
  alt_foto_hero VARCHAR(200),
  alt_foto_potret VARCHAR(200)
);

CREATE TABLE tbl_pendidikan (
  id INT AUTO_INCREMENT PRIMARY KEY,
  institusi VARCHAR(120) NOT NULL,
  jurusan VARCHAR(120) NOT NULL,
  keterangan VARCHAR(200)
);

CREATE TABLE tbl_skill (
  id INT AUTO_INCREMENT PRIMARY KEY,
  nama_skill VARCHAR(80) NOT NULL,
  kategori VARCHAR(60) NOT NULL
);

CREATE TABLE tbl_portofolio (
  id INT AUTO_INCREMENT PRIMARY KEY,
  judul VARCHAR(100) NOT NULL,
  kategori VARCHAR(60) NOT NULL,
  deskripsi TEXT NOT NULL,
  teknologi VARCHAR(150) NOT NULL,
  link_url VARCHAR(255) NOT NULL,
  urutan INT NOT NULL DEFAULT 0
);

CREATE TABLE tbl_kontak (
  id INT AUTO_INCREMENT PRIMARY KEY,
  jenis VARCHAR(40) NOT NULL,
  tampilan VARCHAR(120) NOT NULL,
  url VARCHAR(255) NOT NULL,
  urutan INT NOT NULL DEFAULT 0
);

CREATE TABLE tbl_pesan (
  id INT AUTO_INCREMENT PRIMARY KEY,
  nama VARCHAR(100) NOT NULL,
  email VARCHAR(100) NOT NULL,
  pesan TEXT NOT NULL,
  dikirim_pada TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

INSERT INTO tbl_data_pribadi (nama_lengkap, nama_panggilan, headline, tentang_1, tentang_2, foto_hero, foto_potret, alt_foto_hero, alt_foto_potret) VALUES
('Daffa Elzra Adrian', 'Daelzra',
 'Biasa dipanggil Daelzra. Mahasiswa Teknik Informatika Universitas Paramadina yang suka membangun web, game kecil, dan desain digital.',
 'Saya Daffa Elzra Adrian, mahasiswa Teknik Informatika di Universitas Paramadina. Saya belajar paling cepat dengan mengerjakan proyek nyata: dari game sederhana, situs untuk usaha dan sanggar, sampai sistem informasi bencana bersama tim.',
 'Selain menulis kode, saya mengerjakan desain di Figma dan Canva, dan terbiasa menulis serta mengelola dokumen dengan Microsoft Office.',
 'assets/foto-kampus.jpg', 'assets/foto-potret.jpg',
 'Daelzra berdiri di ruang kelas dengan hoodie hitam',
 'Potret Daelzra berkacamata sambil memegang kamera');

INSERT INTO tbl_pendidikan (institusi, jurusan, keterangan) VALUES
('Universitas Paramadina', 'Teknik Informatika', 'Mahasiswa aktif');

INSERT INTO tbl_skill (nama_skill, kategori) VALUES
('JavaScript', 'Pemrograman'),
('Figma', 'Desain'),
('Canva', 'Desain'),
('Microsoft Office', 'Produktivitas'),
('Database', 'Data'),
('Writing', 'Konten');

INSERT INTO tbl_portofolio (judul, kategori, deskripsi, teknologi, link_url, urutan) VALUES
('Biliard', 'Game / web', 'Game biliard yang dimainkan langsung di browser.', 'JavaScript', 'https://github.com/daelzra', 1),
('Snake Game', 'Game / web', 'Versi saya dari game ular klasik, dibuat dengan JavaScript.', 'JavaScript', 'https://github.com/daelzra', 2),
('Trece Grill', 'Web', 'Situs untuk Trece Grill.', 'HTML · CSS · JavaScript', 'https://github.com/daelzra', 3),
('Portofolio Sanggar', 'Web', 'Situs portofolio untuk sanggar.', 'HTML · CSS · JavaScript', 'https://github.com/daelzra', 4),
('SIGAP', 'Web / kelompok', 'Sistem Informasi Gerakan Aksi Peduli Bencana: informasi bencana, donasi, dan relawan, dikerjakan bersama tim.', 'HTML · CSS · JS · PHP · SQL', 'https://github.com/daelzra', 5),
('Desain Digital', 'Desain', 'Kumpulan desain visual yang saya buat dengan Figma dan Canva.', 'Figma · Canva', 'https://github.com/daelzra', 6);

INSERT INTO tbl_kontak (jenis, tampilan, url, urutan) VALUES
('Email', 'daffa.elzra14@gmail.com', 'mailto:daffa.elzra14@gmail.com', 1),
('WhatsApp', '+62 857-1761-8262', 'https://wa.me/6285717618262', 2),
('GitHub', 'github.com/daelzra', 'https://github.com/daelzra', 3),
('Instagram', 'instagram.com/daelzra', 'https://www.instagram.com/daelzra/', 4),
('LinkedIn', 'LinkedIn', 'https://www.linkedin.com/feed/', 5);
