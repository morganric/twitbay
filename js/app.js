"use strict";


$("#loginSubmit").on('click', function(e) {

	// alert('click');
	e.preventDefault();

	console.log('logging in');

	var email = $("#emailInput").val();
	var password = $("#emailPassword").val();

	var data = {
		'email': email,
		'password': 'password1'
	};

	console.log(data);

	$.post( "/bootcamp/twitbay/login.php?email=" + email + "&password=password1", function( data ) {
  			console.log(data);

  			$('#loginModal').modal('hide');

	});

});