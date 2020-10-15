

<h4 style="background: #DAF7A6">Chúng tôi đã tiếp nhận đơn hàng của bạn	<br>
Cảm ơn bạn vì đã chọn chúng tôi!
</h4>
<div class="col-12">
			<table class="table" border="1">
				<tr>
				     <td>Name</td>
				     <td class="d-md-block d-none">Size</td>
				     <td>Số lượng</td>
				     <td class="d-md-block d-none">Giá</td>
				    
				</tr>
				@foreach($data as $value)
					<tr>
					     
					     <td>
					     	{{ substr($value->name,0,40) }}

					     	<p class="d-md-none d-block">
					     		<small class="text-danger">{{ number_format($value->price) }} VND/sp</small><br>
					     		<small>Size: {{ App\Models\Sizeproduct::find($value->options->size)->name }}</small>
					     	</p>
					     	
					     </td>
					     <td  class="d-md-block d-none">
					     	<span class="btn btn-light">{{ App\Models\Sizeproduct::find($value->options->size)->name }}</span>
					     </td>
					     <td>
					     		{{ $value->qty }}
					     </td>
					     <td class="d-md-block d-none">
					     	<span class="btn btn-light">
					     		{{ number_format(($value->price)*($value->qty)) }} <small>VND</small>
					     	</span>
					     </td>
					    
					</tr>
					

				@endforeach
			</table>
			

</div>

