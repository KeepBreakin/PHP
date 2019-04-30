<?php
// start session
session_start();

//connection DB
require('dbconn3.php');

// Composer/hash
require('vendor/autoload.php');

$errors = [];
$messages = [];

//Retrieve the field values from our registration form.
if (isset($_POST['register'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $password2 = $_POST['password2'];
    $email = $_POST['emailadres'];


    $pwHash = password_hash($password, PASSWORD_BCRYPT, array("cost" => 12));
    $pwHash2 = password_hash($password2, PASSWORD_BCRYPT, array("cost" => 12));

    if ($password != $password2) {
        $errors[] = 'The two passwords do not match';
    }

    if (empty($username) || empty($password) || empty($password2) || empty($email)) {
        if (empty($username)) {
            $errors[] = 'Username is empty';
        }

        if (empty($password)) {
            $errors[] = 'Password field is empty';
        }

        if (empty($password2)) {
            $errors[] = 'Repeat password field is empty';
        }
        if (empty($email)) {
            $errors[] = 'E-mail field is empty';
        }
    } else {

        //Prepare our INSERT statement.
        //Remember: We are inserting a new row into our users table.
        $sql = "INSERT INTO loginform (Username,Pass,emailadres,Pass2) 
    VALUES (:username, :password, :email, :password2)";

        $stmt = $pdo->prepare($sql);

        // Bind our var's
        $stmt->bindValue(':username', $username);
        $stmt->bindValue(':password', $pwHash);
        $stmt->bindValue(':password2', $pwHash2);
        $stmt->bindValue(':email', $email);

        $stmt->execute();


        if ($stmt) {
            $messages[] =  'Thank u for registering';
            // header("refresh:5;login.php");
        } else {
            $errors[] = 'Registration failed';
        }
    }
}

?>



<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="stylereg.css" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

</head>

<body>
    <div class="container">
        <form method="post" action="register.php">

            <div class="form-input"><input type="text" name=" username" placeholder="Username" /> </div>
            <div class="form-input"><input type="password" name="password" placeholder="Password" /> </div>
            <div class="form-input"><input type="password" name="password2" placeholder="Repeat password" /> </div>
            <div class="form-input"><input type="text" name="emailadres" placeholder="E-mailadres" /></div><br><br>
            <button type="submit" name="register" value="REGISTER" class="btn-register">REGISTER</button>
            <?php include('errors.php'); ?>
            <?php include('messages.php'); ?>

        </form>
    </div>

</body>

</html>