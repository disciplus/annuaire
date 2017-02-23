<?php

try
{
  $bdd = new PDO('mysql:host=localhost;dbname=annuaire', troll, anpwzbox);
}
catch(Exception $e)
{
  die('Erreur : '.$e->getMessage());
}
?> 

