<?php

// Users(pk:PIDN,username,Contact,email,company name,company address, vendor, supplier)
// RFT(pk:TenderID, fk:venderID/PIDN title, industrial sector,geographical scope, description)
// ITB(pk:BidID,fk:supplyID/PIDN, fk:TenderID, cost,duration,warranty period)
// Award(fk:TenderID,fk:BidID, time)


@$dbcnx = new mysqli('localhost','f32ee','f32ee','f32ee');
// @ to ignore error message display //
if ($dbcnx->connect_error){
	echo "Database is not online"; 
	exit;
	// above 2 statments same as die() //
	}
	// else
	// echo "Congratulations...  MySql is working..";

if (!$dbcnx->select_db ("f32ee"))
	exit("<p>Unable to locate the f32ee database</p>");

$sql = "SELECT * , MIN( cost ) FROM `ITB` WHERE TenderID = '9002'";

//select all the collumn, include the minimum for cost for the ITB 

$result = $dbcnx->query($sql);
if (mysqli_num_rows($result) > 0) {
    // output data of each row
    echo "<h2>Minimum cost</h2>";
    echo "<table border='1'><tr><th>BidID</th><th>PIDN</th><th>TenderID</th><th>cost</th><th>duration</th><th>Warranty period</th></tr>";

    while($row = mysqli_fetch_assoc($result)) {
    echo "<tr><td>".$row["BidID"]."</td><td>".$row["PIDN"]."</td><td>".$row["TenderID"]."</td><<td>".$row["cost"]."</td><<td>".$row["duration"]."</td><td>".$row["warranty period"]."</td></tr>";
    }
    echo "</table>";
    echo "<br>";
}

$sql2 = "INSERT INTO `Award` VALUES ('9002','8025')";
$result = $dbcnx->query($sql2);
?>