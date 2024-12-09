<?php
include("../Assets/Connection/Connection.php");
include("Head.php");

$booksel = "SELECT MAX(booking_id) as max FROM tbl_booking";
$bookres = $conn->query($booksel);
$bookdata = $bookres->fetch_assoc();
$booking = $bookdata["max"];

if (isset($_POST['btn_submit'])) {
    $names = $_POST['name'];
    $ages = $_POST['age'];

    for ($i = 0; $i < count($names); $i++) {
        $name = $conn->real_escape_string($names[$i]);
        $age = (int)$ages[$i];

        $sql = "INSERT INTO tbl_customer (customer_name, customer_age, booking_id) VALUES ('$name', $age, '$booking')";

        if ($conn->query($sql) !== TRUE) {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
?>
    <script>
        alert("Customer Added");
        window.location = "MyBookings.php";
    </script>
<?php
}

$sel = "select * from tbl_booking b inner join tbl_rides r on r.ride_id=b.ride_id where booking_id=" . $booking;
$result = $conn->query($sel);
$row = $result->fetch_assoc();
$num_tickets = $row["no_of_tickets"];
$ageLimit = $row["ride_age"];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Customer Details</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }

        .form-container {
            background-color: white;
            padding: 2rem;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            margin-top: 2rem;
        }

        h2 {
            text-align: center;
            margin-bottom: 2rem;
            color: #007bff;
        }

        .customer-details {
            margin-bottom: 2rem;
        }

        .warning-text {
            color: red;
        }

        .btn-submit {
            text-align: center;
        }
    </style>
    <script>
        function checkAge(value, index) {
            var limit = parseInt(document.getElementById("txt_age").value);
            var age = parseInt(value);
            var warning = document.getElementById("warning" + index);
            if (age < limit) {
                warning.innerHTML = "Age must be at least " + limit;
                return false;
            } else {
                warning.innerHTML = "";
                return true;
            }
        }

        function validateForm() {
            var isValid = true;
            var ageFields = document.getElementsByClassName('ageField');
            for (var i = 0; i < ageFields.length; i++) {
                var age = ageFields[i].value;
                if (!checkAge(age, i + 1)) {
                    isValid = false;
                }
            }
            if (!isValid) {
                alert("Please ensure all ages meet the minimum age requirement.");
            }
            return isValid;
        }
    </script>
</head>

<body>

    <div class="container">
        <h2>Enter Customer Details</h2>
        <div class="row justify-content-center">
            <div class="col-lg-8 col-md-10">
                <div class="form-container">
                    <form method="POST" onsubmit="return validateForm()">
                        <input type="hidden" name="txt_age" id="txt_age" value="<?php echo $ageLimit ?>">

                        <?php for ($i = 1; $i <= $num_tickets; $i++) : ?>
                            <div class="customer-details">
                                <h4>Customer <?php echo $i; ?></h4>
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label for="name<?php echo $i; ?>" class="form-label">Name:</label>
                                        <input type="text" class="form-control" name="name[]" id="name<?php echo $i; ?>" required>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="age<?php echo $i; ?>" class="form-label">Age:</label>
                                        <input type="number" class="form-control ageField" name="age[]" id="age<?php echo $i; ?>" required onchange="checkAge(this.value, <?php echo $i; ?>)">
                                        <span id="warning<?php echo $i; ?>" class="warning-text"></span>
                                    </div>
                                </div>
                            </div>
                        <?php endfor; ?>

                        <div class="d-grid btn-submit">
                            <button type="submit" name="btn_submit" class="btn btn-primary btn-lg">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<?php
include("Foot.php");
?>
</body>

</html>
