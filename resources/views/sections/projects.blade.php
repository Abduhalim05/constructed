<div id="projects" class="section">
    <div class="container">
       <div class="row">
          <div class="col-lg-5 col-md-6 col-sm-12 col-xs-12">
             <div class="message-box">
                <h2>Bizning Loyihalar</h2>
                <h5>Loyihalarimizdan namunalar:</h5>
             </div>
             <!-- end messagebox -->
          </div>
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
              <div class="row">
                  <div class="container gal-container">
                      @foreach ( $projects as $project )
                   <div @if ($loop->iteration==1 || $loop->iteration==7)
                     class="col-md-8 col-sm-12 co-xs-12 gal-item"
                   @else
                    class="col-md-4 col-sm-6 co-xs-12 gal-item"
                   @endif >
                      <div class="box">
                         <a href="#" data-toggle="modal" data-target="#{{ $loop->index}}">
                         <img src="{{voyager::image($project->images)}}" alt="#" />
                         </a>
                         <div class="modal fade" id="{{ $loop->index}}" tabindex="-1" role="dialog">
                            <div class="modal-dialog" role="document">
                               <div class="modal-content">
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                  <div class="modal-body">
                                     <img src="{{voyager::image($project->images)}}" alt="#" />
                                  </div>
                                  <div class="col-md-12 description">
                                     <h4>This is the first one on my Gallery</h4>
                                  </div>
                               </div>
                            </div>
                         </div>
                      </div>
                   </div>
                   @endforeach

                </div>
             </div>
          </div>
       </div>
    </div>
 </div>
 <!-- end section -->
