var RC2KEY = '6LdBac4cAAAAABO_nymVeYO_MBvj2HKzShpwC3fh';

function send2AjaxRequest() {
	if (grecaptcha === undefined) {
		alert('Recaptcha not defined');
		return;
	}

	var response = grecaptcha.getResponse();
    console.log(response);
    var formData = {
        name: $("#name").val(),
        email: $("#email").val(),
        subject: $("#subject").val(),
        message: $("#message").val(),
        recaptcha: response,
      };


	if (!response) {
		alert('Kein Recaptcha Validation!');
		return;
	}

	var ajax = new XMLHttpRequest();
	ajax.onreadystatechange = function() {
		if (this.readyState === 4) {
			if (this.status === 200) {
				alert(this.responseText);
			}
		}
	}
	ajax.open('POST', 'forms/contact.php', true);
    ajax.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	ajax.send(formData);
    // 'recaptcha='+ response
}
