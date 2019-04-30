<?php 


try {
    $conn = new \PDO("mysql:host=localhost;dbname=weatherapp", 'root', 'Supersystem22');
    // set the PDO error mode to exception
    $conn->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);

    echo "Connected successfully"; 
} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}

$queryInsert = <<<QUERY
        INSERT INTO Weather (city, high, low) 
        VALUES (:city, :high, :low)
QUERY;

$stmtInsert = $conn->prepare($queryInsert);

$stmtInsert->execute(['city' => 'Dortmund', 'high' => 30, 'low' => 30]);

$querySelect = 'SELECT * FROM Weather';
$stmt = $conn->query($querySelect);
$result = $stmt->fetchAll();

var_dump($result);

echo "Low of genk is : ".$result['Genk'];





