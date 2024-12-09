<?php
include("../Assets/Connection/Connection.php");
include("Head.php");
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>User Details</title>
<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f4f4f4;
        color: black;
        margin: 0;
        padding: 0;
    }
    .container {
        width: 90%;
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
    }
    img {
        border-radius: 4px;
    }
</style>
</head>
<body>
<div class="container">
  <table>
    <tr>
      <th>#</th>
      <th>Name</th>
      <th>Contact</th>
      <th>E-mail</th>
      <th>Photo</th>
      <th>District</th>
      <th>Place</th>
      <th>Proof</th>
    </tr>
    <?php
    $i = 0;
    $selqry = "SELECT * FROM tbl_user u 
               INNER JOIN tbl_place p ON u.place_id = p.place_id 
               INNER JOIN tbl_district d ON p.district_id = d.district_id";
    $result = $conn->query($selqry);
    while ($row = $result->fetch_assoc()) {
        $i++;
    ?>
    <tr>
      <td><?php echo $i; ?></td>
      <td><?php echo $row["user_name"]; ?></td>
      <td><?php echo $row["user_contact"]; ?></td>
      <td><?php echo $row["user_email"]; ?></td>
      <td><img src="../Assets/Files/User/<?php echo $row["user_photo"]; ?>" width="100" height="150" alt="User Photo" /></td>
      <td><?php echo $row["district_name"]; ?></td>
      <td><?php echo $row["place_name"]; ?></td>
      <td><img src="../Assets/Files/User/<?php echo $row["user_proof"]; ?>" width="100" height="150" alt="User Proof" /></td>
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
