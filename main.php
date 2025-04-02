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



echo $twig->render('quiz_form.html.twig', [
    'quizzes' => [
        'exo1' => [
            'question' => 'Quelle est la capitale de la France ?',
            'answers' => ['Paris', 'Lyon', 'Marseille', 'Toulouse'],
        ],
        'exo2' => [
            'question' => 'Quelle est la capitale de l\'Allemagne ?',
            'answers' => ['Berlin', 'Munich', 'Hambourg', 'Francfort'],
        ],
        'exo3' => [
            'question' => 'Quelle est la capitale de l\'Italie ?',
            'answers' => ['Paris', 'Lyon', 'Marseille', 'Toulouse', 'Rome'],
        ],        
    ],
]);

/* Utilisation de twig
// Affichage du formulaire
require_once 'quiz_form.php';
*/

log_action('Fin du programme');
?>