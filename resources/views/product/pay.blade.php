@include('home/header')

<div class="col-12 bg-xam py-5 text-center borderstylebottom text-light ">
	<h3 class="text-uppercase px-md-5 px-0">Xác nhận đơn hàng</h3>
</div>
<div class="container my-md-5 mt-0 shopping">
	@if(Session::has('alert'))
	<div class="alert alert-success mt-2">
		{{Session('alert')}}
	</div>

@endif
</div>
<div class="container shopping my-5">
	<h5><i>Chỉ còn 1 bước để tiến hành thanh toán</i></h5>

	<div class="row">
		<div class="col-md-8 col-12">
				@if(count($data)>0)
						<table class="table">
							<tr>
							     <td>Avatar</td>
							     <td>Name</td>
							     <td class="d-md-block d-none">Size</td>
							     <td>Số lượng</td>
							     <td class="d-md-block d-none">Giá</td>
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
								     		<span class="btn btn-light">{{ $value->qty }}</span>
								     </td>
								     <td class="d-md-block d-none">
								     	<span class="btn btn-light">
								     		{{ number_format(($value->price)*($value->qty)) }} <small>VND</small>
								     	</span>
								     </td>
								     
								</tr>
							@endforeach
						</table>
						
				@else
					<div class="alert alert-warning" role="alert">
					  Giỏ hàng của bạn đang trống
					</div>
				@endif

			</div>

			<div class="col-md-4 col-12 alert-light  py-3">
				<h4 class="mb-4">Xác nhận đơn hàng</h4>
				<p>
					<b>Tổng số lượng: </b> <small>{{$count}} sản phẩm</small>
				</p>
				<p>
					<b>Tổng tiền: </b> <small>{{$sum}} VND</small>
				</p>
				<p>
					 <b>Transport fee:</b> <small>Free</small>
				</p>
				<p>
					 <b>Hình thức thanh toán:</b> <small>Thanh toán khi nhận hàng</small>
				</p>
				<p class="text-center mt-md-5 mt-3">
					<a href="{{ URL::asset('shopping/payfinish') }}"><button class="btn btn-danger col-9 mx-auto">XÁC NHẬN</button></a>
					
				</p>
			</div>
	</div>
</div>

@include('home/fooder')