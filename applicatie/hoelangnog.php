<?php
$naam = 'voornaam achternaam';
$vandaag = date_create('now');
$datum = $vandaag->format('d-m-Y');

$maaksinterklaas = date_create('06-12-2024');
$sinterklaas = $maaksinterklaas->format('d-m-Y');

$verschil = date_diff($vandaag, $maaksinterklaas);

$start = $_GET['startdatum'];
// $startdatum = $start->format('d-m-Y')

// $dag = $verschil ->number_format(2)

?>
<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <title>PHP voorbeeld</title>
</head>
<body>
    Hallo <?= $naam ?>.<br>
    Het is vandaag <?= $datum ?>.<br>

    <?php
echo 'Op '. $sinterklaas .' is het in Sinterklaas';
?> .<br>

<?php
echo 'Nog '. $verschil->h .'uren tot sinterklaas';
?>

<form action="" method="get" class="inlog">
            <div>
                <label for="startdatum">Startdatum</label>
                <input type="date" name="startdatum" id="startdatum">
            </div>
            <div>
                <label for="einddatum">einddatum</label>
                <input type="text" name="einddatum" id="eindatum">
            </div>
            <div>
                <button type="submit">reken uit</button>
            </div>

        </form>        

        <br>
        <h1>Uitgerekend</h1>

        <?php
echo 'Startdatum '. $_GET["startdatum"] .'!';
?>
        <?php
echo gettype($start)
?>


</body>
</html>
