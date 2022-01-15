<div id="contact" class="section wb">
    <div class="container">
       <div class="section-title row text-center">
          <div class="col-md-8 col-md-offset-2">
             <h3>Bizga bog`laning</h3>
             <p class="lead">Quyida bizning bog'lanishligingiz uchun keltirilgan ma'lumotlar:</p>
          </div>
          <!-- end col -->
       </div>
       <!-- end title -->
       <div class="row">
          <div class="col-lg-4 col-md-4">
             <div class="contant-info">
                <ul class="item-display-block">
                   <li>
                      <div class="info-shape accent-color background fs-23">
                        <div class="icon"><i class="fa fa-home"></i></div>
                     </div>
                      <div class="info-content">
                         <h6 class="uppercase"> Manzil:</h6>
                         <p>{{$contacts->address}}</p>
                      </div>
                   </li>
                   <li>
                      <div class="info-shape accent-color background fs-23">
                         <div class="icon"><i class="fa fa-volume-control-phone"></i></div>
                      </div>
                      <div class="info-content">
                         <h6 class="uppercase"> Telefon raqam:</h6>
                         <p> {{$contacts->phone}} </p>
                      </div>
                   </li>
                   <li>
                      <div class="info-shape accent-color background fs-23">
                         <div class="icon"><i class="fa fa-envelope-o"></i></div>
                      </div>
                      <div class="info-content">
                         <h6 class="uppercase"> Email (pochta-manzil):</h6>
                         <p>{{$contacts->email}}</p>
                      </div>
                   </li>
                </ul>
             </div>
          </div>
          <div class="col-md-8">
             <div class="contact_form">
                <div id="message"></div>
                <form  class="row" action="/contact" name="contactform" method="post">
                    {{-- @method('POST') --}}
                    @csrf
                   <fieldset class="row-fluid">
                      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                         <input type="text" name="name" id="first_name" class="form-control" placeholder="Ismingiz..." required>
                      </div>

                      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                         <input type="email" name="email" id="email" class="form-control" placeholder="E-pochtangiz... (Email)" required>
                      </div>

                      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                         <input type="text" name="phone" id="last_name" class="form-control" placeholder="Telefon raqamingiz..." required>
                      </div>


                      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                         <textarea class="form-control" name="message" id="comments" rows="6" placeholder="Xabaringizni qoldiring..." required></textarea>
                      </div>
                      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                          <button type="submit" value="SEND"  class="btn btn-light btn-radius btn-brd grd1 btn-block">Yuborish</button>
                        {{-- <input type="submit" name="submit" class="btn btn-light btn-radius btn-brd grd1 btn-block" value="Yuborish"> --}}
                        </div>

                   </fieldset>
                </form>
             </div>
          </div>
          <!-- end col -->
       </div>
       <!-- end row -->
    </div>
    <!-- end container -->
 </div>
 <!-- end section -->
