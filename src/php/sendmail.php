<?php

$name = $_POST["lastname"];
$firstname = $_POST["firstname"];
$mail = $_POST["youremail"];
$message = $_POST["user_message"];

//Validate first
if(empty($name)||empty($firstname)||empty($mail)||empty($message))
{
    echo "Le formulaire n\'a pas été rempli totalement !";
    exit;
}

$email_subject = "Nouveau message depuis mon site";
$email_body = "Vous avez reçu un message de $name.\n".
    "Voici le message:\n $message";

$to = "kilanju@outlook.fr";
$headers = "From: $mail \r\n";
$headers .= "Reply-To: $mail \r\n";



if (mail($to,$email_subject,$email_body,$headers))
{
    echo "Votre message a bien été envoyé ";
}
else
{
    echo "Votre message n\'a pas pu être envoyé";
}

?>