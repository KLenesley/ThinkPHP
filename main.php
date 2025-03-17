<?php
// filepath: c:\Users\KYLIAN\Documents\Prog\PHP\ThinkPHP\main.php

require 'vendor/autoload.php';
require 'db.php';
require 'log.php';

use Monolog\Level;
use Monolog\Logger;
use Monolog\Handler\StreamHandler;
use Symfony\Component\Dotenv\Dotenv;


// create a log channel
$log = new Logger('ThinkPHP');
$log->pushHandler(new StreamHandler('logs/info.log', Level::Debug));

// Chargement Variable d'environnement
$dotenv = new Dotenv();
$dotenv->load(__DIR__.'/.env');

$log->info('Debut du programme');

// Affichage du formulaire
require 'quiz_form.php';

$log->info('Fin du programme');
?>