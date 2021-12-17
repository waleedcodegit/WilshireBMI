@extends('Front.default')
@section('content')
<h1 style="color:#fff;">{!! ucfirst('SAFES') !!}</h1>
<!-- Start Align Area -->
<div class="whole-wrap">
  <div class="container box_1170">
    <!--<div class="section-top-border">
				<h3 class="mb-30">Address</h3>
				<div class="row">
					<div class="col-lg-12">
						<blockquote class="generic-blockquote">
						Secretariat office for 2015-2017
Room no. 1320(13th floor)
BIRDEM General Hospital 122,
Kazi Nazrul Islam avenue
Shahbag, Dhaka 1000 Bangladesh
						</blockquote>
							<blockquote class="generic-blockquote">
		Email: fariasafes@gmail.com
						</blockquote>
					</div>
				</div>
			</div>-->
    <div class="section-top-border">
      <div class="progress-table-wrap">
        <div class="progress-table">
          <div class="table-head">
            <div class="serial">#</div>
            <div class="post-n">Post</div>
            <div class="doctor">Doctors</div>
          </div>
          <div class="table-row">
            <div class="serial">01</div>
            <div class="post-n"> Founders / Patrons:</div>
            <div class="doctor"> Dr. Sarita Bajaj (India) <br>
              Dr. Jyoti Bhattarai (Nepal) <br>
              Dr. Subhankar Chowdhury (India) <br>
              Dr. Najmul Islam (Pakistan) <br>
              Dr. A. K. Azad Khan (Bangladesh) <br>
              Dr. Hazera Mahtab (Bangladesh) <br>
              Dr. Md. Faruque Pathan (Bangladesh) <br>
              Dr. Henry Rajaratnam (Sri Lanka) </div>
          </div>
          <div class="table-row">
            <div class="serial">02</div>
            <div class="post-n"> Immediate Past President</div>
            <div class="doctor">Dr. S. Abbas Raza (Pakistan) </div>
          </div>
          <div class="table-row">
            <div class="serial">03</div>
            <div class="post-n"> President:</div>
            <div class="doctor">
              Dr. Dina Shrestha (Nepal)
              </div>
          </div>
          <div class="table-row">
            <div class="serial">04</div>
            <div class="post-n"> SAFES Representative in ISE</div>
            <div class="doctor">Dr. S. Abbas Raza (Pakistan) </div>
          </div>
          <div class="table-row">
            <div class="serial">05</div>
            <div class="post-n"> President Elect:</div>
            <div class="doctor">   Dr. Sanjay Kalra <br>  Dr. Noel Somasundaram (Sri Lanka) </div>
          </div>
          <div class="table-row">
            <div class="serial">06</div>
            <div class="post-n"> Vice President : </div>
            <div class="doctor"> Dr. A. H. Aamir (Pakistan) <br>
              Dr. Faria Afsana  (Bangladesh) <br>
             Dr. Rakesh Sahay (India) <br>
              Dr. Prasad Katulanda (Sri Lanka) <br>
              Dr. Ali Latheef (Maldives) <br>
              Dr. Robin Maskey (Nepal) <br>
              Dr. Mohammed Wali Naseri (Afghanistan) </div>
          </div>
          <div class="table-row">
            <div class="serial">07</div>
            <div class="post-n">National Society Presidents </div>
            <div class="doctor">Dr. Charles Antonypillai (Sri Lanka)<br>
              Dr. Sanjay Kalra (India) <br>
              Dr. Khurshid A. Khan (Pakistan) <br>
              Dr. Md. Faruque Pathan (Bangladesh) <br>
              Dr. Dina Shrestha (Nepal) <br>
              Dr. Abdul Wassay Sultani (Afghanistan) </div>
          </div>
          <div class="table-row">
            <div class="serial">08</div>
            <div class="post-n"> Secretary</div>
            <div class="doctor">Dr. Manilka Sumanatilleke (Sri Lanka) </div>
          </div>
          <div class="table-row">
            <div class="serial">09</div>
            <div class="post-n"> Secretary elect</div>
            <div class="doctor">Dr. Santosh Shakya (Nepal) </div>
          </div>
          <div class="table-row">
            <div class="serial">10</div>
            <div class="post-n"> Past Secretaries</div>
            <div class="doctor"> Dr. Ali Jawa (Pakistan) <br>
              Dr. Tofail Ahmed (Bangladesh) <br>
              Dr. Rakesh Sahay (India) <br>
            </div>
          </div>
          <div class="table-row">
            <div class="serial">11</div>
            <div class="post-n">National Society Secretaries </div>
            <div class="doctor"> Dr. Sujoy Ghosh (India) <br>
              Dr. Osama Ishtiaq (Pakistan) <br>
              Dr. Kamani Liyanarachchi (Sri Lanka) <br>
              Dr. Md. Hafizur Rahman (Bangladesh) <br>
              Dr. Jasmine Tuladhar (Nepal) <br>
            </div>
          </div>
          <div class="table-row">
            <div class="serial">12</div>
            <div class="post-n">Treasurer </div>
            <div class="doctor"> Dr. Samanthi Cooray (Sri Lanka)<br>
            </div>
          </div>
          <div class="table-row">
            <div class="serial">13</div>
            <div class="post-n">Advisory Board</div>
            <div class="doctor"> Dr. Ahmad Waheed Waib (Afghanistan) <br>
              Dr. Mohammad Asif Aram (Afghanistan) <br>
              Dr. Zafar Ahmed Latif (Bangladesh) <br>
              Dr. M. A. Samad (Bangladesh) <br>
              Dr. Ambrish Mithal (India)<br>
              Dr. Nikhil Tandon (India) <br>
              Dr. S. V. Madhu (India) <br>
              Dr. S. K. Singh (India) <br>
              Dr. Mimi Giri (Nepal) <br>
              Dr. Amit Shakya (Nepal) <br>
              Dr. Ibrar Ahmed (Pakistan) <br>
              Dr. Zaman Sheikh (Pakistan) <br>
              Dr. Uditha Bulugahapitiya (Sri Lanka) <br>
              Dr. Chaminda Garusinghe (Sri Lanka) </div>
          </div>
          <div class="table-row">
            <div class="serial">14</div>
            <div class="post-n">Executive Committee Members </div>
            <div class="doctor"> Dr. Ahmad Zia Mukhlis (Afghanistan) <br>
              Dr. Jamshed Mureed (Afghanistan) <br>
              Dr. S. M. Ashrafuzzaman (Bangladesh) <br>
              Dr. Shahjada Selim (Bangladesh) <br>
              Dr. Ganapathi Bantwal (India) <br>
              Dr. Sushil Jindal (India) <br>
              Dr. Kaushik Pandit (India) <br>
              Dr. K. V. S. Hari Kumar (India) <br>
              Dr. Badri Poudel (Nepal) <br>
              Dr. Bhoj Raj Adhikary (Nepal) <br>
              Dr. Saeed A Mahar (Pakistan) <br>
              Dr. Faisal Qureshi (Pakistan)<br>
              Dr. Dimuthu Muthukuda (Sri Lanka) <br>
              Dr. Muditha Weerakkody (Sri Lanka) </div>
          </div>
          <div class="table-row">
            <div class="serial">15</div>
            <div class="post-n">Scientific Committee </div>
            <div class="doctor"> Dr. Faria Afsana – Chair (Bangladesh) <br>
              Dr. Mohammad Behroz Noori (Afghanistan) <br>
              Dr. Ahmed Salam Mir (Bangladesh) <br>
              Dr. Vageesh Ayyar (India) <br>
              Dr. Saptarshi Bhattacharya (India) <br>
              Dr. Dina Shrestha (Nepal) <br>
              Dr. Saeed A Mahar (Pakistan) <br>
              Dr. Sivatharshya Pathmanathan (Sri Lanka) </div>
          </div>
          <div class="table-row">
            <div class="serial">16</div>
            <div class="post-n">Accreditation Committee </div>
            <div class="doctor"> Dr. S. V. Madhu – Chair (India) <br>
              Dr. Nisar Ahmad Zaher (Afghanistan) <br>
              Dr. M. Saifuddin (Bangladesh) <br>
              Dr. Arpan Bhattacharya (India) <br>
              Dr. P. K. Jabbar (India)<br>
              Dr. Santosh Shakya (Nepal)<br>
              Dr. A. H. Aamir (Pakistan) <br>
              Dr. Kavinga Gunawardena (Sri Lanka) </div>
          </div>
          <div class="table-row">
            <div class="serial">17</div>
            <div class="post-n">Accreditation Committee </div>
            <div class="doctor"> Dr. S. Abbas Raza – Chair (Pakistan) <br>
              Dr. Shafiullah Rashid (Afghanistan) <br>
              Dr. Tanjina Hossain (Bangladesh) <br>
              Dr. Suresh Damodaran (India) <br>
              Dr. Pramod Gandhi (India) <br>
              Dr. Robin Maskey (Nepal) <br>
              Dr. Ibrar Ahmed (Pakistan) <br>
              Dr. Aravinthan Mahalingam (Sri Lanka) </div>
          </div>
          <div class="table-row">
            <div class="serial">18</div>
            <div class="post-n">Editorial Committee </div>
            <div class="doctor"> Dr. K. V. S. Hari Kumar – Chair (India) <br>
              Dr. Haseebullah Mohammadi (Afghanistan) <br>
              Dr. Nazmul Kabir Qureshi (Bangladesh) <br>
              Dr. Manash P Barua (India) <br>
              Dr. Deep Dutta (India) <br>
              Dr. Robin Maskey (Nepal) <br>
              Dr. Tahir Ghaffar (Pakistan) <br>
              Dr. Dharshini Karuppaiah (Sri Lanka) </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- End Align Area -->
@stop