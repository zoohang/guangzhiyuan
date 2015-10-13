$(function() {
	$('.goods_one').each(function (index, domEle) {
		if((index + 1)%3 ==0){
			$(domEle).addClass('noright');
		}
	});
});
