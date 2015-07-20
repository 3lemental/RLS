
<?php
 $val= $_POST['val'];
 $toemail='jdnunez@zoho.com'; // change this to your email id
 $name = $val['name'];
 $email = $val['email'];
 $msg = $val['msg'];

$subject = 'Subject';

$headers = "From: dan@reliablelawncut.com \r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

$message = "<b>Name :</b>".$name."<br>";
$message .='<b>Email :</b>'.$email."<br>";
$message .='<b>Message :</b>'.$msg;
mail($toemail, $subject, $message, $headers);

echo "Thanks for contacting us!";

?>
