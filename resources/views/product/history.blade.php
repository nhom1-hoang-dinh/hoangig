@include('home/header')

<div class="col-12 bg-xam py-5 text-center borderstylebottom text-light ">
	<h3 class="text-uppercase px-md-5 px-0">
		Lịch sử giao dịch
	</h3>
</div>
<div class="container my-5">
	@if(Auth::check())
					<div class="progress">
					  <div class="progress-bar progress-bar-striped bg-warning" style="width:{{ (100/100)*(Auth::user()->point)  }}%"></div>
					</div>
					<p class="border-bottom border-light">
						<i>Điểm tích lủy: {{Auth::user()->point}} điểm.</i>
					</p>
	@endif

	@if(count($datas)>0)
	<?php $i = 1; ?>
		<table class="table history">
			<tr>
				<td>STT</td>
				<td>Mã đơn hàng</td>
				<td>Giá cuối</td>
				<td>Trạng thái</td>
				<td>Ngày lập đơn</td>
				<td>Ghi chú</td>
			</tr>
			@foreach($datas as $data)
			<tr>
				<td>{{$i++}}</td>
				<td>
					<a href="{{URL::asset('shopping/introhistory/'.$data->id)}}" class="btn btn-light">
						{{$data->id}}
					</a>
				</td>
				<td>
					<a href="{{URL::asset('shopping/introhistory/'.$data->id)}}" class="btn btn-light">
						{{number_format($data->lastprice)}} <span>VND</span>
					</a>
				</td>
				<td>
					<a href="{{URL::asset('shopping/introhistory/'.$data->id)}}" class="btn btn-light">
						{{$data->status == 0 ? 'Đang xử lý' : 'Đã xác nhận'}}
					</a>
				</td>
				<td>
					<a href="{{URL::asset('shopping/introhistory/'.$data->id)}}" class="btn btn-light">
						{{$data->created_at}}
					</a>
				</td>
				<td>
					<a href="{{URL::asset('shopping/introhistory/'.$data->id)}}" class="btn btn-light">
						{{$data->sale}}
					</a>
				</td>
			</tr>
			@endforeach
		</table>
	@else
	<div class="alert alert-warning">
		Bạn chưa có giao dịch nào
	</div>
	@endif

</div>


@include('home/fooder')