    <?php
    // declareren van variables, username, paswoord etc. die we terug gebruiken in de mysqli connect
    // om een connectie te maken.

    DEFINE('DB_USER', 'root');
    DEFINE('DB_PSWD', 'Supersystem22');
    DEFINE('DB_HOST', 'localhost');
    DEFINE('DB_NAME', 'weatherapp');

    // Maken van een connectie met de database.
    // Steken deze in een variable en gebruiken var's van hierboven en 
    // Kunnen we heel het project door gebruiken.

    $dbcon = mysqli_connect(DB_HOST, DB_USER, DB_PSWD, DB_NAME);
    

    
    // if (!$dbcon) {
    //              die("error connecting to database");
    //              }
    //      echo 'connected succesfully'

    ?>