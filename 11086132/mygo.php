<?php
session_start();

	//echo $_SESSION['cx'];
	
	if($_SESSION['cx']=="װ�޹�˾" )
	{
       echo "<script>javascript:location.href='left3.php';</script>";
	}
    if($_SESSION['cx']=="���Ĺ�˾")
	{
	   echo "<script>javascript:location.href='left4.php';</script>";
	}
    else
    {
		if($_SESSION['cx']=="���˻�Ա")
		{
			echo "<script>javascript:location.href='left2.php';</script>";
		}
		else
		{
			echo "<script>javascript:location.href='left.php';</script>";
		}
	}

?>