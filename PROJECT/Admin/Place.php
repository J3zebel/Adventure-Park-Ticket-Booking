<?php
include("../Assets/Connection/Connection.php");
include("Head.php");
$placename = $placeid = $placepin = $placedist = "";

if (isset($_POST["btn_save"])) {
    $district = $_POST["drop_down"];
    $place = $_POST["txt_nme"];
    $pincode = $_POST["txt_pin"];
    $placeid = $_POST["txt_id"];
    
    if ($placeid == "") {
        $insqry = "INSERT INTO tbl_place (place_name, place_pin, district_id) VALUES ('$place', '$pincode', '$district')";
        
        if ($conn->query($insqry)) {
            echo "<script>
                    alert('Data inserted');
                    window.location = 'Place.php';
                  </script>";
        }
    } else {
        $update = "UPDATE tbl_place SET place_name = '$place', place_pin = '$pincode', district_id = '$district' WHERE place_id = $placeid";
        
        if ($conn->query($update)) {
            echo "<script>
                    alert('Data updated');
                    window.location = 'Place.php';
                  </script>";
        }
    }
}

if (isset($_GET["delid"])) {
    $delqry = "DELETE FROM tbl_place WHERE place_id = " . $_GET["delid"];
    
    if ($conn->query($delqry)) {
        echo "<script>
                alert('Data deleted');
                window.location = 'Place.php';
              </script>";
    }
}

if (isset($_GET["eid"])) {
    $sel = "SELECT * FROM tbl_place WHERE place_id = " . $_GET["eid"];
    $res = $conn->query($sel);
    $data = $res->fetch_assoc();
    $placename = $data["place_name"];
    $placeid = $data["place_id"];
    $placepin = $data["place_pin"];
    $placedist = $data["district_id"];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Place Management</title>
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
        padding: 8px;
        text-align: left;
    }
    th {
        background-color: green;
    }
    input[type="text"], select {
        width: 100%;
        padding: 8px;
        margin: 5px 0 10px;
        border: 1px solid #ccc;
        border-radius: 4px;
    }
    input[type="submit"] {
        background-color: #4CAF50;
        color: black;
        padding: 10px 15px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }
    input[type="submit"]:hover {
        background-color: black;
    }
    .action-links a {
        color: #007BFF;
        text-decoration: none;
        margin: 0 5px;
    }
    .action-links a:hover {
        text-decoration: underline;
    }
</style>
</head>
<body>

<div class="container">
<form id="form1" name="form1" method="post" action="">
  <table>
    <tr>
      <td>District</td>
      <td>
        <select name="drop_down" id="drop_down">
        <option>...Select...</option>
         <?php
            $selqry = "SELECT * FROM tbl_district";
            $result = $conn->query($selqry);
            while ($row = $result->fetch_assoc()) {	
        ?>
            <option value="<?php echo $row["district_id"]; ?>" <?php if ($placedist == $row["district_id"]) echo "selected"; ?>>
                <?php echo $row["district_name"]; ?>
            </option>
        <?php
            }
        ?>
      </select>
      </td>
    </tr>
    <tr>
      <td>Place Name</td>
      <td>
        <input type="text" name="txt_nme" id="txt_nme" value="<?php echo $placename; ?>" />
        <input type="hidden" name="txt_id" id="txt_id" value="<?php echo $placeid; ?>" />
      </td>
    </tr>
    <tr>
      <td>Pincode</td>
      <td>
        <input type="text" name="txt_pin" id="txt_pin" value="<?php echo $placepin; ?>" />
      </td>
    </tr>
    <tr>
      <td colspan="2" align="center">
        <input type="submit" name="btn_save" id="btn_save" value="Save" />
        <input type="submit" name="btn_cancel" id="btn_cancel" value="Cancel" />
      </td>
    </tr>
  </table>

  <table>
    <tr>
      <th>SLNO</th>
      <th>District</th>
      <th>Place</th>
      <th>Pincode</th>
      <th colspan="2">Actions</th>
    </tr>
    <?php
        $i = 0;
        $selqry = "SELECT * FROM tbl_place p INNER JOIN tbl_district d ON p.district_id = d.district_id";
        $result = $conn->query($selqry);
        while ($row = $result->fetch_assoc()) {
            $i++;
    ?>
    <tr>
      <td><?php echo $i; ?></td>
      <td><?php echo $row["district_name"]; ?></td>
      <td><?php echo $row["place_name"]; ?></td>
      <td><?php echo $row["place_pin"]; ?></td>
      <td class="action-links">
        <a href="Place.php?delid=<?php echo $row["place_id"]; ?>">Delete</a>
        <a href="Place.php?eid=<?php echo $row["place_id"]; ?>">Edit</a>
      </td>
    </tr>
    <?php
        }
    ?>
  </table>
</form>
</div>

</body>
</html>

<?php
include("Foot.php");
?>
