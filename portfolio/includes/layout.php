<?php
// Kerangka halaman: header/navigasi dan footer
function mulai_halaman(string $aktif, string $judul, string $deskripsi = ''): void {
    $menu = ['index.php' => '01 Home', 'about.php' => '02 About', 'projects.php' => '03 Projects', 'kontak.php' => '04 Kontak'];
    ?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?= e($judul) ?></title>
  <meta name="description" content="<?= e($deskripsi) ?>">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link href="https://fonts.googleapis.com/css2?family=Fraunces:opsz,wght@9..144,500;9..144,800&family=IBM+Plex+Mono:wght@400;500&family=Public+Sans:wght@400;500;600&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">
</head>
<body>
  <a class="visually-hidden-focusable skip" href="#utama">Lewati ke konten</a>
  <header class="site-header">
    <nav class="navbar navbar-expand-md container" aria-label="Navigasi utama">
      <a class="navbar-brand brand" href="index.php">daelzra<span>.</span></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menu" aria-controls="menu" aria-expanded="false" aria-label="Buka menu">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-end" id="menu">
        <ul class="navbar-nav gap-md-4 mono">
<?php foreach ($menu as $file => $label): $on = ($file === $aktif); ?>
          <li class="nav-item"><a class="nav-link<?= $on ? ' active' : '' ?>"<?= $on ? ' aria-current="page"' : '' ?> href="<?= $file ?>"><?= $label ?></a></li>
<?php endforeach; ?>
        </ul>
      </div>
    </nav>
  </header>
  <main id="utama">
<?php
}

function akhiri_halaman(): void { ?>
  </main>
  <footer class="site-footer mono">
    <div class="container d-flex flex-wrap justify-content-between gap-2">
      <span>© <?= date('Y') ?> Daffa Elzra Adrian</span>
      <a href="#utama">Kembali ke atas ↑</a>
    </div>
  </footer>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="js/main.js"></script>
</body>
</html>
<?php
}
