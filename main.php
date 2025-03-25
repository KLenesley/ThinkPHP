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

// Affichage du formulaire
require_once 'quiz_form.php';

log_action('Fin du programme');
?>