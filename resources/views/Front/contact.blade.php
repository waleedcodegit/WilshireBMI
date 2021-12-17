@extends('Front.default')
@section('content')
<h1 style="color:#fff;">{!! ucfirst('SAFES') !!}</h1>
<!-- ================ contact section start ================= -->
<section class="contact-section">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <h2 class="contact-title">Get in Touch</h2>
      </div>
      <div class="col-lg-8">
        <form class="form-contact contact_form" action="contact_process.php" method="post" id="contactForm" novalidate="novalidate">
          <div class="row">
            <div class="col-12">
              <div class="form-group">
                <textarea class="form-control w-100" name="message" id="message" cols="30" rows="9" onFocus="this.placeholder = ''" onBlur="this.placeholder = 'Enter Message'" placeholder="Messege"></textarea>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="form-group">
                <input class="form-control valid" name="name" id="name" type="text" onFocus="this.placeholder = ''" onBlur="this.placeholder = 'Enter your name'" placeholder="Enter your name">
              </div>
            </div>
            <div class="col-sm-6">
              <div class="form-group">
                <input class="form-control valid" name="email" id="email" type="email" onFocus="this.placeholder = ''" onBlur="this.placeholder = 'Enter email address'" placeholder="Email">
              </div>
            </div>
            <div class="col-12">
              <div class="form-group">
                <input class="form-control" name="subject" id="subject" type="text" onFocus="this.placeholder = ''" onBlur="this.placeholder = 'Enter Subject'" placeholder="Enter Subject">
              </div>
            </div>
          </div>
          <div class="form-group mt-3">
            <button type="submit" class="button button-contactForm boxed-btn">Send</button>
          </div>
        </form>
      </div>
      <div class="col-lg-3 offset-lg-1">
        <div class="media contact-info"> <span class="contact-info__icon"><i class="ti-email"></i></span>
          <div class="media-body">
            <h3><a href="mailto:info@safesendocrine.com">info@safesendocrine.com</a></h3>
          </div>
        </div>
        <div class="media contact-info"> <span class="contact-info__icon"><i class="ti-email"></i></span>
          <div class="media-body">
            <h3><a href="mailto:coordinator@safesendocrine.com">coordinator@safesendocrine.com</a></h3>
            <p>Send us your query anytime!</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- ================ contact section end ================= -->
@stop