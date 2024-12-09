<?php
include("../Assets/Connection/Connection.php");
include("Head.php");

if (isset($_GET["id"])) {
    $up = "UPDATE tbl_booking SET booking_status='" . $_GET["status"] . "' WHERE booking_id=" . $_GET["id"];
    if ($conn->query($up)) {
        echo "<script>alert('Customer Arrived'); window.location='View Booking.php';</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Booking</title>
    <!-- Include Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .table {
            margin-top: 20px;
        }
        .btn-primary, .btn-success, .btn-danger {
            margin-right: 5px;
        }
        .status-payed {
            color: green;
            font-weight: bold;
        }
        .status-not-payed {
            color: red;
            font-weight: bold;
        }
        .status-arrived {
            color: blue;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <h2 class="text-center">Booking Details</h2>
        <table class="table table-bordered table-hover text-center">
            <thead class="table-dark">
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
            </thead>
            <tbody>
                <?php
                $i = 0;
                $selqry = "SELECT * FROM tbl_booking b
                            INNER JOIN tbl_slot s ON b.slot_id=s.slot_id
                            INNER JOIN tbl_rides r ON r.ride_id=b.ride_id
                            INNER JOIN tbl_category c ON r.category_id=c.category_id
                            INNER JOIN tbl_user u ON b.user_id=u.user_id";
                $result = $conn->query($selqry);
                while ($row = $result->fetch_assoc()) {
                    $i++;
                    $amt = $row["no_of_tickets"] * $row['ride_rate'];
                ?>
                <tr>
                    <td><?php echo $i; ?></td>
                    <td><?php echo $row["user_name"]; ?></td>
                    <td><?php echo $row["booking_date"]; ?></td>
                    <td><?php echo $row["book_to_date"]; ?></td>
                    <td><?php echo $row["slot_fromtime"] . " - " . $row["slot_totime"]; ?></td>
                    <td><?php echo $row["no_of_tickets"]; ?></td>
                    <td><?php echo $row["category_name"]; ?></td>
                    <td><?php echo $amt; ?></td>
                    <td>
                        <?php
                        if ($row["booking_status"] == 1) {
                            echo '<span class="status-payed">Payed</span> | ';
                            echo '<a href="View Booking.php?id=' . $row["booking_id"] . '&status=2" class="btn btn-success btn-sm">Arrived</a> | ';
                        } else if ($row["booking_status"] == 2) {
                            echo '<span class="status-arrived">Arrived</span> | ';
                        } else {
                            echo '<span class="status-not-payed">Not Payed</span> | ';
                        }
                        ?>
                        <a href="View Customer.php?booking_id=<?php echo $row["booking_id"]; ?>" class="btn btn-primary btn-sm">View Customer</a>
                    </td>
                </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    </div>

    <!-- Include Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
<?php
include("Foot.php");
?>
