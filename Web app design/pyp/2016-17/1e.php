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
	}

if (!$dbcnx->select_db ("f32ee"))
	exit("<p>Unable to locate the f32ee database</p>");

$sql = "SELECT *  FROM `RFT`";

//select all the collumn, include the minimum for cost for the ITB 
//RFT(pk:TenderID, fk:venderID/PIDN, title, industrial sector,geographical scope, description)
$result = $dbcnx->query($sql);
if (mysqli_num_rows($result) > 0) {
    // output data of each row
    echo "<h2>Tender list</h2>";
    echo "<table border='1'><tr><th>TenderID</th><th>title</th><th>industrial sector</th><th>geographical scope</th><th>duration</th><th>description</th></tr>";

    while($row = mysqli_fetch_assoc($result)) {
    echo "<tr><td>".$row["TenderID"]."</td><td>".$row["title"]."</td><td>".$row["industrial sector"]."</td><<td>".$row["geographical scope"]."</td><<td>".$row["description"]."</td></tr>";
    }
    echo "</table>";
    echo "<br>";
}

?>



<?php //part ii
session_start();
if (!isset($_SESSION['cart'])){
	$_SESSION['cart'] = array();
}
if (isset($_GET['buy'])) {
	$_SESSION['cart'][] = $_GET['buy'];
	header('location: ' . $_SERVER['PHP_SELF']. '?' . SID);
	exit();
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Product catalog</title>
</head>
<body>
<p>Your shopping cart contains 
    <?php echo count($_SESSION['cart']); ?> items.</p>
<p><a href="cart.php">View your cart</a></p>

<?php
$sql = "SELECT *  FROM `RFT`";
$result = $dbcnx->query($sql);
$num_results = $result ->num_rows; //find num of rows in query

for ($i=0; $i <$num_results; $i++) {
  $row = $result2->fetch_assoc();
  $ID[$i] = stripslashes($row['TenderID']);
  $title[$i] = stripslashes($row['title']);	
  $industrialsector[$i] = stripslashes($row['industrial sector']);
  $geographicalscope[$i] = stripslashes($row['geographicalscope']);
  $duration[$i] = stripslashes($row['duration']);
  $description[$i] = stripslashes($row['description']);
}

?>
<table border="1">
	<thead>
	<tr>
		<th>Item Description</th>
		<th>Price</th>
	</tr>
	</thead>
	<tbody>
<?php
for ($i=0; $i<count($items); $i++){
	echo "<tr>";
    echo "<td>" .$ID[$i]. "</td>";
    echo "<td>" .$title[$i]. "</td>";
    echo "<td>" .$industrialsector[$i]. "</td>";
    echo "<td>" .$geographicalscope[$i]. "</td>";
    echo "<td>" .$duration[$i]. "</td>";
    echo "<td>" .$description[$i]. "</td>";
	echo "<td><a href='" ."newpage.php". '?buy=' .$i. "'><img src='button.jpg'></a></td>";
	echo "</tr>";
}
?>
	</tbody>
</table>
</body>
</html>