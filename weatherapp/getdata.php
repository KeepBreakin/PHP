<?php
// Maak connectie.
include('dbconn.php');

// Variale $result = SQL statement -> variable $getdata = query met connectie + SQL statement.
$result = ("SELECT * FROM Weather ORDER BY city DESC");
$getdata = mysqli_query($dbcon, $result);

// Maak een table waarin ik mijn data ga plaatsen
echo "<table width= 50% border='1'>
<tr>
<th>City</th>
<th>High</th>
<th>Low</th>
</tr>";

// ???
while ($row = mysqli_fetch_array($getdata)) {
    echo "<tr><td>" . $row['city'] . "</td>";
    echo "<td>" . $row['high'] . "</td>";
    echo "<td>" . $row['low'] . "</td></tr>";
}
echo "</table>";

// Link naar insert-data.php 
echo "<br/><a href='insert-data.php'>Add more data</a><br/>";
