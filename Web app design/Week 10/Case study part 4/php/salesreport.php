<!DOCTYPE html>
<html lang="en">
<?php

$db = mysqli_connect('localhost', 'f32ee', 'f32ee', 'f32ee');

if (mysqli_connect_errno()) {
    echo "Error: Could not connect to database.  Please try again later.";
    exit;
}

$query = "SELECT Javajam.MenuID, Javajam.Name, Javajam.item, SUM( Javajam.price * Javajam_order_items.quantity ) AS total_price\n"
. "FROM Javajam_order_items\n"
. "JOIN Javajam ON Javajam.MenuID = Javajam_order_items.MenuID\n"
. "GROUP BY Javajam.Name\n"
. "ORDER BY total_price DESC LIMIT 0, 30 ";

$result = mysqli_query($db, $query);
/*
if (mysqli_num_rows($result) > 0) {
 // output data of each row
 if (isset($_POST['totalsales'])){
echo "<h1>Total dollar sales by products</h1>";
echo "<table><tr><th>Name</th><th>Total Sales</th></tr>";

 while($row = mysqli_fetch_assoc($result)) {

 //echo "price: " . $row["price"]."<br>";
 //echo "Name: " . $row["Name"]. " - Total Sales: " . $row["total_price"]."<br>";
 echo "<tr><td>".$row["Name"]."</td><td>".$row["total_price"]."</td></tr>";
    }
    echo "</table>";
 }
}
*/
$query1 = "SELECT Javajam.MenuID, Javajam.Name, Javajam.item, SUM(Javajam_order_items.quantity) as total_quantity, SUM( Javajam.price * Javajam_order_items.quantity ) AS total_price\n"
    . "FROM Javajam_order_items\n"
    . "JOIN Javajam ON Javajam.MenuID = Javajam_order_items.MenuID\n"
    . "GROUP BY Javajam.Name , Javajam.item\n"
    . "ORDER BY SUM(Javajam_order_items.quantity) DESC LIMIT 0, 30 ";


$result1 = mysqli_query($db, $query1);

/*
if (mysqli_num_rows($result1) > 0) {
 // output data of each row
 if (isset($_POST['salesquantity'])){
 echo "<h1>Sales quantities by product category</h1>";
 echo "<table><tr><th>Name</th><th>Category</th><th>Total Quantity</th></tr>";

 while($row = mysqli_fetch_assoc($result1)) {
 //echo "price: " . $row["price"]."<br>";
 //echo "Name: " . $row["Name"]. " - Category: " . $row["item"]. " - Total Quantity: " . $row["total_quantity"]."<br>";
 echo "<tr><td>".$row["Name"]."</td><td>".$row["item"]."</td><td>".$row["total_quantity"]."</td></tr>";
 }
 }
}
*/

