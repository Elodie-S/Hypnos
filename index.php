<?php 

require_once('libs/loginReq.php');
require_once('libs/signupGuestReq.php');
?>

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
</head>

<body>

<?php require_once('includes/header.php') ?>

    <!------------------------- Photo d'accueil ------------------------->
    
    <section id="index">
        <div class="index">
            <img src="./styles/img/Accueil-hypnos.jpg" alt="Bienvenue chez Hypnos">
        </div>
    </section>

    <div class="button">
        <button class="booking-button"><a href="#modal-login">Réserver</a></button>
    </div>

    <!------------------------- Section chambre ------------------------->

    <section id="room">
        <div class="container">
            <div class="grid">
                <div class="room-left">
                    <div class="room-example">
                    </div>
                </div>
                <div class="room-right">
                    <div class="room-title">
                        <h1 class="title">Chambres & Suites</h1>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut facilis magni ducimus aspernatur est laboriosam aperiam deleniti, voluptatem inventore fugiat dolore nisi nostrum vitae repellat eligendi earum et dolorum error!
                            Molestias ab, id molestiae repudiandae distinctio blanditiis voluptates atque! Accusamus cumque ex totam nemo deserunt repudiandae eligendi omnis illo, iure quaerat beatae excepturi autem culpa neque enim vero saepe praesentium!
                            Facere voluptatum blanditiis, libero inventore ducimus dolorum minima fuga, architecto saepe et deserunt natus nisi similique? Porro a ratione, veniam quis quisquam quidem iste vel laboriosam cum eos earum expedita!</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-------------------- Section services (Spa) ---------------------->

    <section id="services">
        <div class="container">
            <div class="grid">
                <div class="services-left">
                    <div class="services-title">
                        <h1 class="title">Détente & Spa</h1>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi corporis libero eius ex fuga qui quos quasi nemo tempore debitis, earum officia, repudiandae voluptate ad dolore necessitatibus animi nobis consectetur. Accusamus cumque ex totam nemo deserunt repudiandae eligendi omnis illo, iure quaerat beatae excepturi autem culpa neque enim vero saepe praesentium.</p>
                    </div>
                </div>
                <div class="services-right">
                    <div class="services-example"> 
                    </div>
                </div>      
            </div>
        </div>
    </section>

    <!--------------------- Section destinations  -------------------->

    <section id="destinations">
        <h1 class="destinations-title">Nos destinations
        </h1>
        <div class="destinations-list">
            <ul class="destinations-grid list-unstyled">
                <li class="desti-li">
                    <a href="#" data-filter="annecy">Annecy</a>
                </li>
                <li class="desti-li">
                    <a href="#" data-filter="biarritz">Biarritz</a>
                </li>
                <li class="desti-li">
                    <a href="#" data-filter="lille">Lille</a>
                </li>
                <li class="desti-li">
                    <a href="#" data-filter="lyon">Lyon</a>
                </li>
                <li class="desti-li">
                    <a href="#" data-filter="nice">Nice</a>
                </li>
                <li class="desti-li">
                    <a href="#" data-filter="paris">Paris</a>
                </li>
                <li class="desti-li">
                    <a href="#" data-filter="saint-malo">St-Malo</a>
                </li>
            </ul>
        </div>                
    </section>

    <div class="decorative">
    </div>

    <div class="button">
    <button class="booking-button"><a href="#modal-login">Réserver</a></button>
    </div>

    <!----------- Section "A propos" (photo PDG et description) ------------>

    <section id="about">
        <div class="grid">
            <div class="about-left">
                <div class="founder-picture">
                    <img src="./styles/img/About_us.jpg" alt="Fondatrice et dirigeante d'Hypnos" width="36%">
                </div>
            </div>
            <div class="about-right">
                <h1 class="title">A propos d'Hypnos</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi corporis libero eius ex fuga qui quos quasi nemo tempore debitis, earum officia, repudiandae voluptate ad dolore necessitatibus animi nobis consectetur.</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis quam necessitatibus, tenetur ratione sit dolores distinctio! Quos repellendus voluptates quaerat vitae neque dignissimos nulla sapiente a? Eius fugiat labore dignissimos.
                Est, obcaecati totam minima possimus sit dignissimos. Earum neque tempora deserunt, corporis explicabo ipsum optio dolorum quae, asperiores nulla veniam doloremque repellat excepturi! Assumenda ducimus quibusdam esse quia minima.</p>
            </div>
        </div>
    </section>

    <!------------------------------ FOOTER ------------------------------->

    <footer class="container">
        <div class="grid">
            <div class="footer-left">
                <h1>hypnos</h1>
                <p>Copyright 2022 - All rights reserved</p>
            </div>
            <div class="footer-center">
                <div class="socials">
                    <ul class="socials list-unstyled">
                        <li> <a href="https://facebook.fr" target="_blank"><svg class="icon facebook" aria-hidden="true" focusable="false" data-prefix="fab" data-icon="facebook" class="svg-inline--fa fa-facebook fa-w-16" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" height="30px"><path fill="currentColor" d="M504 256C504 119 393 8 256 8S8 119 8 256c0 123.78 90.69 226.38 209.25 245V327.69h-63V256h63v-54.64c0-62.15 37-96.48 93.67-96.48 27.14 0 55.52 4.84 55.52 4.84v61h-31.28c-30.8 0-40.41 19.12-40.41 38.73V256h68.78l-11 71.69h-57.78V501C413.31 482.38 504 379.78 504 256z"></path></svg></a></li>
                        <li> <a href="https://instagram.com" target="_blank"><svg class="icon instagram" aria-hidden="true" focusable="false" data-prefix="fab" data-icon="instagram" class="svg-inline--fa fa-instagram fa-w-14" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" height="30px"><path fill="currentColor" d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z"></path></svg></a></li>
                        <li> <a href="https://LinkedIn.fr" target="_blank"><svg class="icon linkedIn" aria-hidden="true" focusable="false" data-prefix="fab" data-icon="linkedin" class="svg-inline--fa fa-linkedin fa-w-14" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" height="30px"><path fill="currentColor" d="M416 32H31.9C14.3 32 0 46.5 0 64.3v383.4C0 465.5 14.3 480 31.9 480H416c17.6 0 32-14.5 32-32.3V64.3c0-17.8-14.4-32.3-32-32.3zM135.4 416H69V202.2h66.5V416zm-33.2-243c-21.3 0-38.5-17.3-38.5-38.5S80.9 96 102.2 96c21.2 0 38.5 17.3 38.5 38.5 0 21.3-17.2 38.5-38.5 38.5zm282.1 243h-66.4V312c0-24.8-.5-56.7-34.5-56.7-34.6 0-39.9 27-39.9 54.9V416h-66.4V202.2h63.7v29.2h.9c8.9-16.8 30.6-34.5 62.9-34.5 67.2 0 79.7 44.3 79.7 101.9V416z"></path></svg></a></li>
                    </ul>
                </div>
                <div class="cgv">
                    <ul class="list-unstyled">
                        <li> <a href="#CGV" target="_blank">Conditions générales</a></li>
                        <li> <a href="#RGPD" target="_blank">Confidentialité et utilisation des cookies</a></li>
                    </ul>
                </div>
            </div>

    <!------------------------ Formulaire de contact ------------------------>

    <div class="footer-right">
                <div class="contact">

    <?php
    require('libs/messaging.php');
    ?>
                    <h1 class="title">Contact</h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis quo, eos nostrum dolore nobis tempora laborum.</p>
                    <form action="" class="form">
                        <label for="firstname">
                        <input type="text" name="firstname" id="firstname" placeholder="Prénom">
                        </label>
                        <label for="lastname">
                        <input type="text" name="lastname" id="lastname" placeholder="Nom">
                        </label>
                        <label for="email">
                        <input type="email" name="email" id="email" placeholder="Email">
                        </label>
                        <label for="subject">
                        <input type="text" name="subject" id="subject" placeholder="Sujet de mon message">
                        </label>
                        <textarea name="message" id="message" placeholder="Message"></textarea>
                        <div class="form-label">
                            <button type="submit" class="button" name="sendMessage">Envoyer mon message</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </footer>

    <script src="./styles/script.js"></script>
</body>
</html>