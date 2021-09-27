<?php
  /**
  * Requires the "PHP Email Form" library
  * The "PHP Email Form" library is available only in the pro version of the template
  * The library should be uploaded to: vendor/php-email-form/php-email-form.php
  * For more info and help: https://bootstrapmade.com/php-email-form/
  */

  // Replace contact@example.com with your real receiving email address
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
 /* $contact->to = $receiving_email_address;
  $contact->from_name = $_POST['name'];
  $contact->from_email = $_POST['email'];
  $contact->subject = $_POST['subject'];

  // Uncomment below code if you want to use SMTP to send emails. You need to enter your correct SMTP credentials
  /*
  $contact->smtp = array(
    'host' => 'example.com',
    'username' => 'example',
    'password' => 'pass',
    'port' => '587'
  );


  $contact->add_message( $_POST['name'], 'From');
  $contact->add_message( $_POST['email'], 'Email');
  $contact->add_message( $_POST['message'], 'Message', 10);

  echo $contact->send(); */
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
<th>Имя</th>
<th>Фамилия</th>
</tr>
<tr>
<td>".$_POST['name']."</td>
<td>".$_POST['email']."</td>
</tr>
</table><HR> Заголовок:<BR/> ".$_POST['subject']."<br/>Месседж: <BR />".$_POST['message']."
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
 else {print "письмо не отослано, вернитесь назад <a href='https://fotomarko.de'></a>";}
}
else {@header("Refresh:3; url=https://fotomarko.de");}
?>
