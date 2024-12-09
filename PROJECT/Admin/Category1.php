<?php
include("../Assets/Connection/Connection.php");
include("Head.php");
$category = $categoryid = "";

if (isset($_POST["btn_add"])) {
    $category = $_POST["txt_category"];
    $categoryid = $_POST["txt_id"];
    if ($categoryid == "") {
        $insqry = "insert into tbl_category(category_name) values ('".$category."')";
        if ($conn->query($insqry)) {
            echo '<script>alert("Data inserted"); window.location="Category1.php";</script>';
        }
    } else {
        $update = "update tbl_category set category_name='".$category."' where category_id=".$categoryid;
        if ($conn->query($update)) {
            echo '<script>alert("Data updated"); window.location="Category1.php";</script>';
        }
    }
}

if (isset($_GET["delid"])) {
    $delqry = "delete from tbl_category where category_id=".$_GET["delid"];
    if ($conn->query($delqry)) {
        echo '<script>alert("Data deleted"); window.location="Category1.php";</script>';
    }
}

if (isset($_GET["eid"])) {
    $sel = "select * from tbl_category where category_id=".$_GET["eid"];
    $res = $conn->query($sel);
    $data = $res->fetch_assoc();
    $category = $data["category_name"];
    $categoryid = $data["category_id"];
}
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Category Management</title>
<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f4f4f4;
		color:black;
        margin: 0;
        padding: 0;
    }
    .container {
        width: 80%;
        margin: 20px auto;
        background: #fff;
        padding: 20px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }
    table {
        width: 100%;
        border-collapse: collapse;
        margin-bottom: 20px;
    }
    table, th, td {
        border: 1px solid #ddd;
    }
    th, td {
        padding: 12px;
        text-align: left;
    }
    th {
		background-color: green;
		color: white;
    }
    .form-group {
        margin-bottom: 15px;
    }
    .form-group label {
        display: block;
        margin-bottom: 5px;
    }
    .form-group input[type="text"] {
        width: 100%;
        padding: 8px;
        box-sizing: border-box;
    }
    .form-actions {
        text-align: center;
    }
    .form-actions input[type="submit"] {
        padding: 10px 20px;
        background-color: #4CAF50;
        color: white;
        border: none;
        cursor: pointer;
    }
    .form-actions input[type="submit"]:hover {
        background-color: #45a049;
    }
    .action-links a {
        margin-right: 10px;
        color: #007BFF;
        text-decoration: none;
    }
    .action-links a:hover {
        text-decoration: underline;
    }
</style>
</head>
<body>
<div class="container">
    <form id="form1" name="form1" method="post" action="">
        <div class="form-group">
            <label for="txt_category">Category</label>
            <input type="text" autocomplete="off" required name="txt_category" id="txt_category" value="<?php echo $category;?>" />
            <input type="hidden" name="txt_id" id="txt_id" value="<?php echo $categoryid;?>" />
        </div>
        <div class="form-actions">
            <input type="submit" name="btn_add" id="btn_add" value="Add" />
        </div>
    </form>
    <table>
        <thead>
            <tr>
                <th>#</th>
                <th>Category</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $i = 0;
            $selqry = "select * from tbl_category";
            $result = $conn->query($selqry);
            while ($row = $result->fetch_assoc()) {
                $i++;
            ?>
            <tr>
                <td><?php echo $i; ?></td>
                <td><?php echo $row["category_name"]; ?></td>
                <td class="action-links">
                    <a href="Category1.php?delid=<?php echo $row["category_id"]; ?>">Delete</a>
                    <a href="Category1.php?eid=<?php echo $row["category_id"]; ?>">Edit</a>
                </td>
            </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
</div>
</body>
</html>
<?php
include("Foot.php");
?>
