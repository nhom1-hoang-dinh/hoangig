@if(Session::has('alert'))
	<div class="alert alert-success mt-2">
		{{Session('alert')}}
	</div>
		

@endif
@include('home/header')

<div class="col-12 slideshowindex bg-dark px-0" >
	<div class="item col-12" style="display: block;">
		<div class="row">
			<div class="content">
				<div>
					<p>
						Feature fashion
					</p>
				</div>
				<div>
					<p>
						Summer
					</p>
				</div>
				<div>Hoodie</div>
			</div>
			<div class="col-12 col-md-6 image">
				<img src="{{asset('/images/system/slide-home1.png')}}">
				<div class="background"></div>
			</div>
		</div>
	</div>

	<div class="item col-12">
		<div class="row">
			<div class="content">
				<div>
					<p>
						Feature fashion
					</p>
				</div>
				<div>
					<p>
						Summer1
					</p>
				</div>
				<div>Sweater</div>
			</div>
			<div class="col-12 col-md-6 image">
				<img src="{{asset('/images/system/slide-home2.png')}}">
				<div class="background"></div>
			</div>
		</div>
	</div>

	<div class="item col-12">
		<div class="row">
			<div class="content">
				<div>
					<p>
						Feature fashion
					</p>
				</div>
				<div>
					<p>
						Summer2
					</p>
				</div>
				<div>T-Shirt</div>
			</div>
			<div class="col-12 col-md-6 image">
				<img src="{{asset('/images/system/slide-home3.png')}}">
				<div class="background"></div>
			</div>
		</div>
	</div>
	<div class="next">
		<i class="fas fa-chevron-right"></i>
	</div>
	<div class="prev">
		<i class="fas fa-chevron-left"></i>
	</div>
</div>

<div class="bannercon container mx-auto my-md-5 my-1">
	<div class="row">
		<div class="col-md-8 col-12">
			<div class="row">
				<div class="col-md-6 col-12 px-md-1 px-0">
					<div class="bg-danger mb-1 banner1" >
						<div class="content">
							<div class="label">PRODUCT & Trending</div>
							<div class="title">FALt</div>
							<div class="title">trending</div>
							<div class="title">everything</div>
						</div>
					</div>
					<div class="bg-danger banner2 mb-1">
						<div class="content">
							<div class="label">NEW ARRIVALS</div>
							<div class="title">street</div>
							<div class="title">INSPIRATION</div>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-12 px-md-1 px-0 mb-1">
					<div class="bg-info banner3">
						<div class="content">
							<div class="label">WEEKLY EDIT</div>
							<div class="title" style="font-size: 2em">SMART STYLE</div>
							<button>Shop now <i class="fas fa-arrow-right ml-2"></i></button>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-4 col-12 px-0">
			<div class="bg-danger banner4">
				<div class="content">
					<div class="label">OUR OFFERS</div>
					<div class="title " style="font-size: 2em">TOP BRANDS</div>
					<button>Shop now <i class="fas fa-arrow-right ml-2"></i></button>

				</div>
			</div>
		</div>
	</div>
</div>
<!-- Ds 4 sp ban chay nhat trong thang -->
<div class="col-12 text-center my-5 titleweb">
	<h4 class="pt-3"><b>TOP ARRIVALS</b></h4>
</div>
<div class="container pb-5">
	<div class="row px-0">
		@foreach($topproduct as $value)
			<div class="col-md-3 col-12 card-product" id="top{{$value['id']}}">
					<div class="card-border">
						<div class="avatar">
							<a href="{{URL::asset('product/'.$value['id'])}}">
								<img src="{{URL::asset('/images/product')}}/{{App\Models\Imageproduct::where('id_product', $value['id'])->where('avatar', '1')->first()->name_image}}">
							</a>
							<div class="addcard" id="add_top{{$value['id']}}">thêm vào giỏ</div>
						</div>
						<div class="content">
							<div class="col-12 content-border">
								<div class="row">
									<div class="status col">Out Of Stock</div>
									<div class="icon-menu col">
										<i class="far fa-eye eye" id="eye_top{{$value['id']}}"></i>
									</div>
								</div>
							</div>
							<div class="name"><a href="{{URL::asset('product/'.$value['id'])}}"  class="text-dark">{{$value['name_product']}}</a></div>
							<div class="type">{{ App\Models\Product::find($value['id'])->typeproduct->name_type }}</div>
							<div class="price">
								{{number_format($value['price'])}} VND
								<input type="hidden" class="price_ajax" value="{{$value['price']}}">
							</div>
							<input type="hidden" class="thongtinthem" value="{{$value['content']}}">
						</div>
					</div>
			</div>
		@endforeach
	</div>
