<?php
include 'includes/header.php';
include 'includes/navbar.php';
include 'includes/slider.php';
?>
<main id="main">
  <?php include 'includes/about.php'; ?>
  <?php include 'includes/projects.php'; ?>
  <?php include 'includes/map.php'; ?>
  
  <!-- Berita Terbaru -->
  <section class="container py-4">
    <div class="section-title">
      <h2>Berita Terbaru</h2>
    </div>
    <div class="row">
      <?php
      $news = include 'data/news.php';
      foreach (array_slice($news, 0, 3) as $item): ?>
        <div class="col-md-4 mb-3">
          <div class="card h-100 news-card">
            <img src="<?= $item['image'] ?>" class="card-img-top" alt="<?= htmlspecialchars($item['title']) ?>">
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