<?php 
include_once 'conn.php';
header("Content-Type: application/vnd.ms-execl");   
header("Content-Disposition: attachment; filename=投标记录.xls");   
header("Pragma: no-cache");   
header("Expires: 0");  
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>投标记录</title>
</head>

<body>

<p>已有投标记录列表：</p>
<table width="100%" border="1" align="center" cellpadding="3" cellspacing="1" bordercolor="#66FF00" style="border-collapse:collapse">  
  <tr bgcolor="#66FF66">
    <td width="25">序号</td>
    <td>标题</td>
    <td>发布人</td>
    <td>预算起价</td>
    <td>投标金额</td>
    <td>附件</td>
    <td>投标人</td>
    <td width="120" align="center">添加时间</td>
  </tr>
  <?php 
    $sql="select * from toubiaojilu order by id desc";
  
$query=mysql_query($sql);
  $rowscount=mysql_num_rows($query);
  

for($i=0;$i<$rowscount;$i++)
{
  ?>
  <tr>
    <td width="25"><?php
	echo $i+1;
?></td>
    <td><?php echo mysql_result($query,$i,biaoti);?></td><td><?php echo mysql_result($query,$i,faburen);?></td><td><?php echo mysql_result($query,$i,yusuanqijia);?></td><td><?php echo mysql_result($query,$i,toubiaojine);?></td><td><a href="<?php echo mysql_result($query,$i,fujian);?>" target='_blank'>下载</a></td><td><?php echo mysql_result($query,$i,toubiaoren);?></td>
    <td width="120" align="center"><?php
echo mysql_result($query,$i,"addtime");
?></td>
    
  </tr>
  	<?php
}
?>
</table>

</body>
</html>

