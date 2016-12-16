$(function () {
	$('#form').submit(function (event) {
		$.ajax({
			url: "https://formspree.io/ivanpopovych1988@gmail.com",
			method: "POST",
			data: {
				name: username.value,
				email: email.value,
				message: message.value
			},
			dataType: "json"
		}).done(function () {
			$("#username").val("");
			$("#email").val("");
			$("#message").val("");
			$('#container').html('<h1>Message send!</h1>');
		});
	
		event.preventDefault();
	});
});







