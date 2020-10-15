@include('admin/header')
@if(Session::has('alert'))
	<div class="alert alert-warning">
		{{Session('alert')}}
	</div>
@endif

<h3>Sản phẩm</h3>
<a href="addproduct"><button class="btn btn-success">Thêm sản phẩm</button></a>

<table class="table mt-2 bg-white showlistproduct" style="color: #777">
  <thead class="">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Avatar</th>
      <th scope="col">Tên</th>
      <th scope="col">Người đăng</th>
      <th scope="col">Giá</th>
      <th scope="col">Trạng thái</th>
      <th scope="col">Option</th>
    </tr>
  </thead>
  <tbody>
   @if(count($data)>0)
   		@foreach ($data as $value)
   			   <tr>
   			     <td>
   			     	<input type="checkbox" name="">
   			     </td>
   			     <td class="avatar">
   			     	<img src="{{URL::asset('/images/product')}}/{{App\Models\Imageproduct::where('id_product', $value['id'])->where('avatar', '1')->first()->name_image}}">
   			     </td>
   			     <td>
   			     	@if(strlen($value->name_product)<50)
   			     		{{ $value->name_product }}
   			     	@else
   			     		{{ substr($value->name_product,0,50) }}...
   			     	@endif
   			     	<br>
   			     	<span style="font-size:0.7em;font-style:italic;opacity: 0.6">Sửa lần cuối : {{ $value->updated_at }}</span>
   			     </td>
   			     <td class="">
   			     	{{ App\Models\Product::find($value->id)->user->name }}
   			     </td>
   			     <td class="">{{ number_format($value->price) }} VND</td>
   			     <td>
   			     	@if($value->status=='1')
   			     		<span class="alert alert-success px-1 text-center py-0 rounded" style="font-size: 0.7em">Đã đăng</span>
   			     	@else
   			     		<span class="alert alert-warning px-1 text-center py-0 rounded" style="font-size: 0.7em">Bản nháp</span>
   			     	@endif 
   			     </td>
   			     <td>
   			     	<button class="btn btn-danger"><i class="far fa-edit"></i></button>
   			     	<button class="btn btn-success"><i class="far fa-trash-alt"></i></button>
   			     </td>
   				 </tr>
   		@endforeach
   @endif
  </tbody>
</table>

@include('admin/footer')