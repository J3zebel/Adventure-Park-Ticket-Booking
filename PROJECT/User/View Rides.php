<?php
include("../Assets/Connection/Connection.php");
include("Head.php");

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Rides</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<style>
    body {
        background-color: #f8f9fa;
    }

    .container {
        margin-top: 2rem;
    }

    .ride-card {
        margin-top: 1rem;
        border-radius: 8px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        background-color: white;
        padding: 1.5rem;
    }

    img {
        border-radius: 5px;
        width: 100%;
        height: auto;
    }

    a {
        text-decoration: none;
        color: #007bff;
    }
</style>
</head>

<body>

<div class="container">
    <h2 class="text-center mb-4">Adventure Park</h2>
    <?php
    $selqry = "SELECT * FROM tbl_rides r INNER JOIN tbl_category c ON r.category_id = c.category_id ";
    $result = $conn->query($selqry);
    while($row = $result->fetch_assoc()) {
    ?>
        <div class="ride-card">
    <div class="row">
        <div class="col-md-6">
            <h4><?php echo $row["category_name"]; ?></h4>
            <p><?php echo $row["ride_description"]; ?></p>
        </div>
        <div class="col-md-4">
            <img src="../Assets/Files/Images/<?php echo $row["ride_photo"]; ?>" alt="<?php echo $row['category_name']; ?>" />
        </div>
        <div class="col-md-2 d-flex align-items-center">
            <!-- Removed the button from here -->
        </div>
    </div>
    <div class="text-center mt-3">
        <a href="View gallery.php?uid=<?php echo $row['ride_id']; ?>" class="btn btn-primary">View Gallery</a>
    </div>
</div>

    <?php } ?>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<?php
include("Foot.php");
?>
</body>
</html>
