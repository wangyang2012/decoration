<?php 
include_once 'conn.php';

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>�Ҿ���Ϣ</title><script language="javascript" src="js/Calendar.js"></script><link rel="stylesheet" href="css.css" type="text/css">
</head>

<body>

<p>���мҾ���Ϣ�б�</p>
<form id="form1" name="form1" method="post" action="">
  ����: ��ţ�<input name="bianhao" type="text" id="bianhao" /> ���ƣ�<input name="mingcheng" type="text" id="mingcheng" /> ���<select name='leibie' id='leibie'><option value="">����</option><?php getoption("shangpinleibie","leibie")?></select></select>
  <input type="submit" name="Submit" value="����" style='border:solid 1px #000000; color:#666666' />
</form>
<table width="100%" border="1" align="center" cellpadding="3" cellspacing="1" bordercolor="#66FF00" style="border-collapse:collapse">  
  <tr bgcolor="#66FF66">
    <td width="25">���</td>
    <td>���</td>
    <td>����</td>
    <td>���</td>
    <td>ͼƬ</td>
    <td>�۸�</td>
    <td>���</td>
    <td width="120" align="center">���ʱ��</td>
    <td width="70" align="center">����</td>
  </tr>
  <?php 
    $sql="select * from shangpinxinxi where 1=1";
  
if ($_POST["bianhao"]!=""){$nreqbianhao=$_POST["bianhao"];$sql=$sql." and bianhao like '%$nreqbianhao%'";}
if ($_POST["mingcheng"]!=""){$nreqmingcheng=$_POST["mingcheng"];$sql=$sql." and mingcheng like '%$nreqmingcheng%'";}
if ($_POST["leibie"]!=""){$nreqleibie=$_POST["leibie"];$sql=$sql." and leibie like '%$nreqleibie%'";}
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
$jiagez=$jiagez+floatval(mysql_result($query,$i,jiage));
$kucunz=$kucunz+floatval(mysql_result($query,$i,kucun));

  ?>
  <tr>
    <td width="25"><?php
	echo $i+1;
?></td>
    <td><?php echo mysql_result($query,$i,bianhao);?></td><td><?php echo mysql_result($query,$i,mingcheng);?></td><td><?php echo mysql_result($query,$i,leibie);?></td><td width='80'><a href="<?php echo mysql_result($query,$i,tupian) ?>" target='_blank'><img src='<?php echo mysql_result($query,$i,tupian) ?>' width='80' height='88' border='0'></a></td><td><?php echo mysql_result($query,$i,jiage);?></td><td><?php echo mysql_result($query,$i,kucun);?></td>
    <td width="120" align="center"><?php
echo mysql_result($query,$i,"addtime");
?></td>
    <td width="90" align="center"><a href="del.php?id=<?php echo mysql_result($query,$i,"id");?>&tablename=shangpinxinxi" onclick="return confirm('���Ҫɾ����')">ɾ��</a> <a href="shangpinxinxi_updt.php?id=<?php echo mysql_result($query,$i,"id");?>">�޸�</a> <a href="shangpinxinxidetail.php?id=<?php echo mysql_result($query,$i,"id");?>" target="_blank">��ϸ</a></td>
  </tr>
  	<?php
	}
}
?>
</table>
<p>����ͳ�ƣ����Ƽ۸�:<?php echo $jiagez?>�����:<?php echo $kucunz?>��</p>
<p>�������ݹ�<?php
		echo $rowscount;
	?>��</p>
<p align="center"><a href="shangpinxinxi_list.php?pagecurrent=1">��ҳ</a>, <a href="shangpinxinxi_list.php?pagecurrent=<?php echo $pagecurrent-1;?>">ǰһҳ</a> ,<a href="shangpinxinxi_list.php?pagecurrent=<?php echo $pagecurrent+1;?>">��һҳ</a>, <a href="shangpinxinxi_list.php?pagecurrent=<?php echo $pagecount;?>">ĩҳ</a>, ��ǰ��<?php echo $pagecurrent;?>ҳ,��<?php echo $pagecount;?>ҳ </p>

<p>&nbsp; </p>

</body>
</html>

