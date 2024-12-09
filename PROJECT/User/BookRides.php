<?php
include("../Assets/Connection/Connection.php");
include("Head.php");

if (isset($_POST["btn_book"])) {
    $todate = $_POST["txt_date"];
    $slot = $_POST["txt_slot"];
    $ticket = $_POST["txt_ticket"];
    $ride = $_POST["txt_ride"];

    $insqry = "insert into tbl_booking(booking_date,user_id,book_to_date,slot_id,no_of_tickets,ride_id)
               values(curdate(),'".$_SESSION["uid"]."','".$todate."','".$slot."','".$ticket."','".$ride."')";

    if ($conn->query($insqry)) {
        echo "<script>alert('Data inserted'); window.location='Add Customer.php';</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .form-container {
            background: white;
            padding: 2rem;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            margin-top: 5rem;
        }
        .form-container h3 {
            text-align: center;
            margin-bottom: 1.5rem;
            color: black;
        }
    </style>
</head>
<body>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-6 col-md-8 col-sm-10">
            <div class="form-container">
                <h3>Book Your Ride</h3>
                <form method="post" action="">
                    <div class="mb-3">
                        <label for="txt_date" class="form-label">Date</label>
                        <input type="date" class="form-control" id="txt_date" name="txt_date" required onchange="CheckSlot()">
                    </div>
                    <div class="mb-3">
                        <label for="txt_slot" class="form-label">Slot</label>
                        <select class="form-select" id="txt_slot" name="txt_slot" required onchange="CheckSlot()">
                            <option value="">...Select...</option>
                            <?php
                            $selqry = "select * from tbl_slot";
                            $result = $conn->query($selqry);
                            while ($row = $result->fetch_assoc()) {
                                echo "<option value='".$row["slot_id"]."'>".$row["slot_fromtime"]." - ".$row["slot_totime"]."</option>";
                            }
                            ?>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="txt_ticket" class="form-label">Number of Tickets</label>
                        <input type="number" class="form-control" id="txt_ticket" name="txt_ticket" required min="1" onchange="CheckSlot()">
                    </div>
                    <div class="mb-3">
                        <label for="txt_ride" class="form-label">Ride</label>
                        <select class="form-select" id="txt_ride" name="txt_ride" required>
                            <option value="">...Select...</option>
                            <?php
                            $selqry = "select * from tbl_rides r inner join tbl_category c on r.category_id = c.category_id";
                            $result = $conn->query($selqry);
                            while ($row = $result->fetch_assoc()) {
                                echo "<option value='".$row["ride_id"]."'>".$row["category_name"]."</option>";
                            }
                            ?>
                        </select>
                    </div>
                    <div class="d-grid">
                        <button type="submit" name="btn_book" id="btn_book" class="btn btn-primary">Book Now</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    function CheckSlot() {
        var date = document.getElementById("txt_date").value;
        var slot = document.getElementById("txt_slot").value;
        var ticket = document.getElementById("txt_ticket").value;

        $.ajax({
            url: "../Assets/AjaxPages/AjaxCountChecking.php?date=" + date + "&slot=" + slot + "&ticket=" + ticket,
            success: function (result) {
                if (result !== "") {
                    alert(result);
                    window.location.reload();
                }
            }
        });
    }
</script>

<?php include("Foot.php"); ?>
</body>
</html>
