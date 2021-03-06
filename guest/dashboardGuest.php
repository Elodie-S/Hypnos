<?php

session_start();
require_once '../includes/security.php';
require '../includes/database.php';
$GuestID = $_SESSION['id']; 
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../public/style-dashboard.css">
    <title>Mon espace Hypnos - Mes réservations</title>
</head>

<body>
    <div class="title">
        <h1>hypnos</h1>
        <form action=""><button type="submit" name="logout">Se déconnecter</button></form>
    </div>   
    
    <div class="new-booking">
        <h2>Nouvelle Réservation</h2>
        <form action="POST">
            <label for="city">Ville</label>
            <select name="city" id="city-select" required>
                <option value="Annecy">Annecy</option>
                <option value="Biarritz">Biarritz</option>
                <option value="Lille">Lille</option>
                <option value="Lyon">Lyon</option>
                <option value="Nice">Nice</option>
                <option value="Paris">Paris</option>
                <option value="St Malo">St Malo</option>
            </select>
            <input type="text" class="form-input" name="suite" placeholder="Nom de la suite" required>
            <label for="date">Date d'arrivée</label>
            <input type="date" class="form-input" name="arrival-date">
            <label for="date">Date de départ</label>
            <input type="date" class="form-input" name="departure-date">
            <button type="submit" class="button" name="verify-dispo">Vérifier les disponibilités</button>
        </form>
    </div>

    <div class="list-resa">
            <h2>Mes Réservations</h2>

            <?php 
            $queryBooking = "SELECT * FROM users WHERE user_id = '{$GuestID}'";
            $listBooking = $bdd->prepare($queryBooking);
            $row = $listBooking->rowCount();
            if($row == 0) {
                echo "Vous n'avez aucune réservation en cours";
                die();
            }
            $listBooking->execute();
            $bookings = $listBooking->fetchAll();    
            ?>
        
            <table class="table">
                <thead id="thead">
                    <tr>
                        <th>Ville</th>
                        <th>Nom de la suite</th>
                        <th>Date d'arrivée</th>
                        <th>Date de départ</th>
                        <th>Annuler la réservation</th>
                    </tr>
                </thead>
                <tbody>         
                <?php foreach ($bookings as $booking) { ?>
                    <tr>
                        <td><?php echo $booking['city']; ?></td>
                        <td><?php echo $suite['title']; ?></td>
                        <td><?php echo $suite['start_date']; ?></td>
                        <td><?php echo $suite['end_date']; ?></td>
                        <td><?php echo '<form'.' method'.' ="POST"><button'.' type="submit"'.' name="removeBooking">Annuler ma réservation</button></form>'; ?></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table> 
    </div>
</body>
</html>