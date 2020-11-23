<?php
User(pk:UserID, username, password/credentials, administrator, customer)
Books(pk:IBSN, title, author, category, cover image,abstract,price, qty_sold)
Reviews(fk:IBSN, reviews)
Order(pk:OrderID,fk:UserID, total amount, date)
OrderItems(fk:OrderID, fk:BookID, Quantity)



$sql="S"

?>