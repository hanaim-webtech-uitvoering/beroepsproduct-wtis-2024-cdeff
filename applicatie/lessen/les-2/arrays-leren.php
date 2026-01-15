<?php
$eenTMTTien = [];
$begin = 1;
$eind = 10;
 for($x = $begin; $x <=$eind; $x++){
    $eenTMTTien[$x]=$x;
 }

// var_dump($eenTMTTien);

$zesTMVijftien = [];
$begin = 6;
$eind = 15;
for($x = $begin; $x <=$eind; $x++){
    $zesTMVijftien[$x]=$x;
}

//var_dump($zesTMVijftien);
$samengevoegd[]= array_merge($eenTMTTien, $zesTMVijftien);

var_dump($samengevoegd);

$film = [
    'titel' => 'Fuck You',
    'jaar' => 666,
    'regisseur' => '2minutes Notice',
    'hoofdrolsepelers' => 'music & characters'
];

?> 