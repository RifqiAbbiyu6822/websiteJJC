<?php
include 'includes/header.php';
include 'includes/navbar.php';
?>
<main id="main">
  <!-- Berita -->
  <section class="container py-5">
    <div class="section-title text-center">
      <h2>Berita Terbaru</h2>
      <p>Informasi terbaru seputar proyek dan perkembangan perusahaan</p>
    </div>
    <div class="row">
      <?php
      $news = include 'data/news.php';
      foreach ($news as $item): ?>
        <div class="col-md-4 mb-4">
          <div class="card h-100 shadow-sm">
            <img src="<?= $item['image'] ?>" class="card-img-top" alt="<?= htmlspecialchars($item['title']) ?>" style="height: 200px; object-fit: cover;">
            <div class="card-body">
              <h5 class="card-title"><?= htmlspecialchars($item['title']) ?></h5>
              <small class="text-muted"><?= date('d M Y', strtotime($item['date'])) ?></small>
              <p class="card-text mt-2"><?= htmlspecialchars($item['excerpt']) ?></p>
              <a href="news-detail.php?id=<?= $item['id'] ?>" class="btn btn-primary btn-sm">Baca Selengkapnya</a>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </section>
</main>
<?php include 'includes/footer.php'; ?> 