<script type="text/javascript" src="{{asset('/js/jquery.min.351.js')}}"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<link rel="stylesheet" type="text/css" href="{{asset('/css/bootstrap4/css/bootstrap.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('/css/style.css')}}">
<script type="text/javascript" src="{{asset('/css/bootstrap4/js/bootstrap.min.js')}}"></script>
<link rel="stylesheet" type="text/css" href="{{asset('/font/fontawesome-free-5.14.0/css/all.css')}}">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="csrf-token" content="{{ csrf_token() }}">
 



<div class="col-12 d-md-none d-block">
	<ul id="navheadermobile">
		<li>
			<a href="{{URL::asset('/')}}" class="text-light">
				Trang chủ
			</a>
		</li>
		<li>Sản phẩm <span class="ml-1"><i class="fas fa-chevron-right"></i></span>
			<ul>
				<li>
					<a href="{{URL::asset('/listproduct?type=1')}}" class="text-light">
						Trendings Shirts
					</a>
				</li>
				<li>
					<a href="{{URL::asset('/listproduct?type=2')}}" class="text-light">
						Halloween Shirt
					</a>
				</li>
				<li>
					<a href="{{URL::asset('/listproduct?type=3')}}" class="text-light">
						Chritmas Shirt
					</a>
				</li>
			</ul>
		</li>
		<li>Blog<span class="ml-1"><i class="fas fa-chevron-right"></i></span>
			<ul>
				<li>
					<a href="{{URL::asset('/listpost?type=1')}}" class="text-light">
						Fashion
					</a>
				</li>
				<li>
					<a href="{{URL::asset('/listpost?type=2')}}" class="text-light">
						Healthy
					</a>
				</li>
			</ul>
		</li>
		<li>Page</li>
		<li>Hổ trợ</li>
		<li>Liên hệ</li>
	</ul>
</div>

<div class="closeul col-12 d-md-none d-flex"><i class="fas fa-chevron-left"></i></div>

<div class="col-12 d-md-none d-block" id="nav-icon-mobile">
	<div class="row">
		<div class="col border-right">
						
			  			@if(Auth::check())
			  				      <span><a href="{{URL::asset('shopping/history')}}"><i class="far fa-user text-light"></i></a></span>
			  			@else
			  				      <span><a href="{{URL::asset('login')}}"><i class="far fa-user text-light"></i></a></span>

			  			@endif
		</div>
		<div class="col border-right">
			<span><i class="fas fa-search buttonsearch"></i></span>
		</div>
		<div class="col">
			<a href="{{	URL::asset('shopping')}}">
			<span>
				<i class="fas fa-shopping-basket text-light"></i>
				<span class="count_cart_index ">{{  Cart::content()->sum('qty') }}</span>
			</span>
			</a>
		</div>
	</div>
</div>



<div class="col-12 header border-bottom">
	<div class="row">
		<div class="col-md-2 col-9 border-right logo py-2">
			<a href="{{URL::asset('/')}}">
				<img src="{{asset('/images/system/logo-new.png')}}">
			</a>
		</div>
		<div class="col-md-8 border-right nav-desktop d-md-flex d-none">
			<ul>
				<li id="home" class="text-danger">
					<a href="{{URL::asset('/')}}" class="text-danger">
						TRANG CHỦ
					</a>
				</li>
				<li>Sản phẩm <span class="ml-1"><i class="fas fa-chevron-down"></i></span>
					<ul>
						<li>
							<a href="{{URL::asset('/listproduct?type=1')}}" class="text-light">
								Trendings Shirts
							</a>
						</li>
						<li>
							<a href="{{URL::asset('/listproduct?type=2')}}" class="text-light">
								Halloween Shirt
							</a>
						</li>
						<li>
							<a href="{{URL::asset('/listproduct?type=3')}}" class="text-light">
								Chritmas Shirt
							</a>
						</li>
					</ul>
				</li>
				<li>Blog<span class="ml-1"><i class="fas fa-chevron-down"></i></span>
					<ul>
						<li>
							<a href="{{URL::asset('/listpost?type=1')}}" class="text-light">
								Fashion
							</a>
						</li>
						<li>
							<a href="{{URL::asset('/listpost?type=2')}}" class="text-light">
								Healthy
							</a>
						</li>
					</ul>
				</li>
				<li>Page</li>
				<li>Hổ trợ</li>
				<li>Liên hệ</li>
			</ul>
		</div>
		<div class="col-md-2 nav-icon d-md-flex d-none">
			<span><i class="fas fa-search buttonsearch"></i></span>
			
  			@if(Auth::check())
  					<span class=" dropdown-toggle" data-toggle="dropdown"><i class="far fa-user"></i></span>
  				    <div class="dropdown-menu">
  				      <a class="dropdown-item" href="{{URL::asset('shopping/history')}}">Lịch sử giao dịch</a>
  				      <a class="dropdown-item" href="{{URL::asset('user/hoso')}}">Chỉnh sửa hò sơ</a>
  				      <a class="dropdown-item" href="{{URL::asset('user/logout')}}">Đăng xuất</a>
  				    </div>
  			@else
  					<span class=" dropdown-toggle" data-toggle="dropdown"><i class="far fa-user"></i></span>
  				    <div class="dropdown-menu">
  				      <a class="dropdown-item" href="{{URL::asset('register')}}">Đăng ký</a>
  				      <a class="dropdown-item" href="{{URL::asset('login')}}">Đăng nhập</a>
  				    </div>
  			@endif
			
			<a href="{{	URL::asset('shopping')}}">
				<span>
					<i class="fas fa-shopping-basket text-dark"></i>
					<span class="count_cart_index">{{  Cart::content()->sum('qty') }}</span>
				</span>
			</a>
		</div>
		<div class="col-3 d-md-none d-flex text-center iconmenumobile">
			<i class="fas fa-bars"></i>
		</div>

			</div>
</div>

<div id="searchallmap" class=" px-5 py-5 text-center">
	<div class="content">
		<form method="get" action="{{URL::asset('listproduct')}}">
			@csrf
			<div class="row">
				<input type="text" name="name" placeholder="Tìm..." class="col-10" autocomplete="off">
				<button class="col-2 hovercolorred">
					<i class="fas fa-search"></i>
				</button>
			</div>

		</form>
		<i class="fas fa-times buttonsearch hovercolorred"></i>
	</div>
</div>


<script type="text/javascript" src="{{asset('/js/header.js')}}"></script>



