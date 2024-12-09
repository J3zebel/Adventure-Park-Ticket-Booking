<?php
$result="";
if(isset($_POST["btn_1"]))
{
	$num1=$_POST["txt_num1"];
	$num2=$_POST["txt_num2"];
	$result=$num1+$num2;
}
if(isset($_POST["btn_2"]))
{
	$num1=$_POST["txt_num1"];
	$num2=$_POST["txt_num2"];
	$result=$num1-$num2;
}
if(isset($_POST["btn_3"]))
{
	$num1=$_POST["txt_num1"];
	$num2=$_POST["txt_num2"];
	$result=$num1*$num2;
}
if(isset($_POST["btn_4"]))
{
	$num1=$_POST["txt_num1"];
	$num2=$_POST["txt_num2"];
	$result=$num1/$num2;
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<form id="form1" name="form1" method="post" action="">
  <table width="304" border="1">
    <tr>
      <td width="164">Number 1</td>
      <td width="124"><label for="txt_num1"></label>
      <input type="text" name="txt_num1" id="txt_num1" value= <?php echo $num1 ?> ></td>
    </tr>
    <tr>
      <td>Number 2</td>
      <td><label for="txt_num2"></label>
      <input type="text" name="txt_num2" id="txt_num2" value= <?php echo $num2 ?>></td>
    </tr>
    <tr>
      <td colspan="2" align="center" class="btn">
      <input type="submit" name="btn_1" id="btn_1" value="+" />
      <input type="submit" name="btn_2" id="btn_2" value="-" />
      <input type="submit" name="btn_3" id="btn_3" value="*" />
      <input type="submit" name="btn_4" id="btn_4" value="/" /></td>
    </tr>
    <tr>
      <td colspan="2">Result: <?php  echo $result ?></td>
    </tr> 
  </table>
</form>
</body>
</html>