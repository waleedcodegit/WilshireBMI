@extends('Front.default')
@section('content')
<h1 style="color:#fff;">{!! ucfirst('SAFES') !!}</h1>
<!-- popular_program_area_start  -->
<div class="popular_program_area section__padding program__page">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="section_title text-center">
          <h3>Events</h3>
        </div>
      </div>
    </div>
    <div class="events ">
      <div class="row">
        <div class="col-lg-4 col-md-6">
          <div class="single__program">
            <div class="program_thumb"> <a href="#" target="_blank">
              <video width="350" controls="">
                <source src="images/event.mp4" type="video/mp4">
                <source src="images/event.ogg" type="video/ogg">
              </video>
              </a> </div>
            <div class="program__content">
              <h4>Endocrine Congress - Srilanka</h4>
              <p>Srilanka College of Endocrinologists in collaboration with European Association for the study of Diabetes</p>
              <a href="#" class="boxed-btn5">Click for more details</a> <a href="#" class="boxed-btn5">Download Details</a> </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="single__program">
            <div class="program_thumb"> <img src="img/event1.jpg" alt=""> </div>
            <div class="program__content">
              <h4>YOUNG INVESTIGATOR AWARD</h4>
              <p>SLENDO Endocrine Congress 2019 - Srilanka</p>
              <a href="#" class="boxed-btn5">Click for more details</a> <a href="#" class="boxed-btn5">Download Details</a> </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="single__program">
            <div class="program_thumb"> <img src="img/event2.jpg" alt=""> </div>
            <div class="program__content">
              <h4>Endocrine Congress - Srilanka</h4>
              <p>Srilanka College of Endocrinologists in collaboration with European Association for the study of Diabetes</p>
              <a href="#" class="boxed-btn5">Click for more details</a> <a href="#" class="boxed-btn5">Download Details</a> </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="single__program">
            <div class="program_thumb"> <img src="img/program/1.png" alt=""> </div>
            <div class="program__content">
              <h4>PES-SAFES Summit 2017!</h4>
              <p>Name: SAFES-PES Summit Nov 23-26 2017, Place: Pearl Continental Hotel, Lahore Pakistan Date: 23-26 Nov, 2017</p>
              <a href="#" class="boxed-btn5">Click for more details</a> <a href="#" class="boxed-btn5">Download Details</a> </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- popular_program_area_end -->
@stop