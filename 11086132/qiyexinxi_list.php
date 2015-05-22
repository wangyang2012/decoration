<?php 
session_start();
include_once 'conn.php';

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>企业信息</title><script language="javascript" src="js/Calendar.js"></script><link rel="stylesheet" href="css.css" type="text/css">
</head>

<body>

<p>已有企业信息列表：</p>
<form id="form1" name="form1" method="post" action="">
  搜索: 企业编号：<input name="qiyebianhao" type="text" id="qiyebianhao" style='border:solid 1px #000000; color:#666666;width:80px' /> 企业名称：<input name="qiyemingcheng" type="text" id="qiyemingcheng" style='border:solid 1px #000000; color:#666666;width:80px' /> 类别：<span style="color: #FFFFFF">
  <select name='leibie' id='leibie' style='border:solid 1px #000000; color:#666666'>
    <option value="">所有</option>
    <option value="装修公司">装修公司</option>
    <option value="建材公司">建材公司</option>
  </select>
  </span> 联系电话：
  <input name="lianxidianhua" type="text" id="lianxidianhua" style='border:solid 1px #000000; color:#666666;width:80px' />
  <input type="submit" name="Submit" value="查找" style='border:solid 1px #000000; color:#666666' />
</form>
<table width="100%" border="1" align="center" cellpadding="3" cellspacing="1" bordercolor="#33FF33" style="border-collapse:collapse">  
  <tr bgcolor="#99CCFF">
    <td width="25">序号</td>
    <td>企业编号</td>
    <td>企业名称</td>
    <td>类别</td>
    <td>联系电话</td>
    <td>地址</td>
    <td>负责人</td>
    <td>主营业务</td>
    <td>门面照片</td>
    <td>密码</td>
    <td width='80' align='center'>是否审核</td>
    <td width="120" align="center">添加时间</td>
    <td width="70" align="center">操作</td>
  </tr>
  <?php 
    $sql="select * from qiyexinxi where 1=1";
  
if ($_POST["qiyebianhao"]!=""){$nreqqiyebianhao=$_POST["qiyebianhao"];$sql=$sql." and qiyebianhao like '%$nreqqiyebianhao%'";}
if ($_POST["qiyemingcheng"]!=""){$nreqqiyemingcheng=$_POST["qiyemingcheng"];$sql=$sql." and qiyemingcheng like '%$nreqqiyemingcheng%'";}
if ($_POST["leibie"]!=""){$nreqleibie=$_POST["leibie"];$sql=$sql." and leibie like '%$nreqleibie%'";}
if ($_POST["lianxidianhua"]!=""){$nreqlianxidianhua=$_POST["lianxidianhua"];$sql=$sql." and lianxidianhua like '%$nreqlianxidianhua%'";}
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
    <td><?php echo mysql_result($query,$i,qiyebianhao);?></td><td><?php echo mysql_result($query,$i,qiyemingcheng);?></td><td><?php echo mysql_result($query,$i,leibie);?></td><td><?php echo mysql_result($query,$i,lianxidianhua);?></td><td><?php echo mysql_result($query,$i,dizhi);?></td><td><?php echo mysql_result($query,$i,fuzeren);?></td><td><?php echo mysql_result($query,$i,zhuyingyewu);?></td><td width='80'><a href="<?php echo mysql_result($query,$i,menmianzhaopian) ?>" target='_blank'><img src='<?php echo mysql_result($query,$i,menmianzhaopian) ?>' width='80' height='88' border='0'></a></td><td><?php echo mysql_result($query,$i,mima);?></td><td width='80' align='center'><a href="sh.php?id=<?php echo mysql_result($query,$i,"id") ?>&yuan=<?php echo mysql_result($query,$i,"issh")?>&tablename=qiyexinxi" onclick="return confirm('您确定要执行此操作？')"><?php echo mysql_result($query,$i,"issh")?></a></td>
    <td width="120" align="center"><?php echo mysql_result($query,$i,"addtime");?></td>
    <td width="90" align="center"><a href="del.php?id=<?php echo mysql_result($query,$i,"id");?>&tablename=qiyexinxi" onclick="return confirm('真的要删除？')">删除</a> <a href="qiyexinxi_updt.php?id=<?php echo mysql_result($query,$i,"id");?>">修改</a> <a href="qiyexinxidetail.php?id=<?php echo mysql_result($query,$i,"id");?>" target="_blank">详细</a></td>
  </tr>
  	<?php
	}
}
?>
</table>
<?php //yougongzitongji?>
<p>以上数据共<?php echo $rowscount;?>条</p>
<p align="center"><a href="qiyexinxi_list.php?pagecurrent=1">首页</a>, <a href="qiyexinxi_list.php?pagecurrent=<?php echo $pagecurrent-1;?>">前一页</a> ,<a href="qiyexinxi_list.php?pagecurrent=<?php echo $pagecurrent+1;?>">后一页</a>, <a href="qiyexinxi_list.php?pagecurrent=<?php echo $pagecount;?>">末页</a>, 当前第<?php echo $pagecurrent;?>页,共<?php echo $pagecount;?>页 </p>

<p>&nbsp; </p>

</body>
</html>

