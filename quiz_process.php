<?php
require 'db.php';
require 'log.php';

$question1 = $_POST['question1'];
$question2 = $_POST['question2'];

log_action("Quiz submitted with answers: Q1 - $question1, Q2 - $question2");

$stmt = $pdo->prepare("INSERT INTO quiz_answers (question1, question2) VALUES (:question1, :question2)");
$stmt->bindParam(':question1', $question1);
$stmt->bindParam(':question2', $question2);
$stmt->execute();

echo "Merci pour vos réponses !";
?>