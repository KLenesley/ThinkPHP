<?php
require_once 'db.php';
require_once 'log.php';

$nbParam = count($_POST) ;
echo " Vous avez répondu à $nbParam questions <br><br>";

try {
    foreach ($_POST as $key => $value) {
        $stmt = $pdo->prepare("SELECT answerF FROM quiz_test WHERE id = :id");
        $stmt->bindParam(':id', $key);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($result['answerF'] == $value) {
            echo "Bonne réponse pour la question $key !<br>";
        } else {
            echo "Mauvaise réponse pour la question $key !<br>";
            echo "Votre réponse était : " . $value . "<br>";
            echo "La bonne réponse était : " . $result['answerF'] . "<br>";
        }
        echo "<br>";
    }
} catch (Exception $e) {
    log_action("Erreur : " . $e->getMessage());
    echo "Une erreur s'est produite : " . $e->getMessage() . "<br>";
}

echo "<br> Retour à la page d'accueil <a href='index.php'>ici</a>";

?>