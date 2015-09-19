<?php


$subject = "STI College Cubao Alumni";
$from = 'danieltinao@gmail.com';
$to =  $email;
echo $email;
$headers = "From: " . strip_tags($from) . "\r\n";
$headers .= "Reply-To: ". strip_tags($from) . "\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

$body = '<html><body>';
$body .= '<img src="http://stialumni.3eeweb.com/client/shared-resources/img/stiaa.jpg">';
$body .= '<p>Welcome,</p>
<p>We are happy to send you this email. </p>
<p>We are gladly to welcome you as an alumni of Sti College Cubao</p>
<p>You can now login in STI College Cubao Alumni.</p>
<p>Click this link to redirect to Sti College Cubao Alumni Website.</p>
<p>http://stialumni.3eeweb.com</p>


';

$body .= '</body></html>';

mail($to, $subject, $body, $headers);
?>