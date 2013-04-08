<script type="text/javascript">	
//request the default calender on the pageload
$.ajax({
	url: "<?php echo(MAIN_URL . "/action/getCalenderVal.php") ?>",
	dataType: "html",
	data: {
		default: true
	},
	success: handleResponse
});

function handleResponse(data){
	$(".calender-content").html(data);
}
</script>
<div class="calender-content">
</div>