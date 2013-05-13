/**********************************************************************

timely, a webbased calender
Copyright (C) 2013  Markus Klein <m@mklein.co.at>

This program is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 3 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program.  If not, see <http://www.gnu.org/licenses/>.


Made with <3

***********************************************************************/

var editing = false;
var editingField;
var year = $('#calender-year').val();

//on load, listen to the appointments
$('#prev_year').click(function(){
	changeYear('back');
});

$('#next_year').click(function(){
	changeYear('forward');
});

$('.appointment').focusin(appointmentFocusIn);

$('.appointment').focusout(function(){
	saveAppointment($(this));
});

$('.calender-select').change(calenderChanged);

function handleResponse(data){
	if(data == 'error'){
		$('#javascript-alert-area').append('<div class="alert alert-error"><button type="button" class="close" data-dismiss="alert">&times;</button><p><strong>Ooops,</strong> something wnt wrong. Please try again by reloading this site.</p></div>');
	}
	//Listen to the new elements
	$("#calender-content").html(data);
	$('.appointment').focusin(appointmentFocusIn);
	$('.appointment').focusout(saveAppointment);
	$('.calender-select').change(calenderChanged);
	$('#prev_year').click(function(){
		changeYear('back')
	});

	$('#next_year').click(function(){
		changeYear('forward')
	});
	year = $('#calender-year').val();
}

function appointmentFocusIn(){
	if(!editing){
		$(this).children('textarea').height(60);
		$(this).append('<button class="btn btn-mini btn-primary calender-edit-done">Done</button>');
		$(".calender-edit-done").click(function(){
			saveAppointment($(this).parent());
		});
		editing = true;
	}
}

function saveAppointment(e){
	e.children('textarea').height(85);
	var day = $(e).children('.calender-day').val();
	var content = $(e).children('textarea').val();
	$.ajax({
		url: location.href.substring(0,location.href.lastIndexOf('/')+1) + "action/set_appointment.php",
		dataType: "text",
		data: {
			'month': $('#calender-month').val(),
			'year': year,
			'day': day,
			'content': content,
			'type': (content == '' ? 'delete' : 'default')
		},
		success: function(data){
			if(data != 'success'){
				$('#javascript-alert-area').html('<div class="alert alert-error"><button type="button" class="close" data-dismiss="alert">&times;</button><p><strong>Ooops,</strong> something went wrong, please try again.</p></div>');
			}
		}
	});
	$(e).children('.calender-edit-done').remove();
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

function calenderChanged(){
	var newCalender = $('select option:selected').val();
	$.ajax({
		url: location.href.substring(0,location.href.lastIndexOf('/')+1) + "template/render_calender.php",
		dataType: "html",
		data: {
			'calender_id': newCalender
		},
		success: handleResponse
	});
}