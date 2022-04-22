<?php 
    session_start();
    require '../includes/security.php';
    require '../includes/database.php';
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../public/style-dashboard.css">
    <title>Tableau de bord - Manager</title>
</head>

<body>
    <div class="title">
        <h1>hypnos</h1>
        <form action=""><button type="submit" name="logout">Se déconnecter</button></form>
    </div>   

    <div class="container">
        <div class="suite">
            <div class="add-suite">
                <?php require('addSuiteReq.php');
                $ManagerCity = $_SESSION['lastname']; 
                ?>
                <form action="" method="POST" enctype="multipart/form-data">
                    <h2>Ajouter une suite dans la ville de <?php echo $ManagerCity ?> </h2>
                    <p>Tous les champs sont requis</p>
                        <label for="title"></label>
                            <input type="text" class="form-input" name="title" placeholder="Nom de la suite">
                        <label for="description"></label>
                            <input type="text" class="form-input" name="description" placeholder="Description">
                        <label for="price"></label>
                            <input type="number" class="form-input" name="price" placeholder="Prix de la nuitée">
                        <label for="photo"></label>
                            <input type="file" class="form-input" name="photo" placeholder="Photo principale">
                        <label for="mphoto"></label>
                            <input type="file" class="form-input" name="photo" placeholder="Photo supplémentaire">
                        <label for="photo"></label>
                            <input type="file" class="form-input" name="photo" placeholder="Photo supplémentaire">
                        <label for="booking_link"></label>
                            <input type="url" class="form-input" name="booking_link" placeholder="Lien vers la page Booking.com">
                        <button type="submit" class="button" name="addSuite">Ajouter</button>
                </form>
            </div>
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
                    
                    <?php foreach ($suites as $suite) { ?>
                        <tr>
                            <td><?php echo $suite['title']; ?></td>
                            <td><?php echo $suite['suite_description']; ?></td>
                            <td><?php echo $suite['price']; ?></td>
                            <td><?php echo '<form'.' method'.' ="POST"><button'.' type="submit"'.' name="modifySuite">Modifier</button></form>'; ?></td>
                            <td><?php echo '<form'.' method'.' ="POST"><button'.' type="submit"'.' name="removeSuite">Supprimer</button></form>'; ?></td>
                        </tr>
                    <?php } ?>
                    </tbody>
                </table> 
            </div>
        </div>
    </div>
</body>