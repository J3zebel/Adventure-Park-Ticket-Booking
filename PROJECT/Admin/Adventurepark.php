<?php
include("../Assets/Connection/Connection.php");
if(isset($_POST["btn_register"]))
{
	$name=$_POST["txt_name"];
	$contact=$_POST["txt_contact"];
	$email=$_POST["txt_email"];
	$logo=$_FILES["logo"]["name"];
	$path=$_FILES["logo"]["tmp_name"];
	move_uploaded_file($path,"../Assets/Files/Adventurepark/".$logo);
	$proof=$_FILES["proof"]["name"];
	$path=$_FILES["proof"]["tmp_name"];
	move_uploaded_file($path,"../Assets/Files/Adventurepark/".$proof);
	$password=$_POST["txt_password"];
	$place=$_POST["txt_place"];
	$ins="insert into tbl_adventure(adv_name,adv_contact,adv_email,adv_logo,adv_proof,adv_password,place_id) values ('".$name."','".$contact."','".$email."','".$logo."','".$proof."','".$password."','".$place."')";
if($conn->query($ins))
{
?>
<script>
alert("data inserted");
window.location="View adventurepark.php";
</script>
<?php
}
else
{
	?>
	<script>
	alert("data not inserted")
	//window.location="View adventurepark.php";
	</script>
    <?php
}}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Adventure Park</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }

        table {
            width: 100%;
            max-width: 400px;
            margin: auto;
            border-collapse: collapse;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        td {
            padding: 10px;
            border: 1px solid #ddd;
        }

        input[type="text"],
        input[type="password"],
        select {
            width: calc(100% - 20px);
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            transition: border 0.3s;
        }

        input[type="text"]:focus,
        input[type="password"]:focus {
            border-color: #007bff;
            outline: none;
        }

        input[type="file"] {
            padding: 10px;
        }

        input[type="submit"] {
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 5px;
            padding: 10px;
            cursor: pointer;
            transition: background-color 0.3s, transform 0.2s;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
            transform: scale(1.05);
        }

        select {
            appearance: none;
            background: url(../Assets/Images/dropdown-arrow.png) no-repeat right;
            background-size: 12px;
        }

        label {
            font-weight: bold;
        }

        @media (max-width: 600px) {
            table {
                width: 100%;
            }
        }
    </style>
</head>

<body>
<form action="" method="post" enctype="multipart/form-data" name="form1" id="form1">
  <table width="318" border="1">
    <tr>
      <td width="164">Name</td>
      <td width="138"><label for="txt_name"></label>
      <input type="text" name="txt_name" id="txt_name" /></td>
    </tr>
    <tr>
      <td>Contact</td>
      <td><label for="txt_contact"></label>
      <input type="text" name="txt_contact" id="txt_contact" /></td>
    </tr>
    <tr>
      <td>E-mail</td>
      <td><label for="txt_email"></label>
      <input type="text" name="txt_email" id="txt_email" /></td>
    </tr>
    <tr>
      <td>Logo</td>
      <td><label for="logo"></label>
      <input type="file" name="logo" id="logo" /></td>
    </tr>
    <tr>
      <td>Proof</td>
      <td><label for="proof"></label>
      <input type="file" name="proof" id="proof" /></td>
    </tr>
    <tr>
      <td>Password</td>
      <td><label for="txt_password"></label>
      <input type="password" name="txt_password" id="txt_password" /></td>
    </tr>
    <tr>
      <td>District</td>
      <td><label for="txt_district"></label>
        <select name="txt_district" id="txt_district" onchange="getPlace(this.value)">
        <option>...Select...</option>
         <?php
            $selqry="select * from tbl_district";
            $result=$conn->query($selqry);
            while($row=$result->fetch_assoc())
            {	
        ?>
        <option value="<?php echo $row["district_id"];?>">
         <?php echo $row["district_name"];?>
        </option>
        <?php
            }
        ?>
        </select></td>
    </tr>
    <tr>
      <td>Place</td>
      <td><label for="txt_place"></label>
        <select name="txt_place" id="txt_place">
        <option>...Select...</option>
         <?php
            $selqry="select * from tbl_place";
            $result=$conn->query($selqry);
            while($row=$result->fetch_assoc())
            {	
        ?>
        <option value="<?php echo $row["place_id"];?>">
         <?php echo $row["place_name"];?>
        </option>
        <?php
            }
        ?>
        </select></td>
    </tr>
    <tr>
      <td colspan="2" align="center"><input type="submit" name="btn_register" id="btn_register" value="Register" /></td>
    </tr>
  </table>
  
</form>
</body>
</html>
<script src="../Assets/JQ/jQuery.js"></script>
<script>
  function getPlace(did) {
    $.ajax({
      url: "../Assets/AjaxPages/AjaxPlace.php?did=" + did,
      success: function (result) {
        $("#txt_place").html(result);
      }
    });
  }
</script>
