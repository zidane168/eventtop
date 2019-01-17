
   @include ('header')

   <body class="fixed-bottom-space landing-theme" ng-app="">
      <!-- Load Facebook SDK for JavaScript -->
     
      

      @include ('menu')
      @include ('slidebar')    
     	  
      <div class="container explore-categories-bar-container">
         <div class="explore-categories-bar row">
            <div class="col-sm-5 dropdown eventpop-dropdown">
               <a class="dropdown-toggle text-center" data-toggle="dropdown" href="#" aria-expanded="false">
               EXPLORE EVENTS
               <i class="fa fa-fw fa-angle-down"></i>
               </a>
               <ul class="dropdown-menu">
                  <li class=""><a href="#">Trending Events</a></li>
                  <li class="divider"></li>
                  <li class=""><a href="#">Entertainment</a></li>
                  <li class=""><a href="#">Education</a></li>
                  <li class=""><a href="#">Sport</a></li>
                  <li class=""><a href="#">Activities</a></li>
               </ul>
            </div>
            <div class="col-sm-7 text-right text-xs-center hidden-xs">
               <b><a style="font-size: 20px; line-height: 60px; color:#ec0186; font-family: DBAiry-Std" href="">Need Help? Visit Customer Support</a></b>
            </div>
         </div>
      </div>
	  
      <div class="container">
         <div class="row transitions-enabled clearfix" id="content-blocks">
            <div class="col-xs-12 col-sm-6 content-block">
               <div class="content">
                  <div class="events-block recommended">
                     <div class="col-xs-12 header">
                        <a href="#">
                           <h1 class="title">Popular Right Now</h1>
                        </a>
                     </div>

                     @foreach ($events as $event) 
                     <div class="col-xs-6 items-collection">
                        <a href="#">
                           <img class="img-responsive" src="assest/img/{{$event->image}}" alt="{{$event->image}}" />
                           <div class="media-body">
                              <div class="event-title"> {{$event->name}} </div>
                              <div class="event-detail">

                             
                                 <div class="hidden-sm hidden-xs">{{ date('d F Y', strtotime($event->created_at)) }} |  {{ date('H:m', strtotime($event->created_at)) }} </div>
                                 <div class="hidden-md hidden-lg">{{ date('d M Y', strtotime($event->created_at)) }}</div>
                                 <div class="text-address"> {{$event->address}} </div>
                              </div>
                           </div>
                        </a>
                     </div>
                     @endforeach
                                      
                     <div class="col-xs-12 events-block-more text-center"><a href="#">See more</a></div>
                  </div>
               </div>
            </div>
			
            <div class="col-xs-12 col-sm-6 content-block">
               <div class="content">
                  <div class="events-block blog">
                     <div class="col-xs-12 header">
                        <a href="#">
                           <h1 class="title">Top Stories</h1>
                        </a>
                     </div>

                     <?php $index = 1 ?>
                     @foreach ($stories as $story) 

                        @if ($index == 1)

                           <div class=" col-xs-12 main">
                              <a href="{{$story->slug}}">
                                 <img class="img-responsive" src="assest/img/{{$story->image}}" alt="{{$story->image}}" />
                                 <div class="blog-detail">
                                    <div class="event-title">{{$story->name}}</div>
                                    <div class="published-date text-muted">{{ date('d F Y', strtotime($story->created_at)) }} |  {{ date('H:m', strtotime($story->created_at)) }}</div>
                                 </div>
                              </a>
                           </div>

                        @else

                           <div class=" col-xs-12 col-md-6">
                              <a href="{{$story->slug}}">
                                 <img class="img-responsive" src="assest/img/{{$story->image}}" alt="{{$story->image}}" />
                                 <div class="blog-detail">
                                    <div class="event-title">{{ $story->name }}</div>
                                    <div class="published-date text-muted">{{ date('d F Y', strtotime($story->created_at)) }} |  {{ date('H:m', strtotime($story->created_at)) }} </div>
                                 </div>
                              </a>
                           </div>

                        @endif

                        <?php $index = $index + 1; ?>
                     @endforeach

                  
					 
                     <div class="col-xs-12 events-block-more text-center"><a href="#">View All Stories</a></div>
                  </div>
               </div>
            </div>
			
            <!--
            <div class="col-xs-12 col-sm-6 content-block">
               <div class="content">
                  <a class="text-center" href="#">
                  <img class="img-responsive cover poster" src="" alt="Cover facebook" />
                  </a>
               </div>
            </div>
            -->

            <div class="col-xs-12 col-sm-6 content-block">
               <div class="content">
                  <div class="events-block recommended">
                     <div class="col-xs-12 header">
                        <h1 class="title">Recommended Events</h1>
                     </div>



                  

                     @foreach ($events as $event) 
                        <div class="col-xs-6 items-collection">
                        <a href="{{$event->slug}}">
                           <img class="img-responsive" src="assest/img/{{$event->image}}" alt="{{$event->image}}" />
                           <div class="media-body">
                              <div class="event-title">{{$event->name}}</div>
                              <div class="event-detail">
                                 <div class="hidden-sm hidden-xs">{{ date('d F Y', strtotime($event->created_at)) }} |  {{ date('H:m', strtotime($event->created_at)) }} </div>
                                 <div class="hidden-md hidden-lg">{{ date('d M Y', strtotime($event->created_at)) }}</div>
                                 <div class="text-address"> {{$event->address}} </div>
                              </div>
                           </div>
                        </a>
                     </div>
                     @endforeach

                 
                    
                  </div>
               </div>
            </div>
            <div class="col-xs-12 col-sm-6 content-block">
               <div class="content">
                  <div class="events-block collection">
                     <div class="col-xs-12 header">
                        <a href="#">
                           <h1 class="title">International Artists &amp; DJs</h1>
                        </a>
                     </div>

                     <div class="col-xs-12">

                     


                           @foreach ($international as $int) 
                                 <div class="media">
                                    <a href="{{$int->slug}}">
                                       <div class="media-left">
                                          <div class="poster-container"><img class="media-object" src="assest/img/{{$int->image}}" alt="{{$int->image}}" /></div>
                                       </div>
                                       <div class="media-body">
                                          <div class="event-title">{{$int->name}}</div>
                                          <div class="event-detail">
                                             <div class="hidden-sm hidden-xs">{{ date('d F Y', strtotime($int->created_at)) }} |  {{ date('H:m', strtotime($int->created_at)) }} </div>
                                             <div class="hidden-md hidden-lg">{{ date('d M Y', strtotime($int->created_at)) }}</div>
                                             <div class="text-address"> {{$int->address}} </div>
                                          </div>
                                       </div>
                                    </a>
                                 </div>
                           @endforeach

                    
                        
                     </div>
                     <div class="col-xs-12 events-block-more text-center"><a href="#">View all events from International Artist & DJs</a></div>
                  </div>
               </div>
            </div>
            <div class="col-xs-12 col-sm-6 content-block">
               <div class="content">
                  <div class="events-block recommended">
                     <div class="col-xs-12 header">
                        <a href="#">
                           <h1 class="title">Entertainment</h1>
                        </a>
                     </div>

                   

                         @foreach ($entertainment as $ent) 
                           <div class="col-xs-6 items-collection">
                              <a href="#">
                                 <img class="img-responsive" src="assest/img/{{$ent->image}}" alt="{{$ent->image}}" />
                                 <div class="media-body">
                                    <div class="event-title">{{$ent->name}}</div>
                                    <div class="event-detail">
                                       <div class="hidden-sm hidden-xs">{{ date('d F Y', strtotime($ent->created_at)) }} |  {{ date('H:m', strtotime($ent->created_at)) }} </div>
                                       <div class="hidden-md hidden-lg">{{ date('d M Y', strtotime($ent->created_at)) }}</div>
                                       <div class="text-address"> {{$ent->address}} </div>
                                    </div>
                                 </div>
                              </a>
                           </div>
                        @endforeach

                    
                   
                 
                     <div class="col-xs-12 events-block-more text-center"><a href="#">See more</a></div>
                  </div>
               </div>
            </div>

            <div class="col-xs-12 col-sm-6 content-block">
               <div class="content">
                  <div class="events-block recommended">
                     <div class="col-xs-12 header">
                        <a href="#">
                           <h1 class="title">Education</h1>
                        </a>
                     </div>




                       @foreach ($education as $edu) 
                           
                           <div class="col-xs-6 items-collection">
                              <a href="#">
                                 <img class="img-responsive" src="assest/img/{{$edu->image}}" alt="{{$edu->image}}" />
                                 <div class="media-body">
                                    <div class="event-title">{{$edu->name}}</div>
                                    <div class="event-detail">
                                       
                                       <div class="hidden-sm hidden-xs">{{ date('d F Y', strtotime($edu->created_at)) }} |  {{ date('H:m', strtotime($edu->created_at)) }} </div>
                                       <div class="hidden-md hidden-lg">{{ date('d M Y', strtotime($edu->created_at)) }}</div>
                                       <div class="text-address"> {{$edu->address}} </div>
                                    </div>
                                 </div>
                              </a>
                           </div>
                        @endforeach

                  
                     <div class="col-xs-12 events-block-more text-center"><a href="#">See more</a></div>
                  </div>
               </div>
            </div>

            <div class="col-xs-12 col-sm-6 content-block">
               <div class="content">
                  <div class="events-block recommended">
                     <div class="col-xs-12 header">
                        <a href="#">
                           <h1 class="title">Sport</h1>
                        </a>
                     </div>








                         @foreach ($sport as $spo) 
                             <div class="col-xs-6 items-collection">
                                 <a href="{{$spo->slug}}">
                                    <img class="img-responsive" src="assest/img/{{$spo->image}}" alt="{{$spo->image}}" />
                                    <div class="media-body">
                                       <div class="event-title">{{$spo->name}}</div>
                                       <div class="event-detail">
                                          <div class="hidden-sm hidden-xs">{{ date('d F Y', strtotime($spo->created_at)) }} |  {{ date('H:m', strtotime($spo->created_at)) }} </div>
                                          <div class="hidden-md hidden-lg">{{ date('d M Y', strtotime($spo->created_at)) }}</div>
                                          <div class="text-address"> {{$spo->address}} </div>
                                       </div>
                                    </div>
                                 </a>
                              </div>
                           @endforeach


                                      

                     <div class="col-xs-12 events-block-more text-center"><a href="#">See more</a></div>
                  </div>
               </div>
            </div>

            <div class="col-xs-12 col-sm-6 content-block">
               <div class="content">
                  <div class="events-block recommended">
                     <div class="col-xs-12 header">
                        <a href="#">
                           <h1 class="title">Activities</h1>
                        </a>
                     </div>


                         @foreach ($activities as $act) 
                            <div class="col-xs-6 items-collection">
                              <a href="{{$act->slug}}">
                                 <img class="img-responsive" src="assest/img/{{$act->image}}" alt="{{$act->image}}" />
                                 <div class="media-body">
                                    <div class="event-title">{{$act->name}}</div>
                                    <div class="event-detail">
                                        <div class="hidden-sm hidden-xs">{{ date('d F Y', strtotime($act->created_at)) }} |  {{ date('H:m', strtotime($act->created_at)) }} </div>
                                       <div class="hidden-md hidden-lg">{{ date('d M Y', strtotime($act->created_at)) }}</div>
                                       <div class="text-address"> {{$act->address}} </div>
                                    </div>
                                 </div>
                              </a>
                           </div>
                           @endforeach

                   
             
                     <div class="col-xs-12 events-block-more text-center"><a href="#">See more</a></div>
                  </div>
               </div>
            </div>

            <div class="col-xs-12 col-sm-6 content-block">
               <div class="content">
                  <style type="text/css">body.landing-theme .media-card.support {
                     background-color: #f3f6f9;
                     background-size: 50%;
                     background-repeat: no-repeat;
                     background-position: bottom right;
                     min-height: 275px;
                     text-shadow: 
                     0 1px 0 #f3f6f9, 
                     1px 0 0 #f3f6f9,
                     0 -1px 0 #f3f6f9,
                     -1px 0 0 #f3f6f9,
                     -1px 1px 0 #f3f6f9,
                     -1px -1px 0 #f3f6f9,
                     1px 1px 0 #f3f6f9,
                     1px -1px 0 #f3f6f9;
                     }
                     .media-card.support a { color: white; }
                     .media-card.support a:not(.btn):hover {
                     text-decoration: none;
                     color: #eee;
                     }
                     .media-card.support .media-card-content {
                     color: #555;
                     padding: 20px;
                     max-width: 340px;
                     }
                     .media-card.support h3 {
                     color: #291034;
                     text-transform: none;
                     margin: 0 0 5px 0;
                     }
                     .media-card.support .btn {
                     background-color: #291034;
                     color: #fff;
                     text-shadow: none;
                     }
                     .media-card.support .btn.btn-xs {
                     font-size: 15px;
                     }
                     .media-card.support .btn.btn-sm {
                     display: block;
                     margin-top: 8px;
                     margin-left: -6px;
                     max-width: 165px;
                     }
                     @media only screen and (max-width: 568px) {
                     body.landing-theme .media-card.support {
                     font-size: 16px;
                     min-height: 242px;
                     }
                     .media-card.support .btn {
                     font-size: 16px;
                     }
                     .media-card.support .btn.btn-xs {
                     font-size: 13px;
                     }
                     }
                  </style>
                  <div class="media-card support" style="background-image: url(assest/img/customer-supportcover.png)">
                     <div class="media-card-content">
                        <h3>Need some help?</h3>
                        <p>
                           Read our <a class="btn btn-xs align-middle d-inline" href="#" target="_blank">FAQ Page</a> 
                           or contact our customer support. Everyday, between 10:00 - 18:00 (GMT+7).
                        </p>
                        <a class="btn btn-sm" href="mailto:pop@eventpop.me">pop@eventpop.me</a>
                        <a href="tel:+66625932224" class="btn btn-sm">(+66) 062-593-2224</a>
                        <a href="#" data-toggle="modal" data-target="#contact-line-modal" class="btn btn-sm social-link">
                        <img width="20" height="20" style="margin-top: -2px" src="assest/img/line.png" alt="Line icon" /> @eventpop
                        </a>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-xs-12 col-sm-6 content-block">
               <div class="content">
                  <div class="events-block collection">
                     <div class="col-xs-12 header">
                        <a href="#">
                           <h1 class="title">Technology</h1>
                        </a>
                     </div>




                     <div class="col-xs-12">



                           @foreach ($technology as $tec) 
                              <div class="media">
                              <a href="{{$tec->slug}}">
                                 <div class="media-left">
                                    <div class="poster-container"><img class="media-object" src="assest/img/{{$tec->image}}" alt="{{$tec->image}}" /></div>
                                 </div>
                                 <div class="media-body">
                                    <div class="event-title">{{$tec->name}}</div>
                                    <div class="event-detail">
                                        <div class="hidden-sm hidden-xs">{{ date('d F Y', strtotime($tec->created_at)) }} |  {{ date('H:m', strtotime($tec->created_at)) }} </div>
                                       <div class="hidden-md hidden-lg">{{ date('d M Y', strtotime($tec->created_at)) }}</div>
                                       <div class="text-address"> {{$tec->address}} </div>
                                    </div>
                                 </div>
                              </a>
                              </div>
                           @endforeach


                   
                     </div>
                     <div class="col-xs-12 events-block-more text-center"><a href="#">View all 4 events from Technology</a></div>
                  </div>
               </div>
            </div>
            <div class="col-xs-12 col-sm-6 content-block">
               <div class="content">
                  <style type="text/css">.media-card.apps {
                     padding-top: 30px;
                     padding-bottom: 15px;
                     position: relative;
                     overflow: hidden;
                     }
                     .media-card.apps a {
                     display: block;
                     }
                     .media-card.apps a.app-link img {
                     margin-bottom: 15px;
                     max-width: 200px;
                     width: 40%;
                     margin-right:8%;
                     }
                     .media-card.apps #app-phone {
                     position: absolute;
                     top: 0;
                     width: 50%;
                     right: 55%;
                     }
                     .media-card.apps #app-phone img {
                     width: 180px;
                     float: right;
                     }
                  </style>
                  <div class="media-card apps" style="background-image: url(assest/img/organizer.jpg)">
                     <div id="app-phone"><img src="assest/img/space-mission.jpg"></div>
                     <div class="media-card-content text-right">
                        <a class="app-link" href="#" target="_blank">
                        <img src="assest/img/app-store.png">
                        </a>
                        <a class="app-link" href="#" target="_blank">
                        <img src="assest/img/google-play.png">
                        </a>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-xs-12 col-sm-6 content-block">
               <div class="content">
                  <style type="text/css">body.landing-theme .media-card.become-organizer {
                        background-position: top center;
                        min-height: 255px;
                        position: relative;
                     }
                     .media-card.become-organizer .media-card-content {
                        position: absolute;
                        width: 100%;
                        text-align: center;
                        top: 50%;
                        transform: translateY(-50%);
                     }
                     .media-card.become-organizer h1 {
                        letter-spacing: 1px;
                        font-weight: bold;
                        margin-top: 0;
                     }
                  </style>
                  <div class="media-card become-organizer" style="background-image: url(assest/img/organizer.jpg)">
                     <div class="media-card-content">
                        <h3 class="mt-0">Use Event Pop for your <br/> next events and activities.</h3>
                        <a class="btn btn-primary btn-lg mt-2" href="#">Become an Organizer</a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
    


@include ('footer')   