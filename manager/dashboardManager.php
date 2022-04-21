<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/style-dashboard.css">
    <title>Tableau de bord - Manager</title>
</head>

<body>
    <div class="title">
        <h1>hypnos</h1>
    </div>

    <div class="container">
        <div class="add">
        
        <?php require('addSuiteReq.php');
        $ManagerCity = $_SESSION['lastname']; 
        ?>

        <form action="addSuiteReq.php" method="POST" enctype="multipart/form-data">

        <h2>Ajouter une suite dans la ville de <?php echo $ManagerCity ?> </h2>
        <p>Tous les champs sont requis</p>

            <div class="form-label">
                <label for="title"></label>
                    <input type="text" class="form-input" name="title" placeholder="Nom de la suite">
            </div>
            <div class="form-label">
                <label for="description"></label>
                <input type="text" class="form-input" name="description" placeholder="Description">
            </div>
            <div class="form-label">
                <label for="price"></label>
                <input type="number" class="form-input" name="price" placeholder="Prix de la nuitée">
            </div>
            <div class="form-label">
                <label for="photo"></label>
                <input type="file" class="form-input" name="photo" placeholder="Photo principale">
            </div>
            <div class="form-label">
                <label for="mphoto"></label>
                <input type="file" class="form-input" name="photo" placeholder="Photo supplémentaire">
            </div>
            <div class="form-label">
                <label for="photo"></label>
                <input type="file" class="form-input" name="photo" placeholder="Photo supplémentaire">
            </div>
            <div class="form-label">
                <label for="booking_link"></label>
                <input type="url" class="form-input" name="booking_link" placeholder="Lien vers la page Booking.com">
            </div>
            <div class="form-label">
                <button type="submit" class="button" name="addSuite">Ajouter</button>
            </div>
        </form>

        <div class="list">

        <?php require('../libs/database.php') ?>

        <div class="list-suites">
            <h2>Mes Suites</h2>

        <?php 
        $querySuites = "SELECT * FROM suite WHERE city = '{$ManagerCity}'";
        $listSuites = $bdd->prepare($querySuites);
        $listSuites->execute();
        $suites = $listSuites->fetchAll();    
        ?>
        
            <table class="table">
                <thead id="thead">
                    <tr>
                        <th>Nom de la suite</th>
                        <th>Description</th>
                        <th>Prix de la nuitée</th>
                        <th>Supprimer</th>
                    </tr>
                </thead>
                <tbody>
                    

        <?php foreach ($suites as $suite) {
        
        ?>
                    <tr>
                        <td><?php echo $suite['title']; ?></td>
                        <td><?php echo $suite['suite_description']; ?></td>
                        <td><?php echo $suite['price']; ?></td>
                        <td><?php echo "<a>"."Supprimer"."</a>"; ?></td>
                    </tr>
        <?php } ?>
                </tbody>
            </table> 
        </div>