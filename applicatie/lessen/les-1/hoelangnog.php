<!-- 
<?php
$vandaag = date_create('now');
$datum = $vandaag->format('d-F-Y h');

$eindDatum = date_create("05-12-2025 00:00");

$verschil = date_diff($vandaag, $eindDatum);
$verschilTekst = $verschil->format('%a dagen en %h uren');

?>
<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <title>PHP voorbeeld</title>
</head>
<body>
    Het is vandaag <?= $datum ?>.<br>
    Het duurt nog <?= $verschilTekst; ?> tot Sinterklaas.<br>
</body>
</html> -->


<?php
$vandaag = date_create('now');
$datum = $vandaag->format('d-F-Y h');

$eindDatum = date_create("05-12-2025 00:00");
$eindDatum = date_create($_GET["eventdate"]);

$verschil = date_diff($vandaag, $eindDatum);
$verschilTekst = $verschil->format('%a dagen en %h uren');

?>

<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <title>PHP voorbeeld</title>
</head>
<body>
    Het is vandaag <?= $datum ?>.<br>
    Het duurt nog <?= $verschilTekst; ?> tot <?= $_GET["event"]; //hij kijkt naar de name bij input type ?>.<br>

    <form action="hoelangnog.php" method="get">
        <label for="event">Event</label>
        <input type="text" name= "event"> <br>
        <label for="eventdate">EventDate</label> <br>
        <input type="date" name="eventdate" id="eventdate"> <br>
        <input type="submit" value="Reken Uit">
</body>
</html>
