<?php

try {
    $bdd = new PDO('mysql:host=localhost;dbname=hypnos;charset=utf8;', 'root', '');
    } catch (Exception $e){
        die('Une erreur est survenue : '. $e->getMessage());
    }

if(isset($_POST['addManager'])){

    if(!empty( $_POST['lastname']) AND !empty($_POST['firstname']) AND !empty($_POST['email']) AND !empty($_POST['mdp'])){
        
        $user_lastname = htmlspecialchars($_POST['lastname']);
        $user_firstname = htmlspecialchars($_POST['firstname']);
        $user_email = htmlspecialchars($_POST['email']);
        $user_mdp = htmlspecialchars($_POST['mdp']);

        $checkIfUserExists = $bdd->prepare('SELECT email FROM users WHERE email = ?');
        $checkIfUserExists->execute(array($user_email));

        if($checkIfUserExists->rowCount() == 0){

            $user_mdp = hash('sha256', $user_mdp);

            $addUserManager = $bdd->prepare('INSERT INTO users(lastname, firstname, email, mdp, RoleType)VALUES(?,?,?,?,?)');
            $addUserManager->execute(array($user_lastname, $user_firstname, $user_email, $user_mdp, 'manager'));

        } else {
            $php_errormsg = "Ce manager existe déjà.";
        }

    } else {
        $php_errormsg = "Merci de renseigner tous les champs.";
    }

}