<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">

  <title>MamaClean Laundry</title>

  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
  <link rel="stylesheet" href="assets/css/templatemo-chain-app-dev.css">
  <link rel="stylesheet" href="assets/css/animated.css">
  <link rel="stylesheet" href="assets/css/owl.css">
</head>

<body>

  <!-- ***** Preloader Start ***** -->
  <div id="js-preloader" class="js-preloader">
    <div class="preloader-inner">
      <span class="dot"></span>
      <div class="dots">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  </div>
  <!-- ***** Preloader End ***** -->

  <!-- ***** Header Area Start ***** -->
  <header class="header-area header-sticky wow slideInDown" data-wow-duration="0.75s" data-wow-delay="0s">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <nav class="main-nav">
            <!-- ***** Logo Start ***** -->
            <a href="index.php" class="logo">
              <img src="assets\images\MamaClean.png" style="width: 200px; margin-left: 40px;" alt="MamaClean">
            </a>
            <!-- ***** Logo End ***** -->
            <!-- ***** Menu Start ***** -->
            <ul class="nav">
              <li class="scroll-to-section"><a href="#top" class="active">Home</a></li>
              <li class="scroll-to-section"><a href="#services">Services</a></li>
              <li class="scroll-to-section"><a href="#about">About</a></li>
              <li class="scroll-to-section"><a href="#pricing">Pricing</a></li>
              <li>
                <div class="gradient-button"><a data-bs-toggle="modal" data-bs-target="#orderModal" role="button">Order</a></div>
              </li>
            </ul>
            <a class='menu-trigger'>
              <span>Menu</span>
            </a>
            <!-- ***** Menu End ***** -->
          </nav>
        </div>
      </div>
    </div>
  </header>
  <!-- ***** Header Area End ***** -->

  <!-- Modal Start -->
  <div id="orderModal" class="modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">

        <div class="modal-header">
          <span class="modal-title"><h5>Laundry Order</h5></span>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>

        <div class="modal-body">
          <form action="proses_order.php" method="POST">
            <div class="mb-3">
              <label for="nama">Name</label>
              <input type="text" class="form-control" name="nama" placeholder="Name" required>
            </div>

            <div class="mb-3">
              <label for="nama">Telephone number</label>
              <input type="text" class="form-control" name="no_telepon" placeholder="Telephone number" required>
            </div>

            <div class="mb-3">
              <label for="service">Service</label>

              <div class="form-check">
                <input class="form-check-input" type="radio" name="service" id="service1" value="regular" required>
                <label class="form-check-label" for="service1">
                  MamaRegular
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="service" id="service2" value="quick" required>
                <label class="form-check-label" for="service2">
                  MamaQuick
                </label>
              </div>

              <div class="form-check">
                <input class="form-check-input" type="radio" name="service" id="service3" value="ironing" required>
                <label class="form-check-label" for="service3">
                  IroningService
                </label>
              </div>
            </div>

            <div class="mb-3">
              <label for="pembayaran">Payment method</label>
              <select class="form-select" aria-label="Metode Pembayaran Select" name="metode_pembayaran">
                <option selected>Payment method</option>
                <option value="cash">Cash</option>
                <option value="ewallet">E-Wallet</option>
                <option value="mobil-bank">Mobile Banking</option>
              </select>
            </div>

            <div class="mb-3">
              <label for="item">Item</label>
              <button type="button" class="btn btn-primary px-2 py-0" id="add-item-order">+</button>
              <hr />

              <div id="item-container">
                <div class="row mb-3">
                  <div class="col-lg-6">
                    <label for="">Name</label>
                    <input type="text" name="nama_item[]" class="form-control" required>
                  </div>

                  <div class="col-lg-3">
                    <label for="">Amount</label>
                    <input type="number" name="banyak_item[]" class="form-control banyak-input" required>
                  </div>

                  <div class="col-lg-3">
                    <label for="">Weight</label>
                    <input type="number" name="berat_item[]" class="form-control berat-input" required>
                  </div>
                </div>
              </div>
            </div>

            <hr />

            <div class="summary-order">
              <div class="d-flex justify-content-between">
                <p class="text-dark">Service Price</p>
                <p class="text-dark"> <span id="service-harga">0</span> /kg</p>
              </div>

              <div class="d-flex justify-content-between">
                <p class="text-dark">Total Weight</p>
                <p class="text-dark"><span id="berat-value">0</span> kg</p>
              </div>

              <div class="d-flex justify-content-between">
                <p class="text-dark">Total Price</p>
                <p id="total-harga-value" class="text-dark">0</p>
              </div>
            </div>

            <button type="submit" class="btn btn-success mt-3 d-block w-100" onclick="return confirmSubmit()">Order</button>
          </form>
        </div>
      </div>
    </div>
  </div>
