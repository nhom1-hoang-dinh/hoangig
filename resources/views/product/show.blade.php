@include('home/header')

<div class="col-12 bg-xam py-5 text-center borderstylebottom text-light ">
	<h3 class="text-uppercase px-md-5 px-0">{{$data['name_product']}}</h3>
	<p>
		<ul class="ul-ngang opacity-07 text-light">
			<li class="px-2"><a href="{{asset('')}}" class="hovercolorred ">Home</a></li>
			<li class="px-2"><i class="fas fa-angle-right"></i></li>
			<li class="px-2"><a href="{{asset('listproduct')}}" class="hovercolorred ">Product</a></li>
			<li class="px-2"><i class="fas fa-angle-right"></i></li>
			<li class="px-2">
				<a href="{{URL::asset('/listproduct?type='.App\Models\Typeproduct::find($data->id_type)->id_type)}}" class="hovercolorred ">
					{{App\Models\Typeproduct::find($data->id_type)->name_type}}
				</a></li>
		</ul>
	</p>
</div>

<div class="container showproduct mt-5">
	<div class="row">
		<div class="col-md-6 col-12 left">
			<div class="row">
				<div class="img-show col-md-10 col-12 px-0">
					<img src="{{URL::asset('/images/product')}}/{{$avatar['name_image']}}">
				</div>
				<div class="col-md-2 col-12 img-list mt-md-0 mt-2 text-center pr-0">
					@foreach ($image as $value)
						<img src="{{URL::asset('/images/product')}}/{{$value['name_image']}}">
					@endforeach
				</div>
			</div>
		</div>
		<div class="col-md-6 col-12 right">
			<h4>{{$data['name_product']}}</h4>
			<h3  class="text-danger">{{number_format($data['price'])}} VND</h3>
			<p class="border-bottom pb-4 d-md-block d-none">
				<p>This is the Official Lebowski Bowling Shut the <b>{{$data['name_product']}}</b>, and this is a premium shirt, tank top, ladies, woman v-neck, long-sleeved tee, sweater, hoodie (printed in the US) For birthdays, Valentine's Day, Father's Day, Halloween, Thanksgiving or Christmas presents! Wonderful Valentine's day gift for your boyfriend.</p>
				Humorous and sarcastic sayings and quotes new graphic T-shirts make a great gift  Unique men's retirement,  dad, papa, grandfather or stepfather. A friend on birthday / Christmas.
			</p>
			<p class="border-bottom py-4">
				<form method="POST" action="../shopping/add">
					@csrf
					<select id="type" class="btn border bg-light col-2 py-3" id="size" name="size">
						@foreach($size as $value)
							<option value="{{$value['sizeproduct_id']}}">
								{{App\Models\Sizeproduct::find($value['sizeproduct_id'])->name}}
							</option>
						@endforeach
					</select>
					<input type="number" id="number" class="btn border bg-light col-3 py-3" value="1" min="1" name="count">
					<input type="hidden" name="id" value="{{ $data['id'] }}">
					<input type="hidden" name="name" value="{{ $data['name_product'] }}">
					<input type="hidden" name="price" value="{{ $data['price'] }}">
					<button class="btn border bg-dark text-light col-5 py-3">ADD TO CART</button>
				</form>
			</p>
			<p>
				<p>
					<i class="fas fa-tshirt"></i> <b>CATEGORY:</b> {{$type['name_type']}}
				</p>
				<p>
					<i class="fas fa-shipping-fast"></i> <b>Transport fee:</b> Free
				</p>
			</p>
		</div>
	</div>
</div>
<div class="col-12 mt-5 border-top border-bottom py-5">
	<div class="py-3 text-center">
		<h3>DESCRIPTION</h3>
		<div class="col-md-7 col-12 text-left mx-auto">
			{!! $data['content'] !!}
		</div>
	</div>
</div>
<div class="col-12 px-0">
	<div class="col-12 text-center my-5 titleweb">
		<h4 class="pt-3"><b>RELATED PRODUCTS</b></h4>
	</div>
	<div class="container pb-5">
	<div class="row px-0">
		@foreach($related as $value)
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



<!-- doan dk an -->

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

<script type="text/javascript" src="{{asset('/js/jquery.zoom.js')}}"></script>
<script type="text/javascript" src="{{asset('/js/showproduct.js')}}"></script>
<script type="text/javascript" src="{{ URL::asset('/js/giohangcap2.js') }}"></script>




@include('home/fooder')