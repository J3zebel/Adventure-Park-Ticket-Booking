<?php
include("../Assets/Connection/Connection.php");
if(isset($_POST["btn_save"]))
{
	$cat=$_POST["txt_dropdown"];
	$name=$_POST["txt_sub"];
	
	$insqry="insert into tbl_subcategory(subcategory_name,category_id)values('".$name."','".$cat."')";
if($conn->query($insqry))
{
?>
<script>
alert("data inserted")
window.location="Subcategory.php"
</script>
<?php
}
}
if(isset($_GET["delid"]))
{
$delqry="delete from tbl_subcategory where subcategory_id=".$_GET["delid"];
if($conn->query($delqry))
{
?>
<script>	
alert("data deleted")
window.location="Subcategory.php"
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
      <td>category</td>
      <td><label for="txt_dropdown"></label>
        <select name="txt_dropdown" id="txt_dropdown">
        <option>..select..</option>
         <?php
    $selqry="select * from cat_tbl";
    $result=$conn->query($selqry);
    while($row=$result->fetch_assoc())
    {
    ?>
 <option value="<?php echo $row["category_id"];?>"><?php echo $row["category_name"];?></option>
  <?php
	}
  ?>
      </select></td>
    </tr>
    <tr>
      <td>subcategory</td>
      <td><label for="txt_sub"></label>
      <input type="text" name="txt_sub" id="txt_sub" /></td>
    </tr>
    <tr>
      <td colspan="2" align="center"><input type="submit" name="btn_save" id="btn_save" value="save" />
      <input type="submit" name="btn_cancel" id="btn_cancel" value="cancel" /></td>
    </tr>
  </table>
  <p>&nbsp;</p>
  <table width="200" border="1">
    <tr>
      <td>SLNO</td>
      <td>CATEGORY</td>
      <td>SUBCATEGORY</td>
    </tr>
    <tr>
     <?php
	$i=0;
    $selqry="select * from tbl_subcategory s inner join cat_tbl c on s.category_id=c.category_id";
    $result=$conn->query($selqry);
    while($row=$result->fetch_assoc())
    {
		$i++;
    ?>
    <tr>
      <td><?php echo $i ;?></td>
      <td><?php echo $row["category_name"];?></td>
      <td><?php echo $row["subcategory_name"];?></td>
      <td><a href="Subcategory.php?delid=<?php echo $row["subcategory_id"];?>"> delete </a>;</td>
    </tr>
    <?php
	}
	?>
    </tr>
  </table>
  <p>&nbsp;</p>
</form>
</body>
</html>