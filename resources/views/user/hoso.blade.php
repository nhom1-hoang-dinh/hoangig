@include('home/header')
<div class="col-12 bg-xam py-5 text-center borderstylebottom text-light ">
	<h3 class="text-uppercase px-md-5 px-0">Hồ sơ</h3>
	
</div>
<?php
		$errors = $errors->toArray();

?>





	<form method="POST">
		@csrf
<div class="container my-5">
	<div class="row">
		
			
			<div class="col-md-6 col-12 mx-auto">
				@if(Session::has('alert'))
					<div class="alert alert-success pb-3">
					{{ Session('alert') }}
					</div>
				@endif
				<h5>Thông tin phục vụ giao hàng</h5>
				<p>
					Địa chỉ (<small class="text-danger">Vui lòng nhập chính xác</small>) <br>
					<input type="text" name="address" placeholder="" class="btn border col-12 btn-light text-left px-3" autocomplete="off" value="{{ $info->address }}">
					@isset($errors['address'])
						<br><small class="text-danger">{{$errors['address']['0']}}</small>
					@endisset
				</p>
				<p>
					Số điện thoại liên lạc <br>
					<input type="text" name="phone" placeholder="" class="btn border col-12 btn-light text-left px-3" autocomplete="off" value="{{ $info->phone }}">
					@isset($errors['phone'])
						<br><small class="text-danger">{{$errors['phone']['0']}}</small>
					@endisset
				</p>
				<p>
					Ghi chú thêm (<small>Nếu có</small>)<br>
					<input type="text" name="note" placeholder="" class="btn border col-12 btn-light text-left px-3" autocomplete="off" value="{{ $info->note }}">
					@isset($errors['note'])
						<br><small class="text-danger">{{$errors['note']['0']}}</small>
					@endisset
				</p>
				
				<p>
					<button class="btn btn-danger px-3">CẬP NHẬT</button>
				</p>
			</div>
	
	</div>
</div>
	
</form>


@include('home/fooder')
