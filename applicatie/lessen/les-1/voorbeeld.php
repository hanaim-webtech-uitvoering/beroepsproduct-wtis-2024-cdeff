<?php
// om dit werkend te hebben moet je het naar de folder applicatie verschijven
//http://localhost:8080/voorbeeld.php?naam
$naam = 'Sedef Bulut';


$vandaag = date_create('now');
$datum = $vandaag->format('d-F-Y');

$_GET['naam']


?>
<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <title>PHP voorbeeld</title>
</head>
<body>
    Hallo <?= $naam ?>.<br>
    Het is vandaag <?= $datum ?>.

    <?php
echo 'Hello '. $_GET['naam'] .'!';
//?naam=Sedef om dit werkend te hebben
?>

</body>
</html>
