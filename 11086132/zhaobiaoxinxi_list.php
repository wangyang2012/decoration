<?php 
session_start();
include_once 'conn.php';

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>招标信息</title><script language="javascript" src="js/Calendar.js"></script><link rel="stylesheet" href="css.css" type="text/css">
</head>

<body>

<p>已有招标信息列表：</p>
<form id="form1" name="form1" method="post" action="">
  搜索: 标题：<input name="biaoti" type="text" id="biaoti" style='border:solid 1px #000000; color:#666666;width:80px' /> 截止日期：<input name="jiezhiriqi1" type="text" id="jiezhiriqi1"  value='' onclick="getDate(form1.jiezhiriqi1,'2')" size="10" need="1" style='border:solid 1px #000000; color:#666666;' />-<input name="jiezhiriqi2" type="text" id="jiezhiriqi2"  value='' onclick="getDate(form1.jiezhiriqi2,'2')" size="10" need="1" style='border:solid 1px #000000; color:#666666;' /> 发布人：<input name="faburen" type="text" id="faburen" style='border:solid 1px #000000; color:#666666;width:80px' />
  <input type="submit" name="Submit" value="查找" style='border:solid 1px #000000; color:#666666' />
</form>
<table width="100%" border="1" align="center" cellpadding="3" cellspacing="1" bordercolor="#66FF00" style="border-collapse:collapse">  
  <tr bgcolor="#66FF66">
    <td width="25">序号</td>
    <td>标题</td>
    <td>截止日期</td>
    <td>预算起价</td>
    <td>附件</td>
    <td>发布人</td>
    <td width="120" align="center">添加时间</td>
    <td width="70" align="center">操作</td>
  </tr>
  <?php 
    $sql="select * from zhaobiaoxinxi where 1=1";
  
if ($_POST["biaoti"]!=""){$nreqbiaoti=$_POST["biaoti"];$sql=$sql." and biaoti like '%$nreqbiaoti%'";}
if ($_POST["jiezhiriqi1"]!=""){$nreqjiezhiriqi1=$_POST["jiezhiriqi1"];$sql=$sql." and jiezhiriqi >= '$nreqjiezhiriqi1'";}
if ($_POST["jiezhiriqi2"]!=""){$nreqjiezhiriqi2=$_POST["jiezhiriqi2"];$sql=$sql." and jiezhiriqi <= '$nreqjiezhiriqi2'";}
if ($_POST["faburen"]!=""){$nreqfaburen=$_POST["faburen"];$sql=$sql." and faburen like '%$nreqfaburen%'";}
  $sql=$sql." order by id desc";
  
$query=mysql_query($sql);
  $rowscount=mysql_num_rows($query);
  if($rowscount==0)
  {}
  else
  {
  $pagelarge=10;//每页行数；
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
    <td><?php echo mysql_result($query,$i,biaoti);?></td><td><?php echo mysql_result($query,$i,jiezhiriqi);?></td><td><?php echo mysql_result($query,$i,yusuanqijia);?></td><td><a href="<?php echo mysql_result($query,$i,fujian);?>" target='_blank'>下载</a></td><td><?php echo mysql_result($query,$i,faburen);?></td>
    <td width="120" align="center"><?php echo mysql_result($query,$i,"addtime");?></td>
    <td width="90" align="center"><a href="del.php?id=<?php echo mysql_result($query,$i,"id");?>&tablename=zhaobiaoxinxi" onclick="return confirm('真的要删除？')">删除</a> <a href="zhaobiaoxinxi_updt.php?id=<?php echo mysql_result($query,$i,"id");?>">修改</a> <a href="zhaobiaoxinxidetail.php?id=<?php echo mysql_result($query,$i,"id");?>" target="_blank">详细</a></td>
  </tr>
  	<?php
	}
}
?>
</table>
<?php //yougongzitongji?>
<p>以上数据共<?php echo $rowscount;?>条</p>
<p align="center"><a href="zhaobiaoxinxi_list.php?pagecurrent=1">首页</a>, <a href="zhaobiaoxinxi_list.php?pagecurrent=<?php echo $pagecurrent-1;?>">前一页</a> ,<a href="zhaobiaoxinxi_list.php?pagecurrent=<?php echo $pagecurrent+1;?>">后一页</a>, <a href="zhaobiaoxinxi_list.php?pagecurrent=<?php echo $pagecount;?>">末页</a>, 当前第<?php echo $pagecurrent;?>页,共<?php echo $pagecount;?>页 </p>

<p>&nbsp; </p>

</body>
</html>

