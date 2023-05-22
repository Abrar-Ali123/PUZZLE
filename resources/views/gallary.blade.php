<!DOCTYPE html>
<html class="no-js" lang="en">
<head>

<style>
 
input[type="checkbox"] {
    display: none;
}

input[type="checkbox"]:checked + span.circle {
    left: 64px;
    background-color: #FABC62;
    box-shadow: 0 0 40px 0 #FABC62;
}
input[type="checkbox"]:checked + span.circle::before, input[type="checkbox"]:checked + span.circle::after {
    background-color: rgba(250, 188, 98, 0);
}
label.slider {
    border: 6px solid #06121C;
    border-radius: 100px;
    width: 64px;
    height: 32px;
    position: relative;
    background-color: #06121C;
    box-sizing: content-box;
    z-index: 1;
    /*overflow: hidden; Add if using span.circle::before */
    transition: border .3s, background-color .3s, box-shadow .3s;
    cursor: pointer;
}
label.slider.isChecked {
    border: 6px solid #167694;
    background-color: #167694;
}
label.slider:hover {
    box-shadow: 0 0 6px rgba(239, 239, 239, 0.32);
}
span.circle {
    position: absolute;
    width: 32px;
    height: 32px;
    background-color: #FEFAF4;
    border-radius: 50%;
    top: 0;
    left: 0;
    transition: left .3s, background-color .7s, box-shadow .3s;
    box-shadow: 0 0 20px 0 #FEFAF4;
}
span.circle::before, span.circle::after {
    content: '';
    background-color: #dcd8d3;
    position: absolute;
    border-radius: 50%;
    transition: background-color .7s;
}
span.circle::before {
    height: 6px;
    width: 6px;
    bottom: 10px;
    right: 20px;
}
span.circle::after {
    height: 10px;
    width: 10px;
    bottom: 20px;
    right: 10px;
}
/* used for color slide in from the side
span.circle::before {
    content: '';
    background-color: rgba(17, 220, 67, 1);
    height: 64px;
    width: 128px;
    z-index: -1;
    position: absolute;
    left: -96px;
}
*/
 

.gallery {
  -webkit-column-count: 3;
  -moz-column-count: 3;
  column-count: 3;
  -webkit-column-width: 33%;
  -moz-column-width: 33%;
  column-width: 33%;
}

.gallery .pics {
  -webkit-transition: all 350ms ease;
  transition: all 350ms ease;
}

.gallery .animation {
  -webkit-transform: scale(1);
  -ms-transform: scale(1);
  transform: scale(1);
}

@media (max-width: 450px) {
  .gallery {
    -webkit-column-count: 1;
    -moz-column-count: 1;
    column-count: 1;
    -webkit-column-width: 100%;
    -moz-column-width: 100%;
    column-width: 100%;
  }
}

@media (max-width: 400px) {
  .btn.filter {
    padding-left: 1.1rem;
    padding-right: 1.1rem;
  }
}
</style>



  <!-- Meta Tags -->
  <meta charset="utf-8" />
  <meta http-equiv="x-ua-compatible" content="ie=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta name="author" content="laralink" />
  <meta name="description" content="" />
  <meta name="keywords" content="" />
  <!-- Page Title -->
  <title>Puzzle</title>
  <!-- Favicon Icon -->
  <link rel="icon"   href="{{ asset('/img/favicon.png') }}">
  <!-- Stylesheets -->
    
 
  <link rel="stylesheet" type="text/css" href="{{ asset('/css/style.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('/css/animate.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('/css/flaticon.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('/css/fontawesome.min.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('/css/owlCarousel.min.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('/css/bootstrap.min.css') }}">


