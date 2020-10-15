<script type="text/javascript" src="{{asset('/js/jquery.min.351.js')}}"></script>
<link rel="stylesheet" type="text/css" href="{{asset('/css/bootstrap4/css/bootstrap.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('/css/style.css')}}">
<script type="text/javascript" src="{{asset('/css/bootstrap4/js/bootstrap.min.js')}}"></script>
<link rel="stylesheet" type="text/css" href="{{asset('/font/fontawesome-free-5.14.0/css/all.css')}}">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<form method="post" action="postforgotpassword">
@csrf
<div class="loginpage col-md-3 col-12 text-center py-5 px-2 bg-light border">
	<img src="{{asset('/images/system/logo-new.png')}}" style="width:50%"><br>
	<p>Điền Email cần lấy lại mật khẩu</p>
	<input type="text" name="email" class="btn border btn-light py-3 col-12" autocomplete="off">
	<input type="submit" class="btn border btn-dark mt-1 py-3 col-12" value="LẤY MẬT KHẨU">
	<p>
		@if(session('aa'))
			@if(session('aa')==1)
				<span class="text-success">
					Chúng tôi đã gửi liên kết thay đổi mật khẩu xác thực đến email của bạn.
				</span>
			@else
				<span class="text-danger">
					Email này không tòn tại trong hệ thống.
				</span>
			@endif

		@endif
	</p>
</div>
</form>
