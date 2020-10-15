
@include('admin/header')

<script src="{{asset('/ckeditor/ckeditor.js')}}"></script>

<h3>Thêm sản phẩm</h3>
<form action="postaddproduct" method="post" enctype="multipart/form-data">
@csrf
<div class="col-12 addproduct mt-5">
	@foreach ($errors->all() as $error)
	   <div class="alert alert-warning mb-1">{{ $error }}</div>
	@endforeach
	<div class="row">
		<div class="col-9">
			<p>Tên sản phẩm</p>
			<input type="text" name="name" class="btn btn-light border col-12 text-left" autocomplete="off">

			<p>Giới thiệu</p>

			<textarea id="editor1" rows="10" cols="80" name="content">
            </textarea>
            <p class="mt-3 mb-1">Giá sản phẩm ( đơn vị VND)</p>
            <input type="number" name="price" class="col-12 btn btn-light text-left border" value="">

		</div>
		<div class="col-3">
			<div class="alert-success px-2 py-2">
				<p>Thể loại</p>
				<div class="col-12 border px-2 border-light pt-3">
					@foreach($types as $type)
						<p>
							<input type="checkbox" name="type" value="{{$type->id_type}}"> {{$type->name_type}} 
						</p>
					@endforeach
				</div>
			</div>

			<div class="alert-success px-2 py-2">
				<p>Số lượng</p>
				<div class="col-12 border px-2 border-light pt-3">
					@foreach($size as $value)
						<p>
							{{$value->name}} 
							<input type="number" name="size[]" value="0" class="btn border-success col-8 text-left float-right"> 
						</p>
					@endforeach
				</div>
			</div>

			<div class="alert-success px-2 py-2 mt-2">
				<p>Album hình ảnh</p>
				<input multiple="multiple" name="file[]" size="141" type="file" id="inputalbum" onchange="loadFile(event)" accept=".jpg, .jpeg, .png" class="d-none">
				<a href="#" id="buttonthaythefile" class="btn text-success border shadow">Upload hình</a>
				<div class="col-12 border px-2 border-light pt-3 px-0" id="showhinh">
					<img src="{{asset('/images/system/no-image.png')}}" style="width:100%;margin:0">
				</div>
			</div>
			<div class="alert alert-warning px-2 py-2 mt-2">
				<i class="fas fa-info-circle"></i>
				Nhấn vào một hình ảnh bất kì để đặt làm avatar
				<input type="hidden" name="avatar" id="avatar">
			</div>
			<div class="alert alert-success col-12">
						<button class="btn-light py-1 rounded border" formaction="postaddproduct/2">Lưu bản nháp</button>
						<button class="btn-success py-1 rounded border" formaction="postaddproduct/1">Đăng bài</button>
				</div>
			</div>

		</div>
	</div>
</div>
</form>
<script>
 var loadFile = function(event) {
   var chieudai = event.target.files.length;
   $('#showhinh').html('');
   $('#avatar').val('');
   for (var i = 0; i < chieudai; i++) {
   	$('#showhinh').append('<img src='+URL.createObjectURL(event.target.files[i])+' class="col-4 mb-1 px-0" id="'+i+'">');
   }
   $('#showhinh img').on('click',function(){
   		$('#showhinh img').css('border','0px solid red');
		$(this).css('border','2px solid #FF5733');
		$('#avatar').val($(this).attr('id'));
	})
  };

$('#buttonthaythefile').on('click', function(){
	$('#inputalbum').click();
})
CKEDITOR.replace( 'editor1' );
</script>
@include('admin/footer') 

