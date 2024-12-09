<?php
include("../Assets/Connection/Connection.php");
include("Head.php");

if (isset($_POST["btn_add"])) {
    $ride = $_GET["ride_id"];
    $photo = $_FILES["txt_img"]["name"];
    $path = $_FILES["txt_img"]["tmp_name"];
    move_uploaded_file($path, "../Assets/Files/Images/" . $photo);

    $ins = "INSERT INTO tbl_gallery (img_photo, ride_id) VALUES ('$photo', '$ride')";
    if ($conn->query($ins)) {
        echo "<script>alert('Photo added successfully!');</script>";
    }
}

if (isset($_GET["delid"])) {
    $delqry = "DELETE FROM tbl_gallery WHERE img_id=" . $_GET["delid"];
    if ($conn->query($delqry)) {
        echo "<script>alert('Photo deleted successfully!'); window.location='Add photo.php';</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Photo</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2 class="text-center mb-4">Add Photo</h2>

        <form action="" method="post" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="txt_img" class="form-label">Select Image</label>
                <input type="file" class="form-control" name="txt_img" id="txt_img" required>
            </div>
            <div class="text-center">
                <button type="submit" name="btn_add" class="btn btn-primary">Add Photo</button>
            </div>
        </form>

        <h3 class="mt-5">Gallery</h3>
        <table class="table table-bordered mt-3">
            <thead class="table-dark">
                <tr>
                    <th>#</th>
                    <th>Photo</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
            <?php
            $i = 0;
            $selqry = "SELECT * FROM tbl_gallery g INNER JOIN tbl_rides r ON g.ride_id = r.ride_id";
            $result = $conn->query($selqry);
            while ($row = $result->fetch_assoc()) {
                $i++;
            ?>
                <tr>
                    <td><?php echo $i; ?></td>
                    <td><img src="../Assets/Files/Images/<?php echo $row["img_photo"]; ?>" width="100" height="150" class="img-fluid" /></td>
                    <td><a href="Add photo.php?delid=<?php echo $row['img_id']; ?>" class="btn btn-danger btn-sm">Delete</a></td>
                </tr>
            <?php
            }
            ?>
            </tbody>
        </table>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

<?php
include("Foot.php");
?>
