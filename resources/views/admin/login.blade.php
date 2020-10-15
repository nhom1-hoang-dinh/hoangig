<script type="text/javascript" src="{{asset('/js/jquery.min.351.js')}}"></script>
<link rel="stylesheet" type="text/css" href="{{asset('/css/bootstrap4/css/bootstrap.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('/css/style.css')}}">
<script type="text/javascript" src="{{asset('/css/bootstrap4/js/bootstrap.min.js')}}"></script>
<link rel="stylesheet" type="text/css" href="{{asset('/font/fontawesome-free-5.14.0/css/all.css')}}">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<form method="post" action="postlogin">
@csrf
<div class="loginpage col-md-3 col-12 text-center py-5 px-2 bg-light border">
	<img src="{{asset('/images/system/logo-new.png')}}" style="width:50%"><br>
	<div class="col-8 mt-5 text-left mx-auto px-0">
		<p class="my-1"><b>Name</b></p>
		<input type="text" name="name" class="col-12 text-left btn border" placeholder="Tên đăng nhập...">
	</div>
	<div class="col-8 mt-2 text-left mx-auto px-0">
		<p class="my-1"><b>Pasword</b></p>
		<input type="password" name="password" class="col-12 mb-1 text-left btn border" placeholder="Pasword..."><br>
		<input type="checkbox" name="checkbox"> Lưu mật khẩu.
	</div>
	<button class="btn btn-dark px-5 mt-5 col-8">LOGIN</button>
	<p>
		<a href="{{asset('/password/reset')}}">Quên mật khẩu</a>
	</p>
	 @if(Session::has('loi'))
 		<div class="alert alert-danger">{{ Session::get('loi') }}</div>
 	@endif

</div>
</form>
