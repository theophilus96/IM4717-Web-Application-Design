<?php // register.php
include "dbconnect.php";
if (isset($_POST['submit'])) {
	if (empty($_POST['email']) || empty ($_POST['password'])
		|| empty ($_POST['password2']) ) {
	echo "All records to be filled in";
	exit;}
	}
//$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];
$password2 = $_POST['password2'];
$firstName = $_POST['FirstName'];
$lastName = $_POST['LastName'];
$city = $_POST['City'];
$state = $_POST['State'];
$postalcode = $_POST['Postalcode'];
$phone = $_POST['Phone'];
$Fax = $_POST['Fax'];
$country = $_POST['Country'];
$address1 = $_POST['Address1'];
$address2 = $_POST['Address2'];


echo ("$username" . "<br />". "$password2" . "<br />");
if ($password != $password2) {
	echo "Sorry passwords do not match";
	exit;
	}
$password = md5($password);
echo $password;
//$sql = "INSERT INTO users (UserID, password) VALUES ('$username', '$password')";

$sql = "INSERT INTO `users`(`UserEmail`, `UserPassword`, `UserFirstName`, `UserLastName`, `UserCity`, `UserState`, `UserPostalcode`, `UserPhone`, `UserFax`, `UserCountry`, `UserAddress`, `UserAddress2`) VALUES (\'$email\',\'$password\',\'$firstName\',\' $lastName\',\'$city\',\'$state\',\'$postalcode\',\'$phone\',\'$Fax\',\'$country\',\'$address1\',\'$address2\')";
        
//	echo "<br>". $sql. "<br>";
$result = $dbcnx->query($sql);

if (!$result) 
	echo "Your query failed.";
else
	echo "Welcome ". $firstName." ".$lastName. ". You are now registered";
	
?>