<?php
include("../Assets/Connection/Connection.php");
include("Head.php");

if (isset($_POST["btn_add"])) {
    $category = $_POST["drop_down"];
    $description = $_POST["txt_des"];
    $photo = $_FILES["txt_img"]["name"];
    $path = $_FILES["txt_img"]["tmp_name"];
    move_uploaded_file($path, "../Assets/Files/Images/".$photo);
    $rate = $_POST["txt_rate"];
    $age = $_POST["txt_age"];
     $insqry = "INSERT INTO tbl_rides(category_id, ride_description, ride_photo, ride_rate, ride_age) VALUES ('$category', '$description', '$photo', '$rate', '$age')";
    if ($conn->query($insqry)) {
        echo "<script>alert('Data inserted'); window.location='Rides.php';</script>";
    }
}

if (isset($_GET["delid"])) {
    $delqry = "DELETE FROM tbl_rides WHERE ride_id=".$_GET["delid"];
    if ($conn->query($delqry)) {
        echo "<script>alert('Data deleted'); window.location='Rides.php';</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rides</title>
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
            <!-- Left Column: Add Ride Form -->
            <div class="col-md-6">
                <div class="card p-4">
                    <div class="card-header text-center bg-primary text-white">
                        <h3>Add Ride</h3>
                    </div>
                    <div class="card-body">
                        <form method="post" enctype="multipart/form-data">
                            <!-- Category Field -->
                            <div class="mb-3">
                                <label for="drop_down" class="form-label"><strong>Category:</strong></label>
                                <select class="form-control" name="drop_down" id="drop_down" required>
                                    <option>...Select...</option>
                                    <?php
                                    $selqry = "SELECT * FROM tbl_category";
                                    $result = $conn->query($selqry);
                                    while ($row = $result->fetch_assoc()) {
                                    ?>
                                        <option value="<?php echo $row["category_id"]; ?>">
                                            <?php echo $row["category_name"]; ?>
                                        </option>
                                    <?php
                                    }
                                    ?>
                                </select>
                            </div>

                            <!-- Description Field -->
                            <div class="mb-3">
                                <label for="txt_des" class="form-label"><strong>Description:</strong></label>
                                <textarea class="form-control" name="txt_des" id="txt_des" rows="5" required></textarea>
                            </div>

                            <!-- Photo Field -->
                            <div class="mb-3">
                                <label for="txt_img" class="form-label"><strong>Photo:</strong></label>
                                <input type="file" class="form-control" name="txt_img" id="txt_img" required>
                            </div>

                            <!-- Rate Field -->
                            <div class="mb-3">
                                <label for="txt_rate" class="form-label"><strong>Rate:</strong></label>
                                <input type="number" class="form-control" name="txt_rate" id="txt_rate" required>
                            </div>

                            <!-- Age Field -->
                            <div class="mb-3">
                                <label for="txt_age" class="form-label"><strong>Age:</strong></label>
                                <input type="number" class="form-control" name="txt_age" id="txt_age" required>
                            </div>

                            <!-- Submit Button -->
                            <div class="text-center">
                                <button type="submit" name="btn_add" class="btn btn-primary">Add Ride</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <!-- Right Column: List of Rides -->
            <div class="col-md-6">
                <div class="card p-4">
                    <div class="card-header text-center bg-dark text-white">
                        <h3>Available Rides</h3>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered table-striped">
                            <thead class="table-dark text-center">
                                <tr>
                                    <th>#</th>
                                    <th>Category</th>
                                    <th>Description</th>
                                    <th>Rate</th>
                                    <th>Age</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody class="text-center">
                                <?php
                                $i = 0;
                                $selqry = "SELECT * FROM tbl_rides r INNER JOIN tbl_category c ON r.category_id = c.category_id";
                                $result = $conn->query($selqry);
                                while ($row = $result->fetch_assoc()) {
                                    $i++;
                                ?>
                                    <tr>
                                        <td><?php echo $i; ?></td>
                                        <td><?php echo $row["category_name"]; ?></td>
                                        <td><?php echo $row["ride_description"]; ?></td>
                                        <td><?php echo $row["ride_rate"]; ?></td>
                                        <td><?php echo $row["ride_age"]; ?></td>
                                        <td>
                                            <a href="Rides.php?delid=<?php echo $row["ride_id"]; ?>" class="btn btn-danger btn-sm">Delete</a>
                                            <a href="Add photo.php?ride_id=<?php echo $row["ride_id"]; ?>" class="btn btn-secondary btn-sm">Add Photo</a>
                                        </td>
                                    </tr>
                                <?php
                                }
                                ?>
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
