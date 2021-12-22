@extends('Front.default')
@section('content')
<h1 style="color:#fff;">{!! ucfirst('SAFES') !!}</h1>
<!-- Start Align Area -->
{{-- <div class="whole-wrap">
  <div class="container box_1170">
    <div class="section-top-border">
      {{-- <h3 class="mb-300">Event Details</h3> --}}
      {{-- <div class="row"> --}}
        {{-- <div class="col-md-4"> <img src="{{$description->image}}" alt="" class="img-fluid"> </div> --}}
        {{-- <div class="col-md-8 mt-sm-20"> --}}
            {{-- {{json_decode($description->data_info)->description}} --}}
           {{-- <P> {{json_decode($description ->description, true)}} --}}
          {{-- <p>{{$description->description}}</p> --}}
          {{-- <p>Member SAFES countries had brain storming sessions for finding ways to work together and discover ways to help these individuals. These fruitful exercises resulted in formation of SAFES. This task force decided to work relentlessly to achieve milestone infield of endocrinology particularly in South Asia region by providing optimum care and relief for our patients.</p> --}}
        {{-- </div> --}}
      {{-- </div> --}}
      {{-- <p class="sample-text"> SAFES were born on 17th January 2013, first Joint meeting and foundation of this federation was laid in host country Sri Lanka, in the picture perfect city of Colombo. </p>
      <p class="sample-text"> After Initial Consultation it was decided to have first launch biennial summit in Hyderabad, India. The 1st SAFES summit was held on 17th and 18th August the same year marking the beginning of an exciting South Asian collaboration in the field of endocrinology. Over 440 faculty, delegates and students from five countries: Bangladesh, India, Nepal, Pakistan and Sri Lanka, including over 60 foreign attendees, shared information at the conference. The atmosphere was marked by joyful camaraderie, celebrating South Asian unity and friendship. </p>
      <p class="sample-text"> This was followed by the drafting of a Position Statement on "South Asian Women with diabetes: Psychosocial challenges and management" keeping the gender differences in well- being among women with diabetes in mind. Apart from creating a paper, we created lifelong trans-border friendships. </p>
      <p class="sample-text"> Pakistan cradled SAFES in her arms during a special session organized during the annual meeting of the Pakistan Endocrine Society in November, 2013. The Diabetes and Endocrine Society of Nepal held the hand of SAFES during 3 meetings in 2014, two well conducted CMEs in Kathmandu and Pokhara for which Dr. Sanjay was guest of honor and one principally attended Diabetes Mela for World Diabetes Day. </p>
      <p class="sample-text"> India continued to nurture it by accrediting iLEAD (Incretin Learning & Excellence Academy Diabetes) and CCGDM (Certificate course in Gestational Diabetes).  iLEAD is an educational initiative, designed for enhancing clinical, social and capacity building in the field of diabetes, to spread the message of rational and optimal use of incretin based therapies in South Asia. CCGDM is the first globally recognized (by International Diabetes Federation) and accredited model to train primary care physicians, obstetricians and gynecologists in management of GDM. </p>
      <p class="sample-text"> SAFES continued to blossom during EC meetings held during the Premix summit in Dhaka in August 2014 and in November the same year during the annual conference of Uttar Pradesh Diabetes Association, in Allahabad. Turning full circle in Colombo where a meeting was held for the drafting of a "Consensus Statement on The Place of Sulfonylurea's (SUs) in the management of T2DM in South Asia" i.e. "SAFE and smart use of SUs" </p>
      <p class="sample-text"> Thus at 2 years SAFES stands steadfast and sure with a stature of its own lovingly cherished by the "Famous five". It has been a humbling and fulfilling experience to have mothered SAFES and it with great joy that SAFES is being delivered unto its new home which waits with open arms. Diabetic care. </p> --}}
    {{-- </div> --}}
  {{-- </div> --}}
{{-- </div> --}} 
<section class="sample-text-area">
    <div class="container box_1170">
      <h3 class="mb-30">{{$description->event_name}}</h3>
        <div class="video-sec">
          
            <img src="{{$description->image}}" autostart="false" height="auto" width="100%" />
            {{-- <div class="col-md-12 dia-sec" >
              <embed src="{{$description->file}}" type="application/pdf" width="100%" height="600px" />
              </div> --}}
            {{-- <embed src="{{$description->file}}" width="800px" height="2100px" /> --}}
              {{-- <iframe src="{{$description->file}}" style="width: 100%;height: 100%;border: none;"></iframe> --}}
            {{-- <div class="col-md-12"> --}}
              <blockquote class="generic-blockquote">
            L – Learn about diabetes<br>
                  E -Educate others<br>
                  A -Achieve goals<br>
            D – Defeat diabetes
               </blockquote>
            </div>
                  {{-- </div> --}}
                 
      <div class="">
        {{-- <h3 class="mb-30">Annual Conference of Endocrine Society of India</h3> --}}
        <div class="row">
            <div class="col-md-12 dia-sec" >
              
               {!! html_entity_decode($description->description) !!}
               <div class="section-top-border">
                <h3 class="mb-30">Organizing Committee</h3>
                  <div class="progress-table-wrap">
                    <div class="progress-table">
                      <div class="table-head">
                        <div class="serial">#</div>
                        <div class="post-n">Post</div>
                        <div class="doctor">Doctors</div>
                      </div>
                      <div class="table-row">
                        <div class="serial">01</div>
                        <div class="post-n"> National Patrons</div>
                        <div class="doctor"> Dr. Sarita Bajaj (India) <br>
                          Dr. Sanjay Kalra <br>
                          Dr. Rakesh Sahay <br>
                          Dr. Sujoy Ghosh<br>
                          Dr. KVS Harikumar <br>
                         </div>
                      </div>
                      <div class="table-row">
                        <div class="serial">02</div>
                        <div class="post-n"> International Patrons</div>
                        <div class="doctor">
                    Dr Noel Somasundaram<br>
                    Dr. S. Abbas Raza<br>
                    Dr. Faruque Pathan<br>
                    Dr. A H Aamir<br>
                    Dr. Faria Afsana<br>
                    Dr. Prasad Katulanda<br>
                    Dr. Ali Latheef<br>
                    Dr. Robin Maskey<br>
                    Dr. Ibrar Ahmed<br>
                    Dr. Ahmad Zia<br>
                    Dr. Mohammed Wali Naseri<br>
                  
                    </div>
                      </div>
                      <div class="table-row">
                        <div class="serial">03</div>
                        <div class="post-n"> Organizing Chairperson</div>
                        <div class="doctor">
                    Dr Dina Shrestha<br>
                    Dr Ganapathi Bantwal 
                    
                    </div>
                      </div>
                      <div class="table-row">
                        <div class="serial">04</div>
                        <div class="post-n"> Scientific Chairperson</div>
                        <div class="doctor">
                    Dr. Shehla Shaikh<br>
                    Dr. Saptarshi Bhattacharya
                    </div>
                      </div>
                      <div class="table-row">
                        <div class="serial">05</div>
                        <div class="post-n"> Organizing Secretary</div>
                        <div class="doctor">
                    Dr. Nitin Kapoor<br>
                    Dr. Arundhati Dasgupta
                    </div>
                      </div>
                      <div class="table-row">
                        <div class="serial">06</div>
                        <div class="post-n"> Scientific Secretary </div>
                        <div class="doctor"> Dr. Nalini Kopalle <br>
                          Dr, Mohan T Shenoy <br>
                          Dr. Anshita Aggarwal <br>
                       </div>
                      </div>
                      <div class="table-row">
                        <div class="serial">07</div>
                        <div class="post-n">Scientific Co-secretary </div>
                        <div class="doctor">Dr. Lakshmi Nagendra<br>
                          Dr. Sunetra Mondal <br>
                         </div>
                      </div>
               
                    </div>
                  </div>
                </div>
               <iframe width="1120" height="500" controls autoplay
               src="https://www.youtube.com/embed/{{$description->video_youtube_id}}">
               </iframe>
          </div>
          {{-- <iframe width="1200" height="500"
          src="https://www.youtube.com/embed/tgbNymZ7vqY">
          </iframe> --}}
             {{-- <div class="col-md-12 dia-sec" >
          <img src="{{$description->image}}">
          </div> --}}
          <div class="">
            {{-- <h3 class="mb-30">Let’s LEAD the War against Diabetes !!!</h3> --}}
            <div class="row">
                {{-- <div class="col-md-12 dia-sec" >
              <embed src="{{$description->image}}" type="application/pdf" width="400%" height="600px" />
              </div>         --}}
              {{-- <div class="col-md-12 dia-sec" >
              <embed src="{{$description->image}}" type="application/pdf" width="100%" height="600px" />
              </div>		   --}}
              <!--<div class="col-md-12">
                <blockquote class="generic-blockquote">
                    L – Learn about diabetes<br>
                    E - Educate others<br>
                    A - Achieve goals<br>
                    D – Defeat diabetes
                 </blockquote>
              </div>-->		  
            </div>
          </div>
            
          
            
        </div>
      </div>
  
        {{-- <div class="video-sec">
  <embed src="{{$description->image}}" autostart="false" height="500" width="100%" />
  
        </div> --}}
        
    </div>
  </section>
<!-- End Align Area -->
@stop