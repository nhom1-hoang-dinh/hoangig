
$(document).ready(function(){
	$('body').css('padding-top',$('.header').height()+'px');

	$(window).resize(function(){
			$('body').css('padding-top',$('.header').height()+'px');
	})

	$('.iconmenumobile').on('click',function(){
		if($('#navheadermobile').css('left')=='0px'){
			$('#navheadermobile').css('left','-100%');
			$('.closeul').css('left','-100%');
		}else{
			$('#navheadermobile').css('left','0px');
			$('.closeul').css('left','0');
		}
	})

	$('.closeul').on('click',function(){
		var i = 0;
		$('#navheadermobile li ul').each(function(){
			if($(this).css('left')=='0px'){
				i = 1;
			}
		})
		if(i == 0){
			$('.iconmenumobile').click();
		}

	})

	$('.buttonsearch').on('click', function(){
		$('#searchallmap').toggle();
	})

});



	