<!-- Modal End -->

<!-- Home Start -->
  <div class="main-banner wow fadeIn" id="top" data-wow-duration="1s" data-wow-delay="0.5s">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="row">
            <div class="col-lg-6 align-self-center">
              <div class="left-content show-up header-text wow fadeInLeft" data-wow-duration="1s" data-wow-delay="1s">
                <div class="row">
                  <div class="col-lg-12" style="color: white; padding-bottom: 20px;">
                    <h2>Freshness you can feel, clean you can trust.</h2>
                    <h6 style="color: rgb(138, 228, 255);"><span style="color: rgb(194, 238, 254);">MamaClean</span> will help you clean your laundry</h6>
                  </div>
                  <div class="col-lg-12">
                    <div class="white-button scroll-to-section">
                      <a href="#services">Our Services</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="right-image wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s">
                <img src="assets/images/licon.png" alt="">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Home End -->

<!-- Service Start -->
  <div id="services" class="services section">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 offset-lg-2">
          <div class="section-heading  wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.5s">
            <h4>Amazing <em>Services</em> for you</h4>
            <img src="assets/images/heading-line-dec.png" alt="">
            <p>Our services can be a lifesaver for anyone who is too busy, physically unable, or simply hates doing laundry on their own, making it a practical and worthwhile investment.</p>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-lg-4">
          <div class="service-item second-service">
            <div class="icon"></div>
            <h4>MamaQuick</h4>
            <p>Say goodbye to spending endless hours on laundry and hello to a quick and efficient laundry service that guarantees freshly cleaned clothes in just one day!</p>
            <div class="text-button">
              <a href="#pricing">More <i class="fa fa-arrow-right"></i></a>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="service-item third-service">
            <div class="icon"></div>
            <h4>MamaRegular</h4>
            <p>You deserve hassle-free laundry and freshest clothes every day, so why not let our regular laundry service take care of it for you, only within three days?</p>
            <div class="text-button">
              <a href="#pricing">More <i class="fa fa-arrow-right"></i></a>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="service-item fourth-service">
            <div class="icon"></div>
            <h4>Ironing Service</h4>
            <p>Streamline your busy schedule and look sharp in no time with our and ironing service, guaranteed to have your clothes pressed and ready to wear in just one hour.</p>
            <div class="text-button">
              <a href="#pricing">More <i class="fa fa-arrow-right"></i></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div id="about" class="about-us section">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 align-self-center">
          <div class="section-heading">
            <h4>About <em>MamaClean</em></h4>
            <img src="assets/images/heading-line-dec.png" alt="">
            <p>MamaClean is a laundry service that operates on a kilo basis. The service is convenient for busy
              individuals or families who do not have the time to do their own laundry, and for
              those who want to ensure that their clothes are cleaned thoroughly and professionally.
              MamaClean uses high-quality detergents and equipment to ensure that all fabrics are
              treated gently but effectively, and their experienced staff take care to remove
              stains and restore the brightness of colors. MamaClean is a trustworthy
              and reliable laundry option for those who value quality and convenience.</p>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="right-image">
            <img src="assets/images/right-pic.png" alt="">
          </div>
        </div>
      </div>
    </div>
  </div>
