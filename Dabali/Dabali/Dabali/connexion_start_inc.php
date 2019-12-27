<?php
session_start();
try{
    $pdo=new PDO("mysql:host=localhost;dbname=dabali","root", "");
    }
    catch(Exception $e)
    {
    die('Erreur de connexion à la base de données : '.$e->getMessage());
    }

?>


