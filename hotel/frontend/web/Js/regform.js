$(function(){
	for (var i=1; i<=6;i++) {
		var code_room =$('<span></span>');
		code_room.addClass('code_room');
		if (reserved.indexOf(i)!=-1) {
			code_room.addClass('reserved');
		} else {
			code_room.on('click', function(){
			$('.active-code_room').removeClass('active-code_room');
			$(this).addClass('active-code_room');
			$('#application-code_room').val($(this).text());
			});
		}
		if (i<=3) {
			code_room.text(i);
			code_room.appendTo('#zapis');
		} else {
			code_room.text(i);
			code_room.appendTo('#places');
		}
	}
})
