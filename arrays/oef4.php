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
    // 2 lege arrays.
    $webdev = ["front-end" => [], "back-end" => []];

    // push string in Index "front-end" & "back-end"
    array_push($webdev["front-end"], "html", "CSS", "Javascript");
    array_push($webdev["back-end"], "Ruby on Rails", "Flash");

    // replace "html" in $webdev with "xhtml"
    $webdev = str_replace("html", "xhtml", $webdev["front-end"]);

    print_r($webdev);
    // remove key 1 ("Flash") from index back-end.
    unset($webdev["back-end"][1]);

    ?>
</body>

</html>