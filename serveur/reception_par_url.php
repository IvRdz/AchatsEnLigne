
<h3>Tester données reçues par URL</h3><br>
<?php
    echo "<strong>Données reçues</strong><br>"; 
    $nom = $_GET['nom'];
    $age = $_GET['age'];  
    $sexe = $_GET['sexe'];

    echo "Nom = $nom <br>";
    echo "Âge = $age <br>";
    echo "Sexe = $sexe <br>";
?>