<?php

    require('addHotelReq.php');

    if(isset($php_errormsg)){echo $php_errormsg;};
    
?>

<form method="POST">

    <p>Ajout d'un établissement</p>
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