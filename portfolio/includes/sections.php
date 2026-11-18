<?php
// Setiap fungsi menampilkan satu bagian halaman dari data database
function bagian_home(array $p, bool $halaman_sendiri = false): void { ?>
    <section id="home" class="hero container">
      <div class="row align-items-end g-4">
        <div class="col-lg-7 order-2 order-lg-1">
          <p class="mono tag">Portofolio / <?= date('Y') ?></p>
          <h1><?= e(strtok($p['nama_lengkap'], ' ')) ?> <?= e(explode(' ', $p['nama_lengkap'], 2)[1] ?? '') ?></h1>
          <p class="lead-text"><?= e($p['headline']) ?></p>
          <div class="d-flex flex-wrap gap-3 mt-4">
            <a class="btn btn-ink" href="projects.php">Lihat proyek</a>
            <a class="btn btn-line" href="kontak.php">Hubungi saya</a>
          </div>
        </div>
        <div class="col-lg-5 order-1 order-lg-2">
          <figure class="frame tilt mb-0">
            <img src="<?= e($p['foto_hero']) ?>" alt="<?= e($p['alt_foto_hero']) ?>" width="1600" height="895">
            <figcaption class="mono"><?= e($p['nama_panggilan']) ?></figcaption>
          </figure>
        </div>
      </div>
    </section>
<?php }

function bagian_about(array $p, array $pendidikan, array $skill, string $kelas = 'block'): void { ?>
    <section id="about" class="<?= $kelas ?>">
      <div class="container">
        <div class="row g-5">
          <div class="col-md-5 col-lg-4">
            <figure class="frame mb-0">
              <img src="<?= e($p['foto_potret']) ?>" alt="<?= e($p['alt_foto_potret']) ?>" loading="lazy" width="900" height="1200">
            </figure>
          </div>
          <div class="col-md-7 col-lg-8">
            <h2><span class="num mono">02</span> About Me</h2>
            <p><?= e($p['tentang_1']) ?></p>
            <?php if ($p['tentang_2']): ?><p><?= e($p['tentang_2']) ?></p><?php endif; ?>
            <dl class="facts mono">
<?php foreach ($pendidikan as $pd): ?>
              <div><dt>Kampus</dt><dd><?= e($pd['institusi']) ?></dd></div>
              <div><dt>Jurusan</dt><dd><?= e($pd['jurusan']) ?></dd></div>
<?php endforeach; ?>
              <div><dt>Skill</dt><dd><?= e(implode(', ', array_column($skill, 'nama_skill'))) ?></dd></div>
            </dl>
          </div>
        </div>
      </div>
    </section>
<?php }

function bagian_projects(array $proyek, string $kelas = 'block ink'): void { ?>
    <section id="projects" class="<?= $kelas ?>">
      <div class="container">
        <h2><span class="num mono">03</span> Projects</h2>
        <div class="row g-4 mt-1">
<?php foreach ($proyek as $pr): ?>
          <article class="col-md-6 col-lg-4">
            <div class="project h-100">
              <p class="mono kind"><?= e($pr['kategori']) ?></p>
              <h3><?= e($pr['judul']) ?></h3>
              <p><?= e($pr['deskripsi']) ?></p>
              <p class="stack mono"><?= e($pr['teknologi']) ?></p>
              <a href="<?= e($pr['link_url']) ?>" class="stretched-link" target="_blank" rel="noopener">Lihat di GitHub <span aria-hidden="true">→</span></a>
            </div>
          </article>
<?php endforeach; ?>
        </div>
      </div>
    </section>
<?php }

function bagian_kontak(array $kontak, string $kelas = 'block'): void {
    $status = $_GET['status'] ?? ''; ?>
    <section id="kontak" class="<?= $kelas ?>">
      <div class="container">
        <div class="row g-5">
          <div class="col-md-5">
            <h2><span class="num mono">04</span> Kontak</h2>
            <p>Punya ide proyek atau ingin kolaborasi? Tulis pesan, saya balas secepatnya.</p>
            <ul class="list-unstyled mono links">
<?php foreach ($kontak as $k): ?>
              <li><a href="<?= e($k['url']) ?>" target="_blank" rel="noopener"><?= e($k['jenis']) ?> / <?= e($k['tampilan']) ?></a></li>
<?php endforeach; ?>
            </ul>
          </div>
          <div class="col-md-7">
            <form action="proses_pesan.php" method="post" id="form-kontak">
              <div class="mb-3"><label for="nama" class="form-label mono">Nama</label>
                <input type="text" class="form-control" id="nama" name="nama" maxlength="100" required></div>
              <div class="mb-3"><label for="email" class="form-label mono">Email</label>
                <input type="email" class="form-control" id="email" name="email" maxlength="100" required></div>
              <div class="mb-3"><label for="pesan" class="form-label mono">Pesan</label>
                <textarea class="form-control" id="pesan" name="pesan" rows="4" required></textarea></div>
              <button type="submit" class="btn btn-ink">Kirim pesan</button>
              <p class="mono small mt-3" role="status">
                <?php if ($status === 'ok'): ?>Pesan terkirim dan tersimpan di database. Terima kasih!
                <?php elseif ($status === 'gagal'): ?>Lengkapi nama, email yang valid, dan pesan.<?php endif; ?>
              </p>
            </form>
          </div>
        </div>
      </div>
    </section>
<?php }
