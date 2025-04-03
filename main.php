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
$twig = new \Twig\Environment($loader,  [
    'debug' => true,
]);
$twig->addExtension(new \Twig\Extension\DebugExtension());

try {
    $stmt = $pdo->prepare("SELECT COUNT(id) FROM quiz_answers");
    $stmt->execute();
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    foreach ($result as $key => $value) {
        // for ($i = 1; $i <= 8; $i++) {
        //     $stmt = $pdo->prepare("SELECT COUNT(answer" . $key . ") FROM quiz_answers WHERE answer" . $key . " IS NOT NULL");
        //     $stmt->execute();
        //     $result = $stmt->fetch(PDO::FETCH_ASSOC);
        // }
        // SELECT ??? FROM quiz_answers WHERE answer??? IS NOT NULL
        // for ($i = 1; $i <= $nbcolNONNUL; $i++) {
            $stmt = $pdo->prepare("SELECT quiz_questions.id, quiz_questions.question as question, quiz_answers.answer, quiz_answers.answerF 
            FROM quiz_questions JOIN quiz_answers ON quiz_questions.id = quiz_answers.question_id;");
            $stmt->execute();
            // $result = $stmt->fetch(PDO::FETCH_ASSOC);
            $quizzes = $stmt->fetchAll();            
            // echo "Réponse " . $i . " : " . $result['answer' . $i] . "<br>"; 
        // }
    }
}
catch (Exception $e) {
    log_action("Erreur : " . $e->getMessage());
    echo "Une erreur s'est produite : " . $e->getMessage() . "<br>";
}

echo $twig->render('quiz_form.html.twig', [
    'quizzes' => $quizzes,
    // 'quizzes' => [
    //     '1' => [
    //         'question' => 'Quelle est la capitale de la France ?',
    //         'answers' => ['Paris', 'Lyon', 'Marseille', 'Toulouse',''],
    //     ],
    //     '2' => [
    //         'question' => "Quelle est la capitale de l'Allemagne ?",
    //         'answers' => ['Berlin', 'Munich', 'Hambourg', 'Francfort'],
    //     ],
    //     '3' => [
    //         'question' => 'Quelle est la capitale de l\'Italie ?',
    //         'answers' => ['Paris', 'Lyon', 'Marseille', 'Toulouse', 'Rome'],
    //     ],
    //     '4' => [
    //         'question' => 'Quelle est la capitale de l\'Espagne ?',
    //         'answers' => ['Madrid', 'Barcelone', 'Valence', 'Séville','Lisbonne','Rome','Paris','Berlin'],
    //     ],
    // ],
]);

/* Utilisation de twig
// Affichage du formulaire
require_once 'quiz_form.php';
*/

log_action('Fin du programme');
?>