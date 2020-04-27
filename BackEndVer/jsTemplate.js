function menuResize(){
	$("#menu > ul > li").each(function(index){
		var menuHeight = $(this).height();
		var paraHeight = $(this).children("p").height();
		var margin = (menuHeight - paraHeight) / 2;
		$(this).children("p").css('margin-top',margin);
		$(this).children("p").css('padding-bottom',margin);
	});
	return;
}

window.onload = menuResize;