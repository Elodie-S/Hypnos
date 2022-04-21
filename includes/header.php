<!DOCTYPE html>
<html lang=fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Hypnos, groupe hôtelier fondé en 2004 et propriétaire de 7 établissements aux quatre coins de l'Hexagone, est la destination idéale pour les couples en quête d'un séjour romantique à deux. ">
    <link rel="shortcut icon" href="./styles/img/favicon.ico" type="image/icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="./styles/style.css">
    <title>Hypnos - Suites & Spa</title>
    <script src="./tarteaucitron.js-1.9.6/tarteaucitron/tarteaucitron.js"></script>

        <script type="text/javascript">
        tarteaucitron.init({
    	  "privacyUrl": "", /* Privacy policy url */

    	  "hashtag": "#tarteaucitron", /* Open the panel with this hashtag */
    	  "cookieName": "tarteaucitron", /* Cookie name */
    
    	  "orientation": "middle", /* Banner position (top - bottom) */
       
          "groupServices": false, /* Group services by category */
                           
    	  "showAlertSmall": false, /* Show the small banner on bottom right */
    	  "cookieslist": false, /* Show the cookie list */
                           
          "closePopup": false, /* Show a close X on the banner */

          "showIcon": true, /* Show cookie icon to manage cookies */
          //"iconSrc": "", /* Optionnal: URL or base64 encoded image */
          "iconPosition": "BottomRight", /* BottomRight, BottomLeft, TopRight and TopLeft */

    	  "adblocker": false, /* Show a Warning if an adblocker is detected */
                           
          "DenyAllCta" : true, /* Show the deny all button */
          "AcceptAllCta" : true, /* Show the accept all button when highPrivacy on */
          "highPrivacy": true, /* HIGHLY RECOMMANDED Disable auto consent */
                           
    	  "handleBrowserDNTRequest": false, /* If Do Not Track == 1, disallow all */

    	  "removeCredit": false, /* Remove credit link */
    	  "moreInfoLink": true, /* Show more info link */

          "useExternalCss": false, /* If false, the tarteaucitron.css file will be loaded */
          "useExternalJs": false, /* If false, the tarteaucitron.js file will be loaded */

    	  //"cookieDomain": ".my-multisite-domaine.fr", /* Shared cookie for multisite */
                          
          "readmoreLink": "", /* Change the default readmore link */

          "mandatory": true, /* Show a message about mandatory cookies */
        });
        </script>
</head>

<body>

<!--------------------------- HEADER / Nav Bar --------------------------->

    <header class="header">
        <nav class="navbar">
            <div class="logo">
                <a href="#index">
                    <h1>hypnos</h1>
                </a>
            </div>
            <ul class="links list-unstyled">
                <li><a href="#room">Nos suites</a></li>
                <li><a href="#services">Nos services</a></li>
                <li><a href="#destinations">Destinations</a></li>
                <li><a href="#about">A propos</a></li>
                <li id="login-link"><a href="#modal-login">S'inscrire / Se connecter</a></li>
            </ul>
            <div class="login">
                <a href="#modal-login"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" version="1.1" width="1.4em" height="auto" x="0" y="0" viewBox="0 0 24 24" style="enable-background:new 0 0 512 512" xml:space="preserve"><g><path xmlns="http://www.w3.org/2000/svg" d="M18.9,0H5.1A5.055,5.055,0,0,0,0,5V8A1,1,0,0,0,2,8V5A3.054,3.054,0,0,1,5.1,2H18.9A3.054,3.054,0,0,1,22,5V19a3.054,3.054,0,0,1-3.1,3H5.1A3.054,3.054,0,0,1,2,19V16a1,1,0,0,0-2,0v3a5.055,5.055,0,0,0,5.1,5H18.9A5.055,5.055,0,0,0,24,19V5A5.055,5.055,0,0,0,18.9,0Z" fill="#0f0249" data-original="#000000"/><path xmlns="http://www.w3.org/2000/svg" d="M3,12a1,1,0,0,0,1,1H4l13.188-.03-4.323,4.323a1,1,0,1,0,1.414,1.414l4.586-4.586a3,3,0,0,0,0-4.242L14.281,5.293a1,1,0,0,0-1.414,1.414l4.262,4.263L4,11A1,1,0,0,0,3,12Z" fill="#0f0249" data-original="#000000"/></g></svg></a>
            </div>
            <div class="burger">
                <div class="line1"></div>
                <div class="line2"></div>
                <div class="line3"></div>
            </div>
        </nav>            
    </header>

    <!------------------------- Modal de connexion ------------------------->

    <div id="modal-login" class="modal">
        <div class="modal-content">
            <h1>Se connecter</h1>
            <p>Vous devez être connecté pour réserver une suite.</p>
            <form method="POST">

            <?php if(isset($php_errormsg)){echo '<p>'.$php_errormsg.'</p>';}?>

                <div class="form-label"> 
                    <label for="email"></label>
                    <input type="email" class="form-input" name="email" placeholder="Adresse email">
                </div>
                <div class="form-label">
                    <label for="password"></label>
                    <input type="password" class="form-input" name="mdp" placeholder="Mot de passe">
                </div>
                <div class="form-label">
                    <button type="submit" class="button-modal" name="validate-login">Envoyer</button>
                </div>
                <p><a href="#modal-signup">Je crée mon compte</a></p>
                <a href="#" class="modal-close">&times;</a>
            </form>
        </div>
    </div>

    <!------------------------- Modal d'inscription ------------------------->

    <div id="modal-signup" class="modal">
        <div class="modal-content">
            <h1>S'inscrire</h1>
            <form method="POST">

            <?php if(isset($php_errormsg)){echo '<p>'.$php_errormsg.'</p>';}?>

                <div class="form-label">
                    <label for="lastname"></label>
                    <input type="text" class="form-input" name="lastname" placeholder="Nom">
                </div>
                <div class="form-label">
                    <label for="firstname"></label>
                    <input type="text" class="form-input" name="firstname" placeholder="Prénom">
                </div>
                <div class="form-label"> 
                    <label for="email"></label>
                    <input type="email" class="form-input" name="email" placeholder="Adresse Email">
                </div>
                <div class="form-label">
                    <label for="password"></label>
                    <input type="password" class="form-input" name="mdp" placeholder="Mot de passe">
                </div>
                <div class="form-label">
                    <button type="submit" class="button-modal" name="validate">Envoyer</button>
                </div>
                <a href="#" class="modal-close">&times;</a>
            </form>
        </div>
    </div>