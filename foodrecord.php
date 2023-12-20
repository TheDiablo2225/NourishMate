<link rel="stylesheet" type="text/css" href="foodret.css">

<br><hr><br>
<div class="container">

<?php
include('connectiondb.php');
session_start();
if(!isset($_SESSION['user_id'])){
    header("login.php");
    exit;
}
else{
    $idToUpdate=$_SESSION['user_id'];
    $query = "select * from foodrecord where userid=$1 ";
$result = pg_query_params($conn, $query,array($_SESSION['user_id']));

// Check for errors in the query
if (!$result) {
    die("Query failed: " . pg_last_error());
}

// Display foodrecord in the front end
echo "<div><table>";
echo "<tr><th>Week</th><th>UserID</th><th>Calories</th><th>Carbs</th><th>Protein</th><th>Fat</th><th>Fibre</th></tr>";

$week=1;
while ($row = pg_fetch_assoc($result)) {
    echo "<td>week $week</td>";
    //echo "<td>{$row['sdate']}</td><br>";
    echo "<td>{$row['userid']}</td>";
    echo "<td>{$row['calories']}</td>";
    echo "<td>{$row['carb']}</td>";
    echo "<td>{$row['protien']}</td>";
    echo "<td>{$row['fat']}</td>";
    echo "<td>{$row['fibre']}</td>";
    $week=$week+1;
}

echo "</table></div>";


//water record display
$query1 = "select * from waterrecord where userid=$1 ";
$result1 = pg_query_params($conn, $query1,array($_SESSION['user_id']));

// Check for errors in the query
if (!$result1) {
    die("Query failed: " . pg_last_error());
}


echo "<div><table>";
echo "<tr><th>Week</th><th>UserID</th><th>TargetLitres</th><th>GlasscountAchieved</th><th>WeekDate</th></tr>";
$week2=1;
while ($row1 = pg_fetch_assoc($result1)) {
    echo "<td>week $week2</td>";
    //echo "<td>{$row['sdate']}</td><br>";
    echo "<td>{$row1['userid']}</td>";
    echo "<td>{$row1['litres']}</td>";
    echo "<td>{$row1['glasscount']}</td>";
    echo "<td>{$row1['weekdate']}</td>";
    $week2=$week2+1;
}

echo "</table></div>";

}
?>
<!doctype html>
    <head>
    <style>
        td{
            font-size : 20px;
        }
    
    </style>
    </head>
<?php


/*Select the value from table1
$querySelect = "SELECT calories,carb,protien,fat,fibre FROM nutri WHERE fname ilike $1 or fname ilike $2";
$paramsSelect = array($food1,$food2);

$resultSelect = pg_query_params($conn, $querySelect, $paramsSelect);

// Check for errors in the query
if (!$resultSelect) {
    die("Select query failed: " . pg_last_error());
}

while($row = pg_fetch_assoc($resultSelect)){

    $calory = $row['calories'];
    $carbs=$row['carb'];
    $pro=$row['protien'];
    $fats=$row['fat'];
    $fibre=$row['fibre'];

    // Update the value in table2
    $queryUpdate = "UPDATE customerfoodentry SET calories=calories+ $1, carb=carb+$2, protien=protien+$3, fat=fat+$4, fibre=fibre+$5 WHERE userid = $6";
    $paramsUpdate = array($calory,$carbs,$pro,$fats,$fibre,$idToUpdate);

    $resultUpdate = pg_query_params($conn, $queryUpdate, $paramsUpdate);

    // Check for errors in the query
    if (!$resultUpdate) {
        die("Update query failed: " . pg_last_error());
    }
}

*/


// Close the database connection
pg_close($conn);
?>
</div>
