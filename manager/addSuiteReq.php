<?php

require '../libs/database.php';
$ManagerCity = $_SESSION['lastname']; 

if(isset($_POST['addSuite'])){

    if(!empty( $_POST['title']) AND !empty($_POST['description']) AND !empty($_POST['price']) AND !empty($_POST['booking_link'])){
        
        if(isset($_FILES['main_photo']) AND $_FILES['main_photo']['error'] == 0){

        $filename = $_FILES['main_photo']['name'];
        $filetype = $_FILES['main_photo']['type'];
        $filesize = $_FILES['main_photo']['size'];

        $maxsize = 2 * 1024 * 1024;
        
        if($filesize > $maxsize) {
            die("Le fichier est trop lourd.");
        }

        $extension = strtolower(pathinfo($filename, PATHINFO_EXTENSION));
        $extensionValide = array('jpg', 'png', 'jpeg');
        
        if(!in_array($extension, $extensionValide)){
            die("L'extension n'est pas valide.");
        }

            $uploads_dir = 'C:/wamp64/www/Hypnos/uploads';
            foreach ($_FILES["main_photo"]["error"] as $key => $error) {
                if ($error == UPLOAD_ERR_OK) {
                    $tmp_name = $_FILES["main_photo"]["tmp_name"][$key];
                    $name = $_FILES["main_photo"]["name"][$key];
                    move_uploaded_file($tmp_name, "$uploads_dir/$name");
                }

                echo "L'image a bien été stockée";
            }
        }

            $suite_title = htmlspecialchars($_POST['title']);
            $suite_description = htmlspecialchars($_POST['description']);
            $suite_price = htmlspecialchars($_POST['price']);
            $suite_booking_link = htmlspecialchars($_POST['booking_link']);

            $checkIfSuiteExists = $bdd->prepare('SELECT title FROM suite WHERE title = ?');
            $checkIfSuiteExists->execute(array($suite_title));

            if($checkIfSuiteExists->rowCount() == 0){

            $addSuite = $bdd->prepare('INSERT INTO suite (city, title, suite_description, price, booking_link)VALUES(?,?,?,?,?)');
            $addSuite->execute(array($ManagerCity, $suite_title, $suite_description, $suite_price, $suite_booking_link));

        } else {
            $php_errormsg = "Cette suite existe déjà.";
        }

    } else {
        $php_errormsg = "Merci de renseigner tous les champs.";
    }

}