$('#formlogin').submit(function (e) {
	var values = $(this).serialize();
	e.preventDefault();
	$.ajax({
		url: 'login.php',
		type: 'POST',
		data: values,
		success: function(data){
			window.location = data.callback_url + "?token=" + encodeURI(data.token);
		},
		error: function(){
			$('#alertlogin').show();
		}
	});
});