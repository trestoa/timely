//request the default calender on the pageload
/*$.ajax({
	url: window.location.protocol + '//' + window.location.hostname + "/action/getCalenderVal.php",
	dataType: "html",
	data: {
		default: true
	},
	success: handleResponse
});*/

var editing = false;

function handleResponse(data){
	if(data == 'error'){
		$('#javascript-alert-area').append('<div class="alert alert-error"><button type="button" class="close" data-dismiss="alert">&times;</button><p><strong>Ooops,</strong> something wnt wrong. Please try again by reloading this site.</p></div>');
	}
	$(".calender-content").html(data);
}

$('.appointment').focusin(function() {
	if(!editing){
		$(this).children('textarea').removeAttr('readonly');
		$(this).children('textarea').height('50%');
		$(this).append('<button class="btn btn-mini btn-primary calender-edit-done">Done</button>');
		$(".calender-edit-done").click(handleButtonClick);
		editing = true;
	}
	else if(!$(this).has('button').length){
		$('#javascript-alert-area').html('<div class="alert alert-error"><button type="button" class="close" data-dismiss="alert">&times;</button><p><strong>Ooops,</strong> please close the first edit-box before you open another one.</p></div>');
	}
});

function handleSaveAppointmentResponse(data){
	
}

function handleButtonClick(){
	$(this).parent().children('textarea').height('90%');
	$(this).parent().children('textarea').attr('readonly');
	var day = $(this).parent().children('.calender-day').val();
	var content = $(this).parent().children('textarea').val();
	$.ajax({
		url: location.href.substring(0,location.href.lastIndexOf('/')+1) + "setAppointment.php",
		dataType: "text",
		data: {
			'month': $('#calender-month').val(),
			'year': $('#calender-year').val(),
			'day': day,
			'content': content
		},
		success: handleSaveAppointmentResponse
	});
	$(this).remove();
	editing = false
}