<?php
include("../Assets/Connection/Connection.php");
if(isset($_POST["btn_reg"]))
{
	$photo=$_FILES["txt_photo"]["name"];
	$path=$_FILES["txt_photo"]["tmp_name"];
	move_uploaded_file($path,"../Assets/Files/User/".$photo);
	$name=$_POST["txt_nme"];
	$contact=$_POST["txt_cnt"];
	$email=$_POST["txt_eml"];
    $place=$_POST["txt_plc"];
	$password=$_POST["txt_pswd"];
	$proof=$_FILES["proof"]["name"];
	$path=$_FILES["proof"]["tmp_name"];
	move_uploaded_file($path,"../Assets/Files/User/".$proof);
	$insqry="insert into tbl_user(user_name,user_contact,user_email,user_photo,place_id,user_password,user_proof)values('".$name."','".$contact."','".$email."','".$photo."','".$place."','".$password."','".$proof."')";
if($conn->query($insqry))
	{
?>
<script>
alert("data inserted")
window.location="Login.php"
</script>
<?php
	}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>User Registration</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="container">
<div class="row justify-content-center mt-5">
    <div class="col-md-6">
        <form action="" method="post" enctype="multipart/form-data">
            <h3 class="text-center">User Registration</h3>

            <div class="mb-3 row">
                <label for="txt_nme" class="col-sm-4 col-form-label">Name</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" name="txt_nme" required pattern="^[A-Z]+[a-zA-Z ]*$" title="Name allows only alphabets, spaces, and first letter must be capital letter" autocomplete="off">
                </div>
            </div>

            <div class="mb-3 row">
                <label for="txt_cnt" class="col-sm-4 col-form-label">Contact</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" name="txt_cnt" required pattern="[7-9]{1}[0-9]{9}" title="Phone number must start with 7-9 and followed by 9 digits" autocomplete="off">
                </div>
            </div>

            <div class="mb-3 row">
                <label for="txt_email" class="col-sm-4 col-form-label">Email</label>
                <div class="col-sm-8">
                    <input type="email" class="form-control" name="txt_eml" required autocomplete="off">
                </div>
            </div>

            <div class="mb-3 row">
                <label for="txt_dist" class="col-sm-4 col-form-label">District</label>
                <div class="col-sm-8">
                    <select class="form-control" name="txt_dist" id="txt_dist" onChange="getPlace(this.value)" required>
                        <option value="">...Select...</option>
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
                    </select>
                </div>
            </div>

            <div class="mb-3 row">
                <label for="txt_plc" class="col-sm-4 col-form-label">Place</label>
                <div class="col-sm-8">
                    <select class="form-control" name="txt_plc" id="txt_plc" required>
                        <option value="">...Select...</option>
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
                    </select>
                </div>
            </div>

            <div class="mb-3 row">
                <label for="txt_photo" class="col-sm-4 col-form-label">Photo</label>
                <div class="col-sm-8">
                    <input type="file" class="form-control" name="txt_photo" id="txt_photo" required autocomplete="off">
                </div>
            </div>

            <div class="mb-3 row">
                <label for="txt_pswd" class="col-sm-4 col-form-label">Password</label>
                <div class="col-sm-8">
                    <input type="password" class="form-control" name="txt_pswd" required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number, one uppercase, and one lowercase letter, and at least 8 or more characters" autocomplete="off">
                </div>
            </div>

            <div class="mb-3 row">
                <label for="proof" class="col-sm-4 col-form-label">Proof</label>
                <div class="col-sm-8">
                    <input type="file" class="form-control" name="proof" id="proof" required autocomplete="off">
                </div>
            </div>

            <div class="d-grid gap-2">
                <button type="submit" class="btn btn-primary" name="btn_reg">Register</button>
            </div>
        </form>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
<script src="../Assets/JQ/jQuery.js"></script>
<script>
  function getPlace(did) {
    $.ajax({
      url: "../Assets/AjaxPages/AjaxPlace.php?did=" + did,
      success: function (result) {
        $("#txt_plc").html(result);
      }
    });
  }
</script>
</body>
</html>
