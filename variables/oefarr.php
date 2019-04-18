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

    $me = ["first name" => "Manuel", "last name" => "Colomo", "Housenumber" => 66, "Male" => true];
    $hobbies = ["Soccer", "Fitness", "Gaming"];
    $merge1 = array_merge($me, $hobbies);
    $dad = ["Bart", "Colomo", "Old"];
    $dad2 = ["papa" => $dad];
    $me = array_merge($me, $dad2);
    array_push($hobbies, "taxidermie");
    echo count($hobbies);
    print_r($hobbies);
    $me["last name"] = "Peeters";
    print_r($me);

    $web_development = array(
        array("front-end","CSS")
    );
    echo $web_development[0][1];
    ?>

</body>

</html>