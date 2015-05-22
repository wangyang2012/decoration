<?php
session_start();

	//echo $_SESSION['cx'];
	
	if($_SESSION['cx']=="装修公司" )
	{
       echo "<script>javascript:location.href='left3.php';</script>";
	}
    if($_SESSION['cx']=="建材公司")
	{
	   echo "<script>javascript:location.href='left4.php';</script>";
	}
    else
    {
		if($_SESSION['cx']=="个人会员")
		{
			echo "<script>javascript:location.href='left2.php';</script>";
		}
		else
		{
			echo "<script>javascript:location.href='left.php';</script>";
		}
	}

?>