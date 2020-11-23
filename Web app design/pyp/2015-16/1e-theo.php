<?php //authmain.php page 1
include "dbconnect.php";
session_start();
//Session start either starts a new session and sets the 
//session id cookie or restore variables existing in existing 
//sessions if one exist
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
    // set session variables
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


<?php //members.php page 2
  session_start();

  echo '<h1>Members only</h1>';

  // check session variable

  //Session variables are stored in a superglobal array.
  //Session variables will be tracked until session ends or 
  //manually unset.

  //checking if session varible have been set
  //variables can also be set by the user via GET and POST methods


  if (isset($_SESSION['valid_user']))
  {
    echo '<p>You are logged in as '.$_SESSION['valid_user'].'</p>';
    echo '<p>Members only content goes here</p>';
  }
  else
  {
    echo '<p>You are not logged in.</p>';
    echo '<p>Only logged in members may see this page.</p>';
  }

  echo '<a href="authmain.php">Back to main page</a>';
?>

