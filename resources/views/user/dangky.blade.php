@include('home/header')
<div class="col-12 bg-xam py-5 text-center borderstylebottom text-light ">
	<h3 class="text-uppercase px-md-5 px-0">ĐĂng ký</h3>
	
</div>
<?php
		$errors = $errors->toArray();

?>


	<form method="POST">
		@csrf
<div class="container my-5">
	<div class="row">
	
			<div class="col-md-6 col-12">
				<h5>Thông tin đăng nhập</h5>
				<p>
					Họ và tên <br>
					<input type="text" name="name" placeholder="" class="btn border col-12 btn-light text-left px-3" autocomplete="off">
					@isset($errors['name'])
						<br><small class="text-danger">{{$errors['name']['0']}}</small>
					@endisset
				</p>
				<p>
					Email<br>
					<input type="text" name="email" placeholder="" class="btn border col-12 btn-light text-left px-3" autocomplete="off">
					@isset($errors['email'])
						<br><small class="text-danger">{{$errors['email']['0']}}</small>
					@endisset
				</p>
				<p>
					Mật khẩu <br>
					<input type="password" name="password" placeholder="" class="btn border col-12 btn-light text-left px-3" autocomplete="off">
					@isset($errors['password'])
						<br><small class="text-danger">{{$errors['password']['0']}}</small>
					@endisset
				</p>
				<p>
					Xác nhận mật khẩu<br>
					<input type="password" name="configpassword" placeholder="" class="btn border col-12 btn-light text-left px-3" autocomplete="off">
					@isset($errors['configpassword'])
						<br><small class="text-danger">{{$errors['configpassword']['0']}}</small>
					@endisset
				</p>
				
			</div>
			<div class="col-md-6 col-12">
				<h5>Thông tin phục vụ giao hàng</h5>
				<p>
					Địa chỉ (<small class="text-danger">Vui lòng nhập chính xác</small>) <br>
					<input type="text" name="address" placeholder="" class="btn border col-12 btn-light text-left px-3" autocomplete="off">
					@isset($errors['address'])
						<br><small class="text-danger">{{$errors['address']['0']}}</small>
					@endisset
				</p>
				<p>
					Số điện thoại liên lạc <br>
					<input type="text" name="phone" placeholder="" class="btn border col-12 btn-light text-left px-3" autocomplete="off">
					@isset($errors['phone'])
						<br><small class="text-danger">{{$errors['phone']['0']}}</small>
					@endisset
				</p>
				<p>
					Ghi chú thêm (<small>Nếu có</small>)<br>
					<input type="text" name="note" placeholder="" class="btn border col-12 btn-light text-left px-3" autocomplete="off">
					@isset($errors['note'])
						<br><small class="text-danger">{{$errors['note']['0']}}</small>
					@endisset
				</p>
				<p>
					<input type="checkbox" name="check"> Bạn chấp nhận với <a href="#">các điều khoản</a> của chúng tôi.
					@isset($errors['check'])
						<br><small class="text-danger">{{$errors['check']['0']}}</small>
					@endisset
				</p>
				<p>
					<button class="btn btn-danger px-3">ĐĂNG KÝ</button>
				</p>
			</div>
	
	</div>
</div>
	
</form>


@include('home/fooder')
