@include('home/header')

<div class="col-12 bg-xam py-5 text-center borderstylebottom text-light ">
	<h3 class="text-uppercase px-md-5 px-0">
		Chi tiết đơn hàng
	</h3>
</div>

<div class="container my-5">
	<div class="col-12">
		<div class="row">
			<div class="col-md-6 col-12">
				<p>
					<b>Mã đơn:</b> {{$data->id}}
				</p>
				<p>
					<b>Ngày lập đơn đơn:</b> {{$data->created_at}}
				</p>
			</div>
			<div class="col-md-6 col-12 text-md-right text-left">
				<p>
					<b>Người mua:</b> {{app\Models\User::find($data->user_id)->name}}
				</p>
				<p>
					<b>Trạng thái:</b> 
					@if($data->status == 0)
						<span class="text-danger">Đang xử lý</span>
					@else
						<span class="text-success">Đã xử lý</span>
					@endif
				</p>
			</div>
			<div class="col-12 shopping">
				<table class="table">
						<tr>
						     <td>Avatar</td>
						     <td>Name</td>
						     <td class="d-md-block d-none">Size</td>
						     <td>Số lượng</td>
						     <td class="d-md-block d-none">Đơn giá</td>
						</tr>
						@foreach($dataintros as $value)
							<tr>
							     <td class="avatar">
							     	<a href="{{URL::asset('product/'.$value->product_id)}}">
							     		<img src="{{URL::asset('/images/product')}}/{{App\Models\Imageproduct::where('id_product', $value->product_id)->where('avatar', '1')->first()->name_image}}">
							     	</a>
							     </td>
							     <td>
							     	<a href="{{URL::asset('product/'.$value->product_id)}}" class="hovercolorred">
							     		{{ substr(App\Models\Product::find($value->product_id)->name_product,0,40) }}
							     	</a>							     	
							     </td>
							     <td  class="d-md-block d-none">
							     	<span class="btn btn-light">{{ App\Models\Sizeproduct::find($value->size)->name }}</span>
							     </td>
							     <td>
							     		<span class="btn btn-light">
							     			{{$value->count}}
							     		</span>
							     </td>
							     <td class="d-md-block d-none">
							     	<span class="btn btn-light">
							     			{{number_format($value->price)}} VND
							     		</span>
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
					<table class="table">
						<tr>
							<th>Ưu đãi</th>
							<td>:</td>
							<td>{{$data->sale}}</td>
						</tr>
						<tr>
							<th>Thành tiền</th>
							<td>:</td>
							<th><span class="text-danger"> {{number_format($data->lastprice)}} VND</span></th>
						</tr>
					</table>
			</div>
		</div>
	</div>
</div>

@include('home/fooder')