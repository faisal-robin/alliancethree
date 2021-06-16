@include('front.layouts.header_link')
@include('front.layouts.header')
 <div class="hero-wrap hero-bread" style="background-image: url({{ asset('public/front_asset/images/bg_1.jpg')}});">
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
          	<p class="breadcrumbs"><span class="mr-2"><a href="index.php">Home</a></span> <span>Contact us</span></p>
            <h1 class="mb-0 bread">Contact us</h1>
          </div>
        </div>
      </div>
    </div>

    <section class="ftco-section contact-section bg-light">
      <div class="container">
      	<div class="row d-flex mb-5 contact-info">
          <div class="w-100"></div>
          <div class="col-md-4 d-flex">
          	<div class="info bg-white p-4 text-center">
                <span style="font-size: 40px;color:#82ae46" class="icon icon-map-marker"></span>
	            <p> {{$company_info->address_1}}</p>
	          </div>
          </div>
          <div class="col-md-4 d-flex">
          	<div class="info bg-white p-4 text-center">
                <span style="font-size: 40px;color:#82ae46" class="icon icon-phone"></span>
	            <p>{{$company_info->phone_1}}</p>
	          </div>
          </div>
          <div class="col-md-4 d-flex">
          	<div class="info bg-white p-4 text-center">
                <span style="font-size: 40px;color:#82ae46" class="icon icon-envelope"></span>
	            <p>{{$company_info->email}}</p>
	          </div>
          </div>
        </div>
        <div class="row block-9">
          <div class="col-md-6 order-md-last d-flex">
            <form action="#" class="bg-white p-5 contact-form">
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Your Name">
              </div>
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Your Email">
              </div>
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Subject">
              </div>
              <div class="form-group">
                <textarea name="" id="" cols="30" rows="7" class="form-control" placeholder="Message"></textarea>
              </div>
              <div class="form-group">
                <input type="submit" value="Send Message" class="btn btn-primary py-3 px-5">
              </div>
            </form>

          </div>

          <div class="col-md-6 d-flex">
          	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3689.963281862617!2d91.822712314362!3d22.355015246557063!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30acd95c9e7654b1%3A0xe74294564d792ccc!2sJumairah%20Raisa!5e0!3m2!1sen!2sbd!4v1623779971960!5m2!1sen!2sbd" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
          </div>
        </div>
      </div>
    </section>
@include('front.layouts.footer')
@include('front.layouts.footer_link')
