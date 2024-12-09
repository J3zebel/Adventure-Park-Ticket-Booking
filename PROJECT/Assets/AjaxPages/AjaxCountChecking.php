<?php
include("../Connection/Connection.php");
if(($_GET["slot"]) && ($_GET["date"]) && ($_GET["ticket"]))
{
	$selslot = "select * from tbl_slot where slot_id=".$_GET["slot"];
	$slotres = $conn->query($selslot);
	$slotdata = $slotres->fetch_assoc();
	$slotcount = $slotdata["slot_count"];
	/*echo $slotcount;*/
	
	$selbooking = "select count(*) as count from tbl_booking where book_to_date='".$_GET["date"]."' and slot_id='".$_GET["slot"]."'";
	$bookres = $conn->query($selbooking);
	$bookdata = $bookres->fetch_assoc();
	/*echo $bookdata["count"];*/
	if($bookdata["count"] < $slotcount)
	{
		if($_GET["ticket"] <= $slotcount)
		{
				
		}
		else
		{
			echo "Not Enough Ticket";
		}
	}
	else
	{
		echo "Slot Not Avalible";
	}
}
?>