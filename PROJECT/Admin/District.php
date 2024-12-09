<?php
include("../Assets/Connection/Connection.php");
include("Head.php");
$districtname = $districtid = "";
if (isset($_POST["btn_save"])) {
    $districtid = $_POST["txt_id"];
    $district = $_POST["txt_dist"];
    if ($districtid == "") {
        $insqry = "INSERT INTO tbl_district(district_name) VALUES ('$district')";
        if ($conn->query($insqry)) {
            echo "<script>alert('Data inserted'); window.location='District.php';</script>";
        }
    } else {
        $update = "UPDATE tbl_district SET district_name='$district' WHERE district_id=$districtid";
        if ($conn->query($update)) {
            echo "<script>alert('Data updated'); window.location='District.php';</script>";
        }
    }
}
if (isset($_GET["delid"])) {
    $delqry = "DELETE FROM tbl_district WHERE district_id=" . $_GET["delid"];
    if ($conn->query($delqry)) {
        echo "<script>alert('Data deleted'); window.location='District.php';</script>";
    }
}
if (isset($_GET["eid"])) {
    $sel = "SELECT * FROM tbl_district WHERE district_id=" . $_GET["eid"];
    $res = $conn->query($sel);
    $data = $res->fetch_assoc();
    $districtname = $data["district_name"];
    $districtid = $data["district_id"];
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Manage Districts</title>
<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f4f4f4;
        color:black;
        margin: 0;
        padding: 20px;
    }
    .container {
        width: 50%;
        margin: auto;
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
    .form-group {
        margin-bottom: 15px;
    }
    .form-group label {
        display: block;
        margin-bottom: 5px;
    }
    .form-group input[type="text"], .form-group input[type="hidden"] {
        width: calc(100% - 22px);
        padding: 10px;
        border: 1px solid #ddd;
        border-radius: 4px;
    }
    .form-group input[type="submit"] {
        background-color: #4CAF50;
        color: black;
        padding: 10px 20px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }
    .form-group input[type="submit"]:hover {
        background-color: #45a049;
    }
</style>
</head>
<body>
<div class="container">
    <h2>Manage Districts</h2>
    <form id="form1" name="form1" method="post" action="">
        <div class="form-group">
            <label for="txt_dist">District</label>
            <input type="text" name="txt_dist" id="txt_dist" value="<?php echo $districtname; ?>" />
            <input type="hidden" name="txt_id" id="txt_id" value="<?php echo $districtid; ?>" />
        </div>
        <div class="form-group">
            <input type="submit" name="btn_save" id="btn_save" value="Save" />
        </div>
    </form>
    <table>
        <tr>
            <th>#</th>
            <th>District</th>
            <th>Action</th>
        </tr>
        <?php
        $i = 0;
        $selqry = "SELECT * FROM tbl_district";
        $result = $conn->query($selqry);
        while ($row = $result->fetch_assoc()) {
            $i++;
        ?>
        <tr>
            <td><?php echo $i; ?></td>
            <td><?php echo $row["district_name"]; ?></td>
            <td>
                <a href="District.php?eid=<?php echo $row["district_id"]; ?>">Edit</a> | 
                <a href="District.php?delid=<?php echo $row["district_id"]; ?>" onclick="return confirm('Are you sure you want to delete this item?');">Delete</a>
            </td>
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
