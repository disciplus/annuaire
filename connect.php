<?php

try
{
  $bdd = new PDO('mysql:host=localhost;dbname=annuaire', troll, xxxxxxx);
}
catch(Exception $e)
{
  die('Erreur : '.$e->getMessage());
}
?> 

