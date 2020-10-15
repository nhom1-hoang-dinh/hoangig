@include('home/header')

<div class="col-12 bg-xam py-5 text-center borderstylebottom text-light ">
	<h3 class="text-uppercase">SHOP</h3>
	<p>
		<ul class="ul-ngang opacity-07 text-light">
			<li class="px-2"><a href="" class="hovercolorred ">Home</a></li>
			<li class="px-2"><i class="fas fa-angle-right"></i></li>
			<li class="px-2"><a href="" class="hovercolorred ">Product</a></li>
		</ul>
	</p>
</div>
<div class="col-12 mb-5 mt-3 py-5">
	<div class="row">
		<div class="optionshirt col-md-3 col-12">
			<div class="px-5 py-4 px-0 text-center">
				<form method="get">
					<input type="text" id="searchname" class=" border bg-light py-2 pl-2 col-10" placeholder="Search..." style="border-radius:20px;padding-right:30px" name="name">
					<i class="fas fa-search" style="transform: translate(-30px,0);"></i>
				</form>
			</div>
			<div class="bg-white px-5 py-4 border">
				<p><b>PRODUCT CATEGORIES</b></p>
				<ul>
					
					@for ($i = 0 ; $i< count($types);$i++)
						@if($i==count($types)-1)
							<li class="py-2">
								<a href="{{URL::asset('listproduct')}}?type={{$types[$i]['id_type']}}" class="text-dark">
									{{$types[$i]['name_type']}}
								</a>
							</li>
						@else
							<li class="border-bottom py-2">
								<a href="{{URL::asset('listproduct')}}?type={{$types[$i]['id_type']}}" class="text-dark">
									{{$types[$i]['name_type']}}
								</a>
							</li>
						@endif
					@endfor
				</ul>
			</div>
			
		</div>


		<div class="showshirt col-md-9 col-12">
			@if(isset($name))
				<span class="py-2 px-2 alert alert-success ml-3">
					{{ $name }}
					<a href="{{URL::asset('listproduct')}}"><i class="fas fa-times text-dark ml-4 mr-2"></i></a>
				</span>
			@else
				@if(isset($typesearch))
					<span class="py-2 px-2 alert alert-success ml-3">
						{{ App\Models\Typeproduct::find($typesearch)->name_type }}
						<a href="{{URL::asset('listproduct')}}"><i class="fas fa-times text-dark ml-4 mr-2"></i></a>
					</span>
				@endif
			@endif
			<div class="col-12 ketqua">
				<div class="row px-0">
					@foreach($data as $value)
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
		</div>
	</div>
</div>


<!--  khu vuc noi dung an -->
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

<input type="hidden" id="typehidden">
<input type="hidden" id="pagehidden">
<input type="hidden" id="namehidden">
<input type="hidden" id="sizehidden">
<script type="text/javascript" src="{{asset('/js/jquery.zoom.js')}}"></script>
<script type="text/javascript" src="{{asset('/js/listproduct.js')}}"></script>
<script type="text/javascript" src="{{ URL::asset('/js/giohang.js') }}"></script>




@include('home/fooder')