<!-- Service End -->

<!-- Testimonial Start -->
  <div id="clients" class="the-clients">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 offset-lg-2">
          <div class="section-heading">
            <h4>Check What <em>The Customers Say</em> About Our Service</h4>
            <img src="assets/images/heading-line-dec.png" alt="">
            <p>Customers satisfaction about our services</p>
          </div>
        </div>
        <div class="col-lg-12">
          <div class="naccs">
            <div class="grid">
              <div class="row">
                <div class="col-lg-7 align-self-center">
                  <div class="menu">
                    <div class="first-thumb active">
                      <div class="thumb">
                        <div class="row">
                          <div class="col-lg-4 col-sm-4 col-12">
                            <h4>Martono</h4>
                            <span class="date">19 June 2023</span>
                          </div>
                          <div class="col-lg-4 col-sm-4 d-none d-sm-block">
                            <span class="category">MamaQuick</span>
                          </div>
                          <div class="col-lg-4 col-sm-4 col-12">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <span class="rating">4.9</span>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div>
                      <div class="thumb">
                        <div class="row">
                          <div class="col-lg-4 col-sm-4 col-12">
                            <h4>Haris</h4>
                            <span class="date">29 May 2023</span>
                          </div>
                          <div class="col-lg-4 col-sm-4 d-none d-sm-block">
                            <span class="category">Ironing Service</span>
                          </div>
                          <div class="col-lg-4 col-sm-4 col-12">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <span class="rating">5.0</span>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div>
                      <div class="thumb">
                        <div class="row">
                          <div class="col-lg-4 col-sm-4 col-12">
                            <h4>Maya</h4>
                            <span class="date">23 May 2023</span>
                          </div>
                          <div class="col-lg-4 col-sm-4 d-none d-sm-block">
                            <span class="category">MamaRegular</span>
                          </div>
                          <div class="col-lg-4 col-sm-4 col-12">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <span class="rating">4.9</span>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div>
                      <div class="thumb">
                        <div class="row">
                          <div class="col-lg-4 col-sm-4 col-12">
                            <h4>Wajin</h4>
                            <span class="date">28 April 2023</span>
                          </div>
                          <div class="col-lg-4 col-sm-4 d-none d-sm-block">
                            <span class="category">MamaRegular</span>
                          </div>
                          <div class="col-lg-4 col-sm-4 col-12">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <span class="rating">4.8</span>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="last-thumb">
                      <div class="thumb">
                        <div class="row">
                          <div class="col-lg-4 col-sm-4 col-12">
                            <h4>Markam</h4>
                            <span class="date">21 April 2023</span>
                          </div>
                          <div class="col-lg-4 col-sm-4 d-none d-sm-block">
                            <span class="category">MamaQuick</span>
                          </div>
                          <div class="col-lg-4 col-sm-4 col-12">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <span class="rating">4.8</span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-5">
                  <ul class="nacc">
                    <li class="active">
                      <div>
                        <div class="thumb">
                          <div class="row">
                            <div class="col-lg-12">
                              <div class="client-content">
                                <img src="assets/images/quote.png" alt="">
                                <p>“The turnaround
                                  time for my laundry was incredibly fast, and I received my
                                  fresh and clean clothes within just 24 hours. The staff was friendly and attentive,
                                  ensuring that all my specific requests were met.
                                  I also appreciated their attention to detail, as they
                                  carefully handled delicate fabrics and followed my special
                                  instructions. I highly recommend their services to anyone
                                  in need of fast and reliable laundry service.”</p>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div>
                        <div class="thumb">
                          <div class="row">
                            <div class="col-lg-12">
                              <div class="client-content">
                                <img src="assets/images/quote.png" alt="">
                                <p>“I recently used the ironing services provided by MamaClean, and
                                  I must say, I am extremely impressed. Their attention
                                  to detail and precision in ironing my clothes
                                  were impeccable. Not only did they remove every single
                                  crease, but they also took extra care in handling delicate fabrics.
                                  The result was nothing short of perfection. The team at MamaClean
                                  is professional, friendly, and efficient.
                                  I couldn't be happier with the outstanding service they provided.”</p>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div>
                        <div class="thumb">
                          <div class="row">
                            <div class="col-lg-12">
                              <div class="client-content">
                                <img src="assets/images/quote.png" alt="">
                                <p>“I am absolutely thrilled with the laundry services
                                  provided by this company! Their attention to detail
                                  and quality of work is unparalleled. My clothes always
                                  come back fresh, clean, and perfectly folded. The staff is
                                  incredibly friendly and professional, ensuring a hassle-free
                                  experience every time.
                                  I highly recommend their laundry services to anyone
                                  looking for top-notch quality and outstanding customer care.”</p>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div>
                        <div class="thumb">
                          <div class="row">
                            <div class="col-lg-12">
                              <div class="client-content">
                                <img src="assets/images/quote.png" alt="">
                                <p>“I have been using the regular laundry services offered by
                                  this company for the past three days, and I must say, I am thoroughly impressed. My
                                  clothes come back impeccably clean, fresh, and neatly folded.
                                  The attention to detail they put into each garment is evident.
                                  The team is always friendly and accommodating, ensuring that my
                                  specific requests are met. I highly recommend their regular
                                  laundry services to anyone seeking a reliable and top-notch laundry experience.”</p>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div>
                        <div class="thumb">
                          <div class="row">
                            <div class="col-lg-12">
                              <div class="client-content">
                                <img src="assets/images/quote.png" alt="">
                                <p>“The clothes come back perfectly clean, neatly folded, and smelling fresh.”</p>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
