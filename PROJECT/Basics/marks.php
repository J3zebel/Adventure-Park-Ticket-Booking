<?php
$grade=" ";
if(isset($_POST["smt_btn"]))
{
	$fname=$_POST["frst_nme"];	
	$lname=$_POST["lst_nme"];
	$name =$fname . $lname;
	$cnt=$_POST["cnt_no"];
	$contact=$cnt;
	$gen=$_POST["rd_btn"];
	$gender=$gen;
	$mrk1=$_POST["mrk_1"];
	$mrk2=$_POST["mrk_2"];
	$mrk3=$_POST["mrk_3"];
	$total=$mrk1+$mrk2+$mrk3;
	$avg=$total/3;
	$per=$total/300*100;
	
		if($total>=250 && $total<300)
		{
			$grade="A";
		}
		else if($total>=200 && $total<=250)
		{
			$grade="B";
		}
		else if($total>=150 && $total<=200)
		{
			$grade="C";
		}
		else if($total>=100 && $total<=150)
		{
			$grade="D";
		}
		elseif($total>=0 && $total<=100)
		{
			$grade="E";
		}
}

?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<form id="form1" name="form1" method="post" action="">
  <table width="378" border="1">
    <tr>
      <td width="368">First name:
        <label for="frst_nme"></label>
      <input type="text" name="frst_nme" id="frst_nme" ></td>
    </tr>
    <tr>
      <td><p>Last name:
        <label for="lst_nme"></label>
        <input type="text" name="lst_nme" id="lst_nme" >
      </p></td>
    </tr>
    <tr>
      <td>Conatct :
        <label for="cnt_no"></label>
      <input type="text" name="cnt_no" id="cnt_no"></td>
    </tr>
    <tr>
      <td>Gender:
        <input type="radio" name="rd_btn" id="rd_btn" value="Male" />
      <label for="rd_btn">Male
        <input type="radio" name="rd_btn" id="rd_btn" value="Female" />
        Female
      </label></td>
    </tr>
    <tr>
      <td>Mark 1:
        <label for="mrk_1"></label>
      <input type="text" name="mrk_1" id="mrk_1" ></td>
    </tr>
    <tr>
      <td>Mark 2:
        <label for="mrk_2"></label>
      <input type="text" name="mrk_2" id="mrk_2" ></td>
    </tr>
    <tr>
      <td>Mark 3:
        <label for="mrk_3"></label>
      <input type="text" name="mrk_3" id="mrk_3" ></td>
    </tr>
    <tr>
      <td align="center"><input type="submit" name="smt_btn" id="smt_btn" value="Submit" /></td>
    </tr>
  </table>
  <table width="200" border="1">
    <tr>
      <td>Name:<?php echo $name; ?><br><br>
      	  Contact:<?php echo $contact; ?><br><br>
      	  Gender:<?php echo $gender; ?><br><br>
      Total mark:<?php echo $total ;?><br><br>
      Average Mark:<?php echo $avg ;?>	<br><br>
      Grade:<?php echo $grade ;?>  <br><br>
      Percentage:<?php echo $per; ?><br><br></td>
    </tr>
  </table>
</form>
</body>
</html>