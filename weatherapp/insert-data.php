<?php

// Maak connectie.
include('dbconn.php');

// FORM 1
if (isset($_POST['form1'])) {

    // Alles wat user ingeeft in een variable steken om in $sqlinsert te hergebruiken.
    $city = $_POST['city'];
    $high = $_POST['high'];
    $low = $_POST['low'];


    // Als velden leeg zijn, change color + tekst. 
    if (empty($city) || empty($high) || empty($low)) {

        if (empty($city)) {
            echo "<font color='red'>City field is empty.</font><br/>";
        }

        if (empty($high)) {
            echo "<font color='red'>High temp field is empty.</font><br/>";
        }

        if (empty($low)) {
            echo "<font color='red'>Low temp field is empty.</font><br/>";
        }
    } else {

        // Variable met opdracht alle input toe te wijzen aan bepaalde "Table" van DB Weather.
        $sqlinsert = "INSERT INTO Weather (city, high, low) VALUES ('$city', $high, $low)";

        // Perfom queries met bepaalde parameter variables $dbcon & $sqlinsert.
        if (!mysqli_query($dbcon, $sqlinsert)) {
            die('error');
        }
    }
    // Zodra form posted is-> redirect naar refresh.php.
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        header('location: refresh.php');
    }
} // Einde if statement

?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>

    <h2>Insert Data into DB</h2>

    <form method="post" action="insert-data.php">
        <input type="hidden" name="form1" value="" />
        <fieldset>
            <legend>New city </legend>
            <label>City <input type="text" name="city" /></label>
            <label>High <input type="number" name="high" /></label>
            <label>Low <input type="number" name="low" /></label>
        </fieldset>
        <br />
        <input type="submit" value="Add new city to table" />
    </form>

</body>


</html>