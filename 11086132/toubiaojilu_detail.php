<?php 

include_once 'conn.php';
$id=$_GET["id"];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>������ϸ</title><link rel="stylesheet" href="css.css" type="text/css">
</head>
<body>
<p>������ϸ��</p>
					<?php
$sql="select * from toubiaojilu where id=".$id;
$query=mysql_query($sql);
$rowscount=mysql_num_rows($query);
if($rowscount>0)
{
?>

<table width="98%" border="1" align="center" cellpadding="3" cellspacing="1" bordercolor="#66FF00" style="border-collapse:collapse"> 
      <tr>
	  <td width='11%'>���⣺</td><td width='39%'><?php echo mysql_result($query,0,biaoti);?></td><td width='11%'>�����ˣ�</td><td width='39%'><?php echo mysql_result($query,0,faburen);?></td></tr><tr><td width='11%'>Ԥ����ۣ�</td><td width='39%'><?php echo mysql_result($query,0,yusuanqijia);?></td><td width='11%'>Ͷ���</td><td width='39%'><?php echo mysql_result($query,0,toubiaojine);?></td></tr><tr><td width='11%'>Ͷ���ˣ�</td>
	  <td width='39%'><?php echo mysql_result($query,0,toubiaoren);?></td>
	  <td width='11%'>������</td><td width='39%'><a href="<?php echo mysql_result($query,0,fujian);?>">�������</a></td></tr><tr><td width='11%' height="103">Ͷ�������ݣ�</td>
	  <td colspan="3"><?php echo mysql_result($query,0,toubiaoshuneirong);?></td>
	  </tr><tr><td colspan=4 align=center><input type=button name=Submit5 value=���� onClick="javascript:history.back()" style='border:solid 1px #000000; color:#666666'  /></td>
	  </tr>
</table>

<?php
	}
?>
<p>&nbsp;</p>
</body>
</html>

