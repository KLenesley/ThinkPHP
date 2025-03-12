<?php

require 'quiz_form.php';

use Monolog\Level;
use Monolog\Logger;
use Monolog\Handler\StreamHandler;
use Symfony\Component\Dotenv\Dotenv;

function reponseQuiz($l, $DATABASE_HOST, $DATABASE_NAME, $DATABASE_TABLE, $DATABASE_USER, $DATABASE_PASS, $DATABASE_PORT, $DATABASE_DIALECT)
{
    try {
        $l->info('Connection réussie');
        $dbh = new PDO("$DATABASE_DIALECT:host=$DATABASE_HOST;port=$DATABASE_PORT;dbname=$DATABASE_NAME", $DATABASE_USER, $DATABASE_PASS);

        $stmt = $dbh->prepare("INSERT INTO $DATABASE_TABLE () VALUES ()");

        $idQestion = ;
        $true = ;
        $false = ;

        $stmt->bindParam(':idQ', $idQestion);
        $stmt->bindParam(':true', $true);
        $stmt->bindParam(':false', $false);

        $stmt->execute();
    } catch (PDOException $e) {
        $l->error('Erreur: ' . $e->getMessage());
    }

    $l->info('Question ajoutée');
}

// create a log channel
$log = new Logger('ThinkPHP');
$log->pushHandler(new StreamHandler('logs/info.log', Level::Debug));

// Chargement Variable d'environnement
$dotenv = new Dotenv();
$dotenv->load(__DIR__.'/.env');

$log->info('Debut du programme');

print ("Fin du programme \n");
?>