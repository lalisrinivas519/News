<!doctype html>
<html class="no-js" data-theme="light" lang="en">
   <head>
      <?php include("php_include/head.php")?>
   </head>
   <body>
      <?php include("php_include/mobile_view.php")?>
	  <?php include("php_include/header.php")?>
	  <div class="breadcumb-wrapper">
         <div class="container">
            <ul class="breadcumb-menu">
               <li><a href="index.php">Home</a></li>
               <li>Contact Us</li>
            </ul>
         </div>
      </div>
      <div class="space2">
         <div class="container">
            <div class="row">
               <div class="col-xl-5">
                  <div class="pe-xxl-4 me-xl-3 text-center text-xl-start mb-40 mb-lg-0">
                     <div class="title-area mb-32">
                        <h2 class="sec-title2">Get in Touch</h2>
                        <p class="sec-text">Aliquam erat volutpat. Morbi sed lectus volutpat nulla laoreet maximus vel ac nulla. Maecenas ullamcorper felis</p>
                     </div>
                     <div class="contact-feature-wrap">
                        <div class="contact-feature">
                           <div class="box-icon"><img src="assets/img/icon/contact_1_1.svg" alt="icon"></div>
                           <div class="box-content">
                              <h3 class="box-title-22">Our Address</h3>
                              <p class="box-text">Street Parker Rd. Allentown, New Mexico 31134</p>
                           </div>
                        </div>
                        <div class="contact-feature">
                           <div class="box-icon"><img src="assets/img/icon/contact_1_2.svg" alt="icon"></div>
                           <div class="box-content">
                              <h3 class="box-title-22">Email Address</h3>
                              <p class="box-text"><a href="mailto:needhelp@gmail.com">needhelp@gmail.com</a> <a href="mailto:info@gmail.com">info@gmail.com</a></p>
                           </div>
                        </div>
                        <div class="contact-feature">
                           <div class="box-icon"><img src="assets/img/icon/contact_1_3.svg" alt="icon"></div>
                           <div class="box-content">
                              <h3 class="box-title-22">Phone Number</h3>
                              <p class="box-text"><a href="tel:+1234055550128">+123 (405) 555-0128</a> <a href="tel:+7025550122">(702) 555-0122</a></p>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-xl-7">
                  <div class="quote-form-box">
                     <h4 class="form-title">Send Message</h4>
                     <form action="https://themeholy.com/html/tnews/demo/mail.php" method="POST" class="contact-form ajax-contact">
                        <div class="row">
                           <div class="form-group col-md-6"><input type="text" class="form-control" name="name" id="name" placeholder="Your Name"></div>
                           <div class="form-group col-md-6"><input type="email" class="form-control" name="email" id="email" placeholder="Email Address"></div>
                           <div class="form-group col-md-6"><input type="tel" class="form-control" name="number" id="number" placeholder="Phone Number"></div>
                           <div class="form-group col-md-6">
                              <select name="subject" id="subject" class="form-select">
                                 <option value="" disabled="disabled" selected="selected" hidden>Select Subject</option>
                                 <option value="Writing Article">Writing Article</option>
                                 <option value="Become Author">Become Author</option>
                                 <option value="Gest Posting">Gest Posting</option>
                                 <option value="Personal Question">Personal Question</option>
                              </select>
                           </div>
                           <div class="form-group col-12"><textarea name="message" id="message" cols="30" rows="3" class="form-control" placeholder="Your Message"></textarea></div>
                           <div class="form-btn col-12"><button class="th-btn">Submit Now<i class="fas fa-arrow-up-right ms-2"></i></button></div>
                        </div>
                        <p class="form-messages mb-0 mt-3"></p>
                     </form>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="contact-map"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3152.332792000835!2d144.9623021!3d-37.805673299999995!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad65d4c2b349649%3A0xb6899234e561db11!2sEnvato!5e0!3m2!1sbn!2sbd!4v1691473044289!5m2!1sbn!2sbd" allowfullscreen="" loading="lazy"></iframe></div>
      <?php include("php_include/footer.php")?>
      <div class="scroll-top">
         <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" style="transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919, 307.919; stroke-dashoffset: 307.919;"></path>
         </svg>
      </div>
      <script src="assets/js/vendor/jquery-3.6.0.min.js"></script><script src="assets/js/app.min.js"></script><script src="assets/js/main.js"></script>
   </body>
  </html>