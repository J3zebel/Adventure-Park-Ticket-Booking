<?php
include("../Assets/Connection/Connection.php");
include("Head.php");
if(isset($_GET["aid"]))
{
	$update="update tbl_adventure set adv_status = '1' where adv_id='".$_GET["aid"]."'";
		if($conn->query($update))
		{
		?>
		<script>	
		alert("data updated")
		window.location="View adventurepark.php"
		</script>
		<?php
		}
}
if(isset($_GET["did"]))
{
	$update="update tbl_adventure set adv_status = '2' where adv_id='".$_GET["did"]."'";
		if($conn->query($update))
		{
		?>
		<script>	
		alert("data updated")
		window.location="View adventurepark.php"
		</script>
		<?php
		}
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Adventure Park Management</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            color:black;
            margin: 0;
            padding: 20px;
        }

        table {
            width: 100%;
            max-width: 1200px;
            margin: 20px auto;
            border-collapse: collapse;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        th, td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: green;
            color: white;
        }

        tr:hover {
            background-color: #f1f1f1;
        }

        img {
            border-radius: 4px;
            max-width: 100px;
            max-height: 150px;
            object-fit: cover;
        }

        a {
            color: #007bff;
            text-decoration: none;
            transition: color 0.3s;
        }

        a:hover {
            color: #0056b3;
        }

        @media (max-width: 600px) {
            table {
                font-size: 14px;
            }

            img {
                max-width: 80px;
                max-height: 120px;
            }
        }
    </style>
</head>

<body>
<form>
    <table width="299" border="1">
        <tr>
            <th>#</th>
            <th>Name</th>
            <th>Contact</th>
            <th>E-mail</th>
            <th>Logo</th>
            <th>Proof</th>
            <th>District</th>
            <th>Place</th>
            <th>Action</th>
        </tr>
        <?php
        $i=0;
        $selqry="select * from tbl_adventure a inner join tbl_place p on a.place_id=p.place_id inner join tbl_district d on p.district_id=d.district_id";
        $result=$conn->query($selqry);
        while($row=$result->fetch_assoc())
        {
            $i++;
        ?>
        <tr>
            <td><?php echo $i ;?></td>
            <td><?php echo $row["adv_name"];?></td>
            <td><?php echo $row["adv_contact"];?></td>
            <td><?php echo $row["adv_email"];?></td>
            <td><img src="../Assets/Files/Adventurepark/<?php echo $row["adv_logo"];?>" /></td>
            <td><img src="../Assets/Files/Adventurepark/<?php echo $row["adv_proof"];?>" /></td>
            <td><?php echo $row["district_name"];?></td>
            <td><?php echo $row["place_name"];?></td>
            <td>
                <a href="View adventurepark.php?aid=<?php echo $row["adv_id"];?>">Activate</a>&nbsp;
                <a href="View adventurepark.php?did=<?php echo $row["adv_id"];?>">Deactivate</a>
            </td>
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
