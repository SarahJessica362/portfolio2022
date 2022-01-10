<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link type="text/css" rel="stylesheet" href="style.css"/>
    <title>Contact</title>
</head>

<body>
<div id="global">
<header>
<marquee behavior="scroll"><h1>Contact</h1></marquee>
      
</header>

<?php
require_once "./config.php";

if (isset($_POST["name"]) && isset($_POST["mail"]) && isset($_POST["msg"])) {
    $name = htmlspecialchars(strip_tags(trim($_POST["name"])), ENT_QUOTES);
    $mail = filter_var(htmlspecialchars(strip_tags(trim($_POST["mail"])), ENT_QUOTES), FILTER_VALIDATE_EMAIL);
    $msg = htmlspecialchars(strip_tags(trim($_POST["msg"])), ENT_QUOTES);

    if ($name && $mail && $msg) {
        /*Mail vers moi*/
        $to = MAIL;
        $subject = "Message de mon portfolio de l'utilisateur : $name";
        $message = $msg;
        $header = [
            'From' => $mail,
            'Reply-To' => $mail,
            'X-Mailer' => 'PHP/' . phpversion()
        ];
        mail($to, $subject, $message, $header);

        /*Mail vers l'utilisateur*/
        $to = $mail;
        $subject = "Message du portfolio de Jessica";
        $message = "Merci de m'avoir écrit, je vous réponds dans les plus brefs délais";
        $header = [
            'From' => MAIL,
            'Reply-To' => MAIL,
            'X-Mailer' => 'PHP/' . phpversion()
        ];
        mail($to, $subject, $message, $header);
        echo "<h1>Votre mail à bien étés envoyé !</h1>";
    } else {

     echo "<h1>Votre mail n'a pas été envoyé, veuillez recommencer !</h1>";
    }
}
?>

<?php include('menu.php');?>

<main>
<img src="img/mail.png"width="120" height="75"/></a>

<form method="POST" action="">
            <h1>Envoyez-moi un message</h1>
           <br><label for="name">Votre nom :</label><br>
            <input type="text" name="name" id="name" placeholder="Veuillez entrer votre nom" required/>
            <br>
            <br><label for="mail">Votre e-mail :</label><br>
            <input type="email" name="mail" id="mail" placeholder="Veuillez entrer votre e-mail" required/>
            <br>
           <br><label for="msg">Votre message</label><br>
            <textarea name="msg" id="msg" placeholder="Ecrivez votre message" required></textarea>
            <br><input type="submit" value="Envoyez !"/>
        </form>
</body>
</html>



  
       