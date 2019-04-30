<?php
include('dbconn2.php');
$errormsg = "Username or Password is invalid";
$succesmsg = "You have been successfully logged in";
$_SESSION['Error'] = "You left one or more of the required fields.";

if (isset($_POST['form1'])) {
    $uname = $_POST['user'];
    $passw = $_POST['password'];
    
    $sqlstm = ("SELECT * FROM loginform WHERE Username = '$uname'");
    if (empty($uname) || empty($passw)) {

        echo $errormsg;
    }

    $result = mysqli_query($dbconnect, $sqlstm);
    $rows = mysqli_fetch_array($result);


    if ($rows["Pass"] == $passw) {
        echo "Welcome&nbsp;" . $uname . "!!";
    } else {
        echo $errormsg;
    }
    header('Refresh: 2; URL = login.php');
} ?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="stylelog.css"/>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

</head>

<body>
    <div class="container">
        <form method="POST" action="#">
            <input type="hidden" name="form1" value="" />
            <div class="form-input">
                <input type="text" name="user" placeholder="Username" />
            </div>
            <div class="form-input">
                <input type="password" name="password" placeholder="Password" />
            </div><br>
            <input type="submit" name="submit" value="LOGIN" class="btn-login" />
            <p class="result" name="result"></p>

        </form>

        <div class="cleansession">Shoot <a href="logout.php"><i class="fas fa-crow fa-1g"></i> to clean session.</div>
    </div>
</body>

</html>