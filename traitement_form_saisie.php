<!DOCTYPE html>
<html lang="fr">
<head>
    <title>Accueil</title>
    <meta charset="utf-8">
    <meta name="author" content="Disciplus Simplex"/>
    <meta name="keywords" content="PHP, Base annuaire"/>
    <link rel="icon" type="image/x-icone" href="images/pirate.ico"/>
    <link rel="stylesheet" type="text/css" href="css/standard.css" />
</head>

<body>


    <?php
        require 'connect.php';
    ?>

    <?php
    // Permet la vérif des infos du tablo $_POST
        echo "Nom : ".$_POST['nom'];
        echo '<br>';
        echo "Prénom : ".$_POST['prenom'];
        echo '<br>';
        echo "Unité : ".$_POST['unite'];
        echo '<br>';
        echo "Nigend : ".$_POST['nigend'];
        echo '<br>';
        echo "Grade : ".$_POST['grade'];
        echo '<br>';
        echo "Ca marche !!";
        echo "yop !!";
    ?>
  <br><br>

<!-- ****************************** BOUTONS **************************** -->
<form>
  <!-- Rafraichir -->
  <input type="button" onclick='window.location.reload(false)' value="Actualiser"/>
  <!-- Retour -->
  <input type="button" value="Saisie annuaire" onclick="history.go(-1)">
</form>





<?php
// Ecriture des données dans la base 'Annuaire'

$req = $bdd->prepare('INSERT INTO personnel(nigend, nom, prenom, grade, unite) VALUES(:nigend, :nom, :prenom, :grade, :unite)');
$req->execute(array(
    'nigend' => $_POST['nigend'],
    'nom' => $_POST['nom'],
    'prenom' => $_POST['prenom'],
    'grade' => $_POST['grade'],
    'unite' => $_POST['unite'],
));
?>

<br><br>
<hr>
<h2>Liste des Personnels</h2>

<?php
$reponse = $bdd->query('SELECT * FROM personnel ORDER BY nom');

// On affiche chaque entrée une à une
while ($donnees = $reponse->fetch())
{

?>
    <p>
    <strong>Nigend</strong> : <?php echo $donnees['nigend']; ?><br />
    <strong>Nom</strong> : <?php echo $donnees['nom']; ?><br />
    <strong>Prénom</strong> : <?php echo $donnees['prenom']; ?><br />
    <strong>Grade</strong> : <?php echo $donnees['grade']; ?><br />
    <strong>Unite</strong> : <?php echo $donnees['unite']; ?><br />

<?php
}
$reponse->closeCursor();            // Termine le traitement de la requête

/*
$consult = $bdd->query('SELECT nigend, nom, prenom FROM personnel ORDER BY nom');
print $consult;
echo "bonjour4";  */

?>
</p>
</body>
</html>
