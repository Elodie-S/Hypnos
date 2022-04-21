<?php

//Get Heroku connection information
$db_server = "clwxydcjair55xn0.chr7pe7iynqr.eu-west-1.rds.amazonaws.com";
$db_username = "qt271pmrbtmyi652";
$db_password = "kbjk4ssnkpp4w2a3";
$db_db = "qsk9n8kar1sbyuhc";
$active_group = 'default';
$query_builder = TRUE;
// Connect to DB
$conn = mysqli_connect($db_server, $db_username, $db_password, $db_db);
