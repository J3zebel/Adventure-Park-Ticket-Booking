<?php
include("../Assets/Connection/Connection.php");
include("Head.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>View Complaint</title>
<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f4f4f4;
        color:black;
        margin: 0;
        padding: 20px;
    }
    .container {
        width: 70%;
        margin: auto;
        overflow: hidden;
        background-color: #fff;
        padding: 20px;
        box-shadow: 0 0 10px rgba(0,0,0,0.1);
        border-radius: 8px;
    }
    table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 20px;
    }
    table, th, td {
        border: 1px solid #ddd;
    }
    th, td {
        padding: 10px;
        text-align: left;
    }
    th {
        background-color: green;
    }
    tr:nth-child(even) {
        background-color: #f9f9f9;
    }
    tr:hover {
        background-color: #f1f1f1;
    }
</style>
</head>
<body>
<div class="container">
    <h2>Complaints and Feedback</h2>
    <table>
        <tr>
            <th>#</th>
            <th>User</th>
            <th>Feedback</th>
        </tr>
        <?php
        $i = 0;
        $selqry = "SELECT * FROM tbl_feedback c 
                   INNER JOIN tbl_user u ON c.user_id = u.user_id";
        $result = $conn->query($selqry);
        while ($row = $result->fetch_assoc()) {
            $i++;
        ?>
        <tr>
            <td><?php echo $i; ?></td>
            <td><?php echo $row["user_name"]; ?></td>
            <td><?php echo $row["feedback_content"]; ?></td>
        </tr>
        <?php
        }
        ?>
    </table>
</div>
</body>
</html>
<?php
include("Foot.php");
?>
