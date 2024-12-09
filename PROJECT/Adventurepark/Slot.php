<?php
include("../Assets/Connection/Connection.php");
include("Head.php");

if (isset($_POST["btn_add"])) {
    $count = $_POST["txt_count"];
    $slotfrom = $_POST["txt_from"];
    $slotto = $_POST["txt_to"];
    $insqry = "INSERT INTO tbl_slot(slot_count, slot_fromtime, slot_totime) VALUES ('$count', '$slotfrom', '$slotto')";
    if ($conn->query($insqry)) {
        echo "<script>alert('Data inserted'); window.location='slot.php';</script>";
    }
}

if (isset($_GET["delid"])) {
    $delqry = "DELETE FROM tbl_slot WHERE slot_id=" . $_GET["delid"];
    if ($conn->query($delqry)) {
        echo "<script>alert('Data deleted'); window.location='Slot.php';</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Slot Management</title>
    <!-- Include Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .card {
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
        }
        .table {
            margin-top: 20px;
        }
        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
        }
        .btn-danger {
            background-color: #dc3545;
            border-color: #dc3545;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <div class="row">
            <!-- Left Column: Slot Form -->
            <div class="col-md-6">
                <div class="card p-4">
                    <div class="card-header text-center bg-primary text-white">
                        <h3>Add Slot</h3>
                    </div>
                    <div class="card-body">
                        <form method="post">
                            <!-- Slot Count Field -->
                            <div class="mb-3">
                                <label for="txt_count" class="form-label"><strong>Slot Count:</strong></label>
                                <input type="number" class="form-control" id="txt_count" name="txt_count" required>
                            </div>

                            <!-- From Time Field -->
                            <div class="mb-3">
                                <label for="txt_from" class="form-label"><strong>From Time:</strong></label>
                                <input type="time" class="form-control" id="txt_from" name="txt_from" required>
                            </div>

                            <!-- To Time Field -->
                            <div class="mb-3">
                                <label for="txt_to" class="form-label"><strong>To Time:</strong></label>
                                <input type="time" class="form-control" id="txt_to" name="txt_to" required>
                            </div>

                            <!-- Submit Button -->
                            <div class="text-center">
                                <button type="submit" name="btn_add" class="btn btn-primary">Add Slot</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <!-- Right Column: Slot List -->
            <div class="col-md-6">
                <div class="card p-4">
                    <div class="card-header text-center bg-dark text-white">
                        <h3>Available Slots</h3>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered table-striped">
                            <thead class="table-dark text-center">
                                <tr>
                                    <th>#</th>
                                    <th>Slot Count</th>
                                    <th>From Time</th>
                                    <th>To Time</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody class="text-center">
                                <?php
                                $i = 0;
                                $selqry = "SELECT * FROM tbl_slot";
                                $result = $conn->query($selqry);
                                while ($row = $result->fetch_assoc()) {
                                    $i++;
                                    ?>
                                    <tr>
                                        <td><?php echo $i; ?></td>
                                        <td><?php echo $row["slot_count"]; ?></td>
                                        <td><?php echo $row["slot_fromtime"]; ?></td>
                                        <td><?php echo $row["slot_totime"]; ?></td>
                                        <td><a href="Slot.php?delid=<?php echo $row["slot_id"]; ?>" class="btn btn-danger btn-sm">Delete</a></td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Include Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
<?php
include("Foot.php");
?>
