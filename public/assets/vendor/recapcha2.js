var RC2KEY = '6LdBac4cAAAAABO_nymVeYO_MBvj2HKzShpwC3fh';

function send2AjaxRequest() {
	if (recaptcha === undefined) {
		alert('Recaptcha not defined');
		return;
	}

	var response = grecaptcha.getResponse();

	if (!response) {
		alert('Coud not get recaptcha response');
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
	ajax.send('recaptcha='+ response);
}
