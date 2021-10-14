<?php
  /**
  * Requires the "PHP Email Form" library
  * The "PHP Email Form" library is available only in the pro version of the template
  * The library should be uploaded to: vendor/php-email-form/php-email-form.php
  * For more info and help: https://bootstrapmade.com/php-email-form/
  */

  // Replace contact@example.com with your real receiving email address


  if (empty($_POST['recaptcha'])) {
	exit('Please set recaptcha variable '. print_r($_POST));
}
// validate recaptcha
$response = $_POST['recaptcha'];
$post = http_build_query(
 	array (
 		'response' => $response,
 		//'secret' => '6LdBac4cAAAAABO_nymVeYO_MBvj2HKzShpwC3fh',
         'secret' => '6LdBac4cAAAAAFhp1yD7qtR1pDSn3ajVDMJBipLb',
 		'remoteip' => $_SERVER['REMOTE_ADDR']
 	)
);
$opts = array('http' =>
	array (
		'method' => 'POST',
		'header' => 'application/x-www-form-urlencoded',
		'content' => $post
	)
);
$context = stream_context_create($opts);
$serverResponse = @file_get_contents('https://www.google.com/recaptcha/api/siteverify', false, $context);
if (!$serverResponse) {
	exit('Failed to validate Recaptcha');
}
$result = json_decode($serverResponse);
if (!$result -> success) {
	exit('Invalid Recaptcha');
}
else {

   // Send mail code here

  $receiving_email_address = 'master@buddha.net.ua';


  /*
  if( file_exists($php_email_form = '../assets/vendor/php-email-form/php-email-form.php' )) {
    include( $php_email_form );
  } else {
    die( 'Unable to load the "PHP Email Form" Library!');
  }

  $contact = new PHP_Email_Form;
  $contact->ajax = true;
*/


if(isset($_POST['email']))
{

$to = $receiving_email_address;
$subject = "From fotomarko.de website";

$message = "
<html>
<head>
<title>Свяжитесь с клиентом сайта</title>
</head>
<body>
<p>Данные для связи:</p>
<table>
<tr>
<th>Nahme</th>
<th>Email</th>
</tr>
<tr>
<td>".$_POST['name']."</td>
<td>".$_POST['email']."</td>
</tr>
</table><HR> Subject:<BR/> ".$_POST['subject']."<br/>SMS: <BR />".$_POST['message']."
</body>
</html>
";

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From: <www-data@fotomarko.de>' . "\r\n";
$headers .= 'Cc: master@buddha.net.ua' . "\r\n";

if (mail($to,$subject,$message,$headers)){
    header("Refresh:0; url=https://fotomarko.de");
 }
 else {exit("Kein E-mail versendet!";}
}
else {
//    @header("Refresh:3; url=https://fotomarko.de");
exit('E-mail würde versendet! Danke');
}

}
?>