//html code
echo '<head>';
echo '<title>JavaJam Coffee House</title>';
echo '<meta charset="utf-8" />';
echo '<style>';
echo 'body {';
echo 'background-image: url(../images/background2.gif);';
echo 'color: #221811;';
echo 'font-family: Verdana, Arial, sans-serif;';
echo '}';
echo '/*freepik.com*/';
echo 'header {';
echo 'background-color: #d2b48c;';
echo 'text-align: center;';
echo '}';
echo '/*';
echo 'JavaJam coffee house logo';
echo 'http://www.blueeyedrabbit.com/';
echo '*/';
echo 'h1 {';
echo 'font-size: 200%;';
echo 'color: #382a05;';
echo '}';
echo '';
echo 'footer {';
echo 'background-color: #d2b48c;';
echo 'font-size: 1em;';
echo 'font-family: italic;';
echo 'text-align: center;';
echo 'padding: 10px;';
echo 'clear: right;';
echo 'color: #1f1804;';
echo 'font-size: small;';
echo '}';
echo 'footer a {';
echo 'color: #382a05;';
echo '}';
echo '#leftcolumn {';
echo 'float: left;';
echo 'width: 115px;';
echo 'text-align: center;';
echo '}';
echo '';
echo '#rightcolumn {';
echo 'margin-left: 155px;';
echo 'background-color: #fcebb6;';
echo 'color: #382a05;';
echo 'font-family: Verdana, Arial, sans-serif;';
echo 'overflow: auto;';
echo 'padding-bottom: 20px;';
echo '}';
echo '/*index page*/';
echo '#rightcontent {';
echo 'padding-left: 5%;';
echo 'padding-right: 5%;';
echo 'min-width: 650px;';
echo '}';
echo '';
echo 'title {';
echo 'color: #382a05;';
echo '}';
echo '';
echo 'nav ul {';
echo 'list-style-type: none;';
echo 'padding-top: 20px;';
echo '}';
echo 'nav a {';
echo 'text-decoration: none;';
echo 'font-family: arial, sans-serif;';
echo 'font-weight: bold;';
echo 'color: #705310;';
echo 'font-size: 1.2em;';
echo '}';
echo 'a:visited {';
echo 'color: #ccaa66;';
echo '}';
echo '';
echo '#wrapper {';
echo 'background-color: #efdaae;';
echo 'width: 80%;';
echo 'min-width: 800px;';
echo 'box-shadow: 2px 2px 2px;';
echo 'overflow: none;';
echo 'margin-left: auto;';
echo 'margin-right: auto;';
echo '}';
echo '';
echo '.content {';
echo 'padding: 10px 20px 0 20px;';
echo '}';
echo '';
echo '.content ul {';
echo 'margin-left: 0;';
echo 'padding-left: 20px;';
echo 'list-style-image: url(./images/Webp.net-resizeimage.png); /*image inside the bullets for list*/';
echo 'list-style-position: inside; /* align it with the the bottom parargraph*/';
echo '';
echo '/*';
echo 'brown button icon';
echo 'https://commons.wikimedia.org/wiki/File:Button_Icon_Brown.svg';
echo '*/';
echo '}';
echo '';
echo 'p {';
echo 'margin: 0px;';
echo '}';
echo '';
echo '#heroroad {';
echo 'border-bottom: 10px;';
echo 'width: 390px;';
echo 'height: 232.5px;';
echo 'margin: 0px 30px 10px 0px;';
echo 'float: left;';
echo '/*';
echo 'heroroad picture';
echo 'http://aporter.cs.edinboro.edu/';
echo '*/';
echo '}';
echo '';
echo '/*form section*/';
echo '.jobform {';
echo 'font-family: Arial, sans-serif;';
echo 'width: 350px;';
echo 'padding: 10px;';
echo '}';
echo 'label {';
echo 'float: left;';
echo 'clear: left;';
echo 'display: block;';
echo 'width: 100px;';
echo 'text-align: right;';
echo 'padding-right: 10px;';
echo 'margin-top: 10px;';
echo '}';
echo 'input,';
echo 'textarea {';
echo 'margin-top: 10px;';
echo '/*display: block;*/';
echo 'display: inline-block;';
echo '';
echo '}';
echo '#mySubmit {';
echo 'margin-left: 0 px;';
echo '}';
echo '';
echo '/*menu section*/';
echo 'table {';
echo 'position: center;';
echo 'padding-left: 5%;';
echo 'padding-right: 5%;';
echo '}';
echo '';
echo '.menuform {';
echo '/* font-family: Arial, sans-serif; */';
echo '/* width: 350px; */';
echo '/* padding: 10px; */';
echo '}';
echo '';
echo 'td,';
echo 'th {';
echo 'padding: 10px;';
echo '}';
echo '';
echo 'tr:nth-of-type(odd) {';
echo 'background-color: #d2b48c;';
echo '}';
echo '';
echo '/* music section*/';
echo '.music {';
echo 'padding-left: 20%;';
echo 'padding-right: 20%;';
echo 'overflow: auto;';
echo '}';
echo '';
echo 'h4 {';
echo 'background-color: #d2b48c;';
echo 'font-size: 1.2em;';
echo 'padding-bottom: 0px;';
echo 'margin-bottom: 10px;';
echo 'clear: left;';
echo '}';
echo '';
echo '#melanie,';
echo '#greg {';
echo 'float: left;';
echo 'height: 70px;';
echo 'width: 70px;';
echo 'margin: 0px 30px 30px 30px;';
echo '}';
echo '';
echo '/*http://www.foolsofty.com/ for both melanie and greg*/';
echo '';
echo 'audio {';
echo 'margin: 20px 0px 0px 0px;';
echo '}';
echo '/*';
echo 'Linkin Park - Numb (Fingerstyle Guitar)';
echo 'by AcousticTrench';
echo 'https://www.youtube.com/watch?v=k49gVD-2hio';
echo '';
echo 'TRINE 2: Main Theme - Guitar cover (Celtic Guitar Music)';
echo 'by Guitars & Dragons';
echo 'https://www.youtube.com/watch?v=JUSARM5hxMM';
echo '*/';
echo '';
echo '.btn{';
echo 'border: 1px solid #1f1804;';
echo 'background-color: #aa893d;';
echo 'padding: 12px 12px;';
echo '';
echo '-o-transition: background-color .2s ease-in;';
echo '-moz-transition: background-color .2s ease-in;';
echo '-webkit-transition: background-color .2s ease-in;';
echo 'transition: background-color .2s ease-in;';
echo '}';
echo '';
echo '.btn:hover {';
echo 'background-color: #e5e5e5;';
echo '}';
echo '';
echo '.btn:active {';
echo 'background-color: #ccc;';
echo '}';
echo '';
echo '/*button for product price update*/';
echo '</style>';
echo '</head>';
echo '<body>';
echo '<div id="wrapper">';
echo '<header>';
echo '<!--<h1>JavaJam Coffee House</h1>-->';
echo '<img src="../images/javalogo.gif" alt="javajam coffe house" />';
echo '</header>';
echo '<div id="leftcolumn">';
echo '<nav>';
echo '<b>';
echo '<ul>';
echo '<li><a href="../index.html">Home</a></li>';
echo '<li><a href="../menu.html">Menu</a></li>';
echo '<li><a href="../music.html">Music</a></li>';
echo '<li><a href="../jobs.html">Jobs</a></li>';
echo '<li><a href="productprice2.php">Product Price Update</a></li>';
echo '<li><a href="../salesreport.html">Sales Report</a></li>';
echo '</ul>';
echo '</b>';
echo '</nav>';
echo '</div>';
echo '<div id="rightcolumn">';
echo '<div class="content">';
echo '<h1>Coffee at JavaJam</h1>';
if (mysqli_num_rows($result) > 0) {
    // output data of each row
    if (isset($_POST['totalsales'])){
   echo "<h2>Total dollar sales by products</h2>";
   echo "<table><tr><th>Name</th><th>Total Sales</th></tr>";
   
    while($row = mysqli_fetch_assoc($result)) {
   
    //echo "price: " . $row["price"]."<br>";
    //echo "Name: " . $row["Name"]. " - Total Sales: " . $row["total_price"]."<br>";
    echo "<tr><td>".$row["Name"]."</td><td>".$row["total_price"]."</td></tr>";
       }
       echo "</table>";
    }
   }

if (mysqli_num_rows($result1) > 0) {
    // output data of each row
    if (isset($_POST['salesquantity'])){
    echo "<h2>Sales quantities by product category</h2>";
    echo "<table><tr><th>Name</th><th>Category</th><th>Total Quantity</th><th>Total Sales</th></tr>";

    while($row = mysqli_fetch_assoc($result1)) {
    //echo "price: " . $row["price"]."<br>";
    //echo "Name: " . $row["Name"]. " - Category: " . $row["item"]. " - Total Quantity: " . $row["total_quantity"]."<br>";
    echo "<tr><td>".$row["Name"]."</td><td>".$row["item"]."</td><td>".$row["total_quantity"]."</td><td>".$row["total_price"]."</td></tr>";
    }
    echo "</table>";
    }
}

echo '</div>';
echo '</div>';
echo '<footer>';
echo '<i>';
echo 'Copyright &copy; 2014 JavaJam Coffee House <br />';
echo '<a href="mailto:theophilus@kwek.com"> theophilus@kwek.com </a>';
echo '</i>';
echo '</footer>';
echo '</div>';
echo '</body>';
echo '';

mysqli_close($db);
?>