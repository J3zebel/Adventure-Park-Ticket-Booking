<?php
include("../Assets/Connection/Connection.php");
// session_start();
include("Head.php");
if(isset($_POST["btn_submit"]))
{
	$title=$_POST["txt_feedback"];
		$insqry="insert into tbl_feedback(feedback_content,user_id)values('".$title."','".$_SESSION["uid"]."')";
if($conn->query($insqry))
	{
?>
<script>
alert("data inserted")
window.location="Feedback.php"
</script>
<?php
	}
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
  <table width="200" border="1">
    <tr>
      <td>Feedback</td>
      <td><label for="txt_feedback"></label>
      <textarea  name="txt_feedback" autocomplete="off" required id="txt_feedback" cols="45" rows="5"></textarea></td>
    </tr>
    <tr>
      <td colspan="2" align="center"><input type="submit" name="btn_submit" id="btn_submit" value="Submit" /></td>
    </tr>
  </table>
  <table width="299" border="1">
    <tr>
      <td width="43">#</td>
      <td width="68">Feedback</td>
     
      
    </tr>
     <?php
	$i=0;
    $selqry="select * from tbl_feedback where user_id=".$_SESSION["uid"] ;
    $result=$conn->query($selqry);
    while($row=$result->fetch_assoc())
    {
		$i++;
    ?>
    <tr>
      <td><?php echo $i ;?></td>
      <td><?php echo $row["feedback_content"];?></td>
    
    </tr>
    <?php
	}
	?>
  </table>
</form>
</body>
</html>
<?php
include("Foot.php");
?>