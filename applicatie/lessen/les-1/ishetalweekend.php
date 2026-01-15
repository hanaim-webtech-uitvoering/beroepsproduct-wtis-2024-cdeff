<?php
$vandaag = date_create('now');
$datum = $vandaag->format('w');

echo "Is het al weekend? ";

switch ($datum) {
    case 1:
        echo "Nee nog lang niet";
        break;
    case 2:
        echo "Nee nog lang niet";
        break;
    case 3:
        echo "Nog even wachten";
        break;
    case 4:
        echo "Nog even wachten";
        break;
    case 5:
        echo "Bijna";
        break;
    case 6:
        echo "WEEKEND";
        break;
    case 0:
        echo "WEEKEND";
        break;
    
    default:
        echo "Een gewone dag.";
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Is Het Al Weekend?</title>
</head>
<body>
</body>
</html>