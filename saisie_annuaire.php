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
    <h1>Saisie annuaire</h1>
    <form method="post" action="traitement_form_saisie.php">
      
      <!-- formulaire : NIGEND -->
      <label for="nigend">Nigend</label> : 
      <input name="nigend" type="text" id="nigend" required autofocus />
      <br><br>
      
      <!-- formulaire : UNITE -->
      <label for="unite">Unité</label> :
      <select name="unite" id="unite" required>
        <option value="12054">12054 SSIC</option>
        <option value="5446">5446 GGD36</option>
        <option value="12055">12055 SAI</option>
        <option value="17366">17366 CORG</option>
      </select>
      <br><br>
      
      <!-- formulaire : NOM -->
      <label for="nom">Nom</label> : 
      <input name="nom" type="text" id="nom" required />
      <br><br>
      
      <!-- formulaire : PRENOM -->
      <label for="prenom">Prénom</label> :
      <input name="prenom" type="text" id="prenom" required />
      <br><br>
      
      <!-- formulaire : GRADE -->
      <label for="grade">Grade</label> :
      <select name="grade" id="grade" required>
        <optgroup label="OFF">
          <option value="GAL">GAL</option>
          <option value="COL">COL</option>
          <option value="LCL">LCL</option>
          <option value="CEN">CEN</option>
          <option value="CNE">CNE</option>
          <option value="LTN">LTN</option>
        </optgroup>
        <optgroup label="S/OFF">
          <option value="MAJ">MAJ</option>
          <option value="ADC">ADC</option>
          <option value="ADJ">ADJ</option>
          <option value="MDC">MDC</option>
          <option value="GND">GND</option>
          <option value="MDL">MDL</option>
        </optgroup>
        <optgroup label="GAV">
          <option value="BRC">BRC</option>
          <option value="BRI">BRI</option>
          <option value="GAV">GAV</option>
        </optgroup>
        
       </select>
      <br><br><br><br>
      
      <!-- BOUTONS -->

      
      <input type="submit" value="Envoyer" />
      
      <input type="reset" value="Effacer" />
      <br><br>
      
    </form>
  </body>
</html>