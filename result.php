<?php
include 'Comparable.php';
include 'ISport.php';
include 'Club.php';
include 'Sport.php';
include 'SportBallon.php';
include 'SportRelais.php';
include "data.php";
echo '<a href="index.php">Accueil</a>';

if (isset($_GET['id']) || isset($_POST['IdClub'])){
    if (isset($_GET['id'])){
        $idClub = $_GET['id'];
    }
    else{
        $idClub = $_POST['IdClub'];
    }
    echo '<h2>Liste des sports de '.$club[$idClub]->getNomClub().'</h2>';
    $sp1 = $club[$idClub]->getLesSports();
    foreach ($sp1 as $keySp1 => $valueSp1){
        echo $valueSp1->getDescription();
    }
}