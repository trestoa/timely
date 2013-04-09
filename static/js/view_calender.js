//request the default calender on the pageload
$.ajax({
	url: window.location.protocol + '//' + window.location.hostname + "/action/getCalenderVal.php",
	dataType: "html",
	data: {
		default: true
	},
	success: handleResponse
});

function handleResponse(data){
	if(data == 'error'){
		$('#javascript-alert-area').html('<div class="alert alert-error"><p><strong>Ooops,</strong> something wnt wrong. Please try again by reloading this site.</p></div>');
	}
	$(".calender-content").html(data);
}