
@include('admin/header')

<script src="{{asset('/ckeditor/ckeditor.js')}}"></script>

<h3>Thêm bài viết</h3>
<form method="post" enctype="multipart/form-data">
@csrf
<div class="col-12 addproduct mt-5">
	@foreach ($errors->all() as $error)
	   <div class="alert alert-warning mb-1">{{ $error }}</div>
	@endforeach
	<div class="row">
		<div class="col-9">
			<p>Tên bài viết</p>
			<input type="text" name="name" class="btn btn-light border col-12 text-left" autocomplete="off">

			<p>Giới thiệu</p>

			<textarea id="editor1" rows="10" cols="80" name="content">
            </textarea>
            

		</div>
		<div class="col-3">
			<div class="alert-success px-2 py-2">
				<p>Thể loại</p>
				<div class="col-12 border px-2 border-light pt-3">
					<?php $i=1; ?>
					@foreach($types as $type)
						@if($i==1)
							<p>
								<input type="radio" name="type" value="{{$type->id}}" checked> {{$type->name}} 
							</p>
						@else
							<p>
								<input type="radio" name="type" value="{{$type->id}}"> {{$type->name}} 
							</p>
						@endif
						<?php $i++; ?>
					@endforeach
				</div>
			</div>

			

			<div class="alert-success px-2 py-2 mt-2">
				<p>Avatar</p>
				<input name="file" size="141" type="file" id="inputalbum" onchange="loadFile(event)" accept=".jpg, .jpeg, .png" class="d-none">
				<a href="#" id="buttonthaythefile" class="btn text-success border shadow">Upload hình</a>
				<div class="col-12 border px-2 border-light pt-3 px-0" id="showhinh">
					<img src="{{asset('/images/system/no-image.png')}}" style="width:100%;margin:0">
				</div>
			</div>
			<div class="alert alert-success col-12">
						<button class="btn-success py-1 rounded border">Đăng bài</button>
				</div>
			</div>

		</div>
	</div>
</div>
</form>
<script>
CKEDITOR.replace( 'editor1' );

 var loadFile = function(event) {
   	$('#showhinh').html('<img src='+URL.createObjectURL(event.target.files['0'])+' class="col-4 mb-1 px-0">');
  };

  $('#buttonthaythefile').on('click', function(){
	$('#inputalbum').click();
})
</script>
@include('admin/footer') 

