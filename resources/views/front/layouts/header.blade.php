 <div class="py-1 bg-primary">
    	<div class="container">
    		<div class="row no-gutters d-flex align-items-start align-items-center px-md-0">
	    		<div class="col-lg-12 d-block">
		    		<div class="row d-flex">
		    			<div class="col-md pr-4 d-flex topper align-items-center">
					    	<div class="icon mr-2 d-flex justify-content-center align-items-center"><span class="icon-phone2"></span></div>
						    <span class="text">{{$company_info->phone_1}}</span>
					    </div>
					    <div class="col-md pr-4 d-flex topper align-items-center">
                        </div>
					    <div class="col-md-5 pr-4 d-flex topper align-items-center text-lg-right">
						    <span class="text">{{$company_info->email}}</span>
					    </div>
				    </div>
			    </div>
		    </div>
		  </div>
    </div>
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="{{url('/')}}">
              <img class="float-left" style="height: 50px;" src="{{ asset('public/front_asset/images/logo-2.png')}}">
{{--              <img class="float-left" style="height: 50px;" src="{{ asset('public/front_asset/images/logo-3.png')}}">--}}
          </a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	          <li class="nav-item active"><a href="{{url('/')}}" class="nav-link">Home</a></li>
	          <li class="nav-item"><a href="{{url('about-us')}}" class="nav-link">About</a></li>
	          <li class="nav-item"><a href="{{url('product-list')}}" class="nav-link">Products</a></li>
              <li class="nav-item"><a href="{{url('contact')}}" class="nav-link">Contact</a></li>
	        </ul>
	      </div>
	    </div>
    </nav>
    <!-- END nav -->
