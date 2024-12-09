<?php
include("../Assets/Connection/Connection.php");
include("Head.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Complaint</title>
    <!-- Include Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
            padding-top: 20px;
        }
        .table {
            margin-top: 20px;
        }
        .btn-reply {
            margin-right: 5px;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <h2 class="text-center">Complaint Details</h2>
        <table class="table table-bordered table-hover text-center">
            <thead class="table-dark">
                <tr>
                    <th>#</th>
                    <th>Title</th>
                    <th>Complaint</th>
                    <th>User</th>
                    <th>Reply</th>
                    <th>Date</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $i = 0;
                $selqry = "SELECT * FROM tbl_complaint c 
                            INNER JOIN tbl_user u ON c.user_id = u.user_id";
                $result = $conn->query($selqry);
                while ($row = $result->fetch_assoc()) {
                    $i++;
                ?>
                <tr>
                    <td><?php echo $i; ?></td>
                    <td><?php echo $row["com_title"]; ?></td>
                    <td><?php echo $row["com_content"]; ?></td>
                    <td><?php echo $row["user_name"]; ?></td>
                    <td><?php echo $row["com_reply"] ? $row["com_reply"] : "No reply yet"; ?></td>
                    <td><?php echo $row["com_date"]; ?></td>
                    <td>
                        <a href="Reply.php?cid=<?php echo $row["com_id"]; ?>" class="btn btn-primary btn-sm btn-reply">Reply</a>
                    </td>
                </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    </div>

    <!-- Include Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

<?php
include("Foot.php");
?>
