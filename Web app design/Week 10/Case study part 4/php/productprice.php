<html>
<head>
  <title>Javajam</title>
</head>
<body>
<h1>Javajam</h1>
<?php
  // create short variable names
  $javaprice=$_POST['javaprice'];
  $cafesingleprice=$_POST['cafesingleprice'];
  $cafedoubleprice=$_POST['cafedoubleprice'];
  $capusingleprice=$_POST['capusingleprice'];
  $capudoubleprice=$_POST['capudoubleprice'];

  if (!get_magic_quotes_gpc()) {
      $javaprice = addslashes($javaprice);
      $cafesingleprice = addslashes($cafesingleprice);
      $cafedoubleprice = addslashes($cafedoubleprice);
      $capusingleprice = addslashes($capusingleprice);
      $capudoubleprice = addslashes($capudoubleprice);
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

    $query .= "SELECT price\n"
    . "FROM `Javajam`\n"
    . "where MenuID = 1\n";

      //$result = $db->query($query);


if ($db->multi_query($query)) {
  do {
      /* store first result set */
      if ($result = $db->store_result()) {
          while ($row = $result->fetch_row()) {
              printf("%s\n", $row[0]);
          }
          $result->free();
      }
      /* print divider */
      if ($db->more_results()) {
          printf("-----------------\n");
      }
  } while ($db->next_result());
}
  }

  if ($cafesingleprice) {
      $query = "UPDATE Javajam\n"
    . "SET price = '".$cafesingleprice."'\n"
    . "WHERE MenuID = 2";

      //$result = $db->query($query);

      /* execute multi query */

  }
  if ($cafedoubleprice) {
      $query = "UPDATE Javajam\n"
    . "SET price = '".$cafedoubleprice."'\n"
    . "WHERE MenuID = 3";

      $result = $db->query($query);
  }
  if ($capusingleprice) {
      $query = "UPDATE Javajam\n"
    . "SET price = '".$capusingleprice."'\n"
    . "WHERE MenuID = 4";

      $result = $db->query($query);
  }
  if ($capudoubleprice) {
      $query = "UPDATE Javajam\n"
    . "SET price = '".$capudoubleprice."'\n"
    . "WHERE MenuID = 5";

      $result = $db->query($query);
  }
/*
  if (!$menuID || !$price) {
     echo "You have not entered all the required details.<br />"
          ."Please go back and try again.";
     exit;
  }


  if (!get_magic_quotes_gpc()) {
      $menuID = addslashes($menuID);
      $price = addslashes($price);
  }

  @ $db = new mysqli('localhost', 'f32ee', 'f32ee', 'f32ee');

  if (mysqli_connect_errno()) {
      echo "Error: Could not connect to database.  Please try again later.";
      exit;
  }
  $query = "UPDATE Javajam\n"
    . "SET price = '".$price."'\n"
    . "WHERE MenuID = '".$menuID."'";

  //$query = "insert into books values
  //         ('".$isbn."', '".$author."', '".$title."', '".$price."')";

  $result = $db->query($query);
*/



  if ($result) {
      echo "Affected_rows = ".$db->affected_rows;
      echo "<br />";
      echo "javaprice = ".$javaprice."<br />";
      echo "cafesingleprice = ".$cafesingleprice." <br />";
      echo "cafedoubleprice = ".$cafedoubleprice." <br />";
      echo "capusingleprice = ".$capusingleprice." <br />";
      echo "capudoubleprice = ".$capudoubleprice." <br />";
      echo "Affected_rows = ".$java." <br />";
  }
/*
  if ($result) {
      echo  $db->affected_rows." book inserted into database.";
  } else {
      echo "An error has occurred.  The item was not added.";
  }*/

  $db->close();
?>

</body>
</html>