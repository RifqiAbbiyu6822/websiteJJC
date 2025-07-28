<?php
// Contact Us section
?>
<section id="contact" class="contact section-bg">
  <div class="container">
    <div class="row">
      <div class="col-lg-4 col-md-6">
        <div class="contact-about">
          <h3>Our-Company</h3>
          <p>Delivering relevant technologies for our times</p>
          <div class="social-links">
            <a href="#" class="linkedin"><i class="icofont-linkedin"></i></a>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6">
        <div class="info">
          <div>
            <i class="icofont-google-map"></i>
            <p>Velile Estate, 123 Vamba Rd, Johannesburg, Gauteng, 2000</p>
          </div>
          <div>
            <i class="icofont-envelope"></i>
            <p>clients@Our-Company.com </p>
          </div>
        </div>
      </div>
      <div class="col-lg-5 col-md-12">
        <form action="forms/contact.php" method="post" role="form" class="php-email-form">
          <div class="form-group">
            <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
            <div class="validate"></div>
          </div>
          <div class="form-group">
            <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
            <div class="validate"></div>
          </div>
          <div class="form-group">
            <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
            <div class="validate"></div>
          </div>
          <div class="form-group">
            <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
            <div class="validate"></div>
          </div>
          <div class="mb-3">
            <div class="loading">Loading</div>
            <div class="error-message"></div>
            <div class="sent-message">Your message has been sent. Thank you!</div>
          </div>
          <div class="text-center"><button type="submit">Send Message</button></div>
        </form>
      </div>
    </div>
  </div>
</section> 