@include('front.layouts.header_link')
@include('front.layouts.header')
<div class="hero-wrap hero-bread" style="background-image: url({{ asset('public/front_asset/images/bg_1.jpg')}});">
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <h1 class="mb-0 bread">{{$product_info->name}}</h1>
          </div>
        </div>
      </div>
    </div>

    <section class="ftco-section">
    	<div class="container">
    		<div class="row">

    			<div class="col-lg-6 mb-5">
                    <div class="grid images_3_of_2">
					<div class="flexslider">

						<ul class="slides">
                            @foreach($product_info->product_images as $img)
                                <li data-thumb="{{ url('storage/app/'.$img->images_name) }}">
                                    <div class="thumb-image"> <img src="{{ url('storage/app/'.$img->images_name) }}" data-imagezoom="true" class="img-responsive"> </div>
                                </li>
                            @endforeach
						</ul>
						<div class="clearfix"></div>
					</div>
				</div>
                </div>

    			<div class="col-lg-6 product-details pl-md-5 ftco-animate">
    				<h1  class="product-name">{{$product_info->name}}</h1>
    				<p>{{$product_info->description}}</p>
          	<p><a href="{{url('product-quotation')}}" class="btn btn-primary py-3 px-5">Get Quote</a></p>
    			</div>
    		</div>
    	</div>
    </section>

    <section class="ftco-section">
    	<div class="container">
				<div class="row justify-content-center mb-3 pb-3">
          <div class="col-md-12 heading-section text-center ftco-animate">
          	<span class="subheading">Products</span>
            <h2 class="mb-4">Related Products</h2>
          </div>
        </div>
    	</div>
    	<div class="container">
    		<div class="row">
                @foreach($related_product as $product)
    			    <div class="col-md-6 col-lg-3 ftco-animate">
    				<div class="product">
                            <a href="{{url('product-details/'.$product->slug)}}" class="img-prod"><img style="margin-left: 10%" class="img-fluid" src="{{ url('storage/app/'.$product->product_images->first()->images_name) }}" alt="Product Image">
                                <div class="overlay"></div>
                            </a>
    					<div class="text py-3 pb-4 px-3 text-center">
    						<h3><a href="{{url('product-details/'.$product->slug)}}">{{$product->name}}</a></h3>
	    					<div class="bottom-area d-flex px-3">
                                <div class="m-auto d-flex">
                                    <a href="{{url('product-details/'.$product->slug)}}" class="add-to-cart d-flex justify-content-center align-items-center text-center">
                                        <span><i class="ion-ios-menu"></i></span>
                                    </a>
                                </div>
                            </div>
    					</div>
    				</div>
    			</div>
                @endforeach
    		</div>
    	</div>
    </section>
@include('front.layouts.footer')
@include('front.layouts.footer_link')
<link rel="stylesheet" href="{{ asset('public/front_asset/flexslider/flexslider.css') }}">
<script src="{{ asset('public/front_asset/flexslider/jquery.flexslider.js') }}"></script>
<script>
    // Can also be used with $(document).ready()
    $(window).load(function () {
        $('.flexslider').flexslider({
            animation: "slide",
            controlNav: "thumbnails"
        });
    });
</script>
