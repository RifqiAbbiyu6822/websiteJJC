<?php
include 'includes/header.php';
include 'includes/navbar.php';
?>

<main id="main">
  <?php include 'includes/about.php'; ?>
  
  <!-- History Section -->
  <section id="history" class="history">
    <div class="container">
      <div class="section-title">
        <h2>Sejarah Perusahaan</h2>
        <p>Perjalanan panjang kami dalam membangun infrastruktur jalan tol Indonesia</p>
      </div>
      <div class="row">
        <div class="col-lg-12">
          <div class="timeline">
            <div class="timeline-item" data-aos="fade-right">
              <div class="timeline-date">1978</div>
              <div class="timeline-content">
                <h4>Berdirinya PT Jasa Marga</h4>
                <p>Didirikan berdasarkan Peraturan Pemerintah No. 4 tahun 1978 sebagai perusahaan pertama yang diberi wewenang untuk menyelenggarakan jalan tol di Indonesia.</p>
              </div>
            </div>
            <div class="timeline-item" data-aos="fade-left">
              <div class="timeline-date">1984</div>
              <div class="timeline-content">
                <h4>Jalan Tol Pertama</h4>
                <p>Mengoperasikan jalan tol pertama di Indonesia, yaitu Jalan Tol Jagorawi yang menghubungkan Jakarta-Bogor-Ciawi.</p>
              </div>
            </div>
            <div class="timeline-item" data-aos="fade-right">
              <div class="timeline-date">2007</div>
              <div class="timeline-content">
                <h4>Go Public</h4>
                <p>Menjadi perusahaan publik dengan melakukan Initial Public Offering (IPO) di Bursa Efek Indonesia.</p>
              </div>
            </div>
            <div class="timeline-item" data-aos="fade-left">
              <div class="timeline-date">2019</div>
              <div class="timeline-content">
                <h4>Jalan Tol Layang MBZ</h4>
                <p>Meresmikan Jalan Tol Layang Jakarta-Cikampek (MBZ), jalan tol layang terpanjang di Indonesia.</p>
              </div>
            </div>
            <div class="timeline-item" data-aos="fade-right">
              <div class="timeline-date">2024</div>
              <div class="timeline-content">
                <h4>Era Digital</h4>
                <p>Transformasi digital dengan implementasi teknologi AI dan IoT untuk meningkatkan pelayanan dan keselamatan pengguna jalan tol.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Leadership Section -->
  <section id="leadership" class="leadership section-bg">
    <div class="container">
      <div class="section-title">
        <h2>Dewan Direksi</h2>
        <p>Pemimpin yang berdedikasi untuk kemajuan infrastruktur Indonesia</p>
      </div>
      <div class="row">
        <div class="col-lg-3 col-md-6" data-aos="fade-up">
          <div class="member">
            <div class="member-img">
              <img src="assets/img/team-1.jpg" class="img-fluid" alt="">
            </div>
            <div class="member-info">
              <h4>Nama Direktur Utama</h4>
              <span>Direktur Utama</span>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
          <div class="member">
            <div class="member-img">
              <img src="assets/img/team-2.jpg" class="img-fluid" alt="">
            </div>
            <div class="member-info">
              <h4>Nama Direktur</h4>
              <span>Direktur Operasi</span>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="200">
          <div class="member">
            <div class="member-img">
              <img src="assets/img/team-3.jpg" class="img-fluid" alt="">
            </div>
            <div class="member-info">
              <h4>Nama Direktur</h4>
              <span>Direktur Keuangan</span>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="300">
          <div class="member">
            <div class="member-img">
              <img src="assets/img/team-4.jpg" class="img-fluid" alt="">
            </div>
            <div class="member-info">
              <h4>Nama Direktur</h4>
              <span>Direktur Pengembangan</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- CSR Section -->
  <section id="csr" class="csr">
    <div class="container">
      <div class="section-title">
        <h2>Tanggung Jawab Sosial</h2>
        <p>Komitmen kami untuk Indonesia yang lebih baik</p>
      </div>
      <div class="row">
        <div class="col-lg-4 col-md-6" data-aos="fade-up">
          <div class="csr-item">
            <div class="csr-icon"><i class="icofont-education"></i></div>
            <h4>Pendidikan</h4>
            <p>Program beasiswa dan pelatihan untuk masyarakat sekitar jalan tol</p>
          </div>
        </div>
        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
          <div class="csr-item">
            <div class="csr-icon"><i class="icofont-tree-alt"></i></div>
            <h4>Lingkungan</h4>
            <p>Program penghijauan dan pelestarian lingkungan di sepanjang jalan tol</p>
          </div>
        </div>
        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
          <div class="csr-item">
            <div class="csr-icon"><i class="icofont-people"></i></div>
            <h4>Pemberdayaan Masyarakat</h4>
            <p>Program pemberdayaan UMKM dan masyarakat sekitar</p>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>

