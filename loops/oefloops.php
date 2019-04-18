<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <?php
    for ($i = 1; $i < 10; $i++) {
        echo "$i. Hello world! <br/>";
    }

    $age = 0;

    while ($age < 18) {
        echo "You are not old enough!<br>";
        $age++;
    }
    $colors = array("red", "green", "blue", "yellow");

    foreach ($colors as $value) {
        echo "$value <br>";
    }
    ?>
</body>

</html>