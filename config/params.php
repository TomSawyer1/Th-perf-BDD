<?php

/**
 * Fichier contenant la configuration de l'application
 */
const CONFIG = [
    'db' => [
        'DB_HOST' => 'localhost',
        'DB_PORT' => '3306',
        'DB_NAME' => '3pm',
        'DB_USER' => 'root',
        'DB_PSWD' => '',
    ],
    'app' => [
        'name' => 'TH-PERF-BDD',
        'projectBaseUrl' => /*'http://localhost:8888/TH-PERF-BDD/'*/  //------MAC
        'http://localhost/PHP/Th-perf-BDD/'                          //------WINDOWS
    ]
];

/**
 * Constantes pour accéder rapidement aux dossiers importants du MVC
 */

//---------------------------- MAC ---------------------------//
/*
const BASE_DIR = __DIR__ . '/../';
const BASE_PATH = CONFIG['app']['projectBaseUrl'] . '/public/index.php/';
const PUBLIC_FOLDER = BASE_DIR . 'public/';
const VIEWS = BASE_DIR . 'views/';
const MODELS = BASE_DIR . 'src/models/';
const CONTROLLERS = BASE_DIR . 'src/controllers/';
const PHOTO = CONFIG['app']['projectBaseUrl'] . 'images/';
const COVER = '../../public/upload/';
*/

//---------------------------- WINDOWS ---------------------------//

const BASE_DIR = __DIR__ . '\\..\\';
const BASE_PATH = CONFIG['app']['projectBaseUrl'] . '/public/index.php/';
const PUBLIC_FOLDER = BASE_DIR . 'public\\';
const VIEWS = BASE_DIR . 'views/';
const MODELS = BASE_DIR . 'src/models/';
const CONTROLLERS = BASE_DIR . 'src/controllers/';
const PHOTO = BASE_DIR . 'public\\upload\\';
const COVER = '../../public/upload/';


/**
 * Liste des actions/méthodes possibles (les routes du routeur)
 */
$routes = [
    ''                  => ['AppController', 'index'],
    '/enregistrement'   => ['AppController', 'enregistrement'],


    //j'appelle la methode registre() qui est dans le fichier UserController
    '/inscription'      => ['UserController', 'register'],
    '/administration'   => ['UserController', 'tab_user'],
    '/supprimer'        => ['UserController', 'remove'],
    '/connexion'        => ['UserController', 'connexion'],
    '/modifier'         => ['UserController', 'modifier'],
    '/deconnexion'      => ['UserController', 'deconnexion'],
    '/profil'           => ['UserController', 'profil'],

    //Car
    '/ajoutcar'         => ['CarController', 'ajtcar'],
    '/admincar'         => ['CarController', 'tab_car'],
    '/suppcar'          => ['CarController', 'removecar'],
    '/modifiercar'      => ['CarController', 'modifcar'],
    '/modifcar'         => ['CarController', 'modifiercar'],
    '/voircar'          => ['CarController', 'voircar'],
    '/listcar'          => ['CarController', 'listcar'],



    //Category
    '/addCategorie'     => ['CatController', 'addCategorie'],
    '/admincat'         => ['CatController', 'tab_cat'],
    '/showcat'          => ['CatController', 'cat'],
    '/suppcat'          => ['CatController', 'removecat'],

    //Achat
    '/panier'           => ['AchatController', 'panier'],



];
