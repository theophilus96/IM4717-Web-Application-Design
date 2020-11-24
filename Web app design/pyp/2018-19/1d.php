<?php
// User(pk:userID,username,password,email, phone)
// Booking(pk:BookingID,fk:userID, fk:CarID, return date, pickup date)
// CarProfile(pk:CarProfileID, location,type,size)
// Car(pk:CarID,fk:CarProfileID, brand,rating,rate)



//part ii
$sql = "SELECT Car.CarID, Car.brand FROM Car \n"
    ."JOIN Booking.CarID = Car.CarID \n"
    ."WHERE Booking.return_date < '$pickupDate' ";
    
    //The where clause works on row’s data, not on aggregated data.

$sql = "SELECT Car.CarID, Car.brand FROM Car \n"
    ."JOIN Booking.CarID = Car.CarID \n"
    ."Having MAX(Booking.return_date) < '$pickupDate' ";
    //This answer is more correct
    //The having clause works on aggregated data.

    $result=$dbcnx->query($sql);

    if (mysqli_num_rows($result) > 0) {
        // output data of each row
        echo "<h2>Cars available</h2>";
        echo "<table border='1'><tr><th>CarID</th><th>brand</th>/tr>";
    
        while($row = mysqli_fetch_assoc($result)) {
        echo "<tr><td>".$row["CarID"]."</td><td>".$row["Brand"]."</td></tr>";
        }
        echo "</table>";
        echo "<br>";
    }
//part iii
$sql = "SELECT Car.CarID, Car.brand FROM Car \n"
    ."JOIN Booking.CarID = Car.CarID \n"
    ."JOIN CarProfile.CarProfileID = Car.CarProfileID \n"
    ."HAVING  MAX(Booking.return_date) < '$pickupDate' \n"
    ."AND CarProfile.type ='Sedan'"
    ."AND CarProfile.size ='Mid-Size'";

    $result=$dbcnx->query($sql);

    if (mysqli_num_rows($result) > 0) {
        // output data of each row
        echo "<h2>Cars available</h2>";
        echo "<table border='1'><tr><th>CarID</th><th>brand</th>/tr>";

        while($row = mysqli_fetch_assoc($result)) {
        echo "<tr><td>".$row["CarID"]."</td><td>".$row["Brand"]."</td></tr>";
        }
        echo "</table>";
        echo "<br>";
    }

//part iv
$sql = "SELECT Car.CarID, Car.brand FROM Car \n"
    ."JOIN Booking.CarID = Car.CarID \n"
    ."HAVING MAX(Booking.return_date) < '$pickupDate' \n"
    ."AND Car.rate ='$rate'";


    $result=$dbcnx->query($sql);

    if (mysqli_num_rows($result) > 0) {
        // output data of each row
        echo "<h2>Cars available</h2>";
        echo "<ol>";

        while($row = mysqli_fetch_assoc($result)) {
        echo "<li> ".$row["CarID"]." ".$row["Brand"]."</li>";
        }
        echo "</ol";
        echo "<br>";
    }



?> 