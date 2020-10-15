$('.xemthemproduct .content .img').zoom();
$('.xemthemproduct .close-out').on('click', function(){
	$('.xemthemproduct').hide();
})
//  nut eye xem them sp
$('.eye').on('click', function(){
	$('.xemthemproduct').show();
		var id = $(this).attr('id');
		id = id.split('_');
		$('.xemthemproduct .content .img img').attr('src',$('#'+id['1']+' .card-border .avatar img').attr('src'));
		$('.xemthemproduct .content .intro').html($('#'+id['1']+' .card-border .content .thongtinthem').val());
		$('.xemthemproduct .content .img').zoom();
})
