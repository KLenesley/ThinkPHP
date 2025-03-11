<?php
require 'log.php';
log_action("Quiz form displayed");
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Quiz</title>
</head>
<body>
    <form action="quiz_process.php" method="post">
        <label for="question1">Quelle est la capitale de la France ?</label><br>
        <input type="text" id="question1" name="question1"><br><br>
        
        <label for="question2">Quelle est la capitale de l'Allemagne ?</label><br>
        <input type="text" id="question2" name="question2"><br><br>
        
        <input type="submit" value="Soumettre">
    </form>
</body>
</html>