$('.addcard').on('click', function(){
	var id = $(this).attr('id');
	id = id.split('_');
	id = id['1'];
	idnew = id.slice('3');
var name =  $('#'+id+' .content .name').text();
var price =  $('#'+id+' .content .price_ajax').val();

$('#themhangthanhcong').css('display','none');
$('#themhangthanhcong img').attr('src',$('#'+id+' .avatar img').attr('src'));
$('#themhangthanhcong .name').html(name + '<br><i>1 size M</i>');
	 $.ajaxSetup({
	             headers: {
	                 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
	             }
	         });
	 $.ajax({
               type:'POST',
               url:'../shopping/add',
               data:{
               	'id' : idnew,
               	'name' : name,
               	'price' : price,
               	'count' : '1',
               	'size' : '2'
               },
               success:function(data) {
                 $('.count_cart_index').html(Number($('.count_cart_index').html())+1);
                 $('#themhangthanhcong').show();
               }
            });

})