<?php
// Why Us section
?>
<section class="why-us" style="color: #fff;">
  <div class="container" style="text-align: center;">
    <div class="section-title">
      <h2 style=" color: #fff;">Why Us</h2>
    </div>
    <p>Our-Company commenced business in 2016 after three years of designing and working on a solution for its first client in South Africa. Our-Company is made up of professionals with a good blend of financial and software expertise. Founders have a combined experience of 28 years providing solutions to the financial services sector in Africa.</p>
    <div class="text-center"><button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">Click here to request for Demo</button></div>
    <div class="collapse" id="collapseExample">
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
            <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please tell us why you need a demo" placeholder="Message"></textarea>
            <div class="validate"></div>
          </div>
          <div class="text-center"><button class="btn btn-info" type="submit">Send Request</button></div>
        </form>
      </div>
    </div>
  </div>
</section> 