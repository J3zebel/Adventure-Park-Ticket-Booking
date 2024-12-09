<?php
include("../Assets/Connection/Connection.php");
include("Head.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Gallery</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

<style>
    body {
        background-color: #f8f9fa;
        padding: 20px;
    }

    .gallery {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        gap: 15px;
    }

    .gallery-item {
        position: relative;
        overflow: hidden;
        border-radius: 8px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s ease;
    }

    .gallery-item img {
        width: 100%;
        height: auto;
        display: block;
        border-radius: 8px;
    }

    .gallery-item:hover {
        transform: scale(1.05);
    }

    .gallery-item {
        flex-basis: calc(25% - 30px);
        margin-bottom: 30px;
    }

    @media (max-width: 768px) {
        .gallery-item {
            flex-basis: calc(50% - 30px);
        }
    }

    @media (max-width: 576px) {
        .gallery-item {
            flex-basis: calc(100% - 30px);
        }
    }
</style>

</head>

<body>
<div class="container">
    <h2 class="text-center mb-4">Ride Gallery</h2>
    <div class="gallery">
        <?php
        $selqry = "SELECT * FROM tbl_gallery WHERE ride_id=" . $_GET["uid"];
        $result = $conn->query($selqry);
        while($row = $result->fetch_assoc()) {
        ?>
            <div class="gallery-item">
                <img src="../Assets/Files/Images/<?php echo $row["img_photo"]; ?>" alt="Ride Image" />
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
