<?php
session_start();
include_once 'conn.php';

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>�б���Ϣ</title><script language="javascript" src="js/Calendar.js"></script><link rel="stylesheet" href="css.css" type="text/css">
</head>

<body>

<p>�����б���Ϣ�б�</p>
<form id="form1" name="form1" method="post" action="">
  ����: ���⣺<input name="biaoti" type="text" id="biaoti" size=12 style='border:solid 1px #000000; color:#666666;' /> ��ֹ���ڣ�<input name="jiezhiriqi1" type="text" id="jiezhiriqi1"  value='' onclick="getDate(form1.jiezhiriqi1,'2')" size="10" need="1" style='border:solid 1px #000000; color:#666666;' />-<input name="jiezhiriqi2" type="text" id="jiezhiriqi2"  value='' onclick="getDate(form1.jiezhiriqi2,'2')" size="10" need="1" style='border:solid 1px #000000; color:#666666;' />
  <input type="submit" name="Submit" value="����" style='border:solid 1px #000000; color:#666666' />
</form>
<table width="100%" border="1" align="center" cellpadding="3" cellspacing="1" bordercolor="#66FF00" style="border-collapse:collapse">  
  <tr bgcolor="#66FF66">
    <td width="25">���</td>
    <td>����</td>
    <td>��ֹ����</td>
    <td>Ԥ�����</td>
    <td>����</td>
    <td>������</td>
    <td width="120" align="center">���ʱ��</td>
    <td width="70" align="center">����</td>
  </tr>
  <?php 
    $sql="select * from zhaobiaoxinxi where faburen='".$_SESSION['username']."'";
  
if ($_POST["biaoti"]!=""){$nreqbiaoti=$_POST["biaoti"];$sql=$sql." and biaoti like '%$nreqbiaoti%'";}
if ($_POST["jiezhiriqi1"]!=""){$nreqjiezhiriqi1=$_POST["jiezhiriqi1"];$sql=$sql." and jiezhiriqi >= '$nreqjiezhiriqi1'";}
if ($_POST["jiezhiriqi2"]!=""){$nreqjiezhiriqi2=$_POST["jiezhiriqi2"];$sql=$sql." and jiezhiriqi <= '$nreqjiezhiriqi2'";}
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
//zoxngxetxoxngjxvi
  ?>
  <tr>
    <td width="25"><?php echo $i+1;?></td>
    <td><?php echo mysql_result($query,$i,biaoti);?></td><td><?php echo mysql_result($query,$i,jiezhiriqi);?></td><td><?php echo mysql_result($query,$i,yusuanqijia);?></td><td><a href="<?php echo mysql_result($query,$i,fujian);?>" target='_blank'>����</a></td><td><?php echo mysql_result($query,$i,faburen);?></td>
    <td width="120" align="center"><?php echo mysql_result($query,$i,"addtime");?></td>
    <td width="70" align="center"><a href="del.php?id=<?php echo mysql_result($query,$i,"id");?>&tablename=zhaobiaoxinxi" onclick="return confirm('���Ҫɾ����')">ɾ��</a> <a href="zhaobiaoxinxi_updt.php?id=<?php echo mysql_result($query,$i,"id");?>">�޸�</a></td>
  </tr>
  	<?php
	}
}
?>
</table>
<?php //yougongzitongji?>
<p>�������ݹ�<?php
		echo $rowscount;
	?>��</p>
<p align="center"><a href="zhaobiaoxinxi_list2.php?pagecurrent=1">��ҳ</a>, <a href="zhaobiaoxinxi_list2.php?pagecurrent=<?php echo $pagecurrent-1;?>">ǰһҳ</a> ,<a href="zhaobiaoxinxi_list2.php?pagecurrent=<?php echo $pagecurrent+1;?>">��һҳ</a>, <a href="zhaobiaoxinxi_list2.php?pagecurrent=<?php echo $pagecount;?>">ĩҳ</a>, ��ǰ��<?php echo $pagecurrent;?>ҳ,��<?php echo $pagecount;?>ҳ </p>

<p>&nbsp; </p>

</body>
</html>

