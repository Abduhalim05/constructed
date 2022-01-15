<div id="services" class="parallax section db parallax-off no-padding-bottom"  >
    <div class="container">
       <div class="row">
          <div class="col-lg-5 col-md-6 col-sm-12 col-xs-12">
             <div class="message-box">
                <h2>Services</h2>
                <h5>WE ARE THE LEADERS IN THE CONSTRUCTION INDUSTRY!</h5>
             </div>
             <!-- end messagebox -->
          </div>
          <div class="col-lg-7 col-md-6 col-sm-12 col-xs-12">
             <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="service-inform">
                       <div class="icon-service">
                          <img src="images/icon1.png" alt="#" />
                       </div>
                       <div class="service-inform-text">
                          <h3>Service One</h3>
                          <p>Contrary to popular belief, Lorem Ipsum is not simply random text.</p>
                       </div>
                    </div>
                 </div>
                 <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="service-inform">
                       <div class="icon-service">
                          <img src="images/icon4.png" alt="#" />
                       </div>
                       <div class="service-inform-text">
                          <h3>Service Two</h3>
                          <p>Contrary to popular belief, Lorem Ipsum is not simply random text.</p>
                       </div>
                    </div>
                 </div>
                {{-- <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                   <div class="service-inform">
                      <div class="icon-service">
                         <img src="images/icon1.png" alt="#" />
                      </div>
                      <div class="service-inform-text">
                         <h3>Service One</h3>
                         <p>Contrary to popular belief, Lorem Ipsum is not simply random text.</p>
                      </div>
                   </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                   <div class="service-inform">
                      <div class="icon-service">
                         <img src="images/icon4.png" alt="#" />
                      </div>
                      <div class="service-inform-text">
                         <h3>Service Two</h3>
                         <p>Contrary to popular belief, Lorem Ipsum is not simply random text.</p>
                      </div>
                   </div>
                </div> --}}
             </div>
          </div>
       </div>
    </div>
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
       <div class="row">
           @foreach($services_3 as $service)
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 serv" style="background-color:#222;">
                <div class="serv-blog">
                <img src="{{voyager::image($service->image)}}" alt="#" />
                </div>
                <div class="serv-blog-cont">
                <h3>{{ $service->title }}</h3>
                <p> {{ $service->description }}</p>
                </div>
            </div>
            @endforeach
          {{-- <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 serv" style="background-color:#222;">
             <div class="serv-blog">
                <img src="images/sr1.png" alt="#" />
             </div>
             <div class="serv-blog-cont">
                <h3>Manufacturing</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.</p>
             </div>
          </div>
          <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 serv" style="background:#181818;">
             <div class="serv-blog">
                <img src="images/sr2.png" alt="#" />
             </div>
             <div class="serv-blog-cont">
                <h3>Fabrication</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.</p>
             </div>
          </div>
          <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 serv" style="background:#222;">
             <div class="serv-blog">
                <img src="images/sr3.png" alt="#" />
             </div>
             <div class="serv-blog-cont">
                <h3>Construction</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.</p>
             </div>
          </div> --}}
       </div>
    </div>
 </div>
 <!-- end section -->