</head>
  <body>


    <div id="st-preloader">
      <div class="st-preloader-wave"></div>
      <div class="st-preloader-wave"></div>
      <div class="st-preloader-wave"></div>
      <div class="st-preloader-wave"></div>
      <div class="st-preloader-wave"></div>

    </div>
    <header class="st-header st-style1 st-sticky-menu st-full-width">
      <div class="st-main-header">
        <div class="container-fluid">
          <div class="st-main-header-in" style="display:flex;align-items:center;justify-content:space-between;">
            <div class="st-main-header-left">
  
            <div class="st-site-branding">
              <a href="#" class="st-logo-link"><img src="{{ asset($setting->logo) }}" alt="logo"  style="width:60px;height:60px;"></a>


          </div>
        </div>

            <!-- For Site Title -->
            <!-- <span class="st-site-title">
              <a href="index.html">Logo</a>
            </span> -->
            <div class="st-nav-wrap st-fade-down">
              <div class="st-nav-toggle st-style1">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
              </div>
              <nav class="st-nav st-desktop-nav">
                <ul class="st-nav-list onepage-nav">
                  <li class="st-has-children"><a href="#home" class="smooth-scroll">
                    {{ LaravelLocalization::getCurrentLocaleNative() }} 

                    <i class="flaticon-worldwide"></i>
                  </a>
                    <ul>
                    @foreach (LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                      <li><a href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">{{ $properties['native'] }}</a></li>
                      @endforeach
                    </ul>
                  </li>
              


                  
        <li><a href="{{route('index')}}" class="slider">{{ __('index.Home') }}</a></li>
        <li><a href="{{route('index.realEstate')}}" class="smooth-scroll">{{ __('index.realEstate') }}</a></li>

                 </ul>
         

                </nav><!-- .st-nav -->
              </div><!-- .st-nav-wrap -->
              <label class="slider d-flex justify-content-right">
                <input type="checkbox" id="check">
                <span class="circle"></span>
            </label>


          </div>
        </div>
      </div>
    </header>
    <div class="st-content">
        <section class="st-pricing-wrap st-section" id="price">
            <div class="container">
      
    <!-- Grid row -->
<div class="row">

    <!-- Grid column -->
    <h2>معرض أعمال بزل</h2>

    <div class="col-md-12 d-flex justify-content-center mb-5">
      <button type="button" class="btn btn-outline-black waves-effect filter" data-rel="all">All</button>
      <button type="button" class="btn btn-outline-black waves-effect filter" data-rel="1">Mountains</button>
      <button type="button" class="btn btn-outline-black waves-effect filter" data-rel="2">Sea</button>
  
    </div>
    <!-- Grid column -->
  
  </div>
  <!-- Grid row -->
  
  <!-- Grid row -->
  <div class="gallery" id="gallery">
  
    <!-- Grid column -->
    <div class="mb-3 pics animation all 2">
      <img class="img-fluid" src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(73).webp" alt="Card image cap">
    </div>
    <!-- Grid column -->
  
    <!-- Grid column -->
    <div class="mb-3 pics animation all 1">
      <img class="img-fluid" src="https://mdbootstrap.com/img/Photos/Vertical/mountain1.webp" alt="Card image cap">
    </div>
    <!-- Grid column -->
  
    <!-- Grid column -->
    <div class="mb-3 pics animation all 1">
      <img class="img-fluid" src="https://mdbootstrap.com/img/Photos/Vertical/mountain2.webp" alt="Card image cap">
    </div>
    <!-- Grid column -->
  
    <!-- Grid column -->
    <div class="mb-3 pics animation all 2">
      <img class="img-fluid" src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(35).webp" alt="Card image cap">
    </div>
    <!-- Grid column -->
  
    <!-- Grid column -->
    <div class="mb-3 pics animation all 2">
      <img class="img-fluid" src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(18).webp" alt="Card image cap">
    </div>
    <!-- Grid column -->
  
    <!-- Grid column -->
    <div class="mb-3 pics animation all 1">
      <img class="img-fluid" src="https://mdbootstrap.com/img/Photos/Vertical/mountain3.webp" alt="Card image cap">
    </div>
    <!-- Grid column -->
  
  </div>
  <!-- Grid row -->
     
    </div>
</div>
</div>

    <!-- Start Footer Seciton -->
    <footer class="st-site-footer st-style1 st-sticky-footer">
      <div class="st-main-footer text-center">
        <div class="container">
          <div class="st-footer-logo">
            <img src="{{ asset($setting->logo) }}" alt="logo">
          </div>
          <div class="st-footer-text">{{ __('index.Puzzle complete') }}<br />{{ __('index.the missing part!') }}</div>
          <div class="st-footer-social">
            <ul class="st-footer-social-btn st-flex st-mp0">
              <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
              <li><a href="#"><i class="fab fa-twitter"></i></a></li>
              <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
              <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
              <li><a href="#"><i class="fab fa-instagram"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="st-copyright text-center">
          <div class="st-copyright-text">© Puzzle , 2022</div>
      </div>
    </footer>
    <!-- End Footer Seciton -->
    <!-- Start Video Popup -->
    <div class="st-video-popup">
      <div class="st-video-popup-overlay"></div>
      <div class="st-video-popup-content">
        <div class="st-video-popup-layer"></div>
        <div class="st-video-popup-container">
          <div class="st-video-popup-align">
            <div class="embed-responsive embed-responsive-16by9">
              <iframe class="embed-responsive-item" src="about:blank"></iframe>
            </div>
          </div>
          <div class="st-video-popup-close"></div>
        </div>
      </div>
    </div>
    <!-- End Video Popup -->
    <!-- Scripts -->

    <script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
    <script type="text/javascript" src="{{ asset('/js/main.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/js/wow.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/js/tamjid-counter.min.js') }}"></script>
    <script type="text/javascript"  src="{{ asset('/js/owlCarousel.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/js/mailchimp.min.js') }}"></script>
    <script  type="text/javascript" src="{{ asset('/js/vendor/jquery-1.12.4.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/js/vendor/modernizr-3.5.0.min.js') }}"></script>
  
<script>

$(function() {
  var selectedClass = "";
  $(".filter").click(function(){
    selectedClass = $(this).attr("data-rel");
    $("#gallery").fadeTo(100, 0.1);
    $("#gallery div").not("."+selectedClass).fadeOut().removeClass('animation');
    setTimeout(function() {
      $("."+selectedClass).fadeIn().addClass('animation');
      $("#gallery").fadeTo(300, 1);
    }, 300);
  });
});
</script>
</body>
</html>
