@include('admin/header')
@if(Session::has('alert'))
	<div class="alert alert-warning">
		{{Session('alert')}}
	</div>
@endif
<h4>Bài đăng</h4>
<a href="{{URL::asset('admin/addpost')}}">
	<button class="btn btn-info">Viết bài</button>
</a>

<div class="container">
	@if(count($datas)>0)
		<table class="table">
			<tr>
				<td>Avatar</td>
				<td>Name</td>
				<td>Người đăng</td>
				<td>Thời gian đăng</td>
				<td></td>
			</tr>
			@foreach($datas as $data)
				<tr>
					<td>
						<img src="{{URL::asset('/images/post/'.$data->avatar)}}" width="80px">
					</td>
					<td>{{ substr($data->name,0,50) }}</td>
					<td>{{App\Models\User::find($data->user_id)->name}}</td>
					<td>{{$data->updated_at}}</td>
					<td>
						<button class="btn btn-light border"><i class="far fa-eye"></i></button>
						<button class="btn btn-success"><i class="far fa-edit"></i></button>
						<button class="btn btn-danger"><i class="fas fa-times"></i></button>
					</td>

				</tr>
			@endforeach
		</table>
	@endif
</div>
@include('admin/footer')