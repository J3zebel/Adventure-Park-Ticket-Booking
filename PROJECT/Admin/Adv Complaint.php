<?php
include("../Assets/Connection/Connection.php");
include("Head.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>View</title>
</head>

<body>
<table width="299" border="1">
    <tr>
      <td width="43">#</td>
      <td width="68">Title</td>
      <td width="68">Complaint</td>
      <td width="68">reply</td>
      <td width="68">Date</td>
      <td width="68">Action</td>
    </tr>
    <tr>
     <?php
	$i=0;
    $selqry="select * from tbl_complaint";
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
      <td><a href="../Adventurepark/Reply.php?cid=<?php echo $row["com_id"];?>"> Reply </a></td>
    </tr>
    <?php
	}
	?>
  </table>
</body>
</html>
<?php
include("Foot.php");
?>