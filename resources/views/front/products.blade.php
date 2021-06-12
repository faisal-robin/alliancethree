@include('front.layouts.header_link')
@include('front.layouts.header')
    <div class="hero-wrap hero-bread" style="background-image: url({{ asset('public/front_asset/images/bg_1.jpg')}});">
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
          	<p class="breadcrumbs"><span class="mr-2"><a href="index.php">Home</a></span> <span>Our Products</span></p>
            <h1 class="mb-0 bread">Our Products</h1>
          </div>
        </div>
      </div>
    </div>

     @foreach($brands as $brand)
    <section class="ftco-section">
    	<div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12 heading-section text-center ftco-animate text-center">
                    <span><img  style="height: 100px;" src="{{ url('storage/app/'.$brand->brand_image) }}"></span>
                    <span class="subheading">Featured Products</span>
                </div>
            </div>
    	</div>
        <div class="container">
            <div class="row justify-content-center">
                @foreach($brand->categories as $cat)
                    <div class="text-center ml-3">
                      <img  class="cat-icon cat-active" src="{{ url('storage/app/'.$cat->category_menu_image) }}">
                      <p>{{$cat->category_name}}</p>
                    </div>
                @endforeach()
            </div>
        </div>
    	<div class="container">
    		<div class="row">
                @foreach($brand->categories as $cat_product)
                        @foreach($cat_product->cat_products as $porduct)
                                <div class="col-md-6 col-lg-3 ftco-animate">
                                <div class="product">
                                    @foreach($porduct->product_images as $img)
                                        <a href="{{url('product-details/'.$porduct->slug)}}" class="img-prod"><img style="margin-left: 10%" class="img-fluid" src="{{ url('storage/app/'.$img->images_name) }}" alt="Product Image">
                                            <div class="overlay"></div>
                                        </a>
                                    @endforeach
                                    <div class="text py-3 pb-4 px-3 text-center">
                                        <h3><a href="#">{{$porduct->name}}</a></h3>
                                        <div class="bottom-area d-flex px-3">
                                            <div class="m-auto d-flex">
                                                <a href="{{url('product-details/'.$porduct->slug)}}" class="add-to-cart d-flex justify-content-center align-items-center text-center">
                                                    <span><i class="ion-ios-menu"></i></span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                @endforeach
    		</div>
    	</div>
    </section>
   @endforeach

@include('front.layouts.footer')
@include('front.layouts.footer_link')