</div>


<!-- banner video -->
<div class="col-12 bannervideo bg-danger">
	<div class="row">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-12 content">
				<p>SUMMER EXCLUSIVE COLLECTION</p>
				<p>STREET</p>
				<p>TRENDING 2019</p>
			</div>
			<div class="col-md-4 col-12 icon text-right">
				<i class="far fa-play-circle watchvideo"></i>
				<span>WATCH VIDEO</span>
			</div>
			</div>
		</div>
	</div>
</div>
<div class="col-12 bg-xam py-5 mb-5 borderstylebottom text-light introindex">
	<div class="row">
		<div class="container">
			<div class="row">
				<div class="col-md-3 col-12 item">
					<i class="fas fa-truck"></i>
					<div class="content">
						<p>FREE DELIVERY</p>
						<p>Free shipping worldwide</p>
					</div>
				</div>

				<div class="col-md-3 col-12 item">
					<i class="fas fa-dollar-sign"></i>
					<div class="content">
						<p>MONEY BACK</p>
						<p>Refund in 30 days</p>
					</div>
				</div>

				<div class="col-md-3 col-12 item">
					<i class="fas fa-anchor"></i>
					<div class="content">
						<p>SECURE PAYMENT</p>
						<p>No transaction fees</p>
					</div>
				</div>

				<div class="col-md-3 col-12 item">
					<i class="fas fa-shopping-basket pr-0"></i>
					<sup style="font-size:0.3em"  style="transform: translate(-50px,0px);"><i class="fas fa-percent pl-0"></i></sup>
					<div class="content">
						<p>MEMBER DISCOUNT</p>
						<p>Free deals everyweek</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- Ds 4 sp ban chay nhat trong thang -->
<div class="col-12 text-center my-5 titleweb">
	<h4 class="pt-3"><b>NEW ARRIVALS</b></h4>
</div>
<div class="container pb-5">
	<div class="row px-0">
	@foreach($newproduct as $value)
			<div class="col-md-3 col-12 card-product" id="new{{$value['id']}}">
					<div class="card-border">
						<div class="avatar">
							<a href="{{URL::asset('product/'.$value['id'])}}">
								<img src="{{URL::asset('/images/product')}}/{{App\Models\Imageproduct::where('id_product', $value['id'])->where('avatar', '1')->first()->name_image}}">
							</a>
							<div class="addcard" id="add_new{{$value['id']}}">thêm vào giỏ</div>
						</div>
						<div class="content">
							<div class="col-12 content-border">
								<div class="row">
									<div class="status col">Out Of Stock</div>
									<div class="icon-menu col">
										<i class="far fa-eye eye" id="eye_top{{$value['id']}}"></i>
									</div>
								</div>
							</div>
							<div class="name"><a href="{{URL::asset('product/'.$value['id'])}}"  class="text-dark">{{$value['name_product']}}</a></div>
							<div class="type">{{ App\Models\Product::find($value['id'])->typeproduct->name_type }}</div>
							<div class="price">
								{{number_format($value['price'])}} VND
								<input type="hidden" class="price_ajax" value="{{$value['price']}}">
							</div>
							<input type="hidden" class="thongtinthem" value="{{$value['content']}}">
						</div>
					</div>
			</div>
		@endforeach
	</div>
</div>

<DIV class="col-12">
	<div class="row">
		<div class="col-md-6 col-12 px-0">
			<img src="{{asset('/images/system/123.jpg')}}" width="100%">
		</div>
		<div class="col-md-6 col-12 px-0">
			<img src="{{asset('/images/system/1234.jpg')}}" width="100%">
		</div>
	</div>
</DIV>

<!--  blog  -->
<div class="col-12 text-center my-5 titleweb">
	<h4 class="pt-3"><b>NEW BLOG</b></h4>
</div>
<div class="container pb-5">
	<div class="row">
		@if(count($posts)>0)
		@foreach($posts as $post)
			<div class="col-md-4 col-12 card-blog">
				<div class="border-blog">
					<div class="img">
						<a href="{{URL::asset('intoblog/'.$post->id)}}">
							<img src="{{asset('/images/post/'.$post->avatar)}}">
						</a>
					</div>
					<div class="content">
						<div class="intro">
							In <span>{{App\Models\Typepost::find($post->typepost_id)->name}}</span> Posted by <span>{{App\Models\User::find($post->user_id)->name}}</span>
						</div>
						<div class="name text-uppercase">
							<a href="{{URL::asset('intoblog/'.$post->id)}}" class=" hovercolorred">
								{{$post->name}}
							</a>
						</div>
					</div>
					<div class="datepost">{{$post->updated_at}}</div>	
				</div>
			</div>
		@endforeach
		@endif
	
	</div>
