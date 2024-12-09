<?php
include("../Assets/Connection/Connection.php");
session_start();
if(isset($_POST["btn_submit"]))
{
	$email=$_POST["txt_email"];
	$password=$_POST["txt_pswd"];
	$sel="select * from tbl_user where user_email ='".$email."' and user_password = '".$password."' ";
	$result = $conn->query($sel);
	$selqry="select * from tbl_admin where admin_email ='".$email."' and admin_password = '".$password."' ";
	$results = $conn->query($selqry);
	$selqry1="select * from tbl_adventure where adv_email ='".$email."' and adv_password = '".$password."' ";
	$resultss = $conn->query($selqry1);
	if($row=$result ->fetch_assoc())
	{
		$_SESSION["uid"]=$row["user_id"];
		header("location:../User/Homepage.php");
	}
	elseif($row=$results ->fetch_assoc())
	{
		$_SESSION["aid"]=$row["admin_id"];
		$_SESSION["aname"]=$row["admin_name"];
		header("location:../Admin/Home page.php");
	}
	elseif($rows=$resultss ->fetch_assoc())
	{
		$_SESSION["advid"]=$rows["adv_id"];
		header("location:../Adventurepark/Homepage1.php");
	}
	else
	{
		?>
        <script>
		alert("Invalid Error")
		window.location="Login.php";
		</script>
        <?php
}
}
?>


<!DOCTYPE html>
<!-- Coding By CodingNepal - www.codingnepalweb.com -->
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Glassmorphism Login Form | CodingNepal</title>
  <link rel="stylesheet" href="../Assets/Templates/Login/style.css">
</head>
<body>
  <div class="wrapper">
    <form action="#" method="post">
      <h2>Login</h2>
        <div class="input-field">
        <input type="text" name="txt_email"required>
        <label>Enter your email</label>
      </div>
      <div class="input-field">
        <input type="password" name="txt_pswd"required>
        <label>Enter your password</label>
      </div>
      <button type="submit" name="btn_submit">Log In</button>
      <div class="register">
        <p>Don't have an account? <a href="User reg.php">Register</a></p>
      </div>
    </form>
  </div>
</body>
</html>

<!-- <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Login Page</title>
<style>
	
	body {
            font-family: Arial, sans-serif;
            background-color: black;
            color: white;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        form {
            background: rgba(255, 255, 255, 0.1); /* Slightly transparent white */
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
            width: 300px; /* Fixed width for portrait layout */
        }
        table {
            width: 100%;
            margin: 0 auto;
        }
        td {
            padding: 10px;
        }
        input[type="email"],
        input[type="password"] {
            width: calc(100% - 20px);
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            background-color: #fff;
            color: #000; /* Black text for inputs */
        }
        input[type="submit"] {
            background-color: #28a745;
            color: white;
            border: none;
            padding: 10px;
            border-radius: 4px;
            cursor: pointer;
            width: 100%;
        }
        input[type="submit"]:hover {
            background-color: #218838;
        }
        a {
            color: #00bfff; /* Light blue for links */
            text-decoration: none;
        }
        a:hover {
            text-decoration: underline;
        }
    
	</style>
</head>

<body>
<form id="form1" name="form1" method="post" action="">
  <table width="200" border="1">
    <tr>
      <td>Email</td>
      <td><input type="email" autocomplete="off"  required name="txt_email" /></td>
    </tr>
    <tr>
      <td>Password</td>
      <td><input type="password"  autocomplete="off"  required name="txt_pswd" /></td>
    </tr>
    <tr>
      <td colspan="2" align="center"><input type="submit" name="btn_login" id="btn_login" value="LOGIN" /></td>
    </tr>
    <tr>
      <td colspan="2" align="center"><A href="User reg.php">NewUser</A></td>
    </tr>
  </table>
</form>
</body>
</html> -->


