<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
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

  <script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
  <script type="text/javascript" src="{{ asset('/js/main.js') }}"></script>
  <script type="text/javascript" src="{{ asset('/js/wow.min.js') }}"></script>
  <script type="text/javascript" src="{{ asset('/js/tamjid-counter.min.js') }}"></script>
  <script type="text/javascript"  src="{{ asset('/js/owlCarousel.min.js') }}"></script>
  <script type="text/javascript" src="{{ asset('/js/mailchimp.min.js') }}"></script>
  <script  type="text/javascript" src="{{ asset('/js/vendor/jquery-1.12.4.min.js') }}"></script>
  <script type="text/javascript" src="{{ asset('/js/vendor/modernizr-3.5.0.min.js') }}"></script>

  <body class="st-black-version rtl">
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
              <a href="#" class="st-logo-link"><img src="img/dark-img/logo.png" alt="demo"></a>
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
                  <li><a href="#Home" class="smooth-scroll">{{ __('index.Home') }}</a></li>
                  <li><a href="#about" class="smooth-scroll">{{ __('index.About') }}</a></li>
                  <li><a href="#service" class="smooth-scroll">{{ __('index.Service') }}</a></li>
                  <li><a href="#portfolio" class="smooth-scroll">{{ __('index.Portfolio') }}</a></li>
                  <li><a href="#contact" class="smooth-scroll">تواصل معنا</a></li>
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
                <h3 class="st-iconbox-title">إنطلاقة مواكبة</h3>
                <div class="st-iconbox-text">
                  نبتكر الحلول البرمجية لكي نمكن شركاءنا في زيادة إنتاجيتهم وكفاءاتهم، سعيًا منا لمواكبة التطور التكنولوجي في هذا العصر، وموافقةً مع استراتيجية ورؤية المملكة في التحول الرقمي والابتكار.
                </div>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="st-iconbox st-style1 text-center wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.3s">
                <div class="st-iconbox-icon">
                  <i class="flaticon-career"></i>
                </div>
                <h3 class="st-iconbox-title">المنافسة والريادة</h3>
                <div class="st-iconbox-text">
                  نخوض كل مشروع جديد وكأنه تحدي مع النفس، لنشجع أنفسنا على تقديم الأفضل والأفضل
                </div>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="st-iconbox st-style1 text-center wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.4s">
                <div class="st-iconbox-icon">
                  <i class="flaticon-career-1"></i>
                </div>
                <h3 class="st-iconbox-title">الشراكة الإستراتيجية</h3>
                <div class="st-iconbox-text">
                  نهدف إلى أن نكون الشريك المفضل في مجالات تقنية المعلومات والابتكار وفي تطبيق التحول الرقمي
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
                <h3>من نحن</h3>
                <h2>فــريــق تــقــنــي مـن الـكـفـاءات الـعـالـيـة مـخـتــصــون فــي
                  الــبــرمـجـة والـتـصـمـيـم نــقــدم مـجـمـوعـة مـن الـخـدمـات
                  الـتـقـنـيـة الـتـي تـجـعـل مـشـروعـك أكـثـر إكـتـمـاًال وفعالية</h2>
              </div>
              <div class="st-about-text">
                <p>نـسعـى في بـزل لتـقنيـة المعلومـات لإلرتقـاء بمستـوى
                  المشاريع التقنية وغيرها من خالل الخدمات التي نقدمها</p>
                <ul class="tr-list">
                  <li>برمجة وتطوير تطبيقات الجوال</li>
                  <li>برمجة وتصميم مواقع الويب</li>
                  <li>موشن جرافيك</li>
                  <li>صنع الهويات البصرية</li>
                </ul>
                <a href="#" class="st-btn st-style1 st-size1 st-color2">اطلب الخدمات الآن</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- End About Section -->
  
      {{-- <!-- Start Service Section -->
      <section class="st-service-section st-section-top" id="service">
        <div class="container">
          <div class="st-section-heading st-style2 text-center">
            <h2>Business Services</h2>
            <div class="st-seperator">
              <div class="st-seperator-left-bar wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.2s"></div>
              <img src="img/dark-img/seperator-icon.png" alt="demo" class="st-seperator-icon">
              <div class="st-seperator-right-bar wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.2s"></div>
            </div>
            <p>Business services are activities that combine or consolidate certain <br>enterprise-wide needed support services</p>
          </div>
        </div>
        <div class="st-owl-controler3-hover">
          <div class="container">
            <div class="st-service-carousel owl-carousel st-style2 st-owl-controler3">
              <div class="st-image-box st-style1 text-center wow fadeIn" data-wow-duration="0.8s" data-wow-delay="0.2s">
                <a href="#" class="st-image"><img src="img/light-img/service1.png" alt="demo"></a>
                <div class="st-image-box-info">
                  <h3 class="st-image-box-title"><a href="#">Business Meeting</a></h3>
                  <div class="st-image-box-text">A meeting is when two or more people come together to discuss one or more topics often in a formal or business</div>
                </div>
              </div>
              <div class="st-image-box st-style1 text-center wow fadeIn" data-wow-duration="0.8s" data-wow-delay="0.25s">
                <a href="#" class="st-image"><img src="img/light-img/service2.png" alt="demo"></a>
                <div class="st-image-box-info">
                  <h3 class="st-image-box-title"><a href="#">Business Analysis</a></h3>
                  <div class="st-image-box-text">Business analysis is a research discipline of identifying business needs and determining solutions to business.</div>
                </div>
              </div>
              <div class="st-image-box st-style1 text-center wow fadeIn" data-wow-duration="0.8s" data-wow-delay="0.3s">
                <a href="#" class="st-image"><img src="img/light-img/service3.png" alt="demo"></a>
                <div class="st-image-box-info">
                  <h3 class="st-image-box-title"><a href="#">Business Grow</a></h3>
                  <div class="st-image-box-text">Market penetration is the key for a business growth. Business development processes to develop and implement growth.</div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="st-service-background-shap">
          <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="858px" height="924px">
            <path fill-rule="evenodd"  opacity="0.4" fill="rgb(31, 31, 34)"
             d="M664.747,103.039 C653.462,87.314 639.932,72.487 623.957,58.931 C548.874,-4.793 440.575,-17.454 354.139,28.436 C295.555,59.540 256.035,109.725 237.462,166.269 C210.450,248.522 169.585,324.882 114.434,391.411 C-3.108,533.202 -36.669,703.629 44.624,816.957 C149.756,963.519 407.069,959.014 619.349,806.896 C831.627,654.780 918.489,412.653 813.356,266.091 C804.112,253.203 793.682,241.497 782.210,230.960 C739.413,191.657 698.632,150.252 664.747,103.039 Z"/>
          </svg>
        </div>
      </section>
      <!-- End Service Section --> --}}
  
      {{-- <!-- Start Fun Fact Section -->
      <div class="st-funfact-wrap st-section-top">
        <div class="container">
          <div class="row">
            <div class="col-lg-3 col-sm-6">
              <div class="st-funfact text-center wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.2s">
                <div class="st-funfact-icon"><i class="flaticon-rate"></i></div>
                <h2 class="st-funfact-number st-counter">999</h2>
                <h3 class="st-funfact-title">Satisfied customers</h3>
              </div>
            </div>
            <div class="col-lg-3 col-sm-6">
              <div class="st-funfact text-center wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.25s">
                <div class="st-funfact-icon"><i class="flaticon-code"></i></div>
                <h2 class="st-funfact-number st-counter">185</h2>
                <h3 class="st-funfact-title">Built websites</h3>
              </div>
            </div>
            <div class="col-lg-3 col-sm-6">
              <div class="st-funfact text-center wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.3s">
                <div class="st-funfact-icon"><i class="flaticon-laptop"></i></div>
                <h2 class="st-funfact-number st-counter">100</h2>
                <h3 class="st-funfact-title">Experts Worker</h3>
              </div>
            </div>
            <div class="col-lg-3 col-sm-6">
              <div class="st-funfact text-center wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.35s">
                <div class="st-funfact-icon"><i class="flaticon-win"></i></div>
                <h2 class="st-funfact-number st-counter">200</h2>
                <h3 class="st-funfact-title">Experience Years</h3>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- End Fun Fact Section --> --}}
  
      <!-- Start Project Section -->
      {{-- <div class="st-project-wrap st-section-top" id="portfolio">
        <div class="container">
          <div class="st-section-heading st-style2 text-center">
            <h2>Our Latest Project</h2>
            <div class="st-seperator">
              <div class="st-seperator-left-bar wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.2s"></div>
              <img src="img/dark-img/seperator-icon.png" alt="demo" class="st-seperator-icon">
              <div class="st-seperator-right-bar wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.2s"></div>
            </div>
            <p>This is a great place to tell people more about your services and peak <br>their interest. Last year our latest work album</p>
          </div>
        </div>
        <div class="st-project st-project-carousel owl-carousel st-style1 st-owl-controler1">
          <a href="#" class="st-single-project st-bg wow fadeIn" data-wow-duration="0.8s" data-wow-delay="0.2s" data-src="img/light-img/project1.jpg">
            <div class="st-project-meta">
              <h3>Project Title One</h3>
              <span>Branding</span>
            </div>
          </a>
          <a href="#" class="st-single-project st-bg wow fadeIn" data-wow-duration="0.8s" data-wow-delay="0.25s" data-src="img/light-img/project2.jpg">
            <div class="st-project-meta">
              <h3>Project Title One</h3>
              <span>Branding</span>
            </div>
          </a>
          <a href="#" class="st-single-project st-bg wow fadeIn" data-wow-duration="0.8s" data-wow-delay="0.3s" data-src="img/light-img/project3.jpg">
            <div class="st-project-meta">
              <h3>Project Title One</h3>
              <span>Branding</span>
            </div>
          </a>
          <a href="#" class="st-single-project st-bg wow fadeIn" data-wow-duration="0.8s" data-wow-delay="0.35s" data-src="img/light-img/project4.jpg">
            <div class="st-project-meta">
              <h3>Project Title One</h3>
              <span>Branding</span>
            </div>
          </a>
          <a href="#" class="st-single-project st-bg wow fadeIn" data-wow-duration="0.8s" data-wow-delay="0.2s" data-src="img/light-img/project1.jpg">
            <div class="st-project-meta">
              <h3>Project Title One</h3>
              <span>Branding</span>
            </div>
          </a>
          <a href="#" class="st-single-project st-bg wow fadeIn" data-wow-duration="0.8s" data-wow-delay="0.25s" data-src="img/light-img/project2.jpg">
            <div class="st-project-meta">
              <h3>Project Title One</h3>
              <span>Branding</span>
            </div>
          </a>
          <a href="#" class="st-single-project st-bg wow fadeIn" data-wow-duration="0.8s" data-wow-delay="0.3s" data-src="img/light-img/project3.jpg">
            <div class="st-project-meta">
              <h3>Project Title One</h3>
              <span>Branding</span>
            </div>
          </a>
          <a href="#" class="st-single-project st-bg wow fadeIn" data-wow-duration="0.8s" data-wow-delay="0.35s" data-src="img/light-img/project4.jpg">
            <div class="st-project-meta">
              <h3>Project Title One</h3>
              <span>Branding</span>
            </div>
          </a>
          <a href="#" class="st-single-project st-bg wow fadeIn" data-wow-duration="0.8s" data-wow-delay="0.2s" data-src="img/light-img/project1.jpg">
            <div class="st-project-meta">
              <h3>Project Title One</h3>
              <span>Branding</span>
            </div>
          </a>
          <a href="#" class="st-single-project st-bg wow fadeIn" data-wow-duration="0.8s" data-wow-delay="0.25s" data-src="img/light-img/project2.jpg">
            <div class="st-project-meta">
              <h3>Project Title One</h3>
              <span>Branding</span>
            </div>
          </a>
          <a href="#" class="st-single-project st-bg wow fadeIn" data-wow-duration="0.8s" data-wow-delay="0.3s" data-src="img/light-img/project3.jpg">
            <div class="st-project-meta">
              <h3>Project Title One</h3>
              <span>Branding</span>
            </div>
          </a>
          <a href="#" class="st-single-project st-bg wow fadeIn" data-wow-duration="0.8s" data-wow-delay="0.35s" data-src="img/light-img/project4.jpg">
            <div class="st-project-meta">
              <h3>Project Title One</h3>
              <span>Branding</span>
            </div>
          </a>
          <a href="#" class="st-single-project st-bg wow fadeIn" data-wow-duration="0.8s" data-wow-delay="0.2s" data-src="img/light-img/project1.jpg">
            <div class="st-project-meta">
              <h3>Project Title One</h3>
              <span>Branding</span>
            </div>
          </a>
          <a href="#" class="st-single-project st-bg wow fadeIn" data-wow-duration="0.8s" data-wow-delay="0.25s" data-src="img/light-img/project2.jpg">
            <div class="st-project-meta">
              <h3>Project Title One</h3>
              <span>Branding</span>
            </div>
          </a>
          <a href="#" class="st-single-project st-bg wow fadeIn" data-wow-duration="0.8s" data-wow-delay="0.3s" data-src="img/light-img/project3.jpg">
            <div class="st-project-meta">
              <h3>Project Title One</h3>
              <span>Branding</span>
            </div>
          </a>
          <a href="#" class="st-single-project st-bg wow fadeIn" data-wow-duration="0.8s" data-wow-delay="0.35s" data-src="img/light-img/project4.jpg">
            <div class="st-project-meta">
              <h3>Project Title One</h3>
              <span>Branding</span>
            </div>
          </a>
        </div>
      </div>
      <!-- End Project Section --> --}}
  
      <!-- Start CTA Section -->
      <section class="st-cta-wrap st-gray-bg">
        <div class="container">
          <div class="row">
            <div class="col-lg-7 offset-lg-1">
              <div class="st-cta text-center st-section">
                <h2 class="st-cta-title">هل تبحث عن شريك؟</h2>
                <div class="st-cta-text">بزل هو شريكك لإكمال قطعتك الناقصة</div>
                <div class="st-cta-btn">
                  <a href="mailto:test@test.com" class="st-btn st-style1 st-size1 st-color1">أبدع معنا الآن</a>
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
        
      
      <!-- Start Contact Section -->
      <section class="st-contact-wrap st-gray-bg st-section" id="contact">
        <div class="container">
          <div class="st-section-heading st-style2 text-center">
            <h2>تواصل معنا</h2>
            <div class="st-seperator">
              <div class="st-seperator-left-bar wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.2s"></div>
              <img src="img/dark-img/seperator-icon.png" alt="demo" class="st-seperator-icon">
              <div class="st-seperator-right-bar wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.2s"></div>
            </div>
            <p>
              نتطلع للشراكة معك،
              <br>
              ونسعد بتواصلك معنا
            </p>
          </div>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-lg-6">
              <div id="cf-msg"></div>
              <form action="#" method="post" class="st-contact-form" id="cf">
                <input type="text" placeholder="الاسم الكامل" id="name" name="name">
                <input type="text" placeholder="البريد الإلكتروني" id="email" name="email">
                <input type="text" placeholder="الموضوع" id="subject" name="subject">
                <textarea cols="30" rows="10" placeholder="الرسالة" id="msg" name="msg"></textarea>
                <button class="st-btn st-style1 st-size1 st-color1" type="submit" id="submit" name="submit">إرسال</button>
              </form>
            </div>
            <div class="col-lg-6">
              <div class="st-contact-info st-style1">
                <div class="st-contact-info-in">
                  <h3 class="st-contact-info-title">معلومات التواصل</h3>
                  <ul>
                    <li><i class="fas fa-map-signs"></i>111 Camino Del Rio Suite 300 San Diego</li>
                    <li><i class="fas fa-phone"></i>+00 222- 333 -7889</li>
                    <li><i class="fas fa-envelope"></i><a href="#">support@zambo.com</a></li>
                    <li><i class="fas fa-globe"></i><a href="#">www.zambo.com</a></li>
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
            <img src="img/dark-img/logo.png" alt="demo">
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
</body>
</html>
