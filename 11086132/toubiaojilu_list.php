<?php 
session_start();
include_once 'conn.php';

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Ͷ���¼</title><script language="javascript" src="js/Calendar.js"></script><link rel="stylesheet" href="css.css" type="text/css">
</head>

<body>

<p>����Ͷ���¼�б�</p>
<form id="form1" name="form1" method="post" action="">
  ����: ���⣺<input name="biaoti" type="text" id="biaoti" style='border:solid 1px #000000; color:#666666;width:80px' /> �����ˣ�<input name="faburen" type="text" id="faburen" style='border:solid 1px #000000; color:#666666;width:80px' /> Ͷ���<input name="toubiaojine1" type="text" id="toubiaojine1"  value='' style='border:solid 1px #000000; color:#666666;width:30px' />-<input name="toubiaojine2" type="text" id="toubiaojine2"  value='' style='border:solid 1px #000000; color:#666666;width:30px' /> Ͷ���ˣ�<input name="toubiaoren" type="text" id="toubiaoren" style='border:solid 1px #000000; color:#666666;width:80px' />
  <input type="submit" name="Submit" value="����" style='border:solid 1px #000000; color:#666666' />
</form>
<table width="100%" border="1" align="center" cellpadding="3" cellspacing="1" bordercolor="#00FFFF" style="border-collapse:collapse">  
  <tr>
    <td width="25" bgcolor="#CCFFFF">���</td>
    <td bgcolor='#CCFFFF'>����</td><td bgcolor='#CCFFFF'>������</td><td bgcolor='#CCFFFF'>Ԥ�����</td><td bgcolor='#CCFFFF'>Ͷ����</td><td bgcolor='#CCFFFF'>����</td><td bgcolor='#CCFFFF'>Ͷ����</td>
    <td width="120" align="center" bgcolor="#CCFFFF">���ʱ��</td>
    <td width="70" align="center" bgcolor="#CCFFFF">����</td>
  </tr>
  <?php 
    $sql="select * from toubiaojilu where 1=1";
  
if ($_POST["biaoti"]!=""){$nreqbiaoti=$_POST["biaoti"];$sql=$sql." and biaoti like '%$nreqbiaoti%'";}
if ($_POST["faburen"]!=""){$nreqfaburen=$_POST["faburen"];$sql=$sql." and faburen like '%$nreqfaburen%'";}
if ($_POST["toubiaojine1"]!=""){$nreqtoubiaojine1=$_POST["toubiaojine1"];$sql=$sql." and toubiaojine >= $nreqtoubiaojine1";}
if ($_POST["toubiaojine2"]!=""){$nreqtoubiaojine2=$_POST["toubiaojine2"];$sql=$sql." and toubiaojine <= $nreqtoubiaojine2";}
if ($_POST["toubiaoren"]!=""){$nreqtoubiaoren=$_POST["toubiaoren"];$sql=$sql." and toubiaoren like '%$nreqtoubiaoren%'";}
  $sql=$sql." order by id desc";
  
$query=mysql_query($sql);
  $rowscount=mysql_num_rows($query);
  if($rowscount==0)
  {}
  else
  {
  $pagelarge=10;//ÿҳ������
  $pagecurrent=$_GET["pagecurrent"];
  if($rowscount%$pagelarge==0)
  {
		$pagecount=$rowscount/$pagelarge;
  }
  else
  {
   		$pagecount=intval($rowscount/$pagelarge)+1;
  }
  if($pagecurrent=="" || $pagecurrent<=0)
{
	$pagecurrent=1;
}
 
if($pagecurrent>$pagecount)
{
	$pagecurrent=$pagecount;
}
		$ddddd=$pagecurrent*$pagelarge;
	if($pagecurrent==$pagecount)
	{
		if($rowscount%$pagelarge==0)
		{
		$ddddd=$pagecurrent*$pagelarge;
		}
		else
		{
		$ddddd=$pagecurrent*$pagelarge-$pagelarge+$rowscount%$pagelarge;
		}
	}

	for($i=$pagecurrent*$pagelarge-$pagelarge;$i<$ddddd;$i++)
{
$toubiaojinez=$toubiaojinez+floatval(mysql_result($query,$i,toubiaojine));

  ?>
  <tr>
    <td width="25"><?php echo $i+1;?></td>
    <td><?php echo mysql_result($query,$i,biaoti);?></td><td><?php echo mysql_result($query,$i,faburen);?></td><td><?php echo mysql_result($query,$i,yusuanqijia);?></td><td><?php echo mysql_result($query,$i,toubiaojine);?></td><td><a href="<?php echo mysql_result($query,$i,fujian);?>" target='_blank'>����</a></td><td><?php echo mysql_result($query,$i,toubiaoren);?></td>
    <td width="120" align="center"><?php echo mysql_result($query,$i,"addtime");?></td>
    <td width="90" align="center"><a href="del.php?id=<?php echo mysql_result($query,$i,"id");?>&tablename=toubiaojilu" onclick="return confirm('���Ҫɾ����')">ɾ��</a> <a href="toubiaojilu_updt.php?id=<?php echo mysql_result($query,$i,"id");?>">�޸�</a> <a href="toubiaojilu_detail.php?id=<?php echo mysql_result($query,$i,"id");?>">��ϸ</a></td>
  </tr>
  	<?php
	}
}
?>
</table>
<p>����ͳ�ƣ�����Ͷ����:<?php echo $toubiaojinez?>��</p>
<p>�������ݹ�<?php
		echo $rowscount;
	?>��</p>
<p align="center"><a href="toubiaojilu_list.php?pagecurrent=1">��ҳ</a>, <a href="toubiaojilu_list.php?pagecurrent=<?php echo $pagecurrent-1;?>">ǰһҳ</a> ,<a href="toubiaojilu_list.php?pagecurrent=<?php echo $pagecurrent+1;?>">��һҳ</a>, <a href="toubiaojilu_list.php?pagecurrent=<?php echo $pagecount;?>">ĩҳ</a>, ��ǰ��<?php echo $pagecurrent;?>ҳ,��<?php echo $pagecount;?>ҳ </p>

<p>&nbsp; </p>

</body>
</html>

