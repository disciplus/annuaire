<?php

try
{
  $bdd = new PDO('mysql:host=localhost;dbname=annuaire', xxxx, xxxxxxx);
}
catch(Exception $e)
{
  die('Erreur : '.$e->getMessage());
}
?> 

