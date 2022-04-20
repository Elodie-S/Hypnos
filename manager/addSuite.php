<form method="POST" enctype="multipart/form-data">
    
    <?php if(isset($php_errormsg)){echo '<p>'.$php_errormsg.'</p>';}?>

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
        <label for="main_photo"></label>
        <input type="file" class="form-input" name="main_photo" placeholder="Photo principale">
    </div>
    <div class="form-label">
        <label for="booking_link"></label>
        <input type="url" class="form-input" name="booking_link" placeholder="Lien vers la page Booking.com">
    </div>
    <div class="form-label">
        <button type="submit" class="button" name="addSuite">Ajouter</button>
    </div>
</form>