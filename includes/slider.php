<?php
// Slider utama beranda
// Data slider bisa diambil dari file data/slider.php atau data/slider.json
?>
<section>
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner" role="listbox">
      <!-- Contoh statis, nanti bisa diganti dinamis -->
      <div class="carousel-item active" style="background-image: url('assets/img/footer-bg.png')">
        <div class="carousel-caption">
          <h2 class="display-4">Our-Company</h2>
          <p class="lead">Delivering relevant, agile yet simple technological solutions for financial services providers</p>
        </div>
      </div>
      <div class="carousel-item" style="background-image: url('assets/img/slider-2.jpg')">
        <div class="carousel-caption ">
          <h2 class="display-4">Our-Company</h2>
          <p class="lead">Delivering relevant technologies for our times</p>
        </div>
      </div>
      <div class="carousel-item" style="background-image: url('assets/img/covid.jpg')">
        <div class="carousel-caption covid-block">
          <h2 class="display-4">We are in this together.</h2>
          <p class="lead" style="background: rgba(0, 0, 0, 0.7); border-radius: 3px;">Our Organisation is committed on taking recommendations from the health authorities, WHO (World Health Organisation) and our local authority. Our company is committed to follow the guidelines which includes, refraining from non-essential travelling, self-isolation upon return from any affected areas, social distancing, wearing of musk’s and use of hand sanitizer.</p>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</section> 