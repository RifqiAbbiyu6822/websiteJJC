<?php
include 'includes/header.php';
include 'includes/navbar.php';

// Get news ID from URL parameter
$id = isset($_GET['id']) ? (int)$_GET['id'] : 1;
$news = include 'data/news.php';

// Find the specific news article
$article = null;
foreach ($news as $item) {
    if ($item['id'] == $id) {
        $article = $item;
        break;
    }
}

// If article not found, redirect to news page
if (!$article) {
    header('Location: news.html');
    exit;
}
?>
<main id="main">
  <!-- News Detail -->
  <section class="container py-5">
    <div class="row">
      <div class="col-lg-8 mx-auto">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
            <li class="breadcrumb-item"><a href="news.php">Berita</a></li>
            <li class="breadcrumb-item active" aria-current="page"><?= htmlspecialchars($article['title']) ?></li>
          </ol>
        </nav>
        
        <article class="news-detail">
          <header class="mb-4">
            <h1 class="display-4"><?= htmlspecialchars($article['title']) ?></h1>
            <div class="text-muted mb-3">
              <i class="icofont-calendar"></i> <?= date('d M Y', strtotime($article['date'])) ?>
            </div>
          </header>
          
          <div class="news-image mb-4">
            <img src="<?= $article['image'] ?>" class="img-fluid rounded" alt="<?= htmlspecialchars($article['title']) ?>">
          </div>
          
          <div class="news-content">
            <?= nl2br(htmlspecialchars($article['content'])) ?>
          </div>
          
          <div class="mt-5">
            <a href="news.php" class="btn btn-outline-primary">
              <i class="icofont-arrow-left"></i> Kembali ke Berita
            </a>
          </div>
        </article>
      </div>
    </div>
  </section>
</main>
<?php include 'includes/footer.php'; ?> 