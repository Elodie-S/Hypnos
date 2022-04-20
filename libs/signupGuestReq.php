<?php

require('./libs/database.php');

if(isset($_POST['validate'])){

    if(!empty( $_POST['lastname']) AND !empty($_POST['firstname']) AND !empty($_POST['email']) AND !empty($_POST['mdp'])){
        
        $user_lastname = htmlspecialchars($_POST['lastname']);
        $user_firstname = htmlspecialchars($_POST['firstname']);
        $user_email = htmlspecialchars($_POST['email']);
        $user_mdp = htmlspecialchars($_POST['mdp']);

        $checkIfUserExists = $bdd->prepare('SELECT email FROM users WHERE email = ?');
        $checkIfUserExists->execute(array($user_email));

        if($checkIfUserExists->rowCount() == 0){

            $user_mdp = hash('sha256', $user_mdp);

            $addUserGuest = $bdd->prepare('INSERT INTO users(lastname, firstname, email, mdp, RoleType)VALUES(?,?,?,?,?)');
            $addUserGuest->execute(array($user_lastname, $user_firstname, $user_email, $user_mdp, 'guest'));
            
            $getInfosGuestReq = $bdd->prepare('SELECT user_id FROM users WHERE lastname = ? AND email = ?');
            $getInfosGuestReq->execute(array($user_lastname, $user_email));

            $infosGuest = $getInfosGuestReq->fetch();

            $_SESSION['auth'] = true;
            $_SESSION['id'] = $infosGuest['user_id'];
            $_SESSION['lastname'] = $infosGuest['lastname'];
            $_SESSION['firstname'] = $infosGuest['firstname'];
            $_SESSION['email'] = $infosGuest['email'];

            // REDIRECTION
            header('Location: ./guest/dashboardGuest.php');

        } else {
            $php_errormsg = "L'utilisateur existe déjà.";
        }

    } else {
        $php_errormsg = "Merci de renseigner tous les champs.";
    }

}