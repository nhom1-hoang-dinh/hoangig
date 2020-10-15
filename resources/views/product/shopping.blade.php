@include('home/header')

<div class="col-12 bg-xam py-5 text-center borderstylebottom text-light ">
	<h3 class="text-uppercase px-md-5 px-0">Giỏ hàng</h3>
</div>
<div class="container my-md-5 mt-0 shopping">
	@if(Session::has('alert'))
	<div class="alert alert-success mt-2">
		{{Session('alert')}}
	</div>
		

@endif
	<div class="row">

		<div class="col-md-8 col-12">
			@if(count($data)>0)
				<form method="post" action="shopping/update">
					@csrf
					<table class="table">
						<tr>
						     <td>Avatar</td>
						     <td>Name</td>
						     <td class="d-md-block d-none">Size</td>
						     <td>Số lượng</td>
						     <td class="d-md-block d-none">Giá</td>
						     <td></td>
						</tr>
						@foreach($data as $value)
							<tr>
							     <td class="avatar">
							     	<a href="{{URL::asset('product/'.$value->id)}}">
							     		<img src="{{URL::asset('/images/product')}}/{{App\Models\Imageproduct::where('id_product', $value->id)->where('avatar', '1')->first()->name_image}}">
							     	</a>
							     </td>
							     <td>
							     	<a href="{{URL::asset('product/'.$value->id)}}" class="hovercolorred">
							     		{{ substr($value->name,0,40) }}
							     	</a>

							     	<p class="d-md-none d-block">
							     		<small class="text-danger">{{ number_format($value->price) }} VND/sp</small><br>
							     		<small>Size: {{ App\Models\Sizeproduct::find($value->options->size)->name }}</small>
							     	</p>
							     	
							     </td>
							     <td  class="d-md-block d-none">
							     	<span class="btn btn-light">{{ App\Models\Sizeproduct::find($value->options->size)->name }}</span>
							     </td>
							     <td>
							     		<input type="number" min="1" value="{{ $value->qty }}" class="btn col-md-5 col-12 bg-light border" name="count[]">
							     </td>
							     <td class="d-md-block d-none">
							     	<span class="btn btn-light">
							     		{{ number_format(($value->price)*($value->qty)) }} <small>VND</small>
							     	</span>
							     </td>
							     <td>
							     	<a href="{{ URL::asset('shopping/remove/'.$value->rowId) }}">
							     		<i class="far fa-times-circle hovercolorred"></i>
							     	</a>
							     </td>
							</tr>
							@if($errors->has($value->rowId))
							<tr>
								<td colspan="4">
									<small class="text-danger"><i>
										{{ $errors->getBag('default')->first($value->rowId) }}
									</i></small>
								</td>
							</tr>
							@endif

						@endforeach
					</table>
					<button class="btn">Cập nhật</button>	
					<a href="{{ URL::asset('shopping/remove/all') }}" class="btn border">DỌN SẠCH</a>
				</form>
			@else
				<div class="alert alert-warning" role="alert">
				  Giỏ hàng của bạn đang trống
				</div>
			@endif
		</div>
		<div class="col-md-4 col-12 alert-light  py-3">
			@if(Auth::check())
				<div class="progress">
				  <div class="progress-bar progress-bar-striped bg-warning" style="width:{{ (100/100)*(Auth::user()->point)  }}%"></div>
				</div>
				<p class="border-bottom border-light">
					<i>Điểm tích lủy: {{Auth::user()->point}} điểm.</i>
				</p>
			@endif
			<h4 class="mb-4">Thanh toán</h4>
			<p>
				<b>Tổng số lượng: </b> <small>{{$count}} sản phẩm</small>
			</p>
			<p>
				<b>Tổng tiền: </b> <small>{{$sum}} VND</small>
			</p>
			<p>
				 <b>Transport fee:</b> <small>Free</small>
			</p>
			<p class="text-center mt-md-5 mt-3">
				<a href="{{ URL::asset('shopping/pay') }}"><button class="btn btn-danger col-9 mx-auto">THANH TOÁN</button></a>
				
			</p>
			<p class="alert-success px-2 py-2 alert">
				<small>
					Các đơn hàng trên 1.000.000 VND sẻ được cộng điểm theo công thức 1.000.000 = +1 điểm.
				</small>
			</p>
		</div>
	</div>
</div>
	
@include('home/fooder')