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
    <nav class="side-menu">
        <ul>
            <li id="listHotel"><a href="">Gérer les établissements</a></li>
            <li id="listManager"><a href="">Gérer les managers</a></li>
            <li id="addHotel"><a href="">Ajouter un établissement</a></li>
            <li id="addManager"><a href="">Ajouter un manager</a></li>
            <li id="message"><a href="">Messagerie</a></li>
        </ul>

        <div class="logout">
            <a href="">Se déconnecter</a>
        </div>
    </nav>            

    <div class="container">
        <div id="content"></div>
    </div>
    


    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="../styles/script-dashboard.js"></script>
</body>

</html>