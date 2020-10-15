@include('/home/header')

@if($nametype!='all')
	<div class="col-12 bg-xam py-5 text-center borderstylebottom text-light ">
		<h3 class="text-uppercase px-md-5 px-0">
			{{$nametype==null ? 'Không tìm ra danh mục' : $nametype->name}}
		</h3>
	</div>
@else
	<div class="col-12 bg-xam py-5 text-center borderstylebottom text-light ">
		<h3 class="text-uppercase px-md-5 px-0">
			ALL BLOG
		</h3>
	</div>
@endif
<div class="container my-5">
	<div class="row">
		<div class="col-md-8 col-12 px-0">
			@if(count($datas)>0)
				@foreach($datas as $data)
					<div class="col-12 mb-4">
						<a href="{{URL::asset('intoblog/'.$data->id)}}">
							<img src="{{asset('/images/post/'.$data->avatar)}}" width="100%">
						</a>
						<p class="mb-1 mt-2">
							<a href="{{URL::asset('intoblog/'.$data->id)}}" class="text-dark">
								<b class="hovercolorred">{{$data->name}}</b>
							</a>
						</p>
						<p class="bg-light px-2 pt-0 mt-0">
								In <span class="text-danger">{{App\Models\Typepost::find($data->typepost_id)->name}}</span> Posted by <span class="text-danger">{{App\Models\User::find($data->user_id)->name}}</span>
						</p>
						<p>
							{!!  substr($data->content,0,350) !!}...
						</p>
					</div>
				@endforeach
			@else
				<div class="alert alert-warning">Danh sách bài viết trống.</div>
			@endif
		</div>
		<div class="col-md-4 col-12">
			<div class="col-12 border-bottom py-3 border-top">
				<h4 class="mb-4">Danh mục</h4>
				@foreach($types as $type)
					<p class="my-2">
						<a href="{{URL::asset('/listpost?type='.$type->id)}}" class="text-dark">{{$type->name}}</a>
					</p>
				@endforeach
				<p class="my-2">
						<a href="{{URL::asset('/listpost')}}" class="text-dark">All</a>
					</p>
			</div>
			<div class="col-12 border-bottom pb-3 pt-3">
				<h4 class="mb-4">New blog</h4>
				@foreach($posts as $post)
					<div class="col-12 mb-3">
						<div class="row">
							<div class="col-5 px-0">
								<a href="{{URL::asset('intoblog/'.$post->id)}}"><img src="{{asset('/images/post/'.$post->avatar)}}" width="100%"></a>
							</div>
							<div class="col-7">
								<p class="my-0" style="font-size: 0.8em">
									<a href="{{URL::asset('intoblog/'.$post->id)}}" class="text-dark"><b class="hovercolorred">{{$post->name}}</b></a>
								</p>
								<p style="opacity: 0.7" class="my-0"><small>{{$post->updated_at}}</small></p>
							</div>
						</div>
					</div>
				@endforeach
			</div>
		</div>
	</div>
</div>


@include('/home/fooder')