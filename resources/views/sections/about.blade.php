<div id="about" class="section wb">
    <div class="container">
       <div class="row">
          <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
             <div class="message-box">
                <h2>Biz haqimizda</h2>
                <h5>BIZ QURULISH SANOATIDA BIRINCHIMIZ!</h5>
             </div>
             <!-- end messagebox -->
          </div>
          <!-- end col -->
          <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
             <div class="message-box">
                <p class="lead">
                    Integer rutrum ligula eu dignissim laoreet.
                    Pellentesque venenatis nibh sed tellus faucibus bibendum.
                    Sed fermentum est vitae rhoncus molestie. Cum sociis natoque
                    penatibus et magnis dis parturient montes, nascetur ridiculus mus.
                    Sed vitae rutrum neque. Ut id erat sit amet libero bibendum aliquam.
                    Donec ac egestas libero, eu bibendum risus. Phasellus et congue justo.
                </p>
                {{-- <a href="#" class="read-more">Read More</a> --}}
             </div>
             <!-- end messagebox -->
          </div>
          <!-- end col -->
       </div>
       <!-- end row -->
       <div class="row text-center about-row">
           @foreach ($abouts as $about )
        <div class="col-md-4 col-sm-12 col-xs-12">
            <div class="row">
               <div class="service-widget">
                  <div class="post-media wow fadeIn">
                     <a href="{{voyager::image($about->images)}}" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i class="flaticon-unlink"></i></a>
                     <img src="{{voyager::image($about->images)}}" alt="" class="img-responsive img-rounded">
                  </div>
                  <h3>{{$about->title}}</h3>
                  <p> {{$about->description}}</p>
               </div>
               <!-- end service -->
            </div>
         </div>
         @endforeach
       </div>
       <!-- end row -->
    </div>
    <!-- end container -->
    <div class="sep1"></div>
 </div>
 <!-- end section -->
