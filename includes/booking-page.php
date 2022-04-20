<?php require_once('includes/header.php') ?>

<div>
    <h1>Ma réservation</h1>
    <form action="POST">
        <div class="form-label"> 
            <label for="city">Ville</label>
            <select name="city" id="city-select">
                <option value="Annecy">Annecy</option>
                <option value="Biarritz">Biarritz</option>
                <option value="Lille">Lille</option>
                <option value="Lyon">Lyon</option>
                <option value="Nice">Nice</option>
                <option value="Paris">Paris</option>
                <option value="St Malo">St Malo</option>
            </select>
            <label for="suites">Suite</label>
            <select name="suites" id="suites-select">
                <option value="Annecy">Annecy</option>
                <option value="Biarritz">Biarritz</option>
                <option value="Lille">Lille</option>
                <option value="Lyon">Lyon</option>
                <option value="Nice">Nice</option>
                <option value="Paris">Paris</option>
                <option value="St Malo">St Malo</option>
            </select>
        </div>
        <div class="form-label">
            <label for="password"></label>
            <input type="password" class="form-input" name="mdp" placeholder="Mot de passe">
        </div>
            <div class="form-label">
                <button type="submit" class="button-modal" name="validate-login">Envoyer</button>
            </div>
        </div>
    </form>
</div>