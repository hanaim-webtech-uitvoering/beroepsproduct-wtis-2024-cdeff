<?php
$menukaart = [
    "Eten" => [
        "Shoarma" => 6.95,
        "Appels" => 10.95,
        "Tabouleh" => 8.95,
        "Hamburger" => 5.50,
    ],
    "Drinken" => [
        "Cola" => 2.00,
        "Ayran"=> 2.30,
        "Fernandes" => 2.50,
        "Bier" => 5.50,
    ],
    "Toetjes" => [
        "Fuck You" => 100.00,
        "I Hate You" => 99.00
    ],
];

foreach($menukaart as $categorie => $items){
echo "<h2>$categorie</h2>";
echo "<table>";
    
foreach ($items as $naam => $prijs) {
    echo "<tr><td>$naam</td><td>&euro; $prijs </td></tr>";
}
     echo "</table>";   
    }
?>

<!DOCTYPE html>
<html lang="nl">
  <head>
    <meta charset="UTF-8" />
    <title>Restaurantmenu</title>
    <style>
      td:first-child {
        width: 8em;
      }
      td:nth-child(2) {
        font-style: italic;
        text-align: right;
        width: 4em;
      }
    </style>
  </head>
  <body>
    
    <h1>Menu</h1>

    <table>
        <tr><td>Shoarma</td><td>&euro; 6.95</td></tr>
        <tr><td>Appels</td><td>&euro; 10.95</td></tr>
        <tr><td>Tabouleh</td><td>&euro; 8.95</td></tr>
        <tr><td>Hamburger</td><td>&euro; 5.50</td></tr>
    </table>

    <h2>Drinken</h2>
    <table>
        <tr><td>Cola</td><td>&euro; 2.00</td></tr>
        <tr><td>Ayran</td><td>&euro; 2.30</td></tr>
        <tr><td>Fernandes</td><td>&euro; 2.50</td></tr>
        <tr><td>Bier</td><td>&euro; 5.50</td></tr>
    </table>
  </body>
</html>

