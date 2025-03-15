
<h3>Tester données reçues par GET d'un formulaire</h3><br>
<?php
    echo "<strong>Données reçues par POST d'un formulaire</strong><br>"; 
    $nom = $_POST['nom'];
    $age = $_POST['age'];  
    $sexe = $_POST['sexe'];
    
    $nom_photo = $_FILES['photo']['name'];
    //$taille = $_FILES['photo']['size'];
    $nom_temp = $_FILES['photo']['tmp_name'];
    $extension = strrchr($nom_photo,".");

    $nouveau_nom = sha1($nom.time()).$extension;
    @move_uploaded_file($nom_temp,"photos/$nouveau_nom");
    echo "Nom de la photo = $nom_photo, de taille = $taille octets, nom temporaire = $nom_temp<br>";
    echo "Nom = $nom <br>";
    echo "Âge = $age <br>";
    echo "Sexe = $sexe <br>";
?>
<br>
<a href="../index.html">Retour à la page d'accueil</a>