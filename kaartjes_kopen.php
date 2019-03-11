

<a href="als_je_in_bent_gelogt.html">Terug naar kaartjes kopen</a>

<?php
/**
 * Created by PhpStorm.
 * User: niels
 * Date: 10-1-2019
 * Time: 13:03
 */

//$voornaam = $_POST['voornaam'];
//$achternaam= $_POST['achternaam'];
//$wachtwoord= $_POST['wachtwoord'];
$naam = $_POST['naam'];
//$mail = $_POST['mail'];
$prijs = $_POST['prijs'];
$kaartsoorten_id = $_POST['kaartsoorten_id'];



//1. CONNECTIE MAKEN MET DE DATABASE
$dbc = mysqli_connect(  'localhost' ,  'niels' ,  '1234' ,  'database_zwembad') or die ('Error connecting.');

//2. OPDRACHT (QUERY) SCHRIJVEN VOOR DATABASE
$query = "SELECT naam FROM kaartsoorten WHERE kaartsoorten_id = $kaartsoorten_id";

//3. QUERY UITVOEREN
$result = mysqli_query( $dbc, $query) or die ('Error van de data.');
//VERBINDING VERBREKEN
mysqli_close($dbc);

//BEVESTIG DAT JE IN DE DATABASE ZIT

if ($result) {

    echo 'De volgende gegevens zijn toegevoegd aan de database:<br>';
    echo $naam . '<br>';
    echo $prijs . '<br>';
    echo $kaartsoorten_id . '<br>';

}   else {
    echo 'Sorry er iets mis gegaan. Probeer het opnieuw.';
}
?>

