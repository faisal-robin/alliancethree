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
                    @if($brand->brand_name == 'Halda')
                    <span class="subheading">Welcome To Halda</span>
                    @endif
                </div>
            </div>
    	</div>
        <div class="container">
            <div class="row justify-content-center">
                @foreach($brand->categories as $key => $cat)
                    <div class="text-center ml-3">
                      <img id="category_{{$cat->id}}" style="cursor: pointer"  class="cat-icon @if($key == 0) cat-active @endif  category_id cat_hover cat_brand{{$cat->brand_id}}" data-brand="{{$cat->brand_id}}" data-id="{{$cat->id}}" src="{{ url('storage/app/'.$cat->category_menu_image) }}">
                      <p id="category_p{{$cat->id}}" style="cursor: pointer" class="@if($key == 0) color-active @endif cat_brandp{{$cat->brand_id}}">{{$cat->category_name}}</p>
                    </div>
                @endforeach()
            </div>
        </div>

        <div class="container">
            <div id="brand_id{{$brand->id}}">
                <div class="row">
                    @foreach($brand->categories as $key => $cat_product)
                        @if($key == 0)
                            @foreach($cat_product->cat_products as $porduct)
                                <div class="col-md-6 col-lg-3 ftco-animate">
                                <div class="product">
                                        <a href="{{url('product-details/'.$porduct->slug)}}" class="img-prod"><img style="margin-left: 10%" class="img-fluid" src="{{ url('storage/app/'.$porduct->product_images->first()->images_name) }}" alt="Product Image">
                                            <div class="overlay"></div>
                                        </a>
                                    <div class="text py-3 pb-4 px-3 text-center">
                                        <h3><a href="{{url('product-details/'.$porduct->slug)}}">{{$porduct->name}}</a></h3>
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
                        @endif
                    @endforeach
                </div>
            </div>
        </div>
    </section>
   @endforeach

@include('front.layouts.footer')
@include('front.layouts.footer_link')

<script>
    $('.category_id').click(function () {
        var category_id = $(this).data('id');
        var brand_id = $(this).data('brand');

        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token-home"]').attr('content')
            },
            type: "GET",
            url: "{{url("get_category_wise_product")}}",
            data: {category_id:category_id},
            cache: false,
            dataType: 'html',
            success: function (data, textStatus, jqXHR) {
                $('#brand_id'+brand_id).html(data);

                $('.cat_brand'+brand_id).removeClass('cat-active');
                $('#category_'+category_id).addClass('cat-active');

                $('.cat_brandp'+brand_id).removeClass('color-active');
                $('#category_p'+category_id).addClass('color-active');
            }
        });
    });
</script>
