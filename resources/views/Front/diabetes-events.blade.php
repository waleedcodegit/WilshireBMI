@extends('Front.default')
@section('content')
<h1 style="color:#fff;">{!! ucfirst('SAFES') !!}</h1>
<!-- recent_news_area_start  -->
<div class="recent_news_area section__padding">
  <div class="container">
	  <div class="row justify-content-center">
    </div>
	  
	  <!--<div class="client-section ">
		<div class="container">
			<div id="client-carousel" class="client-slider">
				<div class="single-brand">
					
						<div class=" ml-auto mr-auto">
        <div class="single__news">
          <div class="thumb"> <a href="diabetes9.html"> <img src="img/news6.png" alt=""> <span class="badge">NOV<br>
            9</span> </a>
            <div class="news_info"> <a href="PMMSG.html">
              <h4>Let's the War Against Diabetes<i class="ti-angle-right rt-side"></i></h4>
              </a>
              </p>
            </div>
          </div>
        </div>
      </div>
					
				</div>
				<div class="single-brand">
					<a href="#">
						<div class=" ml-auto mr-auto">
        <div class="single__news">
          <div class="thumb"> <a href="diabetes10.html"> <img src="img/news7.png" alt=""> <span class="badge">NOV<br>
            10</span> </a>
            <div class="news_info"> <a href="PMMSG.html">
              <h4>Let's the War Against Diabetes<i class="ti-angle-right rt-side"></i></h4>
              </a>
              </p>
            </div>
          </div>
        </div>
      </div>
					</a>
				</div>
				<div class="single-brand">
					<a href="#">
						<div class=" ml-auto mr-auto">
        <div class="single__news">
          <div class="thumb"> <a href="diabetes.html"> <img src="img/news5.png" alt=""> <span class="badge">NOV<br>
            13</span> </a>
            <div class="news_info"> <a href="PMMSG.html">
              <h4>World Diabetic Day Symposium<i class="ti-angle-right rt-side"></i></h4>
              </a>
              </p>
            </div>
          </div>
        </div>
      </div>
					</a>
				</div>
				<div class="single-brand">
					<a href="#">
						<div class=" ml-auto mr-auto">
        <div class="single__news">
          <div class="thumb"> <a href="diabetes9.html"> <img src="img/news8.png" alt=""> <span class="badge">NOV<br>
            13-14</span> </a>
            <div class="news_info"> <a href="PMMSG.html">
              <h4>Access to Diabetes Care<i class="ti-angle-right rt-side"></i></h4>
              </a>
              </p>
            </div>
          </div>
        </div>
      </div>
					</a>
				</div>
				
			</div>
		</div>
	</div>-->



	  
	  
    
    <div class="row text-center mt-5 py-5">
      @foreach($event as $key => $data)
	<div class="col-lg-3 col-md-6 ml-auto mr-auto">
        <div class="single__news">
          <div class="thumb"> <a href="/event/{{$data->slug}}"> <img src="{{$data->image}}" alt=""style="height:300px;">> <span class="badge">{{$data->startdate}}
            </span> </a>
            <div class="news_info"> <a href="/event/{{$data->slug}}">
              <h4>{{$data->event_name}}<i class="ti-angle-right rt-side"></i></h4>
              </a>
              </p>
            </div>
          </div>
        </div>
      </div>
      @endforeach
      {{-- @else
          <div class="text-center ml-auto mr-auto">
          <img src="img/calendar.png" style="width:150px" class="mb-3">
          <h4>Events are not available. check back later for Upcoming events.</h4>
          </div>
      @endif --}}
     
      {{-- @if($size > 0)
      @foreach($event as $key => $data) --}}
          
          {{-- <div class="col-lg-3 col-md-6 ml-auto mr-auto">
          <div class="single__news">
          <div class="thumb"> <a href="/event/{{$data->slug}}"> <img src="{{$data->image}}" alt=""> <span class="badge">{{$data->startdate}}</span> </a>
              <div class="news_info"> <a href="/event/{{$data->slug}}">
              <h4>{{$data->event_name}}<i class="ti-angle-right rt-side"></i></h4>
              </a>
              </p>
              </div>
          </div>
          </div>
          </div>  
      @endforeach --}}
      {{-- @else
          <div class="text-center ml-auto mr-auto">
          <img src="img/calendar.png" style="width:150px" class="mb-3">
          <h4>Events are not available. check back later for Upcoming events.</h4>
          </div>
      @endif --}}
  </div>
	  	{{-- <div class="col-lg-3 col-md-6 ml-auto mr-auto">
        <div class="single__news">
          <div class="thumb"> <a href="diabetes10.html"> <img src="img/news7.png" alt=""> <span class="badge">NOV<br>
            10</span> </a>
            <div class="news_info"> <a href="PMMSG.html">
              <h4>Let's the War Against Diabetes<i class="ti-angle-right rt-side"></i></h4>
              </a>
              </p>
            </div>
          </div>
        </div>
      </div>
		<div class="col-lg-3 col-md-6 ml-auto mr-auto">
        <div class="single__news">
          <div class="thumb"> <a href="diabetes.html"> <img src="img/news5.png" alt=""> <span class="badge">NOV<br>
            13</span> </a>
            <div class="news_info"> <a href="PMMSG.html">
              <h4>World Diabetic Day Symposium<i class="ti-angle-right rt-side"></i></h4>
              </a>
              </p>
            </div>
          </div>
        </div>
      </div>
<div class="col-lg-3 col-md-6 ml-auto mr-auto">
        <div class="single__news">
          <div class="thumb"> <a href="diabetes13-14.html"> <img src="img/news8.png" alt=""> <span class="badge">NOV<br>
            13-14</span> </a>
            <div class="news_info"> <a href="PMMSG.html">
              <h4>Access to Diabetes Care<i class="ti-angle-right rt-side"></i></h4>
              </a>
              </p>
            </div>
          </div>
        </div>
      </div> 
	
	<div class="col-lg-3 col-md-6 ml-auto mr-auto">
        <div class="single__news">
          <div class="thumb"> <a href="diabetes13-14.html"> <img src="img/news9.png" alt=""> <span class="badge">NOV<br>
            14</span> </a>
            <div class="news_info"> <a href="PMMSG.html">
              <h4>SAFES and WDD 2021<i class="ti-angle-right rt-side"></i></h4>
              </a>
              </p>
            </div>
          </div>
        </div>
      </div>
      
      <div class="col-lg-3 col-md-6 ml-auto mr-auto">
        <div class="single__news">
          <div class="thumb"> <a href="diabetes13-14.html"> <img src="img/news16.jpg" alt=""> <span class="badge">NOV<br>
            14</span> </a>
            <div class="news_info"> <a href="virtual-meet-agenda.html">
              <h4>SAFES and WDD 2021<i class="ti-angle-right rt-side"></i></h4>
              </a>
              </p>
            </div>
          </div>
        </div>
      </div> --}}

    </div>
    
    <!-- <div class="row">
      <div class="col-md-12 text-center"> <a href="PMMSG.html" > View all events > </a> </div>
    </div> -->
  </div>
</div>
@stop