</div>
<!-- banner cmt -->
<div class="col-12 bannercmt borderstyletop py-5">
	<div class="container text-light text-center">
		<p><i class="fas fa-quote-left"></i></p>
		<div id="demo" class="carousel slide py-0 col-md-7 col-12 mx-auto" data-ride="carousel">
		  <div class="carousel-inner">
		    <div class="carousel-item active">
		      <div class="carousel-caption">
		        It is really amazing, this is the only favorite fashion store.
		        By <span>Thored Mast</span>
		      </div>   
		    </div>
		    <div class="carousel-item">
		      <div class="carousel-caption">
		        I love it, thank you for creating such a wonderful website.
		        By <span>Erik</span>
		      </div>   
		    </div>
		    <div class="carousel-item">
		      <div class="carousel-caption">
		        I am satisfied with the products purchased here, it's great, the staff is also very enthusiastic.
		        By <span>Hoa Eye</span>
		      </div>   
		    </div>
		  </div>
		 <div class="col-12 text-center">
		 	<a class="prev" href="#demo" data-slide="prev">
		 	  <span class="carousel-control-prev-icon"></span>
		 	</a>
		 	<a class="next" href="#demo" data-slide="next">
		 	  <span class="carousel-control-next-icon"></span>
		 	</a>
		 </div>
		</div>
	</div>
</div>

<div class="container px-md-0 px-3">
	<div class="link-out bg-white py-3">
		<div class="row">
		<div class="item col-md-2 col-6">
			<img src="{{asset('/images/system/link1.png')}}">
		</div>
		<div class="item col-md-2 col-6">
			<img src="{{asset('/images/system/link2.png')}}">
		</div>
		<div class="item col-md-2 col-6">
			<img src="{{asset('/images/system/link3.png')}}">
		</div>
		<div class="item col-md-2 col-6">
			<img src="{{asset('/images/system/link4.png')}}">
		</div>
		<div class="item col-md-2 col-6">
			<img src="{{asset('/images/system/link5.png')}}">
		</div>
		<div class="item col-md-2 col-6">
			<img src="{{asset('/images/system/link6.png')}}">
		</div>
	</div>
	</div>
</div>

<div class="col-12 text-center my-4">
	<h4 class="pt-3"><b>F0LLOW US FB</b></h4>
	<a href="https://www.facebook.com/profile.php?id=100009493618001" class="text-danger"><b>@ Hồ Viết Hoàng</b></a>
</div>


<!--  khu vực cho các tab bị ẩn -->
<div class="col-12 xemthemproduct px-0 bg-transparent">
	<div class="col-md-9 col-12 content">
		<div class="row">
			<div class="col-md-6 col-12 img px-0">
				<img src="{{asset('/images/product/8.jpg')}}">
			</div>
			<div class="col-md-6 col-12 intro">
			 <p>
			 	Embodying the raw, wayward spirit of rock ‘n’ roll, the Kilburn portable active stereo speaker takes the unmistakable look and sound of Marshall, unplugs the chords, and takes the show on the road.

			 	Weighing in under 7 pounds, the Kilburn is a lightweight piece of vintage styled engineering. Setting the bar as one of the loudest speakers in its class, the Kilburn is a compact, stout-hearted hero with a well-balanced audio which boasts a clear midrange and extended highs for a sound that is both articulate and pronounced. The analogue knobs allow you to fine tune the controls to your personal preferences while the guitar-influenced leather strap enables easy and stylish travel.	
			 </p>
			
			</div>
		</div>
		<div class="close-out">
			<i class="fas fa-times"></i>
		</div>
	</div>
</div>

<div class="col-12 showvideointro">
	<iframe width="560" height="315" src="https://www.youtube.com/embed/AXOfw9x-hVw" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

	<div class="close-out">
		<i class="fas fa-times"></i>
	</div>

</div>

<script type="text/javascript" src="{{asset('/js/slideindex.js')}}"></script>
<script type="text/javascript" src="{{asset('/js/trangchu.js')}}"></script>
<script type="text/javascript" src="{{asset('/js/jquery.zoom.js')}}"></script>
<script type="text/javascript" src="{{ URL::asset('/js/giohang.js') }}"></script>


@include('home/fooder')