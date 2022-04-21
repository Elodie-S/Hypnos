<?php

try {
    $bdd = new PDO('mysql:host=localhost;dbname=hypnos;charset=utf8;', 'root', '');
} catch (Exception $e){
    die('Une erreur est survenue : '. $e->getMessage());
}

if(isset($_POST)){

    if(!empty( $_POST['city']) AND !empty($_POST['name']) AND !empty($_POST['address']) AND !empty($_POST['description']) AND !empty($_POST['email'])){
        
        $hotel_city = htmlspecialchars($_POST['city']);
        $hotel_name = htmlspecialchars($_POST['name']);
        $hotel_address = htmlspecialchars($_POST['address']);
        $hotel_description = htmlspecialchars($_POST['description']);
        $hotel_manager_email = htmlspecialchars($_POST['email']);

        $checkIfHotelExists = $bdd->prepare('SELECT * FROM hotel WHERE hotel_name = ?');
        $checkIfHotelExists->execute(array($hotel_name));
        $hotelInfos = $checkIfHotelExists->fetch();
        $row = $checkIfHotelExists->rowCount();

        if($row == 0){

            $addHotel = $bdd->prepare('INSERT INTO hotel (hotel_name, city, hotel_address, hotel_description, manager_email) VALUES (?,?,?,?,?)');
            $addHotel->execute(array($hotel_name, $hotel_city, $hotel_address, $hotel_description, $hotel_manager_email));

            echo ("L'établissement a bien été enregistré");
        } else {
            $php_errormsg = "L'établissement existe déjà.";
        }
    }
} 