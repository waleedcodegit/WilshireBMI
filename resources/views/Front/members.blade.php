@extends('Front.default')
@section('content')
<h1 style="color:#fff;">{!! ucfirst('SAFES') !!}</h1>
<!-- popular_program_area_start  -->
<div class="popular_program_area section__padding program__page">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="section_title text-center">
          <h3>Members</h3>
        </div>
      </div>
    </div>
    <div class="events ">
      <div class="row">
        <div class="col-lg-4 col-md-6">
          <div class="single__program mbr-flg">
            <div class="program_thumb"> <img src="img/ban.png" alt=""> </div>
            <div class="program__content">
              <h4>Bangladesh</h4>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="single__program mbr-flg">
            <div class="program_thumb"> <img src="img/india.png" alt=""> </div>
            <div class="program__content">
              <h4>India</h4>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="single__program mbr-flg">
            <div class="program_thumb"> <img src="img/nepal.png" alt=""> </div>
            <div class="program__content">
              <h4>Nepal</h4>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="single__program mbr-flg">
            <div class="program_thumb"> <img src="img/pakistan.png" alt=""> </div>
            <div class="program__content">
              <h4>Pakistan</h4>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="single__program mbr-flg">
            <div class="program_thumb"> <img src="img/srilanka.png" alt=""> </div>
            <div class="program__content">
              <h4>Sri Lanka</h4>
            </div>
          </div>
        </div>
		     <div class="col-lg-4 col-md-6">
          <div class="single__program mbr-flg">
            <div class="program_thumb"> <img src="img/afghanistan.png" alt=""> </div>
            <div class="program__content">
              <h4>Afghanistan</h4>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- popular_program_area_end -->
@stop