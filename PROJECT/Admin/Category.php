<?php
include("../Assets/Connection/Connection.php");
$categoryname=$categoryid="";
if(isset($_POST["save_btn"]))
{
	$category=$_POST["cat_id"];
	$categoryid = $_POST["txt_id"];
	if($categoryid=="")
		{
					$insqry="insert into cat_tbl(category_name) values ('".$category."')";
if($conn->query($insqry))
{
?>
<script>
alert("data inserted")
window.location="Category.php"
</script>
<?php
}
}
else
{
	echo $update="update cat_tbl set category_name='".$category."' where category_id=".$categoryid;
	if($conn->query($update))
	{
		?>
        
        <script>
alert("data updated")
window.location="Category.php"
</script>
 <?php
	}
}
}
        
if(isset($_GET["delid"]))
{
$delqry="delete from cat_tbl where category_id=".$_GET["delid"];
if($conn->query($delqry))
{
?>
<script>	
alert("data deleted")
window.location="Category.php"
</script>
<?php
}
}




if(isset($_GET["eid"]))
{
	$sel="select * from cat_tbl where category_id=".$_GET["eid"];
$res=$conn->query($sel);
$data=$res->fetch_assoc();
$categoryname=$data["category_name"];
$categoryid=$data["category_id"];
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
      <td>Category</td>
      <td><label for="cat_id"></label>
      <input type="text" name="cat_id" id="cat_id" value="<?php echo $categoryname;?> "/></td>
      <input type="hidden" name="txt_id" id="txt_id" value="<?php echo $categoryid;?>" /></td>
    </tr>
    <tr>
      <td colspan="2" align="center"><input type="submit" name="save_btn" id="save_btn" value="Add" /></td>
    </tr>
  </table>
  <p>&nbsp;</p>
</form>
<table width="200" border="1">
  <tr>
    <td>#</td>
    <td>category</td>
    <td>&nbsp;</td>
    <?php
	$i=0;
    $selqry="select * from cat_tbl";
    $result=$conn->query($selqry);
    while($row=$result->fetch_assoc())
    {
		$i++;
    ?>
  </tr>
  <tr>
    <td>><?php echo $i ;?></td>
    <td><?php echo $row["category_name"];?></td>
    <td><a href="Category.php?delid=<?php echo $row["category_id"];?>"> delete </a>;</td>
    <td><a href="Category.php?eid=<?php echo $row["category_id"];?>"> edit </a>;</td>
  </tr>>
  <?php
	}
  ?>
</table>
</body>
</html>