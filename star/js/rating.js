$(function() {
	// rating form hide/show
 	$( "#rateProduct" ).click(function() {
 		
			$("#ratingSection").show();	
			$("#ratingDetails").hide();
			
		
	});	

	$( "#cancelReview" ).click(function() {
		$("#ratingSection").hide();
		$("#ratingDetails").show();		
	});	
	// implement start rating select/deselect
	$( ".rateButton" ).click(function() {
		if($(this).hasClass('btn-grey')) {			
			$(this).removeClass('btn-grey btn-default').addClass('btn-warning star-selected');
			$(this).prevAll('.rateButton').removeClass('btn-grey btn-default').addClass('btn-warning star-selected');
			$(this).nextAll('.rateButton').removeClass('btn-warning star-selected').addClass('btn-grey btn-default');			
		} else {						
			$(this).nextAll('.rateButton').removeClass('btn-warning star-selected').addClass('btn-grey btn-default');
		}
		$("#rating").val($('.star-selected').length);		
	});
	// save review using Ajax
	$('#ratingForm').on('submit', function(event){
		event.preventDefault();
		var formData = $(this).serialize();
		// alert('hello');
		$.ajax({
			// alert('hello');
			type : 'POST',
			dataType: "json",	
			url : 'action.php',					
			data : formData,
			success:function(response){
				// if(response.success == 1) {
					$("#ratingForm")[0].reset();
					window.location.reload();
				// }
			}
		});		
	});
});