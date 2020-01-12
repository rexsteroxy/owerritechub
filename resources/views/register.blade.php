<!DOCTYPE html>
<html lang="en">

<head>
  <title>OwerriTechHub Official Website</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


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


  

    <div class="intro-section" id="home-section">

      <div class="slide-1" style="background-image: url('images/img-2.jpeg');" data-stellar-background-ratio="0.5">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-12">
              <div class="row align-items-center">
                <div class="col-lg-6 mb-4">
                  <h1 data-aos="fade-up" data-aos-delay="100">Learn From The Expert</h1>
                  <p class="mb-4" data-aos="fade-up" data-aos-delay="200">A 5 months practical oriented training class. 
            There will be a tutor lead section,<br> class programming session and a project development section.
             Every student will be expected to complete a web project (a Computer Based Test
              or a Responsive Personal Resume Website or both) using the technology 
              learnt during the training. All registered students will benefit from free Co-Working Space 
            and free internet access, which will be provided by the hub.</p>
            <div>
            <h4 style="color:white; ">All at an affordable fee of
             <strike>N</strike>50,000.</h4>
              </div>
                  <p data-aos="fade-up" data-aos-delay="300"><a href="/"
                      class="btn btn-primary py-3 px-5 btn-pill">Back</a></p>

                </div>
               
                <div class="col-lg-5 ml-auto" data-aos="fade-up" data-aos-delay="500">
                @if (session('response'))
                        <div class="alert alert-success">
                            {{ session('response') }}
                        </div>
            @endif
                  <form action="/student-registration" method="post" class="form-box">
                    {{ csrf_field() }}

                    <h3 class="h4 text-black mb-4">Fill The Following </h3>
                    <div class="form-group">
                      <input type="text" class="form-control" placeholder="Full Name" name="fullname"
                       required>
                    </div>
                    <div class="form-group">
                      <input type="email" class="form-control" 
                       placeholder="Email" required name="email">
                    </div>
                    <div class="form-group mb-4">
                      <input type="text" class="form-control" placeholder="Phone-Number" name="number">
                    </div>
                    <div>
                    <label for="">Course</label>
                        <select name="course" id="" class="form-group mb-4">
                            <option value="web-development">Web Development</option>
                            <option value="web-development">Design Training</option>
                        </select>
                    </div>
                    <div class="form-group">
                      <input type="submit" class="btn btn-primary btn-pill" value="Register">
                    </div>
                  </form>

                </div>


              </div>
            </div>

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
                  <input type="text" class="form-control" placeholder="First name" name="firstname">
                </div>
                <div class="col-md-6">
                  <input type="text" class="form-control" placeholder="Last name" name="lastname">
                </div>
              </div>
 
              <div class="form-group row">
                <div class="col-md-12">
                  <input type="email" class="form-control" placeholder="Email" name="email">
                </div>
              </div>

              <div class="form-group row">
                <div class="col-md-12">
                  <input type="text" class="form-control" placeholder="Subject" name="subject">
                </div>
              </div>

              
              <div class="form-group row">
                <div class="col-md-12">
                  <textarea class="form-control" id="" cols="30" rows="10"
                    placeholder="Write your message here." name="message"></textarea>
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
                <input type="text" class="form-control rounded-0" placeholder="Email">
                <input type="submit" class="btn btn-primary rounded-0" value="Subscribe">
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