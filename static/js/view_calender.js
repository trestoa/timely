var editing = false;
var year = $('#calender-year').val();

function handleResponse(data){
	if(data == 'error'){
		$('#javascript-alert-area').append('<div class="alert alert-error"><button type="button" class="close" data-dismiss="alert">&times;</button><p><strong>Ooops,</strong> something wnt wrong. Please try again by reloading this site.</p></div>');
	}
	$("#calender-content").html(data);
	$('.appointment').focusin(handleAppointmentFocus);
	$('#prev_year').click(function(){
		changeYear('back')
	});

	$('#next_year').click(function(){
		changeYear('forward')
	});
	year = $('#calender-year').val();
}

$('.appointment').focusin(handleAppointmentFocus);

function handleAppointmentFocus(){
	if(!editing){
		$(this).children('textarea').removeAttr('readonly');
		$(this).children('textarea').height(35);
		$(this).append('<button class="btn btn-mini btn-primary calender-edit-done">Done</button>');
		$(".calender-edit-done").click(handleButtonClick);
		editing = true;
	}
	else if(!$(this).has('button').length){
		$('#javascript-alert-area').html('<div class="alert alert-error"><button type="button" class="close" data-dismiss="alert">&times;</button><p><strong>Ooops,</strong> please close the first edit-box before you open another one.</p></div>');
		$(this).children('textarea').blur();
	}
}

function handleSaveAppointmentResponse(data){
	if(data != 'success'){
		$('#javascript-alert-area').html('<div class="alert alert-error"><button type="button" class="close" data-dismiss="alert">&times;</button><p><strong>Ooops,</strong> something went wrong, please try again.</p></div>');
	}
}

function handleButtonClick(){
	$(this).parent().children('textarea').height('90%');
	var day = $(this).parent().children('.calender-day').val();
	var content = $(this).parent().children('textarea').val();
	$.ajax({
		url: location.href.substring(0,location.href.lastIndexOf('/')+1) + "action/set_appointment.php",
		dataType: "text",
		data: {
			'month': $('#calender-month').val(),
			'year': year,
			'day': day,
			'content': content
		},
		success: handleSaveAppointmentResponse
	});
	$(this).remove();
	editing = false
}

function changeMonth(month){
	if(!editing){
		$.ajax({
			url: location.href.substring(0,location.href.lastIndexOf('/')+1) + "template/render_calender.php",
			dataType: "html",
			data: {
				'month': month,
				'year': year
			},
			success: handleResponse
		});
	}
	else{
		$('#javascript-alert-area').html('<div class="alert alert-error"><button type="button" class="close" data-dismiss="alert">&times;</button><p><strong>Ooops,</strong> please save our appointment, before you change the month.</p></div>');
	}
}
$('#prev_year').click(function(){
	changeYear('back');
});

$('#next_year').click(function(){
	changeYear('forward');
});

function changeYear(direction){
	if(!editing){
		var newYear = (direction == 'forward' ? Number(year)+1 : Number(year)-1);
		var month = $('#calender-month').val();
		$.ajax({
			url: location.href.substring(0,location.href.lastIndexOf('/')+1) + "template/render_calender.php",
			dataType: "html",
			data: {
				'month': month,
				'year': newYear
			},
			success: handleResponse
		});
	}
	else{
		$('#javascript-alert-area').html('<div class="alert alert-error"><button type="button" class="close" data-dismiss="alert">&times;</button><p><strong>Ooops,</strong> please save our appointment, before you change the year.</p></div>');
	}
}