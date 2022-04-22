<?php

if(!isset($_SESSION['auth'])){
    header('Location: public/index.php');
}