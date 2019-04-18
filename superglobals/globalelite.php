<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
if(isset($_GET['name'], $_GET['age'])){
    echo 'Hey there '.$_GET['name'].', You are '.$_GET['age'].' years old.';
}else{
    echo 'One of the required GET variables does not exist';
}

echo '<pre>'.print_r($_SERVER, true).'</pre>';
?>
</body>
</html>