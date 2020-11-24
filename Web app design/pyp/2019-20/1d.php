<?php
// Users(pk:NIN,name,password,email,phone)
// Booking(pk:BookingID,fk:NIN,fk:roomID,fk:optionID, checkin,checkout)
// Rooms(pk:roomID,type,number,price)
// Options(pk:optionID, breakfast,non-smoking,paylater)

//triple join
// SELECT *
// FROM `Javajam_order_items`
// JOIN Javajam ON Javajam.MenuID = Javajam_order_items.MenuID
// JOIN Javajam_orders ON Javajam_orders.OrderID = Javajam_order_items.OrderID

//ii
$sql = "SELECT * FROM `BOOKING` \n"
    ."JOIN Rooms ON Rooms.roomID = Booking.roomID \n"
    ."JOIN Options ON Options.optionID = Booking.optionID \n"
    ."HAVING MAX(Checkout)< '10-12-2019' \n"
    ."WHERE Room.type = 'suite' AND Options.breakfast = 'YES'\n"
    ."AND Room.number = '3'";
    
    $result = $dbcnx->query($sql);
    
//iii
$sql = "SELECT * FROM `BOOKING` \n"
    ."JOIN Rooms ON Rooms.roomID = Booking.roomID \n"
    ."JOIN Options ON Options.optionID = Booking.optionID \n"
    ."HAVING MAX(Checkout)< '10-12-2019' \n"
    ."WHERE Room.type = 'suite' AND Options.breakfast = 'YES'\n"
    ."AND Room.number = '3' AND Options.non-smoking = 'YES' AND Options.paylater = 'YES' ";

    $result = $dbcnx->query($sql);
?>
