<?php require('addManagerReq.php'); ?>

<form action="" method="POST">

    <p>Ajout d'un manager</p>
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