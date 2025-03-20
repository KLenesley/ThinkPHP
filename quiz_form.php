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
    <form action="quiz_process.php" method="POST">
        <label for="question1">Quelle est la capitale de la France ?</label><br>
        <input type="checkbox" name="Paris" id="???">
        <label>Paris</label><br>
        <input type="checkbox" name="Berlin" id="???">
        <label>Berlin</label><br>
        <input type="checkbox" name="Moscou" id="???">
        <label>Moscou</label><br>
        <input type="checkbox" name="Marseille" id="???">
        <label>Marseille</label><br><br>
        
        <label for="question2">Quelle est la capitale de l'Allemagne ?</label><br>
        <input type="checkbox" name="Berlin" id="???">
        <label>Berlin</label><br>
        <input type="checkbox" name="Paris" id="???">
        <label>Paris</label><br>
        <input type="checkbox" name="Algerie" id="???">
        <label>Algerie</label><br>
        <input type="checkbox" name="Tokyo" id="???">
        <label>Tokyo</label><br><br>

        <input type="submit" value="Soumettre">
    </form>
</body>
</html>