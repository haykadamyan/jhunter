<?php

$to = "hayk.adamyan@tumo.org";
$subject = "New question";
$txt = "Անուն - " . $name . "<br>Հեռախոսահամար - " . $phone . "<br>Հարց - " . $question;
$headers = "Content-type:text/html;charset=UTF-8" . "\r\n";
$headers.= "From: hello@thejhunter.com" . "\r\n";
$header.= "Bcc: drprog00@gmail.com";

mail($to,$subject,$txt,$headers);

?>