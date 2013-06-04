$(function() {

	$("#hycmad_cancel").click(function() {
		$("#hycmad_form").dialog('close');
	});

	$("#hycmad_submit").click(function() {

		if(!/\d{3}-\d{3}-\d{4}/.test($("#phone").val())) {
			$("#validation").html("Please provide a valid phone");
			return false;
		}
		
		if(!/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,4})$/.test($("#email").val())) {
			$("#validation").html("Please provide a valid email");
			return false;
		}
		
		

		$.post('hycmad_form_backend.php', $("#hycmad_form_element").serialize(), function(resp) {
			//$.mobile.changePage("#hycmad");
			$("#hycmad_form").dialog('close');
		}, "text");
	});

	
	$("#phone").blur(function() {
		console.log('blur');
		var node = $(this);
		var val = node.val();
		var newval;
		if(/\d{10}/.test(val)) {
			newval = val.substr(0,3)+ '-' + val.substr(3,3) + '-'+val.substr(6,4);	
			node.val(newval);
		}
		
	});


}); 