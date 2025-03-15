
<h3>Tester données reçues par POST d'un formulaire</h3><br>
<?php
    echo "<strong>Données reçues par POST d'un formulaire</strong><br>"; 
    $nom = $_POST['nom'];
    $age = $_POST['age'];  
    $sexe = $_POST['sexe'];

    echo "Nom = $nom <br>";
    echo "Âge = $age <br>";
    echo "Sexe = $sexe <br>";
?>
<br>
<a href="../index.html">Retour à la page d'accueil</a>