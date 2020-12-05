<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <meta name="description" content="Degital Advisor">
  <link href="assets/images/logo/logo.png" rel="icon">
  <title>Degital Advisor</title>
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css?family=Roboto:400,500,700%7cRubik:400,500,700&display=swap">
  <link rel="stylesheet" href="assets/css/libraries.css">
  <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
  <div class="wrapper">
    <!-- =========================
        Header
    =========================== -->
    <?php include 'navbar.php'; ?>

    <!-- ========================= 
            Google Map
    =========================  -->
    <section id="googleMap" class="google-map p-0">
      <div id="map"></div>
      <script src="assets/js/google-map.js"></script>
      <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY" async defer></script>
      <!-- CLICK HERE (https://developers.google.com/maps/documentation/embed/get-api-key) TO  LERAN MORE ABOUT GOOGLE MAPS API KEY -->
    </section><!-- /.GoogleMap -->


    <!-- ==========================
        contact 1
    =========================== -->
    <section id="contact1" class="contact pt-120 pb-110">
      <div class="container">
        <div class="row">
          <div class="col-sm-10 col-md-6 col-lg-4">
            <div class="contact-panel mb-40">
              <h6 class="contact__panel-title">Contact Details</h6>
              <ul class="contact__panel-list list-unstyled">
                <li><i class="fa fa-map-marker"></i><span>Brooklyn, New York 11226 United States.</span></li>
                <li><i class="fa fa-envelope"></i><span>Email: Industic@7oroof.com</span></li>
                <li><i class="fa fa-phone"></i><span>002 010123456789</span></li>
              </ul>
            </div>
            <div class="contact-panel mb-40">
              <h6 class="contact__panel-title">Opening Hours</h6>
              <ul class="contact__panel-list contact__panel-list-2 list-unstyled">
                <li><span>Monday-Friday</span><span>10:00 - 18:00</span></li>
                <li><span>Saturday</span><span>10:00 - 14:00</span></li>
                <li><span>Sunday</span><span>Closed</span></li>
              </ul>
            </div>
          </div><!-- /.col-lg-4 -->
          <div class="col-sm-12 col-md-12 col-lg-8">
            <form>
              <div class="row">
                <div class="col-sm-4 col-md-4 col-lg-4">
                  <div class="form-group"><input type="text" class="form-control" placeholder="Name"></div>
                </div><!-- /.col-lg-4 -->
                <div class="col-sm-4 col-md-4 col-lg-4">
                  <div class="form-group"><input type="email" class="form-control" placeholder="Email"></div>
                </div><!-- /.col-lg-4 -->
                <div class="col-sm-4 col-md-4 col-lg-4">
                  <div class="form-group"><input type="text" class="form-control" placeholder="Website"></div>
                </div><!-- /.col-lg-4 -->
                <div class="col-sm-12 col-md-12 col-lg-12">
                  <div class="form-group">
                    <textarea class="form-control" placeholder="Message"></textarea>
                  </div>
                </div><!-- /.col-lg-12 -->
                <div class="col-sm-12 col-md-12 col-lg-12">
                  <button type="submit" class="btn btn__secondary btn__hover3 btn__block">Submit</button>
                </div><!-- /.col-lg-12 -->
              </div><!-- /.row -->
            </form>
          </div><!-- /.col-lg-8 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.contact 1 -->

<section id="featuresListLayout2" class="features-list features-list-layout2 bg-overlay bg-overlay-gradient bg-parallax pt-120 bg-img" style="background-image: url(&quot;assets/images/backgrounds/3.jpg&quot;); background-size: cover; background-position: center center;">
      
      <div class="container">
        <div class="row heading mb-30">
          <div class="col-sm-12 col-md-12 col-lg-12">
            <span class="heading__subtitle">Why Choose Our Services?</span>
          </div><!-- /.col-lg-12-->
          <div class="col-sm-12 col-md-12 col-lg-6">
            <h2 class="heading__title color-white">Reliable, Effective &amp;Technically Advanced Products!</h2>
          </div><!-- /.col-lg-6-->
          <div class="col-sm-12 col-md-12 col-lg-6">
            <p class="heading__desc color-white">Industic Engineering has been built on engineering excellence crafted
              through unstinted dedication to quality, innovation and a constant objective to serve the global market &amp;
              decade young industry expertise.</p>
          </div><!-- /.col-lg-6-->
        </div><!-- /.row -->
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-6">
            <div class="feature-item feature-list-item">
              <div class="feature__content">
                <h4 class="feature__title">Quality Control System</h4>
                <p class="feature__desc">Following the quality of our service thus having gained trust of our many
                  clients.</p>
              </div><!-- /.feature-content -->
            </div><!-- /.feature-item -->
            <div class="feature-item feature-list-item">
              <div class="feature__content">
                <h4 class="feature__title">100% Satisfaction Guarantee</h4>
                <p class="feature__desc">An integrated approach to providing engineering services allows our clients to
                  benefit from the commercial and logistical advantages.</p>
              </div><!-- /.feature-content -->
            </div><!-- /.feature-item -->
          </div><!-- /.col-lg-6 -->
          <div class="col-sm-12 col-md-12 col-lg-6">
            <div class="feature-item feature-list-item">
              <div class="feature__content">
                <h4 class="feature__title">Highly Professional Staff</h4>
                <p class="feature__desc">We are one of the Nations largest automotive parts recyclers and a widely
                  recognized leader utilizing advanced computerized techniques.</p>
              </div><!-- /.feature-content -->
            </div><!-- /.feature-item -->
            <div class="feature-item feature-list-item">
              <div class="feature__content">
                <h4 class="feature__title">Accurate Testing Processes</h4>
                <p class="feature__desc">We’ll work with you on your project, large or small. Together we’ll fine-tune
                  your new construction, remodeling or renovation plans...</p>
              </div><!-- /.feature-content -->
            </div><!-- /.feature-item -->
          </div><!-- /.col-lg-6 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section>
    <!-- ========================
      Footer  
    ========================== -->
    <?php include 'footer.php'; ?><!-- /.Footer -->
    <button id="scrollTopBtn"><i class="fa fa-long-arrow-up"></i></button>

    <div class="module__search-container">
      <i class="fa fa-times close-search"></i>
      <form class="module__search-form">
        <input type="text" class="search__input" placeholder="Type Words Then Enter">
        <button class="module__search-btn"><i class="fa fa-search"></i></button>
      </form>
    </div><!-- /.module-search-container -->

  </div><!-- /.wrapper -->

  <script src="assets/js/jquery-3.3.1.min.js"></script>
  <script src="assets/js/plugins.js"></script>
  <script src="assets/js/main.js"></script>
</body>

</html>