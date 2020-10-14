<html>
<head>
  <title>Javajam</title>
</head>
<body>
<h1>Javajam</h1>

<?php
$javaprice=$_POST['javaprice'];

if (!get_magic_quotes_gpc()) {
    $javaprice = addslashes($javaprice);
}
@ $db = new mysqli('localhost', 'f32ee', 'f32ee', 'f32ee');

if (mysqli_connect_errno()) {
    echo "Error: Could not connect to database.  Please try again later.";
    exit;
}
if ($javaprice) {
    $query = "UPDATE Javajam\n"
  . "SET price = '".$javaprice."'\n"
  . "WHERE MenuID = 1";


    $result = $db->query($query);

    //$querya = "SELECT price FROM `Javajam` where MenuID = 1";

    //$resulta = $db->query($querya);
}
    if ($result) {
        echo "Affected_rows = ".$db->affected_rows;
        echo "<br />";
        echo "javaprice = ".$javaprice."<br />";
        echo "cafesingleprice = ".$cafesingleprice." <br />";
        echo "cafedoubleprice = ".$cafedoubleprice." <br />";
        echo "capusingleprice = ".$capusingleprice." <br />";
        echo "capudoubleprice = ".$capudoubleprice." <br />";
        echo "Javaprice now =  <br />";
    }

    $sql1 = "SELECT price FROM `Javajam` WHERE menuID = 1";
    $result1 = mysqli_query($db, $sql1);

if (mysqli_num_rows($result1) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result1)) {
    echo "price: " . $row["price"]."<br>";
  }
} else {
  echo "0 results";
}
   if ($result1) {
       echo "Javaprice now =  <br />";
   }

$db->close();
?>
</body>
</html>