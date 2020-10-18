<?php
	header("Location: http://192.168.56.2/f32ee/Web%20app%20design/week09/bookorama/Case%20study%20part%204/menu.html");
  // create short variable names
  $javaqty = $_POST['javaqty'];
  $javasum=$_POST['javasum'];
  $cafeqty = $_POST['cafeqty'];
  $cafesum = $_POST['cafesum'];
  $Caferadio = $_POST['Caferadio'];  
	if ($Caferadio == "2.0") {          
		$cafeitem = "Single";      
	}
	else {
		$cafeitem = "Double";  
	}       
	$cappuqty = $_POST['cappuqty'];
	$cappusum = $_POST['cappusum'];
	$Cappuradio = $_POST['Cappuradio'];  
	if ($Cappuradio == "4.75") {          
		$Cappuitem = "Single";      
	}
	else {
		$Cappuitem = "Double";  
	}   
	$totalsum = $_POST['totalsum'];  

	if (!get_magic_quotes_gpc()) {
		$javaqty = addslashes($javaqty);
		$javasum = addslashes($javasum);
		$cafeqty = addslashes($cafeqty);
		$cafesum = addslashes($cafesum);
		$cafeitem = addslashes($cafeitem);
		$cappuqty = addslashes($cappuqty);
		$cappusum = addslashes($cappusum);
		$Cappuitem = addslashes($Cappuitem);
		$totalsum = addslashes($totalsum);

	}
  
  @ $db = new mysqli('localhost', 'f32ee', 'f32ee', 'f32ee');
  
  if (mysqli_connect_errno()) {
	  echo "Error: Could not connect to database.  Please try again later.";
	  exit;
  }

  $query = "INSERT INTO `Javajam_orders`(`Amount`) VALUES ($totalsum)";
  $result = $db->query($query);
/*
  if (mysqli_query($db, $query)) {
	$last_id = mysqli_insert_id($db);
  } else {
	$last_id = 1;
  }
 */
  if ($result) {
	$last_id = mysqli_insert_id($db);
  } 
  $query1 = "INSERT INTO `Javajam_order_items`(`OrderID`, `MenuID`, `Quantity`) VALUES ($last_id,1,$javaqty)";
  $result1 = mysqli_query($db, $query1);
  if ($cafeitem == "Single") {    
  $query2 = "INSERT INTO `Javajam_order_items`(`OrderID`, `MenuID`, `Quantity`) VALUES ($last_id,2,$cafeqty)";
  $result2 = mysqli_query($db, $query2);  
} else {
  $query3 = "INSERT INTO `Javajam_order_items`(`OrderID`, `MenuID`, `Quantity`) VALUES ($last_id,3,$cafeqty)";
  $result3 = mysqli_query($db, $query3); 
}

  if ($Cappuitem == "Single") {     
  $query4 = "INSERT INTO `Javajam_order_items`(`OrderID`, `MenuID`, `Quantity`) VALUES ($last_id,4,$cappuqty)";
    $result4 = mysqli_query($db, $query4);
} else {
  $query5 = "INSERT INTO `Javajam_order_items`(`OrderID`, `MenuID`, `Quantity`) VALUES ($last_id,5,$cappuqty)";
    $result5 = mysqli_query($db, $query5);
}

  mysqli_close($db);
?>
