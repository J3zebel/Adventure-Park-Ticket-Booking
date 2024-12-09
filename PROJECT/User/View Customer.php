<?php
include("../Assets/Connection/Connection.php");
include("Head.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Customer Details</title>
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
</style>
</head>

<body>

<div class="container">
    <h2 class="text-center mb-4">Customer Details</h2>
    <div class="card">
        <div class="table-responsive">
            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Age</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                $i = 0;
                $selqry = "SELECT * FROM tbl_customer WHERE booking_id = " . $_GET["booking_id"];
                $result = $conn->query($selqry);
                while($row = $result->fetch_assoc()) {
                    $i++;
                ?>
                    <tr>
                        <td><?php echo $i; ?></td>
                        <td><?php echo $row["customer_name"]; ?></td>
                        <td><?php echo $row["customer_age"]; ?></td>
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
