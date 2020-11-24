<?php
include "dbconnect.php";
session_start();
if (!isset($_SESSION['cart'])){
	$_SESSION['cart'] = array();
}
if (isset($_GET['empty'])) {
	unset($_SESSION['cart']);
	header('location: ' . $_SERVER['PHP_SELF']);
	exit();
}

if (isset($_POST['email']) && isset($_POST['password']))
{
  // if the user has just tried to log in
  $email = $_POST['email'];
  $password = $_POST['password'];

$password = md5($password);
  $query = 'select * from users '
           ."where UserEmail='$email' "
           ." and UserPassword='$password'";
// echo "<br>" .$query. "<br>";
  $result = $dbcnx->query($query);
  if ($result->num_rows >0 )
  {
    // if they are in the database register the user id
    $_SESSION['valid_user'] = $email;    
  }
  $dbcnx->close();
}

if (!isset($_SESSION['valid_user'])){
    echo "            <a href=\"login.php\">\n";
    echo "<p>Log in</p>\n";
  } else {
  echo "            <a href=\"logout.php\">\n";
  echo '              <p>Hello.'.$_SESSION['valid_user'].'</p>';
  echo "              <p>Log Out</p>\n";
  }
echo "            </a>\n";
echo "          </li>\n";

  //check if it is a valid user
// if it is a valid user, say hello (name) and give him the logout option
// if it is not a valid user, give him the login function
  
?>


<?php //part ii?>
<!DOCTYPE html>
<html>
<head>
<title>Product catalog</title>
</head>
<body>
<p>Your shopping cart contains <?php
	echo count($_SESSION['cart']); ?> items.</p>
<p><a href="cart.php">View your cart</a></p>
</body>
</html>
<?php 
//count the number of items in the cart session which is a super global variable.
?>

<?php
//shorter answer
session_start();
if (isset($_SESSION['valid_user'])){
  echo '<li style="float:right"><a href="cart.php"><img src="cart.PNG"></a></li>';
  echo '<li style="float:right"><a href="signup.html">'.$_SESSION['valid_user'].'</a></li>';
}
else{
  echo '<li style="float:right"><a href="signup.html">Sign Up</a></li>';
}
?>