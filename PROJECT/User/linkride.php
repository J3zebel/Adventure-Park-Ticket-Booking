<?php
include("../Assets/Connection/Connection.php");
include("Head.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>rides</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
<div class="container">
    <h2 class="text-center mb-4">Rides</h2>
    <div class="gallery">
        <?php
        $i=0;
        $selqry = "SELECT * FROM tbl_rides WHERE ride_id=".$_GET["uid"];
        $result = $conn->query($selqry);
        while($row = $result->fetch_assoc())
         {
            $i++;
        ?>
            <div class="ride-item">
                <a href="View Rides.php?uid=<?php echo $row["ride_id"]; ?>" ></a>
            </div>
        <?php
        }
        ?>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

<?php
include("Foot.php");
?>
