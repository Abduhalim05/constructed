<!DOCTYPE html>
<html lang="en">
   <!-- Basic -->
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <!-- Mobile Metas -->
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <meta name="viewport" content="initial-scale=1, maximum-scale=1">
   <!-- Site Metas -->
   <title>Bosh sahifa</title>
   <meta name="keywords" content="">
   <meta name="description" content="">
   <meta name="author" content="">
   <!-- Site Icons -->
   <link rel="shortcut icon" href="/images/fevicon.ico.png" type="image/x-icon" />
   <!-- Bootstrap CSS -->
   <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
   <!-- Site CSS -->
   <link rel="stylesheet" href="style.css">
   <!-- Colors CSS -->
   <link rel="stylesheet" href="{{ asset('css/colors.css') }}">
   <!-- ALL VERSION CSS -->
   <link rel="stylesheet" href="{{ asset('css/versions.css') }}">
   <!-- Responsive CSS -->
   <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
   <!-- building CSS -->
   <link rel="stylesheet" href="{{ asset('css/building.css') }}">
   </head>
   <body class="building_version" data-spy="scroll" data-target=".header">
      <!-- LOADER -->
      <div id="preloader">
         <img class="preloader" src="/images/loaders/loader-building2.gif" alt="">
      </div>
      <!-- end loader -->
      <!-- END LOADER -->
      <header class="header header_style_01">
         <nav class="megamenu navbar navbar-default" data-spy="affix">
            <div class="top-header">
               <div class="container">
                  <div class="row">
                     <div class="col-lg-12 col-md-12 col-sm-12 col-xs-hidden">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-hidden">
                           <div class="gem-contacts-item gem-contacts-phone">
                              <a class="phone-icon" href="tel:{{$contacts->phone}}}" target="_blank" title="phone"><i class="fa fa-phone" aria-hidden="true"></i>{{$contacts->phone}}</a>
                           </div>
                        </div>
                        {{-- <div class="top-area-block top-area-socials socials-colored-hover">
                           <div class="socials inline-inside">
                              <a class="socials-item" href="#" target="_blank" title="facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                              <a class="socials-item" href="#" target="_blank" title="linkedin"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                              <a class="socials-item" href="#" target="_blank" title="twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                              <a class="socials-item" href="#" target="_blank" title="instagram"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                              <a class="socials-item" href="#" target="_blank" title="pinterest"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
                              <a class="socials-item" href="#" target="_blank" title="youtube"><i class="fa fa-youtube" aria-hidden="true"></i></a>
                           </div>
                        </div> --}}
                     </div>
                  </div>
               </div>
            </div>
            <div class="container">
               <div class="navbar-header">
                  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  </button>
                  <a class="navbar-brand" href="/"><img src="images/logo-icon.png" alt="image"><span>Yuksak Obod</span></a>
               </div>
               <div id="navbar" class="navbar-collapse collapse">
                  {{ menu('constructed', 'layouts.menu') }}
               </div>
            </div>
         </nav>
      </header>

      @yield('content')


      {{-- end content --}}

 <!-- footer -->
 <footer id="footer">
    <div id="footer-widgets" class="container style-1">
       <div class="row">
          <div class="col-md-4">
             <div class="widget widget_text">
                <h2 class="widget-title"><span>Biz haqimizda</span></h2>
                <div class="textwidget">
                   <a class="navbar-brand" href="/"><img src="images/logo-icon.png" alt="image"><span>Yuksak Obod</span></a>
                   <p>Aenean suscipit eget mi act fermentum phasellus vulputate turpis tincidunt. Aenean suscipit eget. Aenean suscipit eget mi act fermentum phasellus vulputate turpis tincidunt. Aenean suscipit ege  Aenean suscipit eget mi act fermentum phasellus.</p>
                </div>
             </div>
          </div>
          <div class="col-md-4">
             <div class="widget widget_links">
                <h2 class="widget-title"><span>Korxona Tarmoqlari</span></h2>
                <ul class="wprt-links clearfix col2">
                   <li><a data-scroll="" href="#home">Asosiy</a></li>
                   <li><a data-scroll="" href="#about">Biz haqimizda</a></li>
                   <li><a data-scroll="" href="#services">Xizmatlar</a></li>
                   <li><a data-scroll="" href="#projects">Loyihalarimiz</a></li>
                   <li><a data-scroll="" href="#testimonials">Xabarlar</a></li>

                   <li><a data-scroll="" href="#contact">Biz bilan bog`laning</a></li>
                </ul>
             </div>
          </div>
          <div class="col-md-4">
             <div class="widget widget_information">
                <h2 class="widget-title"><span>Biz bilan bog`laning</span></h2>
                <ul>
                   <li class="address clearfix">
                      <span class="hl">Manzil: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;  </span>
                      <span class="text">{{$contacts->address}}</span>
                   </li>
                   <li class="phone clearfix">
                      <span class="hl">Telefon:&nbsp;&nbsp;&nbsp;</span>
                      <span class="text">&nbsp;&nbsp;&nbsp;&nbsp;{{$contacts->phone}}</span>
                   </li>
                   <li class="email clearfix">
                      <span class="hl">E-mail:</span>
                      <span class="text">&nbsp;&nbsp;{{$contacts->email}}</span>
                   </li>
                </ul>
             </div>
             {{-- <div class="widget widget_socials">
                <div class="socials">
                   <a target="_blank" href="#"><i class="fa fa-twitter"></i></a>
                   <a target="_blank" href="#"><i class="fa fa-facebook"></i></a>
                   <a target="_blank" href="#"><i class="fa fa-google-plus"></i></a>
                   <a target="_blank" href="#"><i class="fa fa-pinterest"></i></a>
                   <a target="_blank" href="#"><i class="fa fa-dribbble"></i></a>
                </div>
             </div> --}}
          </div>
       </div>
    </div>
    {{-- <div id="bottom" class="clearfix style-1">
       <div class="container">
          <div id="bottom-bar-inner" class="wprt-container">
             <div class="bottom-bar-inner-wrap">
                <div class="bottom-bar-content">
                   <div id="copyright">All Rights Reserved</div>
                   <!-- /#copyright -->
                </div>
                <!-- /.bottom-bar-content -->
                <div class="bottom-bar-menu pull-right">
                   <ul class="bottom-nav">
                      <li><a href="#/">HISTORY</a></li>
                      <li><a href="#/">FAQ</a></li>
                      <li><a href="#/">EVENTS</a></li>
                   </ul>
                </div>
                <!-- /.bottom-bar-menu -->
             </div>
          </div>
       </div>
    </div> --}}
 </footer>
 <!-- end footer -->
 <a href="#home" data-scroll class="dmtop global-radius"><i class="fa fa-angle-up"></i></a>
 <!-- ALL JS FILES -->
 <script src="/js/all.js"></script>
 <!-- ALL PLUGINS -->
 <script src="/js/custom.js"></script>
 <script src="/js/portfolio.js"></script>
 <script src="/js/hoverdir.js"></script>
 {{-- <script src="/js/jquery.js"></script> --}}
 <script >
     $('.menu_link').click(function(){

         $(this).parent().addClass('active');
         $(this).parent().siblings().removeClass('active');
     })
 </script>
</body>
</html>
