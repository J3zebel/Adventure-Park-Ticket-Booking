<?php
//session_start();
include("../Assets/Connection/Connection.php");
include("Head.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Booking Details</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<style>
    body {
        background-color: #f8f9fa;
    }

    .container {
        margin-top: 2rem;
    }

    .table thead {
        background-color: #007bff;
        color: white;
    }

    .table td, .table th {
        text-align: center;
        vertical-align: middle;
    }

    .btn-pay {
        color: #fff;
        background-color: #28a745;
        border-color: #28a745;
    }

    .btn-complaint, .btn-feedback {
        background-color: #ffc107;
        color: #000;
    }

    .btn-view-customer {
        background-color: #17a2b8;
        color: #fff;
    }
</style>
</head>

<body>

<div class="container">
    <h2 class="text-center mb-4">Booking Details</h2>
    <div class="table-responsive">
        <table class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Booking Date</th>
                    <th>To-Date</th>
                    <th>Slot</th>
                    <th>No.of Tickets</th>
                    <th>Ride</th>
                    <th>Amount</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
            <?php
            $i = 0;
            $selqry = "SELECT * FROM tbl_booking b
                       INNER JOIN tbl_slot s ON b.slot_id = s.slot_id
                       INNER JOIN tbl_rides r ON r.ride_id = b.ride_id
                       INNER JOIN tbl_category c ON r.category_id = c.category_id
                       WHERE user_id = " . $_SESSION["uid"];
            $result = $conn->query($selqry);
            while($row = $result->fetch_assoc()) {
                $i++;
                $amt = $row["no_of_tickets"] * $row['ride_rate'];
            ?>
                <tr>
                    <td><?php echo $i; ?></td>
                    <td><?php echo $row["booking_date"]; ?></td>
                    <td><?php echo $row["book_to_date"]; ?></td>
                    <td><?php echo $row["slot_fromtime"]; ?> - <?php echo $row["slot_totime"]; ?></td>
                    <td><?php echo $row["no_of_tickets"]; ?></td>
                    <td><?php echo $row["category_name"]; ?></td>
                    <td><?php echo $amt; ?></td>
                    <td>
                        <?php if($row['booking_status'] == 1) { ?>
                            <span class="badge bg-success">Paid</span>
                        <?php } elseif($row['booking_status'] == 2) { ?>
                            <span class="badge bg-info">Arrived</span>
                            <a href="PostComplaint.php" class="btn btn-complaint btn-sm">Complaint</a>
                            <a href="Feedback.php" class="btn btn-feedback btn-sm">Feedback</a>
                        <?php } else { ?>
                            <span class="badge bg-danger">Not Paid</span>
                            <a href="Payment.php?booking_id=<?php echo $row['booking_id']; ?>&amt=<?php echo $amt; ?>" class="btn btn-pay btn-sm">Pay Now</a>
                        <?php } ?>
                        <a href="View Customer.php?booking_id=<?php echo $row['booking_id']; ?>" class="btn btn-view-customer btn-sm">View Customer</a>
                    </td>
                </tr>
            <?php } ?>
            </tbody>
        </table>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<?php
include("Foot.php");
?>
</body>
</html>
