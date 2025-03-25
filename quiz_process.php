<?php
require_once 'db.php';
require_once 'log.php';

/* Codde du début, plus d'utilité pour l'instant
$question1 = $_POST['question1'];
$question2 = $_POST['question2'];

log_action("Quiz submitted with answers: Q1 - $question1, Q2 - $question2");

$stmt = $pdo->prepare("INSERT INTO quiz_answers (question1, question2) VALUES ($question1, $question2)");
$stmt->bindParam(':question1', $question1);
$stmt->bindParam(':question2', $question2);
$stmt->execute();

echo "Merci pour vos réponses !";
*/

$question = [1,2];
$answer1 = $_POST['question1'];
$answer2 = $_POST['question2'];

foreach ($question as $key => $value) {
    $stmt = $pdo->prepare("SELECT answer FROM quiz_answers WHERE id = :id");
    $stmt->bindParam(':id', $value);
    $stmt->execute();
    $result = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($result['answer'] == ${'answer' . $value}) {
        echo "Bonne réponse pour la question $value !<br>";
    } else {
        echo "Mauvaise réponse pour la question $value !<br>";
        echo "La bonne réponse était : " . $result['answer'] . "<br>";
    }
}

?>