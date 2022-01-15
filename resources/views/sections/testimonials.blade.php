<div id="testimonials" class="section db">
    <div class="container">
       <div class="section-title row text-center">
          <div class="col-md-8 col-md-offset-2">
             <h3>Mijozlar fikri</h3>
             <p class="lead">Biz xizmat ko'rsatgan mijozlarning biz haqimizda qoldirgan fikrlari</p>
          </div>
          <!-- end col -->
       </div>
       <!-- end title -->
       <div class="row">
          <div class="col-md-12 col-sm-12">
             <div class="testi-carousel owl-carousel owl-theme">
                @foreach ($messages as $message )
                    <div class="testimonial clearfix">
                    <div class="desc">
                        {{-- <h3><i class="fa fa-quote-left"></i>Wonderful Support!</h3> --}}
                        <p class="lead">{{$message->message}}</p>
                    </div>
                    <div class="testi-meta">
                        
                        <h4>{{$message->name}} </h4>
                    </div>
                    <!-- end testi-meta -->
                    </div>
                @endforeach
                {{-- <!-- end testimonial -->
                <div class="testimonial clearfix">
                   <div class="desc">
                      <h3><i class="fa fa-quote-left"></i> Awesome Services!</h3>
                      <p class="lead">Explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you completed.</p>
                   </div>
                   <div class="testi-meta">
                      <img src="uploads/testi_02.png" alt="" class="img-responsive alignleft">
                      <h4>Jacques Philips <small>- Designer</small></h4>
                   </div>
                   <!-- end testi-meta -->
                </div>
                <!-- end testimonial -->
                <div class="testimonial clearfix">
                   <div class="desc">
                      <h3><i class="fa fa-quote-left"></i> Great & Talented Team!</h3>
                      <p class="lead">The master-builder of human happines no one rejects, dislikes avoids pleasure itself, because it is very pursue pleasure. </p>
                   </div>
                   <div class="testi-meta">
                      <img src="uploads/testi_03.png" alt="" class="img-responsive alignleft">
                      <h4>Venanda Mercy <small>- Newyork City</small></h4>
                   </div>
                   <!-- end testi-meta -->
                </div>
                <!-- end testimonial -->
                <div class="testimonial clearfix">
                   <div class="desc">
                      <h3><i class="fa fa-quote-left"></i> Wonderful Support!</h3>
                      <p class="lead">They have got my project on time with the competition with a sed highly skilled, and experienced & professional team.</p>
                   </div>
                   <div class="testi-meta">
                      <img src="uploads/testi_01.png" alt="" class="img-responsive alignleft">
                      <h4>James Fernando <small>- Manager of Racer</small></h4>
                   </div>
                   <!-- end testi-meta -->
                </div>
                <!-- end testimonial -->
                <div class="testimonial clearfix">
                   <div class="desc">
                      <h3><i class="fa fa-quote-left"></i> Awesome Services!</h3>
                      <p class="lead">Explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you completed.</p>
                   </div>
                   <div class="testi-meta">
                      <img src="uploads/testi_02.png" alt="" class="img-responsive alignleft">
                      <h4>Jacques Philips <small>- Designer</small></h4>
                   </div>
                   <!-- end testi-meta -->
                </div>
                <!-- end testimonial -->
                <div class="testimonial clearfix">
                   <div class="desc">
                      <h3><i class="fa fa-quote-left"></i> Great & Talented Team!</h3>
                      <p class="lead">The master-builder of human happines no one rejects, dislikes avoids pleasure itself, because it is very pursue pleasure. </p>
                   </div>
                   <div class="testi-meta">
                      <img src="uploads/testi_03.png" alt="" class="img-responsive alignleft">
                      <h4>Venanda Mercy <small>- Newyork City</small></h4>
                   </div>
                   <!-- end testi-meta -->
                </div> --}}
                <!-- end testimonial -->
             </div>
             <!-- end carousel -->
          </div>
          <!-- end col -->
       </div>
       <!-- end row -->
    </div>
    <!-- end container -->
 </div>
 <!-- end section -->
