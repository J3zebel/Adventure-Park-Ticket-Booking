<?php
include("../Assets/Connection/Connection.php");
include("Head.php");
if(isset($_POST["btn_reg"]))
{
	$name=$_POST["txt_nme"];
	$email=$_POST["txt_ml"];
	$password=$_POST["txt_pswd"];
	$compassword=$_POST["txt_cmpswd"];
	if($password!=$compassword)
	{
		?>
        <script>
		alert("Invalid Password")
		window.location="Register.php"
		</script>
        <?php
	}
	$insqry="insert into tbl_admin(admin_name,admin_email,admin_password,compswd)values('".$name."','".$email."','".$password."','".$compassword."')";
if($conn->query($insqry))
{
?>
<script>
alert("data inserted")
window.location="Register.php"
</script>
<?php
}
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Admin Registration</title>
</head>

<body>
<form id="form1" name="form1" method="post" action="">
  <table width="200" border="1">
    <tr>
      <td>Name</td>
      <td><input  autocomplete="off"  required type="text" name="txt_nme" title="Name Allows Only Alphabets,Spaces and First Letter Must Be Capital Letter" pattern="^[A-Z]+[a-zA-Z ]*$"/></td>
    </tr>
    <tr>
      <td>Email</td>
      <td><label for="txt_ml"></label>
      <input type="email" autocomplete="off" required name="txt_ml" id="txt_ml" /></td>
    </tr>
    <tr>
      <td>Password</td>
      <td><input type="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters"  autocomplete="off" required name="txt_pswd" /></td>
    </tr>
    <tr>
      <td>Confirm password</td>
      <td><label for="txt_cmpaswd"></label>
      <input type="password" autocomplete="off" required name="txt_cmpswd" id="txt_cmpswd" /></td>
    </tr>
    <tr>
      <td colspan="2" align="center"><input type="submit" name="btn_reg" id="btn_reg" value="Register" /></td>
    </tr>
  </table>
</form>
</body>
</html>
<?php
include("Foot.php");
?>