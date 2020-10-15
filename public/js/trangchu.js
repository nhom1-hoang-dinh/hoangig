$(document).ready(function(){
	$(window).resize(function(){
			if($('body').width()<=600){
				$('.slideshowindex').css('height',window.innerHeight -$('.header').height()-$('#nav-icon-mobile').height()+'px');
			}else{
				$('.slideshowindex').css('height','480px');
			}
	})

	//  nut close xem them sp
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

	$('.xemthemproduct .content .img').zoom();
	$('.showvideointro .close-out').on('click', function(){
		$('.showvideointro').hide();
	})

	$('.watchvideo').on('click', function(){
		$('.showvideointro').show();
	})
});