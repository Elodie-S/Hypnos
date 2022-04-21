<?php 

session_start();
require '../libs/security.php';
require '../libs/database.php';
?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/style-dashboard.css">
    <title>Tableau de bord - Administrateur</title>
</head>

<body>
    <div class="title">
        <h1>hypnos</h1>
    </div>
        

    <div class="container">
        <div class="add">
        
        <?php require 'addHotelReq.php'; ?>

            <div class="add-hotel">
                <form method="POST">

                    <h2>Ajouter un établissement</h2>
                    <p>Tous les champs sont requis</p>
                    <div class="form-label">
                        <label for="city"></label>
                            <input type="text" class="form-input" name="city" placeholder="Ville de l'établissement" required>
                    </div>
                    <div class="form-label">
                        <label for="name"></label>
                            <input type="text" class="form-input" name="name" placeholder="Nom de l'établissement" required>
                    </div>
                    <div class="form-label"> 
                        <label for="address"></label>
                        <input type="text" class="form-input" name="address" placeholder="Adresse de l'établissement" required>
                    </div>
                    <div class="form-label">
                        <label for="description"></label>
                        <input type="text" class="form-input" name="description" placeholder="Description" required>
                    </div>
                    <div class="form-label">
                        <label for="manager"></label>
                        <input type="text" class="form-input" name="email" placeholder="Email du manager" required>
                    </div>
                    <div class="form-label">
                        <button type="submit" class="button" name="addHotel">Ajouter</button>
                    </div>
                </form>
            </div>

        <?php require 'addManagerReq.php'; ?>

            <div class="add-manager">
                <form action="" method="POST">

                    <h2>Ajouter un manager</h2>
                    <p>Tous les champs sont requis</p>

                    <?php if(isset($php_errormsg)){echo '<p>'.$php_errormsg.'</p>';}?>

                    <div class="form-label">
                        <label for="lastname"></label>
                            <input type="text" class="form-input" name="lastname" placeholder="Nom du manager" required>
                    </div>
                    <div class="form-label"> 
                        <label for="firstname"></label>
                        <input type="text" class="form-input" name="firstname" placeholder="Prénom du manager" required>
                    </div>
                    <div class="form-label">
                        <label for="email"></label>
                        <input type="email" class="form-input" name="email" placeholder="Email du manager" required>
                    </div>
                    <div class="form-label">
                        <label for="password"></label>
                        <input type="password" class="form-input" name="mdp" placeholder="Mot de passe" required>
                    </div>
                    <div class="form-label">
                        <button type="submit" class="button" name="addManager">Ajouter</button>
                    </div>
                </form>
            </div>
        </div>


        <div class="list">

        <div class="list-manager">
            <h2>Mes Managers</h2>

        <?php 
        $queryManager = "SELECT * FROM users WHERE RoleType = 'manager'";
        $listManager = $bdd->prepare($queryManager);
        $listManager->execute();
        $managers = $listManager->fetchAll();    
        ?>
        
            <table class="table">
                <thead id="thead">
                    <tr>
                        <th>Nom</th>
                        <th>Prénom</th>
                        <th>Email</th>
                        <th>Supprimer</th>
                    </tr>
                </thead>
                <tbody>
                    

        <?php foreach ($managers as $manager) {
        
        ?>
                    <tr>
                        <td><?php echo $manager['lastname']; ?></td>
                        <td><?php echo $manager['firstname']; ?></td>
                        <td><?php echo $manager['email']; ?></td>
                        <td><?php echo "<a>"."Supprimer"."</a>"; ?></td>
                    </tr>
        <?php } ?>
                </tbody>
            </table> 
        </div>
        
        
        

            <div class="list-hotel">
                <h2>Mes établissements</h2>

        <?php 
        $queryHotel = "SELECT hotel_name, city, hotel_address,hotel_description, manager_email FROM hotel";
        $listHotel = $bdd->prepare($queryHotel);
        $listHotel->execute();
        $hotels = $listHotel->fetchAll();    
        ?>
        
            <table class="table">
                <thead id="thead">
                    <tr>
                        <th>Nom de l'établissement</th>
                        <th>Ville</th>
                        <th>Adresse</th>
                        <th>Description</th>
                        <th>Email du manager</th>
                        <th>Supprimer</th>
                    </tr>
                </thead>
                <tbody>
                    

        <?php foreach ($hotels as $hotel) {
        
        ?>
                    <tr>
                        <td><?php echo $hotel['hotel_name']; ?></td>
                        <td><?php echo $hotel['city']; ?></td>
                        <td><?php echo $hotel['hotel_address']; ?></td>
                        <td><?php echo $hotel['hotel_description']; ?></td>
                        <td><?php echo $hotel['manager_email']; ?></td>
                        <td><?php echo '<form'.' method'.' ="POST"><button'.' type="submit"'.' name="removeHotel">Supprimer</button></form>'; ?></td>
                    </tr>
        <?php } ?>
                </tbody>
            </table> 
        </div>
                
        <div class="message">
            <h2>Mes Messages reçus</h2>

            <?php 
        $queryMessage = "SELECT * FROM messaging";
        $listMessage = $bdd->prepare($queryMessage);
        $listMessage->execute();
        $messages = $listMessage->fetchAll();    
        ?>
        
            <table class="table">
                <thead id="thead">
                    <tr>
                        <th>Numéro du message</th>
                        <th>Sujet</th>
                        <th>Message</th>
                        <th>Email de l'expéditeur</th>
                    </tr>
                </thead>
                <tbody>
                
        <?php foreach ($messages as $message) {
        
        ?>
                    <tr>
                        <td><?php echo $message['message_id']; ?></td>
                        <td><?php echo $message['message_subject']; ?></td>
                        <td><?php echo $message['message_content']; ?></td>
                        <td><?php echo $message['message_sender']; ?></td>
                    </tr>
        <?php } ?>
                </tbody>
            </table> 
        </div>   
        
        <form action=""><button type="submit" name="logout">Se déconnecter</button></form>
        
</body>
</html>