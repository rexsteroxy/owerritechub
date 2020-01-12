<!DOCTYPE html>
<html lang="en">

<head>
  <title>OwerriTechHub Official Website</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Welcome to the official website of OwerriTech-Hub.">

  <link href="https://fonts.googleapis.com/css?family=Muli:300,400,700,900" rel="stylesheet">
  <link rel="stylesheet" href="fonts/icomoon/style.css">

  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/jquery-ui.css">
  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">


  <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">



  <link rel="stylesheet" href="css/style.css">

</head>

<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

  <div class="site-wrap">

    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>


    <header class="site-navbar py-4 js-sticky-header site-navbar-target" role="banner">

      <div class="container-fluid">
        <div class="d-flex align-items-center">
          <div class="site-logo mr-auto w-25"><a href="course-single.html">
              <img src="" alt="OwerriTechHub" class="img-fluid"></a></div>

          <div class="mx-auto text-center">
            <nav class="site-navigation position-relative text-right" role="navigation">
              <ul class="site-menu main-menu js-clone-nav mx-auto d-none d-lg-block  m-0 p-0">
                <li><a href="#home-section" class="nav-link">Home</a></li>
                <li><a href="#courses-section" class="nav-link">Co-Working Space</a></li>
                <li><a href="#programs-section" class="nav-link">Programs</a></li>
                <li><a href="#teachers-section" class="nav-link">About Us</a></li>
              </ul>
            </nav>
          </div>

          <div class="ml-auto w-25">
            <nav class="site-navigation position-relative text-right" role="navigation">
              <ul class="site-menu main-menu site-menu-dark js-clone-nav mr-auto d-none d-lg-block m-0 p-0">
                <li class="cta"><a href="#contact-section" class="nav-link"><span>Contact Us</span></a></li>
              </ul>
            </nav>
            <a href="#" class="d-inline-block d-lg-none site-menu-toggle js-menu-toggle text-black float-right"><span
                class="icon-menu h3"></span></a>
          </div>
        </div>
      </div>

    </header>

    <div class="intro-section" id="home-section">

      <div class="slide-1" style="background-image: url('images/img-2.jpeg');" data-stellar-background-ratio="0.5">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-12">
              <div class="row align-items-center">
                <div class="col-lg-6 mb-4">
                @if (session('response'))
                        <div class="alert alert-success">
                            {{ session('response') }}
                        </div>
            @endif
                  <h1 data-aos="fade-up" data-aos-delay="100">Learn From The Expert</h1>
                  <p class="mb-4" data-aos="fade-up" data-aos-delay="200">We run IT training bootcamps with focus on best tools and practises used in the Tech ecosystem. 
                  We also incubate startups with the right tools for business growth.</p>
                  <p data-aos="fade-up" data-aos-delay="300"><a href="/student-registration"
                      class="btn btn-primary py-3 px-5 btn-pill">Register Now</a></p>

                </div>
                <div class="col-lg-5 ml-auto" data-aos="fade-up" data-aos-delay="500">
                  <img src="images/img-3.jpeg" alt="Image" class="img-fluid ">
                </div>

              </div>
            </div>

          </div>
        </div>
      </div>
    </div>


    <div class="site-section courses-title" id="courses-section">
      <div class="container">
        <div class="row mb-5 justify-content-center">
          <div class="col-lg-7 text-center" data-aos="fade-up" data-aos-delay="">
            <h2 class="section-title">Co-Working-Space</h2>
          </div>
        </div>
      </div>
    </div>
    <div class="site-section courses-entry-wrap" data-aos="fade-up" data-aos-delay="100">
      <div class="container">
        <div class="row">

          <div class="owl-carousel col-12 nonloop-block-14">

            <div class="course bg-white h-100 align-self-stretch">
              <figure class="m-0">
                <a href="course-single.html"><img src="images/img-6.jpg" alt="Image" class="img-fluid"></a>
              </figure>
              <div class="course-inner-text py-4 px-4">
                <span class="course-price"><strike>N</strike>1000</span>
                <div class="meta"><span class="icon-clock-o"></span>Daily</div>
                <h3><a href="#">Co-Working-Space</a></h3>
                <p>Constant Power Supply</p>
                <p>Enabling Environment</p>
                <p>Free Internet Access</p>
              </div>
              <div class="d-flex border-top stats">
                <div class="py-3 px-4"><span class="icon-users"></span></div>
                <div class="py-3 px-4 w-25 ml-auto border-left"><span class="icon-chat"></span> </div>
              </div>
            </div>

            <div class="course bg-white h-100 align-self-stretch">
              <figure class="m-0">
                <a href="course-single.html"><img src="images/img-7.jpg" alt="Image" class="img-fluid"></a>
              </figure>
              <div class="course-inner-text py-4 px-4">
                <span class="course-price"><strike>N</strike>1000</span>
                <div class="meta"><span class="icon-clock-o"></span>Daily</div>
                <h3><a href="#">Co-Working-Space</a></h3>
                <p>Constant Power Supply</p>
                <p>Enabling Environment</p>
                <p>Free Internet Access</p>
              </div>
              <div class="d-flex border-top stats">
                <div class="py-3 px-4"><span class="icon-users"></span></div>
                <div class="py-3 px-4 w-25 ml-auto border-left"><span class="icon-chat"></span> </div>
              </div>
            </div>

            <div class="course bg-white h-100 align-self-stretch">
              <figure class="m-0">
                <a href="course-single.html"><img src="images/img-8.jpg" alt="Image" class="img-fluid"></a>
              </figure>
              <div class="course-inner-text py-4 px-4">
                <span class="course-price"><strike>N</strike>1000</span>
                <div class="meta"><span class="icon-clock-o"></span>Daily</div>
                <h3><a href="#">Co-Working-Space</a></h3>
                <p>Constant Power Supply</p>
                <p>Enabling Environment</p>
                <p>Free Internet Access</p>
              </div>
              <div class="d-flex border-top stats">
                <div class="py-3 px-4"><span class="icon-users"></span></div>
                <div class="py-3 px-4 w-25 ml-auto border-left"><span class="icon-chat"></span> </div>
              </div>
            </div>



            <div class="course bg-white h-100 align-self-stretch">
              <figure class="m-0">
                <a href="course-single.html"><img src="images/img-6.jpg" alt="Image" class="img-fluid"></a>
              </figure>
              <div class="course-inner-text py-4 px-4">
                <span class="course-price"><strike>N</strike>1000</span>
                <div class="meta"><span class="icon-clock-o"></span>Daily</div>
                <h3><a href="#">Co-Working-Space</a></h3>
                <p>Constant Power Supply</p>
                <p>Enabling Environment</p>
                <p>Free Internet Access</p>
              </div>
              <div class="d-flex border-top stats">
                <div class="py-3 px-4"><span class="icon-users"></span></div>
                <div class="py-3 px-4 w-25 ml-auto border-left"><span class="icon-chat"></span> </div>
              </div>
            </div>

            <div class="course bg-white h-100 align-self-stretch">
              <figure class="m-0">
                <a href="course-single.html"><img src="images/img-9.jpg" alt="Image" class="img-fluid"></a>
              </figure>
              <div class="course-inner-text py-4 px-4">
                <span class="course-price"><strike>N</strike>1000</span>
                <div class="meta"><span class="icon-clock-o"></span>Daily</div>
                <h3><a href="#">Co-Working-Space</a></h3>
                <p>Constant Power Supply</p>
                <p>Enabling Environment</p>
                <p>Free Internet Access</p>
              </div>
              <div class="d-flex border-top stats">
                <div class="py-3 px-4"><span class="icon-users"></span></div>
                <div class="py-3 px-4 w-25 ml-auto border-left"><span class="icon-chat"></span> </div>
              </div>
            </div>

            <div class="course bg-white h-100 align-self-stretch">
              <figure class="m-0">
                <a href="course-single.html"><img src="images/img-6.jpg" alt="Image" class="img-fluid"></a>
              </figure>
              <div class="course-inner-text py-4 px-4">
                <span class="course-price"><strike>N</strike>1000</span>
                <div class="meta"><span class="icon-clock-o"></span>Daily</div>
                <h3><a href="#">Co-Working-Space</a></h3>
                <p>Constant Power Supply</p>
                <p>Enabling Environment</p>
                <p>Free Internet Access</p>
              </div>
              <div class="d-flex border-top stats">
                <div class="py-3 px-4"><span class="icon-users"></span></div>
                <div class="py-3 px-4 w-25 ml-auto border-left"><span class="icon-chat"></span> </div>
              </div>
            </div>

          </div>



        </div>
        <div class="row justify-content-center">
          <div class="col-7 text-center">
            <button class="customPrevBtn btn btn-primary m-1">Prev</button>
            <button class="customNextBtn btn btn-primary m-1">Next</button>
          </div>
        </div>
      </div>
    </div>


    <div class="site-section" id="programs-section">
      <div class="container">
        <div class="row mb-5 justify-content-center">
          <div class="col-lg-7 text-center" data-aos="fade-up" data-aos-delay="">
            <h2 class="section-title">Our Programs</h2>
            <p>We run IT training bootcamps with focus on best tools and practises used in the Tech ecosystem.
             We also incubate startups with the right tools for business growth.
            </p>
          </div>
        </div>
        <div class="row mb-5 align-items-center">
          <div class="col-lg-7 mb-5" data-aos="fade-up" data-aos-delay="100">
            <img src="images/img-2.jpeg" alt="Image" class="img-fluid">
          </div>
          <div class="col-lg-4 ml-auto" data-aos="fade-up" data-aos-delay="200">
            <h2 class="text-black mb-4">Web Development Training</h2>
            <p class="mb-4"> A 5 months practical oriented training class. 
            There will be a tutor lead section,<br> class programming session and a project development section.
             Every student will be expected to complete a web project (a Computer Based Test
              or a Responsive Personal Resume Website or both) using the technology 
              learnt during the training. All registered students will benefit from free Co-Working Space 
            and free internet access, which will be provided by the hub.</p>

            <div class="d-flex align-items-center custom-icon-wrap mb-3">
              <span class="custom-icon-inner mr-3"><span class="icon icon-graduation-cap"></span></span>
              <div>
                <h3 class="m-0">All at an affordable fee of <strike>N</strike>50,000</h3>
              </div>
            </div>

            <div class="d-flex align-items-center custom-icon-wrap">
              <span class="custom-icon-inner mr-3"><span class="icon icon-university"></span></span>
              <div>
                <h3 class="m-0"><a href="/student-registration"
                      class="btn btn-primary py-3 px-5 btn-pill">Register Now</a></h3>
              </div>
            </div>

          </div>
        </div>

        <div class="row mb-5 align-items-center">
          <div class="col-lg-7 mb-5 order-1 order-lg-2" data-aos="fade-up" data-aos-delay="100">
            <img src="images/undraw_teaching.svg" alt="Image" class="img-fluid">
          </div>
          <div class="col-lg-4 mr-auto order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
            <h2 class="text-black mb-4">STARTUP INCUBATION</h2>
            <p class="mb-4">Gain the right knowledge on what you need to build a successful business.</p>

            <!-- <div class="d-flex align-items-center custom-icon-wrap mb-3">
              <span class="custom-icon-inner mr-3"><span class="icon icon-graduation-cap"></span></span>
              <div>
                <h3 class="m-0">22,931 Yearly Graduates</h3>
              </div>
            </div>

            <div class="d-flex align-items-center custom-icon-wrap">
              <span class="custom-icon-inner mr-3"><span class="icon icon-university"></span></span>
              <div>
                <h3 class="m-0">150 Universities Worldwide</h3>
              </div>
            </div> -->

          </div>
        </div>

        <div class="row mb-5 align-items-center">
          <div class="col-lg-7 mb-5" data-aos="fade-up" data-aos-delay="100">
            <img src="images/undraw_teacher.svg" alt="Image" class="img-fluid">
          </div>
          <div class="col-lg-4 ml-auto" data-aos="fade-up" data-aos-delay="200">
            <h2 class="text-black mb-4">MATERNAL HEALTH & BREAST CANCER</h2>
            <p class="mb-4">Learn and build innovative methods to improve health care.</p>

            <!-- <div class="d-flex align-items-center custom-icon-wrap mb-3">
              <span class="custom-icon-inner mr-3"><span class="icon icon-graduation-cap"></span></span>
              <div>
                <h3 class="m-0">22,931 Yearly Graduates</h3>
              </div>
            </div>

            <div class="d-flex align-items-center custom-icon-wrap">
              <span class="custom-icon-inner mr-3"><span class="icon icon-university"></span></span>
              <div>
                <h3 class="m-0">150 Universities Worldwide</h3>
              </div>
            </div> -->

          </div>
        </div>

      </div>
    </div>

    <div class="site-section" id="teachers-section">
      <div class="container">

        <div class="row mb-5 justify-content-center">
          <div class="col-lg-7 mb-5 text-center" data-aos="fade-up" data-aos-delay="">
            <h2 class="section-title">About Us</h2>
            <p class="mb-5">We run IT training bootcamps with focus on best tools and practises used in the Tech ecosystem.
             We also incubate startups with the right tools for business growth.</p>
          </div>
        </div>
        <div class="row mb-5 justify-content-center">
          <div class="col-lg-7 mb-5 text-center" data-aos="fade-up" data-aos-delay="">
            <h2 class="section-title">Meet Our Staffs</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6 col-lg-4 mb-4" data-aos="fade-up" data-aos-delay="100">
            <div class="teacher text-center">
              <img src="images/rexs.jpeg" alt="Image" class="img-fluid w-50 rounded-circle mx-auto mb-4">
              <div class="py-2">
                <h3 class="text-black">Amadi Austin Chukwuemeka</h3>
                <p class="position">Web Development Instructor</p>
                <p>A Software engineer building Software applications for the web while experimenting with blockchain 
                  technology.
                </p>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-4 mb-4" data-aos="fade-up" data-aos-delay="200">
            <div class="teacher text-center">
              <img src="images/empty.jpeg" alt="Image" class="img-fluid w-50 rounded-circle mx-auto mb-4">
              <div class="py-2">
                <h3 class="text-black">Chinemere</h3>
                <p class="position">Staff</p>
                </p>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-4 mb-4" data-aos="fade-up" data-aos-delay="300">
            <div class="teacher text-center">
              <img src="images/empty.jpeg" alt="Image" class="img-fluid w-50 rounded-circle mx-auto mb-4">
              <div class="py-2">
                <h3 class="text-black">John Doe</h3>
                <p class="position">Staff</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="site-section bg-image overlay" style="background-image: url('images/hero_1.jpg');">
      <div class="container">
        <div class="row justify-content-center align-items-center">
          <div class="col-md-8 text-center testimony">
            <img src="images/desmond.png" alt="Image" class="img-fluid w-25 mb-4 rounded-circle">
            <h3 class="mb-4">Desmond Johnbosco</h3>
            
            <blockquote>
              <p>&ldquo; Chief Technical Officer  &rdquo;</p>
            </blockquote>
          </div>
        </div>
      </div>
    </div>

    <div class="site-section pb-0">

      <div class="future-blobs">
        <div class="blob_2">
          <img src="images/blob_2.svg" alt="Image">
        </div>
        <div class="blob_1">
          <img src="images/blob_1.svg" alt="Image">
        </div>
      </div>
      <div class="container">
        <div class="row mb-5 justify-content-center" data-aos="fade-up" data-aos-delay="">
          <div class="col-lg-7 text-center">
            <h2 class="section-title">Why Choose Us</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-4 ml-auto align-self-start" data-aos="fade-up" data-aos-delay="100">

            <div class="p-4 rounded bg-white why-choose-us-box">

              <div class="d-flex align-items-center custom-icon-wrap custom-icon-light mb-3">
                <div class="mr-3"><span class="custom-icon-inner"><span class="icon icon-graduation-cap"></span></span>
                </div>
                <div>
                  <h3 class="m-0">We Provide The Best Learning Path.</h3>
                </div>
              </div>

              <div class="d-flex align-items-center custom-icon-wrap custom-icon-light mb-3">
                <div class="mr-3"><span class="custom-icon-inner"><span class="icon icon-university"></span></span>
                </div>
                <div>
                  <h3 class="m-0">We Are Located At The Heart Of Owerri.</h3>
                </div>
              </div>

              <div class="d-flex align-items-center custom-icon-wrap custom-icon-light mb-3">
                <div class="mr-3"><span class="custom-icon-inner"><span class="icon icon-graduation-cap"></span></span>
                </div>
                <div>
                  <h3 class="m-0">Top Professionals in The World</h3>
                </div>
              </div>

              <div class="d-flex align-items-center custom-icon-wrap custom-icon-light mb-3">
                <div class="mr-3"><span class="custom-icon-inner"><span class="icon icon-university"></span></span>
                </div>
                <div>
                  <h3 class="m-0">Best Learning Environment</h3>
                </div>
              </div>

              <div class="d-flex align-items-center custom-icon-wrap custom-icon-light mb-3">
                <div class="mr-3"><span class="custom-icon-inner"><span class="icon icon-graduation-cap"></span></span>
                </div>
                <div>
                  <h3 class="m-0">Expand Your Knowledge</h3>
                </div>
              </div>

              <div class="d-flex align-items-center custom-icon-wrap custom-icon-light">
                <div class="mr-3"><span class="custom-icon-inner"><span class="icon icon-university"></span></span>
                </div>
                <div>
                  <h3 class="m-0">Best Teachers</h3>
                </div>
              </div>

            </div>


          </div>
          <div class="col-lg-7 align-self-end" data-aos="fade-left" data-aos-delay="200">
            <img src="images/img-4.jpeg" alt="Image" class="img-fluid">
          </div>
        </div>
      </div>
    </div>





    <div class="site-section bg-light" id="contact-section">
      <div class="container">

        <div class="row justify-content-center">
          <div class="col-md-7">



            <h2 class="section-title mb-3">Message Us</h2>
            <p class="mb-5">Tell us about your tech related problems so we can know how best to serve you. 
            Kindly fill the contact form.</p>
             

            <form action="/message" method="post">
            {{ csrf_field() }}
              <div class="form-group row">
                <div class="col-md-6 mb-3 mb-lg-0">
                  <input required type="text" class="form-control" placeholder="First name" name="firstname">
                </div>
                <div class="col-md-6">
                  <input  required type="text" class="form-control" placeholder="Last name" name="lastname">
                </div>
              </div>
 
              <div class="form-group row">
                <div class="col-md-12">
                  <input required  type="email" class="form-control" placeholder="Email" name="email">
                </div>
              </div>

              <div class="form-group row">
                <div class="col-md-12">
                  <input required type="text" class="form-control" placeholder="Subject" name="subject">
                </div>
              </div>

              
              <div class="form-group row">
                <div class="col-md-12">
                  <textarea class="form-control" id="" cols="30" rows="10"
                    placeholder="Write your message here." name="message" required></textarea>
                </div>
              </div>

              <div class="form-group row">
                <div class="col-md-6">

                  <input type="submit" class="btn btn-primary py-3 px-5 btn-block btn-pill" value="Send Message">
                </div>
              </div>

            </form>
          </div>
        </div>
      </div>
    </div>




    <!-- Google Map -->


    
      <div class="container">

        <div class="row justify-content-center">
          <div class="col-md-7">



            <h2 class="section-title mb-3">See Our Location</h2>
            <p class="mb-5">Easy To Locate</p>
             
            <iframe
             src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3971.536806589953!2d7.037129!3d5.4869767!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1042593f19f8a56d%3A0x3d116de9a709abfd!2sOwerri%20Tech%20Hub!5e0!3m2!1sen!2sng!4v1578828899318!5m2!1sen!2sng" width="auto" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
            </div>
          </div>
            
          </div>
          </div>
        
     
    <!-- Ends here -->


    <footer class="footer-section bg-white">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <h3>About OwerriTechHub</h3>
            <p>We run IT training bootcamps with focus on best tools and practises used in the Tech ecosystem.
             We also incubate startups with the right tools for business growth.</p>
          </div>

          <div class="col-md-3 ml-auto">
            <h3>Links</h3>
            <ul class="list-unstyled footer-links">
            <li><a href="#home-section" >Home</a></li>
                <li><a href="#courses-section" >Co-Working Space</a></li>
                <li><a href="#programs-section">Programs</a></li>
                <li><a href="#teachers-section" >About Us</a></li>
            </ul>
          </div>

          <div class="col-md-4">
          <h3>Contact Us</h3>
          <ul class="list-unstyled footer-links">
            <li> <span class="icon icon-phone"></span> +2348171904344</li>
            <li><span class="icon icon-phone"></span> +2348067915982</li>
            <li><span class="icon-chat"></span> info@owerritechhub.com</li>
            </ul>
            
            <p>Subscribe to recieve the hub's updates.</p>
            <form action="#" class="footer-subscribe">
              <div class="d-flex mb-5">
                <input type="text" class="form-control rounded-0" placeholder="Email" required>
                <input type="submit" class="btn btn-primary rounded-0" value="Subscribe" >
              </div>
            </form>
          </div>

        </div>

        <div class="row pt-5 mt-5 text-center">
          <div class="col-md-12">
            <div class="border-top pt-5">
              <p>
                
                Copyright &copy;
                <script>document.write(new Date().getFullYear());</script> All rights reserved | Developed
                with <i class="icon-heart" aria-hidden="true"></i> by <a href=""
                  target="_blank">Rexsteroxy</a>
               
              </p>
            </div>
          </div>

        </div>
      </div>
    </footer>



  </div> <!-- .site-wrap -->

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/jquery.countdown.min.js"></script>
  <script src="js/bootstrap-datepicker.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.fancybox.min.js"></script>
  <script src="js/jquery.sticky.js"></script>


  <script src="js/main.js"></script>

</body>

</html>