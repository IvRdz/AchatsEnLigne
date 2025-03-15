
<h3>Tester données reçues par GET d'un formulaire</h3><br>
<?php
    echo "<strong>Données reçues par GET d'un formulaire</strong><br>"; 
    $nom = $_GET['nom'];
    $age = $_GET['age'];  
    $sexe = $_GET['sexe'];

    echo "Nom = $nom <br>";
    echo "Âge = $age <br>";
    echo "Sexe = $sexe <br>";
?>
<br>
<a href="../index.html">Retour à la page d'accueil</a>