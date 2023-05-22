<!DOCTYPE html>
<html class="no-js" lang="en">
<head>

<style>
 .float{
	position:fixed;
	width:60px;
	height:60px;
	bottom:40px;
	right:40px;
	background-color:#25d366;
	color:#FFF;
	border-radius:50px;
	text-align:center;
  font-size:30px;
	box-shadow: 2px 2px 3px #999;
  z-index:100;
}

.my-float{
	margin-top:16px;
}
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
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightcase/2.5.0/css/lightcase.css" integrity="sha512-UbNEgpFIqGkAbyvxoLpFgpnH+k/Y4ncOlcppPzxU7UGz9Zars4RAYdxrhLe48gd7wBVADz9vPiQawb11aK69Sw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
  <body>

    <a href="https://api.whatsapp.com/send?phone=550880798" class="float" target="_blank">
      <i class="fa fa-whatsapp my-float"></i>
      </a>

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
                  <li><a href="{{route('index.gallary')}}" class="smooth-scroll">{{ __('index.gallary') }}</a></li>
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

    <div class="st-content mb-3" >
        <section class="st-pricing-wrap st-section" id="price">

    <div class="container">
        <h1 class="mt-5 text-center"><i class="fa fa-home" aria-hidden="true"></i> نظام التحول التقني العقاري</h1>

        <p class="text-center mb-3">
            التحول التقني ل جميع اعمال وعقارات مكتبك او شركتك العقارية بشكل إحترافي وسهل.
 إرفع إمكانية وصول العملاء إليك وخدمتهم بشكل أسرع وأفضل
<br>
 الان يمكنك عرض منتجاتك العقارية والتسويق لها في جميع أنحاء المملكة والعالم ! 

        </p>

        <ul class="text-right" dir="rtl">
            <li>نظام البحث المطور لتوجيه العميل إلى عقاره المناسب</li>
            <li>ربط بكسلات التواصل الإجتماعي لتحسين جودة الاعلانات والتسويق لوصول أسهل وأعلى لمنتجاتك من العملاء</li>
            <li>دعم نظام SEO لأفضل نتائج البحث في جميع محركات البحث وتصدر الموقع في ترتيب قوقل</li>
            <li>رفع العقارات وعرضها للعملاء بشكل إحترافي وواضح لتسهيل عملية حسم قرار الشراء للعميل</li>
            <li>سهولة الوصول للعملاء, يُسهل النظام وصول العملاء الى جميع منتجات الشركة العقارية بشكل سريع</li>
            <li>عرض خدمات ومميزات الشركة العقارية</li>
            <li>خصائص ادارية متكاملة لادارة جميع العقارات والطلبات والوصول للعميل والتواصل معه</li>
            <li>نظام طلب العقار المباشر</li>
            <li>نظام خدمات التسويق العقاري</li>
            <li>نظام التمويل العقاري</li>
            <li>نظام رفع العقارات إكسل (لتسهيل التحول التقني وعرض جميع العقارات للعملاء بشكل سريع)</li>
            <li>نظام المدونة العقارية (رفع وكتابة المدونات للتسويق للشركة وعرض اخر اخبارها)</li>
            <li>ربط النظام بجميع منصات التواصل الإجتماعي لتحسين وصول الحملات التسويقية ورفع كفاءة فريق التسويق العقاري</li>
            <li>واجهة سهلة الاستخدام, من السهل تحميل وإدارة قوائم العقارات</li>
            <li>نظام مناسب لإنشاء حملات تسويقية مخصصة</li>
            <li>نظام التوصيات وشركاء النجاح</li>
            <li>التواصل مع المشترين بشكل أسرع من أي وقت مضى</li>
          </ul>
                    

          <section class="st-team-wrap st-section" id="team">
            <div class="container">
            <div class="st-owl-controler3-hover">
              <div class="container">
                <div class="st-member-carousel owl-carousel st-style2 st-owl-controler3 owl-loaded owl-drag">
                  
                  <div class="owl-stage-outer">
                    <div class="owl-stage" style="transform: translate3d(-960px, 0px, 0px); transition: all 0s ease 0s; width: 3200px;">
                                            
                            
                    @for($i = 1; $i <= 8; $i++)

                    <div class="owl-item cloned" style="width: 290px; margin-right: 30px;">
                      <div class="st-team-member text-center wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.25s" style="visibility: visible; animation-duration: 0.8s; animation-delay: 0.25s; animation-name: fadeInUp;">
                      <div class="st-member-img">
                        <a class="m-1" href="{{asset("images/realestate/r$i.png")}}" data-rel="lightcase:my-slideshow">
                        <img class="img-thumbnail" src="{{asset("images/realestate/r$i.png")}}" alt="ikmal">
                        </a>

                      </div>
                    </div></div>
                    @endfor

                    
      </div></div>
            
                
      
               
      
               
                <div class="owl-nav"><button type="button" role="presentation" class="owl-prev"><i class="flaticon-left"></i></button><button type="button" role="presentation" class="owl-next"><i class="flaticon-right"></i></button></div><div class="owl-dots"><button role="button" class="owl-dot active"><span></span></button><button role="button" class="owl-dot"><span></span></button></div>
              </div>
              </div>
            </div>
          </section>
      



    </div>
        </section>
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
          <div class="st-copyright-text">© Puzzle , 2023</div>
      </div>
    </footer>
    <!-- End Footer Seciton -->
    <!-- Scripts -->

    <script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
    <script type="text/javascript" src="{{ asset('/js/main.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/js/wow.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/js/tamjid-counter.min.js') }}"></script>
    <script type="text/javascript"  src="{{ asset('/js/owlCarousel.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/js/mailchimp.min.js') }}"></script>
    <script  type="text/javascript" src="{{ asset('/js/vendor/jquery-1.12.4.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/js/vendor/modernizr-3.5.0.min.js') }}"></script>
  
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightcase/2.5.0/js/lightcase.min.js" integrity="sha512-i+A2/k3mB4TtIRp6fyk8Q+xzJqKusi0bvFgCIfDtdJT1tDEMqYvKo60q3bvp6LzGIeS6BahqN4AklwwxbdSaog==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script>
        $("a[data-rel^=lightcase]").lightcase();
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
        
        
        
        // SVGs
        $('#svgDribbble').load('https://s3-us-west-2.amazonaws.com/s.cdpn.io/373860/references.html #dribbble');
        $('#svgTwitter').load('https://s3-us-west-2.amazonaws.com/s.cdpn.io/373860/references.html #twitter');
        
        });
        
        
        </script>
        
</body>
</html>
