<?php
//��֤��½��Ϣ
session_start();
include_once 'conn.php';
//if($_POST['submit']){
	
	$username=$_POST['username'];
	$pwd=$_POST['pwd1'];
	$cx=$_POST['cx'];
	//$userpass=md5($userpass);
	$yzm=$_POST['yzm'];
		if ($username!="" && $pwd!="")
		{
			
		if($cx=="���˻�Ա")
		{
			$sql="select * from yonghuzhuce where zhanghao='$username' and mima='$pwd' and issh='��'";
		}
		if($cx=="װ�޹�˾")
		{
			$sql="select * from qiyexinxi where qiyebianhao='$username' and mima='$pwd' and issh='��'";
		}
		if($cx=="���Ĺ�˾")
		{
			$sql="select * from qiyexinxi where qiyebianhao='$username' and mima='$pwd' and issh='��'";
		}
		$query=mysql_query($sql);
		$rowscount=mysql_num_rows($query);
			if($rowscount>0)
			{
					$_SESSION['username']=$username;
					$_SESSION['cx']=$cx;
					if($cx=="���˻�Ա")
					{
						$_SESSION['xm']=mysql_result($query,$i,xingming);
					}
					else
					{
						$_SESSION['xm']=mysql_result($query,$i,qiyemingcheng);
					}
					if($cx=="���˻�Ա")
					{
					$_SESSION['zp']=mysql_result($query,$i,zhaopian);
					}
					else
					{
					$_SESSION['zp']=mysql_result($query,$i,menmianzhaopian);
					}
					//$row = mysql_fetch_row($query)
					//echo $_SESSION['cx'];
					echo "<script language='javascript'>alert('��½�ɹ���');location='index.php';</script>";
			}
			else
			{
					echo "<script language='javascript'>alert('�û�����������󣡻������ʺ�δ�����');history.back();</script>";
			}
		}
		else
		{
				echo "<script language='javascript'>alert('������������');history.back();</script>";
		}
	
	
//}
?>