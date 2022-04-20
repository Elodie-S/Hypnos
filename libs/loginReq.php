<?php

session_start();

try {
   
    $bdd = new PDO('mysql:host=localhost;dbname=hypnos;charset=utf8;', 'root', '');
} catch (Exception $e){
    die('Une erreur est survenue : '. $e->getMessage());
}

if(isset($_POST['validate-login'])){

    if(!empty($_POST['email']) AND !empty($_POST['mdp'])){
        
        $user_email = htmlspecialchars($_POST['email']);
        $user_mdp = htmlspecialchars($_POST['mdp']);

        $checkEmailExists = $bdd->prepare('SELECT * FROM users WHERE email = ?');
        $checkEmailExists->execute(array($user_email));
        $userInfos = $checkEmailExists->fetch();
        $row = $checkEmailExists->rowCount();
        $roleType = $userInfos['RoleType'];

        if($row == 1) {

            if(filter_var($user_email, FILTER_VALIDATE_EMAIL)){

                $user_mdp = hash('sha256', $user_mdp);

                if($userInfos['mdp'] === $user_mdp){

                    $_SESSION['auth'] = true;
                    $_SESSION['id'] = $userInfos['user_id'];
                    $_SESSION['lastname'] = $userInfos['lastname'];
                    $_SESSION['firstname'] = $userInfos['firstname'];
                    $_SESSION['email'] = $userInfos['email'];
                    $_SESSION['RoleType'] = $userInfos['RoleType'];

                if($roleType == 'guest'){

                    header('Location: ./guest/dashboardGuest.php');

                } else if ($roleType == 'admin'){

                    header('Location: ./admin/dashboardAdmin.php');

                } else if ($roleType == 'manager'){

                    header('Location: ./manager/dashboardManager.php');

                } else {
                    $php_errormsg = "Une erreur est survenue. Merci de nous contacter via notre formulaire en bas de page.";
                }

            } else {
                $php_errormsg = "Votre mot de passe est incorrect.";
            }
        }

        } else {
            $php_errormsg = "Votre email est incorrect.";
        }

    } else {

        $php_errormsg = "Merci de renseigner tous les champs.";
    }

}