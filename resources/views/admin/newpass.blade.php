<script type="text/javascript" src="{{asset('/js/jquery.min.351.js')}}"></script>
<link rel="stylesheet" type="text/css" href="{{asset('/css/bootstrap4/css/bootstrap.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('/css/style.css')}}">
<script type="text/javascript" src="{{asset('/css/bootstrap4/js/bootstrap.min.js')}}"></script>
<link rel="stylesheet" type="text/css" href="{{asset('/font/fontawesome-free-5.14.0/css/all.css')}}">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
@if(session('success'))
	<div class="col-md-3 loginpage  col-12 text-center py-5 px-2 bg-light border text-success">
		Thay đổi mật khẩu thành công, tiến đến đăng nhập <br>
		<a href="{{asset('login')}}">
			<button class="btn btn-dark">ĐĂNG NHẬP</button>
		</a>
	</div>

@else

@if($loi == 0)

	<form method="post" action="../postnewpassworfordemail">
	@csrf
	<div class="col-md-3 loginpage  col-12 text-center py-5 px-2 bg-light border">
		<img src="{{asset('/images/system/logo-new.png')}}" style="width:50%"><br>
		<p>
			<p><b>Nhập mật khẩu mới</b></p>
			<input type="password" name="password" class="btn border bg-light py-2">
		</p>
		<p>
			<p><b>Nhập lại mật khẩu</b></p>
			<input type="password" name="confirmPassword" class="btn border bg-light py-2">
		</p>
		<p>
			<input type="hidden" name="code" value="{{$code}}">
			<input type="hidden" name="id_user" value="{{$id_user}}">
			<button class="btn btn-dark py-2"> TẠO MẬT KHẨU MỚI</button>
		</p>
		<p>
			@foreach ($errors->all() as $error)
				<li>{{ $error }}</li>
			@endforeach
		</p>
	</div>
	</form>

@else
	<div class="col-md-3 loginpage  col-12 text-center py-5 px-2 bg-light border">
		<img src="{{asset('/images/system/logo-new.png')}}" style="width:50%"><br>
		<p class="text-danger">Đường dẩn này đã hết hạn sử dụng</p>
	</div>
@endif
@endif

