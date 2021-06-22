@include('front.layouts.header_link')
@include('front.layouts.header')
    <div class="hero-wrap hero-bread" style="background-image: url({{ asset('public/front_asset/images/bg_1.jpg')}});">
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
{{--          	<p class="breadcrumbs"><span class="mr-2"><a href="index.php">Home</a></span> <span>About us</span></p>--}}
            <h1 class="mb-0 bread">Who We Are ?</h1>
          </div>
        </div>
      </div>
    </div>
    <section class="ftco-section ftco-no-pb ftco-no-pt bg-light">
			<div class="container">
				<div class="row">
					<div class="col-md-5 p-md-5 img img-2 d-flex justify-content-center align-items-center" style="background-image: url({{ asset('public/front_asset/images/category-1.jpg')}});">
					</div>
					<div class="col-md-7 py-5 wrap-about pb-md-5 ftco-animate">
                        <div class="heading-section-bold mb-4 mt-md-5">
                            <h2 class="mb-4">Who We Are ?</h2>
                        </div>
                        <div class="pb-md-5">
                            <p>{!! $company_info->about_us  !!}</p>
                        </div>
					</div>
				</div>
			</div>
    </section>

    <section class="ftco-section ftco-no-pb ftco-no-pt bg-light">
			<div class="container">
				<div class="row">
					<div class="col-md-7 py-5 wrap-about pb-md-5 ftco-animate">
                        <div class="heading-section-bold mb-4 mt-md-5">
                            <h2 class="mb-4">Our Mission</h2>
                        </div>
                        <div class="pb-md-5">
                            <p>{!! $company_info->our_mission  !!}</p>
                        </div>
					</div>
                    <div class="col-md-5 p-md-5 img img-2 d-flex justify-content-center align-items-center" style="background-image: url({{ asset('public/front_asset/images/category-1.jpg')}});">
					</div>
				</div>
			</div>
    </section>

    <section class="ftco-section ftco-no-pb ftco-no-pt bg-light">
			<div class="container">
				<div class="row">
					<div class="col-md-5 p-md-5 img img-2 d-flex justify-content-center align-items-center" style="background-image: url({{ asset('public/front_asset/images/category-1.jpg')}});">
					</div>
					<div class="col-md-7 py-5 wrap-about pb-md-5 ftco-animate">
                        <div class="heading-section-bold mb-4 mt-md-5">
                            <h2 class="mb-4">Our Vission</h2>
                        </div>
                        <div class="pb-md-5">
                            <p>{!! $company_info->our_vission  !!}</p>
                        </div>
					</div>
				</div>
			</div>
    </section>

@include('front.layouts.footer')
@include('front.layouts.footer_link')
