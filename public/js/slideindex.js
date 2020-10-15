$('.slideshowindex').mousemove(function(event){
	// alert(event.);
	var height = Number($('.slideshowindex').height());
	var width = Number($('.slideshowindex').width());
	var margin_top = Number($('.slideshowindex').offset().top);
	var animation_top = Math.ceil(((height/2)-(event.pageY-margin_top))/6);
	var animation_left = Math.ceil(((width/2)-(event.pageX))/10);

$('.slideshowindex .item .image .background').css('top',animation_top+'px');
$('.slideshowindex .item .image .background').css('left',animation_left+'px');
})

var i_slide = 2;
var count = $('.slideshowindex').children('.item').length;

function slideshow(){
	$('.slideshowindex .item').hide();
	$('.slideshowindex .item:nth-child('+i_slide+')').show();
	if(i_slide == count){
		i_slide = 1;
	}else{
		i_slide++;
	}
}
$('.slideshowindex .next').click(function(){
	slideshow();
})
$('.slideshowindex .prev').click(function(){
	i_slide = i_slide-2;
	if(i_slide<1){
		i_slide = count + i_slide;
	}
	slideshow();
})
setInterval(slideshow, 4500);

