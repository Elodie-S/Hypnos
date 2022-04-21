<?php

require  '../libs/database.php';

if(isset($_POST['sendMessage'])){

    if(!empty( $_POST['firstname']) AND !empty($_POST['lastname']) AND !empty($_POST['email']) AND !empty($_POST['subject']) AND !empty($_POST['message'])){
        
        
        $sender_firstname = htmlspecialchars($_POST['firstname']);
        $sender_lastname = htmlspecialchars($_POST['lastname']);
        $sender_email = htmlspecialchars($_POST['email']);
        $message_subject = htmlspecialchars($_POST['subject']);
        $message_content = htmlspecialchars($_POST['message']);

        $addMessage = $bdd->prepare('INSERT INTO messaging (sender_firstname, sender_lastname, sender_email, message_subject, message_content) VALUES (?,?,?,?,?)');
        $addMessage->execute(array($sender_firstname, $sender_lastname, $sender_email, $message_subject, $message_content));

    } else {
            $php_errormsg = "Merci de compléter tous les champs.";
    }
    
}