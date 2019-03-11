<?php
/**
 * Created by PhpStorm.
 * User: niels
 * Date: 10-1-2019
 * Time: 13:03
 */

$voornaam = $_POST['voornaam'];
$achternaam= $_POST['achternaam'];
$wachtwoord= $_POST['wachtwoord'];
$mail = $_POST['mail'];

//$kaartsoort = $_POST['kaartsoort'];


//1. CONNECTIE MAKEN MET DE DATABASE
$dbc = mysqli_connect(  'localhost' ,  'niels' ,  '1234' ,  'database_zwembad') or die ('Error connecting.');

//2. OPDRACHT (QUERY) SCHRIJVEN VOOR DATABASE
$query = "SELECT * FROM gebruikers WHERE voornaam = '$voornaam' AND achternaam = '$achternaam' AND wachtwoord = '$wachtwoord' 
AND mail = '$mail'";

//3. QUERY UITVOEREN
$result = mysqli_query( $dbc, $query) or die ('Error van de data.');
//VERBINDING VERBREKEN
mysqli_close($dbc);

$aantal = mysqli_num_rows($result);

//BEVESTIG DAT JE IN DE DATABASE ZIT

if ($aantal > 0) {

   header("Location: als_je_in_bent_gelogt.html");

}   else {
    echo 'Sorry er iets mis gegaan. Probeer het opnieuw.';
}
?>
<a href="index.html">HOME</a>
