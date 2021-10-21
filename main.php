<?php
require("agence.php");
require("client.php");
require("compte.php");
require("constante.php");
require("ConnexionSingleton.php");

$choix=0;
$delimiter=";";
while ($choix!= 8){
    echo("\n");
    echo("1 :Créer une agence\n");
    echo("2 :Créer un client\n");
    echo("3 :Créer un compte bancaire\n");
    echo("4 :Recherche de compte (numéro de compte)\n");
    echo("5 :Recherche de client (Nom, Numéro de compte, identifiant de client)\n");
    echo("6 :Afficher la liste des comptes d’un client (identifiant client)\n");
    echo("7 :Imprimer les infos client (identifiant client)\n");
    echo("8 :Quitter le programme\n");
    $choix=readline("faites votre choix : ");
    switch($choix){
    case 1 : 
        $nomAgence=readline("Entrez le nom de l'agence : ");
        $adresseAgence=readline("Entrez l'adresse de l'agence : ");
        $codeAgence=readline("Entrez le code de l'agence : ");
        $fileLines=file(FILE_AGENCE);
        
        $id_agence=count($fileLines);

        $nouvelleAgence=new Agence($id_agence,$nomAgence,$adresseAgence,$codeAgence);
        echo($nouvelleAgence);
        
        
    break;
    
    break;
    case 3 : 


    break;
    case 4 :
        echo("yes client");
    break; 
    case 5 : 
        echo ("yes agence");
    break;
    case 6 :
        echo("yes client");
    break;           
    case 7 : 
        echo ("yes agence");
    break;
    }};

?>