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
 
 
img.c1 {
    top: 11%;
    left: 34%;
    width: 10%;
    animation: movingClouds 10s linear infinite;
}
img.c2 {
    top: 14%;
    left: 78%;
    width: 8%;
    animation: movingClouds 13s linear infinite;}
img.c3 {
    top: 40%;
    left: 10%;
    width: 30%;
    animation: movingClouds 15s linear infinite;}
img.c4 {
    top: 37%;
    left: 60%;
    width: 18%;
    animation: movingClouds 18s linear infinite;}
img.c5 {
    bottom: 0;
    left: 55%;
    width: 40%;
    animation: movingClouds 20s linear infinite;
}
@keyframes movingClouds {
    0% {left: 110%;}
    100% {left: -50%;}
}

img.stars {
    width: 100%;
    height: 100%;
    position: absolute;
    top: 0;
    left: 0;
    opacity: 1;
    transition: opacity .3s;
}

body.bodyChecked img.stars {
    opacity: 0;
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
  <title>puzzle</title>
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
        <div class="container">
          <div class="st-main-header-in">
            <div class="st-site-branding">
              
  <a href="#" class="st-logo-link"><img src="{{ asset($setting->logo) }}" alt="logo"  style="width:60px;height:60px;"></a>
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
              


                  
        <li><a href="#Home" class="slider">{{ __('index.Home') }}</a></li>
                  <li><a href="#about" class="smooth-scroll">{{ __('index.About') }}</a></li>
                  <li><a href="#service" class="smooth-scroll">{{ __('index.Service') }}</a></li>
                  <li><a href="#portfolio" class="smooth-scroll">{{ __('index.Portfolio') }}</a></li>
                  <li><a href="#contact" class="smooth-scroll">{{ __('index.contact') }}</a></li>
                  <li>
                  <label class="slider">
                    <input type="checkbox" id="check">
                    <span class="circle"></span>
                </label>
                </li>
                
                  </li>
                 </ul>
         

                </nav><!-- .st-nav -->
              </div><!-- .st-nav-wrap -->
          </div>
        </div>
      </div>
    </header>
    <div class="st-content">
      <!-- Start Hero Slider -->
      <div class="st-hero-slider1 owl-carousel st-owl-controler2" id="home">
        <div class="st-hero-slide st-style1 st-flex">
          <div class="container">
            <div class="st-hero-text st-style1">
              <h1 class="st-hero-title">
              {{ __('index.Puzzle complete') }}
              <br />
              {{ __('index.the missing part!') }}
            </h1>
              <div class="st-hero-subtitle">
              
              {{ __('index.Marketing solutions') }}
                 <br />
               </div>             
              <div class="st-btn-group st-style1">
                <a href="#" class="st-btn st-style1 st-color1">
                {{ __('index.Get to know us more') }}
                </a>
                <a href="#" class="st-btn st-style2 st-video-open"><i class="flaticon-multimedia"></i></a>
              </div>
            </div>
            </div>
          <div class="st-hero-img"><img src="https://limty-html.netlify.app/limty/assets/img/light-img/hero-img.png" alt="demo"></div>
        </div>
     
      </div>
      <!-- End Hero Slider -->
      <!-- Start Icon Box -->
      <section class="st-section-top" id="service">
        <div class="container">
          <div class="row">
            <div class="col-lg-4">
              <div class="st-iconbox st-style1 text-center wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.2s">
                <div class="st-iconbox-icon">
                  <i class="flaticon-focus"></i>
                </div>
                <h3 class="st-iconbox-title">{{ __('index.go') }}</h3>
                <div class="st-iconbox-text">
                  {{ __('index.go.des') }}
                </div>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="st-iconbox st-style1 text-center wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.3s">
                <div class="st-iconbox-icon">
                  <i class="flaticon-career"></i>
                </div>
                <h3 class="st-iconbox-title">{{ __('index.go2') }}</h3>
                <div class="st-iconbox-text">
                  {{ __('index.go2.des') }}
                   </div>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="st-iconbox st-style1 text-center wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.4s">
                <div class="st-iconbox-icon">
                  <i class="flaticon-career-1"></i>
                </div>
                <h3 class="st-iconbox-title">{{ __('index.go3') }}</h3>
                <div class="st-iconbox-text">
                  {{ __('index.go3.des') }}
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- End Icon Box -->
  
      <!-- Start About Section -->

      <div class="st-about-wrap st-section-top mb-3" id="about">
        <div class="container">
          <div class="row">
            <div class="col-lg-6">
              <div class="st-vertical-middle">
                <div class="st-vertical-middle-in">
                  <div class="st-about-img wow fadeInLeft" data-wow-duration="0.8s" data-wow-delay="0.2s"><img src="https://limty-html.netlify.app/limty/assets/img/light-img/about-img1.png" alt="about"></div>
                </div>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="st-section-heading st-style1">
                <h3>{{ __('index.us?') }}</h3>
                <h2>@lang('index.us.des')</h2>
              </div>
              <div class="st-about-text">
                <p>
                  @lang('index.about.text')
                </p>
                <ul class="tr-list">
                  <li>@lang('index.about.service1')</li>
                  <li>@lang('index.about.service2')</li>
                  <li>@lang('index.about.service3')</li>
                  <li>@lang('index.about.service4')</li>
                </ul>
                <a href="#" class="st-btn st-style1 st-size1 st-color2">@lang('index.orderService')</a>
              </div>
            </div>
          </div>
        </div>
      </div>


      <!-- End About Section -->
  
      <!-- Start Service Section -->
      @foreach ($categories as $category)

      <section class="st-service-section st-section-top" id="service">
        <div class="container">
          <div class="st-section-heading st-style2 text-center">
            <h2>{{ $category->title }}</h2>
            <div class="st-seperator">
              <div class="st-seperator-left-bar wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.2s"></div>
              <img src="{{asset($category->image)}}" alt="{{ $category->title }}" class="st-seperator-icon">
              <div class="st-seperator-right-bar wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.2s"></div>
            </div>
            <p>{{ $category->content }}</p>
          </div>
        </div>
        <div class="st-owl-controler3-hover">
          <div class="container">
            <div class="st-service-carousel owl-carousel st-style2 st-owl-controler3">
              @foreach ($category->products as $pr)

              <div class="st-image-box st-style1 text-center wow fadeIn" data-wow-duration="0.8s" data-wow-delay="0.2s">
                <a href="#" class="st-image"><img src="{{asset($pr->image)}}" alt="{{$pr->title}}"></a>
                <div class="st-image-box-info">
                  <h3 class="st-image-box-title"><a href="#">{{$pr->title}}</a></h3>
                  <div class="st-image-box-text">{{$pr->smallDesc}}</div>
                </div>
              </div>
              @endforeach

            </div>
          </div>
        </div>
      </section>

      @endforeach

      <!-- End Service Section -->
  
  
      <!-- Start CTA Section -->
      <section class="st-cta-wrap st-gray-bg mt-3">
        <div class="container">
          <div class="row">
            <div class="col-lg-7 offset-lg-1">
              <div class="st-cta text-center st-section">
                <h2 class="st-cta-title">@lang('index.lookingFor')</h2>
                <div class="st-cta-text">@lang('index.lookingFor.text')</div>
                <div class="st-cta-btn">
                  <a href="mailto:test@test.com" class="st-btn st-style1 st-size1 st-color1">@lang('index.lookingFor.button')</a>
                </div>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="st-vertical-middle">
                <div class="st-vertical-middle-in st-flex">
                  <div class="st-cta-img wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.2s">
                    <img src="https://limty-html.netlify.app/limty/assets/img/light-img/cta-img.png" alt="demo">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- End CTA Section -->
        
       <!-- Start Pricing Plan -->
    <section class="st-pricing-wrap st-section" id="price">
      <div class="container">
        <div class="st-section-heading st-style2 text-center">
          <h2>@lang('index.packages')</h2>
          <div class="st-seperator">
            <div class="st-seperator-left-bar wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.2s"></div>
            <img src="img/dark-img/seperator-icon.png" alt="seperator" class="st-seperator-icon">
            <div class="st-seperator-right-bar wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.2s"></div>
          </div>
          <p>@lang('index.packages.text')</p>
        </div>
      </div>
      <div class="container">
        <div class="row">
          @foreach($packages as $pack)
          <div class="col-lg-4">
            <div class="st-price-card text-center wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.2s">
              <div class="st-price-card-img"><img src="{{ asset($pack->image) }}" alt="{{$pack->title}}"></div>
              <h3 class="st-price-card-title">{{$pack->title}}</h3>

              <div class="st-price">
                <h5 class="mb-2">@lang('index.SR') {{$pack->price}}</h5>
                

                <span class="mt-4">{!! $pack->details !!}</span>
              </div>
              <ul class="st-price-card-feature st-mp0">
                @foreach($pack->products as $pr)

                <li>{{$pr->title}}</li>
                @endforeach
              </ul>
              {{-- <div class="st-price-card-btn">
                <a href="#" class="st-btn st-style1 st-size1 st-color1">Start The Plan</a>
              </div> --}}
            </div>
          </div>
          @endforeach
      
        </div>
      </div>
    </section>
    <!-- End Pricing Plan -->
      
      <!-- Start Contact Section -->
      <section class="st-contact-wrap st-gray-bg st-section" id="contact">
        <div class="container">
          <div class="st-section-heading st-style2 text-center">
            <h2>@lang('index.contact')</h2>
            <div class="st-seperator">
              <div class="st-seperator-left-bar wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.2s"></div>
              <img src="img/dark-img/seperator-icon.png" alt="demo" class="st-seperator-icon">
              <div class="st-seperator-right-bar wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.2s"></div>
            </div>
            <p>
              {!! __('index.contact.des') !!}
            </p>
          </div>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-lg-6">
              @if(Session::has('errors'))
              <div class="text-center alert alert-light">
                <h5 style="font-weight: bold;">فضلاً قم بملىء كل الحقول</h5>
              </div>
              @endif
              @if (session()->has('message'))
              <div class="text-center alert alert-light">
                  <h3 style="font-weight: bold;">{{ session('message') }}</h3>
              </div>
              @endif
              <form action="{{route('index.contact')}}" method="post" class="st-contact-form">
                @csrf
                <input type="text" placeholder="@lang('index.form.name')" id="name" name="name" required>
                <input type="text" placeholder="@lang('index.form.email')" id="email" name="email" required>
                <input type="text" placeholder="@lang('index.form.subject')" id="subject" name="subject" required>
                <textarea cols="30" rows="10" placeholder="@lang('index.form.msg')" id="msg" name="msg" required></textarea>
                <button class="st-btn st-style1 st-size1 st-color1" type="submit" id="submit" name="submit">@lang('index.form.button')</button>
              </form>
            </div>
            <div class="col-lg-6">
              <div class="st-contact-info st-style1">
                <div class="st-contact-info-in">
                  <h3 class="st-contact-info-title">@lang('index.contact.info')</h3>
                  <ul>
                    <li><i class="fas fa-map-signs"></i>location</li>
                    <li><i class="fas fa-phone"></i>+966</li>
                    <li><i class="fas fa-envelope"></i><a href="mailto:Puzzle@puzzle-sa.com">Puzzle@puzzle-sa.com</a></li>
                    <li><i class="fas fa-globe"></i><a href="http://puzzle-sa.com">puzzle-sa.com</a></li>
                  </ul>
                </div>
                <div class="st-svg-animation1">
                  <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="590px" height="436px">
                    <defs>
                    <filter filterUnits="userSpaceOnUse" id="Filter_0" x="0px" y="0px" width="590px" height="436px"  >
                        <feOffset in="SourceAlpha" dx="0" dy="5" />
                        <feGaussianBlur result="blurOut" stdDeviation="3.162" />
                        <feFlood flood-color="rgb(106, 106, 106)" result="floodOut" />
                        <feComposite operator="atop" in="floodOut" in2="blurOut" />
                        <feComponentTransfer><feFuncA type="linear" slope="0.15"/></feComponentTransfer>
                        <feMerge>
                        <feMergeNode/>
                        <feMergeNode in="SourceGraphic"/>
                      </feMerge>
                    </filter>
  
                    </defs>
                    <g filter="url(#Filter_0)">
                    <path fill-rule="evenodd"  fill="rgb(31, 31, 34)"
                     d="M359.506,400.811 C311.350,416.741 266.303,427.200 215.885,416.924 C166.065,406.770 119.155,382.030 83.358,345.883 C32.880,294.910 5.320,222.074 9.403,150.433 C11.889,106.817 27.202,61.676 61.083,34.027 C101.026,1.428 158.043,-0.486 208.701,8.960 C259.358,18.407 308.226,37.556 359.592,41.763 C414.001,46.218 473.787,34.861 519.488,64.652 C532.722,73.279 543.780,84.912 553.231,97.563 C563.583,111.419 572.219,126.797 576.587,143.532 C584.814,175.056 577.226,208.904 563.417,238.444 C538.267,292.240 493.162,335.144 441.630,364.721 C415.638,379.639 387.934,391.407 359.506,400.811 Z"/>
                    </g>
                  </svg>
                </div><!-- .st-svg-animation1 -->
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- End Contact Section -->
  
      <!-- Start Map Section -->
      <div class="st-map-wrap">
        <div class="st-map-bar st-flex">
          <div class="st-map-bar-img">
            <img src="img/light-img/map-icon-img.png" alt="demo">
            <div class="st-map-bar-icon"><i class="fas fa-map-marker-alt"></i></div>
          </div>
        </div>
        <div class="st-map-wrpa">
          <div class="st-google-map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d96652.27317354927!2d-74.33557928194516!3d40.79756494697628!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c3a82f1352d0dd%3A0x81d4f72c4435aab5!2sTroy+Meadows+Wetlands!5e0!3m2!1sen!2sbd!4v1563075599994!5m2!1sen!2sbd" allowfullscreen></iframe>
          </div>
        </div>
      </div>
      <!-- End Map Section -->
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
$(document).ready(function(){

//Toggle Class to change border on label, and add class to body
$("#check").change(function(){
    if($(this).is(":checked")) {
        $(".slider").addClass("isChecked");
        $("body").addClass("st-black-version");
        $(".cloud").css("opacity",".5");
    } else {

        $(".slider").removeClass("isChecked");
        $("body").removeClass("st-black-version");
        $(".cloud").css("opacity","0");
    }
});

});
</script>
</body>
</html>