<!-- Testimonial End -->

<!-- Pricing Start -->
  <div id="pricing" class="pricing-tables">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 offset-lg-2">
          <div class="section-heading">
            <h4>We Have The Best <em>Prices</em> You Can Get</h4>
            <img src="assets/images/heading-line-dec.png" alt="">
          </div>
        </div>
        <div class="col-lg-4">
          <div class="pricing-item-regular">
            <span class="price">4k/kg</span>
            <h4>MamaRegular</h4>
            <div class="icon">
              <img src="assets/images/rehular.png" alt="">
            </div>
            <ul>
              <li>Ready within 3 days</li>
              <li>Drop-off anytime</li>
              <li>Ironing service</li>
              <li>1 day warranty</li>
            </ul>
            <div class="border-button">
              <a data-bs-toggle="modal" data-bs-target="#orderModal" role="button">Order Now</data-bs-toggle=></a>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="pricing-item-pro">
            <span class="price">10k/kg</span>
            <h4>MamaQuick</h4>
            <div class="icon">
              <img src="assets/images/quick.png" alt="">
            </div>
            <ul>
              <li>Ready within 24 hours</li>
              <li>Drop-off anytime</li>
              <li>Ironing service</li>
              <li>Premium packaging</li>
              <li>Free choose a fragrance</li>
              <li>5 days warranty</li>
            </ul>
            <div class="border-button">
              <a data-bs-toggle="modal" data-bs-target="#orderModal" role="button">Order Now</data-bs-toggle=></a>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="pricing-item-regular">
            <span class="price">3k/kg</span>
            <h4>Ironing Service</h4>
            <div class="icon">
              <img src="assets/images/iron.png" alt="">
            </div>
            <ul>
              <li>Ready within 1 hour</li>
              <li>Drop-off anytime</li>
              <li>1 day warranty</li>
            </ul>
            <div class="border-button">
              <a data-bs-toggle="modal" data-bs-target="#orderModal" role="button">Order Now</data-bs-toggle=></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
<!-- Pricing End -->

