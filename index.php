<?php

include 'Comparable.php';
include 'ISport.php';
include 'Club.php';
include 'Sport.php';
include 'SportBallon.php';
include 'SportRelais.php';
include "data.php";

$dbh = new PDO('mysql:host=localhost;dbname=gestionClub', 'nathan', 'Nathan2806');
foreach($dbh->query('SELECT * from club') as $row) {
    print_r($row);
    }

echo '<h2>LISTE DES CLUBS</h2><br>';
foreach ($club as $keyClub => $valueClub){
    echo "<a href=result.php?id={$keyClub}>{$keyClub} - {$valueClub->getNomClub()} {$valueClub->getNbPoints()}</a><br>";
}

echo "<br>
        FORMULAIRE ID CLUB
      <br>
      <form method='post' name='formIdClub' action='result.php'>
        <label for='club-select'></label>        
            <select name='IdClub' id='club-select'>
                <option value=''>--Choisir un club--/</option>";
foreach ($club as $kCLub => $vClub){
    echo "<option value='".$vClub->getIdClub()."'>".$vClub->getNomClub()."</option>";
}
echo "</select>
            <br>
        <button type='submit'>Envoie</button>
      </form>";