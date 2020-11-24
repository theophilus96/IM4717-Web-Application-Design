<?php
// User(pk:UserID, username, password/credentials, administrator, customer)
// Books(pk:IBSN, title, author, category, cover image,abstract,price, qty_sold)
// Reviews(fk:IBSN, reviews)
// Order(pk:OrderID,fk:UserID, total amount, date)
// OrderItems(fk:OrderID, fk:IBSN, Quantity)

//part ii
@$dbcnx = new mysqli('localhost','f32ee','f32ee','f32ee');


$sql="SELECT Books.title,Books.IBSN, SUM(OrderItems.Quantity) AS total \n"
    ."FROM `OrderItems` \n"
    ."JOIN Books ON Books.IBSN = OrderItems.IBSN \n"
    ."group by IBSN.IBSN";


    $result=$dbcnx->query($sql);

    if (mysqli_num_rows($result) > 0) {
        // output data of each row
        echo "<h2>Books ordered quantity</h2>";
        echo "<table border='1'><tr><th>title</th><th>IBSN</th><th>total</th></tr>";
    
        while($row = mysqli_fetch_assoc($result)) {
        echo "<tr><td>".$row["title"]."</td><td>".$row["IBSN"]."</td><td>".$row["total"]."</td></tr>";

        $sql1="UPDATE `Books` SET `qty_sold`='".$row['Quantity']."' WHERE ISBN= '".$row['IBSN']."'";
        $result1=$dbcnx->query($sql1);
        }
        echo "</table>";
        echo "<br>";
    }

    //part iii
$sql3="SELECT Books.title,Books.IBSN, SUM(OrderItems.Quantity) \n"
    ."FROM `OrderItems` \n"
    ."JOIN Books ON Books.IBSN = OrderItems.IBSN \n"
    ."group by IBSN.IBSN"
    ."ORDER BY total DESC"
    ."LIMIT 0 , 5";

    $result3=$dbcnx->query($sql3);

    if (mysqli_num_rows($result3) > 0) {
        // output data of each row
        echo "<h2>Books ordered quantity</h2>";
        echo "<table border='1'><tr><th>title</th><th>IBSN</th><th>Quantity</th></tr>";
    
        while($row = mysqli_fetch_assoc($result3)) {
        echo "<tr><td>".$row["title"]."</td><td>".$row["IBSN"]."</td><td>".$row["total"]."</td></tr>";
        }
        echo "</table>";
        echo "<br>";
    }


?>



<?php // part iv
include "dbconnect.php";
session_start();

if (isset($_POST['userid']) && isset($_POST['password']))
{
  // if the user has just tried to log in
  $userid = $_POST['userid'];
  $password = $_POST['password'];
/*
  $db_conn = new mysqli('localhost', 'webauth', 'webauth', 'auth');

  if (mysqli_connect_errno()) {
   echo 'Connection to database failed:'.mysqli_connect_error();
   exit();
  }
*/
$password = md5($password);
  $query = 'select * from authorized_users '
           ."where name='$userid' "
           ." and password='$password'";
// echo "<br>" .$query. "<br>";
  $result = $dbcnx->query($query);
  if ($result->num_rows >0 )
  {
    // if they are in the database register the user id
    $_SESSION['valid_user'] = $userid;    
  }
  $dbcnx->close();
}
?>
<html>
<body>
<h1>Home page</h1>
<?php
  if (isset($_SESSION['valid_user']))
  {
    echo 'You are logged in as: '.$_SESSION['valid_user'].' <br />';
    echo '<a href="logout.php">Log out</a><br />';
  }
  else
  {
    if (isset($userid))
    {
      // if they've tried and failed to log in
      echo 'Could not log you in.<br />';
    }
    else 
    {
      // they have not tried to log in yet or have logged out
      echo 'You are not logged in.<br />';
    }

    // provide form to log in 
    echo '<form method="post" action="authmain.php">';
    echo '<table>';
    echo '<tr><td>Userid:</td>';
    echo '<td><input type="text" name="userid"></td></tr>';
    echo '<tr><td>Password:</td>';
    echo '<td><input type="password" name="password"></td></tr>';
    echo '<tr><td colspan="2" align="center">';
    echo '<input type="submit" value="Log in"></td></tr>';
    echo '</table></form>';
  }
?>
<br />
<a href="members_only.php">Members section</a>
</body>
</html>
