<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post</title>
</head>
<body>
    <h1>get formulier</h1>
    <p>
        <?php if (ISSET($_POST["zoekwoord"])) $_POST["zoekwoord"] ?>
    </p>
    <!-- dit kan ook inplaats van php echo, maar alleen als je iets wilt echoen en niet meer zie onder -->
     <!-- <?= $_POST["zoekwoord"] ?> -->
     <?php
    //  strtotime($_POST["date1"]);


     
    //  date_diff(new DateTime($_POST["date1"]), new datetIME($_POST["date2"]));
    //  HIERBOVEN WERK NIET OM DATE STRING TE WVERANDEREN IN DATE
    $date1 = new DateTime ($_POST["date1"]);
    $date2 = new DateTime ($_POST["date2"]);
    
    echo $date1->diff($date2)->days;

    $verschil = $date1->diff($date2);
    echo $verschil->days;
    
    // var_dump($_POST);
     ?>
    <form action="" method= "post">
        <input type="date" name="date1">
        <input type="date" name="date2">
        <input type="submit">

    </form>
</body>
</html>