<?php 
include_once 'conn.php';
header("Content-Type: application/vnd.ms-execl");   
header("Content-Disposition: attachment; filename=招标信息.xls");   
header("Pragma: no-cache");   
header("Expires: 0");  
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>招标信息</title>
</head>

<body>

<p>已有招标信息列表：</p>
<table width="100%" border="1" align="center" cellpadding="3" cellspacing="1" bordercolor="#00FFFF" style="border-collapse:collapse">  
  <tr>
    <td width="25" bgcolor="#CCFFFF">序号</td>
    <td bgcolor='#CCFFFF'>标题</td><td bgcolor='#CCFFFF'>截止日期</td><td bgcolor='#CCFFFF'>预算起价</td><td bgcolor='#CCFFFF'>附件</td><td bgcolor='#CCFFFF'>发布人</td>
    <td width="120" align="center" bgcolor="#CCFFFF">添加时间</td>
  </tr>
  <?php 
    $sql="select * from zhaobiaoxinxi order by id desc";
  
$query=mysql_query($sql);
  $rowscount=mysql_num_rows($query);
  

for($i=0;$i<$rowscount;$i++)
{
  ?>
  <tr>
    <td width="25"><?php
	echo $i+1;
?></td>
    <td><?php echo mysql_result($query,$i,biaoti);?></td><td><?php echo mysql_result($query,$i,jiezhiriqi);?></td><td><?php echo mysql_result($query,$i,yusuanqijia);?></td><td><a href="<?php echo mysql_result($query,$i,fujian);?>" target='_blank'>下载</a></td><td><?php echo mysql_result($query,$i,faburen);?></td>
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

