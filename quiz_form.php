<?php
require_once 'log.php';

// Log l'affichage du formulaire
log_action('Affichage du formulaire');
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
        <input type="radio" name="question1" id="Paris" value="Paris">
        <label>Paris</label><br>
        <input type="radio" name="question1" id="Berlin" value="Berlin">
        <label>Berlin</label><br>
        <input type="radio" name="question1" id="Moscou" value="Moscou">
        <label>Moscou</label><br>
        <input type="radio" name="question1" id="Marseille" value="Marseille">
        <label>Marseille</label><br><br>
        
        <label for="question2">Quelle est la capitale de l'Allemagne ?</label><br>
        <input type="radio" name="question2" id="Berlin" value="Berlin">
        <label>Berlin</label><br>
        <input type="radio" name="question2" id="Paris" value="Paris">
        <label>Paris</label><br>
        <input type="radio" name="question2" id="Algerie" value="Algerie">
        <label>Algerie</label><br>
        <input type="radio" name="question2" id="Tokyo" value="Tokyo">
        <label>Tokyo</label><br><br>

        <input type="submit" value="Soumettre">
    </form>
</body>
</html>