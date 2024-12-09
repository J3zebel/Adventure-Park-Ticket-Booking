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

    .table {
        margin-top: 1.5rem;
        border-radius: 5px;
        overflow: hidden;
    }

    .table thead {
        background-color: #007bff;
        color: white;
    }

    .table td, .table th {
        text-align: center;
        vertical-align: middle;
    }

    .card {
        padding: 1.5rem;
        border-radius: 8px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        background-color: white;
    }

    img {
        border-radius: 5px;
    }

    a {
        text-decoration: none;
        color: #007bff;
    }
</style>
</head>

<body>

<div class="container">
    <h2 class="text-center mb-4">Available Rides</h2>
    <div class="card">
        <div class="table-responsive">
            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Ride Name</th>
                        <th>Description</th>
                        <th>Photo</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                $i = 0;
                $selqry = "SELECT * FROM tbl_rides r INNER JOIN tbl_category c ON r.category_id = c.category_id";
                $result = $conn->query($selqry);
                while($row = $result->fetch_assoc()) {
                    $i++;
                ?>
                    <tr>
                        <td><?php echo $i; ?></td>
                        <td><?php echo $row["category_name"]; ?></td>
                        <td><?php echo $row["ride_description"]; ?></td>
                        <td><img src="../Assets/Files/Images/<?php echo $row["ride_photo"]; ?>" width="100" height="150" /></td>
                        <td><a href="View gallery.php?uid=<?php echo $row['ride_id']; ?>" class="btn btn-primary btn-sm">View Gallery</a></td>
                    </tr>
                <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<?php
include("Foot.php");
?>
</body>
</html>














<style data-mode="MD" data-visited="true">@media (max-width: 991px) and (min-width: 768px) {
  .u-block-496b-63 {
    background-image: none;
  }
  .u-block-496b-61 {
    min-height: 1159px;
  }
  .u-block-496b-60 {
    --animation-custom_in-translate_x: -300px;
    --animation-custom_in-translate_y: 0px;
    --animation-custom_in-opacity: 0;
    --animation-custom_in-rotate: 0deg;
    --animation-custom_in-scale: 1;
    margin-top: 60px;
    margin-left: auto;
    margin-right: auto;
    margin-bottom: 0;
  }
  .u-block-496b-62 {
    background-image: none;
    width: 659px;
    --animation-custom_in-translate_x: 300px;
    --animation-custom_in-translate_y: 0px;
    --animation-custom_in-opacity: 0;
    --animation-custom_in-rotate: 0deg;
    --animation-custom_in-scale: 1;
    font-size: 1.125rem;
    margin-top: 20px;
    margin-left: auto;
    margin-right: auto;
    margin-bottom: 0;
  }
  .u-block-496b-8 {
    margin-top: 50px;
    margin-bottom: 0;
  }
  .u-block-496b-41 {
    min-height: 1329px;
    grid-template-columns: repeat(2, calc(50% - 8.49997px));
    grid-gap: 17px;
  }
  .u-block-496b-11 {
    background-image: linear-gradient(0deg, rgba(var(--black-r),var(--black-g),var(--black-b),0.1), rgba(var(--black-r),var(--black-g),var(--black-b),0.1)), url("np://user.desktop.nicepage.com/Site_427510321/images/1244.jpg");
    transition-duration: 0.5s;
    --animation-custom_in-translate_x: 0px;
    --animation-custom_in-translate_y: 0px;
    --animation-custom_in-opacity: 0;
    --animation-custom_in-rotate: 0deg;
    --animation-custom_in-scale: 0.3;
  }
  .u-block-496b-12 {
    padding-top: 0;
    padding-bottom: 0;
    padding-left: 0;
    padding-right: 0;
  }
  .u-block-496b-107 {
    min-height: 151px;
    margin-top: 0;
    margin-bottom: 0;
  }
  .u-block-496b-108 {
    padding-top: 20px;
    padding-bottom: 20px;
    padding-left: 20px;
    padding-right: 20px;
  }
  .u-block-496b-109 {
    --animation-custom_in-scale: 0.3;
    --animation-custom_in-translate_x: 0px;
    --animation-custom_in-translate_y: 300px;
    margin-top: 0;
    margin-bottom: 0;
    margin-left: 0;
    margin-right: 0;
    font-size: 1.25rem;
  }
  .u-block-496b-110 {
    font-style: italic;
    --animation-custom_in-translate_x: 0px;
    --animation-custom_in-translate_y: 300px;
    --animation-custom_in-opacity: 0;
    --animation-custom_in-rotate: 0deg;
    --animation-custom_in-scale: 0.3;
    margin-top: 15px;
    margin-left: 0;
    margin-right: 0;
    margin-bottom: 0;
  }
  .u-block-496b-9 {
    background-image: linear-gradient(0deg, rgba(var(--black-r),var(--black-g),var(--black-b),0.1), rgba(var(--black-r),var(--black-g),var(--black-b),0.1)), url("np://user.desktop.nicepage.com/Site_427510321/images/8.jpg");
    transition-duration: 0.5s;
    --animation-custom_in-translate_x: 0px;
    --animation-custom_in-translate_y: 0px;
    --animation-custom_in-opacity: 0;
    --animation-custom_in-rotate: 0deg;
    --animation-custom_in-scale: 0.3;
  }
  .u-block-496b-10 {
    padding-top: 0;
    padding-bottom: 0;
    padding-left: 0;
    padding-right: 0;
  }
  .u-block-496b-111 {
    min-height: 151px;
    margin-top: 0;
    margin-bottom: 0;
  }
  .u-block-496b-112 {
    padding-top: 20px;
    padding-bottom: 20px;
    padding-left: 20px;
    padding-right: 20px;
  }
  .u-block-496b-43 {
    font-size: 1.25rem;
    --animation-custom_in-scale: 0.3;
    --animation-custom_in-translate_x: 0px;
    --animation-custom_in-translate_y: 300px;
    margin-top: 0;
    margin-bottom: 0;
    margin-left: 0;
    margin-right: 0;
  }
  .u-block-496b-88 {
    font-style: italic;
    --animation-custom_in-translate_x: 0px;
    --animation-custom_in-translate_y: 300px;
    --animation-custom_in-opacity: 0;
    --animation-custom_in-rotate: 0deg;
    --animation-custom_in-scale: 0.3;
    margin-top: 15px;
    margin-left: 0;
    margin-right: 0;
    margin-bottom: 0;
  }
  .u-block-496b-13 {
    background-image: linear-gradient(0deg, rgba(var(--black-r),var(--black-g),var(--black-b),0.1), rgba(var(--black-r),var(--black-g),var(--black-b),0.1)), url("np://user.desktop.nicepage.com/Site_427510321/images/7894.jpg");
    transition-duration: 0.5s;
    --animation-custom_in-translate_x: 0px;
    --animation-custom_in-translate_y: 0px;
    --animation-custom_in-opacity: 0;
    --animation-custom_in-rotate: 0deg;
    --animation-custom_in-scale: 0.3;
    background-position: 50% 0%;
  }
  .u-block-496b-14 {
    padding-top: 0;
    padding-bottom: 0;
    padding-left: 0;
    padding-right: 0;
  }
  .u-block-496b-113 {
    min-height: 151px;
    margin-top: 0;
    margin-bottom: 0;
  }
  .u-block-496b-114 {
    padding-top: 20px;
    padding-bottom: 20px;
    padding-left: 20px;
    padding-right: 20px;
  }
  .u-block-496b-115 {
    font-size: 1.25rem;
    font-weight: 700;
    --animation-custom_in-scale: 0.3;
    --animation-custom_in-translate_x: 0px;
    --animation-custom_in-translate_y: 300px;
    margin-top: 0;
    margin-bottom: 0;
    margin-left: 0;
    margin-right: 0;
  }
  .u-block-496b-116 {
    font-style: italic;
    --animation-custom_in-translate_x: 0px;
    --animation-custom_in-translate_y: 300px;
    --animation-custom_in-opacity: 0;
    --animation-custom_in-rotate: 0deg;
    --animation-custom_in-scale: 0.3;
    margin-top: 15px;
    margin-left: 0;
    margin-right: 0;
    margin-bottom: 0;
  }
  .u-block-496b-46 {
    background-image: linear-gradient(0deg, rgba(var(--black-r),var(--black-g),var(--black-b),0.1), rgba(var(--black-r),var(--black-g),var(--black-b),0.1)), url("np://user.desktop.nicepage.com/Site_427510321/images/Untitled-16.jpg");
    transition-duration: 0.5s;
    --animation-custom_in-translate_x: 0px;
    --animation-custom_in-translate_y: 0px;
    --animation-custom_in-opacity: 0;
    --animation-custom_in-rotate: 0deg;
    --animation-custom_in-scale: 0.3;
    background-position: 50% 50%;
  }
  .u-block-496b-47 {
    padding-top: 0;
    padding-bottom: 0;
    padding-left: 0;
    padding-right: 0;
  }
  .u-block-496b-117 {
    min-height: 151px;
    margin-top: 0;
    margin-bottom: 0;
  }
  .u-block-496b-118 {
    padding-top: 20px;
    padding-bottom: 20px;
    padding-left: 20px;
    padding-right: 20px;
  }
  .u-block-496b-119 {
    font-size: 1.25rem;
    font-weight: 700;
    --animation-custom_in-scale: 0.3;
    --animation-custom_in-translate_x: 0px;
    --animation-custom_in-translate_y: 300px;
    margin-top: 0;
    margin-bottom: 0;
    margin-left: 0;
    margin-right: 0;
  }
  .u-block-496b-120 {
    font-style: italic;
    --animation-custom_in-translate_x: 0px;
    --animation-custom_in-translate_y: 300px;
    --animation-custom_in-opacity: 0;
    --animation-custom_in-rotate: 0deg;
    --animation-custom_in-scale: 0.3;
    margin-top: 15px;
    margin-left: 0;
    margin-right: 0;
    margin-bottom: 0;
  }
  .u-block-496b-91 {
    background-image: linear-gradient(0deg, rgba(var(--black-r),var(--black-g),var(--black-b),0.1), rgba(var(--black-r),var(--black-g),var(--black-b),0.1)), url("np://user.desktop.nicepage.com/Site_427510321/images/Untitled-164.jpg");
    transition-duration: 0.5s;
    --animation-custom_in-translate_x: 0px;
    --animation-custom_in-translate_y: 0px;
    --animation-custom_in-opacity: 0;
    --animation-custom_in-rotate: 0deg;
    --animation-custom_in-scale: 0.3;
    background-position: 50% 50%;
  }
  .u-block-496b-92 {
    padding-top: 0;
    padding-bottom: 0;
    padding-left: 0;
    padding-right: 0;
  }
  .u-block-496b-121 {
    min-height: 151px;
    margin-top: 0;
    margin-bottom: 0;
  }
  .u-block-496b-122 {
    padding-top: 20px;
    padding-bottom: 20px;
    padding-left: 20px;
    padding-right: 20px;
  }
  .u-block-496b-123 {
    font-size: 1.25rem;
    font-weight: 700;
    --animation-custom_in-scale: 0.3;
    --animation-custom_in-translate_x: 0px;
    --animation-custom_in-translate_y: 300px;
    margin-top: 0;
    margin-bottom: 0;
    margin-left: 0;
    margin-right: 0;
  }
  .u-block-496b-124 {
    font-style: italic;
    --animation-custom_in-translate_x: 0px;
    --animation-custom_in-translate_y: 300px;
    --animation-custom_in-opacity: 0;
    --animation-custom_in-rotate: 0deg;
    --animation-custom_in-scale: 0.3;
    margin-top: 15px;
    margin-left: 0;
    margin-right: 0;
    margin-bottom: 0;
  }
  .u-block-496b-96 {
    background-image: linear-gradient(0deg, rgba(var(--black-r),var(--black-g),var(--black-b),0.1), rgba(var(--black-r),var(--black-g),var(--black-b),0.1)), url("np://user.desktop.nicepage.com/Site_427510321/images/79.jpg");
    transition-duration: 0.5s;
    --animation-custom_in-translate_x: 0px;
    --animation-custom_in-translate_y: 0px;
    --animation-custom_in-opacity: 0;
    --animation-custom_in-rotate: 0deg;
    --animation-custom_in-scale: 0.3;
    background-position: 50% 50%;
  }
  .u-block-496b-97 {
    padding-top: 0;
    padding-bottom: 0;
    padding-left: 0;
    padding-right: 0;
  }
  .u-block-496b-125 {
    min-height: 151px;
    margin-top: 0;
    margin-bottom: 0;
  }
  .u-block-496b-126 {
    padding-top: 20px;
    padding-bottom: 20px;
    padding-left: 20px;
    padding-right: 20px;
  }
  .u-block-496b-127 {
    font-size: 1.25rem;
    font-weight: 700;
    --animation-custom_in-scale: 0.3;
    --animation-custom_in-translate_x: 0px;
    --animation-custom_in-translate_y: 300px;
    margin-top: 0;
    margin-bottom: 0;
    margin-left: 0;
    margin-right: 0;
  }
  .u-block-496b-128 {
    font-style: italic;
    --animation-custom_in-translate_x: 0px;
    --animation-custom_in-translate_y: 300px;
    --animation-custom_in-opacity: 0;
    --animation-custom_in-rotate: 0deg;
    --animation-custom_in-scale: 0.3;
    margin-top: 15px;
    margin-left: 0;
    margin-right: 0;
    margin-bottom: 0;
  }
  .u-block-496b-85 {
    --animation-custom_in-translate_x: 0px;
    --animation-custom_in-translate_y: 300px;
    --animation-custom_in-opacity: 0;
    --animation-custom_in-rotate: 0deg;
    --animation-custom_in-scale: 1;
    margin-top: 50px;
    margin-left: auto;
    margin-right: auto;
    margin-bottom: 60px;
  }
  .u-block-496b-86 {
    padding-top: 0;
    padding-bottom: 0;
    padding-left: 0;
    padding-right: 0;
  }
}</style>
