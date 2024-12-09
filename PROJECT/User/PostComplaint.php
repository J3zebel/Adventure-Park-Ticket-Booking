<?php
include("../Assets/Connection/Connection.php");
// session_start();
include("Head.php");
if(isset($_POST["btn_submit"]))
{
	$title=$_POST["txt_title"];
	$complaint=$_POST["txt_complaint"];
	   $insqry="insert into tbl_complaint(com_title,com_content,com_date,user_id)values('".$title."','".$complaint."',curdate(),'".$_SESSION["uid"]."')";
if($conn->query($insqry))
	{
?>
<script>
alert("data inserted")
window.location="PostComplaint.php"
</script>
<?php
	}

// 	 $selqry="select * from tbl_compalint c inner join tbl_user u on u.user_id = c.user_id where user_id=".$_SESSION["uid"];
// $result=$conn->query($selqry);
// $data=$result->fetch_assoc();

}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Complaint</title>
</head>

<body>
<form id="form1" name="form1" method="post" action="">
  <table width="200" border="1">
    <tr>
      <td>Title:</td>
      <td><label for="txt_title"></label>
      <input type="text"  autocomplete="off"  required name="txt_title" id="txt_title" /></td>
    </tr>
    <tr>
      <td>Complaint:</td>
      <td><label for="txt_complaint"></label>
      <textarea name="txt_complaint" autocomplete="off"  required id="txt_complaint" cols="45" rows="5" autocomplete="off" required></textarea></td>
    </tr>
    <tr>
      <td colspan="2" align="center"><input type="submit" name="btn_submit" id="btn_submit" value="Submit" /></td>
    </tr>
  </table>
   <table width="299" border="1">
    <tr>
      <td width="43">#</td>
      <td width="68">Title</td>
      <td width="68">Complaint</td>
      <td width="68">Reply</td>
      <td width="68">Date</td>
      
    </tr>
     <?php
	$i=0;
    $selqry="select * from tbl_complaint where user_id=".$_SESSION["uid"] ;
    $result=$conn->query($selqry);
    while($row=$result->fetch_assoc())
    {
		$i++;
    ?>
    <tr>
      <td><?php echo $i ;?></td>
      <td><?php echo $row["com_title"];?></td>
      <td><?php echo $row["com_content"];?></td>
      <td><?php echo $row["com_reply"];?></td>
      <td><?php echo $row["com_date"];?></td>
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