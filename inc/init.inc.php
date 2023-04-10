<?php

session_start();


// Connexion à la BDD

$host = "localhost";
$dbname = "thperf";
$user = "root";
$pass = "root";

$bdd = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);


define("URL", "http://localhost:8888/thperf/");
//define("ASSETS", URL . "assets/");
const ASSETS = URL . "assets/";

// echo "<pre>";
// print_r($_SESSION);
// echo "</pre>";
// POP



