<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="{{ $description }}">
  <meta name="keywords" content="{{ $keywords }}">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <meta name="author" content="Cybernetics">
  <title>{{ $title }}</title>
  <link rel="shortcut icon" href="{{ asset('assets/img/mnp/favicon.png') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/plugins.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/colors/sky.css') }}">
</head>

<body>
  <div class="content-wrapper">
    <header class="wrapper bg-soft-primary">
      <nav class="navbar navbar-expand-lg classic transparent position-absolute navbar-dark">
        <div class="container flex-lg-row flex-nowrap align-items-center">
          <div class="navbar-brand w-100">
            <a href="/">
              <!--<img class="logo-dark" src="./assets/img/logo-purple.png" srcset="./assets/img/logo-purple@2x.png 2x" alt="" />
              <img class="logo-light" src="./assets/img/logo-light.png" srcset="./assets/img/logo-light@2x.png 2x" alt="" />-->
              <img class="logo-dark" src="{{ asset('assets/img/mnp/mnp-gold-black-logo.png') }}" srcset="{{ asset('assets/img/mnp/mnp-gold-black-logo.png') }}" alt="" />
              <img class="logo-light" src="{{ asset('assets/img/mnp/mnp-gold-black-logo.png') }}" srcset="{{ asset('assets/img/mnp/mnp-gold-black-logo.png') }}" alt="" />
            </a>
            
          </div>
          <div class="navbar-collapse offcanvas offcanvas-nav offcanvas-start">
            <div class="offcanvas-header d-lg-none">
              <h3 class="text-white fs-30 mb-0">MNP</h3>
              <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body ms-lg-auto d-flex flex-column h-100">
              <ul class="navbar-nav">
                <li class="nav-item dropdown dropdown-mega">
                  <a class="nav-link" href="/">Home</a>
                </li>
                <li class="nav-item dropdown dropdown-mega">
                  <a class="nav-link" href="/about">About Us</a>
                </li>
                <li class="nav-item dropdown dropdown-mega">
                  <a class="nav-link" href="/service">Our Services</a>
                </li>
                <li class="nav-item dropdown dropdown-mega">
                  <a class="nav-link" href="/contact">Contact Us</a>
                </li>
              </ul>
              <!-- /.navbar-nav -->
              <div class="offcanvas-footer d-lg-none">
                <div>
                  <a href="mailto:sales@mnprental.com" class="link-inverse">sales@mnprental.com</a>
                  <br /> +971 58 5540504 <br />
                  <nav class="nav social social-white mt-4">
                    <a href="https://facebook.com" target="_blank"><i class="uil uil-facebook-f"></i></a>
                    <a href="https://instagram.com" target="_blank"><i class="uil uil-instagram"></i></a>
                  </nav>
                  <!-- /.social -->
                </div>
              </div>
              <!-- /.offcanvas-footer -->
            </div>
            <!-- /.offcanvas-body -->
          </div>
          <!-- /.navbar-collapse -->
          <div class="navbar-other ms-lg-4">
            <ul class="navbar-nav flex-row align-items-center ms-auto">
              <li class="nav-item d-none d-md-block">
                <a href="/contact" class="btn btn-sm btn-white rounded-pill">Book Now</a>
              </li>
              <li class="nav-item d-lg-none">
                <button class="hamburger offcanvas-nav-btn"><span></span></button>
              </li>
            </ul>
            <!-- /.navbar-nav -->
          </div>
          <!-- /.navbar-other -->
        </div>
        <!-- /.container -->
      </nav>
      <!-- /.navbar -->
    </header>
    <!-- /header -->
    @yield("content")
  </div>
  <!-- /.content-wrapper -->
  <footer class="bg-navy text-inverse">
    <div class="container py-13">
      <div class="row gy-6 gy-lg-0">
        <div class="col-md-4 col-lg-3">
          <div class="widget">
            <img class="mb-4 footer-logo" src="{{ asset('assets/img/mnp/mnp-white.png') }}" srcset="{{ asset('assets/img/mnp/mnp-white.png') }}" alt="" />
            <p class="mb-4">© {{ date('Y') }} mnprental.com. <br class="d-none d-lg-block" />All rights reserved.</p>
            <nav class="nav social social-white">
              <a href="https://facebook.com" target="_blank"><i class="uil uil-facebook-f"></i></a>
              <a href="https://instagram.com" target="_blank"><i class="uil uil-instagram"></i></a>
            </nav>
            <!-- /.social -->
          </div>
          <!-- /.widget -->
        </div>
        <!-- /column -->
        <div class="col-md-4 col-lg-3">
          <div class="widget">
            <h4 class="widget-title text-white mb-3">Get in Touch</h4>
            <address class="pe-xl-15 pe-xxl-17">Bin Shabib Mall, Block 3, #409, Alqusais, Dubai</address>
            <a href="mailto:sales@mnprental">sales@mnprental.com</a><br /> +971 58 5540504
          </div>
          <!-- /.widget -->
        </div>
        <!-- /column -->
        <div class="col-md-4 col-lg-3">
          <div class="widget">
            <h4 class="widget-title text-white mb-3">Learn More</h4>
            <ul class="list-unstyled  mb-0">
              <li><a href="/about">About Us</a></li>
              <li><a href="/services">Our Services</a></li>
              <li><a href="/contact">Contact Us</a></li>
            </ul>
          </div>
          <!-- /.widget -->
        </div>
        <!-- /column -->
        <div class="col-md-12 col-lg-3">
          <div class="widget">
            <h4 class="widget-title text-white mb-3">Request Callback</h4>
            <p class="mb-5">Drop your phone number and our executive will reach out you shortly.</p>
            <div class="newsletter-wrapper">
              <!-- Begin Mailchimp Signup Form -->
              <div id="mc_embed_signup2">
                <form action="{{ route('callback.submit') }}" method="post">
                  @csrf
                  <div id="mc_embed_signup_scroll2">
                    <div class="mc-field-group input-group form-floating">
                      <input type="text" value="" name="mobile" class="required form-control" placeholder="Phone Number" id="mobile">
                      <label for="mobile">Phone Number</label>
                      <input type="button" value="Send" name="subscribe" id="mc-embedded-subscribe2" class="btn btn-callback btn-primary" required>
                    </div>
                    <div id="mce-responses2" class="clear">
                      <div class="response" id="mce-error-response2" style="display:none"></div>
                      <div class="response" id="mce-success-response2" style="display:none"></div>
                    </div> <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                    <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_ddc180777a163e0f9f66ee014_4b1bcfa0bc" tabindex="-1" value=""></div>
                    <div class="msg"></div>
                  </div>
                </form>
              </div>
              <!--End mc_embed_signup-->
            </div>
            <!-- /.newsletter-wrapper -->
          </div>
          <!-- /.widget -->
        </div>
        <!-- /column -->
      </div>
      <!--/.row -->
    </div>
    <!-- /.container -->
  </footer>
  <!--Start of Tawk.to Script-->
  <script type="text/javascript">
  var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
  (function(){
  var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
  s1.async=true;
  s1.src='https://embed.tawk.to/6402ba104247f20fefe3e372/1gqladkns';
  s1.charset='UTF-8';
  s1.setAttribute('crossorigin','*');
  s0.parentNode.insertBefore(s1,s0);
  })();
  </script>
<!--End of Tawk.to Script-->
  <div class="progress-wrap">
    <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
      <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
    </svg>
  </div>
  <script src="{{ asset('assets/js/plugins.js') }}"></script>
  <script src="{{ asset('assets/js/theme.js') }}"></script>
  <script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
  <script>
      $(function(){
        $('form').submit(function(){
          $(".btn-submit").attr("disabled", true);
          $(".btn-submit").html("<span class='spinner-grow spinner-grow-sm' role='status' aria-hidden='true'></span>");
      });

      $.ajaxSetup({
          headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
      });

      $(".btn-callback").click(function(){
        var mobile = $("#mobile").val();
        $.ajax({
            type: 'GET',
            url: '/callback',
            data: {'mobile': mobile},
            success: function(response){
              $("#mobile").val('');
              $(".msg").html(response);
            },
            error: function(XMLHttpRequest, textStatus, errorThrown){
                console.log(XMLHttpRequest);
            }
        });
        return false;
      });
    });
  </script>
</body>

</html>