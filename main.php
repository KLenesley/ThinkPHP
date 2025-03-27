<?php
// filepath: c:\Users\KYLIAN\Documents\Prog\PHP\ThinkPHP\main.php

require_once 'vendor/autoload.php';
require_once 'db.php';
require_once 'log.php';

use Symfony\Component\Dotenv\Dotenv;

// Chargement Variable d'environnement
$dotenv = new Dotenv();
$dotenv->load(__DIR__.'/.env');

log_action('Debut du programme');

$loader = new \Twig\Loader\FilesystemLoader('templates/');
$twig = new \Twig\Environment($loader);

$A1 = ['Paris', 'Lyon', 'Marseille', 'Toulouse'];
$A2 = ['Berlin', 'Munich', 'Hambourg', 'Francfort'];


echo $twig->render('quiz_form.html', [
    'Q1' => 'Quelle est la capitale de la France ?',
    'Q2' => 'Quelle est la capitale de l\'Allemagne ?',
    'A1' => $A1,
    'A2' => $A2,
]);

/* Utilisation de twig
// Affichage du formulaire
require_once 'quiz_form.php';
*/

log_action('Fin du programme');
?>