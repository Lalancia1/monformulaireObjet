<?php


include "email.php";
$mail=new email();
$mail->subject=$_POST['subject'];//pour faire appel  à une variable 
$mail->headers=$_POST['headers'];
$mail->destinataire=$_POST['destinataire'];
$mail->messages= $_POST['messages'];
//$mail->envoyez();
$mail->ecrire();
//$mail->epinglerUnDossier();
