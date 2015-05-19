// globals
var page = "";
var clickedButton = "";
var whitepaper = "";

// if applicable, append the modal to the body
if ($('a[href="#leadGenModal"]').length) {
	$.get(templateDirectory + '/lead-gen-modal.html', function(result) {
		$('body').append(result);
	});
}

// if an on-page contact form is required, apply it
if ($('.inline-lead-gen-form').length) {
	console.log("no button");
	$.get(templateDirectory + '/lead-gen-form.html', function(result) {
		$('.inline-lead-gen-form').append(result);
	});
}

$('a[data-toggle]').click(function() {
	// prepare the appearance of the modal
    if ($(this).data("localpoint")){
    	$("#leadGenInputComments").attr("placeholder","How do you plan on using Localpoint?");
    }

	// get the target in case it's a whitepaper
	whitepaper = $(this).data("whitepaper");
	
	// if it is a whitepaper and they've already signed up, don't make them do it again
	if (whitepaper) {
		if (localStorage['registered']) {
			sendEmailSuccess();
		}
	}
	
	// find out what button on what page initiated the modal, so we know what the user wants
	page = window.location;
	clickedButton = $(this).text();
});

// the button to submit the lead-gen form is clicked
$(document).on("click", "#lead-gen-form-submit", function(){
	// hide the modal
	if ($('#leadGenModal')) {
		$('#leadGenModal').modal('hide');
	}
	
	// grab the info from the form, plus some situational awareness
	var payload =
		'Name: ' +
		$("#leadGenInputName").val() +
		'%0D%0A' +
		'Email: ' +
		$("#leadGenInputEmail").val() +
		'%0D%0A' +
		'Phone: ' +
		$("#leadGenInputPhone").val() +
		'%0D%0A' +
		'Company: ' +
		$("#leadGenInputCompany").val() +
		'%0D%0A' +
		'Title: ' +
		$("#leadGenInputTitle").val() +
		'%0D%0A' +
		'Comments: ' +
		$("#leadGenInputComments").val() +
		'%0D%0A' +
		'Page: ' +
		page +
		'%0D%0A' +
		'Clicked Button: ' +
		clickedButton;
		
		if (whitepaper) {
			payload = payload +
				'%0D%0A' +
				'Whitepaper: ' +
				whitepaper;
		}

	// send that data
	sendEmail(payload);

	return false;
});

function sendEmail(payload){
	// send it
	$.ajax({
		url: "http://digby.com/sendmail/",
		data: { mailMessage: payload }
	})
	.done(function(){
		sendEmailSuccess();
	})
	.fail(function(){
		if ($(".lead-gen-bar")) {
			$(".lead-gen-bar").addClass("failure");
		}
	});
}

function sendEmailSuccess(){
		// success -- format stuff appropriately
		if ($(".lead-gen-bar")) {
			$(".lead-gen-bar").addClass("success");
		}
		$("#lead-gen-form input,#lead-gen-form textarea").val('');
		// mark the user as having registered
		localStorage['registered'] = true;		
		// begin downloading, if applicable
		if (whitepaper){
			window.location.assign(whitepaper);
		}
}