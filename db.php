<?php
// filepath: c:\Users\KYLIAN\Documents\Prog\PHP\ThinkPHP\db.php
require 'vendor/autoload.php';
require_once 'log.php'; // Include the log file

use Symfony\Component\Dotenv\Dotenv;

$dotenv = new Dotenv();
$dotenv->load(__DIR__.'/.env');

$host = $_ENV['DB_HOST'];
$db = $_ENV['DB_NAME'];
$user = $_ENV['DB_USER'];
$pass = $_ENV['DB_PASS'];
$dialect = $_ENV['DB_DIALECT'];

try {
    $pdo = new PDO("$dialect:host=$host;dbname=$db", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    log_action("Erreur de connexion à la base de données : " . $e->getMessage());
    echo "Une erreur est survenue lors de la connexion à la base de données.";
}
?>