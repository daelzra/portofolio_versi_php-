// Tutup menu mobile setelah tautan diklik
document.querySelectorAll('#menu .nav-link').forEach(function (link) {
  link.addEventListener('click', function () {
    var menu = document.getElementById('menu');
    if (menu.classList.contains('show')) bootstrap.Collapse.getOrCreateInstance(menu).hide();
  });
});
