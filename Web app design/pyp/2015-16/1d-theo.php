


<?php


// Member(pk:name,matricID,gender,address,email,phone)
// Events(pk:eventID, name ,schedule, price, capacity, brief description, full description)
// Bookings(pk:BookingID, fk:matricID, total amount, time)
// Booking_info(fk:BookingID, fk:eventID, quantity)


@$dbcnx = new mysqli('localhost','f32ee','f32ee','f32ee');
// @ to ignore error message display //
if ($dbcnx->connect_error){
	echo "Database is not online"; 
	exit;
	// above 2 statments same as die() //
	}
	// else
	// echo "Congratulations...  MySql is working..";

if (!$dbcnx->select_db ("f32ee"))
	exit("<p>Unable to locate the f32ee database</p>");


$sql = "SELECT Events.name, SUM(Booking_info.quantity) AS total_tickets_booked\n"
    . "FROM Booking_info\n"
    . "JOIN products ON Events.eventID = Booking_info.eventID\n"
    . "GROUP BY Events.eventID\n"
    . "ORDER BY total_tickets_booked DESC";

$result = $dbcnx->query($sql);
if (mysqli_num_rows($result) > 0) {
    // output data of each row
    echo "<h2>Total tickets by event</h2>";
    echo "<table border='1'><tr><th>Name</th><th>Total Quantity</th></tr>";

    while($row = mysqli_fetch_assoc($result)) {
    echo "<tr><td>".$row["name"]."</td><td>".$row["total_tickets_booked"]."</td></tr>";
    }
    echo "</table>";
    echo "<br>";

}
?>	