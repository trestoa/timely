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

var year = $('#calender-year').val();
var calender_id = $('#calender-id').val();

//on load, listen to the appointments
$('#prev_year').click(function(){
	changeYear('back');
});

$('#next_year').click(function(){
	changeYear('forward');
});

function handleResponse(data){
	if(data == 'error'){
		$('#javascript-alert-area').append('<div class="alert alert-error"><button type="button" class="close" data-dismiss="alert">&times;</button><p><strong>Ooops,</strong> something wnt wrong. Please try again by reloading this site.</p></div>');
	}
	//Listen to the new elements
	$("#calender-content").html(data);
	$('#prev_year').click(function(){
		changeYear('back')
	});

	$('#next_year').click(function(){
		changeYear('forward')
	});
	year = $('#calender-year').val();
}

function changeMonth(month){
	$.ajax({
		url: location.href.substring(0,location.href.lastIndexOf('/')+1) + "template/render_public_calender.php",
		dataType: "html",
		data: {
			'month': month,
			'year': year,
			'view_public': calender_id
		},
		success: handleResponse
	});
}

function changeYear(direction){
	var newYear = (direction == 'forward' ? Number(year)+1 : Number(year)-1);
	var month = $('#calender-month').val();
	$.ajax({
		url: location.href.substring(0,location.href.lastIndexOf('/')+1) + "template/render_public_calender.php",
		dataType: "html",
		data: {
			'month': month,
			'year': newYear,
			'view_public': calender_id
		},
		success: handleResponse
	});
}