<style>
/* Timeline Styles */
.timeline {
  position: relative;
  padding: 20px 0;
}

.timeline:before {
  content: '';
  position: absolute;
  left: 50%;
  top: 0;
  bottom: 0;
  width: 2px;
  background: #e03a3c;
  margin-left: -1px;
}

.timeline-item {
  position: relative;
  margin-bottom: 50px;
}

.timeline-item:nth-child(even) {
  text-align: right;
}

.timeline-date {
  position: absolute;
  top: 0;
  width: 100px;
  text-align: center;
  left: 50%;
  margin-left: -50px;
  background: #e03a3c;
  color: #fff;
  padding: 10px;
  border-radius: 50px;
  font-weight: 700;
}

.timeline-content {
  width: 45%;
  padding: 20px;
  background: #f8f9fa;
  border-radius: 8px;
}

.timeline-item:nth-child(odd) .timeline-content {
  float: left;
}

.timeline-item:nth-child(even) .timeline-content {
  float: right;
}

.timeline-content h4 {
  font-weight: 700;
  margin-bottom: 10px;
  color: #2c4964;
}

/* Leadership Styles */
.leadership .member {
  text-align: center;
  margin-bottom: 20px;
  background: #fff;
  padding: 30px;
  border-radius: 8px;
  box-shadow: 0px 2px 15px rgba(0, 0, 0, 0.1);
  transition: all 0.3s ease-in-out;
}

.leadership .member:hover {
  transform: translateY(-10px);
  box-shadow: 0px 5px 25px rgba(0, 0, 0, 0.15);
}

.leadership .member .member-img {
  overflow: hidden;
  width: 150px;
  height: 150px;
  border-radius: 50%;
  margin: 0 auto 20px auto;
  background: #e03a3c;
}

.leadership .member .member-img img {
  transition: ease-in-out 0.3s;
}

.leadership .member h4 {
  font-weight: 700;
  margin-bottom: 5px;
  font-size: 18px;
  color: #2c4964;
}

.leadership .member span {
  display: block;
  font-size: 14px;
  font-weight: 400;
  color: #aaaaaa;
}

/* CSR Styles */
.csr .csr-item {
  text-align: center;
  padding: 40px 30px;
  background: #fff;
  box-shadow: 0px 2px 15px rgba(0, 0, 0, 0.1);
  border-radius: 8px;
  transition: all 0.3s ease-in-out;
  height: 100%;
}

.csr .csr-item:hover {
  transform: translateY(-10px);
  box-shadow: 0px 5px 25px rgba(0, 0, 0, 0.15);
}

.csr .csr-icon {
  font-size: 48px;
  color: #e03a3c;
  margin-bottom: 20px;
}

.csr .csr-item h4 {
  font-weight: 700;
  margin-bottom: 15px;
  font-size: 20px;
  color: #2c4964;
}

.csr .csr-item p {
  line-height: 24px;
  font-size: 14px;
  margin-bottom: 0;
  color: #5e5e5e;
}

/* Responsive */
@media (max-width: 768px) {
  .timeline:before {
    left: 31px;
  }
  
  .timeline-date {
    width: auto;
    position: relative;
    left: 0;
    margin-left: 0;
    margin-bottom: 15px;
    display: inline-block;
  }
  
  .timeline-content {
    width: calc(100% - 90px);
    float: right;
  }
  
  .timeline-item:nth-child(even) {
    text-align: left;
  }
  
  .timeline-item:nth-child(even) .timeline-content {
    float: right;
  }
}
</style>

<?php include 'includes/footer.php'; ?>