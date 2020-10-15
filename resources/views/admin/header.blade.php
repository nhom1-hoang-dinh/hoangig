<script type="text/javascript" src="{{asset('/js/jquery.min.351.js')}}"></script>
<link rel="stylesheet" type="text/css" href="{{asset('/css/bootstrap4/css/bootstrap.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('/css/style.css')}}">
<script type="text/javascript" src="{{asset('/css/bootstrap4/js/bootstrap.min.js')}}"></script>
<link rel="stylesheet" type="text/css" href="{{asset('/font/fontawesome-free-5.14.0/css/all.css')}}">

<div class="col-12 admin">
	<div class="row">
		<div class="col-2 nav-left">
			<div class="row mt-3">
				<div class="col-6 logo">
					<img src="{{asset('/images/system/logo-new.png')}}">
				</div>
				<div class="col-6 user text-right">
					<ul class="float-right">
						<li><i class="fas fa-user"></i>
							<ul>
								<li>
									Hi {{$user->name}}
								</li>
								<li>
									<a href="@" class="text-light">Đăng xuất</a>
								</li>
							</ul>
						</li>
					</ul>
				</div>
				<div class="col-12 mt-5 nav-admin px-0">
					<h3 class="font-Roboto pl-3">Menu</h3>
					<ul>
						<li>
							<p><a href="">Tổng quan</a></p>
							<p>Cách nhìn tổng quan</p>
							<i class="fas fa-home"></i>
						</li>
						<li>
							<p><a href="{{URL::asset('admin/product')}}">Sản phẩm</a></p>
							<p>Danh sách sản phẩm</p>
							<i class="fas fa-tshirt"></i>
						</li>
						<li>
							<p><a href="{{URL::asset('/admin/post')}}">Bài viết</a></p>
							<p>Danh sách các bài viết</p>
							<i class="far fa-clone"></i>
						</li>
						<li>
							<p><a href="">Đơn hàng</a></p>
							<p>Danh sách các đơn hàng</p>
							<i class="fas fa-book"></i>
						</li>
						<li>
							<p><a href="">Tài khoản</a></p>
							<p>Danh sách người dùng</p>
							<i class="fas fa-user-ninja"></i>
						</li>
						<li>
							<p><a href="">Thống kê</a></p>
							<p>Thống kê doanh thu</p>
							<i class="fas fa-signal"></i>
						</li>

					</ul>
					<div class="col-12 text-center mt-4">
						<span class="alert-success px-3 py-1 rounded" style="font-size: 0.7em">Đăng xuất</span>
					</div>
				</div>
			</div>
		</div>
		<div class="col-10 content-right py-3">
			