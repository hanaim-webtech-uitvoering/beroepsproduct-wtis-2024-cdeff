<?php
require_once 'db_connectie.php';

// 1. Ophalen van de data
// maak verbinding met de database (zie db_connection.php)
$db = maakVerbinding();

// haal alle componisten op en tel het aantal stukken
// $query = 'select stuknr, titel, genrenaam from Stuk
// where genrenaam = \'jazz\'';

getSelectBox(){
  $genreQuery = 'select genrenaam from Genre';
  $data = $db->prepare($genreQuery);
  $data->execute();
  $rows = $data->fetchAll();

  foreach($rows as $genre) {
  "<option value="$genre['genrenaam']">"$genre['genrenaam']"</option>";
  }
}

$query = 'select stuknr, titel, genrenaam from Stuk
where genrenaam = :genrenaam';
if(isset($_GET['genrenaam'])){
$genre = $_GET['genrenaam'];
}
else {
  $genre = 'jazz';
}


// voer de query uit op de database
$data = $db->prepare($query);
//fecth stuff
$data->execute([
  ':genrenaam' => $genre
]);

$rows = $data->fetchAll();

// 2. Renderen van de data
// Begin van de "table"
$componisten_table = '<table>';
// De "table heads"
$componisten_table = $componisten_table . '<tr><th>Id</th><th>Naam</th><th>Aantal stukken</th></tr>';

// Elke rij als een "table row"
foreach($rows as $rij) {
  $id = $rij['stuknr'];
  $naam = $rij['titel'];
  $aantal = $rij['genrenaam'];
  $componisten_table = $componisten_table . "<tr><td>$id</td><td>$naam</td><td>$aantal</td></tr>";
}

// Eind van de "table"
$componisten_table = $componisten_table . "</table>";

?>
<!DOCTYPE html>
<html lang="nl">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Componisten stukken</title>
</head>
<body>
<h1>Kies genre</h1>
<form action="" method="get">
  <select name="genrenaam" id="genrenaam">
    <?= getSelectBox(); ?>
    <option value="jazz">jazz</option>
    <option value="pop">Pop</option>
  </select>
  <input type="submit" value="Submit">
</form>

  <h1>Componisten met aantal geschreven stukken</h1>
  <!-- 3. Weergeven van de data -->
  <?= $componisten_table ?>
</body>
</html>
