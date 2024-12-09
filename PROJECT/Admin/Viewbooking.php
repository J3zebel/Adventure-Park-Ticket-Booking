<?php
include("../Assets/Connection/Connection.php");
include("Head.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>View Booking</title>
<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f4f4f4;
        color: black;
        margin: 0;
        padding: 0;
    }
    .container {
        width: 80%;
        margin: auto;
        overflow: hidden;
    }
    table {
        width: 100%;
        margin-top: 20px;
        border-collapse: collapse;
    }
    table, th, td {
        border: 1px solid #ddd;
    }
    th, td {
        padding: 10px;
        text-align: left;
    }
    th {
        background-color: green;
    }
    tr:nth-child(even) {
        background-color: #f9f9f9;
    }
    tr:hover {
        background-color: #f1f1f1;
    }
    a {
        text-decoration: none;
        color: #007BFF;
    }
    a:hover {
        text-decoration: underline;
    }
</style>
</head>

<body>
<div class="container">
<form>
<table>
    <tr>
        <th>#</th>
        <th>User</th>
        <th>Booking Date</th>
        <th>To-Date</th>
        <th>Slot</th>
        <th>No. of Tickets</th>
        <th>Ride</th>
        <th>Amount</th>
        <th>Action</th>
    </tr>
    <?php
    $i = 0;
    $selqry = "SELECT * FROM tbl_booking b 
               INNER JOIN tbl_slot s ON b.slot_id = s.slot_id 
               INNER JOIN tbl_rides r ON r.ride_id = b.ride_id 
               INNER JOIN tbl_category c ON r.category_id = c.category_id 
               INNER JOIN tbl_user u ON b.user_id = u.user_id 
               WHERE booking_status = 1";
    $result = $conn->query($selqry);
    while ($row = $result->fetch_assoc()) {
        $i++;
    ?>
    <tr>
        <td><?php echo $i; ?></td>
        <td><?php echo $row["user_name"]; ?></td>
        <td><?php echo $row["booking_date"]; ?></td>
        <td><?php echo $row["book_to_date"]; ?></td>
        <td><?php echo $row["slot_fromtime"]; ?>&nbsp;&nbsp;&nbsp;<?php echo $row["slot_totime"]; ?></td>
        <td><?php echo $row["no_of_tickets"]; ?></td>
        <td><?php echo $row["category_name"]; ?></td>
        <td>
            <?php
            $amt = $row["no_of_tickets"] * $row['ride_rate'];
            echo $amt;
            ?>
        </td>
        <td><a href="View Customer.php?booking_id=<?php echo $row["booking_id"]; ?>"> View Customer </a></td>
    </tr>
    <?php
    }
    ?>
</table>
</form>
</div>
</body>
</html>
<?php
include("Foot.php");
?>
