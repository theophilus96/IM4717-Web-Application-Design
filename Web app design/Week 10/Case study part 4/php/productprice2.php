<!DOCTYPE html>
<html lang="en">
<?php

$javaprice= 2.00;
$cafesingleprice=2.00;
$cafedoubleprice=3.00;
$capusingleprice=4.75;
$capudoubleprice=5.75;

//php code
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
  }

  if ($cafesingleprice) {
      $query = "UPDATE Javajam\n"
    . "SET price = '".$cafesingleprice."'\n"
    . "WHERE MenuID = 2";

      $result = $db->query($query);
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

  $sql1 = "SELECT price FROM `Javajam` WHERE menuID = 1";
  $result1 = mysqli_query($db, $sql1);

  if (mysqli_num_rows($result1) > 0) {
   // output data of each row
   while($row = mysqli_fetch_assoc($result1)) {
   //echo "price: " . $row["price"]."<br>";
   $java = $row["price"];
 }
} 
$sql2 = "SELECT price FROM `Javajam` WHERE menuID = 2";
  $result2 = mysqli_query($db, $sql2);

  if (mysqli_num_rows($result2) > 0) {
   // output data of each row
   while($row = mysqli_fetch_assoc($result2)) {
   //echo "price: " . $row["price"]."<br>";
   $cafe1 = $row["price"];
 }
} 
$sql3 = "SELECT price FROM `Javajam` WHERE menuID = 3";
  $result3 = mysqli_query($db, $sql3);

  if (mysqli_num_rows($result3) > 0) {
   // output data of each row
   while($row = mysqli_fetch_assoc($result3)) {
   //echo "price: " . $row["price"]."<br>";
   $cafe2 = $row["price"];
 }
} 
$sql4 = "SELECT price FROM `Javajam` WHERE menuID = 4";
  $result4 = mysqli_query($db, $sql4);

  if (mysqli_num_rows($result4) > 0) {
   // output data of each row
   while($row = mysqli_fetch_assoc($result4)) {
   //echo "price: " . $row["price"]."<br>";
   $capu1 = $row["price"];
 }
} 
$sql5 = "SELECT price FROM `Javajam` WHERE menuID = 5";
  $result5 = mysqli_query($db, $sql5);

  if (mysqli_num_rows($result5) > 0) {
   // output data of each row
   while($row = mysqli_fetch_assoc($result5)) {
   //echo "price: " . $row["price"]."<br>";
   $capu2 = $row["price"];
 }
} 


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
    echo '<form action="productprice2.php" method="post" class="menuform">';
    echo '<table border="0">';
    echo '<tr>';
    echo "<td bgcolor=\"#fcebb6\">\n";
    echo "<button class=\"btn\">update</button>\n";
    echo "</td>";
    echo '<th>';
    echo '<strong>Java</strong>';
    echo '</th>';
    echo '<td>';
    echo 'Regular house blend, decaffeinated coffee, or flavor of the';
    echo 'day.<br />';
    echo 'Endless Cup $'.number_format($java,2).' &nbsp;';
    echo ' <input type="number" name="javaprice" id="javaprice" min="0" max="999" step="0.01" value="" />';
    echo '</td>';
    echo '</tr>';
    echo '<tr>';
    echo "<td bgcolor=\"#fcebb6\">\n";
    echo "<button class=\"btn\">update</button>\n";
    echo "</td>";
    echo '<th><strong>Cafe au Lait</strong></th>';
    echo '<td>';
    echo 'House blended coffee infuse in to a smooth, steamed milk<br />';
    echo 'Single $'.number_format($cafe1,2).' &nbsp;';
    echo '<input type="number" name="cafesingleprice" id="cafesingleprice" min="0" max="999" step="0.01" />';
    echo '<input';
    echo 'type="number"';
    echo 'name="cafesingleprice"';
    echo 'id="cafesingleprice"';
    echo 'min="0"';
    echo 'max="999"';
    echo '/>';
    echo '&nbsp; Double $'.number_format($cafe2,2).' ';
    echo '<input type="number" name="cafedoubleprice" id="cafedoubleprice" min="0" max="999" step="0.01" />';
    echo '</td>';
    echo '</tr>';
    echo '<tr>';
    echo "<td bgcolor=\"#fcebb6\">\n";
    echo "<button class=\"btn\">update</button>\n";
    echo "</td>";
    echo '<th><strong>Iced Cappucino</strong></th>';
    echo '<td>';
    echo 'Sweetened espresso blended with icy-cold milk and served in a';
    echo 'chilled glass.<br />';
    echo 'Single $'.number_format($capu1,2).'&nbsp;';
    echo '<input type="number" name="capusingleprice" id="capusingleprice" min="0" max="999" step="0.01" />';
    echo '&nbsp; Double $'.number_format($capu2,2).' &nbsp;';
    echo '<input type="number" name="capudoubleprice" id="capudoubleprice" min="0" max="999" step="0.01" />';
    echo '</td>';
    echo '</tr>';
    echo '</table>';
    echo '</form>';
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

    $db->close();
?>
</html>