<!-- Footer -->
  <footer id="newsletter">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 offset-lg-2">
          <div class="section-heading">
            <h4>Join our mailing list to receive your order updates</h4>
          </div>
        </div>
        <div class="col-lg-6 offset-lg-3">
          <form id="search" action="#" method="GET">
            <div class="row">
              <div class="col-lg-6 col-sm-6">
                <fieldset>
                  <input type="address" name="address" class="email" placeholder="Email Address..." autocomplete="on" required>
                </fieldset>
              </div>
              <div class="col-lg-6 col-sm-6">
                <fieldset>
                  <button type="submit" class="main-button">Subscribe Now <i class="fa fa-angle-right"></i></button>
                </fieldset>
              </div>
            </div>
          </form>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-4">
          <div class="footer-widget">
            <h4>Contact Us</h4>
            <p>Yogyakarta - Yk, 22795-008, Indonesia</p>
            <p><a href="#">010-020-0340</a></p>
            <p><a href="#">info@mamaclean.co</a></p>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="footer-widget">
            <h4>About Us</h4>
            <ul>
              <li><a href="#top">Home</a></li>
              <li><a href="#services">Services</a></li>
              <li><a href="#pricing">Pricing</a></li>
            </ul>
            <ul>
              <li><a href="#about">About</a></li>
              <li><a href="#clients">Testimonials</a></li>
            </ul>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="footer-widget">
            <h4>About Our Company</h4>
            <div class="logo">
              <img src="assets/images/MamaClean1.png" alt="MamaClean">
            </div>
            <p>Laundry service that operates on a kilo basis.</p>
          </div>
        </div>
        <div class="col-lg-12">
          <div class="copyright-text">
            <p>Copyright © 2023 MamaClean Laundry. All Rights Reserved.
          </div>
        </div>
      </div>
    </div>
  </footer>


  <!-- Scripts -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/js/owl-carousel.js"></script>
  <script src="assets/js/animation.js"></script>
  <script src="assets/js/imagesloaded.js"></script>
  <script src="assets/js/popup.js"></script>
  <script src="assets/js/custom.js"></script>

  <script>
    $(document).ready(function() {
      $('#add-item-order').click(function() {
        const inputField = `
      <div class="row mb-3">
        <div class="col-lg-6">
          <label for="">Name</label>
          <input type="text" name="nama_item[]" class="form-control" required>
        </div>

        <div class="col-lg-3">
          <label for="">Amount</label>
          <input type="number" name="banyak_item[]" class="form-control banyak-input" required>
        </div>

        <div class="col-lg-3">
          <label for="">Weight</label>
          <input type="number" name="berat_item[]" class="form-control berat-input" required>
        </div>
      </div>
    `;
        $('#item-container').append(inputField);
        $('.berat-input').on('input', recalculateBerat);
      });

      $(document).on('input', '.berat-input', recalculateBerat);

      function recalculateBerat() {
        let sum = 0;
        $('.berat-input').each(function() {
          let value = parseFloat($(this).val());
          if (!isNaN(value)) {
            sum += value;
          }
        });
        $('#berat-value').text(sum);
        updateTotalHarga();
      }

      $('input[name="service"]').on('change', function() {
        const selectedService = $('input[name="service"]:checked').val();
        let price = 0;

        if (selectedService === 'regular') {
          price = 4000;
        } else if (selectedService === 'quick') {
          price = 10000;
        } else if (selectedService === 'ironing') {
          price = 3000;
        }

        $('#service-harga').text(price);

        updateTotalHarga();
      });

      function updateTotalHarga() {
        const servicePrice = parseInt($('#service-harga').text());
        const beratValue = parseFloat($('#berat-value').text());
        const totalHarga = servicePrice * beratValue;
        const formattedTotalHarga = totalHarga.toLocaleString('id-ID', {
          style: 'currency',
          currency: 'IDR'
        });
        $('#total-harga-value').text(formattedTotalHarga);
      }

      updateTotalHarga();
    });
    function confirmSubmit() {
    if (confirm("Are you sure you want to submit?")) {
      return true;
    } else {
      return false;
    }
  }
  </script>
</body>

</html>